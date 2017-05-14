<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use Illuminate\Hashing\BcryptHasher;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class RegisterController extends Controller
{

    public function get()
    {
        return view('register');
    }

    public function activate($code)
    {
        $username = decrypt($code);
        $user = User::all()->get('username', $username);

        if (!$user)
            return Response('Error', 404);

        if ($user->is_active)
            return Response('This user has been activated already', 200);

        $user->is_active = true;
        $user->save();
        return Response('User active successfully', 200);
    }

    public function post(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|unique:authentication_user|min:4|max:255',
            'email' => 'required|email|unique:authentication_user',
            'password' => 'required|min:6|max:255|confirmed',
        ]);
        $user = new User([
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'is_active' => false,
            'is_staff' => false,
            'is_superuser' => false,
            'space' => 0,
            'date_joined' => Carbon::now(),
        ]);
        if ($user->save()) {
            $this->sendMail($user);
            return Response('Form sent');
        } else {
            return Response('There was some error', 400);
        }
    }

    /**
     * @param User $user
     * @return boolean
     */
    private function sendMail($user)
    {
        $mail = new PHPMailer;

        //$mail->SMTPDebug = 3;                               // Enable verbose debug output

        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.zoho.eu';                         // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'info@rackian.com';                 // SMTP username
        $mail->Password = 'Rackian.01';                       // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        $mail->setFrom('info@rackian.com', 'Rackian Cloud');
        $mail->addAddress($user->email, $user->username);     // Add a recipient
        $mail->addReplyTo('info@rackian.com', 'Rackian Cloud');

        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = 'Rackian Cloud confirmation email';
        $mail->Body    = 'Click <a href="http://register.rackian.com/activate/'.crypt($user->username).'">here</a> 
            to active your user';
        $mail->AltBody = 'Open http://register.rackian.com/activate/'.crypt($user->username).' to active your user.';

        return $mail->send();
    }
}
