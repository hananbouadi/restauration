@extends('layout')
@section('content')
<h1>Dashboard</h1>
    
@if(session('error'))
    <p style="color: red;">{{ session('error') }}</p>
@endif

<p>Welcome, {{ session('username') }}!</p>
<a href="{{route('admin.create')}}"></a>
    <table>
        <tr>
            <th>Name</th>
            <th>description</th>
            <th>price</th>
            <th>image</th>
            <th>Action</th>
        </tr>
        {{-- @foreach ($recipes as $recipe)
            <tr>
                <td>{{$recipe->$name}}</td>
                <td>{{$recipe->$description}}</td>
                <td>{{$recipe->$price}}</td>
                <td>{{$recipe->$image}}</td>
                <td>
                    <button>Show</button>
                    <button>Edit</button>
                    <button>Delete</button>
                </td>
            </tr>
        @endforeach --}}
    </table>
@endsection