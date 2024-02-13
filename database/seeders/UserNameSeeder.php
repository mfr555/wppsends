<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserNameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = ['mfr' => 'Matías Rodriguez',
            'roquette' => 'Daniel Roquette',
            'maxi' => 'Maximiliano Rubiles',
            'ines' => 'Inés Sanz',
            'desconocido' => '',
            'petit' => 'Samuel Petit'];

        foreach ($data as $username => $name) {
            $user = User::where('username', $username)->first();
            if ($user) {
                $user->name = $name;
                $user->save();
            }
        }
    }
}
