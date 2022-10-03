@extends('cms.parent')
@section('title',' recycle bin  ')


@section('sub-title',' recycle bin')

@section('active title','  recycle bin')

@section('styles')
  <style>

</style>
@endsection

@section('content')

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">



          <!-- /.card-header -->
          <div class="card-body table-responsive p-0">
            <table class="table table-hover table-bordered table-striped text-nowrap text-center">
              <thead>
                <tr class="bg-info">
                  {{-- <th> رقم المشرف </th> --}}
                  <th> name of admin  </th>
                  {{-- <th>   اسم المشرف الأخير </th> --}}

                  <th>  email </th>
                  <th>    image </th>

                  <th> setting </th>
                    {{-- <td>
                  <td>{{$admin->user ? $admin->user->first_name . ' '.  $admin->user->last_name : "Null"}}</td>
                  </td> --}}
                </tr>
              </thead>
              <tbody>
                @foreach ($admins as $admin )
                <tr>
                  {{-- <td>{{$admin->id}}</td> --}}

                  <td>{{$admin->user ? $admin->user->firstName . ' ' . $admin->user->lastName : "Null"}}</td>
                  {{-- <td>{{$admin->user ? $admin->user->last_name : "Null"}}</td> --}}
                  <td>{{$admin->email}}</td>

                  <td>  <img class="img-circle img-bordered-sm" src="{{asset('/storage/images/admin/'. $admin->user->image)}}" width="60" height="60" alt="User Image"> </td>
                  {{--  <img class="img-circle img-bordered-sm" src="{{asset('storage/images/admin/'. $admin->user->image)}}" width="50" height="50" alt="User Image">  --}}

                  <td>
                    <div class="btn">
                      {{-- <a href="{{route('admins.edit',$admin->id)}}" class="btn btn-info" title="Edit">
                        تعديل
                        </a> --}}

                      <a href="#" onclick="performDestroy({{$admin->id}}, this)" class="btn btn-danger" title="Delete">
                        delete
                      </a>

                      {{-- <a href="{{route('forceDelete',$admin->id)}}" class="btn btn-danger" title="Show">
                        حذف
                      </a> --}}
                      <a href="{{route('restore',$admin->id)}}" class="btn btn-success" title="Show">
                        back
                      </a>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <div class="span text-center" style="margin-top: 20px; margin-bottom:10px">



            </span>

          </div>
          <!-- /.card-body -->

        </div>
        <!-- /.card -->
      </div>
    </div>
  </div>
</section>

@endsection

@section('scripts')

 <script>
  function performDestroy(id, reference){
    let url = '/cms/admin/forceDelete/'+id;
    confirmDestroy(url, reference);
  }
 </script>
@endsection


