<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PertanyaanDepresiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pertanyaan_depresi')->insert([
            ['id_pertanyaan_depresi' => 1, 'pertanyaan_depresi' => 'Kurang senang atau tertarik dalam kegiatan sehari-hari?'],
            ['id_pertanyaan_depresi' => 2, 'pertanyaan_depresi' => 'Merasa sedih, muram, dan putus asa?'],
            ['id_pertanyaan_depresi' => 3, 'pertanyaan_depresi' => 'Sulit tidur atau tidur nyenyak; atau terlalu banyak tidur?'],
            ['id_pertanyaan_depresi' => 4, 'pertanyaan_depresi' => 'Merasa lelah atau kekurangan energi?'],
            ['id_pertanyaan_depresi' => 5, 'pertanyaan_depresi' => 'Tidak napsu makan, atau terlalu banyak makan?'],
            ['id_pertanyaan_depresi' => 6, 'pertanyaan_depresi' => 'Merasa buruk tentang diri sendiri, atau merasa gagal atau mengecewakan diri atau keluargamu?'],
            ['id_pertanyaan_depresi' => 7, 'pertanyaan_depresi' => 'Kesulitan berkonsentrasi, seperti saat membaca koran atau menonton TV?'],
            ['id_pertanyaan_depresi' => 8, 'pertanyaan_depresi' => 'Bergerak atau berbicara dengan lambat hingga orang lain menyadarinya? Atau merasa kurang istirahat dan tidak bisa diam lebih dari biasanya?'],
            ['id_pertanyaan_depresi' => 9, 'pertanyaan_depresi' => 'Merasa lebih baik mati, atau berpikir ingin menyakiti diri sendiri?'],
        ]);
    }
}
