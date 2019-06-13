
@extends('layouts.master')
    @section('content')
        @if(!isset($posts))
            <h5 class="text-primary">Dữ liệu không tồn tại!</h5>
        @else
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">stt</th>
                        <th scope="col">Tên tiêu đề</th>
                        <th scope="col">người viết</th>
                        <th scope="col">nội dung</th>
                        <th scope="col">bình luận</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $key => $post)
                        <tr>
                            <td scope="row">{{ ++$key }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->user->name }}</td>
                            <td>{{ $post->content }}</td>
                            <td>{{ $post->comment }}</td>
                            <td>
                                <button><a href="{{route('post.edit',$post->id)}}">Edit</a></button>
                            </td>
                            <td>
                                <button onclick="return confirm('are your sure')" ><a href="{{route('post.delete',$post->id)}}" >Delete</a></button>
                            </td>
                        </tr>
                    @endforeach
                    <div>
                        <td>
                        <a href="{{route('post.create')}}" class="btn btn-primary">create</a>
                        </td>
                    </div>
                </tbody>
            </table>
        @endif

    @endsection    
