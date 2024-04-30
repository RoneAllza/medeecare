<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


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
    }
}
