@extends('layout')
@section('content')
    <form action="{{route('user.update',$user)}}"  method="post">
        @method('put')
        @csrf
         <input type="text" name="name" placeholder="name" value="{{$user->name}}">
         <input type="text" name="email" placeholder="email" value="{{$user->email}}">
         <input type="password" name="password" placeholder="password" value="{{$user->password}}">
         <input type="text" name="address" placeholder="address" value="{{$user->address}}">
         <button>edit</button>
    </form>
@endsection