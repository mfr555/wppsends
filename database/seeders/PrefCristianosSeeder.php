<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contacto;
use App\Models\Origen;
use App\Models\Preferencia;
use App\Models\Tematica;

class PrefCristianosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pres_id = Origen::where('nombre', 'Pastores 2023')->first()->id;
        $contactos = Contacto::where('origen_id', $pres_id)->orWhere('comentarios', 'like', '%cristiano%')->get();
        $tem_cristiana = Tematica::where('nombre', 'Cristiana')->first()->id;

        foreach ($contactos as $contacto) {
            $pref = Preferencia::where(['contacto_id' => $contacto->id,
                                        'tematica_id' => $tem_cristiana ])->first();

            if (!isset($pref)){
                $pref = new Preferencia();
                $pref->contacto_id = $contacto->id;
                $pref->aceptacion = 1;
                $pref->tematica_id = $tem_cristiana;
                $pref->save();
            }

        }
    }
}
