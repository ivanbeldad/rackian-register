<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Ivan de la Beldad Fernandez">
    <title>Rackian Cloud - Register</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-material-design.min.css">
    <link rel="stylesheet" href="css/ripples.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<div id="login">
    <a class="btn btn-raised" href="http://rackian.com">LOGIN</a>
</div>

    <main class="container">
        <div id="register-form" class="well well-lg">
            <form method="post" action="{{ route('register') }}" class="form-horizontal">
                {{ csrf_field() }}
                <fieldset>
                    <legend>Rackian Cloud</legend>
                    <h2>Sign Up</h2>
                    <small></small>
                    <div class="form-group">
                        <label for="username" class="col-md-3 control-label">Username *</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="username" name="username"
                                   value="{{ old('username') }}" required minlength="4" placeholder="Username" autofocus>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email" class="col-md-3 control-label">Email *</label>
                        <div class="col-md-9">
                            <input type="email" class="form-control" id="email" name="email"
                                   value="{{ old('email') }}" required placeholder="example@mail.com">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password" class="col-md-3 control-label">Password *</label>
                        <div class="col-md-9">
                            <input type="password" class="form-control" id="password" name="password"
                                   required minlength="6" placeholder="********">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation" class="col-md-3 control-label">Repeat *</label>
                        <div class="col-md-9">
                            <input type="password" class="form-control" id="password_confirmation"
                                   name="password_confirmation" required minlength="6" placeholder="********">
                        </div>
                    </div>

                    <div class="form-group group-captcha">
                        {!! Recaptcha::render() !!}
                    </div>

                    <div class="form-group">
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary btn-raised">NEXT</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
        @if (count($errors) > 0)
            <div id="errors" class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </main>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/material.min.js"></script>
<script src="js/ripples.min.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
</body>
</html>
