<?php

use Illuminate\Database\Seeder;
use\App\Post;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new Post();
        $post->title = "học học nữa học mãi";
        $post->userid = "lê nin ";
        $post->content = "học gì học lắm thế";
        $post->comment = "gắng lên nha chú nin";

        $post->save();

    }
}
