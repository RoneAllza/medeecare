<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoryFactory extends Factory
{
    protected $model = Category::class;

    public function definition()
    {
        return [
            'nama_kategori' => $this->faker->name,
            'slug' => Str::slug($this->faker->unique()->name, '-'),
        ];
    }
}
