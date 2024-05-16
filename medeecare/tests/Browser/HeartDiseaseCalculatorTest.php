<?php

// tests/Browser/HeartDiseaseCalculatorTest.php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\User;

class HeartDiseaseCalculatorTest extends DuskTestCase
{
    public function testUserCanSeeHeartDiseaseCalculatorForm()
    {
        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::find(1))
                    ->visit('/heart-disease-calculator')
                    ->pause(2000) // Tambahkan jeda untuk memastikan halaman termuat
                    ->assertSee('Kalkulator Resiko Penyakit Jantung')
                    ->assertVisible('input[name="age"]')
                    ->assertVisible('select[name="smoking"]')
                    ->assertVisible('select[name="family_history"]')
                    ->assertVisible('input[name="blood_pressure"]');
        });
    }

    public function testUserCanCalculateHeartDiseaseRiskScore()
    {
        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::find(1))
                    ->visit('/heart-disease-calculator')
                    ->pause(2000) // Tambahkan jeda untuk memastikan halaman termuat
                    ->type('age', '45')
                    ->select('smoking', '1')
                    ->select('family_history', '1')
                    ->type('blood_pressure', '130')
                    ->press('Hitung Risiko')
                    ->pause(2000) // Tambahkan jeda untuk memastikan proses selesai
                    ->assertSee('Skor risiko penyakit jantung Anda');
        });
    }
}


