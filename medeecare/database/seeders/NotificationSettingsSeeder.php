<?php

// database/seeders/NotificationSettingsSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\NotificationSetting;

class NotificationSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data dummy untuk diisi ke dalam tabel notification_settings
        $notificationSettings = [
            [
                'condition' => 'Diabetes',
                'threshold' => 150, // Contoh nilai ambang batas untuk diabetes
            ],
            [
                'condition' => 'Tekanan Darah Tinggi',
                'threshold' => 140, // Contoh nilai ambang batas untuk tekanan darah tinggi
            ],
            // Tambahkan data dummy lainnya sesuai kebutuhan
        ];

        // Masukkan data dummy ke dalam tabel notification_settings
        foreach ($notificationSettings as $setting) {
            NotificationSetting::create($setting);
        }
    }
}
