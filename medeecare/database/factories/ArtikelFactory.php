<?php

namespace Database\Factories;

use App\Models\Artikel;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ArtikelFactory extends Factory
{
    protected $model = Artikel::class;

    public function definition()
    {
        return [
            'judul' => $this->faker->sentence(),
            'body' => $this->faker->paragraph(),
            'gambar'=>$this->faker->unique()->name,
            'categories_id'=>function(){
                return Category::all()->random();
            }
        ];
    }
}
