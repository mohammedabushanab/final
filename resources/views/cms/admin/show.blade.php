{{-- @extends('dashboard.parent') --}}
@extends('cms.parent')

@section('title',' مدير النظام')


@section('sub-title','معلومات المشرف ')

@section('active title','معلومات المشرف ')

<br>
<br>
@section('styles')
@endsection

@section('content')
<br>
<br>
<!-- Main content -->
<style>
  .show li>a{
        font-weight:500;

    }
</style>
<section class="content">
    <div class="container">
        <div class="row show">
            <div class="card card-primary card-outline col-12">
                <div class="card-body box-profile ">
                  <div class="text-center ">

                        <img class="img-circle img-bordered-sm" src="{{asset('/storage/images/admin/'. $admins->user->image)}}" width="50" height="50" alt="User Image">

                                      </div>

                  <h3 class="profile-username text-center">{{ $admins->user ?$admins->user->first_name.'  '.$admins->user->last_name: null }}</h3>




                  <p class="text-muted text-center">{{ $admins->email}}</p>

                  <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                      <b>mobile</b> <a class="float-right text-danger">{{ $admins->user ? $admins->user->mobile : ' '  }}</a>
                    </li>
                    <li class="list-group-item">
                        <b> date_of_birth </b> <a class="float-right text-danger">{{ $admins->user ? $admins->user->date_of_birth : ' ' }}</a>
                    </li>

                    <li class="list-group-item">
                        <b>gender </b> <a class="float-right text-danger">{{ $admins->user ? $admins->user->gender : ' ' }}</a>
                    </li>
                    <li class="list-group-item">
                        <b>status </b> <a class="float-right text-danger">{{ $admins->user ? $admins->user->status : ' ' }}</a>
                    </li>


                  </ul>
                  <a href="{{route('admins.index')}}" class="btn btn-primary btn-block"><b> index</b></a>


                </div>
                <!-- /.card-body -->
              </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

</section>
<!-- /.content -->

@endsection
<script src="{{ asset('cms/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>

@section('scripts')


@endsection
