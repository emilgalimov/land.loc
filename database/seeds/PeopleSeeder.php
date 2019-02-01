<?php

use Illuminate\Database\Seeder;
use App\Person;
class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Person::insert([
            [
            'name'=>'Tom Rensed',
            'position'=>'Chief Executive officer',
            'images'=>'team_pic1.jpg',
            'text'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis nesciunt, nobis neque reprehenderit a odio praesentium dignissimos voluptates excepturi voluptas recusandae velit vel beatae possimus!'
            ],
            [
                'name'=>'Kathren Mory',
                'position'=>'Vice president',
                'images'=>'team_pic2.jpg',
                'text'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis nesciunt, nobis neque reprehenderit a odio praesentium dignissimos voluptates excepturi voluptas recusandae velit vel beatae possimus!'
                ],
                [
                    'name'=>'Lancer Jack',
                    'position'=>'Senior manager',
                    'images'=>'team_pic3.jpg',
                    'text'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis nesciunt, nobis neque reprehenderit a odio praesentium dignissimos voluptates excepturi voluptas recusandae velit vel beatae possimus!'
                    ],

        ]);
    }
}
