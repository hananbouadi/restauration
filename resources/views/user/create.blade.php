@extends('layout')
@section('content')
    <form action="{{route('user.store')}}"  method="post">
         @csrf
         <input type="text" name="name" placeholder="name">
         <input type="text" name="email" placeholder="email">
         <input type="password" name="password" placeholder="password">
         <input type="text" name="address" placeholder="address">
         <button>confirm</button>
    </form>
@endsection