@extends('base')

@section('main')
    <div id="register-form" class="well well-lg">
        <legend>Rackian Cloud</legend>
        <h2 style="color: #4cae4c;">Your account has been activated successfully!</h2>
        <p>You're ready to <a href="{{ route('login') }}">Log In</a>!</p>
    </div>
@endsection
