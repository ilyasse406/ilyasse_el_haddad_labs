@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark text-center">Information de votre profil</h1>
@stop

@section('content')

    <div class="row">
        <div class="col-4 ">
            <div class="card shadow p-3 mb-5 bg-white rounded">
                <div class="card-body text-center">
                    <div class="d-flex flex-column">
                        <span class="badge bg-warning text-dark mb-5 shadow">
                            <h1> Photo de profil</h1>
                        </span>
                        
                        
                        <div>
                            <img src="  img/{{ Auth::user()->profile_photo_path }} " alt="" class="img-fluid mb-5 img-thumbnail">

                        </div>


                    </div>

                </div>
            </div>
        </div>
        <div class="col-8">
            <div class="card shadow p-3  bg-white rounded">
                <div class="container text-center mt-5 ">
                    <span class="badge bg-warning text-dark  shadow text-center">
                        <h1>Editez votre profil</h1>
                    </span>
                </div>
                <div class="card-body">
                    <div class="container text-center">

                        <form>
                            <div class=" pt-5 pr-5 pl-5">
                                <label for="exampleInputEmail1" class="form-label">Nom et prénom</label>
                                

                                <input class="form-control text-center" type="text" placeholder="{{ Auth::user()->name }}"
                                    aria-label="Disabled input example" disabled>
                                

                            </div>
                            <div class=" pt-5 pr-5 pl-5 mb-3">
                                <label for="exampleInputEmail1" class="form-label">Adresse e-mail</label>
                                <input class="form-control text-center" type="email" placeholder="{{ Auth::user()->email }}"
                                    aria-label="Disabled input example" disabled>
                            </div>
                            

                            {{-- <div class="form-group">

                                <select class="form-control" name="role_id"> --}}
                                    {{-- @foreach ($roles as $i)

                                        <option value="{{ $i->id }}">{{ $i->name }}</option>

                                    @endforeach --}}
                                    {{-- </select>
                            </div> --}}

                            

                            <a   href="/admin/user/{{Auth::user()->id}}/edit" class="btn btn-primary">modifier votre profil</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@stop
