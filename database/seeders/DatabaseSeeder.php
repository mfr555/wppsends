<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            DepartamentoSeeder::class,
            UsersSeeder::class,
            TematicasSeeder::class,
            ComunicacionsSeeder::class,
            OrigenSeeder::class,
            OrigenSeeder2::class,
            ContactoSeeder::class,
            ComunicacionContactoSeeder::Class,
            PrefCristianosSeeder::Class,
        ]);
    }
}
