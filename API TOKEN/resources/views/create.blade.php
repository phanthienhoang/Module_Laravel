<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
    <style>
            html, body {
                background-color: #e5e5e5;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;   
                height: 50vh;
                margin: 0;
            }
        .content {
                text-align: center;
            }
        .m-b-md {
                margin-bottom: 30px;
            }    
        .is-danger{
        border : 1px solid red
        }
    </style>
</head>
<body>
<div class="col-12 col-md-12">
        <div class="row">
            <div class="col-8"> 
                <h1>CREATE</h1>
            </div>
        <div class="col-8">
            <form action="{{route('contact.add')}}" method="post" >
            @csrf
                <div class="form-group">
                    <label>Tên</label>
                    <input type="text" class="form-control {{ $errors->has('name') ? 'is-danger' : '' }}" name="name" value="{{old('name')}}" >
                </div>
                <div class="form-group">
                    <label>Họ</label>
                    <input type="text" class="form-control {{ $errors->has('lastName') ? 'is-danger' : '' }}" name="lastName" value="{{old('lastName')}}">
                </div>
                <div class="form-group">
                    <label>Số điện thoại</label>
                    <input type="text" class="form-control {{ $errors->has('phone') ? 'is-danger' : '' }}" name="phone" value="{{old('phone')}}" >
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control {{ $errors->has('email') ? 'is-danger' : '' }}" name="email" >
                </div>
                <div class="form-group">
                    <label>Địa Chỉ</label>
                    <input type="text" class="form-control {{ $errors->has('address') ? 'is-danger' : '' }}" name="address" >
                </div>
                <div>
                <button type="submit" class="btn btn-primary">ADD</button>
                </div>
                <div class="btn btn"><a href="{{route('contact.index')}}">Back</a></div>
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
</body>
</html>