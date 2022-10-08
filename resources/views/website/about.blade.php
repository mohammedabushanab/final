@extends('website.parent')
@section('title' , 'About Us')






@section('styles')
@endsection

@section('content')
    <div class="site-blocks-cover inner-page" style="background-image: url('{{ asset('website/images/hero_1.jpg') }}');">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 mx-auto align-self-center">
            <div class=" text-center">
              <h1>About Us</h1>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light custom-border-bottom" data-aos="fade">
      <div class="container">
        @foreach ( $abouts as $about )


        <div class="row mb-5">

          <div class="col-md-6">
            <div class="block-16">
              <figure>
                <img src="{{asset('/storage/images/about/'. $about->image)}}" alt="Image placeholder" class="img-fluid rounded">
                {{--  <a href="https://vimeo.com/channels/staffpicks/93951774" class="play-button popup-vimeo"><span
                    class="icon-play"></span></a>  --}}

              </figure>
            </div>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-5">


            <div class="site-section-heading pt-3 mb-4">
                <h2 class="text-black">{{ $about->title }}</h2>
            </div>
            <p class="text-black">{{ $about->description }}</p>

          </div>
        </div>
        @endforeach

      </div>
    </div>



     {{--  <div class="site-section bg-light custom-border-bottom" data-aos="fade">
      <div class="container">
        @foreach ( $abouts as $about )  --}}


        {{--  <div class="row mb-5">
          <div class="col-md-6 order-md-2">
            <div class="block-16">
              <figure>
                <img src="{{ asset('website/images/hero_1.jpg') }}" alt="Image placeholder" class="img-fluid rounded">
                <a href="https://vimeo.com/channels/staffpicks/93951774" class="play-button popup-vimeo"><span
                    class="icon-play"></span></a>

              </figure>
            </div>
          </div>
          <div class="col-md-5 mr-auto">


            <div class="site-section-heading pt-3 mb-4">
              <h2 class="text-black">{{ $about->title }}</h2>
            </div>
            <p class="text-black">{{ $about->description }}</p>

          </div>
        </div>
        @endforeach

      </div>
    </div>  --}}








@endsection
@section('scripts')
@endsection


</body>

</html>
