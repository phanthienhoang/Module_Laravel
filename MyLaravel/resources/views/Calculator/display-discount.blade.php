<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Thêm mới khách hàng</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <form>
    <div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <h1>Product Discount Calculator</h1>
        </div>
        <div class="col-12">
            <form acction="/a" method="post">
            @csrf
                <div class="form-group">
                    <label>Product Description:</label> <span>{{$descripton}} </span>
                </div>
                <div class="form-group">
                    <label>List Price:</label> <span>{{$price}} </span>
                </div>
                <div class="form-group">
                    <label>Discount Percent:</label> <span>{{$percent}} </span>%
                </div>
                <div class="form-group">
                    <label>Discount Amount:</label> <span>{{$amount}} </span>
                </div>
                <button><a href="view">Discount Calculate</a></button>
        </div>   
    </div> 
    </div> 
    </form>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>