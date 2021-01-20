@extends('adminlte::page')

@section('title', 'AdminLTE')



@section('content')
<div class="container">
    <form action="/admin/promotion/{{ $promotion->id }}" method="POST">
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
                <input type="text" class="form-control" id="exampleInputPassword1" name="title" value="{{ $promotion->title }}">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Déscription</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="description" value="{{ $promotion->description }}">
            </div>
            
            <div class="form-group">
                <label for="exampleInputPassword1">Button</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="button" value="{{ $promotion->button }}">
            </div>
            
        

        

        
        
    
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@stop