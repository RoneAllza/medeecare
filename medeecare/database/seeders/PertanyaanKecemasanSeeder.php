<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PertanyaanKecemasanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pertanyaan_kecemasan')->insert([
            ['id_pertanyaan_kecemasan' => 1, 'pertanyaan_kecemasan' => 'Merasa gugup, cemas, atau gelisah?'],
            ['id_pertanyaan_kecemasan' => 2, 'pertanyaan_kecemasan' => 'Tidak dapat menghentikan atau mengontrol kekhawatiran?'],
            ['id_pertanyaan_kecemasan' => 3, 'pertanyaan_kecemasan' => 'Terlalu banyak mengkhawatirkan berbagai hal?'],
            ['id_pertanyaan_kecemasan' => 4, 'pertanyaan_kecemasan' => 'Sulit merasa santai?'],
            ['id_pertanyaan_kecemasan' => 5, 'pertanyaan_kecemasan' => 'Merasa kurang istirahat hingga sulit untuk diam?'],
            ['id_pertanyaan_kecemasan' => 6, 'pertanyaan_kecemasan' => 'Mudah kesal atau marah?'],
            ['id_pertanyaan_kecemasan' => 7, 'pertanyaan_kecemasan' => 'Merasa takut hal buruk akan terjadi?'],
        ]);
    }
}
