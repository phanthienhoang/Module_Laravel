<?php

use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name='hoangzet';
        $user->email = 'phanthienhoang94@gmail.com';
        $user->password = bcrypt('megakill122');
        $user->save();
    }
}
