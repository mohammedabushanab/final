@extends('cms.parent')

@section('title' , 'edit Supplier')

@section('main-title' , 'edit Supplier')

@section('sub-title' , 'edit supplier')

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
              <h3 class="card-title">edit Data of Supplier</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>
              @csrf

              <div class="card-body">
              <div class="row">
              {{--  <div class="form-group col-md-4">
                    <label for="country_id">اسم الدولة</label>
                    <select class="form-control" name="country_id" style="width: 100%;"
                        id="country_id" aria-label=".form-select-sm example">
                        @foreach ($countries as $country )
                            <option value="{{ $country->id }}" >{{ $country->country_name }}</option>
                        @endforeach
                    </select>
                </div>  --}}

                <!-- /.form-group -->

                <!-- /.form-group -->

                <div class="form-group col-md-4">
                    <label for="firstName">First Name</label>
                    <input type="text" class="form-control" name="firstName" id="firstName"
                      value="{{ $suppliers->user->firstName }}" placeholder="Enter First Name">
                  </div>
                 <div class="form-group col-md-4">
                  <label for="lastName">Last Name</label>
                  <input type="text" class="form-control" name="lastName" id="lastName"
                  value={{$suppliers->user->lastName}} placeholder="Enter Last Name of Supplier">
                </div>
                </div>
                <div class="row">
                 <div class="form-group col-md-4">
                  <label for="mobile">Mobile</label>
                  <input type="text" class="form-control" name="mobile" id="mobile"
                  value={{$suppliers->user->mobile}} placeholder="Enter Mobile of Supplier">
                </div>

                 <div class="form-group col-md-4">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" name="email" id="email"
                  value={{$suppliers->email}} placeholder="Enter Email of Supplier">
                </div>

                 <div class="form-group col-md-4">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" name="password" id="password"
                  value={{$suppliers->password}} placeholder="Enter Password of Supplier">
                </div>
                </div>
                <div class="row">
                 <div class="form-group col-md-4">
                  <label for="date_of_birth"> Date of Birth</label>
                  <input type="date" class="form-control" name="date_of_birth" id="date_of_birth"
                  value={{$suppliers->user->date_of_birth}} placeholder="Enter First Name of Supplier">
                </div>

                      <div class="form-group col-md-4">
                    <label for="gender">Gender </label>
                    <select class="form-control" name="gender" style="width: 100%;"
                        id="gender" aria-label=".form-select-sm example">
                            <option selected> {{  $suppliers->user->gender }} </option>
                            <option value="male" >Male</option>
                            <option value="female" >FeMale</option>

                    </select>
                </div>

                      <div class="form-group col-md-4">
                    <label for="status">Statud</label>
                    <select class="form-control" name="status" style="width: 100%;"
                        id="status" aria-label=".form-select-sm example">
                            <option selected> {{ $suppliers->user->status }} </option>
                            <option value="active" >Active</option>
                            <option value="inactive" >In Active</option>
                    </select>
                </div>
                </div>
                <div class="row">
                 <div class="form-group col-md-12">
                  <label for="image">Image of Supplier</label>
                  <input type="file" class="form-control" name="image" id="image" placeholder="Enter Image of Supplier">
                </div>
                </div>

              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="button" onclick="performUpdate({{ $suppliers->id }})" class="btn btn-primary">Update</button>
                {{-- <a href="{{route('suppliers.index')}}" type="button" class="btn btn-success">Return Back</a> --}}

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
    formData.append('firstName',document.getElementById('firstName').value);
    formData.append('lastName',document.getElementById('lastName').value);
     formData.append('mobile',document.getElementById('mobile').value);
    formData.append('gender',document.getElementById('gender').value);
    formData.append('status',document.getElementById('status').value);
    formData.append('email',document.getElementById('email').value);
    formData.append('password',document.getElementById('password').value);
    formData.append('date_of_birth',document.getElementById('date_of_birth').value);
    formData.append('image',document.getElementById('image').files[0]);

    storeRoute('/cms/admin/suppliers_update/'+id ,formData );


  }
</script>
@endsection
