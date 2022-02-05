<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!--bootstrap link-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.css')}}" />
	<link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css')}}" />
	<link rel="stylesheet" href="{{ asset('frontend/assets/css/menubar.css')}}">

	
	<!--animation link-->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<!--css link for swiper-->
	<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

	<!--fontawesome link-->
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	
	<title>ExcelItAi</title>
</head>
<body data-spy="scroll" data-target="#navbarNav" data-offset="25">

	<!-- header section start here -->
    <header class="header-section" id="navbar">
		<div class="main-menu" >
			<nav class="navbar navbar-expand-lg navbar-light ">
				<div class="container-fluid">
				  <a class="navbar-brand" href="index.html"><img src="{{('frontend/assets/img/logo.png')}}" alt="logo"></a>
				  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>            
				  </button>
				  <div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ms-auto">
					  <li class="nav-item">
						<a class="nav-link active" aria-current="page" href="https://excelitai.com/">Home</a>
					  </li>
					  <li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						  Company
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						  <li><a class="dropdown-item" href="https://excelitai.com/about">About Company</a></li>
						  <li><a class="dropdown-item" href="https://excelitai.com/why-choose-us">Why Choose Us</a></li>
						  <li><a class="dropdown-item" href="https://excelitai.com/organogram">Organogram</a></li>
						  <li><a class="dropdown-item" href="https://excelitai.com/methodology">Methodology</a></li>
						  <li>
							<a class="dropdown-item" href="#">Team &nbsp; &nbsp; &nbsp; <span ><i class="fas fa-angle-right ml-3"></i></span></a> 
							<ul class="submenu">
							  <li><a class="submenu-item" href="https://excelitai.com/management">Management</a></li>
							  <li><a class="submenu-item" href="https://excelitai.com/team/software-team">Software Team</a></li>                                      
							</ul>
						  </li>                             
						</ul>
					  </li>
					  <li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						  Course
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						  <li><a class="dropdown-item" href="https://excelitai.com/course/laravel-course"> Laravel </a></li>                      
						  <li><a class="dropdown-item" href="https://excelitai.com/course/flutter-course"> Flutter </a></li>                      
						  <li><a class="dropdown-item" href="https://excelitai.com/course/ui/ux-course"> UI/UX Design </a></li>                      
						  <li><a class="dropdown-item" href="https://excelitai.com/course/digital-marketing"> Degital Marketing </a></li>                      
						</ul>
					  </li>
					  <li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						  Services
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						  <li><a class="dropdown-item" href="https://excelitai.com/service/web-application"> Web Application Development </a></li>                      
						  <li><a class="dropdown-item" href="https://excelitai.com/service/mobile-application"> Mobile Application Development </a></li>                      
						  <li><a class="dropdown-item" href="https://excelitai.com/services/ui-ux-design"> UI/UX Design </a></li>                      
						  <li><a class="dropdown-item" href="https://excelitai.com/services/custom-software"> Custom Software Development </a></li>                      
						  <li><a class="dropdown-item" href="https://excelitai.com/services/digital-marketing"> Degital Marketing </a></li>                      
						</ul>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" href="index.html">Our Project Demo</a>
					  </li>           
					  <li class="nav-item">
						<a class="nav-link" href="https://excelitai.com/career">Career</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" href="https://excelitai.com/contact">Contact Us</a>
					  </li> 
					</ul>
				</div>
			</nav>
		</div>        
    </header>
	<!-- header section end here -->
	<section class="home-section">
		<div class="text-center">
			<h1>Restaurant Management System(RMS)</h1>
		    <p>Restaurant Management System(RMS)</p>
		</div>
	</section>

	<!-- SERVICES slider SECTION -->
	<div class="service-section col-lg-12">
		<h2 class="text-center">We are looking for you.....</h2>
		<div class="swiper service-swiper">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<div class="dashb-cap-single">
						<div class="image">
							<img src="{{('frontend/assets/img/flower.jpg')}}" alt="paint-roller" />
						</div>
						<p class="lead little-description2">Lorem Ipsum is simply dummy text of the and type setting industry.</p>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="dashb-cap-single">
						<div class="image">
							<img src="{{('frontend/assets/img/flower.jpg')}}" alt="paint-roller" />
						</div>
						<p class="lead little-description2">Lorem Ipsum is simply dummy text of the and type setting industry.</p>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="dashb-cap-single">
						<div class="image">
							<img src="{{('frontend/assets/img/flower.jpg')}}" alt="paint-roller" />
						</div>
						<p class="lead little-description2">Lorem Ipsum is simply dummy text of the and type setting industry.</p>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="dashb-cap-single">
						<div class="image">
							<img src="{{('frontend/assets/img/flower.jpg')}}" alt="paint-roller" />
						</div>
						<p class="lead little-description2">Lorem Ipsum is simply dummy text of the and type setting industry.</p>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="dashb-cap-single">
						<div class="image">
							<img src="{{('frontend/assets/img/flower.jpg')}}" alt="paint-roller" />
						</div>
						<p class="lead little-description2">Lorem Ipsum is simply dummy text of the and type setting industry.</p>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="dashb-cap-single">
						<div class="image">
							<img src="{{('frontend/assets/img/flower.jpg')}}" alt="paint-roller" />
						</div>
						<p class="lead little-description2">Lorem Ipsum is simply dummy text of the and type setting industry.</p>
					</div>
				</div>
			</div>
		</div>
		<button class="swiper-button-next"> <i class="fas fa-angle-double-right pt-5"></i>  </button>
		<button class="swiper-button-prev"><i class="fas fa-angle-double-left pt-5"></i> </button>
	</div>
	
	<!--Core FEATURE SECTION -->
	<section class="core-feature-section col-lg-12">
		<div class="container-fluid">
			<h2>Core Feature</h2>
			<div class="cftr-card-container col-lg-10">
				<div class="single-card" data-aos="fade-up">
					<div class="text-center">
						<img class="img-fluid" src="{{('frontend/assets/img/slide.jpg')}}" alt="">
					</div>
					<p class="text-center">Smart Card System</p>
				</div>
				<div class="single-card" data-aos="zoom-in">
					<div class="text-center">
						<img class="img-fluid" src="{{('frontend/assets/img/slide.jpg')}}" alt="">
					</div>
					<p class="text-center">Smart Card System</p>
				</div>
				<div class="single-card" data-aos="zoom-in">
					<div class="text-center">
						<img class="img-fluid" src="{{('frontend/assets/img/slide.jpg')}}" alt="">
					</div>
					<p class="text-center">Smart Card System</p>
				</div>
				<div class="single-card" data-aos="zoom-in">
					<div class="text-center">
						<img class="img-fluid" src="{{('frontend/assets/img/slide.jpg')}}" alt="">
					</div>
					<p class="text-center">Smart Card System</p>
				</div>
				<div class="single-card" data-aos="fade-up">
					<div class="text-center">
						<img class="img-fluid" src="{{('frontend/assets/img/slide.jpg')}}" alt="">
					</div>
					<p class="text-center">Smart Card System</p>
				</div>
				<div class="single-card" data-aos="fade-down">
					<div class="text-center">
						<img class="img-fluid" src="{{('frontend/assets/img/slide.jpg')}}" alt="">
					</div>
					<p class="text-center">Smart Card System</p>
				</div>
				<div class="single-card" data-aos="zoom-in">
					<div class="text-center">
						<img class="img-fluid" src="{{('frontend/assets/img/slide.jpg')}}" alt="">
					</div>
					<p class="text-center">Smart Card System</p>
				</div>
				<div class="single-card" data-aos="zoom-in">
					<div class="text-center">
						<img class="img-fluid" src="{{('frontend/assets/img/slide.jpg')}}" alt="">
					</div>
					<p class="text-center">Smart Card System</p>
				</div>
				<div class="single-card" data-aos="zoom-in">
					<div class="text-center">
						<img class="img-fluid" src="{{('frontend/assets/img/slide.jpg')}}" alt="">
					</div>
					<p class="text-center">Smart Card System</p>
				</div>
				<div class="single-card" data-aos="zoom-in">
					<div class="text-center">
						<img class="img-fluid" src="{{('frontend/assets/img/slide.jpg')}}" alt="">
					</div>
					<p class="text-center">Smart Card System</p>
				</div>
				
			</div>
		</div>
	</section>
	
	<!-- FEATURE DETAILS SECTION -->
	<section class="feature-detail-section col-lg-12">
		<div class="container">
			<h2>Features Details</h2>
			<div class="ftrd-card-container">
				<div class="single-card row">
					<div class="col-lg-6">
						<div class="image" data-aos="zoom-in">
							<img src="{{('frontend/assets/img/img.jpg')}}" class="img-fluid" alt="">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="text pb-4" data-aos="zoom-in">
							<h4 class="text-center pt-2">Title</h4>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem quae nihil accusamus, reprehenderit provident obcaecati corporis et harum voluptate labore, beatae porro magnam ratione, nulla perferendis temporibus maxime id dolore. Odit, aliquam deserunt numquam aut vel quis reprehenderit fuga pariatur quia dolore tempore itaque qui aperiam voluptatem, possimus amet vero.</p>
							<div class="text-center py-4">
								<button class="custom-btn">Buy Now</button>
							    <button class="custom-btn">Demo</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="ftrd-card-container">
				<div class="single-card row sngcrd-2">
					<div class="col-lg-6">
						<div class="text pb-4" data-aos="zoom-in">
							<h4  class="text-center pt-2">Title</h4>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem quae nihil accusamus, reprehenderit provident obcaecati corporis et harum voluptate labore, beatae porro magnam ratione, nulla perferendis temporibus maxime id dolore. Odit, aliquam deserunt numquam aut vel quis reprehenderit fuga pariatur quia dolore tempore itaque qui aperiam voluptatem, possimus amet vero.</p>
							<div class="text-center py-4">
								<button class="custom-btn">Buy Now</button>
							    <button class="custom-btn">Demo</button>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="image" data-aos="zoom-in">
							<img src="{{('frontend/assets/img/img.jpg')}}" class="img-fluid" alt="">
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!-- IMAGE VIEW SECTION -->
	<div class="image-view-wrapper col-lg-12">
		<div class="image-section col-lg-12">
			<h2 class="text-center">Image view</h2>
			<div class="swiper image-swiper">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<a href=""><img src="{{('frontend/assets/img/slide.jpg')}}" alt="" class="img-fluid"/></a>
					</div>
					<div class="swiper-slide">
						<a href=""><img src="{{('frontend/assets/img/slide.jpg')}}" alt="" class="img-fluid" /></a>
					</div>
					<div class="swiper-slide">
						<a href=""><img src="{{('frontend/assets/img/slide.jpg')}}" alt="" class="img-fluid" /></a>
					</div>
					<div class="swiper-slide">
						<a href=""><img src="{{('frontend/assets/img/slide.jpg')}}" alt="" class="img-fluid" /></a>
					</div>
					<div class="swiper-slide">
						<a href=""><img src="{{('frontend/assets/img/slide.jpg')}}" alt="" class="img-fluid" /></a>
					</div>
	
					<div class="swiper-slide">
						<a href=""><img src="{{('frontend/assets/img/slide.jpg')}}" alt="" class="img-fluid" /></a>
					</div>
					<div class="swiper-slide">
						<a href=""><img src="{{('frontend/assets/img/slide.jpg')}}" alt="" class="img-fluid" /></a>
					</div>
					<div class="swiper-slide">
						<a href=""><img src="{{('frontend/assets/img/slide.jpg')}}" alt="" class="img-fluid" /></a>
					</div>
					<div class="swiper-slide">
						<a href=""><img src="{{('frontend/assets/img/slide.jpg')}}" alt="" class="img-fluid" /></a>
					</div>
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
				<div class="single-card">
					<div class="text-center">
						<h6>Package-1</h6>
						<h5 class="price">$55</h5>
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
				</div>
			</div>
		</div>
	</section>

	<!-- FOOTER SECTION -->

	<footer class="footer-section">
		<!-- footer bottom start -->
		<div class="footer-top">
		  <div class="container">
			<div class="row">
			  <div class="col-lg-4 col-md-6 col-12">
				<div class="ft-single">
				  <h3 class="gradientText">Office Location</h3>
				  <div class="ft-box-one">
					<div class="ft-data">
					  <p class="hover location">17, Alhaz Samsuddin Mansion (9th Floor), Moghbazar, New Easkaton, Ramna, Dhaka-1217</p>
					  <div class="ft-quict">
						<h4 class="gradientText pt-4">Quick Contact</h4>
						<div class="contuctInfo">
							<p><i class="fas fa-envelope"></i><span class="hover ps-3">info@excelitai.com</span></p>
							<p><i class="fas fa-phone phone"></i><span class="hover ps-3">+88 01611815656</span></p>
							<p><i class="fas fa-phone phone"></i><span class="hover ps-3">+88 01407000293</span></p>
							<p><i class="fas fa-phone phone"></i><span class="hover ps-3">+88 01958444646</span></p>
						</div>
					  </div>
					</div>
				  </div>             
				</div>
			  </div>
			  <!-- col end -->
			  <div class="col-lg-4 col-md-6 col-12">
				<div class="ft-single">
				  <h3 class="gradientText">Useful Links</h3>
				  <div class="ft-box-two">
					  <div class="ft-data">
						  <ul>
							<li class="hover"><a href="#">Fintech</a></li>
							<li class="hover"><a href="#"> Healthcare & Medicine </a></li>
							<li class="hover"><a href="#"> Financials & Banking </a></li>
							<li class="hover"><a href="#"> Education </a></li>
							<li class="hover"><a href="#"> Real Estate </a></li>
							<li class="hover"><a href="#"> Retail Software </a></li>
						  </ul>                
					  </div>
				  </div>
				</div>             
			  </div>
			  <!-- col end -->
			  <div class="col-lg-4 col-md-6 col-12">
				<div class="ft-box-three-wrapper">
						<div class="ft-single">
							<h3 class="gradientText">About Company</h3>
							<div class="ft-box-three">
								<div class="ft-data">
								 <p class="hover">Our Goal Is To Help Your Company For Achieving Best Class Positions To Your Respective Field</p>
								</div>
							</div>
					  </div> 
					  <div class="ft-social">
						  <ul>
							<li class="hover"><a class="fb"  href="https://www.facebook.com/shaplacityltd/" target="blank"> <i class="fab fa-facebook-f"></i> </a></li>
							<li class="hover"><a class="tw" href="https://twitter.com/shaplacityltd" target="blank"> <i class="fab fa-twitter"></i> </a></li>
							<li class="hover"><a class="link" href="https://twitter.com/shaplacityltd" target="blank"> <i class="fab fa-linkedin"></i> </a></li>
							<li class="hover"><a class="ins" href="https://www.instagram.com/shaplacity/?hl=bn" target="blank"> <i class="fab fa-instagram inytbColor"></i>  </a></li>
							<li class="hover"><a  class="youtube" href="https://www.youtube.com/channel/UCKVQNkBekad0IiGwZGaggAQ" target="blank"> <i class="fab fa-youtube inytbColor"></i> </a></li>
						  </ul>
					  </div> 
				</div>           
			  </div>
			</div>
			<!-- row end -->
		  </div>
		</div>

		<div class="footer-middle">
			<div class="member-list-container container">
				<div></div>
				<div class="member-list">
					<p class="hover pe-3">Member Of: </p>
 				    <a class="ft-basis" href="https://basis.org.bd/company-profile/21-11-004"> <img src="img/basis-logo.svg"></a>
				</div>
				<div class="ft-qrCode">
					<a href="https://excelitai.com/"><img src="img/qrCode.png" alt=""></a>
				</div>
			</div>
		</div>
		
		<!-- footer bottom start -->
		<div class="footer-bottom">
		  <div class="container">
			<div class="row">
			  <div class="col-12">
				<div class="fb-wrapper text-center">
				  <div class="Copyright">
					<p>  &copy; Copyright 2021 <a href="https://excelitai.com/"><span>Excel IT AI </span></a> All Right Reserve </p>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	</footer>

	<!-- jquery cdn link -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<!--Aos cdn-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
	
	<script>
		AOS.init({
			duration: 2000, 
		});
	</script>


	
	<!-- SCRIPT for swiper slider -->
	<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
	<script type="module">

		const swiper = new Swiper('.service-swiper', {
			// Optional parameters
			direction: 'horizontal',
			loop: true,
			autoplay: {
				delay: 2000,
			},

			// Navigation arrows
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},

			breakpoints: {
				// when window width is >= 320px
				320: {
					slidesPerView: 1,
					spaceBetween: 20
				},
				601: {
					slidesPerView: 2,
					spaceBetween: 20
				},
				// when window width is >= 480px
				992: {
					slidesPerView: 3,
					spaceBetween: 20
				},
				
				1232: {
					slidesPerView: 4,
					spaceBetween: 20
				},

				1800: {
					slidesPerView: 5,
					spaceBetween: 20
				}
			},
		});

		const imageSwiper = new Swiper('.image-swiper', {
			// Optional parameters
			direction: 'horizontal',
			loop: true,
			autoplay: {
				delay: 2000,
			},

			// Navigation arrows
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},

			breakpoints: {
				// when window width is >= 320px
				320: {
					slidesPerView: 1,
					spaceBetween: 10
				},
				601: {
					slidesPerView: 2,
					spaceBetween: 10
				},
				// when window width is >= 480px
				992: {
					slidesPerView: 3,
					spaceBetween: 10
				},
				
				1232: {
					slidesPerView: 5,
					spaceBetween: 10
				},

				1800: {
					slidesPerView: 7,
					spaceBetween: 20
				}
			},
		});
	</script>
	

</body>

</html>