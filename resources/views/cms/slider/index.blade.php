@extends('cms.parent')

@section('title' , 'Index slider')

@section('styles')

@endsection

@section('main-title' , 'Index slider')

@section('sub-title' , 'index slider')


@section('content')

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          {{-- <h3 class="card-title">Table of slider</h3> --}}
          <a href="{{ route('sliders.create') }}" type="button" class="btn btn-primary">Add New slider</a>

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
                <th>Image</th>
                <th>Name</th>
                <th> Price</th>
                <th>Setting</th>
              </tr>
            </thead>
            <tbody>

                @foreach($sliders as $slider)
                  <tr>
                    <td>
                      <img class="img-circle img-bordered-sm" src="{{asset('storage/images/slider/'.$slider->image)}}" width="50" height="50" alt="User Image">
                    </td>
                    <td>{{$slider->name}}</td>
                    <td>{{$slider->price}}</td>
                    <td>
                        <div class="btn">
                            <a href="{{route('sliders.edit' , $slider->id )}}" type="button" class="btn btn-primary">Edit</a>
                            <a href="#" onclick="performDestroy({{ $slider->id}} , this)" type="button" class="btn btn-danger">Delete</a>

                            {{-- <button type="button" class="btn btn-success">Information</button> --}}
                          </div>

                    </td>
                  </tr>
                @endforeach


            </tbody>
          </table>
        </div>
           {{ $sliders->links() }}

        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
@endsection

@section('scripts')
  <script>
     function performDestroy(id, reference){
    let url = '/cms/admin/sliders/'+id;

   confirmDestroy(url, reference);
  }
    </script>
@endsection
