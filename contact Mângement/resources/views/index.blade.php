<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Tasks</title>
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
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
                    <h1>Task List</h1>
        </div>
        @if(!isset($tasks))
    <h5 class="text-primary">Dữ liệu không tồn tại!</h5>
@else
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">stt</th>
                <th scope="col">Task title</th>
                <th scope="col">Content</th>
                <th scope="col">Due Date</th>
                <!-- <th scope="col">Created</th> -->
            </tr>
        </thead>
        <tbody>
            <!-- // Duyệt mảng $tasks, lấy ra từng trường của từng task để hiển thị ra bảng -->
            @foreach($tasks as $key => $task)
                <tr>
                    <td scope="row">{{ ++$key }}</td>
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->content }}</td>
                    <td>{{ $task->due_date }}</td>
                    <td>
                        <button><a href="{{ route('tasks.show', $task->id) }}">Edit</a></button>
                    </td>
                    <td>
                        <button onclick="return confirm('are your sure')" ><a href="{{ route('tasks.delete', $task->id) }}" >Delete</a></button>
                    </td>
                </tr>
            @endforeach
            <div>
                <td>
                <a href="{{ route('tasks.create') }}" class="btn btn-primary">create</a>
                </td>
            </div>
        </tbody>
    </table>
@endif
    </div>
</div>
<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>
</html>