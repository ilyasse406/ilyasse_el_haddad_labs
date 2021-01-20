@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

@stop

@section('content')

    <div class="row">

        <div class="col">
            <div class="card shadow p-3  bg-white rounded">
                <div class="container text-center mt-5 ">
                    <span class="badge bg-warning text-dark  shadow text-center">
                        <h1>Editez le profil</h1>
                    </span>
                </div>
                <div class="card-body">
                    <div class="container text-center">

                        <form action="/admin/edituser/{{ $user->id }}/update" method="POST" enctype="multipart/form-data">
                            
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
                            <div class=" pt-5 pr-5 pl-5">
                                <label for="exampleInputEmail1" class="form-label">Nom et prénom</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="name" value="{{ $user->name }}">

                            </div>

                            <div class=" pt-5 pr-5 pl-5">
                                <label for="exampleInputEmail1" class="form-label">Adresse e-mail</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="email" value="{{ $user->email }}">
                                <div id="emailHelp" class="form-text">Nous ne partagerons jamais votre adresse e-mail.</div>
                            </div>
                            {{-- <div class="mb-3 pt-5 pr-5 pl-5">
                                <label for="exampleInputPassword1" class="form-label">Nouveau mot de passe</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" name="password" value="{{ $user->password }}">
                            </div>

                            
                            <div class="form-group">
                                <label for="exampleInputPassword1">Veuillez importer une image</label>
                                <input type="file"  id="exampleInputPassword1"
                                    name="profile_photo_path" value="{{ $user->profile_photo_path }}">
                            </div> --}}

                            <div class="form-group">

                                <select class="form-control" name="role_id">
                                    @foreach ($roles as $i)
                        
                                        <option value="{{ $i->id }}">{{ $i->name }}</option>
                        
                                    @endforeach
                                </select>
                            </div>



                            {{-- <div class="form-group">

                                <select class="form-control" name="role_id"> --}}
                                    {{-- @foreach ($roles as $i)

                                        <option value="{{ $i->id }}">{{ $i->name }}</option>

                                    @endforeach --}}
                                    {{-- </select>
                            </div> --}}

                            <button type="submit" class="btn btn-primary">appliquer vos modifications</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@stop