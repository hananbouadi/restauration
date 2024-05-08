@extends('layout')
@section('content')
<p>{{$user->name}}</p>
<p>{{$user->email}}</p>
<p>{{$user->password}}</p>
<p>{{$user->address}}</p>
    
@endsection