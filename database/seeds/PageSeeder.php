<?php

use Illuminate\Database\Seeder;

use App\Page;
class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('pages')->insert([
            [
            'name'=>'home',
            'alias'=>'home',
            'text'=>'<h2>We create <strong>Awesome </strong> web template</h>',
            'images'=>'main_device_image.png',
            ],
            [
            'name'=>'About us',
            'alias'=>'aboutUs',
            'text'=>'<h3> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam, officiis?</h3>',
            'images'=>'about-img.jpg',
            ],
            ]);
        
    }
}
