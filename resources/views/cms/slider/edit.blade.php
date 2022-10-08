@extends('cms.parent')

@section('title' , 'Edit Slider')

@section('styles')

@endsection

@section('main-title' , 'Edit Slider')

@section('sub-title' , 'edit Slider')


@section('content')

<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-lg-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Edit Data of Slider</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form >
             @csrf

              <div class="card-body">

                <div class="form-group">
                  <label for="image">Slider Image</label>
                  <input type="file" class="form-control" name="image" id="image"
                    placeholder="Enter Name of Slider">
                </div>

                <div class="form-group">
                  <label for="name">Name </label>
                  <input type="text" class="form-control" name="name" id="name"
                   value="{{$sliders->name}}" placeholder="Enter Name of Slider">
                </div>

                <div class="form-group">
                  <label for="price"> Price</label>
                  <input type="number" class="form-control" name="price" id="price"
                   value="{{$sliders->price}}" placeholder="Enter Name of Slider">
                </div>
              </div>


              <!-- /.card-body -->

              <div class="card-footer">
                <a href="#" onclick="performUpdate({{ $sliders->id }})" type="button" class="btn btn-primary">Update</a>
              </div>
            </form>
          </div>
          <!-- /.card -->

            <!-- /.card-body -->
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
  formData.append('name',document.getElementById('name').value);
  formData.append('price',document.getElementById('price').value);
  formData.append('image',document.getElementById('image').files[0]);

  storeRoute('/cms/admin/sliders_update/'+id , formData);

}
</script>

@endsection
