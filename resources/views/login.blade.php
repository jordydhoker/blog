@extends('layouts.master')

@section('content')
    <main class="login">
        <div>
            <form action="{{ route('login') }}" method="POST" id="loginForm">
                {{ csrf_field() }}
                <h1>Email:</h1>
                <input type="text" name="email">
                <h1>Password:</h1>
                <input type="password" name="password">
                <input type="submit" value="Inloggen" class="submit">
            </form>
        </div>
    </main>
@endsection