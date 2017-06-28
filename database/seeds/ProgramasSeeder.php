<?php

use Illuminate\Database\Seeder;

class ProgramasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('programas')->insert([
            'nombrePrograma' => 'CTA',
            'horario' => '8 - 1',
        ]);
        DB::table('programas')->insert([
            'nombrePrograma' => 'Finanzas',
            'horario' => '9 - 5',
        ]);
        DB::table('programas')->insert([
            'nombrePrograma' => 'Biblioteca',
            'horario' => '9 - 2',
        ]);
        
        
    }
}
