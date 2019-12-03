<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            //INGENIERÍA AGRONOMÍA
            [
                'name' => 'MARHLENI CERDA GOMEZ',
                'email' => 'marhleni.cerda@unsch.edu.pe',
                'password' => Hash::make('170800468'),
                'rol' => 'docente',
                'telefono' => '966938028',
                'programa_id' => '1'

            ],
            [
                'name' => 'RUBEN ALFREDO MENESES ROJAS',
                'email' => 'ruben.meneses@unsch.edu.pe',
                'password' => Hash::make('170800468'),
                'rol' => 'docente',
                'telefono' => '982080006',
                'programa_id' => '1'

            ],
            //INGENIERÍA AGRÍCOLA
            [
                'name' => 'EFRAIN CHUCHON PRADO',
                'email' => 'echpunsch@gmail.com',
                'password' => Hash::make('170800492'),
                'rol' => 'docente',
                'telefono' => '992481516',
                'programa_id' => '2'
            ],
            //INGENIERÍA AGROFORESTAL
            [
                'name' => 'JOSE ANTONIO CORDERO GALINDO,',
                'email' => 'ilvlexis2011@gmail.com',
                'password' => Hash::make('170800490'),
                'rol' => 'docente',
                'telefono' => '950200688',
                'programa_id' => '3'
            ],
            //MEDICINA VETERINARIA
            [
                'name' => 'ALFREDO, POZO CURO',
                'email' => 'alfredo.pozo@unsch.edu.pe',
                'password' => Hash::make('170800491'),
                'rol' => 'docente',
                'telefono' => '966394237',
                'programa_id' => '4'
            ],
            //EDUCACIÓN INICIAL
            [
                'name' => 'BRUNILDA AILLY, ACOSTA MELCHOR',
                'email' => 'aillybru@gmail.com',
                'password' => Hash::make('170800489'),
                'rol' => 'docente',
                'telefono' => '966680031',
                'programa_id' => '6'
            ],
            //EDUCACIÓN PRIMARIA
            [
                'name' => 'GUIDO ALFONSO, PÉREZ SÁEZ',
                'email' => 'guipesa@hotmail.com', 'password' => Hash::make('170800488'),
                'rol' => 'docente', 'telefono' => '939727277',
                'programa_id' => '7'
            ],
            //EDUCACIÓN SECUNDARIA-Ingles y Lengua Española
            [
                'name' => 'FREDY, MORALES GUTIERREZ',
                'email' => 'fremogu@yahoo.es', 'password' => Hash::make('170800484'),
                'rol' => 'docente', 'telefono' => '966600450', 'programa_id' => '8'
            ],
            //EDUCACIÓN SECUNDARIA-Matemática Física e Informática
            [
                'name' => 'TEODOSIO ZENOBIO, POMA SOLIER',
                'email' => 'zpomas@hotmail.com', 'password' => Hash::make('170800486'),
                'rol' => 'docente', 'telefono' => '966148669',
                'programa_id' => '9'
            ],
            //EDUCACIÓN SECUNDARIA-Ciencias Sociales y Filosofia con mencion en Turismo
            [
                'name' => 'MARIA, FLORES GUTIERREZ',
                'email' => 'mfgmaria.62@hotmail.com', 'password' => Hash::make('170800485'),
                'rol' => 'docente', 'telefono' => '990034877',
                'programa_id' => '10'
            ],
            //EDUCACIÓN SECUNDARIA-Lengua Española y Literatura con mencion en comunicación
            [
                'name' => 'Marcos David, Cavero Aróstegui',
                'email' => 'marcosdavid491@hotmail.com', 'password' => Hash::make('170800484'),
                'rol' => 'docente', 'telefono' => '966110966',
                'programa_id' => '11'
            ],
            //EDUCACIÓN FÍSICA
            [
                'name' => 'JUAN, PARIONA  CAHUANA',
                'email' => 'juanitojpc@hotmail.com', 'password' => Hash::make('170800483'),
                'rol' => 'docente', 'telefono' => '966654914',
                'programa_id' => '12'
            ],
            //ADMINISTRACIÓN DE EMPRESAS
            [
                'name' => 'SIXTO , AROTOMA  CACÑAHUARAY',
                'email' => 'arotomasix@gmail.com', 'password' => Hash::make('180800901'),
                'rol' => 'docente', 'telefono' => '996329985',  'programa_id' => '13'
            ],
            //CONTABILIDAD Y AUDITORÍA
            [
                'name' => 'JULIO , GOMEZ  MENDEZ',
                'email' => 'gomezmjulio@hotmail.com', 'password' => Hash::make('170800482'),
                'rol' => 'docente', 'telefono' => '966115555', 'programa_id' => '14'
            ],
            //ECONOMÍA
            [
                'name' => 'NARCISO , MARMANILLO  PEREZ',
                'email' => 'nachomar2955@hotmail.com', 'password' => Hash::make('170800481'),
                'rol' => 'docente', 'telefono' => '996951880', 'programa_id' => '15'
            ],
            //CIENCIAS DE ARQUEOLOGÍA E HISTORIA
            [
                'name' => 'ISMAEL SACARIAS, PEREZ CALDERON',
                'email' => 'zperezunsch@hotmail.com', 'password' => Hash::make('180800907'),
                'rol' => 'docente', 'telefono' => '966933191', 'programa_id' => '17'
            ],
            //CIENCIAS DE ANTROPOLOGÍA SOCIAL
            [
                'name' => 'LUCIO ALBERTO, SOSA BITULAS',
                'email' => 'lucio.sosa@unsch.edu.pe', 'password' => Hash::make('180800186'),
                'rol' => 'docente', 'telefono' => '994420874', 'programa_id' => '18'
            ],
            //CIENCIAS DE TRABAJO SOCIAL
            [
                'name' => 'MAURA , QUISPE   SULCA',
                'email' => 'maura_quispe@hotmail.com', 'password' => Hash::make('170800480'),
                'rol' => 'docente', 'telefono' => '966908611', 'programa_id' => '19'
            ],
            //DERECHO
            [
                'name' => 'OTONIEL PAUL, OCHOA ROCA',
                'email' => 'perulegis@gmail.com', 'password' => Hash::make('170800479'),
                'rol' => 'docente', 'telefono' => '966058545', 'programa_id' => '20'
            ],
            //INGENIERÍA CIVIL
            [
                'name' => 'ERNESTO, ESTRADA  CARDENAS',
                'email' => 'jose.estrada@unsch.edu.pe', 'password' => Hash::make('170800477'),
                'rol' => 'docente', 'telefono' => '966903188', 'programa_id' => '21'
            ],
            //INGENIERÍA DE MINAS
            [
                'name' => 'JONY ANTONIO , QUISPE  POMA',
                'email' => 'jony.quispe@unsch.edu.pe', 'password' => Hash::make('170800478'),
                'rol' => 'docente', 'telefono' => '966894370', 'programa_id' => '22'
            ],
            //INGENIERÍA DE SISTEMAS
            [
                'name' => 'EDITH, GUEVARA   MOROTE',
                'email' => 'edith.guevara@unsch.edu.pe', 'password' => Hash::make('170800473'),
                'rol' => 'docente', 'telefono' => '966815070', 'programa_id' => '23'
            ],
            //CIENCIAS FÍSICO MATEMÁTICAS-Estadistica
            [
                'name' => 'IGNACIO RONALD , PRADO  SUMARI',
                'email' => 'ronald.prado@unsch.edu.pe', 'password' => Hash::make('170800476'),
                'rol' => 'docente', 'telefono' => '966656556',  'programa_id' => '24'
            ],
            //CIENCIAS FÍSICO MATEMÁTICAS-Matemática
            [
                'name' => 'VICTOR RAUL , VIVANCO  GARFIAS',
                'email' => 'vivagafias@hotmail.com', 'password' => Hash::make('170800475'),
                'rol' => 'docente', 'telefono' => '966317550', 'programa_id' => '25'
            ],
            //CIENCIAS FÍSICO MATEMÁTICAS-Física
            [
                'name' => 'MANUEL ANTONIO , MASIAS  CORREA',
                'email' => 'manuel.masias@unsch.edu.pe', 'password' => Hash::make('170800474'),
                'rol' => 'docente', 'telefono' => '990506470', 'programa_id' => '26'
            ],
            //INGENIERÍA QUÍMICA
            [
                'name' => 'GUIDO , PALOMINO  HERNANDEZ',
                'email' => 'guidopalomino1@yahoo.com', 'password' => Hash::make('170800472'),
                'rol' => 'docente', 'telefono' => '976620900', 'programa_id' => '27'
            ],
            //INGENIERÍA EN INDUSTRIAS ALIMENTARIAS
            [
                'name' => 'LUIS ALBERTO, HUAMANI   HUAMANI ',
                'email' => 'alberto.huamani@unsch.edu.pe', 'password' => Hash::make('170800471'),
                'rol' => 'docente', 'telefono' => '989433409', 'programa_id' => '28'
            ],
            //INGENIERÍA AGROINDUSTRIAL
            [
                'name' => 'JORGE ADALBERTO , MÁLAGA  JUAREZ',
                'email' => 'jorge.malaga@unsch.edu.pe', 'password' => Hash::make('170800469'),
                'rol' => 'docente', 'telefono' => '966649536', 'programa_id' => '29'
            ],
            //FARMACIA Y BIOQUÍMICA
            [
                'name' => 'MARItelefonoA , LOPEZ   SIERRALTA',
                'email' => 'maritelefonoa.lopez@unsch.edu.pe', 'password' => Hash::make('170800494'),
                'rol' => 'docente', 'telefono' => '906657575', 'programa_id' => '31'
            ],
            //OBSTETRICIA
            [
                'name' => 'VILMA , ZORRILLA DELGADO',
                'email' => 'arjode@hotmail.com', 'password' => Hash::make('170800493'),
                'rol' => 'docente', 'telefono' => '992481516',  'programa_id' => '32'
            ],
            [
                'name' => 'LUISA  , ALCARRAZ  CURI',
                'email' => 'luisa_alcarraz@hotmail.com', 'password' => Hash::make('170800493'),
                'rol' => 'docente', 'telefono' => '966052156', 'programa_id' => '32'
            ],
            //ENFERMERÍA
            [
                'name' => 'IRIS, JARA   HUAYTA',
                'email' => 'bebepipiripi@hotmail.com', 'password' => Hash::make('170800470'),
                'rol' => 'docente', 'telefono' => '999030495', 'programa_id' => '33'
            ],
            //Admin
            [
<<<<<<< HEAD
                'name' => 'Abl',
                'email' => 'vilcabl10@gmail.com', 'password' => Hash::make('12345678/*'),
                'rol' => 'Admin', 'telefono' => '910268900', 'programa_id' => '1'
            ],
            [
                'name' => 'ING. teddy tafurg Guerra',
                'email' => 'ttafurg@gmail.com', 'password' => Hash::make('999099214'),
                'rol' => 'Admin', 'telefono' => '910268900', 'programa_id' => '1'
            ],
            [
                'name' => 'LUISA, ALCARRAZ  CURI',
                'email' => 'luisa.alcarraz@unsch.edu.pe', 'password' => Hash::make('966052156'),
=======
                'name' => 'abl',
                'email' => 'vilcabl10@gmail.com', 'password' => Hash::make('ultravd123/*'),
                'rol' => 'Admin', 'telefono' => '910268900', 'programa_id' => '1'
            ],
            [
                'name' => 'Teddy tafurg Guerra',
                'email' => 'ttafurg@gmail.com', 'password' => Hash::make('999099214'),
                'rol' => 'Admin', 'telefono' => '999099214', 'programa_id' => '1'
            ],
            [
                'name' => 'Dra Luisa Alcarraz Curi',
                'email' => 'luisa_alcarraz@hotmail.com', 'password' => Hash::make('966052156'),
>>>>>>> 9b174216991681f6bb0e3805d4ceb70fee5d88fb
                'rol' => 'Admin', 'telefono' => '966052156', 'programa_id' => '1'
            ],
            [
                'name' => 'Norma Gutierrez Valencia',
                'email' => 'luisa_alcarraz@hotmail.com', 'password' => Hash::make('992286094'),
                'rol' => 'Admin', 'telefono' => '992286094', 'programa_id' => '1'
            ],

        ]);
    }
}
