<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        \DB::statement('SET FOREIGN_KEY_CHECKS=0');
        \DB::table('users')->truncate();

        //membuat 3 user secara manual
        \DB::table('users')->insert([
            [
                'name'=>"keshi",
                'email'=>"keshi@vevo.com",
                'password'=>bcrypt('rahasia')
            ],
            [
                'name'=>"Jae",
                'email'=>"jae_park@yahoo.co.id",
                'password'=>bcrypt('rahasia')
            ],
            [
                'name'=>"Brian",
                'email'=>"richbrian@live.com",
                'password'=>bcrypt('rahasia')
            ],
            [
                'name'=>"Annelis Mellema",
                'email'=>"annelismellema@gmail.com",
                'password'=>bcrypt('rahasia')
            ],
        ]);

    }
}
