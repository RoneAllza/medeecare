<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\TesDepresi\PertanyaanDepresi;
use App\Models\TesStress\PertanyaanStress;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        //$this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(ArtikelTableSeeder::class);
        $this->call(NotificationSettingsSeeder::class);
        $this->call(DummyUsersSeeder::class);
        $this->call(DummyFeaturesSeeder::class);
        $this->call(PertanyaanStressSeeder::class);
        $this->call(PertanyaanDepresiSeeder::class);
        $this->call(PertanyaanStressSeeder::class);
        $this->call(GejalaSeeder::class);
    }
}
