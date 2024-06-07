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
                'name' => 'Cek Mental',
                'desc' => 'lalala',
                'link' => '/',
                'photo' => 'doctor.png'
            ],
            [
                'name' => 'Cek Stress',
                'desc' => 'dadada',
                'link' => '/',
                'photo' => 'doctor.png'
            ],
            [
                'name' => 'Kalkulator BMI',
                'desc' => 'cacaca',
                'link' => '/',
                'photo' => 'doctor.png'
            ]
        ];

        foreach($featureData as $key => $val){
            Feature::create($val);
        }
    }
}
