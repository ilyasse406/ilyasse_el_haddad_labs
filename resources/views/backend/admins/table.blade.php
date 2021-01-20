@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

@stop

@section('content')

<div class="container">
    <div class="text-center mb-5">
        <h1>Modifiez les membres</h1>
        {{-- <a href="{{ route("user.create") }}" class="btn btn-primary">Create</a> --}}
    </div>
    <table class="table table-success table-striped">
     <thead>
       <tr>
         <th scope="col">ID</th>
         <th scope="col">Name</th>
         <th scope="col">E-mail</th>
         <th scope="col">Role</th>
         <th scope="col">Photo de profile</th>
         <th scope="col">Action</th>
       </tr>
     </thead>
     <tbody>
         @foreach ($user as $e)
             
         <tr>
             <th scope="row">{{ $e->id }}</th>
             <td> {{ $e->name }}</td>
             <td>{{ $e->email }}</td>
             <td>{{ $e->roles->name }}</td>
             <td><img src="{{ asset("img/$e->profile_photo_path") }}" alt=""></td>
             
             
             <td class="d-flex">
                 <a href="/admin/edituser/{{ $e->id }}/edit" class="btn btn-success">Edit</a>
                 {{-- <form action="/admin/admin/{{ $e->id }}" method="post">
                     @csrf
                     @method("delete")
                     <button class="btn btn-danger ml-2" type="submit">Delete</button>
             
                 </form> --}}
             </td>
             
             
         </tr>
         @endforeach
       
     </tbody>
 </table>
 


</div>


@stop