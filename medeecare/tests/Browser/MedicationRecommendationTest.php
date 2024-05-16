<?php

// tests/Browser/MedicationRecommendationTest.php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\User;

class MedicationRecommendationTest extends DuskTestCase
{
    public function testUserCanSeeMedicationRecommendations()
    {
        $this->browse(function (Browser $browser) {
            $user = User::find(1);
            $user->risk_level = 'Tinggi';
            $user->save();

            $browser->loginAs($user)
                    ->visit('/medication-recommendation')
                    ->pause(2000) // Tambahkan jeda untuk memastikan halaman termuat
                    ->assertSee('Rekomendasi Obat-Obatan')
                    ->assertSee('Obat E')
                    ->assertSee('Obat F');
        });
    }

    public function testUserRedirectedIfNoRiskLevel()
    {
        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::find(1))
                    ->visit('/medication-recommendation')
                    ->pause(2000) // Tambahkan jeda untuk memastikan halaman termuat
                    ->assertPathIs('/heart-disease-risk')
                    ->assertSee('Silakan hitung risiko penyakit jantung Anda terlebih dahulu.');
        });
    }
}

