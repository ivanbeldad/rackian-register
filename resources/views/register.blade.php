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

    <main class="container">
        <div id="register-form" class="well well-lg">
            <form method="post" action="{{ route('register') }}">
                {{ csrf_field() }}
                <fieldset>
                    <legend>Rackian Cloud</legend>
                    <h2>Sign Up</h2>
                    <small></small>

                    <div class="form-group label-floating">
                        <label for="username" class="control-label">Username *</label>
                        <input type="text" class="form-control" id="username" name="username"
                               value="{{ old('username') }}" required minlength="4" autofocus>
                    </div>

                    <div class="form-group label-floating">
                        <label for="email" class="control-label">Email *</label>
                        <input type="email" class="form-control" id="email" name="email"
                               value="{{ old('email') }}" required>
                    </div>

                    <div class="form-group label-floating">
                        <label for="password" class="control-label">Password *</label>
                        <input type="password" class="form-control" id="password" name="password" required minlength="6">
                    </div>
                    <div class="form-group label-floating">
                        <label for="password_confirmation" class="control-label">Repeat Password *</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required minlength="6">
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
</body>
</html>
