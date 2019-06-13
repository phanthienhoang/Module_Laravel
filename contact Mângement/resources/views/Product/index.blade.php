
@extends('layouts.master')
    @section('content')
        @if(!isset($products))
            <h5 class="text-primary">Dữ liệu không tồn tại!</h5>
        @else
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">stt</th>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Dòng sản phẩm</th>
                        <th scope="col">Nhà sản xuất</th>
                        <th scope="col">Mô tả về sản phẩm</th>
                        <th scope="col">giá sản phẩm</th>
                        <!-- <th scope="col">Created</th> -->
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $key => $product)
                        <tr>
                            <td scope="row">{{ ++$key }}</td>
                            <td>{{ $product->productName }}</td>
                            <td>{{ $product->productLine }}</td>
                            <td>{{ $product->productVendor }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->price }}</td>
                            <td>
                                <button><a href="{{route('product.edit',$product->id)}}">Edit</a></button>
                            </td>
                            <td>
                                <button onclick="return confirm('are your sure')" ><a href="{{route('product.delete',$product->id)}}" >Delete</a></button>
                            </td>
                        </tr>
                    @endforeach
                    <div>
                        <td>
                        <a href="{{route('product.create')}}" class="btn btn-primary">create</a>
                        </td>
                    </div>
                </tbody>
            </table>
        @endif

    @endsection    
