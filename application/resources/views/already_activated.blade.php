@extends('base')

@section('main')
    <div id="register-form" class="well well-lg">
        <legend>Rackian Cloud</legend>
        <h2 style="color: #4cae4c;">This account has been activated already!</h2>
        <p>You can <a href="{{ route('login') }}">Log In</a> if you have an account.</p>
    </div>
@endsection
