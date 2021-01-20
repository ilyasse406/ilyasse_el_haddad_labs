@extends('adminlte::page')

@section('title', 'AdminLTE')



@section('content')
<div class="container">
    <form action="{{ route("article.store") }}" method="POST" enctype="multipart/form-data">
        
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
            <label >path</label>
            <input type="file"  
                name="path">
        </div>


        <div class="form-group">
            <label >Veuillez introduire votre titre</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="title">
        </div>
        <div class="form-group">
            <label >Veuillez introduire votre description</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="description">
        </div>
        <div class="form-group d-flex flex-column">
            <label >Veuillez choisir la catégorie</label>
            <select class="form-select" multiple  name="categorie[]" >

                @foreach ($categories as $e)
                <option value="{{ $e->id }}" {{ in_array($e->id, old('categorie') ?: []) ? 'selected' : '' }}>{{ $e->name }}</option>
                @endforeach
                
            </select>
        </div>
        <div class="form-group d-flex flex-column">
            <label >Veuillez choisir le tag</label>
            <select class="form-select" multiple name="tag[]" >

                @foreach ($tags as $e)
                <option value="{{ $e->id }}" {{ in_array($e->id, old('tag') ?: []) ? 'selected' : '' }}>{{ $e->name }}</option>
                @endforeach
                
            </select>
        </div>

        <div class="form-group">

            <select class="form-control" name="verification_id" style="display: none">
                
    
                    <option value="{{ $verifications[1]->id }}">{{ $verifications[1]->name }}</option>
    
                
            </select>
        </div>
        
    
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@stop