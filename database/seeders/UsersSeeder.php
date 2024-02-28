<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'mfr',
            'password' => Hash::make('1co916.'),
            'email' => 'mfrodriguez555@gmail.com',
            'name' => 'Matías Rodriguez',
        ]);

        DB::table('users')->insert([
            'username' => 'jalvarez',
            'password' => Hash::make('jhonita367.'),
            'email' => 'alvarezjonathan367@gmail.com',
            'name' => 'Jonathan Alvarez',
        ]);

        DB::table('users')->insert([
            'username' => 'aclavijo',
            'password' => Hash::make('clavi19.'),
            'email' => 'agusclavijo19@gmail.com',
            'name' => 'Agustín Clavijo',
        ]);

        DB::table('users')->insert([
            'username' => 'atabarez',
            'password' => Hash::make('ataba12.'),
            'email' => 'adriantabarez12@gmail.com',
            'name' => 'Adrián Tabarez',
        ]);

    }
}
