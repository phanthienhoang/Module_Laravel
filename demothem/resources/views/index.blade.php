<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
@extends('layouts.master')
@section('content')
@include('partials.slides')
<section class="packages py-5">
	<div class="container py-lg-4 py-sm-3">
		<h3 class="heading text-capitalize text-center"> Các tour du lịch </h3>
		<p class="text mt-2 mb-5 text-center"></p>
		<div class="row">
		@foreach($tours as $tour)
			<div class="col-lg-3 col-sm-6">
				<div class="image-tour position-relative">
				<a href="{{route('page.settour',$tour->id)}}"><img src="{{ asset('storage/images/' . $tour->image) }}" alt="" class="img-fluid" />
					<p><span class="fa fa-tags"></span> <span>{{number_format($tour->price)}} VND</span></p>
				</div>
				<div class="package-info">
					<h6 class="mt-1"><span class="fa fa-map-marker mr-2"></span>{{$tour->tourName}}</h6>
					<h5 class="my-2">Phương tiện di chuyển</h5>
					<p class="">{{$tour->transport}}</p>
					<ul class="listing mt-3">
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>10 Days</span></li>
					</ul>
				</div></a>
			</div>
		@endforeach
		<div class="view-package text-center mt-4">
			<a href="{{route('page.index')}}">Xem tất cả</a>
		</div>
	</div>
</section>

<section class="text-content">
	<div class="overlay-inner py-5">
		<div class="container py-md-3">
			<div class="test-info">
				<h4 class="tittle">Nghĩ ngơi trướcc khi mệt</h4>
				<p class="mt-3"></p>
				<div class="text-left mt-4">
						<a href="booking.html">Book Now</a>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="destinations py-5" id="destinations">
	<div class="container py-xl-5 py-lg-3">
		<h3 class="heading text-capitalize text-center"> du lịch huế</h3>
		<p class="text mt-2 mb-5 text-center">Với di sản văn hoá thế giới, cảnh quan thiên nhiên, nhiều di tích lịch sử, các sản phẩm đặc sản, nhất là nhà vườn là một nét độc đáo tiêu biểu của thành phố Huế như: nhà vườn An Hiên, Lạc Tịnh Viên, nhà vườn Ngọc Sơn Công Chúa, Tỳ Bà Trang, Tịnh Gia Viên... cùng với hệ thống khách sạn, nhà hàng, các dịch vụ phục vụ khác, thành phố đã và đang trở thành một trung tâm du lịch rất hấp dẫn khách du lịch đến Huế. 
</p>
		
	</div>
</section>

<!-- move top -->
<div class="move-top text-right">
	<a href="#home" class="move-top"> 
		<span class="fa fa-angle-up  mb-3" aria-hidden="true"></span>
	</a>
</div>
@endsection