<?php

use App\EstandarPrograma;

use Illuminate\Database\Seeder;

class Estandar_programaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = array(
            '1', '2', '3', '4', '5',  '6',  '7', '8', '9', '10',
            '11', '12', '13', '14', '15', '16', '17', '18',  '19',
            '20', '21', '22',  '23',  '24',  '25',   '26', '27',
            '28', '29',  '30', '31', '32', '33',  '34'

        );
        // $array1 = array(
        //     '1', '2', '3', '4', '5',  '6',  '7', '8', '9', '10',
        //     '11', '12', '13', '14', '15', '16', '17', '18',  '19',
        //     '20', '21', '22',  '23',  '24',  '25',   '26', '27',
        //     '28', '29',  '30', '31', '32', '33',  '34'

        // );
        $arraye = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

        // for ($i = 1; $i < 34; $i++) {
        //     for ($j = 1; $j < 28; $j++) {
        //         DB::table('estandar_programa')->insert([
        //             'calificacion' => $random = Arr::random($arraye),
        //             'estandar_id' => $array[$i - 1],
        //             'programa_id' => $array1[$j - 1],
        //         ]);
        //     }
        // }
        // $random = Arr::random($arraye);
        for ($i = 1; $i <= 34; $i++) {
            DB::table('estandar_programa')->insert([
                'calificacion' => $random = Arr::random($arraye),
                'estandar_id' => $array[$i - 1],
                'programa_id' => "1",
            ]);
        }
        // for ($i = 1; $i <= 34; $i++) {
        //     DB::table('estandar_programa')->insert([
        //         'calificacion' => $random = Arr::random($arraye),
        //         'estandar_id' => $array[$i - 1],
        //         'programa_id' => "2",
        //     ]);
        // }
        // for ($i = 1; $i <= 34; $i++) {
        //     DB::table('estandar_programa')->insert([
        //         'calificacion' => $random = Arr::random($arraye),
        //         'estandar_id' => $array[$i - 1],
        //         'programa_id' => "3",
        //     ]);
        // }
        // for ($i = 1; $i <= 34; $i++) {
        //     DB::table('estandar_programa')->insert([
        //         'calificacion' => $random = Arr::random($arraye),
        //         'estandar_id' => $array[$i - 1],
        //         'programa_id' => "4",
        //     ]);
        // }
        // for ($i = 1; $i <= 34; $i++) {
        //     DB::table('estandar_programa')->insert([
        //         'calificacion' => $random = Arr::random($arraye),
        //         'estandar_id' => $array[$i - 1],
        //         'programa_id' => "5",
        //     ]);
        // }
        // for ($i = 1; $i <= 34; $i++) {
        //     DB::table('estandar_programa')->insert([
        //         'calificacion' => $random = Arr::random($arraye),
        //         'estandar_id' => $array[$i - 1],
        //         'programa_id' => "6",
        //     ]);
        // }
        // for ($i = 1; $i <= 34; $i++) {
        //     DB::table('estandar_programa')->insert([
        //         'calificacion' => $random = Arr::random($arraye),
        //         'estandar_id' => $array[$i - 1],
        //         'programa_id' => "7",
        //     ]);
        // }
        // for ($i = 1; $i <= 34; $i++) {
        //     DB::table('estandar_programa')->insert([
        //         'calificacion' => $random = Arr::random($arraye),
        //         'estandar_id' => $array[$i - 1],
        //         'programa_id' => "8",
        //     ]);
        // }
        // for ($i = 1; $i <= 34; $i++) {
        //     DB::table('estandar_programa')->insert([
        //         'calificacion' => $random = Arr::random($arraye),
        //         'estandar_id' => $array[$i - 1],
        //         'programa_id' => "9",
        //     ]);
        // }
        // for ($i = 1; $i <= 34; $i++) {
        //     DB::table('estandar_programa')->insert([
        //         'calificacion' => $random = Arr::random($arraye),
        //         'estandar_id' => $array[$i - 1],
        //         'programa_id' => "10",
        //     ]);
        // }
        // for ($i = 1; $i <= 34; $i++) {
        //     DB::table('estandar_programa')->insert([
        //         'calificacion' => $random = Arr::random($arraye),
        //         'estandar_id' => $array[$i - 1],
        //         'programa_id' => "11",
        //     ]);
        // }
        // for ($i = 1; $i <= 34; $i++) {
        //     DB::table('estandar_programa')->insert([
        //         'calificacion' => $random = Arr::random($arraye),
        //         'estandar_id' => $array[$i - 1],
        //         'programa_id' => "12",
        //     ]);
        // }
        // for ($i = 1; $i <= 34; $i++) {
        //     DB::table('estandar_programa')->insert([
        //         'calificacion' => $random = Arr::random($arraye),
        //         'estandar_id' => $array[$i - 1],
        //         'programa_id' => "13",
        //     ]);
        // }
        // for ($i = 1; $i <= 34; $i++) {
        //     DB::table('estandar_programa')->insert([
        //         'calificacion' => $random = Arr::random($arraye),
        //         'estandar_id' => $array[$i - 1],
        //         'programa_id' => "14",
        //     ]);
        // }
        // for ($i = 1; $i <= 34; $i++) {
        //     DB::table('estandar_programa')->insert([
        //         'calificacion' => $random = Arr::random($arraye),
        //         'estandar_id' => $array[$i - 1],
        //         'programa_id' => "15",
        //     ]);
        // }
        // for ($i = 1; $i <= 34; $i++) {
        //     DB::table('estandar_programa')->insert([
        //         'calificacion' => $random = Arr::random($arraye),
        //         'estandar_id' => $array[$i - 1],
        //         'programa_id' => "16",
        //     ]);
        // }
        // for ($i = 1; $i <= 34; $i++) {
        //     DB::table('estandar_programa')->insert([
        //         'calificacion' => $random = Arr::random($arraye),
        //         'estandar_id' => $array[$i - 1],
        //         'programa_id' => "17",
        //     ]);
        // }
        // for ($i = 1; $i <= 34; $i++) {
        //     DB::table('estandar_programa')->insert([
        //         'calificacion' => $random = Arr::random($arraye),
        //         'estandar_id' => $array[$i - 1],
        //         'programa_id' => "18",
        //     ]);
        // }
        // for ($i = 1; $i <= 34; $i++) {
        //     DB::table('estandar_programa')->insert([
        //         'calificacion' => $random = Arr::random($arraye),
        //         'estandar_id' => $array[$i - 1],
        //         'programa_id' => "19",
        //     ]);
        // }
        // for ($i = 1; $i <= 34; $i++) {
        //     DB::table('estandar_programa')->insert([
        //         'calificacion' => $random = Arr::random($arraye),
        //         'estandar_id' => $array[$i - 1],
        //         'programa_id' => "20",
        //     ]);
        // }
        // for ($i = 1; $i <= 34; $i++) {
        //     DB::table('estandar_programa')->insert([
        //         'calificacion' => $random = Arr::random($arraye),
        //         'estandar_id' => $array[$i - 1],
        //         'programa_id' => "21",
        //     ]);
        // }
        // for ($i = 1; $i <= 34; $i++) {
        //     DB::table('estandar_programa')->insert([
        //         'calificacion' => $random = Arr::random($arraye),
        //         'estandar_id' => $array[$i - 1],
        //         'programa_id' => "22",
        //     ]);
        // }
        // for ($i = 1; $i <= 34; $i++) {
        //     DB::table('estandar_programa')->insert([
        //         'calificacion' => $random = Arr::random($arraye),
        //         'estandar_id' => $array[$i - 1],
        //         'programa_id' => "23",
        //     ]);
        // }
        // for ($i = 1; $i <= 34; $i++) {
        //     DB::table('estandar_programa')->insert([
        //         'calificacion' => $random = Arr::random($arraye),
        //         'estandar_id' => $array[$i - 1],
        //         'programa_id' => "24",
        //     ]);
        // }
        // for ($i = 1; $i <= 34; $i++) {
        //     DB::table('estandar_programa')->insert([
        //         'calificacion' => $random = Arr::random($arraye),
        //         'estandar_id' => $array[$i - 1],
        //         'programa_id' => "25",
        //     ]);
        // }
        // for ($i = 1; $i <= 34; $i++) {
        //     DB::table('estandar_programa')->insert([
        //         'calificacion' => $random = Arr::random($arraye),
        //         'estandar_id' => $array[$i - 1],
        //         'programa_id' => "26",
        //     ]);
        // }
        // for ($i = 1; $i <= 34; $i++) {
        //     DB::table('estandar_programa')->insert([
        //         'calificacion' => $random = Arr::random($arraye),
        //         'estandar_id' => $array[$i - 1],
        //         'programa_id' => "27",
        //     ]);
        // }
        // for ($i = 1; $i <= 34; $i++) {
        //     DB::table('estandar_programa')->insert([
        //         'calificacion' => $random = Arr::random($arraye),
        //         'estandar_id' => $array[$i - 1],
        //         'programa_id' => "28",
        //     ]);
        // }
        // //ESPECILIDADES XD
        // for ($i = 1; $i <= 34; $i++) {
        //     DB::table('estandar_programa')->insert([
        //         'calificacion' => $random = Arr::random($arraye),
        //         'estandar_id' => $array[$i - 1],
        //         'programa_id' => "29",
        //     ]);
        // }
        // for ($i = 1; $i <= 34; $i++) {
        //     DB::table('estandar_programa')->insert([
        //         'calificacion' => $random = Arr::random($arraye),
        //         'estandar_id' => $array[$i - 1],
        //         'programa_id' => "30",
        //     ]);
        // }
        // for ($i = 1; $i <= 34; $i++) {
        //     DB::table('estandar_programa')->insert([
        //         'calificacion' => $random = Arr::random($arraye),
        //         'estandar_id' => $array[$i - 1],
        //         'programa_id' => "31",
        //     ]);
        // }
        // for ($i = 1; $i <= 34; $i++) {
        //     DB::table('estandar_programa')->insert([
        //         'calificacion' => $random = Arr::random($arraye),
        //         'estandar_id' => $array[$i - 1],
        //         'programa_id' => "32",
        //     ]);
        // }

        // for ($i = 1; $i <= 34; $i++) {
        //     DB::table('estandar_programa')->insert([
        //         'calificacion' => $random = Arr::random($arraye),
        //         'estandar_id' => $array[$i - 1],
        //         'programa_id' => "33",
        //     ]);
        // }
    }
}
