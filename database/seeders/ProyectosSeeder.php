<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Proyecto;

class ProyectosSeeder extends Seeder
{
    public function run(): void
    {
        $proyectos = [

            [
                'nombre_proyecto'       => 'Solo contra el mundo',
                'especialidad_trayecto' => ['2do 6ta ciclo básico'],
                'participantes'         => ['Agustín Mella'],
                'descripcion_breve'     => 'Experiencia de electricidad estática.',
            ],
            [
                'nombre_proyecto'       => 'Porta celulares',
                'especialidad_trayecto' => ['ciclo basico'],
                'participantes'         => ['Tercero Sexta grupo dos'],
                'descripcion_breve'     => 'Porta celular decorativo realizado con material de descarte y reciclado.',
            ],
            [
                'nombre_proyecto'       => 'Tenedor parrillero y tapón de botella',
                'especialidad_trayecto' => ['ciclo basico'],
                'participantes'         => ['Jaramillo Tobias, Ponce Matheo, Rivas Matheo, Vazquez Paloma, Colavecchio Martina, LOFFREDO DYLAN, ROJO ISABEL, ROASSIO OJEDA TIAGO LEONEL, TORRERO JAZMIN LUCIA'],
                'descripcion_breve'     => 'Tapón torneado y tenedor parrillero con mango metálico elaborado y combinado.',
            ],
            [
                'nombre_proyecto'       => 'Instalación Eléctrica Hogareña',
                'especialidad_trayecto' => ['ciclo básico'],
                'participantes'         => ['Tercero Sexta grupo 2'],
                'descripcion_breve'     => 'Simulación a escala de una instalación eléctrica de iluminación hogareña.',
            ],
            [
                'nombre_proyecto'       => 'Los magos de la electricidad',
                'especialidad_trayecto' => ['Ciclo básico - 2do 6ta'],
                'participantes'         => ['Mia Paz, Zamora Vejar, Maia Amado, Dylan Jerez, Cielo Haag'],
                'descripcion_breve'     => 'Experimentos de electricidad estática.',
            ],
            [
                'nombre_proyecto'       => 'Los tormentos',
                'especialidad_trayecto' => ['Ciclo básico - 2do 6ta'],
                'participantes'         => ['Bruno Espíndola, Camila Baugartne, Alma Henríquez, Abril Velardez, Joaquín Fernández'],
                'descripcion_breve'     => 'Demostraciones sobre fenómenos de electricidad estática.',
            ],
            [
                'nombre_proyecto'       => 'Los Nikola Tesla',
                'especialidad_trayecto' => ['Ciclo básico 2do 6ta'],
                'participantes'         => ['Bastian López, Santino Sosa, Mateo García, Thiago Cornejo, Máximo Escalona, Genaro Gómez'],
                'descripcion_breve'     => 'Actividades y experiencias sobre electricidad estática.',
            ],
            [
                'nombre_proyecto'       => 'El péndulo loco',
                'especialidad_trayecto' => ['Ciclo básico 2do 6ta'],
                'participantes'         => ['Priscila Pérez, Morena Vegar, Zaira Salvó, Lilen Hueso, Franco Badano'],
                'descripcion_breve'     => 'Propuesta experimental relacionada con electricidad estática y péndulo.',
            ],
            [
                'nombre_proyecto'       => 'Veladores',
                'especialidad_trayecto' => ['Ciclo basico, Tercer año'],
                'participantes'         => ['Todos los alumnos de 3°1° grupo 1 y 3°2° grupo 2'],
                'descripcion_breve'     => 'Construcción de veladores en fibrofácil o madera con su conexión eléctrica.',
            ],
            [
                'nombre_proyecto'       => 'Página institucional',
                'especialidad_trayecto' => ['Desarrollo de Aplicaciones Web Dinámicas'],
                'participantes'         => ['Isabella Carrete, Bautista Perez'],
                'descripcion_breve'     => 'Página web de registro de alumnos con información académica y foto.',
            ],
            [
                'nombre_proyecto'       => 'Maquetas escenográficas de problemáticas ambientales y fauna autóctona',
                'especialidad_trayecto' => ['Educación artística'],
                'participantes'         => ['6°2° (casi la totalidad del alumnado)'],
                'descripcion_breve'     => 'Cajas escenográficas sobre fauna autóctona y problemáticas medioambientales.',
            ],
            [
                'nombre_proyecto'       => 'Variantes de Luz',
                'especialidad_trayecto' => ['Electricidad. Ciclo Básico'],
                'participantes'         => ['Kuntz giuliana, Mariano Martínez, morena otto, Sharon parada romero, Aymara Solis, Ramiro lisi, toro ureta Valentino, Vargas Enzo, viera lorenzo'],
                'descripcion_breve'     => 'Trabajos con componentes básicos de electricidad para iluminación doméstica.',
            ],
            [
                'nombre_proyecto'       => 'RioVolt',
                'especialidad_trayecto' => ['ELECTROMECANICA'],
                'participantes'         => ['PONCE, REINOSO, CATANIECCE, WAINMAN, VAZQUEZ'],
                'descripcion_breve'     => 'Generador hídrico para producción de energía.',
            ],
            [
                'nombre_proyecto'       => 'GENERADOR WALDTT',
                'especialidad_trayecto' => ['ELECTROMECANICA'],
                'participantes'         => ['FERNANDEZ, POSTIGO, PIOVAN, MALLAQUEO, GAJON, ROSALES'],
                'descripcion_breve'     => 'Sistema mecánico continuo tipo generador.',
            ],
            [
                'nombre_proyecto'       => 'MOLINO HELICOIDAL',
                'especialidad_trayecto' => ['ELECTROMECANICA'],
                'participantes'         => ['YAÑEZ, BARBOZA, MAYANS, MACCARI, PEÑALVA'],
                'descripcion_breve'     => 'Molino helicoidal como generador de energía.',
            ],
            [
                'nombre_proyecto'       => 'Instalación eléctrica domiciliaria',
                'especialidad_trayecto' => ['Electromecanica'],
                'participantes'         => ['Curso completo'],
                'descripcion_breve'     => 'Maqueta demostrativa de instalación eléctrica domiciliaria.',
            ],
            [
                'nombre_proyecto'       => 'Molino eólicoidal con impresión 3D',
                'especialidad_trayecto' => ['electromecánica'],
                'participantes'         => ['Yanina barboza, Agustína mayans, Peñalba Agostina, Gino maccari, yañes Tamara'],
                'descripcion_breve'     => 'Molino eólico con hélice impresa en 3D.',
            ],
            [
                'nombre_proyecto'       => 'Motor de corriente alterna',
                'especialidad_trayecto' => ['Electromecánica 5to 2da'],
                'participantes'         => ['Andrade Lautaro, Elias Contreras, Candela Gomez, Santiago Camacho'],
                'descripcion_breve'     => 'Maqueta y explicación de un motor de corriente alterna.',
            ],
            [
                'nombre_proyecto'       => 'Robot de Limpieza',
                'especialidad_trayecto' => ['Electrónica'],
                'participantes'         => ['Delfina Marinissen, Daniela Gutiérrez'],
                'descripcion_breve'     => 'Robot que detecta obstáculos y realiza tareas de limpieza.',
            ],
            [
                'nombre_proyecto'       => 'Cerradura con llave electromagnética',
                'especialidad_trayecto' => ['Electrónica'],
                'participantes'         => ['Tomas Lago, Octavio Mengoni, Agustín Osorio'],
                'descripcion_breve'     => 'Cerradura con apertura por lectura de tarjeta.',
            ],
            [
                'nombre_proyecto'       => 'Máquina de Filamentos para Impresora 3D',
                'especialidad_trayecto' => ['Electrónica'],
                'participantes'         => ['Fernández Santiago, Nahuel Julian, Estrada Oscar'],
                'descripcion_breve'     => 'Prototipo para reciclar plástico y convertirlo en filamento para impresión 3D.',
            ],
            [
                'nombre_proyecto'       => 'Auto con control de arduino',
                'especialidad_trayecto' => ['Electrónica'],
                'participantes'         => ['Camila mancisidor, Joaquín Muñoz'],
                'descripcion_breve'     => 'Auto prototipo controlado con plataforma Arduino.',
            ],
            [
                'nombre_proyecto'       => 'Detector de pulsaciones cardiacas',
                'especialidad_trayecto' => ['Electrónica'],
                'participantes'         => ['Tiara Estay, Santiago Herbalejo'],
                'descripcion_breve'     => 'Sistema que detecta pulsaciones cardíacas y muestra la información en LCD.',
            ],
            [
                'nombre_proyecto'       => 'Semáforo inteligente, ascensor con panel led',
                'especialidad_trayecto' => ['Electrónica 5to 3era'],
                'participantes'         => ['Goncalves, Bajo, Acuña, Gonzáles'],
                'descripcion_breve'     => 'Maqueta funcional de semáforo inteligente y ascensor controlados por Arduino.',
            ],
            [
                'nombre_proyecto'       => 'El estuario de Bahia Blanca: un humedal con vida propia',
                'especialidad_trayecto' => ['Geografia, ciclo basico 2do 5ta'],
                'participantes'         => ['Rocco Barria, Bautista Pignotti, Moreno Theo, Jimenez Maia, Khin Nicolas, Lopini Martina, Mardones Genaro, Moscoso Lucia, Peralta Brisa, Ortigoza Marlen, Renda Santino, Sidorkevich Mateo, Torres Thiago, Veralli Benjamin, Vergara Malena'],
                'descripcion_breve'     => 'Proyecto sobre el estuario de Bahía Blanca como humedal local y su importancia.',
            ],
            [
                'nombre_proyecto'       => 'Mejora web Capacita Bahía',
                'especialidad_trayecto' => ['Informática'],
                'participantes'         => ['AMORENA Daina, BUSTAMANTE Morena, LEGUIZA Tomas, REILE Mario, ANDERSEN MOCHEN Maximiliano'],
                'descripcion_breve'     => 'Propuesta de mejora UX y funcional de la web Bahía Formativa.',
            ],
            [
                'nombre_proyecto'       => 'Solitario',
                'especialidad_trayecto' => ['Laboratorio de Programación'],
                'participantes'         => ['Juan Ignacio Torres Troschasky'],
                'descripcion_breve'     => 'Implementación del juego de solitario en Java.',
            ],
            [
                'nombre_proyecto'       => 'Poesía expandida: videopoemas y lapbooks poéticos',
                'especialidad_trayecto' => ['Literatura - Programación - Electromecánica'],
                'participantes'         => ['Cursos completos 6°2DA y 6°6TA'],
                'descripcion_breve'     => 'Lapbooks y videopoemas que transforman la poesía en experiencia visual y sonora.',
            ],
            [
                'nombre_proyecto'       => 'Carteles informativos',
                'especialidad_trayecto' => ['Plástica visual'],
                'participantes'         => ['3ro 3ra'],
                'descripcion_breve'     => 'Carteles educativos para concientizar sobre el cuidado del entorno.',
            ],
            [
                'nombre_proyecto'       => 'Sitio web de agenda estudiantil',
                'especialidad_trayecto' => ['Programacion'],
                'participantes'         => ['Ezequiel Irusta, Thiago Barrios, Ezequiel Bertrand, Allel Magallanes'],
                'descripcion_breve'     => 'Sistema web para gestionar materias, eventos e inasistencias en un calendario.',
            ],
            [
                'nombre_proyecto'       => 'Sitio Web de Gestion de Turnos Medicos - Centro Saludplus',
                'especialidad_trayecto' => ['Programacion'],
                'participantes'         => ['Lautaro Diez'],
                'descripcion_breve'     => 'Sistema digital de gestión de turnos médicos para la clínica Saludplus.',
            ],
            [
                'nombre_proyecto'       => 'Sitio Web de Gestion de turnos - El Hospital Bahiense',
                'especialidad_trayecto' => ['Programacion'],
                'participantes'         => ['Lautaro Renda, Lautaro Sanhueza'],
                'descripcion_breve'     => 'Sitio web para gestionar turnos, médicos y pacientes en un hospital.',
            ],
            [
                'nombre_proyecto'       => 'Aplicativo Móvil de puntuación de EACP y CB',
                'especialidad_trayecto' => ['Programacion'],
                'participantes'         => ['Uriel Manquilaf, Ezequiel Irusta, Thiago Barrios, Martin Dekak'],
                'descripcion_breve'     => 'App móvil para que docentes califiquen proyectos y vean rankings.',
            ],
            [
                'nombre_proyecto'       => 'Sitio Web de Turnos Médicos - Centro de Salud Vida Plena',
                'especialidad_trayecto' => ['Programación'],
                'participantes'         => ['Maximo Teuber, Brian Salgado, Guido Pereyra, Ramiro Vidal, Santino Marque'],
                'descripcion_breve'     => 'Sistema de gestión de turnos para consultorio médico Vida Plena.',
            ],
            [
                'nombre_proyecto'       => 'Sitio web de turnos en centro de estética - Clínica Bellísima',
                'especialidad_trayecto' => ['Programación'],
                'participantes'         => ['Luján Ojeda, Jade Montero, Agostina Neme'],
                'descripcion_breve'     => 'Sitio web de turnos médicos para clínica estética especializada.',
            ],
            [
                'nombre_proyecto'       => 'Sitio Web de Gestión de Stock de Insumos Médicos para Sala Médica',
                'especialidad_trayecto' => ['Programación'],
                'participantes'         => ['Uriel Manquilaf, Thiago Copaz, Jano Sapienza, Julián Dargaine, Guido Pereyra'],
                'descripcion_breve'     => 'Gestión de inventario y movimientos de insumos médicos para sala médica.',
            ],
            [
                'nombre_proyecto'       => 'Red Social Estudiantes Conectados',
                'especialidad_trayecto' => ['Programación'],
                'participantes'         => ['Joaquín Jaque, Tomas Palazzani'],
                'descripcion_breve'     => 'Red social para conectar estudiantes técnicos.',
            ],
            [
                'nombre_proyecto'       => 'Laberinto',
                'especialidad_trayecto' => ['Programación'],
                'participantes'         => ['Alex López, Dylan Trujillo'],
                'descripcion_breve'     => 'Juego de laberinto con distintos niveles.',
            ],
            [
                'nombre_proyecto'       => 'TEG',
                'especialidad_trayecto' => ['Programación'],
                'participantes'         => ['Isabella Carrete, Baustista Perez'],
                'descripcion_breve'     => 'Versión digital del clásico juego de tablero TEG.',
            ],
            [
                'nombre_proyecto'       => 'KITTY',
                'especialidad_trayecto' => ['Programación'],
                'participantes'         => ['Joaquín García, Luján Brendel'],
                'descripcion_breve'     => 'Juego interactivo de alimentar una mascota virtual.',
            ],
            [
                'nombre_proyecto'       => 'Bostalato',
                'especialidad_trayecto' => ['Programación'],
                'participantes'         => ['Agustina Duran, Bautista Fernández'],
                'descripcion_breve'     => 'Juego de cartas digital.',
            ],
            [
                'nombre_proyecto'       => 'Ladrillo Loco',
                'especialidad_trayecto' => ['Programación'],
                'participantes'         => ['Danilo Faundez'],
                'descripcion_breve'     => 'Juego tipo Arkanoid con destrucción de ladrillos.',
            ],
            [
                'nombre_proyecto'       => 'Damas',
                'especialidad_trayecto' => ['Programación'],
                'participantes'         => ['Jaramillo'],
                'descripcion_breve'     => 'Juego de damas para dos participantes.',
            ],
            [
                'nombre_proyecto'       => 'Lucha Armada',
                'especialidad_trayecto' => ['Programación'],
                'participantes'         => ['Jorge Alfaro, Pedro Troncoso'],
                'descripcion_breve'     => 'Juego de estrategia de combate entre personajes.',
            ],
            [
                'nombre_proyecto'       => 'Juegos Lógicos',
                'especialidad_trayecto' => ['Programación'],
                'participantes'         => ['Mariano Rovein, Faustina Maturana'],
                'descripcion_breve'     => 'Colección de juegos lógicos con aumento de dificultad.',
            ],
            [
                'nombre_proyecto'       => 'Truco',
                'especialidad_trayecto' => ['Programación'],
                'participantes'         => ['Aguilar Francisco, Gómez'],
                'descripcion_breve'     => 'Juego de truco para jugar contra la computadora.',
            ],
            [
                'nombre_proyecto'       => 'Esquive',
                'especialidad_trayecto' => ['Programación'],
                'participantes'         => ['Carbonetti, Dezurko, Zambrana'],
                'descripcion_breve'     => 'Juego de auto que debe esquivar obstáculos.',
            ],
            [
                'nombre_proyecto'       => 'Vaqueros',
                'especialidad_trayecto' => ['Programación'],
                'participantes'         => ['Romero, Ponce de León'],
                'descripcion_breve'     => 'Juego de vaqueros en pantalla.',
            ],
            [
                'nombre_proyecto'       => 'Black jack',
                'especialidad_trayecto' => ['Programación'],
                'participantes'         => ['Santiago Monterrubianessi'],
                'descripcion_breve'     => 'Juego de Black Jack contra la computadora.',
            ],
            [
                'nombre_proyecto'       => 'Matabicho',
                'especialidad_trayecto' => ['Programación'],
                'participantes'         => ['Facundo Dinardo'],
                'descripcion_breve'     => 'Juego donde se deben eliminar bichos en la pantalla.',
            ],
            [
                'nombre_proyecto'       => 'Buscaminas Bis',
                'especialidad_trayecto' => ['Programación'],
                'participantes'         => ['Geremías Gimenez'],
                'descripcion_breve'     => 'Versión del clásico juego Buscaminas en Java.',
            ],
            [
                'nombre_proyecto'       => 'Biofuel',
                'especialidad_trayecto' => ['Quimica'],
                'participantes'         => ['Cuce Milena, Julieta Rapetti, Lourdes Saez, Camila Mansilla'],
                'descripcion_breve'     => 'Biocombustible a base de cáscaras de banana para disminuir contaminación.',
            ],
            [
                'nombre_proyecto'       => 'Aloe Floc',
                'especialidad_trayecto' => ['Quimica'],
                'participantes'         => ['Lucila Padilla, Ibañez Brisa, Gil Santino'],
                'descripcion_breve'     => 'Floculante natural a base de aloe vera.',
            ],
            [
                'nombre_proyecto'       => 'Ecobento',
                'especialidad_trayecto' => ['quimica'],
                'participantes'         => ['mansilla justina, silva abner, sabio iara, antivil maite'],
                'descripcion_breve'     => 'Ecoadsorbente para remoción de contaminantes polares y no polares.',
            ],
            [
                'nombre_proyecto'       => 'PhytoSpin',
                'especialidad_trayecto' => ['Química'],
                'participantes'         => ['Rocio Bernardete, Teresa Amarilla'],
                'descripcion_breve'     => 'Fitorremediación de suelos contaminados con cobre usando espinaca.',
            ],
            [
                'nombre_proyecto'       => 'BioAbsor',
                'especialidad_trayecto' => ['Quimica'],
                'participantes'         => ['Carvajal Luana, Flores Zaida, Lopez Facundo'],
                'descripcion_breve'     => 'Absorbente con cáscara de huevo para remoción de metales pesados en agua.',
            ],
            [
                'nombre_proyecto'       => 'Bucalex',
                'especialidad_trayecto' => ['química'],
                'participantes'         => ['Rocío Roth, Candela Moscoso, Bruno Wnorovski'],
                'descripcion_breve'     => 'Enjuague bucal natural a base de hidrolatos de salvia.',
            ],
            [
                'nombre_proyecto'       => 'Algavida',
                'especialidad_trayecto' => ['Química'],
                'participantes'         => ['Giuliana Barboza, Araceli Montaño, Sol García, Priscila Romero'],
                'descripcion_breve'     => 'Fabricación de bolsas biodegradables a base de algas.',
            ],
            [
                'nombre_proyecto'       => 'Ecoplack',
                'especialidad_trayecto' => ['Química'],
                'participantes'         => ['Giuliana Acuña, Naccari Isabella, Valentina Sauco'],
                'descripcion_breve'     => 'Placas de aglomerado orgánico con biopolímero y cáscaras de girasol.',
            ],
            [
                'nombre_proyecto'       => 'OBI: Bioplasticos a partir de cáscaras de naranja',
                'especialidad_trayecto' => ['Química'],
                'participantes'         => ['Acosta Agustín, Barroso Sofía, Cheuquen Abril, Salomé Guayuán'],
                'descripcion_breve'     => 'Bioplástico biodegradable a partir de cáscaras de naranja y celulosa bacteriana.',
            ],
            [
                'nombre_proyecto'       => 'Carrera Química',
                'especialidad_trayecto' => ['Química'],
                'participantes'         => ['Celina Brendel, Ludmila Corgatelli, Abril Fernández, Rocio García, Juan Ignacio Gianotti, Valentina Giménez, Leandro Martínez, Joaquín Rodríguez, Marcos Román, Guadalupe Uinchinao, Julieta Ungaro, Morena Glieca, Martina Valle, Sofía Yuvel, Julieta Carrillo, Dylan Francisco'],
                'descripcion_breve'     => 'Actividad lúdica con reacción química que cambia de color según la concentración.',
            ],
            [
                'nombre_proyecto'       => 'GreenCel',
                'especialidad_trayecto' => ['Química'],
                'participantes'         => ['Jazmín Fernández, Ailén Lugones, Ludmila González, Tobias Kuntz'],
                'descripcion_breve'     => 'Obtención de celulosa microcristalina a partir de cáscaras de banana.',
            ],
            [
                'nombre_proyecto'       => 'Macetas orgánicas',
                'especialidad_trayecto' => ['Química/Laboratorio de Química'],
                'participantes'         => ['Dominguez Santino, Jaramillo Braian, Fernandez Lorenzo, Lucero Selene, Ortega Luisina, Gonzalez Fiorella, Hoyos Genaro, Santos Kiara, Lomolino Uma, Longobardi Tobias, Lescano Liam, Erices Tiziana, Figueroa Alma'],
                'descripcion_breve'     => 'Macetas de yerba como alternativa ecológica que se planta directamente.',
            ],
            [
                'nombre_proyecto'       => 'Automatización con Arduino y Minibloq y Impresión 3D de lámparas',
                'especialidad_trayecto' => ['Sistemas Tecnológicos 2do año'],
                'participantes'         => ['Ranilla, Martinez, Gómez'],
                'descripcion_breve'     => 'Vehículo con sensor de ultrasonido y armado en 3D con Arduino, más impresión 3D de lámparas.',
            ],
            [
                'nombre_proyecto'       => 'Bioplastico de gelatina',
                'especialidad_trayecto' => ['Tecnicatura en Quimica'],
                'participantes'         => ['Bautista Anton, Benjamin Calzada'],
                'descripcion_breve'     => 'Elaboración de bioplástico a base de gelatina, glicerina y agua.',
            ],
            [
                'nombre_proyecto'       => 'Ecatech Solutions',
                'especialidad_trayecto' => ['Tecnicatura química'],
                'participantes'         => ['Silma Marcelo, Martinez Marcos, Pagella Santino'],
                'descripcion_breve'     => 'Inhibidor de corrosión ecológico a base de té verde.',
            ],
            [
                'nombre_proyecto'       => 'Kóoch',
                'especialidad_trayecto' => ['Técnico química 7mo año'],
                'participantes'         => ['Sophia Juan, Mía Ponce, Ramiro Barón'],
                'descripcion_breve'     => 'Obtención de metano con biodigestor y uso de aditivos para acelerar el proceso.',
            ],
            [
                'nombre_proyecto'       => 'sabores que respiran',
                'especialidad_trayecto' => ['tecnico quimico'],
                'participantes'         => ['nicole bertrand, morena chico, priscila de la iglesia'],
                'descripcion_breve'     => 'Observación de procesos de fermentación de kéfir e hidromiel.',
            ],
            [
                'nombre_proyecto'       => 'EcoStarch',
                'especialidad_trayecto' => ['Técnico Quimico'],
                'participantes'         => ['Arza morena, Tiziana Cabeza, Cornejo Danilo'],
                'descripcion_breve'     => 'Diseño de bioplásticos a base de almidón de maíz y papa.',
            ],
            [
                'nombre_proyecto'       => 'Porta Gotitas',
                'especialidad_trayecto' => ['tecnico quimico'],
                'participantes'         => ['Brisa Solis, Alma Diaz, Paulina Canosa, Tiziana Behr, Sara Dekak'],
                'descripcion_breve'     => 'Biopolímeros a base de agar para porta gotitas.',
            ],
            [
                'nombre_proyecto'       => 'invernadero inteligente',
                'especialidad_trayecto' => ['electricidad 5to 5ta'],
                'participantes'         => ['Trejo darian, Talamontti Ian, Riazuelo Gaspar'],
                'descripcion_breve'     => 'Invernadero autosustentable que controla humedad, temperatura y ventilación.',
            ],
        ];

        foreach ($proyectos as $proyecto) {
            Proyecto::create($proyecto);
        }
    }
}
