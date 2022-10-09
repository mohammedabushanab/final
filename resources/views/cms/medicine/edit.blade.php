@extends('cms.parent')

@section('title' , 'Edit medicine')

@section('main-title' , 'Edit medicine')

@section('sub-title' , 'edit medicine')

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
              <h3 class="card-title">Edit Data of medicine</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>
              @csrf

              <div class="card-body">


                <!-- /.form-group -->

                <!-- /.form-group -->

                <div class="form-group col-md-4" hidden>
                    <label for="doctor_id"> doctor Name</label>
                    <select class="form-control" name="doctor_id" style="width: 100%;"
                        id="doctor_id" aria-label=".form-select-sm example">
                        @foreach ($doctors as $doctor )
                            <option value="{{ $doctor->id }}" >{{ $doctor->user->firstname }}</option>
                        @endforeach
                    </select>
                </div>

                  <div class="form-group col-md-4">
                    <label for="category_id"> Category Name</label>
                    <select class="form-control" name="category_id" style="width: 100%;"
                        id="category_id" aria-label=".form-select-sm example">
                        @foreach ($categories as $category )
                            <option value="{{ $category->id }}" >{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label for="category_id"> Category Name</label>
                    <select class="form-control" name="category_id" style="width: 100%;"
                        id="category_id" aria-label=".form-select-sm example">
                        @foreach ($categories as $category )
                            <option value="{{ $category->id }}" >{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="store_id"> medicine Name 0</label>
                    <select class="form-control" name="store_id" style="width: 100%;"
                        id="store_id" aria-label=".form-select-sm example">
                        @foreach ($stores as $store )
                            <option value="{{ $store->id }}" >{{ $store->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-12" hidden>
                  <label for="name">medicine Name</label>
                  <input type="text" class="form-control" name="name" id="name"
                  value="{{$medicines->name}}" placeholder="Enter Name of medicine">
                </div>
                <div class="form-group col-md-12">
                  <label for="code">medicine Name</label>
                  <input type="text" class="form-control" name="code" id="code"
                   value="{{$medicines->code}}" placeholder="Enter code of medicine">
                </div>
                <div class="form-group col-md-12">
                  <label for="ExpirationDate">medicine Name</label>
                  <input type="text" class="form-control" name="ExpirationDate" id="ExpirationDate"
                   value="{{$medicines->ExpirationDate}}" placeholder="Enter code of medicine">
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                     <label for="image">Image of Admin</label>
                     <input type="file" class="form-control" name="image" id="image" placeholder="Enter Image of medicine">
                   </div>
                   </div>
                 <div class="col-md-12">
                  <div class="form-group">
                      <label for="description"> Description of medicine</label>
                      <textarea class="form-control" style="resize: none;" id="description"
                          name="description" rows="4" placeholder=" Enter full description of medicine" cols="50">{{$medicines->description}}</textarea>
                  </div>
              </div>

              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="button" onclick="performUpdate({{$medicines->id}})" class="btn btn-primary">Update</button>
                <a href="{{route('medicines.index')}}" type="button" class="btn btn-success">Return Back</a>

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
    formData.append('name',document.getElementById('name').value);
    formData.append('code',document.getElementById('code').value);
    formData.append('ExpirationDate',document.getElementById('ExpirationDate').value);
    formData.append('description',document.getElementById('description').value);
    formData.append('doctor_id',document.getElementById('doctor_id').value);
    formData.append('category_id',document.getElementById('category_id').value);
    formData.append('image',document.getElementById('image').files[0]);


    storeRoute('/cms/admin/medicines_update/'+id ,formData );


  }
</script>
@endsection
