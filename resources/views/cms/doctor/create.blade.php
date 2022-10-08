@extends('cms.parent')

@section('title' , 'Create doctor')

@section('main-title' , 'Create doctor')

@section('sub-title' , 'create doctor')

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
              <h3 class="card-title">Create Data of doctor</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>
              @csrf

              <div class="card-body">


                <!-- /.form-group -->

                <!-- /.form-group -->


                {{--  <div class="row">
                    <div class="form-group col-md-12">
                       <label for="role_id"> Guard Name</label>
                       <select class="form-control" name="role_id" style="width: 100%;"
                           id="role_id" aria-label=".form-select-sm example">
                           @foreach ($roles as $role )
                               <option value="{{ $role->id }}" >{{ $role->name }}</option>
                           @endforeach
                       </select>
                   </div>
                </div>  --}}
<div class="row">
                    	<div class="form-group col-md-12">
	                  <label for="role_id">Role</label>
	                  <select class="form-control select2" name="role_id"   id="role_id" style="width: 100%;" aria-label=".form-select-sm example">
	                    @foreach ($roles as $role)
	                     <option value="{{ $role->id}}">{{ $role->name }}                      </option>

	                    @endforeach
	                  </select>
</div>
                </div>
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

                <div class="form-group col-md-4">
                  <label for="firstName">First Name</label>
                  <input type="text" class="form-control" name="firstName" id="firstName" placeholder="Enter First Name of doctor">
                </div>
                 <div class="form-group col-md-4">
                  <label for="lastName">Last Name</label>
                  <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Enter Last Name of doctor">
                </div>

                </div>
                 <div class="row">

 <div class="form-group col-md-4">
                  <label for="mobile">Mobile</label>
                  <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Enter Mobile of doctor">
                </div>
                 <div class="form-group col-md-4">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email of doctor">
                </div>

                 <div class="form-group col-md-4">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password of doctor">
                </div>


                  </div>
                  <div class="row">
 <div class="form-group col-md-4">
                  <label for="date_of_birth"> Date of Birth</label>
                  <input type="date" class="form-control" name="date_of_birth" id="date_of_birth" placeholder="Enter First Name of doctor">
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
                    <label for="status">Statud</label>
                    <select class="form-control" name="status" style="width: 100%;"
                        id="status" aria-label=".form-select-sm example">
                            <option value="" >Chosse Statud</option>
                            <option value="active" >Active</option>
                            <option value="inactive" >In Active</option>
                    </select>
                </div>


              </div>
               <div class="form-group col-md-12">
                  <label for="image">Image of doctor</label>
                  <input type="file" class="form-control" name="image" id="image" placeholder="Enter Image of doctor">
                </div>


              {{--  <div class="form-group col-md-12">
                <label for="file">File of doctor</label>
                <input type="file" class="form-control" name="file" id="file" placeholder="Enter File of doctor">
              </div>  --}}
            </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="button" onclick="performStore()" class="btn btn-primary">Save</button>
                <a href="{{route('doctors.index')}}" type="button" class="btn btn-success">Return Back</a>

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
    formData.append('firstName',document.getElementById('firstName').value);
    formData.append('lastName',document.getElementById('lastName').value);
     formData.append('mobile',document.getElementById('mobile').value);
    formData.append('gender',document.getElementById('gender').value);
    formData.append('status',document.getElementById('status').value);
    formData.append('email',document.getElementById('email').value);
    formData.append('password',document.getElementById('password').value);
    formData.append('date_of_birth',document.getElementById('date_of_birth').value);
    formData.append('role_id',document.getElementById('role_id').value);

    formData.append('image',document.getElementById('image').files[0]);

    store('/cms/admin/doctors' ,formData );


  }
</script>
@endsection
