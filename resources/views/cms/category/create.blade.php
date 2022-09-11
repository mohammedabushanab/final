@extends('cms.parent')

@section('title' , 'Create Category')

@section('main-title' , 'Create Category')

@section('sub-title' , 'create category')

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
              <h3 class="card-title">Create Data of Category</h3>
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
                  <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name of Category">
                </div>
                 <div class="col-md-12">
                  <div class="form-group">
                      <label for="description"> Description of Category</label>
                      <textarea class="form-control" style="resize: none;" id="description"
                          name="description" rows="4" placeholder=" Enter description of Category" cols="50"></textarea>
                  </div>
              </div>
              
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="button" onclick="performStore()" class="btn btn-primary">Save</button>
                <a href="{{route('categories.index')}}" type="button" class="btn btn-success">Return Back</a>

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
    formData.append('description',document.getElementById('description').value);

    store('/cms/admin/categories' ,formData );


  }
</script>
@endsection