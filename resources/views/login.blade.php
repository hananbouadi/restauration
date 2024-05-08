@extends('layout')
@section('content')
    
<h1>Login</h1>
    
@if(session('error'))
    <p style="color: red;">{{ session('error') }}</p>
@endif

<form action="{{ route('user.index') }}" method="POST">
    @csrf
    <label for="username">Username:</label><br>
    <input type="text" id="username" name="name" required><br>
    <label for="email">email:</label>
    <input type="text" name="email" >
    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password" required><br><br>
    <label for="address"></label>
    <input type="text" name="address" >
    <button type="submit">Login</button>
</form>
@endsection