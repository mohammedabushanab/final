@extends('website.parent')

@section('title' , 'Temp')






@section('styles')
@endsection
@section('content')

        <div class="bg-light py-3">
            <div class="container">
                <div class="row">

                    {{--  <div class="col-md-12 mb-0"><a href="{{ route('website.index') }}">Home</a> <span class="mx-2 mb-0">/</span> <a href="shop.html">Store</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">{{ $medicine->name }}</strong></div>  --}}
                </div>
            </div>
        </div>

        <div class="site-section">
            <div class="container">

                <div class="row">

                    @foreach ( $medicines as $medicine )


                    <div class="col-md-5 mr-auto">
                        {{--  <input type="text" name="medicine_id" id="medicine_id" value="{{id}}"
                        class="form-control form-control-solid" hidden/>  --}}

                        <div class="border text-center">
                            <img src="{{asset('/storage/images/medicine/'. $medicine->image)}}" alt="Image" class="img-fluid p-5">
                        </div>
                    </div>
                    <div class="col-md-6">

                        <h2 class="text-black">{{ $medicine->name }}</h2>
                        <p>
                            {{ $medicine->description }}
                        </p>


                        <p> <strong class="text-primary h4">{{ $medicine->code }}</strong></p>




                        {{--  <p><a href="{{ route('website.cart') }}" class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary">Add To Cart</a></p>  --}}

                        <!-- <div class="mt-5">
              <ul class="nav nav-pills mb-3 custom-pill" id="pills-tab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                    aria-controls="pills-home" aria-selected="true">Ordering Information</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                    aria-controls="pills-profile" aria-selected="false">Specifications</a>
                </li>

              </ul>
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                  <table class="table custom-table">
                    <thead>
                      <th>Material</th>
                      <th>Description</th>
                      <th>Packaging</th>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">OTC022401</th>
                        <td>Pain Management: Acetaminophen PM Extra-Strength Caplets, 500 mg, 100/Bottle</td>
                        <td>1 BT</td>
                      </tr>
                      <tr>
                        <th scope="row">OTC022401</th>
                        <td>Pain Management: Acetaminophen PM Extra-Strength Caplets, 500 mg, 100/Bottle</td>
                        <td>144/CS</td>
                      </tr>
                      <tr>
                        <th scope="row">OTC022401</th>
                        <td>Pain Management: Acetaminophen PM Extra-Strength Caplets, 500 mg, 100/Bottle</td>
                        <td>1 EA</td>
                      </tr>

                    </tbody>
                  </table>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

                  <table class="table custom-table">

                    <tbody>
                      <tr>
                        <td>HPIS CODE</td>
                        <td class="bg-light">999_200_40_0</td>
                      </tr>
                      <tr>
                        <td>HEALTHCARE PROVIDERS ONLY</td>
                        <td class="bg-light">No</td>
                      </tr>
                      <tr>
                        <td>LATEX FREE</td>
                        <td class="bg-light">Yes, No</td>
                      </tr>
                      <tr>
                        <td>MEDICATION ROUTE</td>
                        <td class="bg-light">Topical</td>
                      </tr>
                    </tbody>
                  </table>

                </div>

              </div>
            </div> -->

            @endforeach

                    </div>
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
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <a href="#" class="banner-1 h-100 d-flex" style="background-image: url('{{ asset('website/images/bg_2.jpg') }}');">
                            <div class="banner-1-inner ml-auto  align-self-center">
                                <h2>Rated by Experts</h2>
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
