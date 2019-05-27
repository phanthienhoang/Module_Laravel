<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Product Discount Calculator</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <h1>Edit</h1>
        </div>
        <div class="col-12">
            <form action="{{route('product.update', $product->id)}}" method="post">
            @csrf
            @method("PATCH")
                <div class="form-group">
                    <label>Tên sản phẩm</label>
                    <input type="text" class="form-control" name="productName" value="{{$product->productName}}">
                </div>
                <div class="form-group">
                    <label>Dòng sản phẩm</label>
                    <input type="text" class="form-control" name="productLine" value="{{$product->productLine}}">
                </div>
                <div class="form-group">
                    <label>Nhà sản xuất</label>
                    <input type="text" class="form-control" name="productVendor" value="{{$product->productVendor}}">
                </div>
                <div class="form-group">
                    <label>Mô tả về sản phẩm</label>
                    <input type="text" class="form-control" name="description" value="{{$product->description}}">
                </div>
                <div class="form-group">
                    <label>giá sản phẩm</label>
                    <input type="text" class="form-control" name="price" value="{{$product->price}}">
                </div>
                <button type="submit" class="btn btn-primary">add</button>
            </form>       
        </div>   
    </div> 
    </div> 
</body>
</html>