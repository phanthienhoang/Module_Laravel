<?php

namespace App\Http\Controllers;
    use App\Post;
    use Illuminate\Support\Facades\db;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Response;
    use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    public function index()
    {
    //Lấy ra toàn bộ các task từ database thông qua truy vấn bằng Eloquent
    $posts = \App\Post::all();

    // Trả về view index và truyền biến tasks chứa danh sách các task
    return view('Post.index', compact('posts'));
    }

    public function create()
    {
        return view("Post.create");
    }
    
    public function add()
    {   
        // return auth()->id();
        $attribute = request()->all();
        $attribute['user_id'] = auth()->id();
        $post = Post::create($attribute);
        return redirect("/post");
    }
    public function edit(Post $post)
    {
        return view("Post.show", compact('post'));
    }

    public function update(Post $post)
    {
        $attribute = request()->all();
        $post->update($attribute);
        return redirect("/post");
    }

    public function delete($id)
    {
        db::table('posts')->where('id',$id)->delete();
        return redirect("/post");
    }

}
 