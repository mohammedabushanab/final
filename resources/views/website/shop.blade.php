
@extends('website.parent')

@section('title' , 'Temp')






@section('styles')
<link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('website/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('website/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/owl.theme.default.min.css') }}">


    <link rel="stylesheet" href="{{ asset('website/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('website/css/style.css') }}">
@endsection
@section('content')
        <div class="bg-light py-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-0"><a href="{{ route('website.index') }}">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Store</strong></div>
                </div>
            </div>
        </div>

        <div class="site-section">
            <div class="container">

                <!-- <div class="row">
          <div class="col-lg-6">
            <h3 class="mb-3 h6 text-uppercase text-black d-block">Filter by Price</h3>
            <div id="slider-range" class="border-primary"></div>
            <input type="text" name="text" id="amount" class="form-control border-0 pl-0 bg-white" disabled="" />
          </div>
          <div class="col-lg-6">
            <h3 class="mb-3 h6 text-uppercase text-black d-block">Filter by Reference</h3>
            <button type="button" class="btn btn-secondary btn-md dropdown-toggle px-4" id="dropdownMenuReference"
              data-toggle="dropdown">Reference</button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
              <a class="dropdown-item" href="#">Relevance</a>
              <a class="dropdown-item" href="#">Name, A to Z</a>
              <a class="dropdown-item" href="#">Name, Z to A</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Price, low to high</a>
              <a class="dropdown-item" href="#">Price, high to low</a>
            </div>
          </div>
        </div> -->




                {{--  <div class="row mt-1 mb-1 button-group filter-button-group">
                    @foreach ( $categories as $category )

                    <div class="col d-flex justify-content-center">
                        <button type="button" data-filter="*" class="btn btn-primary mx-1 text-dark">{{ $category->name }}</button>
                    </div>
                    @endforeach

                </div>  --}}
                <div class="row mt-3 mb-4 button-group filter-button-group">
                    <div class="col d-flex justify-content-center">
                        <button type="button" data-filter="*" class="btn btn-primary mx-1 text-dark">All</button>
                        <button type="button" data-filter=".Vitamins" class="btn btn-primary mx-1 text-dark">Vitamins</button>
                        <button type="button" data-filter=".Supplements" class="btn btn-primary mx-1 text-dark">Supplements</button>
                        <button type="button" data-filter=".Diet" class="btn btn-primary mx-1 text-dark">Diet</button>
                    </div>
                </div>

                <div class="row" id="product-list">
                    {{--  <div class="col-sm-6 col-lg-4 text-center item mb-4 Vitamins">
                        <span class="tag">Sale</span>
                        <a href="{{ route('website.shopsingle') }}"> <img src="{{asset('website/images/product_01.png')}}"alt="Image"></a>
                        <h3 class="text-dark"><a href="{{ route('website.shopsingle') }}">Bioderma</a></h3>
                        <p class="price"><del>95.00</del> &mdash; $55.00</p>
                    </div>  --}}

                     @foreach ($medicines as $medicine )
                        {{--  @if($category->id == $medicine->category_id)  --}}


                        <div class="col-lg-4 col-sm-6 portfolio-item Vitamins">
                            <div class="card h-100">
                                <a href="#"><img class="card-img-top" src="{{asset('/storage/images/medicine/'. $medicine->image)}}" alt=""></a>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="#">{{ $medicine->name }}</a>
                                    </h4>
                                    <p class="card-text">
                                        {{ $medicine->description }}
                                    </p>
                                </div>

                            </div>
                        </div>
                        {{--  @endif  --}}
                        {{--  @endforeach  --}}

                    </div>


                    @endforeach
                    {{--  <div class="col-sm-6 col-lg-4 text-center item mb-4 Vitamins">
                        <a href="{{ route('website.shopsingle') }}"> <img src="{{asset('website/images/product_02.png')}}" alt="Image"></a>
                        <h3 class="text-dark"><a href="{{ route('website.shopsingle') }}">Chanca Piedra</a></h3>
                        <p class="price">$70.00</p>
                    </div>
                    <div class="col-sm-6 col-lg-4 text-center item mb-4 Supplements">
                        <a href="{{ route('website.shopsingle') }}"> <img src="{{asset('website/images/product_03.png')}}" alt="Image"></a>
                        <h3 class="text-dark"><a href="{{ route('website.shopsingle') }}">Umcka Cold Care</a></h3>
                        <p class="price">$120.00</p>
                    </div>

                    <div class="col-sm-6 col-lg-4 text-center item mb-4 Diet">

                        <a href="{{ route('website.shopsingle') }}"> <img src="{{asset('website/images/product_04.png')}}" alt="Image"></a>
                        <h3 class="text-dark"><a href="{{ route('website.shopsingle') }}">Cetyl Pure</a></h3>
                        <p class="price"><del>45.00</del> &mdash; $20.00</p>
                    </div>
                    <div class="col-sm-6 col-lg-4 text-center item mb-4 Diet">
                        <a href="{{ route('website.shopsingle') }}"> <img src="{{ asset('website/images/product_05.png') }}" alt="Image"></a>
                        <h3 class="text-dark"><a href="{{ route('website.shopsingle') }}">CLA Core</a></h3>
                        <p class="price">$38.00</p>
                    </div>
                    <div class="col-sm-6 col-lg-4 text-center item mb-4 Supplements">
                        <span class="tag">Sale</span>
                        <a href="{{ route('website.shopsingle') }}"> <img src="{{asset('website/images/product_06.png')}}" alt="Image"></a>
                        <h3 class="text-dark"><a href="{{ route('website.shopsingle') }}">Poo Pourri</a></h3>
                        <p class="price"><del>$89</del> &mdash; $38.00</p>
                    </div>

                    <div class="col-sm-6 col-lg-4 text-center item mb-4 electronic">
                        <span class="tag">Sale</span>
                        <a href="{{ route('website.shopsingle') }}"> <img src="{{ asset('website/images/product_03.png') }}" alt="Image"></a>
                        <h3 class="text-dark"><a href="{{ route('website.shopsingle') }}">Bioderma</a></h3>
                        <p class="price"><del>95.00</del> &mdash; $55.00</p>
                    </div>
                    <div class="col-sm-6 col-lg-4 text-center item mb-4 Diet">
                        <a href="{{ route('website.shopsingle') }}"> <img src="{{asset('website/images/product_02.png')}}" alt="Image"></a>
                        <h3 class="text-dark"><a href="{{ route('website.shopsingle') }}">Chanca Piedra</a></h3>
                        <p class="price">$70.00</p>
                    </div>
                    <div class="col-sm-6 col-lg-4 text-center item mb-4 Supplements">
                        <a href="{{ route('website.shopsingle') }}"> <img src="{{ asset('website/images/product_03.png') }}" alt="Image"></a>
                        <h3 class="text-dark"><a href="{{ route('website.shopsingle') }}">Umcka Cold Care</a></h3>
                        <p class="price">$120.00</p>
                    </div>

                    <div class="col-sm-6 col-lg-4 text-center item mb-4 Diet">

                        <a href="{{ route('website.shopsingle') }}"> <img src="{{ asset('website/images/product_04.png') }}" alt="Image"></a>
                        <h3 class="text-dark"><a href="{{ route('website.shopsingle') }}">Cetyl Pure</a></h3>
                        <p class="price"><del>45.00</del> &mdash; $20.00</p>
                    </div>
                    <div class="col-sm-6 col-lg-4 text-center item mb-4 Vitamins">
                        <a href="{{ route('website.shopsingle') }}"> <img src="{{ asset('website/images/product_05.png') }}" alt="Image"></a>
                        <h3 class="text-dark"><a href="{{ route('website.shopsingle') }}">CLA Core</a></h3>
                        <p class="price">$38.00</p>
                    </div>
                    <div class="col-sm-6 col-lg-4 text-center item mb-4 Vitamins">
                        <span class="tag">Sale</span>
                        <a href="{{ route('website.shopsingle') }}"> <img src="{{ asset('website/images/product_06.png') }}" alt="Image"></a>
                        <h3 class="text-dark"><a href="{{ route('website.shopsingle') }}">Poo Pourri</a></h3>
                        <p class="price"><del>$89</del> &mdash; $38.00</p>
                    </div>  --}}

                </div>
                <div class="row mt-5">
                    <div class="col-md-12 text-center">
                        <div class="site-block-27">
                            <ul>
                                <li><a href="#">&lt;</a></li>
                                <li class="active"><span>1</span></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">&gt;</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>







            {{--  <section class="gray-sec">
                <div class="container">
                    <!-- category Section -->
                    @foreach ($categories as $category )

                    <h3 class="my-4">{{ $category->name }}</h3>

                    <div class="row">
                        @foreach ($medicines as $medicine )
                        @if($category->id == $medicine->category_id)


                        <div class="col-lg-4 col-sm-6 portfolio-item">
                            <div class="card h-100">
                                <a href="#"><img class="card-img-top" src="{{asset('/storage/images/medicine/'. $medicine->image)}}" alt=""></a>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="#">{{ $medicine->name }}</a>
                                    </h4>
                                    <p class="card-text">
                                        {{ $medicine->description }}
                                    </p>
                                </div>

                            </div>
                        </div>
                        @endif
                        @endforeach

                    </div>


                    @endforeach

                </div>

            </section>  --}}


        </div>










        <div class="site-section bg-secondary bg-image" style="background-image: url('{{ asset('website/images/bg_2.jpg') }}');">
            <div class="container">
                <div class="row align-items-stretch">
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <a href="#" class="banner-1 h-100 d-flex" style="background-image: url('{{ asset('website/images/bg_1.jpg') }}');">
                            <div class="banner-1-inner align-self-center">
                                <h2>Pharma Products</h2>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae ex ad minus rem odio voluptatem.
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <a href="#" class="banner-1 h-100 d-flex" style="background-image: url('{{ asset('website/images/bg_2.jpg') }}');">
                            <div class="banner-1-inner ml-auto  align-self-center">
                                <h2>Rated by Experts</h2>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae ex ad minus rem odio voluptatem.
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>


     @endsection
     @section('scripts')

    {{--  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- isotope plugin -->
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>  --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
@endsection
</body>

</html>
