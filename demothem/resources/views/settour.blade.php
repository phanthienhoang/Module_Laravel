@extends('layouts.master')
@section('content')
<section class="banner_inner" id="home">
	<div class="banner_inner_overlay">
	</div>
</section>
<section class="contact py-5">
	<div class='text-center'>
			<img src="{{ asset('storage/images/' . $tour->image) }}" alt="" class="img-fluid" />
	</div>
	<div class="container py-lg-5 py-sm-4">
		<h2 class="heading text-capitalize text-center mb-lg-5 mb-4">{{$tour->tourName}}</h2>
		<div class="contact-grids">
			<div class="row">
				<div class="col-lg-7 contact-left-form">
					<form action="{{route('page.addtour')}}" method="post" class="row">
					@csrf
						<div class="col-sm-6 form-group contact-forms">
						  <input type="text" class="form-control" name="fullname" placeholder="Tên" required="">
						</div>
						<div class="col-sm-6 form-group contact-forms">
						  <input type="email" class="form-control" name="email" placeholder="Email" required="">
						</div>
						<div class="col-sm-6 form-group contact-forms">
						  <input type="text" class="form-control" name="phone" placeholder="Số điện thoại" required=""> 
						</div>
						<div class="col-sm-6 form-group contact-forms">
						  <input type="date" class="form-control" name="date" placeholder="Ngày tháng năm sinh" required=""> 
						</div>
						<div class="col-sm-6 form-group contact-forms">
						    <input type="text" class="form-control" name="amount" placeholder="Số lượng" required=""> 
						</div>
                        <div class="col-sm-6 form-group contact-forms">
						<input type="text" class="form-control" name="address" placeholder="địa chỉ" required=""> 
						</div>
						<div class="col-md-12 form-group contact-forms">
						  <textarea class="form-control" name="message" placeholder="Message" rows="3" required=""></textarea>
						</div>
						<div class="col-md-12 booking-button">
							<button class="btn btn-block sent-butnn">Book Now</button>
						</div>
					</form>
				</div>
				<div class="col-lg-5 contact-right pl-lg-5">				
					<div class="image-tour position-relative">
						<img src="images/banner1.jpg" alt="" class="img-fluid" />
						<p>Gía 1 người : <span class="fa fa-tags"></span> <span>{{$tour->price}}</span></p>
					</div>
					<h4>giới thiệu</h4>
					<p class="mt-3">{{$tour->content}}</p>
					
				</div>
			</div>
		</div>
	</div>
</section>

@endsection	