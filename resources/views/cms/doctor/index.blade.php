@extends('cms.parent')

@section('title' , 'Index doctor')

@section('main-title' , 'Index doctor')

@section('sub-title' , 'index doctor')

@section('styles')

@endsection

@section('content')

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          {{-- <h3 class="card-title">Data of doctor</h3> --}}
                <a href="{{route('doctors.create')}}" type="button" class="btn btn-success">Add New doctor</a>

          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

              <div class="input-group-append">
                <button type="submit" class="btn btn-default">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>image</th>
                <th>gender</th>
                <th>status</th>
                <th>Setting</th>
              </tr>
            </thead>
            <tbody>

                @foreach ( $doctors as $doctor )
                <tr>
                    <td>{{ $doctor->id }}</td>
                    <td>{{ $doctor->user ? $doctor->user->firstName : "Null"}}</td>
                    <td>{{ $doctor->user ? $doctor->user->lastName : "Null"}}</td>

                    <td>{{ $doctor->email }}</td>
                    <td>{{ $doctor->user ? $doctor->user->mobile : 'Null' }}</td>

                    <td>
                        <img class="img-circle img-bordered-sm" src="{{asset('/storage/images/doctor/'. $doctor->user->image)}}" width="50" height="50" alt="User Image">
                    </td>

                   {{--  <td><a href="{{route('indexArticle',['id'=>$doctor->id])}}"
                    class="btn btn-info">({{$doctor->articles_count}})
                    article/s</a> </td>  --}}

                <td>
                    <td>{{ $doctor->user ? $doctor->user->gender : "Null" }}</td>
                    <td>{{ $doctor->user ? $doctor->user->status : "Null" }}</td>

                    <td>

                        <div class="btn-group">
                            <a href="{{route('doctors.edit' , $doctor->id)}}" type="button" class="btn btn-primary">Edit</a>
                            <a href="#" onclick="performDestroy({{$doctor->id}} , this)" type="button" class="btn btn-danger">Delete</a>

                            {{-- <button type="button" class="btn btn-success">View</button> --}}
                          </div>
                    </td>
                  </tr>
                @endforeach



            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
@endsection

@section('scripts')

{{-- <script>
  function performDestroy(id , reference){

    confirmDestroy('/cms/doctor/cities/'+id,reference);
  }
</script> --}}

<script>
  function performDestroy(id , reference){
    let url = '/cms/admin/doctors/'+id;
    confirmDestroy(url,reference);
  }
</script>
@endsection
