@extends('layouts.master')
@section('content')
<section class="banner_inner" id="home">
	<div class="banner_inner_overlay">
	</div>
</section>
<section class="packages pt-5">
	<div class="container py-lg-4 py-sm-3">
		<h2 class="heading text-capitalize text-center"> Các gói tour của chúng tôi</h2>
		<p class="text mt-2 mb-5 text-center">Niềm vui là của các bạn...còn tiền là của chúng tôi</p>
		<form action="{{route('page.search')}}" method='get'>
			<div class="row">
				<div class="col-5">
                    <div class="form-group">
                        <input type="text" class="form-control" name="keyword" placeholder="Search">
                    </div>
                </div>
                <div class="col-6">
                    <button type="submit" class="btn btn-primary">Tìm kiếm</button>
            	</div>
		    </div>
		</form>	
		<div class="row">
			@foreach($tours as $tour)
			<div class="col-lg-3 col-sm-6 mb-5">
				<div class="image-tour position-relative">
				<a href="{{route('page.settour',$tour->id)}}"><img src="{{ asset('storage/images/' . $tour->image) }}"  alt="" class="img-fluid" /></a>
					<p><span class="fa fa-tags"></span> <span>{{number_format($tour->price)}} VND</span></p>
				</div>
				<div class="package-info">
					<h6 class="mt-1"><span class="fa fa-map-marker mr-2"></span>{{$tour->tourName}}</h6>
					<p class="my-2">Phương tiện di chuyển:</p>
					<p class="">{{$tour->transport}}</p>
					<ul class="listing mt-3">
						<li><span class="fa fa-clock-o mr-2"></span>ngày khởi hành : <span>{{$tour->departureDay}}</span></li>
					</ul>
					@if(Auth::check())
					<button><a href="{{route('page.edit',$tour->id)}}">Edit</a></button>
					<button onclick="return confirm('are your sure')" ><a href="{{route('page.delete',$tour->id)}}" >Delete</a></button>
					@endif
				</div>
			</div>
			@endforeach
		</div>
			<div class="col-2" style="float:right" >{{ $tours->appends(request()->query()) }}</div>
			@if(Auth::check())
			<div class='col-10'>
				<button><a href="{{route('page.create')}}">Create</a></button>
			</div>
			@endif
	</div>
</section>
<section class="destinations py-5" id="destinations">
	<div class="container py-xl-5 py-lg-3">
		<h3 class="heading text-capitalize text-center">Đi để trải nghiệm</h3>
		<p class="text mt-2 mb-5 text-center"><h3>Đích đến của chúng ta không phải là một vùng đất, mà là một cách nhìn mới</h3></p>
	</div>
</section>
@endsection	
