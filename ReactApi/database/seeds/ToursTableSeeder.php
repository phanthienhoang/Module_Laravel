<?php

use Illuminate\Database\Seeder;
use App\Tour;

class ToursTableSeeder extends Seeder
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
        $tour->image1 = 'dainoi1.jpg';
        $tour->image2 = 'dainoi2.jpg';
        $tour->image3 = 'dainoi3.jpg';
        $tour->image4 = 'dainoi4.jpg';
        $tour->image5 = 'dainoi5.jpg';
        $tour->save();
       
        $tour = new Tour();
        $tour->tourName='Chùa thiên mụ';
        $tour->content='tham quan lăng tẩm vua minh mạng';
        $tour->departureDay='2019-12-12';
        $tour->place='28-nguyễn trì phương' ;
        $tour->transport='BMW';
        $tour->price='70000';
        $tour->image1 = 'chuathienmu1.jpg';
        $tour->image2 = 'chuathienmu2.jpg';
        $tour->image3 = 'chuathienmu3.jpg';
        $tour->image4 = 'chuathienmu4.jpg';
        $tour->image5 = 'chuathienmu5.jpg';
        $tour->save();

        $tour = new Tour();
        $tour->tourName='Cầu trường tiền';
        $tour->content='dạo quanh phố phường';
        $tour->departureDay='2019-12-12';
        $tour->place='28-nguyễn trì phương' ;
        $tour->transport='xe đạp';
        $tour->price='80000';
        $tour->image1 = 'huebandem1.jpg';
        $tour->image2 = 'huebandem2.jpg';
        $tour->image3 = 'huebandem3.jpg';
        $tour->image4 = 'huebandem4.jpg';
        $tour->image5 = 'huebandem5.jpg';
        $tour->save();

        $tour = new Tour();
        $tour->tourName='Công viên ma';
        $tour->content='mua xắm';
        $tour->departureDay='2019-12-12';
        $tour->place='28-nguyễn trì phương' ;
        $tour->transport='bwm';
        $tour->price='98000';
        $tour->image1 = 'congvienma1.jpg';
        $tour->image2 = 'congvienma2.jpg';
        $tour->image3 = 'congvienma3.jpg';
        $tour->image4 = 'congvienma4.jpg';
        $tour->image5 = 'congvienma5.jpg';
        $tour->save();
    }
}
