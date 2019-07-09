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
<div class="flex-center position-ref full-height">
      <div class="content">
        <div class="title m-b-md">
                    <h1>Contact Management</h1>
        </div>
        <form class="navbar-form navbar-left"  method="get" action="{{route('contact.search')}}">
            @csrf
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="keyword" placeholder="Search" >
                    </div>
                </div>
                <div class="col-4">
                    <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                </div>
            </div>
        </form>
        @if(!isset($contacts))
            <h5 class="text-primary">Dữ liệu không tồn tại!</h5>
        @else
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Tên</th>
                        <th scope="col">Họ</th>
                        <th scope="col">Số điện thoại</th>
                        <th scope="col">Email </th>
                        <th scope="col">Địa Chỉ</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($contacts as $contact)
                        <tr>
                            <td scope="row">{{ $contact->Name }}</td>
                            <td>{{ $contact->lastName }}</td>
                            <td>{{ $contact->phone }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->address}}</td>
                            <td>
                                <a class="btn btn-danger" onclick="return confirm('are your sure')" href="{{route('contact.delete',$contact->id)}}" >Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    <div>
                        <td>
                        <a href="{{route('contact.create')}}" class="btn btn-primary">create</a> 
                        </td>
                        <td></td>
                    </div>
                </tbody>
            </table>
        <div class="col-2" style="float:right" >{{ $contacts->appends(request()->query()) }}</div>
    @endif
</body>
</html>