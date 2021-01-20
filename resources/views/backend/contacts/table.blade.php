@extends('adminlte::page')

@section('title', 'AdminLTE')



@section('content')


   <div class="container">
       <div class="text-center mb-5">
           <h1>Contact</h1>
           <a href="{{ route("contact.create") }}" class="btn btn-primary">Create</a>
       </div>
       <table class="table table-success table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">description</th>
            <th scope="col">title2</th>
            <th scope="col">adresse</th>
            <th scope="col">numero</th>
            <th scope="col">email</th>
            <th scope="col">Button</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $e)
                
            <tr>
                <th scope="row">{{ $e->id }}</th>
                <td>{{ $e->title }}</td>
                <td>{{ $e->description }}</td>
                <td>{{ $e->title2 }}</td>
                <td>{{ $e->adresse }}</td>
                <td>{{ $e->numero }}</td>
                <td>{{ $e->email }}</td>
                <td>{{ $e->button }}</td>
                
                
                
                <td class="d-flex">
                    <a href="/admin/contact/{{ $e->id }}/edit" class="btn btn-success">Edit</a>
                    <form action="/admin/contact/{{ $e->id }}" method="post">
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