<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Contacto;
use App\Models\Origen;

class ContactoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //OrigenesId
        $Pastores = Origen::where('nombre','Pastores 2023')->get()->first()->id;
        $jovenes = Origen::where('nombre','Jóvenes 2022')->get()->first()->id;
        $contactosMfr = Origen::where('nombre','Contactos Matías Rodriguez')->get()->first()->id;

        DB::table('contactos')->insert(['nombre' => 'Eriko', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '91206386', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Oscar', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '91311083', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Raul', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '91512580', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Hugo', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '91633116', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Romina', 'apellido' => '', 'tratamiento' => 'Pastora', 'cel' => '91790800', 'origen_id' => $Pastores, 'sexo' => 'Femenino', ]);
        DB::table('contactos')->insert(['nombre' => 'Norberto', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '91997625', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Edgar', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '92076095', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Luis', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '92110259', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Hebert', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '92236239', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Luis', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '92417964', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Diego', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '92427517', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Roberto', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '92454639', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Marcelo', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '92801787', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Sergio', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '93498161', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Leonardo', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '93782641', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Jorge', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '93790367', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Milton', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '93821103', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Jaqueline', 'apellido' => '', 'tratamiento' => 'Pastora', 'cel' => '93882794', 'origen_id' => $Pastores, 'sexo' => 'Femenino', ]);
        DB::table('contactos')->insert(['nombre' => 'Freddy', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '93945090', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Leonardo', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '93946746', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Gerardo', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '94024542', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Susana', 'apellido' => '', 'tratamiento' => 'Pastora', 'cel' => '94033863', 'origen_id' => $Pastores, 'sexo' => 'Femenino', ]);
        DB::table('contactos')->insert(['nombre' => 'Miguel', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '94068418', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Juan', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '94070000', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Ernesto', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '94108772', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Mario', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '94129376', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Gabriel', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '94192391', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Jose', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '94240478', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Ernesto', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '94264992', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Sergio', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '94269072', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Leonardo', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '94280783', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Raul', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '94310206', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Ellias', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '94412358', 'comentarios' => 'Maldonado', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Marcelo', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '94415584', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Jose', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '94471100', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Roberto', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '94562913', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Rhode', 'apellido' => '', 'tratamiento' => 'Pastora', 'cel' => '94577740', 'origen_id' => $Pastores, 'sexo' => 'Femenino', ]);
        DB::table('contactos')->insert(['nombre' => 'Ruben', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '94647254', 'comentarios' => 'Salto', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Hugo', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '94715006', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Jesus', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '94716869', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Alfredo', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '94741318', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Wilson', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '94761055', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Raul', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '94764700', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Mario', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '94790581', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Magali', 'apellido' => '', 'tratamiento' => 'Pastora', 'cel' => '94827664', 'comentarios' => 'Esposa hospitalizada 12/9/2023', 'origen_id' => $Pastores, 'sexo' => 'Femenino', ]);
        DB::table('contactos')->insert(['nombre' => 'Martin', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '94829349', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Martha', 'apellido' => '', 'tratamiento' => 'Pastora', 'cel' => '94870200', 'origen_id' => $Pastores, 'sexo' => 'Femenino', ]);
        DB::table('contactos')->insert(['nombre' => 'Lilian', 'apellido' => '', 'tratamiento' => 'Pastora', 'cel' => '94906212', 'comentarios' => 'Rio Branco, Cerro Largo', 'origen_id' => $Pastores, 'sexo' => 'Femenino', ]);
        DB::table('contactos')->insert(['nombre' => 'Vicente', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '94942516', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Gustavo', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '94960873', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Heber', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '94981251', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Wiliam', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '95012318', 'comentarios' => 'Rivera', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Jorge', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '95033281', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Raul', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '95034798', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Lemuel', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '95037224', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Domingo', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '95070301', 'comentarios' => '1/9/2023 está en Argentina', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Luis', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '95117655', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Marcela', 'apellido' => '', 'tratamiento' => 'Pastora', 'cel' => '95140577', 'origen_id' => $Pastores, 'sexo' => 'Femenino', ]);
        DB::table('contactos')->insert(['nombre' => 'Bernardo', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '95157481', 'comentarios' => 'Esposa de Pr. José', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Manuela', 'apellido' => '', 'tratamiento' => 'Pastora', 'cel' => '95176594', 'origen_id' => $Pastores, 'sexo' => 'Femenino', ]);
        DB::table('contactos')->insert(['nombre' => 'Alejandro', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '95206359', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Alba', 'apellido' => '', 'tratamiento' => 'Pastora', 'cel' => '95207878', 'origen_id' => $Pastores, 'sexo' => 'Femenino', ]);
        DB::table('contactos')->insert(['nombre' => 'Robert', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '95300246', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Enrique', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '95351632', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Juan', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '95382458', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Fernanado', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '95402060', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Armando', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '95410251', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Rodolfo', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '95458026', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Roberto', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '95576406', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Freddy', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '95683423', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Hugo', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '95739637', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Carmelo', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '95747336', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Eulalia', 'apellido' => '', 'tratamiento' => 'Pastora', 'cel' => '95778465', 'origen_id' => $Pastores, 'sexo' => 'Femenino', ]);
        DB::table('contactos')->insert(['nombre' => 'Hugo', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '95796551', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Maria', 'apellido' => '', 'tratamiento' => 'Pastora', 'cel' => '95820933', 'origen_id' => $Pastores, 'sexo' => 'Femenino', ]);
        DB::table('contactos')->insert(['nombre' => 'Carlos', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '95834726', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Benito', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '95849167', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Marcos', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '95863802', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Roberto', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '95865874', 'comentarios' => 'Pr. fallecido', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Walter', 'apellido' => 'Delgado', 'tratamiento' => 'Apóstol', 'cel' => '95885207', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Emir', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '95885622', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Mariela', 'apellido' => '', 'tratamiento' => 'Pastora', 'cel' => '95961585', 'origen_id' => $Pastores, 'sexo' => 'Femenino', ]);
        DB::table('contactos')->insert(['nombre' => 'Gerardo', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '95972341', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Nelson', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '96046149', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Sebastian', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '96202321', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Ethel', 'apellido' => '', 'tratamiento' => 'Pastora', 'cel' => '96203739', 'origen_id' => $Pastores, 'sexo' => 'Femenino', ]);
        DB::table('contactos')->insert(['nombre' => 'Inés', 'apellido' => '', 'tratamiento' => 'Pastora', 'cel' => '96408237', 'origen_id' => $Pastores, 'sexo' => 'Femenino', ]);
        DB::table('contactos')->insert(['nombre' => 'María', 'apellido' => '', 'tratamiento' => 'Pastora', 'cel' => '96452073', 'comentarios' => 'Pr. Luis falleció', 'origen_id' => $Pastores, 'sexo' => 'Femenino', ]);
        DB::table('contactos')->insert(['nombre' => 'Fredy', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '96475755', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Richard', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '96630091', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Juan', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '96736771', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Walter', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '96912684', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Abimael', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '96951899', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Luis', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '97450113', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Santiago', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '98027227', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Luis', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '98035762', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Eduardo', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '98045485', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Washinton', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '98145665', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'German', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '98160835', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Estela', 'apellido' => '', 'tratamiento' => 'Pastora', 'cel' => '98181198', 'origen_id' => $Pastores, 'sexo' => 'Femenino', ]);
        DB::table('contactos')->insert(['nombre' => 'Rodrigo', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '98323444', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Doris', 'apellido' => '', 'tratamiento' => 'Pastora', 'cel' => '98340094', 'origen_id' => $Pastores, 'sexo' => 'Femenino', ]);
        DB::table('contactos')->insert(['nombre' => 'Victor', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '98344202', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Juan', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '98366470', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Eduardo', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '98370460', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Gustavo', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '98410628', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Jose', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '98482565', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Huber', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '98557306', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Efrain', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '98638936', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Edgar', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '98674119', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Alberto', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '98696554', 'comentarios' => 'Rivera', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Emilio', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '98705022', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Jose', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '98708381', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Jose', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '98737544', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Pablo', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '98754610', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Hugo', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '98757497', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Maria', 'apellido' => '', 'tratamiento' => 'Pastora', 'cel' => '98784993', 'origen_id' => $Pastores, 'sexo' => 'Femenino', ]);
        DB::table('contactos')->insert(['nombre' => 'JAVIER', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '98796610', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Luis', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '98864745', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Roque', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '98930015', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Daniel', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '98970706', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Ruth', 'apellido' => '', 'tratamiento' => 'Pastora', 'cel' => '99042126', 'origen_id' => $Pastores, 'sexo' => 'Femenino', ]);
        DB::table('contactos')->insert(['nombre' => 'Freddy', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '99044108', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Fernando', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '99047246', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Pablo', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '99048476', 'comentarios' => 'Salto', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Juan', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '99200793', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Debora', 'apellido' => '', 'tratamiento' => 'Pastora', 'cel' => '99207579', 'origen_id' => $Pastores, 'sexo' => 'Femenino', ]);
        DB::table('contactos')->insert(['nombre' => 'Daniel', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '99229298', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Liber', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '99261920', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Sonia', 'apellido' => '', 'tratamiento' => 'Pastora', 'cel' => '99276501', 'origen_id' => $Pastores, 'sexo' => 'Femenino', ]);
        DB::table('contactos')->insert(['nombre' => 'Juan', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '99277480', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Daniel', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '99326058', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Carlos', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '99332012', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Silvia', 'apellido' => '', 'tratamiento' => 'Pastora', 'cel' => '99370199', 'origen_id' => $Pastores, 'sexo' => 'Femenino', ]);
        DB::table('contactos')->insert(['nombre' => 'Miguel', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '99441030', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Luciana', 'apellido' => '', 'tratamiento' => 'Pastora', 'cel' => '99446315', 'origen_id' => $Pastores, 'sexo' => 'Femenino', ]);
        DB::table('contactos')->insert(['nombre' => 'Joel', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '99479648', 'comentarios' => 'Su pastor se llama Fabián no se si es el esposo', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Nestor', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '99536621', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Nestor', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '99544397', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Leandro', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '99545960', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Oscar', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '99568248', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Alvaro', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '99595483', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Alvaro', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '99618028', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Adriana', 'apellido' => '', 'tratamiento' => 'Pastora', 'cel' => '99620002', 'origen_id' => $Pastores, 'sexo' => 'Femenino', ]);
        DB::table('contactos')->insert(['nombre' => 'Joel', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '99655295', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Gustavo', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '99682235', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Alexis', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '99698420', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Daniel', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '99724279', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Italo', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '99758944', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Glenis', 'apellido' => '', 'tratamiento' => 'Pastora', 'cel' => '99761382', 'origen_id' => $Pastores, 'sexo' => 'Femenino', ]);
        DB::table('contactos')->insert(['nombre' => 'Luis', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '99776985', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Gabriel', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '99797976', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Ricardo', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '99817323', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Gerardo', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '99831584', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Domingo', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '99863204', 'comentarios' => 'Soriano', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Altivar', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '99894598', 'comentarios' => 'Paysandú', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Jose', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '99897606', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Roman', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '99908115', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Jose', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '99943298', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Silvio', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '99954683', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Exequiel', 'apellido' => '', 'tratamiento' => 'Pastor', 'cel' => '99959379', 'origen_id' => $Pastores, 'sexo' => 'Masculino', ]);
        DB::table('contactos')->insert(['nombre' => 'Luisa', 'apellido' => '', 'tratamiento' => 'Pastora', 'cel' => '99986041', 'origen_id' => $Pastores, 'sexo' => 'Femenino', ]);
        DB::table('contactos')->insert(['nombre' => 'Ceclilia', 'apellido' => 'Umpierrez', 'tratamiento' => 'Pastora', 'cel' => '95055488', 'origen_id' => $Pastores, 'sexo' => 'Femenino', ]);
        DB::table('contactos')->insert(['nombre' => 'Yaquelin', 'apellido' => '', 'cel' => '99170645', 'comentarios' => 'Lic. con posgrado en salud mental y adicciones', 'origen_id' => $contactosMfr, 'sexo' => 'Femenino', ]);
        DB::table('contactos')->insert(['nombre' => 'Jonathan', 'apellido' => 'Caballero', 'cel' => '99016985', 'comentarios' => 'Estaba como pr. Roberto', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Emily', 'apellido' => 'Martinez', 'cel' => '97665922', 'comentarios' => 'Contacto de Lucas nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Nicole', 'apellido' => 'Fernandez', 'cel' => '94920257', 'comentarios' => 'Contacto de Victoria Varela nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Cristian', 'apellido' => 'Huertas', 'cel' => '92033886', 'comentarios' => 'Contacto de Elías Emanuel Pereira Almada nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Carolina', 'apellido' => 'jara', 'cel' => '97275257', 'comentarios' => 'Contacto de Julieta nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Ayelen', 'apellido' => '', 'cel' => '97555213', 'comentarios' => 'Contacto de Alisson nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Agustín', 'apellido' => 'Clavijo', 'cel' => '97552409', 'comentarios' => 'Contacto de Nicole Gutiérrez nv1. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Sebastián', 'apellido' => 'Effa', 'cel' => '96125325', 'comentarios' => 'Contacto de Anael Sofía Martínez Silvera nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Paula', 'apellido' => 'Curbelo', 'cel' => '92046455', 'comentarios' => 'Contacto de Victoria Varela nv3. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Jonathan', 'apellido' => 'Pereira', 'cel' => '93842734', 'comentarios' => 'Contacto de Julieta nv2. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Santiago', 'apellido' => 'Rosas', 'cel' => '91547260', 'comentarios' => 'Contacto de Elías Emanuel Pereira Almada nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Milagros', 'apellido' => 'Montiel', 'cel' => '95189986', 'comentarios' => 'Contacto de Florencia Astoviza nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Ana', 'apellido' => 'Giannotti', 'cel' => '94924514', 'comentarios' => 'Contacto de Florencia Astoviza nv1. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Belén', 'apellido' => 'Martinez', 'cel' => '93317058', 'comentarios' => 'Contacto de Victoria Varela nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Jessica', 'apellido' => 'Yacono', 'cel' => '96799299', 'comentarios' => 'Contacto de Victoria Varela nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Edgar', 'apellido' => '', 'cel' => '92768724', 'comentarios' => 'Contacto de Anael Sofía Martínez Silvera nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Agustín', 'apellido' => 'Correa', 'cel' => '95427940', 'comentarios' => 'Contacto de Florencia Astoviza nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Elias', 'apellido' => 'Sanguinett', 'cel' => '94669380', 'comentarios' => 'Contacto de Lucas nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Fernando', 'apellido' => 'miguez', 'cel' => '96499232', 'comentarios' => 'Contacto de Kevin Álvarez nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Dahiana', 'apellido' => 'Astoviza', 'cel' => '94256244', 'comentarios' => 'Contacto de Matias nv2. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Oriana', 'apellido' => 'Martínez', 'cel' => '93724516', 'comentarios' => 'Contacto de Debora Bentancur nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Ximena', 'apellido' => 'Ortelli', 'cel' => '96079529', 'comentarios' => 'Contacto de Ximena Antonella Ortelli Veglia nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Zaira', 'apellido' => 'Alvarez', 'cel' => '97605539', 'comentarios' => 'Contacto de Oriana nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Ana', 'apellido' => 'Guizulfo', 'cel' => '94371006', 'comentarios' => 'Contacto de Kevin Álvarez nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Mateo', 'apellido' => 'Caitano', 'cel' => '93677774', 'comentarios' => 'Contacto de Victoria Varela nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Belén', 'apellido' => 'Guedes', 'cel' => '93786730', 'comentarios' => 'Contacto de Florencia Astoviza nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Gimena', 'apellido' => 'Machado', 'cel' => '99400150', 'comentarios' => 'Contacto de Lucas nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Felipe', 'apellido' => 'Aunchayna', 'cel' => '98316793', 'comentarios' => 'Contacto de Lucas nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Romina', 'apellido' => 'Galván', 'cel' => '95063505', 'comentarios' => 'Contacto de Yamila Garcia nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Antoine', 'apellido' => 'Sequeira', 'cel' => '95258485', 'comentarios' => 'Contacto de Victoria Varela nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Sofía', 'apellido' => 'Faraldo', 'cel' => '96264627', 'comentarios' => 'Contacto de Florencia Astoviza nv1. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Benjamin', 'apellido' => '', 'cel' => '98302365', 'comentarios' => 'Contacto de Agustina nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Florencia', 'apellido' => 'Umpierrez', 'cel' => '93739771', 'comentarios' => 'Contacto de Nicole Gutiérrez nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Sebastian', 'apellido' => 'bueno', 'cel' => '91792352', 'comentarios' => 'Contacto de Victoria Varela nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Esteban', 'apellido' => 'Alexander', 'cel' => '96666512', 'comentarios' => 'Contacto de Matias nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Melani', 'apellido' => 'Sena', 'cel' => '95669807', 'comentarios' => 'Contacto de Elías Emanuel Pereira Almada nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Jimena', 'apellido' => 'Almeida', 'cel' => '97546925', 'comentarios' => 'Contacto de Alisson nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Ruth', 'apellido' => 'Benitez', 'cel' => '93825142', 'comentarios' => 'Contacto de Anael Sofía Martínez Silvera nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Joaquín', 'apellido' => 'Falvo', 'cel' => '99491297', 'comentarios' => 'Contacto de Eliana nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Lucia', 'apellido' => 'Pereira', 'cel' => '98865184', 'comentarios' => 'Contacto de Victoria Varela nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Luciana', 'apellido' => '', 'cel' => '96228183', 'comentarios' => 'Contacto de Nicole Gutiérrez nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Camila', 'apellido' => 'Aguero', 'cel' => '92304351', 'comentarios' => 'Contacto de Florencia Astoviza nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Roberto', 'apellido' => 'Molina', 'cel' => '91099181', 'comentarios' => 'Contacto de Victoria Varela nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Federico', 'apellido' => 'da Chuna', 'cel' => '92275040', 'comentarios' => 'Contacto de Ximena Antonella Ortelli Veglia nv1. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Belén', 'apellido' => 'Velarde', 'cel' => '93301949', 'comentarios' => 'Contacto de Diego de Olivera nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Patricio', 'apellido' => 'Sebastian', 'cel' => '93958191', 'comentarios' => 'Contacto de Victoria Varela nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Brian', 'apellido' => '', 'cel' => '94534377', 'comentarios' => 'Contacto de Ximena Antonella Ortelli Veglia nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Sebastian', 'apellido' => 'Ledesma', 'cel' => '97778315', 'comentarios' => 'Contacto de Belén y Emanuel nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Triana', 'apellido' => 'Malzoni', 'cel' => '93904378', 'comentarios' => 'Contacto de Belén y Emanuel nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Ce', 'apellido' => 'Barbara', 'cel' => '97595923', 'comentarios' => 'Contacto de Yamila Garcia nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Luana', 'apellido' => '', 'cel' => '98293240', 'comentarios' => 'Contacto de Lucas nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Angélica', 'apellido' => 'Kunze', 'cel' => '96324421', 'comentarios' => 'Contacto de Florencia Astoviza nv1. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Mateo', 'apellido' => 'Delgado', 'cel' => '95219945', 'comentarios' => 'Contacto de Diego nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Lines', 'apellido' => 'Silva', 'cel' => '93409584', 'comentarios' => 'Contacto de Lucas nv1. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Leandro', 'apellido' => 'Menini', 'cel' => '95863556', 'comentarios' => 'Contacto de Metew nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Agustina', 'apellido' => 'Da Rosa', 'cel' => '93648059', 'comentarios' => 'Contacto de Kevin Álvarez nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Rocío', 'apellido' => 'Ocampo', 'cel' => '94639172', 'comentarios' => 'Contacto de Diego de Olivera nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Nicolás', 'apellido' => 'Juárez', 'cel' => '97730154', 'comentarios' => 'Contacto de Agustina nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Camila', 'apellido' => 'Gayun', 'cel' => '97961472', 'comentarios' => 'Contacto de Victoria Varela nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Katerina', 'apellido' => 'Etcheverry', 'cel' => '97051490', 'comentarios' => 'Contacto de Metew nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Agustin', 'apellido' => 'Rodriguez', 'cel' => '99623463', 'comentarios' => 'Contacto de Anael Sofía Martínez Silvera nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Florencia', 'apellido' => 'Carle', 'cel' => '95892143', 'comentarios' => 'Contacto de Ximena Antonella Ortelli Veglia nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Florencia', 'apellido' => 'Pereira', 'cel' => '91345283', 'comentarios' => 'Contacto de Sebastian Carle nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Lucas', 'apellido' => 'Fripp', 'cel' => '93942616', 'comentarios' => 'Contacto de Julieta nv1. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Belen', 'apellido' => 'García', 'cel' => '93459544', 'comentarios' => 'Contacto de Lucas nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Sara', 'apellido' => 'Silva', 'cel' => '97553504', 'comentarios' => 'Contacto de Florencia Astoviza nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Kevin', 'apellido' => 'García', 'cel' => '97999412', 'comentarios' => 'Contacto de Pablo nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Milagros', 'apellido' => 'Rodríguez', 'cel' => '93514157', 'comentarios' => 'Contacto de Julieta nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Mailen', 'apellido' => 'Pereira', 'cel' => '95509142', 'comentarios' => 'Contacto de Victoria Varela nv3. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Tamara', 'apellido' => 'Oviedo', 'cel' => '94957455', 'comentarios' => 'Contacto de Julieta nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Antony', 'apellido' => 'Alvez', 'cel' => '95805111', 'comentarios' => 'Contacto de Anael Sofía Martínez Silvera nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Martin', 'apellido' => 'Elizalde', 'cel' => '93968486', 'comentarios' => 'Contacto de Ximena Antonella Ortelli Veglia nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Andrés', 'apellido' => '', 'cel' => '95772647', 'comentarios' => 'Contacto de Sebastian Carle nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Agustina', 'apellido' => 'Barrionuevo', 'cel' => '94140067', 'comentarios' => 'Contacto de Florencia Astoviza nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Nahomi', 'apellido' => 'Rijo', 'cel' => '94354990', 'comentarios' => 'Contacto de Victoria Varela nv3. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Catriel', 'apellido' => 'Rsso', 'cel' => '95392018', 'comentarios' => 'Contacto de Nicole Gutiérrez nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Florencia', 'apellido' => 'Fernandez', 'cel' => '91665788', 'comentarios' => 'Contacto de Lucas nv1. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Mikaela', 'apellido' => 'Rivero', 'cel' => '93717211', 'comentarios' => 'Contacto de Ximena Antonella Ortelli Veglia nv2. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Christian', 'apellido' => 'Valenzuela', 'cel' => '92150904', 'comentarios' => 'Contacto de Victoria Varela nv3. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Aylen', 'apellido' => 'Sanguinetti', 'cel' => '94708248', 'comentarios' => 'Contacto de Kevin Álvarez nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Mia', 'apellido' => 'Corujo', 'cel' => '91528397', 'comentarios' => 'Contacto de Nicole Gutiérrez nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Lucas', 'apellido' => 'Ayala', 'cel' => '98435437', 'comentarios' => 'Contacto de Nicole Gutiérrez nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Gabriela', 'apellido' => 'Pinto', 'cel' => '91456433', 'comentarios' => 'Contacto de Milagros Mena nv1. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'SANTIAGO', 'apellido' => 'DI DONATO', 'cel' => '99860793', 'comentarios' => 'Contacto de Victoria Varela nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Marcia', 'apellido' => 'Zapata', 'cel' => '97730359', 'comentarios' => 'Contacto de Luciana Rosas nv3. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Jury', 'apellido' => '', 'cel' => '92072698', 'comentarios' => 'Contacto de Anael Sofía Martínez Silvera nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Luana', 'apellido' => 'Romero', 'cel' => '93741246', 'comentarios' => 'Contacto de Nicole Gutiérrez nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Romina', 'apellido' => 'Camelo', 'cel' => '95480906', 'comentarios' => 'Contacto de Marcia nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Manuel', 'apellido' => 'Vidal', 'cel' => '97552418', 'comentarios' => 'Contacto de Ximena Antonella Ortelli Veglia nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Belén', 'apellido' => 'Suárez', 'cel' => '94197018', 'comentarios' => 'Contacto de Sebastian Carle nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Cristian', 'apellido' => 'Lopez', 'cel' => '97933601', 'comentarios' => 'Contacto de Agustina nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Facundo', 'apellido' => 'Alonso', 'cel' => '91478967', 'comentarios' => 'Contacto de Julieta nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Nahiara', 'apellido' => 'Mena', 'cel' => '96867917', 'comentarios' => 'Contacto de Agustina nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Jazmín', 'apellido' => 'Olivera', 'cel' => '95387723', 'comentarios' => 'Contacto de Milagros Mena nv1. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Daiana', 'apellido' => '', 'cel' => '93869770', 'comentarios' => 'Contacto de Julieta nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Genesis', 'apellido' => 'Santana', 'cel' => '98724866', 'comentarios' => 'Contacto de Ximena Antonella Ortelli Veglia nv2. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Sebastian', 'apellido' => 'Villar', 'cel' => '96403895', 'comentarios' => 'Contacto de Alisson nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Facundo', 'apellido' => '', 'cel' => '91994864', 'comentarios' => 'Contacto de Sebastian Carle nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Paula', 'apellido' => 'Reyes', 'cel' => '99639600', 'comentarios' => 'Contacto de Nicole Gutiérrez nv1. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Gonzalo', 'apellido' => '', 'cel' => '94127181', 'comentarios' => 'Contacto de Victoria Varela nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'YERAY', 'apellido' => 'CARSIN', 'cel' => '97730305', 'comentarios' => 'Contacto de Florencia Astoviza nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Martin', 'apellido' => 'Suarez', 'cel' => '97566678', 'comentarios' => 'Contacto de Neumar nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Mariella', 'apellido' => 'Mello', 'cel' => '91920902', 'comentarios' => 'Contacto de Pablo nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Ximena', 'apellido' => 'Mezona', 'cel' => '96770568', 'comentarios' => 'Contacto de Ximena Antonella Ortelli Veglia nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Diego', 'apellido' => 'Recarey', 'cel' => '94365893', 'comentarios' => 'Contacto de Victoria Varela nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Tatiana', 'apellido' => 'Aguirre', 'cel' => '94973386', 'comentarios' => 'Contacto de Elías Emanuel Pereira Almada nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Elias', 'apellido' => 'D3', 'cel' => '93706930', 'comentarios' => 'Contacto de Victoria Varela nv3. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Romina', 'apellido' => '', 'cel' => '93467004', 'comentarios' => 'Contacto de Victoria Varela nv3. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Yamila', 'apellido' => 'Barragán', 'cel' => '94453097', 'comentarios' => 'Contacto de Belén y Emanuel nv2. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Helen', 'apellido' => 'Motta', 'cel' => '93595551', 'comentarios' => 'Contacto de Belén y Emanuel nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Alex', 'apellido' => '', 'cel' => '95350284', 'comentarios' => 'Contacto de Agustina nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Axel', 'apellido' => 'Areyano', 'cel' => '95497014', 'comentarios' => 'Contacto de Yamila Garcia nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Belén', 'apellido' => 'Redes', 'cel' => '92063216', 'comentarios' => 'Contacto de Lucas nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Rodrigo', 'apellido' => 'dos Santos', 'cel' => '94214306', 'comentarios' => 'Contacto de Victoria Varela nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Fabián', 'apellido' => 'Ferreira', 'cel' => '96438955', 'comentarios' => 'Contacto de Cristian nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Nicolás', 'apellido' => 'Brasioni', 'cel' => '97403781', 'comentarios' => 'Contacto de Victoria Varela nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Emiliano', 'apellido' => 'Ayala', 'cel' => '97703021', 'comentarios' => 'Contacto de Lucas nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Fernanda', 'apellido' => 'Lecueder', 'cel' => '95115699', 'comentarios' => 'Contacto de Pablo nv1. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Sebastian', 'apellido' => 'Carle', 'cel' => '94535434', 'comentarios' => 'Contacto de Florencia Astoviza nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Micaela', 'apellido' => 'Carle', 'cel' => '99057641', 'comentarios' => 'Contacto de Anael Sofía Martínez Silvera nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Elías Emanuel', 'apellido' => 'Pereira', 'cel' => '94987323', 'comentarios' => 'Contacto de Sebastian Carle nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Esteban', 'apellido' => 'Martínez', 'cel' => '97803568', 'comentarios' => 'Contacto de Oriana nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Lucas', 'apellido' => '', 'cel' => '98480647', 'comentarios' => 'Contacto de Oriana nv1. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Tatiana', 'apellido' => 'Alonso', 'cel' => '97956609', 'comentarios' => 'Contacto de Florencia Astoviza nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Nube', 'apellido' => 'Minondo', 'cel' => '97553471', 'comentarios' => 'Contacto de Florencia Astoviza nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Ezequiel', 'apellido' => 'Olhagarai', 'cel' => '91814320', 'comentarios' => 'Contacto de Victoria Varela nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Jessica', 'apellido' => 'Coitinho', 'cel' => '94053803', 'comentarios' => 'Contacto de Sebastian Carle nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Ismael', 'apellido' => 'Gamarra', 'cel' => '98094834', 'comentarios' => 'Contacto de Agustina nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Joel', 'apellido' => 'Acosta', 'cel' => '96719472', 'comentarios' => 'Contacto de Kevin Álvarez nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Valentina', 'apellido' => 'Cabaleiro', 'cel' => '93927806', 'comentarios' => 'Contacto de Nicole Gutiérrez nv2. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Estefanía', 'apellido' => 'Quiroz', 'cel' => '91492923', 'comentarios' => 'Contacto de Lucas nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Camila', 'apellido' => 'Bautista', 'cel' => '91653014', 'comentarios' => 'Contacto de Lucas nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Mauricio', 'apellido' => 'Bergamasco', 'cel' => '93403029', 'comentarios' => 'Contacto de Victoria Varela nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Emiliano', 'apellido' => 'Rodriguez', 'cel' => '91778791', 'comentarios' => 'Contacto de Anael Sofía Martínez Silvera nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Brisa', 'apellido' => 'Rodríguez', 'cel' => '94109080', 'comentarios' => 'Contacto de Elías Emanuel Pereira Almada nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Gilda', 'apellido' => 'Rodriguez', 'cel' => '91626134', 'comentarios' => 'Contacto de Belén y Emanuel nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Sofia', 'apellido' => '', 'cel' => '92466147', 'comentarios' => 'Contacto de Eliana nv1. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'camila', 'apellido' => 'cartro', 'cel' => '93640680', 'comentarios' => 'Contacto de Nicole Gutiérrez nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Elias', 'apellido' => 'Pereira', 'cel' => '93373574', 'comentarios' => 'Contacto de Rodrigo nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Candela', 'apellido' => 'Abellán', 'cel' => '92470109', 'comentarios' => 'Contacto de Julieta nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Pedro', 'apellido' => 'Pizzani', 'cel' => '97476356', 'comentarios' => 'Contacto de Anael Sofía Martínez Silvera nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Jimmy', 'apellido' => 'Sanchez', 'cel' => '96954002', 'comentarios' => 'Contacto de Marcia nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Alexis', 'apellido' => 'Calero', 'cel' => '92942074', 'comentarios' => 'Contacto de Metew nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Mauro', 'apellido' => '', 'cel' => '92412545', 'comentarios' => 'Contacto de Metew nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Florencia', 'apellido' => 'Alfaro', 'cel' => '96451053', 'comentarios' => 'Contacto de Florencia Astoviza nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Damian', 'apellido' => 'Muniz', 'cel' => '95184250', 'comentarios' => 'Contacto de Anael Sofía Martínez Silvera nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Matias', 'apellido' => 'Esteves', 'cel' => '93464278', 'comentarios' => 'Contacto de Kevin Álvarez nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Federico', 'apellido' => 'Martínez', 'cel' => '95130276', 'comentarios' => 'Contacto de Kevin Álvarez nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Milena', 'apellido' => '', 'cel' => '92738283', 'comentarios' => 'Contacto de Diego nv2. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Cynthia', 'apellido' => 'Silveira', 'cel' => '97730325', 'comentarios' => 'Contacto de Nicole Gutiérrez nv1. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Braian', 'apellido' => 'Sánchez', 'cel' => '97730165', 'comentarios' => 'Contacto de Victoria Varela nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Megan', 'apellido' => 'Martinez', 'cel' => '96174738', 'comentarios' => 'Contacto de Florencia Astoviza nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Ana', 'apellido' => 'Giannotti', 'cel' => '93775582', 'comentarios' => 'Contacto de Marcia nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Victoria', 'apellido' => 'Cabrera', 'cel' => '98928610', 'comentarios' => 'Contacto de Ximena Antonella Ortelli Veglia nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Estefani', 'apellido' => 'martinez', 'cel' => '96017632', 'comentarios' => 'Contacto de Ximena Antonella Ortelli Veglia nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Rodrigo', 'apellido' => 'Casas', 'cel' => '91210902', 'comentarios' => 'Contacto de Alisson nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Ana', 'apellido' => 'García', 'cel' => '91957961', 'comentarios' => 'Contacto de Julieta nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Florencia', 'apellido' => 'Colman', 'cel' => '92721441', 'comentarios' => 'Contacto de Lucas nv2. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Enzo', 'apellido' => 'Alvarez', 'cel' => '91322221', 'comentarios' => 'Contacto de Julieta nv3. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Camila', 'apellido' => 'Castillo', 'cel' => '93388113', 'comentarios' => 'Contacto de Kevin Álvarez nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Jimena', 'apellido' => 'Da Silva', 'cel' => '99674444', 'comentarios' => 'Contacto de Romina nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Micaela', 'apellido' => 'Silvera', 'cel' => '98434871', 'comentarios' => 'Contacto de Oriana nv2. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Diego', 'apellido' => 'Colman', 'cel' => '92061116', 'comentarios' => 'Contacto de Anael Sofía Martínez Silvera nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Antonella', 'apellido' => 'Iparraguirre', 'cel' => '98243579', 'comentarios' => 'Contacto de Sebastian Carle nv2. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Adriel', 'apellido' => 'Yuri', 'cel' => '94730638', 'comentarios' => 'Contacto de Julieta nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Guillermo', 'apellido' => 'Roher', 'cel' => '98569394', 'comentarios' => 'Contacto de Sebastian Carle nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Micaela', 'apellido' => 'perez', 'cel' => '98078832', 'comentarios' => 'Contacto de Sebastian Carle nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Victoria', 'apellido' => 'Silvera', 'cel' => '91506786', 'comentarios' => 'Contacto de Alisson nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Emanuel', 'apellido' => 'Lapizaga', 'cel' => '92496360', 'comentarios' => 'Contacto de Oriana nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Luna', 'apellido' => 'Techera', 'cel' => '93569305', 'comentarios' => 'Contacto de Lucas nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Diego', 'apellido' => 'Aguirrezabala', 'cel' => '92768682', 'comentarios' => 'Contacto de Belén y Emanuel nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Tatiana', 'apellido' => 'Alonso', 'cel' => '96496853', 'comentarios' => 'Contacto de Sebastian Carle nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Michael', 'apellido' => 'Silva', 'cel' => '92642940', 'comentarios' => 'Contacto de Eliana nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Jimena', 'apellido' => 'Faraldo', 'cel' => '97105519', 'comentarios' => 'Contacto de Agustina nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Camila', 'apellido' => 'Clavero', 'cel' => '96359261', 'comentarios' => 'Contacto de Agustina nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Damián', 'apellido' => 'Ferrer', 'cel' => '98034800', 'comentarios' => 'Contacto de Florencia Astoviza nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Romina', 'apellido' => 'Garcia', 'cel' => '94008423', 'comentarios' => 'Contacto de Agustina nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'José', 'apellido' => 'García', 'cel' => '97951663', 'comentarios' => 'Contacto de Sebastian Carle nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Jordan', 'apellido' => 'Belén', 'cel' => '95074164', 'comentarios' => 'Contacto de Yamila Garcia nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Génesis', 'apellido' => 'Pérez', 'cel' => '94206382', 'comentarios' => 'Contacto de Lucas nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Monica', 'apellido' => 'Cures', 'cel' => '94738149', 'comentarios' => 'Contacto de Victoria Varela nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Gabriel', 'apellido' => 'Martinez', 'cel' => '95482367', 'comentarios' => 'Contacto de Eliana nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Yamila', 'apellido' => 'Hernandez', 'cel' => '92394234', 'comentarios' => 'Contacto de Ximena Antonella Ortelli Veglia nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'santiago', 'apellido' => 'grahambell', 'cel' => '97752538', 'comentarios' => 'Contacto de Eliana nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Sebastian', 'apellido' => 'Auto', 'cel' => '94473302', 'comentarios' => 'Contacto de Cristian nv2. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Kevin', 'apellido' => 'Rubio', 'cel' => '93953404', 'comentarios' => 'Contacto de Lucas nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Agustina', 'apellido' => 'Pintos', 'cel' => '91941442', 'comentarios' => 'Contacto de Nicole Gutiérrez nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Franco', 'apellido' => 'Alvarez', 'cel' => '95087247', 'comentarios' => 'Contacto de Lucas nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Mercedes', 'apellido' => 'Bonti', 'cel' => '93431344', 'comentarios' => 'Contacto de Sebastian Carle nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Agustin', 'apellido' => 'Nuñez', 'cel' => '95846252', 'comentarios' => 'Contacto de Diego de Olivera nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Cristian', 'apellido' => 'Ayala', 'cel' => '91791434', 'comentarios' => 'Contacto de Eliana nv1. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Simone', 'apellido' => 'Amaral', 'cel' => '93710795', 'comentarios' => 'Contacto de Pablo nv1. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Cristian', 'apellido' => 'Ramos', 'cel' => '95317518', 'comentarios' => 'Contacto de Ximena Antonella Ortelli Veglia nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Keren', 'apellido' => 'Alonso', 'cel' => '95893039', 'comentarios' => 'Contacto de Ximena Antonella Ortelli Veglia nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Jonathan', 'apellido' => 'Minondo', 'cel' => '97553472', 'comentarios' => 'Contacto de Debora Bentancur nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Genesis', 'apellido' => 'Gutierrez', 'cel' => '97343662', 'comentarios' => 'Contacto de Anael Sofía Martínez Silvera nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Adrián', 'apellido' => 'Tabarez', 'cel' => '96077764', 'comentarios' => 'Contacto de Nicole Gutiérrez nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Fiorella', 'apellido' => 'Lopez', 'cel' => '98590903', 'comentarios' => 'Contacto de Agustina nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Emiliano', 'apellido' => 'Miranda', 'cel' => '92620006', 'comentarios' => 'Contacto de Romina nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Goiania', 'apellido' => 'Henriquez', 'cel' => '97955214', 'comentarios' => 'Contacto de Agustina nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Magali', 'apellido' => 'Sena', 'cel' => '93861977', 'comentarios' => 'Contacto de Ximena Antonella Ortelli Veglia nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Luna', 'apellido' => 'Conde', 'cel' => '93482090', 'comentarios' => 'Contacto de Ximena Antonella Ortelli Veglia nv3. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Brian', 'apellido' => 'Britos', 'cel' => '99463227', 'comentarios' => 'Contacto de Romina nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Emanuel', 'apellido' => 'Techera', 'cel' => '95431569', 'comentarios' => 'Contacto de Lucas nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Mateo', 'apellido' => 'rosano', 'cel' => '96912706', 'comentarios' => 'Contacto de Belén y Emanuel nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Iara', 'apellido' => 'D10', 'cel' => '93325908', 'comentarios' => 'Contacto de Alisson nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Cristian', 'apellido' => 'Biladonica', 'cel' => '94829405', 'comentarios' => 'Contacto de Victoria Varela nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Sofía', 'apellido' => 'Motta', 'cel' => '98771721', 'comentarios' => 'Contacto de Sebastian Carle nv2. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'MANUELA', 'apellido' => 'OLIVERA', 'cel' => '96934805', 'comentarios' => 'Contacto de Victoria Varela nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Ismael', 'apellido' => 'Vaz', 'cel' => '91630214', 'comentarios' => 'Contacto de Luciana Rosas nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Tomas', 'apellido' => 'Blanco', 'cel' => '93653720', 'comentarios' => 'Contacto de Julieta nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Thiago', 'apellido' => 'Piñeiro', 'cel' => '96674518', 'comentarios' => 'Contacto de Belén y Emanuel nv2. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Yessica', 'apellido' => 'Bravo', 'cel' => '98486196', 'comentarios' => 'Contacto de Florencia Astoviza nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Alexandra', 'apellido' => 'Pino', 'cel' => '94971321', 'comentarios' => 'Contacto de Victoria Varela nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Melina', 'apellido' => 'Rodriguez', 'cel' => '94862689', 'comentarios' => 'Contacto de Victoria Varela nv3. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Alejo', 'apellido' => '', 'cel' => '91931552', 'comentarios' => 'Contacto de Victoria Varela nv3. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Romina', 'apellido' => 'Silva', 'cel' => '95382989', 'comentarios' => 'Contacto de Ximena Antonella Ortelli Veglia nv1. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Dario', 'apellido' => 'Peña', 'cel' => '91465942', 'comentarios' => 'Contacto de Ximena Antonella Ortelli Veglia nv2. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Martin', 'apellido' => 'Martinez', 'cel' => '97817100', 'comentarios' => 'Contacto de Anael Sofía Martínez Silvera nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Guzmán', 'apellido' => 'Silvera', 'cel' => '92365458', 'comentarios' => 'Contacto de Sebastian Carle nv2. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Kasandra', 'apellido' => 'Lunstedt', 'cel' => '94930155', 'comentarios' => 'Contacto de Agustina nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Mariana', 'apellido' => 'Gutierrez', 'cel' => '92802636', 'comentarios' => 'Contacto de Victoria Varela nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Matias', 'apellido' => 'Sisnandez', 'cel' => '96123077', 'comentarios' => 'Contacto de Victoria Varela nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Jazmín', 'apellido' => 'Amado', 'cel' => '91392417', 'comentarios' => 'Contacto de Florencia Astoviza nv2. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Javier', 'apellido' => 'Zubillaga', 'cel' => '92297273', 'comentarios' => 'Contacto de Julieta nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Natasha', 'apellido' => 'Prieto', 'cel' => '91467641', 'comentarios' => 'Contacto de Sebastian Carle nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Romina', 'apellido' => 'Alvarez', 'cel' => '94318445', 'comentarios' => 'Contacto de Victoria Varela nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Facundo', 'apellido' => 'Bautista', 'cel' => '96339838', 'comentarios' => 'Contacto de Anael Sofía Martínez Silvera nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Thiago', 'apellido' => '', 'cel' => '93763379', 'comentarios' => 'Contacto de Belén y Emanuel nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Antonella', 'apellido' => 'Marcenaro', 'cel' => '95679821', 'comentarios' => 'Contacto de Florencia Astoviza nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Gabriel', 'apellido' => '', 'cel' => '95934804', 'comentarios' => 'Contacto de Julieta nv3. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Belén', 'apellido' => 'Ayala', 'cel' => '94071879', 'comentarios' => 'Contacto de Belén y Emanuel nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Joel', 'apellido' => 'Gonzales', 'cel' => '95408271', 'comentarios' => 'Contacto de Debora Bentancur nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Eliana', 'apellido' => 'Furtado', 'cel' => '96486497', 'comentarios' => 'Contacto de Julieta nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Sofía', 'apellido' => 'Márquez', 'cel' => '98199636', 'comentarios' => 'Contacto de Sebastian Carle nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Nicolás', 'apellido' => 'Acosta', 'cel' => '98806514', 'comentarios' => 'Contacto de Victoria Varela nv3. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Marcela', 'apellido' => 'Zapata', 'cel' => '92925044', 'comentarios' => 'Contacto de Anael Sofía Martínez Silvera nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Carolina', 'apellido' => 'Martinez', 'cel' => '97993338', 'comentarios' => 'Contacto de Marcia nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Micaela', 'apellido' => 'duthil', 'cel' => '94882272', 'comentarios' => 'Contacto de Florencia Astoviza nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Keila', 'apellido' => 'Costa', 'cel' => '94771474', 'comentarios' => 'Contacto de Alisson nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Natanael', 'apellido' => 'Ferreira', 'cel' => '96361876', 'comentarios' => 'Contacto de Ximena Antonella Ortelli Veglia nv3. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Keila', 'apellido' => 'alvarez', 'cel' => '95559679', 'comentarios' => 'Contacto de Victoria Varela nv3. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Abraham', 'apellido' => 'Pérez', 'cel' => '91081001', 'comentarios' => 'Contacto de Victoria Varela nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Hector', 'apellido' => 'Leal', 'cel' => '94622122', 'comentarios' => 'Contacto de Florencia Astoviza nv2. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Yenifer', 'apellido' => 'fontes', 'cel' => '96823062', 'comentarios' => 'Contacto de Florencia Astoviza nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Giuliana', 'apellido' => 'Mocchi', 'cel' => '92417727', 'comentarios' => 'Contacto de Debora Bentancur nv2. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Gastón', 'apellido' => 'Bermúdez', 'cel' => '98434218', 'comentarios' => 'Contacto de Diego de Olivera nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Agustín', 'apellido' => '', 'cel' => '94833311', 'comentarios' => 'Contacto de Lucas nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Bruno', 'apellido' => 'Fernandez', 'cel' => '95389412', 'comentarios' => 'Contacto de Belén y Emanuel nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Ema', 'apellido' => 'Ramirez', 'cel' => '94707750', 'comentarios' => 'Contacto de Lucas nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Ana Clara', 'apellido' => 'Couto', 'cel' => '91285782', 'comentarios' => 'Contacto de Nicole Gutiérrez nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Enzo', 'apellido' => 'Sagario', 'cel' => '91409284', 'comentarios' => 'Contacto de Ximena Antonella Ortelli Veglia nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Stefanie', 'apellido' => 'Gomez', 'cel' => '93581669', 'comentarios' => 'Contacto de Victoria Varela nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Katherin', 'apellido' => 'Cuadro', 'cel' => '96513058', 'comentarios' => 'Contacto de Nicole Gutiérrez nv1. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Abril', 'apellido' => 'Hernández', 'cel' => '94976308', 'comentarios' => 'Contacto de Romina nv1. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Carina', 'apellido' => '', 'cel' => '97622562', 'comentarios' => 'Contacto de Agustina nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Selena', 'apellido' => 'González', 'cel' => '96412902', 'comentarios' => 'Contacto de Oriana nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Florencia', 'apellido' => 'Menchaca', 'cel' => '97993854', 'comentarios' => 'Contacto de Diego nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Megan', 'apellido' => 'Martinez', 'cel' => '93990892', 'comentarios' => 'Contacto de Alisson nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Nicolas', 'apellido' => 'Bautista', 'cel' => '97100521', 'comentarios' => 'Contacto de Victoria Varela nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Rocío', 'apellido' => 'Bonahon', 'cel' => '97168994', 'comentarios' => 'Contacto de Belén y Emanuel nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Facundo', 'apellido' => 'Luna', 'cel' => '94774636', 'comentarios' => 'Contacto de Lucas nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Sharon', 'apellido' => 'Silveira', 'cel' => '99656050', 'comentarios' => 'Contacto de Diego de Olivera nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Adrián', 'apellido' => 'Cabrera', 'cel' => '95222894', 'comentarios' => 'Contacto de Victoria Varela nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Camila', 'apellido' => 'Torres', 'cel' => '97553436', 'comentarios' => 'Contacto de Lucas nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Kevin', 'apellido' => 'Silva', 'cel' => '95188703', 'comentarios' => 'Contacto de Anael Sofía Martínez Silvera nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'HALEN', 'apellido' => 'DÁVILA', 'cel' => '95491651', 'comentarios' => 'Contacto de Metew nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Jenifer', 'apellido' => 'Saldivia', 'cel' => '96689050', 'comentarios' => 'Contacto de Luciana Rosas nv3. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Federico', 'apellido' => 'Moreira', 'cel' => '96796534', 'comentarios' => 'Contacto de Belén y Emanuel nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Anthony', 'apellido' => 'Carballo', 'cel' => '94667461', 'comentarios' => 'Contacto de Cristian nv1. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Brian', 'apellido' => 'Rivas', 'cel' => '99240553', 'comentarios' => 'Contacto de Agustina nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Richard', 'apellido' => 'de los Santos', 'cel' => '95080317', 'comentarios' => 'Contacto de Elías Emanuel Pereira Almada nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Tamara', 'apellido' => 'Cures', 'cel' => '97749326', 'comentarios' => 'Contacto de Matias nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Ángel', 'apellido' => 'Ocampo', 'cel' => '94696100', 'comentarios' => 'Contacto de Nicole Gutiérrez nv1. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Ana', 'apellido' => 'Diaz', 'cel' => '95066387', 'comentarios' => 'Contacto de Alisson nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Nayra', 'apellido' => 'Ibañez', 'cel' => '91263967', 'comentarios' => 'Contacto de Rodrigo nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Jessica', 'apellido' => 'Alvez', 'cel' => '94034698', 'comentarios' => 'Contacto de Metew nv1. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Lucia', 'apellido' => 'Bruno', 'cel' => '97075153', 'comentarios' => 'Contacto de Romina nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Mathias', 'apellido' => 'Castro', 'cel' => '99489979', 'comentarios' => 'Contacto de Ximena Antonella Ortelli Veglia nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'alexa', 'apellido' => 'zapirain', 'cel' => '92245888', 'comentarios' => 'Contacto de Sebastian Carle nv2. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Sara', 'apellido' => 'Beloso', 'cel' => '97730270', 'comentarios' => 'Contacto de Romina nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Vicky', 'apellido' => 'Uran', 'cel' => '96954119', 'comentarios' => 'Contacto de Victoria Varela nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Nahuel', 'apellido' => 'Martinez', 'cel' => '93815807', 'comentarios' => 'Contacto de Julieta nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Maythe', 'apellido' => 'Ferreira', 'cel' => '91649427', 'comentarios' => 'Contacto de Ximena Antonella Ortelli Veglia nv3. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Fernanda', 'apellido' => 'Torales', 'cel' => '99853062', 'comentarios' => 'Contacto de Diego de Olivera nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Caterin', 'apellido' => 'Gallo', 'cel' => '97553482', 'comentarios' => 'Contacto de Romina nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Antonio', 'apellido' => 'Prigue', 'cel' => '93435576', 'comentarios' => 'Contacto de Victoria Varela nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Nicolas', 'apellido' => 'Gazzani', 'cel' => '96909068', 'comentarios' => 'Contacto de Kevin Álvarez nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'William', 'apellido' => 'Gonzalez', 'cel' => '95635719', 'comentarios' => 'Ultimo contacto: 11/9. No es cristiano, es del PN', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Agustín', 'apellido' => 'Sosa', 'cel' => '95266820', 'comentarios' => 'Contacto de Ximena Antonella Ortelli Veglia nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Joaquin', 'apellido' => 'Blanco', 'cel' => '97565366', 'comentarios' => 'Contacto de Victoria Varela nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Joaquin', 'apellido' => 'Videgain', 'cel' => '98173717', 'comentarios' => 'Contacto de Pablo nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Santiago', 'apellido' => 'Soto', 'cel' => '96587015', 'comentarios' => 'Contacto de Sebastian Carle nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Carolina', 'apellido' => 'Soto', 'cel' => '96917286', 'comentarios' => 'Contacto de Anael Sofía Martínez Silvera nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Marcos', 'apellido' => 'Delgado', 'cel' => '95346220', 'comentarios' => 'Contacto de Yamila Garcia nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Sebastian', 'apellido' => 'Garaza', 'cel' => '92789898', 'comentarios' => 'Contacto de Lucas nv1. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Franco', 'apellido' => 'Gomez', 'cel' => '94996896', 'comentarios' => 'Contacto de Sebastian Carle nv3. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Sharon', 'apellido' => 'D7y8', 'cel' => '94616650', 'comentarios' => 'Contacto de Kevin Álvarez nv1. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'MILAGROS', 'apellido' => 'GONZÁLEZ', 'cel' => '95719296', 'comentarios' => 'Contacto de Victoria Varela nv3. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Luis', 'apellido' => 'Cabrera', 'cel' => '92730227', 'comentarios' => 'Contacto de Luciana Rosas nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Magalí', 'apellido' => 'Fernández', 'cel' => '91812621', 'comentarios' => 'Contacto de Eliana nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Matias', 'apellido' => 'lopez', 'cel' => '97434174', 'comentarios' => 'Contacto de Yamila Garcia nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Leo', 'apellido' => 'Olivaro', 'cel' => '99395768', 'comentarios' => 'Contacto de Alisson nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Adalí', 'apellido' => 'Cuenca', 'cel' => '99948165', 'comentarios' => 'Contacto de Yamila Garcia nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Ana', 'apellido' => 'Olivera', 'cel' => '96248923', 'comentarios' => 'Contacto de Lucas nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Javier', 'apellido' => 'Ler', 'cel' => '95127061', 'comentarios' => 'Contacto de Florencia Astoviza nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Daniel', 'apellido' => 'Delgado', 'cel' => '96906908', 'comentarios' => 'Contacto de Sebastian Carle nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Walter', 'apellido' => 'Rey', 'cel' => '97513507', 'comentarios' => 'Contacto de Lucas nv1. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Leonardo', 'apellido' => 'Leo', 'cel' => '93805461', 'comentarios' => 'Contacto de Sebastian Carle nv1. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Tahiana', 'apellido' => 'Lemos', 'cel' => '95399765', 'comentarios' => 'No desea recibir más comunicaciones', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Valentina', 'apellido' => 'Pérez', 'cel' => '97730194', 'comentarios' => 'Contacto de Metew nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Tatiana', 'apellido' => 'Aguirre', 'cel' => '99133200', 'comentarios' => 'Contacto de Victoria Varela nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Eliana', 'apellido' => 'Montero', 'cel' => '97730367', 'comentarios' => 'Contacto de Marcia nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Damián', 'apellido' => 'Ortíz', 'cel' => '99030249', 'comentarios' => 'Contacto de Metew nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Nicolas', 'apellido' => 'Olivera', 'cel' => '99368678', 'comentarios' => 'Contacto de Lucas nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Sofía', 'apellido' => 'Sánchez', 'cel' => '98781653', 'comentarios' => 'Contacto de Yamila Garcia nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Franco', 'apellido' => 'Lift', 'cel' => '97039051', 'comentarios' => 'No apoya nada relacionado a Alvaro', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Camila', 'apellido' => 'Aguirre', 'cel' => '95979640', 'comentarios' => 'Contacto de Sebastian Carle nv3. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Anthony', 'apellido' => 'Castro', 'cel' => '96714138', 'comentarios' => 'Contacto de Oriana nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Agustina', 'apellido' => 'Vidal', 'cel' => '93304820', 'comentarios' => 'Contacto de Lucas nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Moisés', 'apellido' => '', 'cel' => '91508209', 'comentarios' => 'Contacto de Victoria Varela nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Lucia', 'apellido' => 'Bell', 'cel' => '97730402', 'comentarios' => 'Contacto de Metew nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Maira', 'apellido' => 'Ramos', 'cel' => '92107106', 'comentarios' => 'Contacto de Ximena Antonella Ortelli Veglia nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Valentina', 'apellido' => 'Alanis', 'cel' => '91227699', 'comentarios' => 'Contacto de Belén y Emanuel nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Emanuel', 'apellido' => 'Suarez', 'cel' => '97095529', 'comentarios' => 'Contacto de Agustina nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Marhias', 'apellido' => 'Baraibar', 'cel' => '98893478', 'comentarios' => 'Contacto de Sebastian Carle nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Elizabeth', 'apellido' => 'Brunengo', 'cel' => '93707344', 'comentarios' => 'Contacto de Sebastian Carle nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Carolina', 'apellido' => 'Sepe', 'cel' => '95220804', 'comentarios' => 'Contacto de Anael Sofía Martínez Silvera nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Saya', 'apellido' => 'Lepra', 'cel' => '93455769', 'comentarios' => 'Contacto de Julieta nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Belén', 'apellido' => 'García', 'cel' => '95833335', 'comentarios' => 'Contacto de Nicole Gutiérrez nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Martin', 'apellido' => 'Alba', 'cel' => '97164457', 'comentarios' => 'Contacto de Agustina nv3. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Facundo', 'apellido' => 'Mora', 'cel' => '93420640', 'comentarios' => 'Contacto de Sebastian Carle nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Sebastián', 'apellido' => 'Bica', 'cel' => '91306119', 'comentarios' => 'Contacto de Florencia Astoviza nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Micaela', 'apellido' => 'Ibarra', 'cel' => '92044163', 'comentarios' => 'Contacto de Lucas nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Ryan', 'apellido' => 'Falero', 'cel' => '95205052', 'comentarios' => 'Contacto de Victoria Varela nv3. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Steven', 'apellido' => 'Chemi', 'cel' => '92640104', 'comentarios' => 'Contacto de Belén y Emanuel nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Agustin', 'apellido' => 'Viñoles', 'cel' => '94987918', 'comentarios' => 'Contacto de Victoria Varela nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Luciana', 'apellido' => 'Rosas', 'cel' => '97552376', 'comentarios' => 'Contacto de Sebastian Carle nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Maximiliano', 'apellido' => 'Delgado', 'cel' => '93913206', 'comentarios' => 'Contacto de Anael Sofía Martínez Silvera nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Mathias', 'apellido' => 'Torres', 'cel' => '98117677', 'comentarios' => 'Contacto de Lucas nv1. APARTADO', 'origen_id' => $contactosMfr, ]);
        DB::table('contactos')->insert(['nombre' => 'Jade', 'apellido' => '', 'cel' => '99320565', 'comentarios' => 'Afín a seguir en contacto', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'María', 'apellido' => 'González', 'cel' => '97730210', 'comentarios' => 'Contacto de Belén y Emanuel nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Adrián', 'apellido' => 'ISEF', 'cel' => '96002946', 'comentarios' => 'Contacto de Belén y Emanuel nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Agustina', 'apellido' => 'Rosas', 'cel' => '94423290', 'comentarios' => 'Contacto de Lucas nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Alexandra', 'apellido' => '', 'cel' => '95235177', 'comentarios' => 'Contacto de Luciana Rosas nv2. APARTADO', 'origen_id' => $contactosMfr, ]);
        DB::table('contactos')->insert(['nombre' => 'Elizabeth', 'apellido' => 'Lima', 'cel' => '91674859', 'comentarios' => 'No desea recibir más comunicaciones', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Esteban', 'apellido' => 'Benitez', 'cel' => '96844610', 'comentarios' => 'Contacto de Metew nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Emanuel', 'apellido' => 'Pizzani', 'cel' => '91018053', 'comentarios' => 'Contacto de Julieta nv3. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Juan', 'apellido' => 'Larrosa', 'cel' => '97422724', 'comentarios' => 'Contacto de Ximena Antonella Ortelli Veglia nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Yennifer', 'apellido' => 'Ramos', 'cel' => '92636771', 'comentarios' => 'Contacto de Cristian nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Nadia', 'apellido' => 'Lapasta', 'cel' => '98843212', 'comentarios' => 'Contacto de Florencia Astoviza nv2. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Andrea', 'apellido' => 'Silvera', 'cel' => '93848410', 'comentarios' => 'Contacto de Victoria Varela nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Leandro', 'apellido' => 'Solano', 'cel' => '93518944', 'comentarios' => 'Contacto de Ximena Antonella Ortelli Veglia nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Nicole', 'apellido' => 'López', 'cel' => '93989931', 'comentarios' => 'Contacto de Victoria Varela nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Esteban', 'apellido' => 'Pereira', 'cel' => '97550723', 'comentarios' => 'Contacto de Victoria Varela nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Ezequiel', 'apellido' => 'Cabral', 'cel' => '96941838', 'comentarios' => 'Contacto de Anael Sofía Martínez Silvera nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Ismael', 'apellido' => 'Mazilli', 'cel' => '91738836', 'comentarios' => 'Contacto de Lucas nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Brian', 'apellido' => 'de los Santos', 'cel' => '93817927', 'comentarios' => 'Contacto de Yamila Garcia nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Cintia', 'apellido' => 'Serrón', 'cel' => '95260337', 'comentarios' => 'Contacto de Alisson nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Micaela', 'apellido' => '', 'cel' => '97949880', 'comentarios' => 'Contacto de Florencia Astoviza nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Valentina', 'apellido' => 'Rodríguez', 'cel' => '91287840', 'comentarios' => 'Contacto de Nicole Gutiérrez nv1. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Lucas', 'apellido' => 'Varela', 'cel' => '95789214', 'comentarios' => 'Contacto de Victoria Varela nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Luciana', 'apellido' => 'Vicente', 'cel' => '95729309', 'comentarios' => 'Contacto de Ximena Antonella Ortelli Veglia nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Bastian', 'apellido' => 'Franco', 'cel' => '92428315', 'comentarios' => 'Contacto de Nicole Gutiérrez nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Kevin', 'apellido' => '', 'cel' => '93914011', 'comentarios' => 'Contacto de Lucas nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Melany', 'apellido' => 'García', 'cel' => '93392480', 'comentarios' => 'Contacto de Nicole Gutiérrez nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Florencia', 'apellido' => 'Lopez', 'cel' => '96494357', 'comentarios' => 'Contacto de Yamila Garcia nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Daniela', 'apellido' => 'Gutierrez', 'cel' => '96588939', 'comentarios' => 'Contacto de Romina nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Romina', 'apellido' => 'Debastiani', 'cel' => '95180169', 'comentarios' => 'Contacto de Nicole Gutiérrez nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Ariana', 'apellido' => '', 'cel' => '96372324', 'comentarios' => 'Contacto de Ximena Antonella Ortelli Veglia nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Maximo', 'apellido' => 'Cano', 'cel' => '91400194', 'comentarios' => 'Contacto de Debora Bentancur nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Maximiliano', 'apellido' => 'Correa', 'cel' => '91547344', 'comentarios' => 'Contacto de Anael Sofía Martínez Silvera nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Rocio', 'apellido' => 'Padin', 'cel' => '98291824', 'comentarios' => 'Contacto de Eliana nv3. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Cinthya', 'apellido' => 'Bone', 'cel' => '97506262', 'comentarios' => 'Contacto de Ximena Antonella Ortelli Veglia nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Matias', 'apellido' => 'Basile', 'cel' => '93413336', 'comentarios' => 'Contacto de Eliana nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Luna', 'apellido' => 'Techera', 'cel' => '93659305', 'comentarios' => 'Contacto de Cristian nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Victoria', 'apellido' => 'Feijo', 'cel' => '95323265', 'comentarios' => 'Contacto de Oriana nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Benjamín', 'apellido' => 'Maiochi', 'cel' => '95643690', 'comentarios' => 'Contacto de Nicole Gutiérrez nv1. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Melisa', 'apellido' => 'Reynés', 'cel' => '98773970', 'comentarios' => 'Contacto de Julieta nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Gabriel', 'apellido' => 'Nuñez', 'cel' => '95457332', 'comentarios' => 'Contacto de Victoria Varela nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Sofía', 'apellido' => 'Roman', 'cel' => '91488732', 'comentarios' => 'Contacto de Lucas nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Camila', 'apellido' => 'Torres', 'cel' => '91389585', 'comentarios' => 'Contacto de Anael Sofía Martínez Silvera nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Tadeo', 'apellido' => 'Durante', 'cel' => '99378011', 'comentarios' => 'Contacto de Neumar nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Nahuel', 'apellido' => 'Cabrera', 'cel' => '93752898', 'comentarios' => 'Contacto de Diego de Olivera nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Agustín', 'apellido' => 'Silva', 'cel' => '92275996', 'comentarios' => 'Contacto de Kevin Álvarez nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Bruno', 'apellido' => 'Fonte', 'cel' => '95336373', 'comentarios' => 'Contacto de Diego de Olivera nv1. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Stephanie', 'apellido' => 'Aguiar', 'cel' => '93409143', 'comentarios' => 'Contacto de Lucas nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'María', 'apellido' => 'Paz', 'cel' => '97478612', 'comentarios' => 'Contacto de Sebastian Carle nv2. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Nikolas', 'apellido' => 'Olivera', 'cel' => '97218262', 'comentarios' => 'Contacto de Victoria Varela nv3. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Camila', 'apellido' => 'Peralta', 'cel' => '93338081', 'comentarios' => 'Contacto de Julieta nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Damián', 'apellido' => 'Olivera', 'cel' => '98337972', 'comentarios' => 'Contacto de Victoria Varela nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Lucia', 'apellido' => 'rivera', 'cel' => '97959324', 'comentarios' => 'Contacto de Agustina nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Carlos', 'apellido' => 'Cano', 'cel' => '95822191', 'comentarios' => 'Contacto de Alisson nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Elias', 'apellido' => 'Curbelo', 'cel' => '95146484', 'comentarios' => 'Contacto de Ximena Antonella Ortelli Veglia nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Erika', 'apellido' => 'Noguera', 'cel' => '97341394', 'comentarios' => 'Contacto de Sebastian Carle nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Tefi', 'apellido' => 'Sebastian', 'cel' => '95667838', 'comentarios' => 'Contacto de Julieta nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Santiago', 'apellido' => 'Feria', 'cel' => '92751914', 'comentarios' => 'Contacto de Ximena Antonella Ortelli Veglia nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Alexandra', 'apellido' => 'Dominguez', 'cel' => '94357542', 'comentarios' => 'Contacto de Ximena Antonella Ortelli Veglia nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Santiago', 'apellido' => 'Olivera', 'cel' => '91458993', 'comentarios' => 'Contacto de Lucas nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Ana', 'apellido' => 'Rodriguez', 'cel' => '91331315', 'comentarios' => 'Contacto de Yamila Garcia nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Victoria', 'apellido' => 'Varela', 'cel' => '97730294', 'comentarios' => 'Contacto de Alisson nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Jazmin', 'apellido' => 'Nalerio', 'cel' => '92778661', 'comentarios' => 'Contacto de Oriana nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Nicole', 'apellido' => 'Gadea', 'cel' => '92387919', 'comentarios' => 'Contacto de Alisson nv1. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Angie', 'apellido' => 'Olmedo', 'cel' => '95575752', 'comentarios' => 'Contacto de Marcia nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Katerin', 'apellido' => 'Aparicio', 'cel' => '97552378', 'comentarios' => 'Contacto de Julieta nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Ezequiel', 'apellido' => 'Frechero', 'cel' => '95663116', 'comentarios' => 'Contacto de Elías Emanuel Pereira Almada nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Sofia', 'apellido' => 'Silva', 'cel' => '92346970', 'comentarios' => 'Contacto de Elías Emanuel Pereira Almada nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Sofía', 'apellido' => 'Godiño', 'cel' => '97730158', 'comentarios' => 'Contacto de Eliana nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'David', 'apellido' => 'Perez', 'cel' => '98588623', 'comentarios' => 'Contacto de Diego nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Tatiana', 'apellido' => 'Araujo', 'cel' => '93715533', 'comentarios' => 'Contacto de Cristian nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Romina', 'apellido' => 'Escalante', 'cel' => '95345013', 'comentarios' => 'Contacto de Victoria Varela nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Agustín', 'apellido' => 'Martínez', 'cel' => '98652321', 'comentarios' => 'Contacto de Victoria Varela nv3. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Mayra', 'apellido' => 'Guerra', 'cel' => '98854635', 'comentarios' => 'Contacto de Oriana nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Ana', 'apellido' => 'Claudia', 'cel' => '92640974', 'comentarios' => 'Contacto de Ximena Antonella Ortelli Veglia nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Camila', 'apellido' => 'Clavijo', 'cel' => '97552410', 'comentarios' => 'Contacto de Florencia Astoviza nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Nicole', 'apellido' => 'Noba', 'cel' => '97675979', 'comentarios' => 'Contacto de Eliana nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Yeray', 'apellido' => 'Carsin', 'cel' => '95607355', 'comentarios' => 'Contacto de Julieta nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Agostina', 'apellido' => 'Peña', 'cel' => '91505606', 'comentarios' => 'Contacto de Victoria Varela nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Martín', 'apellido' => 'Rodríguez', 'cel' => '94124949', 'comentarios' => 'Contacto de Julieta nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Victoria', 'apellido' => 'toledo', 'cel' => '91693194', 'comentarios' => 'Contacto de Lucas nv2. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Matias', 'apellido' => 'Planzo', 'cel' => '97553460', 'comentarios' => 'Contacto de Alisson nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Andrés', 'apellido' => 'Pérez', 'cel' => '99612831', 'comentarios' => 'Contacto de Ximena Antonella Ortelli Veglia nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Nahuel', 'apellido' => 'Macias', 'cel' => '96576920', 'comentarios' => 'Contacto de Lucas nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'MICAELA', 'apellido' => 'MATIAUDE', 'cel' => '91251263', 'comentarios' => 'Contacto de Florencia Astoviza nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Carolina', 'apellido' => 'Motta', 'cel' => '98150325', 'comentarios' => 'Contacto de Luciana Rosas nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Maximiliano', 'apellido' => 'Sagulo', 'cel' => '97730240', 'comentarios' => 'Contacto de Victoria Varela nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Lucas', 'apellido' => 'Escobar', 'cel' => '95768647', 'comentarios' => 'Contacto de Victoria Varela nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Lucía', 'apellido' => '', 'cel' => '96446534', 'comentarios' => 'Contacto de Romina nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Diana', 'apellido' => 'Landoni', 'cel' => '94052235', 'comentarios' => 'Contacto de Agustina nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Diego', 'apellido' => 'de Olivera', 'cel' => '94300657', 'comentarios' => 'Contacto de Sebastian Carle nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Nicole', 'apellido' => 'Cabrera', 'cel' => '98158842', 'comentarios' => 'Contacto de Agustina nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Penelope', 'apellido' => 'Bustamante', 'cel' => '91494680', 'comentarios' => 'Contacto de Oriana nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Mariana', 'apellido' => 'Errecarte', 'cel' => '93955668', 'comentarios' => 'Contacto de Ximena Antonella Ortelli Veglia nv3. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Yuliana', 'apellido' => 'Barrera', 'cel' => '98595486', 'comentarios' => 'Contacto de Oriana nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Tomas', 'apellido' => 'Gonzalez', 'cel' => '95905118', 'comentarios' => 'Contacto de Diego de Olivera nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Florencia', 'apellido' => 'Bordas', 'cel' => '91376678', 'comentarios' => 'Contacto de Alisson nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Sofia', 'apellido' => '', 'cel' => '96112918', 'comentarios' => 'Contacto de Lucas nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Oriana', 'apellido' => 'Martinez', 'cel' => '96856970', 'comentarios' => 'Contacto de Florencia Astoviza nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Jhonnatan', 'apellido' => '', 'cel' => '97105175', 'comentarios' => 'Contacto de Eliana nv3. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Germán', 'apellido' => 'Giralt', 'cel' => '94644528', 'comentarios' => 'Contacto de Florencia Astoviza nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Rodrigo', 'apellido' => 'Conze', 'cel' => '97207086', 'comentarios' => 'Contacto de Lucas nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Maximiliano', 'apellido' => 'Borba', 'cel' => '95354769', 'comentarios' => 'Contacto de Victoria Varela nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Natalia', 'apellido' => '', 'cel' => '94892486', 'comentarios' => 'Contacto de Lucas nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'aixa', 'apellido' => 'michin', 'cel' => '96699340', 'comentarios' => 'Contacto de Nicole Gutiérrez nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Florencia', 'apellido' => 'Castillo', 'cel' => '95142479', 'comentarios' => 'Contacto de Alisson nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Nahuel', 'apellido' => 'Imbrosiano', 'cel' => '99489869', 'comentarios' => 'Contacto de Romina nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Sharon', 'apellido' => '', 'cel' => '97288343', 'comentarios' => 'Contacto de Anael Sofía Martínez Silvera nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Priscila', 'apellido' => 'Fernandez', 'cel' => '92876050', 'comentarios' => 'Contacto de Yamila Garcia nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Emanuel', 'apellido' => 'españa', 'cel' => '96514659', 'comentarios' => 'Contacto de Victoria Varela nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Facundo', 'apellido' => 'Alarcón', 'cel' => '95449252', 'comentarios' => 'Contacto de Alisson nv3. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Valentina', 'apellido' => 'Fachola', 'cel' => '95527324', 'comentarios' => 'Contacto de Lucas nv2. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Sabrina', 'apellido' => 'Machin', 'cel' => '94930204', 'comentarios' => 'Contacto de Victoria Varela nv3. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Adrian', 'apellido' => 'Cerantorio', 'cel' => '92150897', 'comentarios' => 'Contacto de Victoria Varela nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Damian', 'apellido' => '', 'cel' => '94603118', 'comentarios' => 'Contacto de Ximena Antonella Ortelli Veglia nv3. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Martín', 'apellido' => 'Milano', 'cel' => '93386350', 'comentarios' => 'Contacto de Florencia Astoviza nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Agustín', 'apellido' => 'de la Santa', 'cel' => '99338813', 'comentarios' => 'Contacto de Eliana nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Vanesa', 'apellido' => 'Céspedes', 'cel' => '95859774', 'comentarios' => 'Contacto de Yamila Garcia nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Guillermo', 'apellido' => 'Cal', 'cel' => '94280810', 'comentarios' => 'Contacto de Julieta nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Victoria', 'apellido' => 'Guerchia', 'cel' => '97001570', 'comentarios' => 'Contacto de Julieta nv2. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Fiorella', 'apellido' => 'Mendez', 'cel' => '99892645', 'comentarios' => 'Contacto de Belén y Emanuel nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Milagros', 'apellido' => 'Rovira', 'cel' => '98779970', 'comentarios' => 'Contacto de Julieta nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Icaro', 'apellido' => 'Gonzalez', 'cel' => '91300531', 'comentarios' => 'Contacto de Sebastian Carle nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Yamila', 'apellido' => 'Villafan', 'cel' => '96060194', 'comentarios' => 'Contacto de Sebastian Carle nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Elias', 'apellido' => '', 'cel' => '92209306', 'comentarios' => 'Contacto de Alisson nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Federico', 'apellido' => 'Berti', 'cel' => '98642824', 'comentarios' => 'Contacto de Eliana nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Viviana', 'apellido' => 'Martinez', 'cel' => '93313522', 'comentarios' => 'Contacto de Lucas nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Gastón', 'apellido' => 'Toscani', 'cel' => '91808276', 'comentarios' => 'Contacto de Victoria Varela nv3. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Abigail', 'apellido' => 'Cabral', 'cel' => '95018692', 'comentarios' => 'Contacto de Yamila Garcia nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Sebastian', 'apellido' => 'Buenahora', 'cel' => '98151102', 'comentarios' => 'Contacto de Lucas nv2. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Donnato', 'apellido' => 'Mesones', 'cel' => '95222060', 'comentarios' => 'Contacto de Sebastian Carle nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Débora', 'apellido' => 'Carrasco', 'cel' => '98539259', 'comentarios' => 'Contacto de Metew nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Brian', 'apellido' => 'Tabarez', 'cel' => '91320589', 'comentarios' => 'Contacto de Agustina nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Alexandra', 'apellido' => 'Ferreira', 'cel' => '91981745', 'comentarios' => 'Contacto de Lucas nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Nahuel', 'apellido' => 'Duclos', 'cel' => '98519740', 'comentarios' => 'Contacto de Victoria Varela nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Mónica', 'apellido' => 'GA', 'cel' => '98010626', 'comentarios' => 'Contacto de Yamila Garcia nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Facundo', 'apellido' => 'Núñez', 'cel' => '96454978', 'comentarios' => 'Contacto de Victoria Varela nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Esteban', 'apellido' => 'Martínez', 'cel' => '97813568', 'comentarios' => 'Contacto de Belén y Emanuel nv1. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Romina', 'apellido' => 'Baez', 'cel' => '97021082', 'comentarios' => 'Contacto de Ximena Antonella Ortelli Veglia nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Joaquin', 'apellido' => 'Gelpi', 'cel' => '95089385', 'comentarios' => 'Contacto de Victoria Varela nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Lorena', 'apellido' => 'Aguilar', 'cel' => '97688550', 'comentarios' => 'Contacto de Sebastian Carle nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Rocio', 'apellido' => 'Alvarez', 'cel' => '93960618', 'comentarios' => 'Contacto de Sebastian Carle nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Emmanuel', 'apellido' => 'Astoviza', 'cel' => '99478387', 'comentarios' => 'Contacto de Nicole Gutiérrez nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Ezequiel', 'apellido' => 'Valiuna', 'cel' => '94036227', 'comentarios' => 'Contacto de Florencia Astoviza nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Luciana', 'apellido' => '', 'cel' => '92947278', 'comentarios' => 'Contacto de Metew nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Brian', 'apellido' => 'Mazza', 'cel' => '93696054', 'comentarios' => 'Contacto de Nicole Gutiérrez nv1. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Viviana', 'apellido' => 'Sanguinett', 'cel' => '94671869', 'comentarios' => 'Contacto de Victoria Varela nv3. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'María', 'apellido' => 'Capó', 'cel' => '96732823', 'comentarios' => 'Contacto de Kevin Álvarez nv2. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Facundo', 'apellido' => 'Borba', 'cel' => '94551442', 'comentarios' => 'Contacto de Ximena Antonella Ortelli Veglia nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Camila', 'apellido' => 'Sanchís', 'cel' => '99791820', 'comentarios' => 'Contacto de Agustina nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Nicolás', 'apellido' => 'Silva', 'cel' => '92368641', 'comentarios' => 'Contacto de Anael Sofía Martínez Silvera nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Alan', 'apellido' => 'Mazzoni', 'cel' => '96578878', 'comentarios' => 'Contacto de Diego de Olivera nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Jose', 'apellido' => 'Cañette', 'cel' => '92186286', 'comentarios' => 'Contacto de Yamila Garcia nv3. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Jose', 'apellido' => 'Mulgado', 'cel' => '97502628', 'comentarios' => 'Contacto de Ximena Antonella Ortelli Veglia nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Valentina', 'apellido' => 'Ferreira', 'cel' => '92996705', 'comentarios' => 'Contacto de Alisson nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Eliana', 'apellido' => 'Gutierrez', 'cel' => '98486886', 'comentarios' => 'Contacto de Victoria Varela nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Alan', 'apellido' => 'Trivel', 'cel' => '92614443', 'comentarios' => 'Contacto de Oriana nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Giuli', 'apellido' => 'Olivera', 'cel' => '93372938', 'comentarios' => 'Contacto de Lucas nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Agustina', 'apellido' => 'Larosa', 'cel' => '92863520', 'comentarios' => 'Contacto de Belén y Emanuel nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Andres', 'apellido' => 'Mesa', 'cel' => '97730333', 'comentarios' => 'Contacto de Diego de Olivera nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'nicole', 'apellido' => 'Rivero', 'cel' => '94928937', 'comentarios' => 'Contacto de Elías Emanuel Pereira Almada nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Sabrina', 'apellido' => 'sosa', 'cel' => '95961193', 'comentarios' => 'Contacto de Matias nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Keren', 'apellido' => 'Silva', 'cel' => '98866699', 'comentarios' => 'Contacto de Alisson nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Natalia', 'apellido' => 'Pellejero', 'cel' => '93840130', 'comentarios' => 'Contacto de Victoria Varela nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Alejandro', 'apellido' => 'Vera', 'cel' => '93431387', 'comentarios' => 'Contacto de Ximena Antonella Ortelli Veglia nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Carla', 'apellido' => 'Fontes', 'cel' => '99119323', 'comentarios' => 'Contacto de Diego de Olivera nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Yuliana', 'apellido' => 'Gómez', 'cel' => '96801161', 'comentarios' => 'Contacto de Debora Bentancur nv2. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Axel', 'apellido' => 'Cabrera', 'cel' => '98471409', 'comentarios' => 'Contacto de Agustina nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Daniel', 'apellido' => 'Gutiérrez', 'cel' => '94574016', 'comentarios' => 'Contacto de Kevin Álvarez nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Jessica', 'apellido' => 'Cabral', 'cel' => '92821105', 'comentarios' => 'Contacto de Victoria Varela nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Dámaris', 'apellido' => 'Altez', 'cel' => '94917060', 'comentarios' => 'Contacto de Belén y Emanuel nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Romina', 'apellido' => 'Soto', 'cel' => '97466357', 'comentarios' => 'Contacto de Victoria Varela nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Cristia', 'apellido' => 'Noba', 'cel' => '97721498', 'comentarios' => 'Contacto de Anael Sofía Martínez Silvera nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Esteban', 'apellido' => 'Ramirez', 'cel' => '93979736', 'comentarios' => 'Contacto de Diego nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Guzmán', 'apellido' => '', 'cel' => '91444102', 'comentarios' => 'Contacto de Diego nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Nahuel', 'apellido' => 'Hernández', 'cel' => '99133172', 'comentarios' => 'Contacto de Belén y Emanuel nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Joaquin', 'apellido' => 'Peraza', 'cel' => '99355553', 'comentarios' => 'Contacto de Yamila Garcia nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Damian', 'apellido' => 'Lapizaga', 'cel' => '92482910', 'comentarios' => 'Contacto de Sebastian Carle nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Kati', 'apellido' => 'Danza', 'cel' => '98678835', 'comentarios' => 'Contacto de Lucas nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Diego', 'apellido' => 'Etchichury', 'cel' => '91253424', 'comentarios' => 'Contacto de Victoria Varela nv3. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Melina', 'apellido' => 'Agosto', 'cel' => '95861973', 'comentarios' => 'Contacto de Alisson nv1. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Yamila', 'apellido' => 'Regueira', 'cel' => '97251201', 'comentarios' => 'Contacto de Lucas nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'agustina', 'apellido' => 'martinez', 'cel' => '93516233', 'comentarios' => 'Contacto de Ximena Antonella Ortelli Veglia nv3. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Ignacio', 'apellido' => 'Criado', 'cel' => '95853443', 'comentarios' => 'Contacto de Eliana nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Sofía', 'apellido' => 'Martínez', 'cel' => '97537535', 'comentarios' => 'Contacto de Nicole Gutiérrez nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'vanesa', 'apellido' => 'tome', 'cel' => '93653755', 'comentarios' => 'Contacto de Ximena Antonella Ortelli Veglia nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Gabriel', 'apellido' => 'Batero', 'cel' => '95001848', 'comentarios' => 'Contacto de Cristian nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Axel', 'apellido' => 'Saldaña', 'cel' => '92210507', 'comentarios' => 'Contacto de Victoria Varela nv3. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Matías', 'apellido' => 'Pécora', 'cel' => '95658289', 'comentarios' => 'Contacto de Kevin Álvarez nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Agustin', 'apellido' => 'Blanco', 'cel' => '99988015', 'comentarios' => 'Contacto de Diego de Olivera nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Federico', 'apellido' => 'Pacelle', 'cel' => '95093534', 'comentarios' => 'Contacto de Sebastian Carle nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Oriana', 'apellido' => 'Villar', 'cel' => '94692942', 'comentarios' => 'Contacto de Kevin Álvarez nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Diego', 'apellido' => '', 'cel' => '99760963', 'comentarios' => 'Contacto de Belén y Emanuel nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Amanda', 'apellido' => 'Silva', 'cel' => '95671405', 'comentarios' => 'Contacto de Florencia Astoviza nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Sofía', 'apellido' => 'Effa', 'cel' => '97270698', 'comentarios' => 'Contacto de Marcia nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Fiorella', 'apellido' => 'Mangialabori', 'cel' => '99877879', 'comentarios' => 'Contacto de Ximena Antonella Ortelli Veglia nv3. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'keren', 'apellido' => 'Machado', 'cel' => '99941891', 'comentarios' => 'Contacto de Marcia nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Nahuel', 'apellido' => 'Antúnez', 'cel' => '99563808', 'comentarios' => 'Contacto de Oriana nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Ivan', 'apellido' => 'Castro', 'cel' => '97561710', 'comentarios' => 'Contacto de Belén y Emanuel nv3. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Brisa', 'apellido' => '', 'cel' => '99092356', 'comentarios' => 'Contacto de Metew nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Mayté', 'apellido' => 'Nuñez', 'cel' => '95617620', 'comentarios' => 'Contacto de Nicole Gutiérrez nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Enzo', 'apellido' => 'Tavitian', 'cel' => '95739612', 'comentarios' => 'Contacto de Victoria Varela nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Ailen', 'apellido' => 'Fabricio', 'cel' => '94854442', 'comentarios' => 'Contacto de Sebastian Carle nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Tatiana', 'apellido' => 'Bica', 'cel' => '93869458', 'comentarios' => 'Contacto de Ximena Antonella Ortelli Veglia nv2. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Pamela', 'apellido' => 'Cabrera', 'cel' => '93540077', 'comentarios' => 'Contacto de Florencia Astoviza nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Genesis', 'apellido' => 'Silvera', 'cel' => '92393326', 'comentarios' => 'Contacto de Eliana nv3. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Ian', 'apellido' => 'Lucas', 'cel' => '94704270', 'comentarios' => 'Contacto de Oriana nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Antonella', 'apellido' => 'Chozza', 'cel' => '92323630', 'comentarios' => 'Contacto de Lucas nv2. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Naomi', 'apellido' => 'Rodríguez', 'cel' => '95850343', 'comentarios' => 'Contacto de Ximena Antonella Ortelli Veglia nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Pablo', 'apellido' => 'Márquez', 'cel' => '95437100', 'comentarios' => 'Contacto de Julieta nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Agustina', 'apellido' => 'Repetto', 'cel' => '98957918', 'comentarios' => 'Contacto de Florencia Astoviza nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Axel', 'apellido' => 'Lucas', 'cel' => '97010377', 'comentarios' => 'Contacto de Victoria Varela nv3. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Abigail', 'apellido' => 'Mendez', 'cel' => '94556067', 'comentarios' => 'Contacto de Agustina nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Gonzalo', 'apellido' => 'Clavijo', 'cel' => '96110801', 'comentarios' => 'Contacto de Eliana nv3. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Yoelia', 'apellido' => 'Francia', 'cel' => '92334301', 'comentarios' => 'Contacto de Victoria Varela nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Diego', 'apellido' => 'Torres', 'cel' => '97231819', 'comentarios' => 'Contacto de Victoria Varela nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Tatiana', 'apellido' => 'Vergara', 'cel' => '98296177', 'comentarios' => 'Contacto de Victoria Varela nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Matias', 'apellido' => 'Gutierrez', 'cel' => '92329446', 'comentarios' => 'Contacto de Nicole Gutiérrez nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Lucas', 'apellido' => 'Acosta', 'cel' => '95153963', 'comentarios' => 'Contacto de Eliana nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Alex', 'apellido' => 'Borba', 'cel' => '93972189', 'comentarios' => 'Contacto de Nicole Gutiérrez nv2. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'German', 'apellido' => 'Alvariza', 'cel' => '98651618', 'comentarios' => 'Contacto de Kevin Álvarez nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Mathias', 'apellido' => 'Barreiro', 'cel' => '95174812', 'comentarios' => 'Contacto de Sebastian Carle nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Marcos', 'apellido' => 'Barreto', 'cel' => '97506058', 'comentarios' => 'Contacto de Julieta nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Ivan', 'apellido' => 'Figueredo', 'cel' => '97247015', 'comentarios' => 'Contacto de Belén y Emanuel nv1. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Caterin', 'apellido' => 'Gallo', 'cel' => '97553489', 'comentarios' => 'Contacto de Yamila Garcia nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Bryan', 'apellido' => 'Bentancort', 'cel' => '97706292', 'comentarios' => 'Contacto de Diego de Olivera nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Natalia', 'apellido' => 'Miguez', 'cel' => '97838436', 'comentarios' => 'Contacto de Florencia Astoviza nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Debora', 'apellido' => 'Bentancur', 'cel' => '93440296', 'comentarios' => 'Contacto de Matias nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Valentina', 'apellido' => 'Catro', 'cel' => '99217364', 'comentarios' => 'Contacto de Victoria Varela nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Aron', 'apellido' => 'Igarza', 'cel' => '96122819', 'comentarios' => 'Contacto de Lucas nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Darwin', 'apellido' => 'Machado', 'cel' => '98254177', 'comentarios' => 'Contacto de Eliana nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Franco', 'apellido' => 'salinas', 'cel' => '92123495', 'comentarios' => 'Contacto de Julieta nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Melisa', 'apellido' => '', 'cel' => '99541831', 'comentarios' => 'Contacto de Florencia Astoviza nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Mariana', 'apellido' => 'Furtado', 'cel' => '96120133', 'comentarios' => 'Contacto de Florencia Astoviza nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Metew', 'apellido' => 'Ibañez', 'cel' => '94617036', 'comentarios' => 'Contacto de Sebastian Carle nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Emily', 'apellido' => 'Gutierrez', 'cel' => '97505423', 'comentarios' => 'Contacto de Anael Sofía Martínez Silvera nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Elian', 'apellido' => 'Paz', 'cel' => '91715405', 'comentarios' => 'Contacto de Eliana nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Belen', 'apellido' => 'Altez', 'cel' => '92105105', 'comentarios' => 'Contacto de Agustina nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Milagros', 'apellido' => '', 'cel' => '93890050', 'comentarios' => 'Contacto de Ximena Antonella Ortelli Veglia nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Natasha', 'apellido' => 'Mandarich', 'cel' => '97547109', 'comentarios' => 'Contacto de Metew nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Soledad', 'apellido' => 'Piñeiro', 'cel' => '96056257', 'comentarios' => 'Contacto de Alisson nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Francisco', 'apellido' => '', 'cel' => '97085814', 'comentarios' => 'Contacto de Debora Bentancur nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Lucas', 'apellido' => 'Echeverria', 'cel' => '92625800', 'comentarios' => 'Contacto de Metew nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Romina', 'apellido' => 'Porcal', 'cel' => '98622199', 'comentarios' => 'Contacto de Sebastian Carle nv3. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Luciano', 'apellido' => 'Delbono', 'cel' => '98527875', 'comentarios' => 'Contacto de Victoria Varela nv2. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Victoria', 'apellido' => 'Sosa', 'cel' => '94068275', 'comentarios' => 'Contacto de Ximena Antonella Ortelli Veglia nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Belén', 'apellido' => 'Techera', 'cel' => '93418711', 'comentarios' => 'Contacto de Nicole Gutiérrez nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Yudit', 'apellido' => 'Vázquez', 'cel' => '98070527', 'comentarios' => 'Contacto de Anael Sofía Martínez Silvera nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Marcos', 'apellido' => 'Leites', 'cel' => '93479329', 'comentarios' => 'Contacto de Ximena Antonella Ortelli Veglia nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Leandro', 'apellido' => 'Pereira', 'cel' => '93586017', 'comentarios' => 'Contacto de Julieta nv1. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Sofía', 'apellido' => 'Acosta', 'cel' => '98323565', 'comentarios' => 'Contacto de Pablo nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Carolayn', 'apellido' => 'Gonzalez', 'cel' => '94928406', 'comentarios' => 'Contacto de Luciana Rosas nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Diego', 'apellido' => 'Foliaco', 'cel' => '97400280', 'comentarios' => 'Contacto de Anael Sofía Martínez Silvera nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Angel', 'apellido' => 'Siritto', 'cel' => '91797635', 'comentarios' => 'Contacto de Diego de Olivera nv1. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Guillermina', 'apellido' => 'Bugliari', 'cel' => '95782486', 'comentarios' => 'Contacto de Nicole Gutiérrez nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Emiliano', 'apellido' => 'Brizuela', 'cel' => '92961441', 'comentarios' => 'Contacto de Ximena Antonella Ortelli Veglia nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Romina', 'apellido' => 'Rodriguez', 'cel' => '98708997', 'comentarios' => 'Contacto de Nicole Gutiérrez nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Denis', 'apellido' => 'Requelme', 'cel' => '97730394', 'comentarios' => 'Contacto de Ximena Antonella Ortelli Veglia nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Yoseline', 'apellido' => 'Gonzalez', 'cel' => '97953628', 'comentarios' => 'Contacto de Victoria Varela nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Camila', 'apellido' => 'Martínez', 'cel' => '98494182', 'comentarios' => 'Contacto de Kevin Álvarez nv2. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Braian', 'apellido' => 'Perez', 'cel' => '98472757', 'comentarios' => 'Contacto de Anael Sofía Martínez Silvera nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Jose', 'apellido' => 'zadcovich', 'cel' => '91617578', 'comentarios' => 'Contacto de Eliana nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Bruno', 'apellido' => 'Rivero', 'cel' => '93326019', 'comentarios' => 'Contacto de Alisson nv3. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Allison', 'apellido' => 'Cabana', 'cel' => '93482420', 'comentarios' => 'Contacto de Lucas nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Victoria', 'apellido' => 'Jardin', 'cel' => '93603899', 'comentarios' => 'Contacto de Julieta nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Matias', 'apellido' => 'Bentancur', 'cel' => '95793597', 'comentarios' => 'Contacto de Nicole Gutiérrez nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Candelaria', 'apellido' => 'Borches', 'cel' => '93780284', 'comentarios' => 'Contacto de Kevin Álvarez nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Pablo', 'apellido' => 'Andres', 'cel' => '99998668', 'comentarios' => 'Contacto de Romina nv2. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Sofia', 'apellido' => 'Tapia', 'cel' => '94904296', 'comentarios' => 'Contacto de Ximena Antonella Ortelli Veglia nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Jonatan', 'apellido' => 'Amaral', 'cel' => '98956472', 'comentarios' => 'Contacto de Eliana nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Yemina', 'apellido' => 'Callejas', 'cel' => '92778195', 'comentarios' => 'Contacto de Lucas nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Samuel', 'apellido' => 'Burgos', 'cel' => '99846316', 'comentarios' => 'Contacto de Anael Sofía Martínez Silvera nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Carolina', 'apellido' => 'Román', 'cel' => '97431115', 'comentarios' => 'Contacto de Victoria Varela nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Lucia', 'apellido' => 'Andino', 'cel' => '98684903', 'comentarios' => 'Contacto de Diego de Olivera nv1. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Rafaela', 'apellido' => 'Enciso', 'cel' => '91069503', 'comentarios' => 'Contacto de Ximena Antonella Ortelli Veglia nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Jonathan', 'apellido' => 'Alvarez', 'cel' => '97565446', 'comentarios' => 'Contacto de Ximena Antonella Ortelli Veglia nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Catherine', 'apellido' => 'Villagran', 'cel' => '96563545', 'comentarios' => 'Contacto de Pablo nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Federico', 'apellido' => 'Zeballos', 'cel' => '91397484', 'comentarios' => 'Contacto de Lucas nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Luciano', 'apellido' => 'Buzon', 'cel' => '95671960', 'comentarios' => 'Contacto de Yamila Garcia nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Yesmyn', 'apellido' => 'Garcia', 'cel' => '95520529', 'comentarios' => 'Contacto de Nicole Gutiérrez nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Facundo', 'apellido' => 'Noble', 'cel' => '98536692', 'comentarios' => 'Contacto de Oriana nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Julieta', 'apellido' => 'Alvarez', 'cel' => '91301537', 'comentarios' => 'Contacto de Lucas nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Nicole', 'apellido' => 'Gutiérrez', 'cel' => '91905971', 'comentarios' => 'Contacto de Victoria Varela nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Alejandra', 'apellido' => 'Villar', 'cel' => '97913229', 'comentarios' => 'Contacto de Julieta nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Lucas', 'apellido' => 'Gonzalez', 'cel' => '97987283', 'comentarios' => 'Contacto de Julieta nv2. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'David', 'apellido' => 'Ávila', 'cel' => '95716887', 'comentarios' => 'Contacto de Victoria Varela nv3. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Natalia', 'apellido' => 'Arrellaga', 'cel' => '97730430', 'comentarios' => 'Contacto de Belén y Emanuel nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Martín', 'apellido' => 'Cresci', 'cel' => '98892860', 'comentarios' => 'Contacto de Oriana nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Facundo', 'apellido' => 'Ferrer', 'cel' => '99175860', 'comentarios' => 'Contacto de Yamila Garcia nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Yamila', 'apellido' => 'Garcia', 'cel' => '92131532', 'comentarios' => 'Contacto de Agustina nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Leandro', 'apellido' => 'Fernandez', 'cel' => '97575105', 'comentarios' => 'Contacto de Metew nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Gean', 'apellido' => 'Chamorro', 'cel' => '95021116', 'comentarios' => 'Contacto de Ximena Antonella Ortelli Veglia nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Aitana', 'apellido' => '', 'cel' => '92014833', 'comentarios' => 'Contacto de Diego de Olivera nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Rebeca', 'apellido' => 'Padula', 'cel' => '92554997', 'comentarios' => 'Contacto de Yamila Garcia nv3. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Axel', 'apellido' => 'Sánchez', 'cel' => '97683895', 'comentarios' => 'Contacto de Diego de Olivera nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Rodrigo', 'apellido' => 'Jara', 'cel' => '95375220', 'comentarios' => 'Contacto de Lucas nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Florencia', 'apellido' => 'Astoviza', 'cel' => '93825917', 'comentarios' => 'Contacto de Pablo nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Aldana', 'apellido' => 'Rosa', 'cel' => '99935740', 'comentarios' => 'Contacto de Agustina nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Sol', 'apellido' => 'Migliani', 'cel' => '93481967', 'comentarios' => 'Contacto de Lucas nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Josue', 'apellido' => 'Ortelli', 'cel' => '94962787', 'comentarios' => 'Contacto de Marcia nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Florencia', 'apellido' => 'Camacho', 'cel' => '91809256', 'comentarios' => 'Contacto de Ximena Antonella Ortelli Veglia nv1. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Tatiana', 'apellido' => '', 'cel' => '95128286', 'comentarios' => 'Contacto de Agustina nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Nicolas', 'apellido' => 'Ferrando', 'cel' => '98790220', 'comentarios' => 'Contacto de Nicole Gutiérrez nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Mathias', 'apellido' => 'Martínez', 'cel' => '98418374', 'comentarios' => 'Contacto de Yamila Garcia nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Melanie', 'apellido' => 'Plaza', 'cel' => '97694845', 'comentarios' => 'Contacto de Victoria Varela nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Santiago', 'apellido' => 'Colman', 'cel' => '98390832', 'comentarios' => 'Contacto de Victoria Varela nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Mónica', 'apellido' => 'Cures', 'cel' => '94738159', 'comentarios' => 'Contacto de Florencia Astoviza nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Belen', 'apellido' => 'Janac', 'cel' => '96653724', 'comentarios' => 'Contacto de Nicole Gutiérrez nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Samuel', 'apellido' => 'Francia', 'cel' => '91079093', 'comentarios' => 'Contacto de Debora Bentancur nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Jessica', 'apellido' => 'Álvarez', 'cel' => '96559473', 'comentarios' => 'Contacto de Victoria Varela nv3. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Lucas', 'apellido' => 'Roquette', 'cel' => '97553507', 'comentarios' => 'Contacto de Anael Sofía Martínez Silvera nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Brian', 'apellido' => 'Nagy', 'cel' => '94478192', 'comentarios' => 'Contacto de Pablo nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Karen', 'apellido' => 'Alonso', 'cel' => '95839039', 'comentarios' => 'Contacto de Florencia Astoviza nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Juan', 'apellido' => 'Souza', 'cel' => '91481784', 'comentarios' => 'Contacto de Victoria Varela nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Mauricio', 'apellido' => 'Espinosa', 'cel' => '94104685', 'comentarios' => 'Contacto de Metew nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Paula', 'apellido' => 'Blanco', 'cel' => '99789444', 'comentarios' => 'Contacto de Romina nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Matias', 'apellido' => 'Dominguez', 'cel' => '91258915', 'comentarios' => 'Contacto de Lucas nv3. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Leonardo', 'apellido' => '', 'cel' => '92517257', 'comentarios' => 'Contacto de Ximena Antonella Ortelli Veglia nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Diego', 'apellido' => 'Perazza', 'cel' => '92770233', 'comentarios' => 'Contacto de Nicole Gutiérrez nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Ailin', 'apellido' => 'Jorge', 'cel' => '96410683', 'comentarios' => 'Contacto de Ximena Antonella Ortelli Veglia nv3. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Romina', 'apellido' => 'Cantero', 'cel' => '95054299', 'comentarios' => 'Contacto de Ximena Antonella Ortelli Veglia nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Elias', 'apellido' => 'Soto', 'cel' => '96839658', 'comentarios' => 'Contacto de Lucas nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Milagros', 'apellido' => 'Mena', 'cel' => '97207179', 'comentarios' => 'Contacto de Anael Sofía Martínez Silvera nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Maximiliano', 'apellido' => 'Moreira', 'cel' => '94759261', 'comentarios' => 'Contacto de Agustina nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Belén', 'apellido' => 'Moran', 'cel' => '95015945', 'comentarios' => 'Contacto de Agustina nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Luciana', 'apellido' => 'Perdomo', 'cel' => '96951799', 'comentarios' => 'Contacto de Anael Sofía Martínez Silvera nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Sofía', 'apellido' => 'modena', 'cel' => '96685784', 'comentarios' => 'Contacto de Sebastian Carle nv3. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Veronica', 'apellido' => 'Melo', 'cel' => '94764857', 'comentarios' => 'Contacto de Matias nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Micael', 'apellido' => '', 'cel' => '94172058', 'comentarios' => 'Contacto de Ximena Antonella Ortelli Veglia nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Nicolas', 'apellido' => 'Ramirez', 'cel' => '99130987', 'comentarios' => 'Contacto de Florencia Astoviza nv2. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Santiago', 'apellido' => '', 'cel' => '96631755', 'comentarios' => 'Contacto de Elías Emanuel Pereira Almada nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Belén', 'apellido' => 'Pérez', 'cel' => '98918006', 'comentarios' => 'Contacto de Metew nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Arumy', 'apellido' => 'Park', 'cel' => '97376250', 'comentarios' => 'Contacto de Yamila Garcia nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Aldo', 'apellido' => 'Villafan', 'cel' => '97620445', 'comentarios' => 'Contacto de Victoria Varela nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Daisy', 'apellido' => 'Fiorito', 'cel' => '97730271', 'comentarios' => 'Contacto de Lucas nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Florencia', 'apellido' => 'Duarte', 'cel' => '96060383', 'comentarios' => 'Contacto de Victoria Varela nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Camila', 'apellido' => 'Clavero', 'cel' => '95474513', 'comentarios' => 'Contacto de Lucas nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Cain', 'apellido' => 'Rodriguez', 'cel' => '95438117', 'comentarios' => 'Contacto de Agustina nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Gimerna', 'apellido' => 'Castillo', 'cel' => '97553457', 'comentarios' => 'Contacto de Lucas nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Facundo', 'apellido' => 'Bentos', 'cel' => '95614057', 'comentarios' => 'Contacto de Romina nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Marcelo', 'apellido' => 'Ferrero', 'cel' => '99353870', 'comentarios' => 'Contacto de Lucas nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Brenda', 'apellido' => 'Figueroa', 'cel' => '92212164', 'comentarios' => 'Contacto de Florencia Astoviza nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Abigail', 'apellido' => 'Ormeño', 'cel' => '94166614', 'comentarios' => 'Contacto de Debora Bentancur nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Agustina', 'apellido' => '', 'cel' => '97257122', 'comentarios' => 'Contacto de Ximena Antonella Ortelli Veglia nv3. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => '', 'apellido' => '', 'cel' => '99498102', 'comentarios' => 'Contacto de Florencia Astoviza nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Franco', 'apellido' => 'Rezende', 'cel' => '92890005', 'comentarios' => 'Madre de David Pérez, que es cristianos. Nos apoyan', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Florencia', 'apellido' => 'Gómez', 'cel' => '94179496', 'comentarios' => 'Contacto de Julieta nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Yhire', 'apellido' => '', 'cel' => '96412831', 'comentarios' => 'Contacto de Victoria Varela nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Joaquín', 'apellido' => 'Zicavo', 'cel' => '97553488', 'comentarios' => 'Contacto de Victoria Varela nv3. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Talhia', 'apellido' => 'De León', 'cel' => '93323265', 'comentarios' => 'Contacto de Victoria Varela nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Victoria', 'apellido' => 'Varela', 'cel' => '93752807', 'comentarios' => 'Contacto de Anael Sofía Martínez Silvera nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Sofia', 'apellido' => 'Sosa', 'cel' => '96316473', 'comentarios' => 'Contacto de Anael Sofía Martínez Silvera nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Ian', 'apellido' => 'Herrera', 'cel' => '98488978', 'comentarios' => 'Contacto de Julieta nv3. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Mayara', 'apellido' => 'Bonilla', 'cel' => '99922362', 'comentarios' => 'Contacto de Lucas nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Facundo', 'apellido' => 'Rodríguez', 'cel' => '93339638', 'comentarios' => 'Contacto de Ximena Antonella Ortelli Veglia nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Kevin', 'apellido' => 'Álvarez', 'cel' => '96129445', 'comentarios' => 'Contacto de Victoria Varela nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Fiorella', 'apellido' => 'Hornos', 'cel' => '91824750', 'comentarios' => 'Contacto de Alisson nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Rocío', 'apellido' => 'Silvera', 'cel' => '95639919', 'comentarios' => 'Contacto de Julieta nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'SOL', 'apellido' => 'GARCÁA', 'cel' => '93897404', 'comentarios' => 'Contacto de Diego de Olivera nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Thairy', 'apellido' => 'Cardozo', 'cel' => '98364371', 'comentarios' => 'Contacto de Luciana Rosas nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Nacho', 'apellido' => '', 'cel' => '91235646', 'comentarios' => 'Contacto de Agustina nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Facundo', 'apellido' => 'Hernández', 'cel' => '96155363', 'comentarios' => 'Contacto de Nicole Gutiérrez nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Laura', 'apellido' => 'Acosta', 'cel' => '94675656', 'comentarios' => 'Contacto de Ximena Antonella Ortelli Veglia nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Joaquin', 'apellido' => 'Sequeira', 'cel' => '93450497', 'comentarios' => 'Contacto de Belén y Emanuel nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Nicolás', 'apellido' => 'Márquez', 'cel' => '91626781', 'comentarios' => 'Contacto de Eliana nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Marcelo', 'apellido' => '', 'cel' => '95214971', 'comentarios' => 'Contacto de Diego de Olivera nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Julieta', 'apellido' => 'Irigoyen', 'cel' => '95793719', 'comentarios' => 'Contacto de Florencia Astoviza nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Facundo', 'apellido' => 'Leites', 'cel' => '98851065', 'comentarios' => 'Contacto de Diego de Olivera nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Facundo', 'apellido' => 'Silva', 'cel' => '95716704', 'comentarios' => 'Contacto de Julieta nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Jhona', 'apellido' => '', 'cel' => '97730318', 'comentarios' => 'Contacto de Victoria Varela nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Jazmin', 'apellido' => 'Cheriff', 'cel' => '93824510', 'comentarios' => 'Contacto de Eliana nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Gerardo', 'apellido' => 'Maltes', 'cel' => '92279407', 'comentarios' => 'Contacto de Nicole Gutiérrez nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Melina', 'apellido' => '', 'cel' => '94535218', 'comentarios' => 'Contacto de Lucas nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Maité', 'apellido' => 'Muniz', 'cel' => '93894979', 'comentarios' => 'Contacto de Victoria Varela nv3. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Marcos', 'apellido' => '', 'cel' => '91333175', 'comentarios' => 'Contacto de Victoria Varela nv3. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Sofia', 'apellido' => 'Parodi', 'cel' => '92306402', 'comentarios' => 'Contacto de Nicole Gutiérrez nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Viviana', 'apellido' => 'Burgos', 'cel' => '99851210', 'comentarios' => 'Contacto de Alisson nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Enzo', 'apellido' => 'Caldarelli', 'cel' => '98535539', 'comentarios' => 'Contacto de Victoria Varela nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Gustavo', 'apellido' => '', 'cel' => '94826817', 'comentarios' => 'Contacto de Ximena Antonella Ortelli Veglia nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Camila', 'apellido' => 'Marquez', 'cel' => '96981426', 'comentarios' => 'Contacto de Agustina nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'José', 'apellido' => 'Canette', 'cel' => '91516139', 'comentarios' => 'Contacto de Lucas nv1. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Wendel', 'apellido' => 'Fabricio', 'cel' => '92913735', 'comentarios' => 'Contacto de Victoria Varela nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Yamila', 'apellido' => 'Camacho', 'cel' => '94169963', 'comentarios' => 'Contacto de Ximena Antonella Ortelli Veglia nv2. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Agustina', 'apellido' => 'Vazquez', 'cel' => '97257212', 'comentarios' => 'Contacto de Diego nv2. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Lucia', 'apellido' => 'Baskt', 'cel' => '94304870', 'comentarios' => 'Contacto de Agustina nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Tatiana', 'apellido' => 'Vergara', 'cel' => '93904897', 'comentarios' => 'Contacto de Ximena Antonella Ortelli Veglia nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Guillermo', 'apellido' => 'Godiño', 'cel' => '93983059', 'comentarios' => 'Contacto de Victoria Varela nv3. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Belen', 'apellido' => 'Castillo', 'cel' => '99021727', 'comentarios' => 'Contacto de Julieta nv2. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Victoria', 'apellido' => 'Cardozo', 'cel' => '97553477', 'comentarios' => 'Contacto de Ximena Antonella Ortelli Veglia nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Cristian', 'apellido' => 'Pereira', 'cel' => '95821702', 'comentarios' => 'Contacto de Victoria Varela nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Joel', 'apellido' => 'Fernández', 'cel' => '94219751', 'comentarios' => 'Contacto de Elías Emanuel Pereira Almada nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Facundo', 'apellido' => 'Bonilla', 'cel' => '92503620', 'comentarios' => 'Contacto de Florencia Astoviza nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Benjamín', 'apellido' => 'Calleja', 'cel' => '92483740', 'comentarios' => 'Contacto de Lucas nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Belén', 'apellido' => 'Pintos', 'cel' => '93955264', 'comentarios' => 'Contacto de Diego de Olivera nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Maite', 'apellido' => 'Mateo', 'cel' => '95225608', 'comentarios' => 'Contacto de Belén y Emanuel nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Sofia', 'apellido' => '', 'cel' => '92368219', 'comentarios' => 'Contacto de Florencia Astoviza nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Victor', 'apellido' => 'Vazquez', 'cel' => '91981516', 'comentarios' => 'Contacto de Alisson nv3. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Yuliana', 'apellido' => 'silveira', 'cel' => '95191109', 'comentarios' => 'Contacto de Alisson nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Giuliana', 'apellido' => '', 'cel' => '94455932', 'comentarios' => 'Contacto de Matias nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Nahuel', 'apellido' => 'Alvarez', 'cel' => '93969923', 'comentarios' => 'Contacto de Yamila Garcia nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Ezequiel', 'apellido' => 'Alvez', 'cel' => '96834090', 'comentarios' => 'Contacto de Julieta nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Melina', 'apellido' => 'Pereira', 'cel' => '95406388', 'comentarios' => 'Contacto de Victoria Varela nv3. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Malena', 'apellido' => 'López', 'cel' => '91032552', 'comentarios' => 'Contacto de Julieta nv1. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Joan', 'apellido' => 'Gonzales', 'cel' => '92434150', 'comentarios' => 'Contacto de Victoria Varela nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Ismael', 'apellido' => 'Ferreira', 'cel' => '94025210', 'comentarios' => 'Contacto de Sebastian Carle nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Eugenia', 'apellido' => 'Vargas', 'cel' => '98823640', 'comentarios' => 'Contacto de Ximena Antonella Ortelli Veglia nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Rodrigo', 'apellido' => 'Cabrera', 'cel' => '94674637', 'comentarios' => 'Contacto de Anael Sofía Martínez Silvera nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Diego', 'apellido' => 'Callero', 'cel' => '94656650', 'comentarios' => 'Contacto de Elías Emanuel Pereira Almada nv2. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Pamela', 'apellido' => 'Sosa', 'cel' => '93882560', 'comentarios' => 'Contacto de Elías Emanuel Pereira Almada nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Sofía', 'apellido' => 'Caitano', 'cel' => '93574345', 'comentarios' => 'Contacto de Marcia nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Joel', 'apellido' => 'Mori', 'cel' => '95114123', 'comentarios' => 'Contacto de Agustina nv1. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Fernanda', 'apellido' => 'Barrios', 'cel' => '96136159', 'comentarios' => 'Contacto de Diego de Olivera nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Romina', 'apellido' => '', 'cel' => '97321230', 'comentarios' => 'Contacto de Oriana nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Morena', 'apellido' => 'Buzon', 'cel' => '93339094', 'comentarios' => 'Contacto de Florencia Astoviza nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Julián', 'apellido' => 'González', 'cel' => '96672704', 'comentarios' => 'Contacto de Nicole Gutiérrez nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Ignacio', 'apellido' => 'Montedeoca', 'cel' => '93491304', 'comentarios' => 'Contacto de Diego de Olivera nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Sebastian', 'apellido' => '', 'cel' => '96042657', 'comentarios' => 'Contacto de Florencia Astoviza nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Santiago', 'apellido' => 'Otero', 'cel' => '95548590', 'comentarios' => 'Contacto de Florencia Astoviza nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Fiamma', 'apellido' => 'Silva', 'cel' => '95051319', 'comentarios' => 'Contacto de Lucas nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Agustina', 'apellido' => 'Ramos', 'cel' => '97191404', 'comentarios' => 'Contacto de Sebastian Carle nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Paulo', 'apellido' => 'loyarte', 'cel' => '96437901', 'comentarios' => 'Contacto de Agustina nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Mariana', 'apellido' => 'Caniellas', 'cel' => '95782698', 'comentarios' => 'Contacto de Debora Bentancur nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Naomi', 'apellido' => '', 'cel' => '93892312', 'comentarios' => 'Contacto de Florencia Astoviza nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Lucas', 'apellido' => 'Furtado', 'cel' => '97741904', 'comentarios' => 'Contacto de Florencia Astoviza nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Lucas', 'apellido' => 'Delgado', 'cel' => '97063109', 'comentarios' => 'Contacto de Sebastian Carle nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Milagros', 'apellido' => 'Álvarez', 'cel' => '94115025', 'comentarios' => 'Contacto de Anael Sofía Martínez Silvera nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Oriana', 'apellido' => 'Urrutia', 'cel' => '96531560', 'comentarios' => 'Contacto de Diego de Olivera nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Sofia', 'apellido' => 'Iruleguy', 'cel' => '97530485', 'comentarios' => 'Contacto de Yamila Garcia nv3. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Alexander', 'apellido' => 'Comini', 'cel' => '97552379', 'comentarios' => 'Contacto de Ximena Antonella Ortelli Veglia nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Florencia', 'apellido' => 'Galván', 'cel' => '94052206', 'comentarios' => 'Contacto de Elías Emanuel Pereira Almada nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Esteban', 'apellido' => 'Lecueder', 'cel' => '97279696', 'comentarios' => 'Contacto de Victoria Varela nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Diego', 'apellido' => 'Duarte', 'cel' => '97612073', 'comentarios' => 'Contacto de Agustina nv1. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Nadia', 'apellido' => 'Martínez', 'cel' => '92626250', 'comentarios' => 'Contacto de Julieta nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Felipe', 'apellido' => 'Hourcade', 'cel' => '92106406', 'comentarios' => 'Contacto de Diego de Olivera nv1. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Caterine', 'apellido' => 'Porto', 'cel' => '98387976', 'comentarios' => 'Contacto de Yamila Garcia nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Claudia', 'apellido' => 'Olivera', 'cel' => '97210969', 'comentarios' => 'Contacto de Lucas nv1. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Alejandro', 'apellido' => 'Igarabide', 'cel' => '99578873', 'comentarios' => 'Contacto de Marcia nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Emanuel', 'apellido' => 'Varela', 'cel' => '95009522', 'comentarios' => 'Contacto de Ximena Antonella Ortelli Veglia nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Elisa', 'apellido' => 'Burgos', 'cel' => '92369263', 'comentarios' => 'Contacto de Victoria Varela nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Marcelo', 'apellido' => '', 'cel' => '92392971', 'comentarios' => 'Contacto de Debora Bentancur nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Yasmin', 'apellido' => '', 'cel' => '96291699', 'comentarios' => 'Contacto de Nicole Gutiérrez nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Jonathan', 'apellido' => 'González', 'cel' => '97358785', 'comentarios' => 'Contacto de Nicole Gutiérrez nv1. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Florencia', 'apellido' => 'Amorin', 'cel' => '94494144', 'comentarios' => 'Contacto de Debora Bentancur nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Romina', 'apellido' => 'Bruno', 'cel' => '99163338', 'comentarios' => 'Contacto de Anael Sofía Martínez Silvera nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Pedro', 'apellido' => 'Pizzani', 'cel' => '97070705', 'comentarios' => 'Contacto de Anael Sofía Martínez Silvera nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Noelia', 'apellido' => 'Rodriguez', 'cel' => '95810067', 'comentarios' => 'Contacto de Victoria Varela nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => '', 'apellido' => '', 'cel' => '95542466', 'comentarios' => 'Contacto de Sebastian Carle nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Florencia', 'apellido' => 'Fernandez', 'cel' => '98197279', 'comentarios' => 'Contacto de Lucas nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Sofía', 'apellido' => 'Gimenez', 'cel' => '94438588', 'comentarios' => 'Contacto de Victoria Varela nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Belen', 'apellido' => 'Acuña', 'cel' => '98937030', 'comentarios' => 'Contacto de Lucas nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'MAITE', 'apellido' => 'RODRÍGUEZ', 'cel' => '97552375', 'comentarios' => 'Contacto de Florencia Astoviza nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Lucía', 'apellido' => 'Alcaire', 'cel' => '97953769', 'comentarios' => 'Contacto de Luciana Rosas nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Jazmín', 'apellido' => 'Álvarez', 'cel' => '94311921', 'comentarios' => 'Contacto de Julieta nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Joel', 'apellido' => 'Fernández', 'cel' => '94212751', 'comentarios' => 'Contacto de Agustina nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Cecilia', 'apellido' => 'Silva', 'cel' => '98888419', 'comentarios' => 'Contacto de Agustina nv1.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Facundo', 'apellido' => 'Rodriguez', 'cel' => '99545473', 'comentarios' => 'Contacto de Diego de Olivera nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Rodrigo', 'apellido' => 'Gonzalez', 'cel' => '93661392', 'comentarios' => 'Contacto de Sebastian Carle nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Lucas', 'apellido' => 'Ramirez', 'cel' => '94458640', 'comentarios' => 'Contacto de Elías Emanuel Pereira Almada nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Instructor', 'apellido' => 'Federico', 'cel' => '94025815', 'comentarios' => 'Contacto de Eliana nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Ana', 'apellido' => 'Paz', 'cel' => '98041139', 'comentarios' => 'Contacto de Lucas nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Nahuel', 'apellido' => 'Tsappos', 'cel' => '91522277', 'comentarios' => 'Contacto de Eliana nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Agustina', 'apellido' => 'Sabatel', 'cel' => '93902608', 'comentarios' => 'Contacto de Victoria Varela nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Ce', 'apellido' => 'Agustina', 'cel' => '94876708', 'comentarios' => 'Contacto de Julieta nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Diego', 'apellido' => '', 'cel' => '96148760', 'comentarios' => 'Contacto de Lucas nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Exequiel', 'apellido' => 'Andrada', 'cel' => '91915363', 'comentarios' => 'Contacto de Yamila Garcia nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Santiago', 'apellido' => 'Estevez', 'cel' => '96136786', 'comentarios' => 'Contacto de Pablo nv1. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Ezequiel', 'apellido' => 'Gerona', 'cel' => '94584141', 'comentarios' => 'Contacto de Ximena Antonella Ortelli Veglia nv3. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Valentina', 'apellido' => 'Baum', 'cel' => '94845893', 'comentarios' => 'Contacto de Yamila Garcia nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Santiago', 'apellido' => 'Cabrera', 'cel' => '92736313', 'comentarios' => 'Contacto de Marcia nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'David', 'apellido' => 'gonzalez', 'cel' => '97318816', 'comentarios' => 'Contacto de Lucas nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'richard', 'apellido' => 'pedreita', 'cel' => '94435507', 'comentarios' => 'Contacto de Metew nv2. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Sergio', 'apellido' => 'Fernández', 'cel' => '99929413', 'comentarios' => 'Contacto de Cristian nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Mathias', 'apellido' => 'Deceja', 'cel' => '94449246', 'comentarios' => 'Contacto de Diego de Olivera nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Sabrina', 'apellido' => 'Solari', 'cel' => '97468834', 'comentarios' => 'Contacto de Sebastian Carle nv2.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Abigail', 'apellido' => '', 'cel' => '93919848', 'comentarios' => 'Contacto de Julieta nv3.', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Vanesa', 'apellido' => 'Tome', 'cel' => '96653755', 'comentarios' => 'Contacto de Belén y Emanuel nv3. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Santiago', 'apellido' => 'Silva', 'cel' => '99889384', 'comentarios' => 'Contacto de Rodrigo nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Alan', 'apellido' => 'suarez', 'cel' => '96795914', 'comentarios' => 'Contacto de Kevin Álvarez nv1. CRISTIANO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Patricia', 'apellido' => '', 'cel' => '97748690', 'comentarios' => 'Contacto de Alisson nv1. APARTADO', 'origen_id' => $jovenes, ]);
        DB::table('contactos')->insert(['nombre' => 'Melany', 'apellido' => 'Mayer', 'cel' => '96010401', 'comentarios' => 'Contacto de Eliana nv2. CRISTIANO', 'origen_id' => $jovenes, ]);

        $listaNegra = array(97752538,
                            94365893,
                            95863802,
                            98781653,
                            95235177,
                            93805461,
                            92044163,
                            96408237,
                            94928937,
                            93326019,
                            92209306,
                            91653014,
                            94052206,
                            92942074,
                        );
        foreach ($listaNegra as $cel){
            $contacto = Contacto::where('cel', $cel)->get()->first();
            $contacto->lista_negra = true;
            $contacto->comentarios = 'Solicita no estar más en la base de datos';
            $contacto->save();
        }

        $listaError = array(99897606,
                            99240553,
                            99229298,
                            99133200,
                            99030249,
                            98757497,
                            97999412,
                            97961472,
                            97956609,
                            97933601,
                            97778315,
                            97749326,
                            97730165,
                            97703021,
                            97665922,
                            97595923,
                            97565366,
                            97555213,
                            97546925,
                            97476356,
                            97105519,
                            97039051,
                            96941838,
                            96934805,
                            96912706,
                            96796534,
                            96770568,
                            96689050,
                            96666512,
                            96587015,
                            96499232,
                            96496853,
                            96324421,
                            96174738,
                            96017632,
                            95979640,
                            95833335,
                            95679821,
                            95491651,
                            95431569,
                            95408271,
                            95399765,
                            95392018,
                            95317518,
                            95266820,
                            95222894,
                            95220804,
                            95127061,
                            95115699,
                            94930155,
                            94882272,
                            94862689,
                            94829405,
                            94771474,
                            94738149,
                            94534377,
                            94371006,
                            94197018,
                            94071879,
                            94034698,
                            93942616,
                            93869770,
                            93861977,
                            93775582,
                            93724516,
                            93717211,
                            93648059,
                            93581669,
                            93518944,
                            93514157,
                            93467004,
                            93388113,
                            92925044,
                            92470109,
                            92394234,
                            92365458,
                            92275040,
                            92245888,
                            92107106,
                            92061116,
                            91957961,
                            91791434,
                            91778791,
                            91630214,
                            91547344,
                            91467641,
                            91465942,
                            91392417,
                            91345283,
                            91263967,
                            91099181,
                            91081001,
                            95729309,
                            92496360,
                            99922362,
                            98854635,
                            98851065,
                            98708997,
                            98595486,
                            98588623,
                            98539259,
                            98494182,
                            98390832,
                            98364371,
                            98337972,
                            98158842,
                            98010626,
                            97913229,
                            97721498,
                            97706292,
                            97688550,
                            97565446,
                            97553489,
                            97506058,
                            97505423,
                            97376250,
                            96856970,
                            96801161,
                            96699340,
                            96685784,
                            96576920,
                            96563545,
                            96454978,
                            96446534,
                            96316473,
                            96112918,
                            95671960,
                            95607355,
                            95575752,
                            95520529,
                            95474513,
                            95214971,
                            95018692,
                            94962787,
                            94928406,
                            94892486,
                            94738159,
                            94675656,
                            94617036,
                            94166614,
                            93897404,
                            93540077,
                            93479329,
                            92947278,
                            92863520,
                            92614443,
                            92329446,
                            91505606);
        foreach ($listaError as $cel){
            $contacto = Contacto::where('cel', $cel)->get()->first();
            $contacto->lista_negra = true;
            $contacto->comentarios = 'WhatsApp no existe';
            $contacto->save();
        }

    }
}
