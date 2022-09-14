@extends('cms.parent')

@section('title' , 'Edit Sale')

@section('main-title' , 'Edit Sale')

@section('sub-title' , 'edit sale')

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
              <h3 class="card-title">Edit Data of Sale</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>
              @csrf
                <!-- /.form-group -->

                <!-- /.form-group -->

                {{--  <div class="row">  --}}
                    {{--  <div class="form-group col-md-12">
                       <label for="role_id"> Guard Name</label>
                       <select class="form-control" name="role_id" style="width: 100%;"
                           id="role_id" aria-label=".form-select-sm example">
                           @foreach ($roles as $role )
                               <option value="{{ $role->id }}" >{{ $role->name }}</option>
                           @endforeach
                       </select>
                   </div>  --}}
                {{--  </div>  --}}


                 {{--  <div class="form-group col-md-4">
                    <label for="country_id">name of country</label>
                    <select class="form-control" name="country_id" style="width: 100%;"
                        id="country_id" aria-label=".form-select-sm example">
                        @foreach ($countries as $country )
                            <option value="{{ $country->id }}" >{{ $country->country_name }}</option>
                        @endforeach
                    </select>
                </div>  --}}

                {{-- <div class="form-group col-md-4">
                  <label for="firstName">First Name</label>
                  <input type="text" class="form-control" name="firstName" id="firstName" placeholder="Enter First Name of Sale">
                </div>
                 <div class="form-group col-md-4">
                  <label for="lastName">Last Name</label>
                  <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Enter Last Name of Sale">
                </div>

                </div>
                 <div class="row">

 <div class="form-group col-md-4">
                  <label for="mobile">Mobile</label>
                  <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Enter Mobile of Sale">
                </div>
                 <div class="form-group col-md-4">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email of Sale">
                </div>

                 <div class="form-group col-md-4">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password of Sale">
                </div>


                  </div>
                  <div class="row">
 <div class="form-group col-md-4">
                  <label for="date_of_birth"> Date of Birth</label>
                  <input type="date" class="form-control" name="date_of_birth" id="date_of_birth" placeholder="Enter First Date of birth">
                </div>
                      <div class="form-group col-md-4">
                    <label for="gender">Gender </label>
                    <select class="form-control" name="gender" style="width: 100%;"
                        id="gender" aria-label=".form-select-sm example">
                            <option value="" >Chosse Gender</option>
                            <option value="male" >Male</option>
                            <option value="female" >FeMale</option>

                    </select>
                </div>

                      <div class="form-group col-md-4">
                    <label for="status">Status</label>
                    <select class="form-control" name="status" style="width: 100%;"
                        id="status" aria-label=".form-select-sm example">
                            <option value="" >Chosse Statud</option>
                            <option value="active" >Active</option>
                            <option value="inactive" >In Active</option>
                    </select>
                </div>


              </div>
               <div class="form-group col-md-12">
                  <label for="image">Image of Sale</label>
                  <input type="file" class="form-control" name="image" id="image" placeholder="Enter Image of Sale">
                </div>
              </div> --}}
              <!-- /.card-body -->
              <div class="card-body">
                <div class="row">
                    <div class=" form-group col-md-6">
                        <label for="price">Price of the Medicine</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">$</span>
                        </div>
                        <input type="text" id="price" name="price" placeholder="Price of the Medicine" value="{{ $sales->price }}" class="form-control">
                        <div class="input-group-append">
                          <span class="input-group-text">.00</span>
                        </div>
                      </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="date"> Date of midicine</label>
                        <input type="date" class="form-control" name="date" id="date" value="{{ $sales->date }}" placeholder="Enter  Date of midicine">
                      </div>
              <div class="card-footer">
                <button type="button"  onclick="performUpdate({{ $sales->id }})" class="btn btn-primary">Update</button>
                {{-- <a href="{{route('sales.index')}}" type="button" class="btn btn-success">Return Back</a> --}}

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
    formData.append('price',document.getElementById('price').value);
    formData.append('date',document.getElementById('date').value);

    storeRoute('/cms/admin/sales_update/'+id ,formData );


  }
</script>
@endsection
