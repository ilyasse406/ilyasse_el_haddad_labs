@extends('adminlte::page')

@section('title', 'AdminLTE')



@section('content')
<div class="container">
    <form action="/admin/contact/{{ $contact->id }}" method="POST">
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
                <input type="text" class="form-control" id="exampleInputPassword1" name="title" value="{{ $contact->title }}">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Déscription</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="description" value="{{ $contact->description }}">
            </div>
            
            <div class="form-group">
                <label for="exampleInputPassword1">Title 2</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="title2" value="{{ $contact->title2 }}">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Adresse</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="adresse" value="{{ $contact->adresse }}">
            </div>
            
            <div class="form-group">
                <label for="exampleInputPassword1">Numero</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="numero" value="{{ $contact->numero }}">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Email</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="email" value="{{ $contact->email }}">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Button</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="button" value="{{ $contact->button }}">
            </div>
            
        

        

        
        
    
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@stop