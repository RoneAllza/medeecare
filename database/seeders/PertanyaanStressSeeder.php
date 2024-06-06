<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PertanyaanStressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pertanyaan_stress')->insert([
            ['id_pertanyaan_stress' => 1, 'pertanyaan_stress' => 'Merasa kesal karena sesuatu terjadi secara tidak terduga?'],
            ['id_pertanyaan_stress' => 2, 'pertanyaan_stress' => 'Merasa tidak dapat mengendalikan hal-hal penting dalam hidupmu?'],
            ['id_pertanyaan_stress' => 3, 'pertanyaan_stress' => 'Merasa gelisah dan stres?'],
            ['id_pertanyaan_stress' => 4, 'pertanyaan_stress' => 'Merasa yakin terhadap kemampuanmu dalam menangani masalah pribadi?'],
            ['id_pertanyaan_stress' => 5, 'pertanyaan_stress' => 'Merasa yakin bahwa segala sesuatu berjalan sesuai keinginanmu?'],
            ['id_pertanyaan_stress' => 6, 'pertanyaan_stress' => 'Menemukan bahwa kamu tidak dapat mengatasi segala hal yang harus dilakukan?'],
            ['id_pertanyaan_stress' => 7, 'pertanyaan_stress' => 'Mampu mengendalikan hal-hal yang mengganggu dalam hidupmu?'],
            ['id_pertanyaan_stress' => 8, 'pertanyaan_stress' => 'Merasa dapat mengendalikan hal-hal dalam hidupmu?'],
            ['id_pertanyaan_stress' => 9, 'pertanyaan_stress' => 'Merasa marah karena hal-hal terjadi di luar kendalimu?'],
            ['id_pertanyaan_stress' => 10, 'pertanyaan_stress' => 'Merasa kesulitanmu sangat banyak sehingga kamu tidak mampu mengatasinya?'],
        ]);
    }
}
