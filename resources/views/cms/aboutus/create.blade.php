@extends('cms.parent')

@section('title' , 'Create aboutus')

@section('main-title' , 'Create aboutus')

@section('sub-title' , 'create aboutus')

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

                {{--  <input type="text" name="doctor_id" id="doctor_id" value="{{$id}}"
                class="form-control form-control-solid" hidden/>  --}}


                  {{--  <div class="form-group col-md-12">
                    <label for="category_id"> Category Name</label>
                    <select class="form-control" name="category_id" style="width: 100%;"
                        id="category_id" aria-label=".form-select-sm example">
                        @foreach ($categories as $category )
                            <option value="{{ $category->id }}" >{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>  --}}

                <input type="text" name="admin_id" id="admin_id" value="{{$id}}"
                class="form-control form-control-solid" hidden/>


                <div class="form-group col-md-12">
                  <label for="title"> title</label>
                  <input type="text" class="form-control" name="title" id="title" placeholder="Enter Name of medicine">
                </div>

                 <div class="col-md-12">
                  <div class="form-group">
                      <label for="description"> Description of abouts</label>
                      <textarea class="form-control" style="resize: none;" id="description"
                          name="description" rows="4" placeholder=" Enter full description of medicine" cols="50"></textarea>
                  </div>
                  <div class="form-group col-md-12">
                    <label for="image">Image of abouts</label>
                    <input type="file" class="form-control" name="image" id="image" placeholder="Enter Image of Admin">
                  </div>
              </div>


              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="button" onclick="performStore()" class="btn btn-primary">Save</button>
                <a href="{{route('abouts.index')}}" type="button" class="btn btn-success">Return Back</a>

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
    formData.append('title',document.getElementById('title').value);
    formData.append('description',document.getElementById('description').value);
    formData.append('image',document.getElementById('image').files[0]);
    formData.append('admin_id',document.getElementById('admin_id').value);

    store('/cms/admin/abouts' ,formData );


  }
</script>
@endsection

