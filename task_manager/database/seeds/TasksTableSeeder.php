<?php

use App\Task;
use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    public function run()
    {
        $task = new Task();
        $task->id = 19;
        $task->title = "học sssssbài";
        $task->content = "học Laravel";
        $task->due_date = "2019/05/22";
        $task->image  = "";
        $task->save();

        $task = new Task();
        $task->id = 62;
        $task->title = "đừng họcsss nữa";
        $task->content = "mệt rồi";
        $task->due_date = "2019/05/22";
        $task->image  = "";
        $task->save();

        $task = new Task();
        $task->id = 47;
        $task->title = "học cái gì nữssssa";
        $task->content = "đã bảo mệt rồi mà";
        $task->due_date = "2019/05/22";
        $task->image  = "";
        $task->save();

        $task = new Task();
        $task->id = 82;
        $task->title = "ok nghỉ sssnhé";
        $task->content = "rõ ràng";
        $task->due_date = "2019/05/22";
        $task->image  = "";
        $task->save();
    }
}
