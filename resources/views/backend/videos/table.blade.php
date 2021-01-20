@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

@stop

@section('content')

<div class="container">
    <div class="text-center mb-5">
        <h1>Modifiez la Video</h1>
        {{-- <a href="{{ route("navbar.create") }}" class="btn btn-primary">Create</a> --}}
    </div>
    <table class="table table-success table-striped">
     <thead>
       <tr>
         <th scope="col">ID</th>
         <th scope="col">Lien de l'image</th>
         <th scope="col">Link</th>
         <th scope="col">Action</th>
       </tr>
     </thead>
     <tbody>
         @foreach ($videos as $e)
             
         <tr>
             <th scope="row">{{ $e->id }}</th>
             <td><img src="{{ asset("img/$e->path") }}" alt="" class="img-fluid"></td>
             <td>{{ $e->link }}</td>
             
             
             <td class="d-flex">
                 <a href="/admin/video/{{ $e->id }}/edit" class="btn btn-success">Edit</a>
                 {{-- <form action="/admin/navbar/{{ $e->id }}" method="post">
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