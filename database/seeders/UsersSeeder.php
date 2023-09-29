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
        ]);

        DB::table('users')->insert([
            'username' => 'roquette',
            'password' => Hash::make('espartano1'),
            'email' => 'roquettedaniel@gmail.com',
        ]);

        DB::table('users')->insert([
            'username' => 'maxi',
            'password' => Hash::make('0poliza'),
            'email' => 'maxi.rubiles3@gmail.com',
        ]);

        DB::table('users')->insert([
            'username' => 'ines',
            'password' => Hash::make('chicanueva'),
            'email' => 'inessanzsaccone@gmail.com ',
        ]);

        DB::table('users')->insert([
            'username' => 'desconocido',
            'password' => Hash::make('desconocido'),
            'email' => 'desconocido@desconocido.com ',
        ]);
    }
}
