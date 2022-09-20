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

                <input type="text" name="suplier_id" id="suplier_id" value="{{$id}}"
                class="form-control form-control-solid" hidden/>


                  {{--  <div class="form-group col-md-12">
                    <label for="category_id"> Category Name</label>
                    <select class="form-control" name="category_id" style="width: 100%;"
                        id="category_id" aria-label=".form-select-sm example">
                        @foreach ($categories as $category )
                            <option value="{{ $category->id }}" >{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>  --}}
                <input type="text" name="supplier_id" id="supplier_id" value="{{$id}}"
                class="form-control form-control-solid" hidden/>

                <div class="form-group col-md-12">
                  <label for="name">medicine Name</label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name of medicine">
                </div>
                <div class="form-group col-md-12">
                  <label for="count">medicine count</label>
                  <input type="nubmer" class="form-control" name="count" id="count" placeholder="Enter count of medicine">
                </div>
                {{--  <div class="form-group col-md-12">
                  <label for="ExpirationDate">medicine ExpirationDate</label>
                  <input type="text" class="form-control" name="ExpirationDate" id="ExpirationDate" placeholder="Enter ExpirationDate of medicine">
                </div>  --}}



              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="button" onclick="performStore()" class="btn btn-primary">Save</button>
                <a href="{{route('stores.index')}}" type="button" class="btn btn-success">Return Back</a>

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
    formData.append('count',document.getElementById('count').value);
    formData.append('supplier_id',document.getElementById('supplier_id').value);

    store('/cms/admin/stores' ,formData );


  }
</script>
@endsection

