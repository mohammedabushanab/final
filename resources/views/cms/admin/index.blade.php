@extends('cms.parent')

@section('title' , 'Index admin')

@section('main-title' , 'Index admin')

@section('sub-title' , 'index admin')

@section('styles')

@endsection

@section('content')

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          {{-- <h3 class="card-title">Data of admin</h3> --}}
                <a href="{{route('admins.create')}}" type="button" class="btn btn-success">Add New admin</a>

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
                <th>about</th>
                <th>gender</th>
                <th>status</th>
                <th>Setting</th>
              </tr>
            </thead>
            <tbody>

                @foreach ( $admins as $admin )
                <tr>
                    <td>{{ $admin->id }}</td>
                    <td>{{ $admin->user ? $admin->user->firstName : "Null"}}</td>
                    <td>{{ $admin->user ? $admin->user->lastName : "Null"}}</td>

                    <td>{{ $admin->email }}</td>
                    <td>{{ $admin->user ? $admin->user->mobile : 'Null' }}</td>
                    <td>
                      <img class="img-circle img-bordered-sm" src="{{asset('/storage/images/admin/'. $admin->user->image)}}" width="50" height="50" alt="User Image">
                   </td>

                   <td><a href="{{route('indexAbout',['id'=>$admin->id])}}"
                    class="btn btn-info">({{$admin->abouts_count}})
                    abouts/s</a> </td>

                    <td>{{ $admin->user ? $admin->user->gender : "Null" }}</td>
                    <td>{{ $admin->user ? $admin->user->status : "Null" }}</td>

                    <td>

                        <div class="btn-group">
                            <a href="{{route('admins.edit' , $admin->id)}}" type="button" class="btn btn-primary">Edit</a>
                            <a href="#" onclick="performDestroy({{$admin->id}} , this)" type="button" class="btn btn-danger">Delete</a>

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

    confirmDestroy('/cms/admin/cities/'+id,reference);
  }
</script> --}}

<script>
  function performDestroy(id , reference){
    let url = '/cms/admin/admins/'+id;
    confirmDestroy(url,reference);
  }
</script>
@endsection
