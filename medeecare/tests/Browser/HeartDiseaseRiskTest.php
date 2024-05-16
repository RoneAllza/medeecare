<?php

// tests/Browser/HeartDiseaseRiskTest.php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\User;

class HeartDiseaseRiskTest extends DuskTestCase
{
    public function testUserCanSeeHeartDiseaseRiskForm()
    {
        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::find(1))
                    ->visit('/heart-disease-risk')
                    ->pause(2000) // Tambahkan jeda untuk memastikan halaman termuat
                    ->assertSee('Informasi Resiko Penyakit Jantung')
                    ->assertVisible('input[name="bmi"]');
        });
    }

    public function testUserCanCalculateHeartDiseaseRisk()
    {
        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::find(1))
                    ->visit('/heart-disease-risk')
                    ->pause(2000) // Tambahkan jeda untuk memastikan halaman termuat
                    ->type('bmi', '25')
                    ->press('Hitung Risiko')
                    ->pause(2000) // Tambahkan jeda untuk memastikan proses selesai
                    ->assertSee('Tingkat Resiko Penyakit Jantung Anda');
        });
    }
}
