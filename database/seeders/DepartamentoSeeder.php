<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('departamentos')->insert(['nombre' => 'Artigas'], );
        DB::table('departamentos')->insert(['nombre' => 'Canelones'], );
        DB::table('departamentos')->insert(['nombre' => 'Cerro Largo'], );
        DB::table('departamentos')->insert(['nombre' => 'Colonia'], );
        DB::table('departamentos')->insert(['nombre' => 'Durazno'], );
        DB::table('departamentos')->insert(['nombre' => 'Flores'], );
        DB::table('departamentos')->insert(['nombre' => 'Florida'], );
        DB::table('departamentos')->insert(['nombre' => 'Lavalleja'], );
        DB::table('departamentos')->insert(['nombre' => 'Maldonado'], );
        DB::table('departamentos')->insert(['nombre' => 'Montevideo'], );
        DB::table('departamentos')->insert(['nombre' => 'Paysandú'], );
        DB::table('departamentos')->insert(['nombre' => 'Río Negro'], );
        DB::table('departamentos')->insert(['nombre' => 'Rivera'], );
        DB::table('departamentos')->insert(['nombre' => 'Rocha'], );
        DB::table('departamentos')->insert(['nombre' => 'Salto'], );
        DB::table('departamentos')->insert(['nombre' => 'San José'], );
        DB::table('departamentos')->insert(['nombre' => 'Soriano'], );
        DB::table('departamentos')->insert(['nombre' => 'Tacuarembó'], );
        DB::table('departamentos')->insert(['nombre' => 'Treinta y Tres'], );
    }
}
