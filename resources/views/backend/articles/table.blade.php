@extends('adminlte::page')

@section('title', 'AdminLTE')



@section('content')
   <div class="container">
       <div class="text-center mb-5">
           <h1>Articles</h1>
           <a href="{{ route("article.create") }}" class="btn btn-primary">Create</a>
       </div>
       <table class="table table-success table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Image</th>
            <th scope="col">Titre de l'article</th>
            <th scope="col">Description</th>
            <th scope="col">date</th>
            <th scope="col">name</th>
            
            <th scope="col">catégorie</th>
            <th scope="col">tag</th>
            <th scope="col">Statut</th>
            <th scope="col">Action</th>

            @can('viewAny', App\Models\article::class)
            <th scope="col">Verify</th>
            @endcan

          </tr>
        </thead>
        <tbody>
            @foreach ($articles as $e)
                
            <tr>
                <th scope="row">{{ $e->id }}</th>
                <td><img src="{{ asset("img/$e->path") }}" alt="" class="img-fluid"></td>
                <td>{{ $e->title }}</td>
                <td>{{ $e->description }}</td>
                <td>{{ $e->created_at->format('d/M/Y') }}</td>
                
                <td>{{ $e->users->name }}</td>
                <td>
                    @foreach ($e->categories as $categorie)
                    {{ $categorie->name }}
                    @endforeach

                </td>

                <td>
                    @foreach ($e->tags as $tag)
                        {{ $tag->name }}
                    @endforeach
                </td>

                <td>
                    @if ($e->verifications->id === 1)
                        <span style="color: green; font-weight: bolder">{{ $e->verifications->name }}</span>
                    @else
                        <span style="color: red; font-weight: bolder">{{ $e->verifications->name }}</span>
                    @endif
                    
                </td>
                

                
                
                
                <td class="d-flex">
                    <a href="/admin/article/{{ $e->id }}/edit" class="btn btn-success">Edit</a>
                    <form action="/admin/article/{{ $e->id }}" method="post">
                        @csrf
                        @method("delete")
                        <button class="btn btn-danger ml-2" type="submit">Delete</button>
                
                    </form>
                </td>

                @can('viewAny', App\Models\article::class)

                <td>
                    <form action="/send-article/{{ $e->id }}" method="post">
                        @csrf
                        <div class="form-group d-flex">

                            <select class="form-control" name="verification_id" style="width: 10rem">
                                
                                
                                @foreach ($verifications as $i)
                                
                                <option value="{{ $i->id }}">{{ $i->name }}</option>
                                    
                                @endforeach
                    
                                
                            </select>
                            <button class="btn btn-warning ml-2" type="submit">définir</button>
                        </div>
                    </form>


                </td>
                @endcan

                
                
            </tr>
            @endforeach
          
        </tbody>
    </table>
    


   </div>


   
@stop