@extends('adminlte::page')

@section('title', 'AdminLTE')



@section('content')
   <div class="container">
       <div class="text-center mb-5">
           <h1>Map</h1>
           {{-- <a href="{{ route("map.create") }}" class="btn btn-primary">Create</a> --}}
       </div>
       <table class="table table-success table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($maps as $e)
                
            <tr>
                <th scope="row">{{ $e->id }}</th>
                <td>{{ $e->name }}</td>
                
                
                
                <td class="d-flex">

                    <a href="/admin/map/{{ $e->id }}/edit" class="btn btn-success">Edit</a>

                    {{-- <form action="/admin/team/{{ $e->id }}" method="post">
                        @csrf
                        @method("delete")
                        <button class="btn btn-danger ml-2" type="submit">Delete</button>
                
                    </form> --}}
                </td>
                
                
            </tr>


            @endforeach
          
        </tbody>
    </table>
    


   </div>

   <div class="container">
       <!-- Google map -->
       @foreach ($maps as $e)
           
       <div class="mapouter text-center"><div class="gmap_canvas"><iframe width="700px" height="700px" id="gmap_canvas" src="https://maps.google.com/maps?q={{ $e->name }}&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br><style>.mapouter{position:relative;text-align:right;height:700px;width:700px;}</style><a href="https://google-map-generator.com"></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:700px;width:;}</style></div></div>
      </div>
       @endforeach

    </div>

    

@endsection