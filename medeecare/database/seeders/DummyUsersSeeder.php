<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;


class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'min',
                'email' => 'min@min',
                'role' => 'Admin',
                'password' => bcrypt('min')
            ],
            [
                'name' => 'mon',
                'email' => 'mon@mon',
                'role' => 'Pasien',
                'password' => bcrypt('mon')
            ]
        ];

        foreach($userData as $key => $val){
            User::create($val);
        }

        // $faker = Faker::create();

        // // Membuat 20 pengguna tambahan
        // for ($i = 0; $i < 20; $i++) {
        //     $user = new User();
        //     $user->name = $faker->name;
        //     $user->email = $faker->unique()->safeEmail;
        //     $user->role = 'Pasien';
        //     $user->password = bcrypt('password');

        //     // Mengisi kolom personal_info, health_history, dan activity_report dengan data acak
        //     $user->personal_info = $faker->sentence();
        //     $user->health_history = $faker->sentence();
        //     $user->activity_report = $faker->sentence();

        //     $user->save();
        // }
    }
}
