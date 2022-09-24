@extends('cms.parent')
@section('title','mian')

@section('styles')

@endsection

@section('content')

<div class="container-fluid">
    <div class="row">
        @php
        use App\Models\Admin;
        $count = Admin::count('id');
        @endphp

        <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-red text-center">
                <div class="inner">
                    <h3>{{$count}}</h3>

                    <h3>number of admin</h3>
                </div>
                <div class="icon">

                    <i class="ion ion-bag"></i>
                </div>
                <a href="{{route('admins.index')}}" class="small-box-footer"> read more <i class="fa fa-arrow-circle-left"></i></a>
            </div>
        </div>
        <!-- ./col -->

            @php
        use App\Models\Doctor;
        $docCount = Doctor::count('id');
        @endphp
        <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-primary text-center">
                <div class="inner">
                    <h3>{{$docCount}}</h3>

                    <h3>number of doctor</h3>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="{{route('doctors.index')}}" class="small-box-footer"> read more <i class="fa fa-arrow-circle-left"></i></a>
            </div>
        </div>
        <!-- ./col -->

          @php
        use App\Models\supplier;
        $supplCount = Supplier::count('id');
        @endphp
        <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success text-center">
                <div class="inner">
                    <h3>{{$supplCount}}</h3>

                    <h3>number of supplier</h3>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="{{route('suppliers.index')}}" class="small-box-footer"> read more <i class="fa fa-arrow-circle-left"></i></a>
            </div>
        </div>
        <!-- ./col -->

        @php
        use App\Models\Medicine;
        $medcount = Medicine::count('id');
        @endphp

        <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-red text-center">
                <div class="inner">
                    <h3>{{$medcount}}</h3>

                    <h3>number of medicine</h3>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="{{route('medicines.index')}}" class="small-box-footer"> read more <i class="fa fa-arrow-circle-left"></i></a>
            </div>
        </div>


          @php
        use App\Models\Store;
        $storcount = Store::count('id');
        @endphp

        <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-primary text-center">
                <div class="inner">
                    <h3>{{$storcount}}</h3>

                    <h3>store</h3>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="{{route('stores.index')}}" class="small-box-footer"> read more <i class="fa fa-arrow-circle-left"></i></a>
            </div>
        </div>

          @php
        use App\Models\Sale;
        $count = Sale::count('id');
        @endphp

        <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-green text-center">
                <div class="inner">
                    <h3>{{$count}}</h3>

                    <h3>sale</h3>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="{{route('sales.index')}}" class="small-box-footer"> read more <i class="fa fa-arrow-circle-left"></i></a>
            </div>
        </div>

        @php
        use App\Models\About;
        $count = About::count('id');
        @endphp

        <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-red text-center">
                <div class="inner">
                    <h3>{{$count}}</h3>

                    <h3>About us</h3>
                </div>
                <div class="icon">

                    <i class="ion ion-bag"></i>
                </div>
                <a href="{{route('abouts.index')}}" class="small-box-footer"> read more <i class="fa fa-arrow-circle-left"></i></a>
            </div>
        </div>

        @php
        use App\Models\Category;
        $catCount = Category::count('id');
        @endphp
        <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-primary text-center">
                <div class="inner">
                    <h3>{{$catCount}}</h3>

                    <h3>number of category</h3>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="{{route('categories.index')}}" class="small-box-footer"> read more <i class="fa fa-arrow-circle-left"></i></a>
            </div>
        </div>

    </div>
</div>

@endsection

@section('scripts')

@endsection
