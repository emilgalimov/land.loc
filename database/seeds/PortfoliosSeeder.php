<?php

use Illuminate\Database\Seeder;
use App\Portfolio;
class PortfoliosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Portfolio::insert([
            [
                'name'=>'SMS mobile app',
                'images'=>'portfolio_pic1.jpg',
                'filter'=>'AppleIOS',
            ],
            [
                'name'=>'Finance app',
                'images'=>'portfolio_pic2.jpg',
                'filter'=>'design',
            ],
            [
                'name'=>'GPS concept',
                'images'=>'portfolio_pic3.jpg',
                'filter'=>'design',
            ],
            [
                'name'=>'Shopping',
                'images'=>'portfolio_pic4.jpg',
                'filter'=>'android',
            ],
            [
                'name'=>'Managment',
                'images'=>'portfolio_pic5.jpg',
                'filter'=>'design',
            ],
            [
                'name'=>'SMS mobile app',
                'images'=>'portfolio_pic6.jpg',
                'filter'=>'web',
            ],
            [
                'name'=>'SMS mobile app',
                'images'=>'portfolio_pic7.jpg',
                'filter'=>'web',
            ],
            [
                'name'=>'SMS mobile app',
                'images'=>'portfolio_pic8.jpg',
                'filter'=>'android',
            ],

        ]);


    }
}
