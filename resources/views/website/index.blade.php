
@extends('website.parent')

@section('title' , 'Home')


@section('styles')
@endsection
@section('content')
        <div class="site-blocks-cover" style="background-image: url('{{ asset('website/images/hero_1.jpg') }}');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 mx-auto order-lg-2 align-self-center">
                        <div class="site-block-cover-content text-center">
                            <h2 class="sub-title">Effective Medicine, New Medicine Everyday</h2>
                            <h1>Welcome To Pharma</h1>
                            <p>
                                <a href="{{ route('website.shop') }}" class="btn btn-primary px-5 py-3">Shop Now</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section">
            <div class="container">
                <div class="row align-items-stretch section-overlap">
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <div class="banner-wrap bg-primary h-100">
                            <a href="#" class="h-100">
                                <h5>Free <br> Shipping</h5>
                                <p>
                                    Amet sit amet dolor
                                    <strong>Lorem, ipsum dolor sit amet consectetur adipisicing.</strong>
                                </p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <div class="banner-wrap h-100">
                            <a href="#" class="h-100">
                                <h5>Season <br> Sale 50% Off</h5>
                                <p>
                                    Amet sit amet dolor
                                    <strong>Lorem, ipsum dolor sit amet consectetur adipisicing.</strong>
                                </p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <div class="banner-wrap bg-warning h-100">
                            <a href="#" class="h-100">
                                <h5>Buy <br> A Gift Card</h5>
                                <p>
                                    Amet sit amet dolor
                                    <strong>Lorem, ipsum dolor sit amet consectetur adipisicing.</strong>
                                </p>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="site-section">
            <div class="container">
                <div class="row">
                    <div class="title-section text-center col-12">
                        <h2 class="text-uppercase">Popular Products</h2>
                    </div>
                </div>

                <div class="row">
                    @foreach ( $medicines as $medicine )


                    <div class="col-sm-6 col-lg-4 text-center item mb-4">
                        <span class="tag">Sale</span>
                        <a href="{{ route('website.shopsingle') }}"> <img src="{{ asset('/storage/images/medicine/'. $medicine->image) }} " alt="Image"></a>
                        <h3 class="text-dark"><a href="{{ route('website.shopsingle') }}">{{ $medicine->name  }}</a></h3>
                        <p class="price"><del>95.00</del> &mdash; $55.00</p>
                        <span></span>
                    </div>
                    @endforeach


                </div>
                <div class="row mt-5">
                    <div class="col-12 text-center">
                        <a href="{{ route('website.shop') }}" class="btn btn-primary px-4 py-3">View All Products</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="site-section bg-light">
            <div class="container">
                <div class="row">
                    <div class="title-section text-center col-12">
                        <h2 class="text-uppercase">New Products</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 block-3 products-wrap">

                        <div class="nonloop-block-3 owl-carousel">
                            @foreach($sliders as $slider)
                            <div class="text-center item mb-4 @if($loop->first) active @endif">
                                <a href="{{ route('website.shopsingle') }}"> <img src="{{ asset('/storage/images/slider/'. $slider->image) }}" alt="Image"></a>
                                <h3 class="text-dark"><a href="{{ route('website.shopsingle') }}">{{ $slider->name }}</a></h3>
                                <p class="price">{{ $slider->price }}</p>
                            </div>
                            @endforeach




                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section">
            <div class="container">
                <div class="row">
                    {{-- <div class="title-section text-center col-12">
                        <h2 class="text-uppercase">Testimonials</h2>
                    </div> --}}
                </div>
                <div class="row">
                    {{-- <div class="col-md-12 block-3 products-wrap">
                        <div class="nonloop-block-3 no-direction owl-carousel">

                            <div class="testimony">
                                <blockquote>
                                    <img src="{{ asset('website/images/person_1.jpg') }}" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
                                    <p>&ldquo;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem consectetur quam tempore obcaecati maiores voluptate aspernatur iusto eveniet, placeat ab quod tenetur ducimus. Minus ratione sit
                                        quaerat unde.&rdquo;</p>
                                </blockquote>

                                <p>&mdash; Kelly Holmes</p>
                            </div>

                            <div class="testimony">
                                <blockquote>
                                    <img src="{{ asset('website/images/person_2.jpg') }}" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
                                    <p>&ldquo;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem consectetur quam tempore obcaecati maiores voluptate aspernatur iusto eveniet, placeat ab quod tenetur ducimus. Minus ratione sit
                                        quaerat unde.&rdquo;
                                    </p>
                                </blockquote>

                                <p>&mdash; Rebecca Morando</p>
                            </div>

                            <div class="testimony">
                                <blockquote>
                                    <img src="{{ asset('website/images/person_3.jpg') }}" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
                                    <p>&ldquo;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem consectetur quam tempore obcaecati maiores voluptate aspernatur iusto eveniet, placeat ab quod tenetur ducimus. Minus ratione sit
                                        quaerat unde.&rdquo;
                                    </p>
                                </blockquote>

                                <p>&mdash; Lucas Gallone</p>
                            </div>

                            <div class="testimony">
                                <blockquote>
                                    <img src="{{ asset('website/images/person_4.jpg') }}" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
                                    <p>&ldquo;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem consectetur quam tempore obcaecati maiores voluptate aspernatur iusto eveniet, placeat ab quod tenetur ducimus. Minus ratione sit
                                        quaerat unde.&rdquo;
                                    </p>
                                </blockquote>

                                <p>&mdash; Andrew Neel</p>
                            </div>

                        </div>
                    </div> --}}
                </div>
            </div>
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
@endsection



</body>

</html>
