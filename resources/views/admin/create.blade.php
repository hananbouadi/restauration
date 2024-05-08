@extends('layout')
@section('content')
    <form action="{{route('admin.store')}}" enctype="multipart/form-data" method="get">
         @csrf
         <input type="text" name="name" placeholder="name">
         <input type="text" name="description" placeholder="description">
         <input type="text" name="price" placeholder="price">
         <input type="file" name="image" placeholder="image">
         <button>confirm</button>
    </form>
@endsection