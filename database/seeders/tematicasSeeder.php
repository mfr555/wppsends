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
        DB::table('tematicas')->insert(['nombre' => 'Cristiana']);
        DB::table('tematicas')->insert(['nombre' => 'Política']);
        DB::table('tematicas')->insert(['nombre' => 'Familia']);
        DB::table('tematicas')->insert(['nombre' => 'Pedofilia']);
        DB::table('tematicas')->insert(['nombre' => 'Bullying']);
        DB::table('tematicas')->insert(['nombre' => 'Invitaciones']);
        DB::table('tematicas')->insert(['nombre' => 'Redes sociales']);
        DB::table('tematicas')->insert(['nombre' => 'Infancia']);
        DB::table('tematicas')->insert(['nombre' => 'Pastores']);
    }
}
