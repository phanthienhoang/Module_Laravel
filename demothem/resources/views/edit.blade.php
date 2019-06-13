
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Product Discount Calculator</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <style>
    html,body{
        background-color: #e5e0e0;
    }
    </style>
</head>
<body>
<div class="col-12 text-center "><h1>Chỉnh sửa tour </h1></div>
    <form action="{{route('page.update', $tour)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-5">
        <div class="form-group">
            <label>Nhà tổ chức:</label>
                <select id ="" name="organizer_id" class="btn btn-primary">
                    @foreach($organizers as $organizer)
                        <option value="{{$organizer->id}}">{{$organizer->organizerName}}</option>
                    @endforeach
                </select>
            </div>
                <div class="form-group">
                    <label>Tên tour du lịch</label>
                        <input type="text" class="form-control {{ $errors->has('tourName') ? 'is-danger' : '' }}" name="tourName" value="{{$tour->tourName}}" >
                </div>
                <div class="form-group">
                    <label>Nội dung</label>
                        <textarea rows="5" type="text" class="form-control {{ $errors->has('content') ? 'is-danger' : '' }}" name="content" >{{$tour->content}}</textarea>
                </div>
                <div class="form-group">
                    <label>Ngày khởi hành</label>
                    <input type="date" class="form-control {{ $errors->has('departureDay') ? 'is-danger' : '' }}" name="departureDay" value="{{$tour->departureDay}}"  >
                </div>
                <div class="form-group">
                    <label>Địa điểm xuất phát</label>
                    <input type="text" class="form-control {{ $errors->has('place') ? 'is-danger' : '' }}" name="place" value="{{$tour->place}}" >
                </div>
                <div class="form-group">
                    <label>Phương tiện</label>
                    <input type="text" class="form-control {{ $errors->has('transport') ? 'is-danger' : '' }}" name="transport" value="{{$tour->transport}}" >
                </div>
                <div class="form-group">
                    <label>giá</label>
                    <input type="text" class="form-control {{ $errors->has('price') ? 'is-danger' : '' }}" name="price" value="{{$tour->price}}" >
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
        <div class="col-md-5">
            <div><br> <h3>Hình ảnh cũ</h3><br></div>
        <img src="{{ asset('storage/images/' . $tour->image) }}" alt="" style="width: 600px">
        </div>
        <div class="col-md-1"></div>
    </div>
    </form>
</body>
</html>