<?php

use Illuminate\Database\Seeder;
use App\Organizer;
class organseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $organizer = new Organizer();
        $organizer->organizerName='Khá Bá';
        $organizer->textDescription='chuyên ngiệp';
        $organizer->save();

        $organizer = new Organizer();
        $organizer->organizerName='Hoàng Phan';
        $organizer->textDescription='chuyên ngiệp';
        $organizer->save();

        $organizer = new Organizer();
        $organizer->organizerName='Ái nguyễn';
        $organizer->textDescription='chuyên ngiệp';
        $organizer->save();

    }
}
