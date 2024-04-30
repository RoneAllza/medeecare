<?php

namespace Database\Factories;

use App\Models\Artikel;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class DokterFactory extends Factory
{
    protected $model = Dokter::class;

    public function definition()
    {
        return [
            'dokter' => $this->faker->sentence(),
            'body' => $this->faker->paragraph(),
            'gambar'=>$this->faker->unique()->name,
        ];
    }
}
