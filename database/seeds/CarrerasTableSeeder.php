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
            'carrera' => 'Informática',
        ]);
        DB::table('carreras')->insert([
            'carrera' => 'Computación',
        ]);
        DB::table('carreras')->insert([
            'carrera' => 'QFB',
        ]);
        DB::table('carreras')->insert([
            'carrera' => 'ELECTRONICA',
        ]);

    }
}
