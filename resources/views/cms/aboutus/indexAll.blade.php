@extends('cms.parent')

@section('title' , 'Index about')

@section('main-title' , 'Index about')

@section('sub-title' , 'index about')

@section('styles')

@endsection

@section('content')

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          {{--  <h3 class="card-title">Data of medicine</h3>  --}}

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
                <th>title</th>
                <th>image</th>
                <th>Description</th>

                {{--  <th>Setting</th>  --}}
              </tr>
            </thead>
            <tbody>

                @foreach ( $abouts as $about )
                <tr>
                    <td>{{ $about->id }}</td>
                    <td>{{ $about->title }}</td>
                    <td>
                        <img class="img-circle img-bordered-sm" src="{{asset('/storage/images/about/'. $about->image)}}" width="50" height="50" alt="User Image">
                     </td>
                    <td>{{ $about->description }}</td>


                    {{--  <td>
                        <div class="btn-group">
                            <a href="{{route('abouts.edit' , $about->id)}}" type="button" class="btn btn-primary">Edit</a>
                            <a href="#" onclick="performDestroy({{$about->id}} , this)" type="button" class="btn btn-danger">Delete</a>

                          </div>
                    </td>  --}}
                  </tr>
                @endforeach



            </tbody>
          </table>
        </div>

        {{ $abouts->links() }}
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
    let url = '/cms/admin/abouts/'+id;
    confirmDestroy(url,reference);
  }
</script>
@endsection
