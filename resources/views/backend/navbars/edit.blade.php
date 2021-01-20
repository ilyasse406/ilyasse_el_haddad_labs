@extends('adminlte::page')

@section('title', 'AdminLTE')



@section('content')
<div class="container">
    <form action="/admin/navbar/{{ $navbar->id }}" method="POST" enctype="multipart/form-data">
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
                <label for="exampleInputPassword1">Lien 1</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="lien1" value="{{ $navbar->lien1 }}">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Lien 2</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="lien2" value="{{ $navbar->lien2 }}">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Lien 3</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="lien3" value="{{ $navbar->lien3 }}">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Lien 4</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="lien4" value="{{ $navbar->lien4 }}">
            </div>
            
            <div class="form-group">
                <label for="exampleInputPassword1">path</label>
                <input type="file"  id="exampleInputPassword1"
                    name="path" value="{{ $navbar->path }}">
            </div>
        

        

        
        
    
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@stop