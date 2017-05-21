<!doctype html>
<html lang="en">
<head>
    <title>Rackian Cloud - Register</title>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Ivan de la Beldad Fernandez">

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/bootstrap-material-design.min.css">
    <link rel="stylesheet" href="/css/ripples.min.css">
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>

@if(request()->route()->getName() !== 'register')
    <div id="register">
        <a class="btn btn-raised" href="{{ route('register') }}">REGISTER</a>
    </div>
@endif

<div id="login">
    <a class="btn btn-raised" href="{{ route('login') }}">LOGIN</a>
</div>

<main class="container">
    @yield('main')
</main>

<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/material.min.js"></script>
<script src="/js/ripples.min.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
</body>
</html>
