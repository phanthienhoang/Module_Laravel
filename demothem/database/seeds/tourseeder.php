<?php

use Illuminate\Database\Seeder;
use App\Tour;

class tourseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $tour = new Tour();
        $tour->tourName='Kinh thành huế';
        $tour->content='tham quan kinh thành huế';
        $tour->departureDay='2019-12-12';
        $tour->place='28-nguyễn trì phương' ;
        $tour->transport='máy bay';
        $tour->price='180000';
        $tour->organizer_id ='1';
        $tour->save();
       
        $tour = new Tour();
        $tour->tourName='Lăng minh mạng';
        $tour->content='tham quan lăng tẩm vua minh mạng';
        $tour->departureDay='2019-12-12';
        $tour->place='28-nguyễn trì phương' ;
        $tour->transport='BMW';
        $tour->price='70000';
        $tour->organizer_id ='2';
        $tour->save();

        $tour = new Tour();
        $tour->tourName='Cầu trường tiền';
        $tour->content='dạo quanh phố phường';
        $tour->departureDay='2019-12-12';
        $tour->place='28-nguyễn trì phương' ;
        $tour->transport='xe đạp';
        $tour->price='80000';
        $tour->organizer_id ='3';
        $tour->save();

        $tour = new Tour();
        $tour->tourName='con đường tơ lụa';
        $tour->content='mua xắm';
        $tour->departureDay='2019-12-12';
        $tour->place='28-nguyễn trì phương' ;
        $tour->transport='xích lô';
        $tour->price='98000';
        $tour->organizer_id ='4';
        $tour->save();
    }
}
