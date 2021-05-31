<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory;

class TeachersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //membuat 6 data dummy
        $teachers = [];
        $faker = Factory::create();

        
        \DB::statement('SET FOREIGN_KEY_CHECKS=0');
        \DB::table('teachers')->truncate();

        //membuat 3 user secara manual
        \DB::table('teachers')->insert([
            [
                'name'=>"Brian Kruger",
                'email'=>"briankrg@ymail.com",
                'password'=>bcrypt('rahasia'),
                'subject'=>"Biology"
            ],
            [
                'name'=>"Eren Jaeger",
                'email'=>"erenjgr@gmail.com",
                'password'=>bcrypt('rahasia'),
                'subject'=>"Financial Literature"
            ],
            [
                'name'=>"Mikasa Ackerman",
                'email'=>"ackerman_mikasa@ymail.com",
                'password'=>bcrypt('rahasia'),
                'subject'=>"Math"
            ],
            [
                'name'=>"Levi Ackerman",
                'email'=>"rivaille@gmail.com",
                'password'=>bcrypt('rahasia'),
                'subject'=>"Physics"
            ],
        ]);
        \DB::table('teachers')->insert($teachers);
    }
}
