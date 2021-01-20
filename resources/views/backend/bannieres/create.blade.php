@extends('adminlte::page')

@section('title', 'AdminLTE')



@section('content')
<div class="container">
    <form action="{{ route("banniere.store") }}" method="POST" enctype="multipart/form-data">
        
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
            <label for="exampleInputPassword1">path</label>
            <input type="file"  id="exampleInputPassword1"
                name="path">
        </div>
        
    
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@stop