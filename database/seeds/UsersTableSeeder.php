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
                'programa_id' => '1'

            ],

            [
                'nombres' => 'RUBEN ALFREDO MENESES ROJAS',
                'email' => 'ruben.meneses@unsch.edu.pe',
                'password' => Hash::make('170800468'),
                'programa_id' => '1'

            ],
            //INGENIERÍA AGRÍCOLA
            [
                'nombres' => 'EFRAIN CHUCHON PRADO',
                'email' => 'echpunsch@gmail.com',
                'password' => Hash::make('170800492'),
                'programa_id' => '2'
            ]
        ]);
    }
}
