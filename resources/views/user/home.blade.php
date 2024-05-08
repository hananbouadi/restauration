@extends('layout')
@section('content')
<a href="{{route('user.create')}}"><button>sign up</button></a>
<table border="1">
    <tr>
        <th>Name</th>
        <th>email</th>
        <th>password</th>
        <th>address</th>
        <th>Action</th>
    </tr>
    @foreach ($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->password}}</td>
            <td>{{$user->address}}</td>
            <td>
                <a href="{{route('user.show',$user)}}"><button>Show</button></a>
                <a href="{{route('user.edit', $user)}}"><button>Edit</button></a>
                <form action="{{route('user.destroy',$user)}}" method="post">
                  @method('delete')
                  @csrf
                  <button>Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
@endsection