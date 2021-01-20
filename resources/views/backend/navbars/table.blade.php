@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

@stop

@section('content')

<div class="container">
    <div class="text-center mb-5">
        <h1>Modifiez la barre de navigation</h1>
        {{-- <a href="{{ route("navbar.create") }}" class="btn btn-primary">Create</a> --}}
    </div>
    <table class="table table-success table-striped">
     <thead>
       <tr>
         <th scope="col">ID</th>
         <th scope="col">Lien 1</th>
         <th scope="col">Lien 2</th>
         <th scope="col">Lien 3</th>
         <th scope="col">Lien 4</th>
         <th scope="col">Lien de l'image</th>
         <th scope="col">Action</th>
       </tr>
     </thead>
     <tbody>
         @foreach ($navbars as $e)
             
         <tr>
             <th scope="row">{{ $e->id }}</th>
             <td>{{ $e->lien1 }}</td>
             <td>{{ $e->lien2 }}</td>
             <td>{{ $e->lien3 }}</td>
             <td>{{ $e->lien4 }}</td>
             <td><img src="{{ asset("img/$e->path") }}" alt="" class="img-fluid"></td>
             
             
             <td class="d-flex">
                 <a href="/admin/navbar/{{ $e->id }}/edit" class="btn btn-success">Edit</a>
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