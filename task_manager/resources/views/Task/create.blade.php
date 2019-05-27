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
            <h1>CREATE</h1>
        </div>
        <div class="col-12">
            <form action="{{ route('tasks.store') }}" method="post">
            @csrf
                <div class="form-group">
                    <label>Task title</label>
                    <input type="text" class="form-control" name="title" >
                </div>
                <div class="form-group">
                    <label>Content</label>
                    <input type="text" class="form-control" name="content" >
                </div>
                <div class="form-group">
                    <label>Due Date</label>
                    <input type="date" class="form-control" name="date" placeholder="nhập địa chỉ email" >
                </div>
                <button type="submit" class="btn btn-primary">create</button>
            </form>       
        </div>   
    </div> 
    </div> 
</body>
</html>