<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services    = [];
        $services[]  = [
          'id'          => '1',
          'name'        => 'Apologética Juvenil',
          'thumbnail'   => '/images/banners/apologetica_juvenil_720.jpg',
          'image'       => '/images/banners/apologetica_juvenil.jpg',
          'subtitle'    => '-',
          'description' => 'Cómo ayudar a nuestros jóvenes y adolescentes a mantenerse firmes en su fe y tener argumentos para defenderla? <br><br>Proveemos y elaboramos talleres, estudios, herramientas de apoyo y principios bíblicos para que los jóvenes pre- universitarios y universitarios reciban las bases y la forma en que pueden conocer y abordar temas como la homosexualidad, ideología de género, el matrimonio igualitario, la política, los peligros de la web, etc y puedan mantenerse firmes en la fe en Cristo en medio del pensamiento de este siglo. (Investigación profunda).',
        ];
        $services[]  = [
          'id'          => '2',
          'name'        => 'Cápsulas bíblicas juveniles',
          'thumbnail'   => '/images/banners/capsulas_bibilicas_juveniles_720.jpg',
          'image'       => '/images/banners/capsulas_bibilicas_juveniles.jpg',
          'subtitle'    => '-',
          'description' => 'Elaboramos y distribuimos enseñanzas, estudios y reflexiones Prácticas, Profundas y Posibles, de fácil lectura y comprensión para los adolescentes y jóvenes de las iglesias y lo no creyentes. Estas son de soporte y ayuda en los ministerios juveniles para obtener materiales de enseñanza ordenados y consecutivos para sus reuniones y escuelas bíblicas.',
        ];
        $services[]  = [
          'id'          => '3',
          'name'        => 'H2J',
          'thumbnail'   => '/images/banners/h2j_720.jpg',
          'image'       => '/images/banners/h2j.jpg',
          'subtitle'    => '-',
          'description' => '(Hermenéutica y Homilética juvenil) Enseñamos y entrenamos a líderes de jóvenes en preparar la enseñanza Biblica y trasmitirla de manera creativa y relevante para adolescentes y jovenes. Proveemos herramientas didácticas y contextualizadas para la enseñanza en el ministerio juvenil.',
        ];
        $services[]  = [
          'id'          => '4',
          'name'        => 'Keepers School',
          'thumbnail'   => '/images/banners/keepers_school_720.jpg',
          'image'       => '/images/banners/keepers_school.jpg',
          'subtitle'    => '-',
          'description' => 'Apoyamos procesos serios de pastoral juvenil, énfasis espiritual y de valores en los colegios y entidades educativas que así lo requieran. Proveemos y desarrollamos de manera dinámica y contextualizada la enseñanza Biblica a los jóvenes y adolescentes dentro del colegio. <br><br>Capacitamos el cuerpo de docentes en temas referentes al trabajo y ministerio juvenil en los colegios en temas como el matoneo, adicciones, homosexualidad y muchos más con herramientas bíblicas que respalden el levantar una generación que tema al Señor.',
        ];
        $services[]  = [
          'id'          => '5',
          'name'        => 'Talleres de Padres',
          'thumbnail'   => '/images/banners/talleres_padres_720.jpg',
          'image'       => '/images/banners/talleres_padres.jpg',
          'subtitle'    => '-',
          'description' => '',
        ];
        $services[]  = [
          'id'          => '6',
          'name'        => 'The Good Young Life',
          'thumbnail'   => '/images/banners/the_good_young_life_720.jpg',
          'image'       => '/images/banners/the_good_young_life.jpg',
          'subtitle'    => 'Renovation and Restoration',
          'description' => 'Este es un seminario y taller bíblico didáctico donde llevamos a los jóvenes y adolescentes a comprender y asumir lo que es el verdadero significado de la juventud. Enfocamos la identidad, el propósito, el lugar del joven en su familia, el manejo de relaciones, sus principales luchas y vacíos entendiendo sus causas y la forma en que pueden ser suplidos por el Señor.  La dinámica y estilo de este seminario - taller permite ver los ejemplos directos de jóvenes y adolescentes en la Biblia en su proceso de vida llevando al participante a identificarse con ellos para comprobar la obra y la intervención del Señor.'
        ];
        $materials   = [];
        $materials[] = [
          'title' => 'Siete aspectos que apagan el Espíritu',
        ];
        $materials[] = [
          'title' => '¿Cómo puede el joven tomar decisiones sabias?',
        ];
        $materials[] = [
          'title' => '¿Qué sucede con el joven que evangeliza y sirve?',
        ];
        $materials[] = [
          'title' => 'Tatuajes, pornografía y masturbación ¿Qué dice la Biblia?',
        ];
        $materials[] = [
          'title' => 'El ministerio juvenil generacional',
        ];
        $materials[] = [
          'title' => 'Cómo ayudar a jóvenes y adolescentes frente al matoneo?',
        ];
        $materials[] = [
          'title' => 'El ministerio juvenil transcultural',
        ];
        $goals       = [
          'Implementar el uso de materiales y diferentes recursos para desarrollar estudios bíblicos y reflexiones con jóvenes.',
          'Ser referente para los jóvenes con el carácter de Cristo, que anhelan servirle, entendiendo la importancia de estar anclados a la Palabra de Dios.',
          'Facilitar materiales de estudio y discipulado para jóvenes.',
          'Empoderar a líderes en sus propios dones y talentos, activándoles en el servicio y ministerio juvenil.',
          'Transmitir y extender la importancia de la Palabra de Dios como principal herramienta de crecimiento en los ministerios juveniles.',
          'Ofrecer recursos, materiales y capacitación para el trabajo con los padres en las áreas de desarrollo de la vida de sus hijos.'
        ];

        return view('index', compact('services', 'materials', 'goals'));
    }
}
