@extends('base')

@section('main')
    <div id="register-form" class="well well-lg">
        <legend>Rackian Cloud</legend>
        <h2 style="color: #F44336;">Ups! There was some error!</h2>
        <p>We don't know what was you trying, but it fires an error!</p>
        <p>If you haven't registered yet do it <a href="{{ route('register') }}">here</a></p>
        <p>If you have already registered, log in <a href="{{ route('login') }}">here</a></p>
    </div>
@endsection
