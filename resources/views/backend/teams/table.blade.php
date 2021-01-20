@extends('adminlte::page')

@section('title', 'AdminLTE')



@section('content')
   <div class="container">
       <div class="text-center mb-5">
           <h1>Nos membres</h1>
           <a href="{{ route("team.create") }}" class="btn btn-primary">Create</a>
       </div>
       <table class="table table-success table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Poste</th>
            <th scope="col">Path</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($teams as $e)
                
            <tr>
                <th scope="row">{{ $e->id }}</th>
                <td>{{ $e->name }}</td>
                <td>{{ $e->title }}</td>
                <td><img src="{{ asset("img/$e->path") }}" alt="" class="img-fluid"></td>
                
                
                <td class="d-flex">
                    <a href="/admin/team/{{ $e->id }}/edit" class="btn btn-success">Edit</a>
                    <form action="/admin/team/{{ $e->id }}" method="post">
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

@endsection