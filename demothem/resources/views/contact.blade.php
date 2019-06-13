<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
@extends('layouts.master')
@section('content')
<!-- //header -->

<!-- banner -->
<section class="banner_inner" id="home">
	<div class="banner_inner_overlay">
	</div>
</section>
<!-- //banner -->


<!-- Contact -->
<section class="contact py-5">
	<div class="container py-lg-5 py-sm-3">
			<h2 class="heading text-capitalize text-center mb-sm-5 mb-4"> Hãy Liên Lạc Với Chúng Tôi</h2>
			<ul class="list-unstyled row text-center mt-lg-5 mt-4 px-lg-5">
                <li class="col-md-4 col-sm-6 adress-w3pvt-info">
                    <div class=" adress-icon">
                        <span class="fa fa-map-marker"></span>
                    </div>

                    <h6>Vị trí</h6>
                    <p>Tên công ty 
                        <br>Code gym Huế </p>
                </li>

                <li class="col-md-4 col-sm-6 adress-w3pvt-info mt-sm-0 mt-4">
                    <div class="adress-icon">
                        <span class="fa fa-envelope-open-o"></span>
                    </div>
                    <h6>Phone & Email</h6>
                    <p>+(84) 123 456 789</p>
                    <a href="mailto:info@example.com" class="mail">phanthienhoang95@gmail.com</a>
                </li>
                <li class="col-md-4 col-sm-6 adress-w3pvt-info mt-md-0 mt-4">

                    <div class="adress-icon">
                        <span class="fa fa-comments-o"></span>
                    </div>

                    <h6>Giữ liên lạc</h6>
					<ul class="social_section_1info mt-2">
						<li class="mb-2 facebook"><a href="#"><span class="fa fa-facebook"></span></a></li>
						<li class="mb-2 twitter"><a href="#"><span class="fa fa-twitter"></span></a></li>
						<li class="google"><a href="#"><span class="fa fa-google-plus"></span></a></li>
						<li class="linkedin"><a href="#"><span class="fa fa-linkedin"></span></a></li>
					</ul>
                </li>
            </ul>
			
			<div class="contact-grids mt-5">
				<div class="row">
					<div class="col-lg-6 col-md-6 contact-left-form">
						<form action="{{route('sendmail')}}" method="post">
						@csrf
							<div class=" form-group contact-forms">
							  <input type="text" class="form-control" placeholder="Name" name='name'>
							</div>
							<div class="form-group contact-forms">
							  <input type="email" class="form-control" placeholder="Email" name='email'>
							</div>
							<div class="form-group contact-forms">
							  <textarea class="form-control" placeholder="Message" name='message' rows="3"></textarea>
							</div>
							<button  onclick="return confirm('chúng tôi sẽ phản hồi bạn nhanh nhất có thể') " class="btn btn-block sent-butnn">Send</button>
						</form>
					</div>
					<div class="col-lg-6 col-md-6 contact-right pl-lg-5">
						<h4>Bạn có câu hỏi nào ko? hãy viết thư cho chúng tôi</h4>
						<p class="mt-md-4 mt-2"></p>
						<h5 class="mt-lg-5 mt-3">Giờ làm việc</h5>
						<p class="mt-3">Thứ Hai đến Thứ Sáu: 09 am to 06 pm</p>
						<p>Thứ Bảy và Chủ Nhật: : 10 am to 04 pm</p>
					</div>
				</div>
				@if ($errors->any())
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
 				 @endif
			</div>
	</div>
</section>
@endsection