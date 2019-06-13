<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(organseeder::class);
        // $this->call(tourseeder::class);
        
        $this->call(detailtourseeder::class);
    }
}
