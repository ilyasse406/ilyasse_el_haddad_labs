@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

@stop

@section('content')

<div class="container">
    <div class="text-center mb-5">
    <h1>Modifiez la section promotion</h1>
        <a href="{{ route("promotion.create") }}" class="btn btn-primary">Create</a>
    </div>
    <table class="table table-success table-striped">
     <thead>
       <tr>
         <th scope="col">ID</th>
         <th scope="col">Title</th>
         <th scope="col">Description</th>
         <th scope="col">Button</th>
         <th scope="col">Action</th>
       </tr>
     </thead>
     <tbody>
         @foreach ($promotions as $e)
             
         <tr>
             <th scope="row">{{ $e->id }}</th>
             <td>{{ $e->title }}</td>
             <td>{{ $e->description }}</td>
             <td>{{ $e->button }}</td>
             
             
             <td class="d-flex">
                 <a href="/admin/promotion/{{ $e->id }}/edit" class="btn btn-success">Edit</a>
                 <form action="/admin/promotion/{{ $e->id }}" method="post">
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