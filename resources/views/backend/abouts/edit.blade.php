@extends('adminlte::page')

@section('title', 'AdminLTE')



@section('content')
<div class="container">
    <form action="/admin/about/{{ $about->id }}" method="POST">
        @method("put")
        @csrf
    
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            
            
            <div class="form-group">
                <label for="exampleInputPassword1">Titlle</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="title" value="{{ $about->title }}">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Déscription 1</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="description1" value="{{ $about->description1 }}">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Déscription 2</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="description2" value="{{ $about->description2 }}">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Browse</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="button" value="{{ $about->button }}">
            </div>
            
        

        

        
        
    
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@stop