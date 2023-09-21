<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tematicasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tematicas')->insert([
            'nombre' => '100% cristiana',
        ]);
        DB::table('tematicas')->insert([
            'nombre' => '100% politica',
        ]);
        DB::table('tematicas')->insert([
            'nombre' => 'Cristiana y política',
        ]);
    }
}
