<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!--bootstrap link-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.css')}}" />
	<link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}" />
	<link rel="stylesheet" href="{{asset('frontend/assets/css/menubar.css')}}">

	
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
    
		@include('frontend.body.header')

	<!-- header section end here -->
	<section class="home-section" style="background: url({{asset($header->image)}}) #041F2A; background-repeat: no-repeat; background-size: cover; background-position: center center;">
		<div class="text-center">
			<h1>{{$header->menu}}</h1>
		    <p>{{$header->sub_menu}}</p>
		</div>
	</section>

	<!---- Content Start Here -------->

    
		@yield('content')



	<!------Content End Here -------->


	<!------------- FOOTER SECTION START ------>

		@include('frontend.body.footer')

	<!------------- FOOTER SECTION END -------->

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