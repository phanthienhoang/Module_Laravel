<?php

    namespace App\Http\Controllers;
    use App\Task;
    use Illuminate\Support\Facades\db;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Response;
    use Illuminate\Support\Facades\Session;

    class TasksControler extends Controller
    {
        /**
         * Display a listing of the resource.
         *
         * @return Response
         */
        public function index()
        {
        //Lấy ra toàn bộ các task từ database thông qua truy vấn bằng Eloquent
        $tasks = \App\Task::all();

        // Trả về view index và truyền biến tasks chứa danh sách các task
        return view('index', compact('tasks'));
        }

        public function create()
        {
            return view("Task.create");
        }
        
        public function store()
        {   
      
            $task = new Task();
            $task->title = request('title');
            $task->content = request('content');
            $task->due_date = request('date');

            $task->save();

            return redirect('/tasks');
        }

        public function delete($id)
        {
            db::table('Tasks')->where('id',$id)->delete();
            return redirect('/tasks');
        }

        public function show(Task $task)
        {
            return view("Task.show", compact('task'));
        }

        public function update(Task $task)
        {
            $attribute = request()->all();
            $task->update($attribute);
            return redirect("/tasks");
        }
    }
