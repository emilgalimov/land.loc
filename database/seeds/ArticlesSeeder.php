<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            [
              
                'name'=>'Android',
                'text'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, quia beatae maxime sunt labore adipisci exercitationem quidem inventore qui non laboriosam? Error necessitatibus obcaecati rem?',
                'icon'=>'fa-android',
            ],
           [
              
                'name'=>'Apple IOS',
                'text'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, quia beatae maxime sunt labore adipisci exercitationem quidem inventore qui non laboriosam? Error necessitatibus obcaecati rem?',
                'icon'=>'fa-apple',
            ],
            [
              
                'name'=>'Android',
                'text'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, quia beatae maxime sunt labore adipisci exercitationem quidem inventore qui non laboriosam? Error necessitatibus obcaecati rem?',
                'icon'=>'fa-android',
            ],
            [
              
                'name'=>'Design',
                'text'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, quia beatae maxime sunt labore adipisci exercitationem quidem inventore qui non laboriosam? Error necessitatibus obcaecati rem?',
                'icon'=>'fa-dropbox',
            ],
            [
              
                'name'=>'Concept',
                'text'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, quia beatae maxime sunt labore adipisci exercitationem quidem inventore qui non laboriosam? Error necessitatibus obcaecati rem?',
                'icon'=>'fa-html5',
            ],
            [
                'name'=>'User Research',
                'text'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, quia beatae maxime sunt labore adipisci exercitationem quidem inventore qui non laboriosam? Error necessitatibus obcaecati rem?',
                'icon'=>'fa-stacks',
            ],
            [
              
                'name'=>'User Experience',
                'text'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, quia beatae maxime sunt labore adipisci exercitationem quidem inventore qui non laboriosam? Error necessitatibus obcaecati rem?',
                'icon'=>'fa-users',
            ],

        ]);
    }
}
