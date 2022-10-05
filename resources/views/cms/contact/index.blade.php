@extends('cms.parent')

@section('title' , 'Index Contact')

@section('styles')

@endsection

@section('main-title' , 'Index Contact')

@section('sub-title' , 'index Contact')


@section('content')

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          {{-- <h3 class="card-title">Table of contact</h3> --}}

          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

              <div class="input-group-append">
                <button type="submit" class="btn btn-default">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>first_name</th>
                <th>last_name</th>
                <th>Subject</th>
                <th>email</th>
                <th>Message</th>
                <th>setting</th>
              </tr>
            </thead>
            <tbody>

                @foreach($contacts as $contact)
                  <tr>
                    <td>{{$contact->first_name}}</td>
                    <td>{{$contact->last_name}}</td>
                    <td>{{$contact->Subject}}</td>
                    <td>{{$contact->email}}</td>
                    <td>{{$contact->message}}</td>

                    <td>
                        <div class="btn">
                            <a href="#" onclick="performDestroy({{ $contact->id}} , this)" type="button" class="btn btn-danger">Delete</a>

                            {{-- <button type="button" class="btn btn-success">Information</button> --}}
                          </div>

                    </td>
                  </tr>
                @endforeach


            </tbody>
          </table>
        </div>
           {{ $contacts->links() }}

        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
@endsection

@section('scripts')
  <script>
     function performDestroy(id, reference){
    let url = '/cms/admin/contacts/'+id;

   confirmDestroy(url, reference);
  }
    </script>
@endsection
