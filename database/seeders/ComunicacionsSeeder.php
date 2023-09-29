<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Tematica;

class ComunicacionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //TemáticasId
        $pedofilia = Tematica::where('nombre','Pedofilia')->get()->first()->id;
        $politica = Tematica::where('nombre','Politica')->get()->first()->id;
        $bullying = Tematica::where('nombre','Bullying')->get()->first()->id;
        $invitaciones = Tematica::where('nombre','Invitaciones')->get()->first()->id;
        $redes = Tematica::where('nombre','Redes sociales')->get()->first()->id;
        $infancia = Tematica::where('nombre','Infancia')->get()->first()->id;
        $pastores = Tematica::where('nombre','Pastores')->get()->first()->id;

        DB::table('comunicacions')->insert(['nombre' => 'Media_hora_previa_Sonidos_de_Libertad',
            'texto' => 'Buenos días Pr, cómo estás?%0A%0AEl Dip. Dastugue se comprometió a impulsar el aumento de penas para pedófilos y toda persona vinculada a la trata de niños, no aceptamos que el presente y futuro de los uruguayos se siga viendo violentado.%0A%0AFacebook: https://www.facebook.com/100044574213289/posts/pfbid0QUJSjtXRd22WkH1XMrXRvanBqbPPBDRmLR8G4VHjPw4wte69izDwZV1aPjza1zMzl%0A%0ATwitter: https://x.com/alvarodastugue/status/1699797921288560838%0A%0AAyúdanos a difundir, todos somos parte de la solución.',
            'fecha' => Carbon::parse('2023-09-07'),
            'tematica1_id' => $pedofilia,
            'tematica2_id' => $politica,
            'tematica3_id' => $pastores,
            'activa' => 0
        ]);

        DB::table('comunicacions')->insert(['nombre' => 'Bullying_invitación',
            'texto' => 'Buen día {nombre}, cómo estás?%0ATe invitamos a participar del tratamiento y posterior votación del Proyecto de Ley: *SEMANA DE LA PREVENCIÓN Y CONCIENTIZACIÓN CONTRA LA VIOLENCIA Y EL ACOSO ESCOLAR* en la sesión de Cámara de Representantes del día *miércoles 13/9 a las 17 hs*.%0A%0ALa violencia, el acoso escolar y el cyberbullyng generan un ambiente de inseguridad, ansiedad y miedo que es incompatible con el aprendizaje. En Uruguay el 26% de los niños y niñas es victima de bullying.%0A%0ARecordar que para el ingreso a la sesión de CCRR se te solicitará Cédula de Identidad%0A%0A_{miNombre}, secretario_',
            'fecha' => Carbon::parse('2023-09-12'),
            'tematica1_id' => $bullying,
            'tematica2_id' => $invitaciones,
            'activa' => 0
        ]);

        DB::table('comunicacions')->insert(['nombre' => 'Incorporación_al_Espacio_40',
            'texto' => 'Buenas tardes {nombre}!%0A%0AEs un gusto extenderte la invitación al *Lanzamiento oficial con Espacio Cuarenta*, razón por la que hemos orado y trabajado mucho durante el último año.%0A%0AContamos con tu presencia éste sábado en Las Piedras.%0A%0ADios te bendiga!%0A%0ASaludos,%0A_{miNombre}, secretario_',
            'fecha' => Carbon::parse('2023-08-31'),
            'tematica1_id' => $politica,
            'activa' => 0
        ]);

        DB::table('comunicacions')->insert([
            'nombre' => 'Difusion_setiembre',
            'texto' => 'Pensando en el futuro, decidimos cuidar nuestro presente. Una infancia sana asegura una adultez más estable. Una vez más, emprendemos una lucha por los derechos de los más preciados, los niños.%0A%0ADip. Álvaro Dastugue%0A%0AFacebook%0Ahttps://fb.watch/ndC1HRS6X4%0A%0AInstagram%0Ahttps://www.instagram.com/reel/CxgQjSfpPb7%0A%0AX (Twitter)%0Ahttps://x.com/alvarodastugue/status/1705221026437550164%0A%0ACompartamos las buenas noticias.',
            'fecha' => Carbon::parse('2023-09-24'),
            'tematica1_id' => $politica,
            'tematica2_id' => $redes,
            'tematica3_id' => $infancia,
            //'activa' => 0
        ]);

        //POR AHORA: $nombre = str_replace(' ','_',$nombre)

    }
}
