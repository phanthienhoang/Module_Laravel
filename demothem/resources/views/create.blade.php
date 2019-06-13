@extends('layouts.master')
@section('content')
<section class="banner_inner" id="home">
	<div class="banner_inner_overlay">
	</div>
</section>
    <div class="col-12 col-md-12">
        <div class="row">
            <h2 class="">CREATE</h2>
        </div>
            @if(Session::has('create-success'))
                <h5 class="text-primary">{{ Session::get('create-success')}}</h5>
            @endif           
                <form action="{{route('page.add')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="col-5">
                        <div class="form-group">
                            <label >nhà tổ chức: </label>
                                <select id ="" name="organizer_id" class="btn btn-primary">
                                    @foreach($organizers as $organizer)
                                        <option value="{{$organizer->id}}">{{$organizer->organizerName}}</option>
                                    @endforeach
                                </select>
                        </div>
                        <div class="form-group">
                            <label>Tên tour du lịch</label>
                            <input type="text" class="form-control {{ $errors->has('tourName') ? 'is-danger' : '' }}" name="tourName" value="{{old('tourName')}}" >
                        </div>
                        <div class="form-group">
                            <label>Nội dung</label>
                            <textarea rows="5" type="text" class="form-control {{ $errors->has('content') ? 'is-danger' : '' }}" name="content" value="{{old('content')}}" ></textarea>
                        </div>
                        <div class="form-group">
                            <label>Ngày khởi hành</label>
                            <input type="date" class="form-control {{ $errors->has('departureDay') ? 'is-danger' : '' }}" name="departureDay" value="{{old('departureDay')}}" >
                        </div>
                        <div class="form-group">
                            <label>địa điểm</label>
                            <input type="text" class="form-control {{ $errors->has('place') ? 'is-danger' : '' }}" name="place" >
                        </div>
                        <div class="form-group">
                            <label>Phương tiện</label>
                            <input type="text" class="form-control {{ $errors->has('transport') ? 'is-danger' : '' }}" name="transport" >
                        </div>
                        <div class="form-group">
                            <label>giá</label>
                            <input type="text" class="form-control {{ $errors->has('price') ? 'is-danger' : '' }}" name="price" >
                        </div>
                        <div class="form-group">
                        <label>File Ảnh</label>
                        <input type="text"
                                class="form-control"
                                name="inputFileName">
                        <input type="file"
                                class="form-control-file"
                                name="inputFile">
                        </div>               
                        <div><button type="submit" class="btn btn-primary">add</button>
                        <a href="#">Back</a></div>
                    </div>   
                </form>   
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
@endsection