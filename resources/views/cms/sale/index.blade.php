@extends('cms.parent')

@section('title' , 'Index sale')

@section('main-title' , 'Index sale')

@section('sub-title' , 'index sale')

@section('styles')

@endsection

@section('content')

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          {{-- <h3 class="card-title">Data of sales</h3> --}}
                <a href="{{route('sales.create')}}" type="button" class="btn btn-success">Add New sales</a>

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
                <th>price</th>
                <th>date</th>
                <th>Setting</th>
              </tr>
            </thead>
            <tbody>

                @foreach ( $sales as $sale )
                <tr>
                    <td>{{ $sale->id }}</td>
                    <td>{{ $sale->price}}</td>
                    <td>{{ $sale->date}}</td>

                    {{-- <td>{{ $sales->email }}</td>
                    <td>{{ $sales->user ? $sales->user->mobile : 'Null' }}</td>
                    <td>
                      <img class="img-circle img-bordered-sm" src="{{asset('/storage/images/sales/'. $sales->user->image)}}" width="50" height="50" alt="User Image">
                   </td>
                    <td>{{ $sales->user ? $sales->user->gender : "Null" }}</td>
                    <td>{{ $sales->user ? $sales->user->status : "Null" }}</td>

                    <td> --}}
                    
                <td>
                        <div class="btn-group">
                            <a href="{{route('sales.edit' , $sale->id)}}" type="button" class="btn btn-primary">Edit</a>
                            <a href="#" onclick="performDestroy({{$sale->id}} , this)" type="button" class="btn btn-danger">Delete</a>

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

    confirmDestroy('/cms/sales/cities/'+id,reference);
  }
</script> --}}

<script>
  function performDestroy(id , reference){
    let url = '/cms/admin/sales/'+id;
    confirmDestroy(url,reference);
  }
</script>
@endsection
