<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        \DB::table('materials')->truncate();
        
        $materials =[]; //inisialisasi variabel posts untuk menampung data
        $faker = Factory::create();

        $subjects=["Biology","Financial Literature","Math","Physics"];
        for($i=1; $i <=5; $i++){
            $date = date("Y-m-d H:i:s", strtotime("2021-04-20 17:00:00 "));
            $materials[]=[
                'teacher_id'=>rand($subject->(1,4)),
                'subject'=>rand(1,4),
                'title' =>$faker->sentence(rand(10,15)),
                'body'=>$faker->paragraph(rand(8,12),true),
                'slug'=>$faker->slug(),
                'created_at'=> $date,
                'updated_at'=>$date,
            ];
        }
        \DB::table('materials')->insert($materials);
    }
}
