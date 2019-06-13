@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
    <br>
    <div><H3>ĐƠN ĐẶT TOUR</H3></div>
    <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Tên khách hàng</th>
                        <th scope="col">email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">date</th>
                        <th scope="col">địa chỉ</th>
                        <th scope="col">số lượng</th>
                        <th scope="col">create_at</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($infomations as $infomation)
                        <tr>
                            <td scope="row">{{$infomation->id}}</td>
                            <td>{{$infomation->fullname}}</td>
                            <td>{{$infomation->email}}</td>
                            <td>{{$infomation->phone}}</td>
                            <td>{{$infomation->date}}</td>
                            <td>{{$infomation->address}}</td>
                            <td>{{$infomation->amount}}</td>
                            <td>{{$infomation->created_at}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

</div>
<div class="row justify-content-center">
<div class="col-md-10"><a href="{{route('news.index')}}">Trang Chủ</a></div>
</div>
@endsection
