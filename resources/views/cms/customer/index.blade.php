@extends('cms.parent')

@section('title' , 'Index Customer')

@section('main-title' , 'Index Customer')

@section('sub-title' , 'index customer')

@section('styles')

@endsection

@section('content')

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          {{-- <h3 class="card-title">Data of Customer</h3> --}}
                <a href="{{route('customers.create')}}" type="button" class="btn btn-success">Add New Customer</a>

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
                <th>age</th>
                <th>status</th>
                <th>Setting</th>
              </tr>
            </thead>
            <tbody>

                @foreach ( $customers as $customer )
                <tr>
                    <td>{{ $customer->id }}</td>
                    <td>{{ $customer->user ? $customer->user->firstName : "Null"}}</td>
                    <td>{{ $customer->user ? $customer->user->lastName : "Null"}}</td>

                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->user ? $customer->user->mobile : 'Null' }}</td>
                    <td>
                        <img class="img-circle img-bordered-sm" src="{{asset('/storage/images/customer/'. $customer->user->image)}}" width="50" height="50" alt="User Image">
                    </td>
                    <td>{{ $customer->user ? $customer->user->gender : "Null" }}</td>

                   {{--  <td><a href="{{route('indexArticle',['id'=>$Customer->id])}}"
                    class="btn btn-info">({{$Customer->articles_count}})
                    article/s</a> </td>  --}}

                    <td>{{ $customer->age }}</td>
               

                    <td>{{ $customer->user ? $customer->user->status : "Null" }}</td>

                    <td>

                        <div class="btn-group">
                            <a href="{{route('customers.edit' , $customer->id)}}" type="button" class="btn btn-primary">Edit</a>
                            <a href="#" onclick="performDestroy({{$customer->id}} , this)" type="button" class="btn btn-danger">Delete</a>

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

    confirmDestroy('/cms/Customer/cities/'+id,reference);
  }
</script> --}}

<script>
  function performDestroy(id , reference){
    let url = '/cms/admin/customers/'+id;
    confirmDestroy(url,reference);
  }
</script>
@endsection
