<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Lista;
use App\Models\Departamento;

use Symfony\Component\Console\Output\ConsoleOutput;

class ListaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departamentos = Departamento::all();

        // ['departamento', 'numero', 'estado_del_numero'];
        $datos = [
            ['Montevideo', '554', 'Concedido'],
            ['Montevideo', '556', 'Concedido'],
            ['Montevideo', '5550', 'Concedido'],
            ['Montevideo', '5555', 'Concedido'],
            ['Montevideo', '55055', 'Concedido'],
            ['Flores', '554', 'Concedido'],
            ['Flores', '556', 'Concedido'],
            ['Flores', '5550', 'Concedido'],
            ['Flores', '5555', 'Concedido'],
            ['Flores', '55055', 'Concedido'],
            ['Canelones', '554', 'Concedido'],
            ['Canelones', '556', 'Concedido'],
            ['Canelones', '5555', 'Concedido'],
            ['Canelones', '55055', 'Concedido'],
            ['Rocha', '554', 'Concedido'],
            ['Rocha', '556', 'Concedido'],
            ['Rocha', '5555', 'Concedido'],
            ['Rocha', '5550', 'Concedido'],
            ['Rocha', '55055', 'Concedido'],
            ['Salto', '554', 'Concedido'],
            ['Salto', '556', 'Concedido'],
            ['Salto', '5550', 'Concedido'],
            ['Salto', '5555', 'Concedido'],
            ['Salto', '55055', 'Concedido'],
            ['Río Negro', '554', 'Concedido'],
            ['Río Negro', '556', 'Concedido'],
            ['Río Negro', '5550', 'Concedido'],
            ['Río Negro', '5555', 'Concedido'],
            ['Río Negro', '55055', 'Concedido'],
            ['San José', '554', 'Concedido'],
            ['San José', '550', 'Concedido'],
            ['San José', '556', 'Concedido'],
            ['San José', '5550', 'Concedido'],
            ['San José', '5555', 'Concedido'],
            ['San José', '55055', 'Concedido'],
            ['Florida', '554', 'Concedido'],
            ['Florida', '556', 'Concedido'],
            ['Florida', '5550', 'Concedido'],
            ['Florida', '5555', 'Concedido'],
            ['Florida', '55055', 'Concedido'],
            ['Artigas', '554', 'Concedido'],
            ['Artigas', '556', 'Concedido'],
            ['Artigas', '5550', 'Concedido'],
            ['Artigas', '5555', 'Concedido'],
            ['Artigas', '55055', 'Concedido'],
            ['Colonia', '554', 'Concedido'],
            ['Colonia', '556', 'Concedido'],
            ['Colonia', '5550', 'Concedido'],
            ['Colonia', '55055', 'Concedido'],
            ['Durazno', '554', 'Concedido'],
            ['Durazno', '556', 'Concedido'],
            ['Durazno', '5550', 'Concedido'],
            ['Durazno', '5555', 'Concedido'],
            ['Durazno', '55055', 'Concedido'],
            ['Lavalleja', '554', 'Concedido'],
            ['Lavalleja', '556', 'Concedido'],
            ['Lavalleja', '5550', 'Concedido'],
            ['Lavalleja', '5555', 'Concedido'],
            ['Lavalleja', '55055', 'Concedido'],
            ['Cerro Largo', '554', 'Concedido'],
            ['Cerro Largo', '556', 'Concedido'],
            ['Cerro Largo', '5550', 'Concedido'],
            ['Cerro Largo', '5555', 'Concedido'],
            ['Cerro Largo', '55055', 'Concedido'],
            ['Soriano', '554', 'Concedido'],
            ['Soriano', '556', 'Concedido'],
            ['Soriano', '5550', 'Concedido'],
            ['Soriano', '5555', 'Concedido'],
            ['Soriano', '55055', 'Concedido'],
            ['Maldonado', '554', 'Concedido'],
            ['Maldonado', '556', 'Concedido'],
            ['Maldonado', '5550', 'Concedido'],
            ['Maldonado', '5555', 'Concedido'],
            ['Maldonado', '55055', 'Renunciado'],
            ['Maldonado', '720', 'Solicitado'],
            ['Maldonado', '320', 'Solicitado'],
            ['Tacuarembó', '554', 'Concedido'],
            ['Tacuarembó', '556', 'Concedido'],
            ['Tacuarembó', '5550', 'Concedido'],
            ['Tacuarembó', '55055', 'Concedido'],
            ['Treinta y Tres', '554', 'Concedido'],
            ['Treinta y Tres', '556', 'Concedido'],
            ['Treinta y Tres', '5550', 'Concedido'],
            ['Treinta y Tres', '5555', 'Concedido'],
            ['Treinta y Tres', '55055', 'Concedido'],
            ['Paysandú', '554', 'Concedido'],
            ['Paysandú', '556', 'Concedido'],
            ['Paysandú', '5550', 'Concedido'],
            ['Paysandú', '5555', 'Concedido'],
            ['Paysandú', '55055', 'Concedido'],
            ['Rivera', '556', 'Concedido'],
            ['Rivera', '5550', 'Concedido'],
            ['Rivera', '5555', 'Concedido'],
            ['Rivera', '55055', 'Concedido'],
        ];

        foreach ($datos as $dato) {
            $departamento = $departamentos->where('nombre', $dato[0])->first();
            Lista::create([
                'departamento_id' => $departamento->id,
                'numero' => $dato[1],
                'estado_del_numero' => $dato[2],
            ]);
        }

        $n720 = Lista::where('numero', '720')->first();
        $n720->notas = 'Solicitado el 27/02/2024';
        $n720->save();

        $n320 = Lista::where('numero', '320')->first();
        $n320->notas = 'Solicitado el 27/02/2024';
        $n320->save();

        $n55055 = Lista::where('numero', '55055')
                        ->where('estado_del_numero', 'Renunciado')
                        ->first();
        $n55055->notas = 'Renuncia solicitada el 27/02/2024 por límite de la agrupación';
        $n55055->save();
    }
}
