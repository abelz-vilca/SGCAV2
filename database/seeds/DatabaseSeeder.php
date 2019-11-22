<?php

use App\Dimension;
use App\Factor;
use App\Estandar;
use App\Region;
use App\Facultad;
use App\Academico;
use App\Programa;
use App\Especialidad;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        /* $this->call(DimensionesTableSeeder::class);
        $this->call(FactoresTableSeeder::class);
        $this->call(EstandaresTableSeeder::class);
        $this->call(RegionesTableSeeder::class);*/
        $this->call([
            DimensionesTableSeeder::class,
            FactoresTableSeeder::class,
            EstandaresTableSeeder::class,
            RegionesTableSeeder::class,
            UniversidadesTableSeeder::class,
            FacultadesTableSeeder::class,
            AcademicosTableSeeder::class,
            ProgramasTableSeeder::class,
            EspecialidadesTableSeeder::class,
            // UsersTableSeeder::class,
            Estandar_programaTableSeeder::class,
            CriteriosTableSeeder::class,
            Criterio_estandarTableSeeder::class,
            UsuariosTableSeeder::class,
            // Estandares_ProgramasTableSeeder::class
            //DocentesTableSeeder::class,
        ]);
    }
}
