@extends('cms.parent')

@section('title' , 'Create Slider')

@section('styles')

@endsection

@section('main-title' , 'Create Slider')

@section('sub-title' , 'create Slider')


@section('content')

<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-lg-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Create Data of Slider</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form >
              @csrf



              <div class="card-body">

                {{-- <div class="form-group col-md-12">
                    <label for="country_id">اسم الدولة</label>
                    <select class="form-control" name="country_id" style="width: 100%;"
                        id="country_id" aria-label=".form-select-sm example">
                        @foreach ($countries as $country )
                            <option value="{{ $country->id }}" >{{ $country->country_name }}</option>
                        @endforeach
                    </select>
                </div> --}}


                <div class="form-group">
                  <label for="image">Slider Image</label>
                  <input type="file" class="form-control" name="image" id="image" placeholder="Enter Name of Slider">
                </div>
                <div class="form-group">
                    <label for="name">Name Medicine</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name of Slider">
                  </div>
                <div class="form-group">
                    <label for="price">Price of Medicine</label>
                    <input type="number" class="form-control" name="price" id="price" placeholder="Enter Name of Slider">
                  </div>




              <!-- /.card-body -->

              <div class="card-footer">
                <a href="#" onclick="performStore()" type="button" class="btn btn-primary">Store</a>
                <a href="{{ route('sliders.index') }}" type="button" class="btn btn-primary">Return Back</a>

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

  function performStore(){
    let formData = new FormData();
    formData.append('name',document.getElementById('name').value);
    formData.append('price',document.getElementById('price').value);
    formData.append('image',document.getElementById('image').files[0]);

    store('/cms/admin/sliders' , formData);

  }
  </script>
@endsection
