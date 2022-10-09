<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CMS NEWS | @yield('title')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('cms/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('cms/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('cms/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('cms/plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('cms/dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('cms/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('cms/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('cms/plugins/summernote/summernote-bs4.min.css') }}">

  <link rel="stylesheet" href="{{ asset('cms/') }}">
  <link rel="stylesheet" href="{{ asset('cms/plugins/toastr/toastr.min.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

  @yield('styles')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('home') }}" class="nav-link"></a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('cms/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          {{--  <img src="{{ asset('cms/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">  --}}
        </div>


      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">

            <a href="{{ route('home') }}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>

          </li>
{{--  @canAny(['Index-Role' , 'Create-Role'])  --}}
          <li class="nav-header">Roles & Permission</li>


          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Role
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                {{--  @can('Index-Role')  --}}
              <li class="nav-item">
                <a href="{{ route('roles.index') }}" class="nav-link">
                  <i class="fas fa-list-alt nav-icon"></i>
                  <p>Index</p>
                </a>
              </li>
              {{--  @endcan  --}}
                {{--  @can('Create-Role')  --}}
              <li class="nav-item">
                <a href="{{ route('roles.create') }}" class="nav-link">
                  <i class="fas fa-plus-circle nav-icon"></i>
                  <p>Create</p>
                </a>
              </li>
              {{--  @endcan  --}}
            </ul>
          </li>
          {{--  @endcan  --}}

         {{--  @canAny(['Index-Permission' , 'Create-Permission'])  --}}
           <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Permissions
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                {{--  @can('Index-Permission')  --}}
              <li class="nav-item">
                <a href="{{ route('permissions.index') }}" class="nav-link">
                  <i class="fas fa-list-alt nav-icon"></i>
                  <p>Index</p>
                </a>
              </li>
              {{--  @endcan  --}}
                {{--  @can('Create-Permission')  --}}
              <li class="nav-item">
                <a href="{{ route('permissions.create') }}" class="nav-link">
                  <i class="fas fa-plus-circle nav-icon"></i>
                  <p>Create</p>
                </a>
              </li>
              {{--  @endcan  --}}

            </ul>
          </li>
          {{--  @endcan  --}}

            <li class="nav-header">User Mangment</li>

         @canAny(['Index-Admin' , 'Create-Admin'])
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Admin
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                @can('Index-Admin')
              <li class="nav-item">
                <a href="{{ route('admins.index') }}" class="nav-link">
                  <i class="fas fa-list-alt nav-icon"></i>
                  <p>Index</p>
                </a>
              </li>
              @endcan
              @can('Create-Admin')
              <li class="nav-item">
                <a href="{{ route('admins.create') }}" class="nav-link">
                  <i class="fas fa-plus-circle nav-icon"></i>
                  <p>Create</p>
                </a>
              </li>
              @endcan

            </ul>
          </li>
          @endcan


         @canAny(['Index-Doctor' , 'Create-Doctor'])
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                doctor
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                @can('Index-Doctor')
              <li class="nav-item">
                <a href="{{ route('doctors.index') }}" class="nav-link">
                  <i class="fas fa-list-alt nav-icon"></i>
                  <p>Index</p>
                </a>
              </li>
              @endcan
              @can('Create-Doctor')
              <li class="nav-item">
                <a href="{{ route('doctors.create') }}" class="nav-link">
                  <i class="fas fa-plus-circle nav-icon"></i>
                  <p>Create</p>
                </a>
              </li>
              @endcan

            </ul>
          </li>
              @endcan


         {{-- @canAny(['Index-Supplier' , 'Create-Supplier']) --}}
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
              Supplier
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                {{-- @can('Index-Supplier') --}}
              <li class="nav-item">
                <a href="{{ route('suppliers.index') }}" class="nav-link">
                  <i class="fas fa-list-alt nav-icon"></i>
                  <p>Index</p>
                </a>
              </li>
              {{-- @endcan --}}
              {{-- @can('Create-Supplier') --}}
              <li class="nav-item">
                <a href="{{ route('suppliers.create') }}" class="nav-link">
                  <i class="fas fa-plus-circle nav-icon"></i>
                  <p>Create</p>
                </a>
              </li>
              {{-- @endcan --}}

            </ul>
          </li>
          {{-- @endcan --}}

        {{-- @canAny(['Index-Customer' , 'Create-Customer']) --}}
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Customer
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                {{-- @can('Index-Customer') --}}
              <li class="nav-item">
                <a href="{{ route('customers.index') }}" class="nav-link">
                  <i class="fas fa-list-alt nav-icon"></i>
                  <p>Index</p>
                </a>
              </li>
              {{-- @endcan --}}
              {{-- @can('Create-Cutomer') --}}
              <li class="nav-item">
                <a href="{{ route('customers.create') }}" class="nav-link">
                  <i class="fas fa-plus-circle nav-icon"></i>
                  <p>Create</p>
                </a>
              </li>
             {{-- @endcan --}}

            </ul>
          </li>
          {{-- @endcan --}}


          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-globe-americas"></i>
              <p>
                medicines
                <i class="fas fa-angle-left right"></i>

              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('medicines.index') }}" class="nav-link">
                  <i class="fas fa-list-alt nav-icon"></i>
                  <p>Index</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="{{ route('medicines.create') }}" class="nav-link">
                  <i class="fas fa-plus-circle nav-icon"></i>
                  <p>Create</p>
                </a>
              </li>

            </ul>
          </li>



          @canAny(['Index-Stores'])

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-globe-americas"></i>
              <p>
                stores
                <i class="fas fa-angle-left right"></i>

              </p>
            </a>
            <ul class="nav nav-treeview">
                @can('Index-Stores')
              <li class="nav-item">
                <a href="{{ route('stores.index') }}" class="nav-link">
                  <i class="fas fa-list-alt nav-icon"></i>
                  <p>Index</p>
                </a>
              </li>
                @endcan
              {{--  <li class="nav-item">
                <a href="{{ route('medicines.create') }}" class="nav-link">
                  <i class="fas fa-plus-circle nav-icon"></i>
                  <p>Create</p>
                </a>
              </li>  --}}

            </ul>
          </li>
          @endcan

          {{--  @canAny(['Index-Stores'])  --}}

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-globe-americas"></i>
              <p>
                Slider
                <i class="fas fa-angle-left right"></i>

              </p>
            </a>
            <ul class="nav nav-treeview">
                {{--  @can('Index-Slider')  --}}
              <li class="nav-item">
                <a href="{{ route('sliders.index') }}" class="nav-link">
                  <i class="fas fa-list-alt nav-icon"></i>
                  <p>Index</p>
                </a>
              </li>
                {{--  @endcan  --}}
                {{--  @can('Create-Slider')  --}}
              <li class="nav-item">
                <a href="{{ route('sliders.create') }}" class="nav-link">
                  <i class="fas fa-plus-circle nav-icon"></i>
                  <p>Create</p>
                </a>
              </li>
              {{--  @endcan  --}}

            </ul>
          </li>
          {{--  @endcan  --}}




          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-globe-americas"></i>
              <p>
                about us
                <i class="fas fa-angle-left right"></i>

              </p>
            </a>
            <ul class="nav nav-treeview">
                @can('Index-About')
              <li class="nav-item">
                <a href="{{ route('abouts.index') }}" class="nav-link">
                  <i class="fas fa-list-alt nav-icon"></i>
                  <p>Index</p>
                </a>
              </li>
                @endcan
              {{--  <li class="nav-item">
                <a href="{{ route('abouts.create') }}" class="nav-link">
                  <i class="fas fa-plus-circle nav-icon"></i>
                  <p>Create</p>
                </a>
              </li>  --}}

            </ul>
          </li>
          {{--  <li class="nav-header">Content Mangment</li>  --}}
{{--
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-globe-americas"></i>
              <p>
                Country
                <i class="fas fa-angle-left right"></i>

              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('countries.index') }}" class="nav-link">
                  <i class="fas fa-list-alt nav-icon"></i>
                  <p>Index</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('countries.create') }}" class="nav-link">
                  <i class="fas fa-plus-circle nav-icon"></i>
                  <p>Create</p>
                </a>
              </li>

            </ul>  --}}
          {{--  </li>  --}}
          {{--  <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-globe-americas"></i>
              <p>
                City
                <i class="fas fa-angle-left right"></i>

              </p>
            </a>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('cities.index') }}" class="nav-link">
                  <i class="fas fa-list-alt nav-icon"></i>
                  <p>Index</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('cities.create') }}" class="nav-link">
                  <i class="fas fa-plus-circle nav-icon"></i>
                  <p>Create</p>
                </a>
              </li>
            </ul>
          </li>  --}}

          <li class="nav-header">Content Mangment</li>
          @canAny(['Index-Category' , 'Create-Category'])
            <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-globe-americas"></i>
              <p>
                Category
                <i class="fas fa-angle-left right"></i>

              </p>
            </a>
            <ul class="nav nav-treeview">
                @can('Index-Category')
              <li class="nav-item">
                <a href="{{ route('categories.index') }}" class="nav-link">
                  <i class="fas fa-list-alt nav-icon"></i>
                  <p>Index</p>
                </a>
              </li>
              @endcan
              @can('Create-Category')
              <li class="nav-item">
                <a href="{{ route('categories.create') }}" class="nav-link">
                  <i class="fas fa-plus-circle nav-icon"></i>
                  <p>Create</p>
                </a>
              </li>
              @endcan

            </ul>
          </li>
          @endcan

          @canAny(['Index-Sale' , 'Create-Sale'])

            <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-globe-americas"></i>
              <p>
                Sale
                <i class="fas fa-angle-left right"></i>

              </p>
            </a>
            <ul class="nav nav-treeview">
              @can('Index-Sale')
              <li class="nav-item">
                <a href="{{ route('sales.index') }}" class="nav-link">
                  <i class="fas fa-list-alt nav-icon"></i>
                  <p>Index</p>
                </a>
              </li>
              @endcan
              @can('Create-Sale')
              <li class="nav-item">
                <a href="{{ route('sales.create') }}" class="nav-link">
                  <i class="fas fa-plus-circle nav-icon"></i>
                  <p>Create</p>
                </a>
              </li>
              @endcan

            </ul>
          </li>
          @endcan
          {{--  <li class="nav-header">Settings</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-edit text-info"></i>
              <p class="text">edit Profile</p>
            </a>
          </li>  --}}




          <li class="nav-header">Websit Mangment</li>



         <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-globe-americas"></i>
            <p>
              Contact
              <i class="fas fa-angle-left right"></i>

            </p>
          </a>
          <ul class="nav nav-treeview">
              {{--  <li class="nav-item">
                <a href="{{ route('contacts.index') }}" class="nav-link">
                  <i class="fas fa-list-alt nav-icon"></i>
                  <p>Index</p>
                </a>
              </li>  --}}
          </ul>
        </li>  -



          <li class="nav-header">Setting</li>
          @if (Auth::guard('admin')->id())
          <li class="nav-item">
            <a href="{{ route('cms.auth.profile-edit') }}" class="nav-link">
                <i class="nav-icon fas fa-user-edit text-info"></i>
                <p>  edit Profile</p>
            </a>
          </li>
          {{--  @elseif (Auth::guard('doctor')->id())
          <li class="nav-item">
            <a href="{{ route('cms.auth.profile-edit') }}" class="nav-link">
                <i class="nav-icon fas fa-user-edit text-info"></i>
              <p>  edit Profile</p>
            </a>
          </li>  --}}
        @endif

        @if (Auth::guard('admin')->id())
        <li class="nav-item">
            <a href="{{ route('cms.admin.edit-password') }}" class="nav-link">
                <i class="nav-icon fas fa-key"></i>
                <p>Change Password</p>
            </a>
          </li>
          @endif

          <li class="nav-item">
            <a href="{{ route('view.logout')}}" class="nav-link">
              <i class="fas fa-sign-out-alt text-danger"></i>
              <p>LogOut</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">@yield('main-title')</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('home') }}"></a></li>
                <li class="breadcrumb-item active"> @yield('active title')</li>
                <li class="breadcrumb-item active">@yield('sub-title')</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    @yield('content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; {{ now()->year }} - {{ now()->year+1 }}<a href="https://adminlte.io">{{ env('APP_NAME') }}</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> {{ env('APP_VERSION') }}
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('cms/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('cms/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('cms/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('cms/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('cms/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('cms/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('cms/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('cms/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('cms/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('cms/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('cms/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('cms/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('cms/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('cms/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('cms/dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('cms/dist/js/pages/dashboard.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script src="{{asset('cms/plugins/toastr/toastr.min.js')}}"></script>

<script src="{{asset('cms/js/crud.js')}}"></script>

@yield('scripts')
</body>
</html>
