<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Origen;
use App\Models\User;

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
            'nombre' => 'Brak 2024',
            'fecha' => Carbon::parse('2022-10-01'),
        ]);

        $users = User::get();
        foreach ($users as $user){
            if ( Origen::where('user_id',$user->id)->get()->first() == null
              &&  $user->username != 'desconocido' ){
                $origen = new Origen;
                $origen->nombre = "Contactos ".$user->username;
                $origen->user_id = $user->id;
                $origen->save();
            }
        }

    }
}
