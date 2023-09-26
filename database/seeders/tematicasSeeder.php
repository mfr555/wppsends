<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TematicasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tematicas')->insert([
            'nombre' => 'Cristiana',
        ]);
        DB::table('tematicas')->insert([
            'nombre' => 'Politica',
        ]);
        DB::table('tematicas')->insert([
            'nombre' => 'Familia',
        ]);
    }
}
