<!DOCTYPE html>
<html lang="en">
<head>
<title>Thừa Thiên Huế</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Grand Tour Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
	
	<!-- css files -->
    <link href="{{asset('source/css/bootstrap.css')}}" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href="{{asset('source/css/style.css')}}"rel='stylesheet' type='text/css' /><!-- custom css -->
    <link href="{{asset('source/css/font-awesome.min.css')}}" rel="stylesheet"><!-- fontawesome css -->
	<!-- //css files -->
	
	<link href="{{asset('source/css/css_slider.css')}}" type="text/css" rel="stylesheet" media="all">

	<!-- google fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<!-- //google fonts -->
	
</head>
<body>

<!-- header -->
<header>
	<div class="container">
		<!-- nav -->
		<nav class="py-md-4 py-3 d-lg-flex">
			<div id="logo">
				<h1 class="mt-md-0 mt-2"> <a href="index.html"><span class="fa fa-map-signs"></span> Khám Phá Huế </a></h1>
			</div>
			<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
			<input type="checkbox" id="drop" /> 
			<ul class="menu ml-auto mt-1">
				<li class="active"><a href="{{route('news.index')}}">Trang chủ</a></li>
				<li class=""><a href="{{route('send')}}">Về chúng tôi</a></li>
				<li class=""><a href="{{route('page.index')}}">Dịch vụ</a></li>
		
			@if (Route::has('login'))
					@auth
					<div>
					  <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                    @endauth
                </div>
			@endif
			</ul>
		</nav>
		<!-- //nav -->
	</div>
</header>