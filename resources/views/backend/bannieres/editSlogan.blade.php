@extends('adminlte::page')

@section('title', 'AdminLTE')



@section('content')
<div class="container">
    <form action="/admin/slogan/{{ $slogan->id }}" method="POST" >
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
                <label for="exampleInputPassword1">Veuillez introduire votre slogan</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="slogan" value="{{ $slogan->slogan }}">
            </div>
            

        

        
        
    
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@stop