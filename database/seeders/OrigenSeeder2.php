<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Origen;

class OrigenSeeder2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::get();
        foreach ($users as $user){
            if ( Origen::where('user_id',$user->id)->get()->first() == null ){
                $origen = new Origen;
                $origen->nombre = "Contactos de ".$user->name;
                $origen->user_id = $user->id;
                $origen->save();
            }
        }
    }
}
