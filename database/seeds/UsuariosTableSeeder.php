<?php

use Illuminate\Database\Seeder;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
            //INGENIERÍA AGRONOMÍA
            [
                'nombres' => 'MARHLENI', 'apellido_paterno' => 'CERDA', 'apellido_materno' => 'GOMEZ',
                'dni' => '12300000', 'email' => 'marhleni.cerda@unsch.edu.pe', 'password' => bcrypt('170800468'),
                'rol' => 'docente', 'cel' => '966938028', 'programa_id' => '1'

            ],

            [
                'nombres' => 'RUBEN ALFREDO', 'apellido_paterno' => 'MENESES', 'apellido_materno' => 'ROJAS',
                'dni' => '89595959', 'email' => 'ruben.meneses@unsch.edu.pe', 'password' => bcrypt('170800468'),
                'rol' => 'docente', 'cel' => '982080006', 'programa_id' => '1'

            ],
            //INGENIERÍA AGRÍCOLA
            [
                'nombres' => 'EFRAIN', 'apellido_paterno' => 'CHUCHON ', 'apellido_materno' => 'PRADO',
                'dni' => '56565656', 'email' => 'echpunsch@gmail.com', 'password' => bcrypt('170800492'),
                'rol' => 'docente', 'cel' => '992481516', 'programa_id' => '2'
            ],
            //INGENIERÍA AGROFORESTAL
            [
                'nombres' => 'JOSE ANTONIO', 'apellido_paterno' => 'CORDERO  ', 'apellido_materno' => 'GALINDO,',
                'dni' => '32323232', 'email' => 'ilvlexis2011@gmail.com', 'password' => bcrypt('170800490'),
                'rol' => 'docente', 'cel' => '950200688', 'programa_id' => '3'
            ],
            //MEDICINA VETERINARIA
            [
                'nombres' => 'ALFREDO', 'apellido_paterno' => 'POZO ', 'apellido_materno' => 'CURO',
                'dni' => '12121212', 'email' => 'alfredo.pozo@unsch.edu.pe', 'password' => bcrypt('170800491'),
                'rol' => 'docente', 'cel' => '966394237', 'programa_id' => '4'
            ],
            //EDUCACIÓN INICIAL
            [
                'nombres' => 'BRUNILDA AILLY ', 'apellido_paterno' => 'ACOSTA', 'apellido_materno' => 'MELCHOR',
                'dni' => '85858585', 'email' => 'aillybru@gmail.com', 'password' => bcrypt('170800489'),
                'rol' => 'docente', 'cel' => '966680031', 'programa_id' => '6'
            ],
            //EDUCACIÓN PRIMARIA
            [
                'nombres' => 'GUIDO ALFONSO', 'apellido_paterno' => 'PÉREZ ', 'apellido_materno' => 'SÁEZ',
                'dni' => '12332100', 'email' => 'guipesa@hotmail.com', 'password' => bcrypt('170800488'),
                'rol' => 'docente', 'cel' => '939727277', 'programa_id' => '7'
            ],
            //EDUCACIÓN SECUNDARIA-Ingles y Lengua Española
            [
                'nombres' => 'FREDY', 'apellido_paterno' => 'MORALES', 'apellido_materno' => 'GUTIERREZ',
                'dni' => '55669988', 'email' => 'fremogu@yahoo.es', 'password' => bcrypt('170800484'),
                'rol' => 'docente', 'cel' => '966600450', 'programa_id' => '8'
            ],
            //EDUCACIÓN SECUNDARIA-Matemática Física e Informática
            [
                'nombres' => 'TEODOSIO ZENOBIO', 'apellido_paterno' => 'POMA ', 'apellido_materno' => 'SOLIER',
                'dni' => '23356489', 'email' => 'zpomas@hotmail.com', 'password' => bcrypt('170800486'),
                'rol' => 'docente', 'cel' => '966148669', 'programa_id' => '9'
            ],
            //EDUCACIÓN SECUNDARIA-Ciencias Sociales y Filosofia con mencion en Turismo
            [
                'nombres' => 'MARIA', 'apellido_paterno' => 'FLORES', 'apellido_materno' => 'GUTIERREZ',
                'dni' => '22563984', 'email' => 'mfgmaria.62@hotmail.com', 'password' => bcrypt('170800485'),
                'rol' => 'docente', 'cel' => '990034877', 'programa_id' => '10'
            ],
            //EDUCACIÓN SECUNDARIA-Lengua Española y Literatura con mencion en comunicación
            [
                'nombres' => 'Marcos David', 'apellido_paterno' => 'Cavero', 'apellido_materno' => 'Aróstegui',
                'dni' => '11253652', 'email' => 'marcosdavid491@hotmail.com', 'password' => bcrypt('170800484'),
                'rol' => 'docente', 'cel' => '966110966', 'programa_id' => '11'
            ],
            //EDUCACIÓN FÍSICA
            [
                'nombres' => 'JUAN', 'apellido_paterno' => 'PARIONA ', 'apellido_materno' => 'CAHUANA',
                'dni' => '00235689', 'email' => 'juanitojpc@hotmail.com', 'password' => bcrypt('170800483'),
                'rol' => 'docente', 'cel' => '966654914', 'programa_id' => '12'
            ],
            //ADMINISTRACIÓN DE EMPRESAS
            [
                'nombres' => 'SIXTO ', 'apellido_paterno' => 'AROTOMA ', 'apellido_materno' => 'CACÑAHUARAY',
                'dni' => '15698206', 'email' => 'arotomasix@gmail.com', 'password' => bcrypt('180800901'),
                'rol' => 'docente', 'cel' => '996329985', 'programa_id' => '13'
            ],
            //CONTABILIDAD Y AUDITORÍA
            [
                'nombres' => 'JULIO ', 'apellido_paterno' => 'GOMEZ ', 'apellido_materno' => 'MENDEZ',
                'dni' => '16489523', 'email' => 'gomezmjulio@hotmail.com', 'password' => bcrypt('170800482'),
                'rol' => 'docente', 'cel' => '966115555', 'programa_id' => '14'
            ],
            //ECONOMÍA
            [
                'nombres' => 'NARCISO ', 'apellido_paterno' => 'MARMANILLO ', 'apellido_materno' => 'PEREZ',
                'dni' => '46137982', 'email' => 'nachomar2955@hotmail.com', 'password' => bcrypt('170800481'),
                'rol' => 'docente', 'cel' => '996951880', 'programa_id' => '15'
            ],
            //CIENCIAS DE ARQUEOLOGÍA E HISTORIA
            [
                'nombres' => 'ISMAEL SACARIAS', 'apellido_paterno' => 'PEREZ  ', 'apellido_materno' => 'CALDERON',
                'dni' => '71829630', 'email' => 'zperezunsch@hotmail.com', 'password' => bcrypt('180800907'),
                'rol' => 'docente', 'cel' => '966933191', 'programa_id' => '17'
            ],
            //CIENCIAS DE ANTROPOLOGÍA SOCIAL
            [
                'nombres' => 'LUCIO ALBERTO', 'apellido_paterno' => 'SOSA  ', 'apellido_materno' => ' BITULAS',
                'dni' => '39281708', 'email' => 'lucio.sosa@unsch.edu.pe', 'password' => bcrypt('180800186'),
                'rol' => 'docente', 'cel' => '994420874', 'programa_id' => '18'
            ],
            //CIENCIAS DE TRABAJO SOCIAL
            [
                'nombres' => 'MAURA ', 'apellido_paterno' => 'QUISPE  ', 'apellido_materno' => 'SULCA',
                'dni' => '09392828', 'email' => 'maura_quispe@hotmail.com', 'password' => bcrypt('170800480'),
                'rol' => 'docente', 'cel' => '966908611', 'programa_id' => '19'
            ],
            //DERECHO
            [
                'nombres' => 'OTONIEL PAUL', 'apellido_paterno' => 'OCHOA', 'apellido_materno' => 'ROCA',
                'dni' => '90370852', 'email' => 'perulegis@gmail.com', 'password' => bcrypt('170800479'),
                'rol' => 'docente', 'cel' => '966058545', 'programa_id' => '20'
            ],
            //INGENIERÍA CIVIL
            [
                'nombres' => 'ERNESTO', 'apellido_paterno' => 'ESTRADA ', 'apellido_materno' => 'CARDENAS',
                'dni' => '02145698', 'email' => 'jose.estrada@unsch.edu.pe', 'password' => bcrypt('170800477'),
                'rol' => 'docente', 'cel' => '966903188', 'programa_id' => '21'
            ],
            //INGENIERÍA DE MINAS
            [
                'nombres' => 'JONY ANTONIO ', 'apellido_paterno' => 'QUISPE ', 'apellido_materno' => 'POMA',
                'dni' => '13697526', 'email' => 'jony.quispe@unsch.edu.pe', 'password' => bcrypt('170800478'),
                'rol' => 'docente', 'cel' => '966894370', 'programa_id' => '22'
            ],
            //INGENIERÍA DE SISTEMAS
            [
                'nombres' => 'EDITH', 'apellido_paterno' => 'GUEVARA  ', 'apellido_materno' => 'MOROTE',
                'dni' => '14785236', 'email' => 'edith.guevara@unsch.edu.pe', 'password' => bcrypt('170800473'),
                'rol' => 'docente', 'cel' => '966815070', 'programa_id' => '23'
            ],
            //CIENCIAS FÍSICO MATEMÁTICAS-Estadistica
            [
                'nombres' => 'IGNACIO RONALD ', 'apellido_paterno' => 'PRADO ', 'apellido_materno' => 'SUMARI',
                'dni' => '96325874', 'email' => 'ronald.prado@unsch.edu.pe', 'password' => bcrypt('170800476'),
                'rol' => 'docente', 'cel' => '966656556', 'programa_id' => '24'
            ],
            //CIENCIAS FÍSICO MATEMÁTICAS-Matemática
            [
                'nombres' => 'VICTOR RAUL ', 'apellido_paterno' => 'VIVANCO ', 'apellido_materno' => 'GARFIAS',
                'dni' => '98653210', 'email' => 'vivagafias@hotmail.com', 'password' => bcrypt('170800475'),
                'rol' => 'docente', 'cel' => '966317550', 'programa_id' => '25'
            ],
            //CIENCIAS FÍSICO MATEMÁTICAS-Física
            [
                'nombres' => 'MANUEL ANTONIO ', 'apellido_paterno' => 'MASIAS ', 'apellido_materno' => 'CORREA',
                'dni' => '98654231', 'email' => 'manuel.masias@unsch.edu.pe', 'password' => bcrypt('170800474'),
                'rol' => 'docente', 'cel' => '990506470', 'programa_id' => '26'
            ],
            //INGENIERÍA QUÍMICA
            [
                'nombres' => 'GUIDO ', 'apellido_paterno' => 'PALOMINO ', 'apellido_materno' => 'HERNANDEZ',
                'dni' => '12369854', 'email' => 'guidopalomino1@yahoo.com', 'password' => bcrypt('170800472'),
                'rol' => 'docente', 'cel' => '976620900', 'programa_id' => '27'
            ],
            //INGENIERÍA EN INDUSTRIAS ALIMENTARIAS
            [
                'nombres' => 'LUIS ALBERTO', 'apellido_paterno' => 'HUAMANI  ', 'apellido_materno' => 'HUAMANI ',
                'dni' => '32654789', 'email' => 'alberto.huamani@unsch.edu.pe', 'password' => bcrypt('170800471'),
                'rol' => 'docente', 'cel' => '989433409', 'programa_id' => '28'
            ],
            //INGENIERÍA AGROINDUSTRIAL
            [
                'nombres' => 'JORGE ADALBERTO ', 'apellido_paterno' => 'MÁLAGA ', 'apellido_materno' => 'JUAREZ',
                'dni' => '58964235', 'email' => 'jorge.malaga@unsch.edu.pe', 'password' => bcrypt('170800469'),
                'rol' => 'docente', 'cel' => '966649536', 'programa_id' => '29'
            ],
            //FARMACIA Y BIOQUÍMICA
            [
                'nombres' => 'MARICELA ', 'apellido_paterno' => 'LOPEZ  ', 'apellido_materno' => 'SIERRALTA',
                'dni' => '69325478', 'email' => 'maricela.lopez@unsch.edu.pe', 'password' => bcrypt('170800494'),
                'rol' => 'docente', 'cel' => '9066657575', 'programa_id' => '31'
            ],
            //OBSTETRICIA
            [
                'nombres' => 'VILMA ', 'apellido_paterno' => 'ZORRILLA', 'apellido_materno' => 'DELGADO',
                'dni' => '56987452', 'email' => 'arjode@hotmail.com', 'password' => bcrypt('170800493'),
                'rol' => 'docente', 'cel' => '992481516', 'programa_id' => '32'
            ],
            [
                'nombres' => 'LUISA  ', 'apellido_paterno' => 'ALCARRAZ ', 'apellido_materno' => 'CURI',
                'dni' => '25698451', 'email' => 'luisa.alcarraz@unsch.edu.pe', 'password' => bcrypt('170800493'),
                'rol' => 'docente', 'cel' => '966052156', 'programa_id' => '32'
            ],
            //ENFERMERÍA
            [
                'nombres' => 'IRIS', 'apellido_paterno' => 'JARA  ', 'apellido_materno' => 'HUAYTA',
                'dni' => '25365478', 'email' => 'bebepipiripi@hotmail.com', 'password' => bcrypt('170800470'),
                'rol' => 'docente', 'cel' => '999030495', 'programa_id' => '33'
            ]
        ]);
    }
}
