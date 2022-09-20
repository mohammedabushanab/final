@extends('cms.parent')

@section('title' , 'Edit abouts')

@section('main-title' , 'Edit abouts')

@section('sub-title' , 'edit abouts')

@section('styles')

@endsection

@section('content')

<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Edit Data of abouts</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>
              @csrf

              <div class="card-body">


                <!-- /.form-group -->

                <!-- /.form-group -->


                <div class="form-group col-md-12">
                    <label for="admin_id"> admin Name</label>
                    <select class="form-control" name="admin_id" style="width: 100%;"
                        id="admin_id" aria-label=".form-select-sm example">
                        @foreach ($admins as $admin )
                            <option value="{{ $admin->id }}" >{{ $admin->user->firstname }}</option>
                        @endforeach
                    </select>
                </div>



                <div class="form-group col-md-12">
                    <label for="title"> title</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Enter title of about" value="{{ $abouts->title }}">
                  </div>

                   <div class="col-md-12">
                    <div class="form-group">
                        <label for="description"> Description of abouts</label>
                        <textarea class="form-control" style="resize: none;" id="description"
                            name="description" rows="4" placeholder=" Enter full description of abouts" cols="50">"{{ $abouts->description }}"</textarea>
                    </div>
                    <div class="form-group col-md-12">
                      <label for="image">Image of abouts</label>
                      <input type="file" class="form-control" name="image" id="image" placeholder="Enter Image of Admin">
                    </div>
                </div>

              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="button" onclick="performUpdate({{$abouts->id}})" class="btn btn-primary">Update</button>
                <a href="{{route('abouts.index')}}" type="button" class="btn btn-success">Return Back</a>

              </div>
              {{--  <div class="btn-group">
                <a href="{{route('medicines.edit' , $medicines->id)}}" type="button" class="btn btn-primary">Edit</a>
                <a href="#" onclick="performDestroy({{$medicines->id}} , this)" type="button" class="btn btn-danger">Delete</a>

                <button type="button" class="btn btn-success">View</button>
              </div>  --}}
            </form>
          </div>
          <!-- /.card -->


          </div>
          <!-- /.card -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
@endsection

@section('scripts')

<script>
  function performUpdate(id){
    let formData = new FormData();
    formData.append('title',document.getElementById('title').value);
    formData.append('description',document.getElementById('description').value);
    formData.append('image',document.getElementById('image').files[0]);
    formData.append('admin_id',document.getElementById('admin_id').value);


    storeRoute('/cms/admin/abouts_update/'+id ,formData );


  }
</script>
@endsection
