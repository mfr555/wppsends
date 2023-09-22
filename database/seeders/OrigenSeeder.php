<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrigenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('origens')->insert([
            'nombre' => 'Jóvenes 2022',
            'fecha' => Carbon::parse('2022-10-01')
        ]);

        DB::table('origens')->insert([
            'nombre' => 'Pastores 2023',
            'fecha' => Carbon::parse('2023-09-01')
        ]);
    }
}
