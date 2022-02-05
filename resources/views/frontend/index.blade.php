@extends('frontend.main_master')

@section('content')


    <!-- SERVICES slider SECTION -->
    <div class="service-section col-lg-12">
        <h2 class="text-center">We are looking for you.....</h2>
        <div class="swiper service-swiper">
            <div class="swiper-wrapper">
            
                @foreach($sliders as $slider)
                <div class="swiper-slide">
                    <div class="dashb-cap-single">
                        <div class="image">
                            <img src="{{ asset($slider->image) }}" alt="paint-roller" />
                        </div>
                        <p class="lead little-description2">{{$slider->content}}</p>
                    </div>
                </div>
                @endforeach
            </div> 
        </div>
        <button class="swiper-button-next"> <i class="fas fa-angle-double-right pt-5"></i> </button>
        <button class="swiper-button-prev"><i class="fas fa-angle-double-left pt-5"></i> </button>
    </div>

     <!--Core FEATURE SECTION -->
	<section class="core-feature-section col-lg-12">
		<div class="container-fluid">
			<h2>Core Feature</h2>
			<div class="cftr-card-container col-lg-10">
                @foreach ($cores as $core)
				<div class="single-card" data-aos="zoom-in">
					<div class="text-center">
						<img class="img-fluid" src="{{ asset($core->image) }}" alt="">
					</div>
					<p class="text-center">{{$core->heading}}</p>
				</div>
                @endforeach
			</div>
		</div>
	</section>

    <!-- FEATURE DETAILS SECTION -->
    <section class="feature-detail-section col-lg-12">
        <div class="container">
            <h2>Features Details</h2>

            @foreach ($features as $feature)
            <div class="ftrd-card-container">
               
                    
                
                <div class="single-card row">
                    <div class="col-lg-6">
                        <div class="image" data-aos="zoom-in">
                            <img src="{{ asset($feature->image) }}" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text pb-4" data-aos="zoom-in">
                            <h4 class="text-center pt-2">{{$feature->title}}</h4>
                            <p>{{$feature->content}}</p>
                            <div class="text-center py-4">
                                <button class="custom-btn">Buy Now</button>
                                <button class="custom-btn">Demo</button>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
            @endforeach
            
        </div>
    </section>

    
    <!-- IMAGE VIEW SECTION -->
	<div class="image-view-wrapper col-lg-12">
		<div class="image-section col-lg-12">
			<h2 class="text-center">Image view</h2>
			<div class="swiper image-swiper">
				<div class="swiper-wrapper">
                    @foreach($gallery as $gallery)
					<div class="swiper-slide">
						<a href=""><img src="{{ asset($gallery->image) }}" alt="" class="img-fluid"/></a>
					</div>
                    @endforeach
				</div>
			</div>
			<button class="swiper-button-next"> <i class="fas fa-angle-double-right pt-5"></i>  </button>
			<button class="swiper-button-prev"><i class="fas fa-angle-double-left pt-5"></i> </button>
		</div>
	</div>

    <!--Service Package section-->
    <section class="service-package-section col-lg-12">
        <div class="container-fluid">
            <h2 class="srvc-title">Service Package</h2>
            <div class="srvc-card-container col-lg-9 row">
              
                    
                @foreach ($services as $service)
                <div class="single-card">
                    <div class="text-center">
                        <h6>{{$service->title}}</h6>
                        <h5 class="price">{{$service->number}}</h5>
                    </div>
                    <div class="sub-card">
                        <div class="card-content" style="display: flex; flex-direction:column;"">
                            <p><i class="far fa-check-square"></i></p>
                            <p >{!!$service->content!!}</p>
                        </div>
            
                    </div>
                    <div class="choose-btn">
                        <button> <a href="">Choose Plan</a> </button>
                    </div>
                 
                </div>
                @endforeach

              
                {{-- <div class="single-card">
                    <div class="text-center">
                        <h6>Package 2</h6>
                        <h5 class="price">$90</h5>
                    </div>
                    <div class="sub-card">
                        <div class="card-content">
                            <p><i class="far fa-check-square"></i></p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, hic.</p>
                        </div>
                        <div class="card-content">
                            <p><i class="far fa-check-square"></i></p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, hic.</p>
                        </div>
                        <div class="card-content">
                            <p><i class="far fa-check-square"></i></p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, hic.</p>
                        </div>
                        <div class="card-content">
                            <p><i class="far fa-check-square"></i></p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, hic.</p>
                        </div>
                    </div>
                    <div class="choose-btn">
                        <button>Choose Plan</button>
                    </div>
                </div>
                <div class="single-card">
                    <div class="text-center">
                        <h6>Package 3</h6>
                        <h5 class="price">$110</h5>
                    </div>
                    <div class="sub-card">
                        <div class="card-content">
                            <p><i class="far fa-check-square"></i></p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, hic.</p>
                        </div>
                        <div class="card-content">
                            <p><i class="far fa-check-square"></i></p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, hic.</p>
                        </div>
                        <div class="card-content">
                            <p><i class="far fa-check-square"></i></p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, hic.</p>
                        </div>
                        <div class="card-content">
                            <p><i class="far fa-check-square"></i></p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, hic.</p>
                        </div>
                    </div>
                    <div class="choose-btn">
                        <button>Choose Plan</button>
                    </div>
                </div>
                <div class="single-card">
                    <div class="text-center">
                        <h6>Package 4</h6>
                        <h5 class="price">$135</h5>
                    </div>
                    <div class="sub-card">
                        <div class="card-content">
                            <p><i class="far fa-check-square"></i></p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, hic.</p>
                        </div>
                        <div class="card-content">
                            <p><i class="far fa-check-square"></i></p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, hic.</p>
                        </div>
                        <div class="card-content">
                            <p><i class="far fa-check-square"></i></p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, hic.</p>
                        </div>
                        <div class="card-content">
                            <p><i class="far fa-check-square"></i></p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, hic.</p>
                        </div>
                    </div>
                    <div class="choose-btn">
                        <button>Choose Plan</button>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>







@endsection
