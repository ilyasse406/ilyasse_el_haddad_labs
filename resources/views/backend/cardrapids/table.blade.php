@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

@stop

@section('content')

<div class="container">
    <div class="text-center mb-5">
        <h1>Modifiez les cartes services</h1>
        <a href="{{ route("cardrapid.create") }}" class="btn btn-primary">Create</a>
    </div>
    <table class="table table-success table-striped">
     <thead>
       <tr>
         <th scope="col">ID</th>
         <th scope="col">Font</th>
         <th scope="col">title</th>
         <th scope="col">description</th>
         <th scope="col">Action</th>
       </tr>
     </thead>
     <tbody>
         @foreach ($cardrapids as $e)
             
         <tr>
             <th scope="row">{{ $e->id }}</th>
             <td> <i class="{{ $e->font }}" style="font-family: 'FontAwesome'"></i></td>
             <td>{{ $e->title }}</td>
             <td>{{ $e->description }}</td>
             
             
             <td class="d-flex">
                 <a href="/admin/cardrapid/{{ $e->id }}/edit" class="btn btn-success">Edit</a>
                 <form action="/admin/cardrapid/{{ $e->id }}" method="post">
                     @csrf
                     @method("delete")
                     <button class="btn btn-danger ml-2" type="submit">Delete</button>
             
                 </form>
             </td>
             
             
         </tr>
         @endforeach
       
     </tbody>
 </table>
 


</div>


@stop