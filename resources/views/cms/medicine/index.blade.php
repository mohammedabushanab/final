@extends('cms.parent')

@section('title' , 'Index medicine')

@section('main-title' , 'Index medicine')

@section('sub-title' , 'index medicine')

@section('styles')

@endsection

@section('content')

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data of medicine</h3>
                <a href="{{route('createMedicine' , $id)}}" type="button" class="btn btn-success">Add New medicine</a>

          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
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
                  <th>medicine Name</th>
                  <th>image</th>
                  <th>code</th>
                  <th>ExpirationDate</th>
                  <th>Description</th>

                  <th>Setting</th>
                </tr>
              </thead>
              <tbody>

                @foreach ( $medicines as $medicine )
                <tr>
                    <td>{{ $medicine->id }}</td>
                    <td>{{ $medicine->name }}</td>
                    <td>
                        <img class="img-circle img-bordered-sm" src="{{asset('/storage/images/medicine/'. $medicine->image)}}" width="50" height="50" alt="User Image">
                     </td>
                    <td>{{ $medicine->ExpirationDate }}</td>
                    <td>{{ $medicine->code }}</td>
                    <td>{{ $medicine->description }}</td>

                    <td>
                        <div class="btn-group">
                            {{--  <a href="{{route('medicines.edit' , $medicine->id)}}" type="button" class="btn btn-primary">Edit</a>  --}}
                            <a href="#" onclick="performDestroy({{$medicine->id}} , this)" type="button" class="btn btn-danger">Delete</a>

                          </div>
                    </td>
                    {{-- <td>
                        <div class="btn-group">
                            <a href="{{route('medicines.edit' , $medicine->id)}}" type="button" class="btn btn-primary">Edit</a>
                            <a href="#" onclick="performDestroy({{$medicine->id}} , this)" type="button" class="btn btn-danger">Delete</a>

                          </div>
                    </td> --}}
                  </tr>
                @endforeach



            </tbody>
          </table>
        </div>

        {{ $medicines->links() }}
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
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
    let url = '/cms/admin/medicines/'+id;
    confirmDestroy(url,reference);
  }
</script>
@endsection
