@extends('cms.parent')

@section('title' , 'Create medicine')

@section('main-title' , 'Create medicine')

@section('sub-title' , 'create medicine')

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
              <h3 class="card-title">Create Data of medicine</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>
              @csrf

              <div class="card-body">


                <!-- /.form-group -->

                <!-- /.form-group -->

                <input type="text" name="doctor_id" id="doctor_id" value="{{$id}}"
                class="form-control form-control-solid" hidden/>


                  <div class="form-group col-md-12">
                    <label for="category_id"> Category Name</label>
                    <select class="form-control" name="category_id" style="width: 100%;"
                        id="category_id" aria-label=".form-select-sm example">
                        @foreach ($categories as $category )
                            <option value="{{ $category->id }}" >{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-4" >
                    <label for="store_id"> medicine Name</label>
                    <select class="form-control" name="store_id" style="width: 100%;"
                        id="store_id" aria-label=".form-select-sm example">
                        @foreach ($stores as $store )
                            <option value="{{ $store->id }}" >{{ $store->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-12" >
                  <label for="name">medicine Name</label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name of medicine" value="{{  $store->name }}">
                </div>
                <div class="form-group col-md-12">
                  <label for="code">medicine code</label>
                  <input type="text" class="form-control" name="code" id="code" placeholder="Enter code of medicine">
                </div>
                <div class="form-group col-md-12">
                  <label for="ExpirationDate">medicine ExpirationDate</label>
                  <input type="text" class="form-control" name="ExpirationDate" id="ExpirationDate" placeholder="Enter ExpirationDate of medicine">
                </div>
                 <div class="col-md-12">
                  <div class="form-group">
                      <label for="description"> Description of medicine</label>
                      <textarea class="form-control" style="resize: none;" id="description"
                          name="description" rows="4" placeholder=" Enter full description of medicine" cols="50"></textarea>
                  </div>
                  <div class="form-group col-md-12">
                    <label for="image">Image of Admin</label>
                    <input type="file" class="form-control" name="image" id="image" placeholder="Enter Image of Admin">
                  </div>
              </div>


              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="button" onclick="performStore()" class="btn btn-primary">Save</button>
                <a href="{{route('medicines.index')}}" type="button" class="btn btn-success">Return Back</a>

              </div>
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
  function performStore(){
    let formData = new FormData();
    formData.append('name',document.getElementById('name').value);
    formData.append('code',document.getElementById('code').value);
    formData.append('ExpirationDate',document.getElementById('ExpirationDate').value);
    formData.append('description',document.getElementById('description').value);
    formData.append('doctor_id',document.getElementById('doctor_id').value);
    formData.append('category_id',document.getElementById('category_id').value);
    formData.append('store_id',document.getElementById('store_id').value);
    formData.append('image',document.getElementById('image').files[0]);

    store('/cms/admin/medicines' ,formData );


  }
</script>
@endsection

