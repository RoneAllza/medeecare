<?php

namespace Database\Seeders;

use App\Models\Feature;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyFeaturesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $featureData = [
            [
                'name' => 'Informasi Penyakit',
                'desc' => 'lalala',
                'link' => '/infopenyakit',
                'photo' => 'doctor.png'
            ],
            [
                'name' => 'Forum Diskusi Kesehatan',
                'desc' => 'dadada',
                'link' => '/forum',
                'photo' => 'doctor.png'
            ],
            [
                'name' => 'Test Covid 19',
                'desc' => 'cacaca',
                'link' => '/TestCovid',
                'photo' => 'doctor.png'
            ],
            [
                'name' => 'Tes Gangguan Kecemasan',
                'desc' => 'lalala',
                'link' => '/tes-kecemasan',
                'photo' => 'doctor.png'
            ],
            [
                'name' => 'Resiko Jantung',
                'desc' => 'dadada',
                'link' => '/heart-disease-risk',
                'photo' => 'doctor.png'
            ],
            [
                'name' => 'Rujukan Rumah Sakit',
                'desc' => 'cacaca',
                'link' => '/',
                'photo' => 'doctor.png'
            ],
            [
                'name' => 'Cek Kesehatan Kulit',
                'desc' => 'lalala',
                'link' => '/homepage-kesehatankulit',
                'photo' => 'doctor.png'
            ],
            [
                'name' => 'Tes Depresi',
                'desc' => 'dadada',
                'link' => '/tes-depresi',
                'photo' => 'doctor.png'
            ],
            [
                'name' => 'Resiko Diabetes',
                'desc' => 'cacaca',
                'link' => '/diabetes-risk',
                'photo' => 'doctor.png'
            ],
            [
                'name' => 'Rekomendasi Obat',
                'desc' => 'lalala',
                'link' => '/obat',
                'photo' => 'doctor.png'
            ],
            [
                'name' => 'Reservasi Nomor Antrian',
                'desc' => 'dadada',
                'link' => '/reservasi',
                'photo' => 'doctor.png'
            ],
            [
                'name' => 'Kalkulator BMI',
                'desc' => 'lalala',
                'link' => '/CalculatorBMI',
                'photo' => 'doctor.png'
            ],
        ];

        foreach($featureData as $key => $val){
            Feature::create($val);
        }
    }
}
