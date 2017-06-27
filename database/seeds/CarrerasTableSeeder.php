<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CarrerasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //


        DB::table('carreras')->insert([
            'carrera' => str_random(10),
        ]);
        DB::table('carreras')->insert([
            'carrera' => str_random(10),
        ]);
        DB::table('carreras')->insert([
            'carrera' => str_random(10),
        ]);
        DB::table('carreras')->insert([
            'carrera' => str_random(10),
        ]);

    }
}
