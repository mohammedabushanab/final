@extends('cms.parent')

@section('title' , 'Edit Category')

@section('main-title' , 'Edit Category')

@section('sub-title' , 'edit category')

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
              <h3 class="card-title">Edit Data of Category</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>
              @csrf

              <div class="card-body">
          

                <!-- /.form-group -->
             
                <!-- /.form-group -->

                <div class="form-group col-md-12">
                  <label for="name">Category Name</label>
                  <input type="text" class="form-control" name="name" id="name" 
                  value="{{ $categories->name }}" placeholder="Enter Name of Category">
                </div>
                 <div class="col-md-12">
                  <div class="form-group">
                      <label for="description"> Description of Category</label>
                      <textarea class="form-control" style="resize: none;" id="description"
                          name="description" rows="4" placeholder=" Enter description of Category" cols="50">{{ $categories->description }}</textarea>
                  </div>
              </div>
              
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="button" onclick="performUpdate({{ $categories->id }})" class="btn btn-primary">Save</button>
                {{-- <a href="{{route('categories.index')}}" type="button" class="btn btn-success">Return Back</a> --}}

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
  function performUpdate(id){
    let formData = new FormData();
    formData.append('name',document.getElementById('name').value);
    formData.append('description',document.getElementById('description').value);

    storeRoute('/cms/admin/categories_update/'+id ,formData );

  }
</script>
@endsection