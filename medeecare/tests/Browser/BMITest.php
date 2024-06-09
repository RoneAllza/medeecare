<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class BMITest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group bmi
     */
    public function testBMI001(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/SignIn')
                    ->type('email', 'mon@mon')
                    ->type('password', 'mon')
                    ->press('Login')
                    ->assertSee('Selamat Datang')
                    ->visit('/CalculatorBMI')
                    ->assertSee('Kalkulator BMI')
                    ->type('tb', 160)
                    ->type('bb', 64)
                    ->press('Hitung')
                    ->assertPathIs('/CalculatorBMI-Result');
        });
    }

    /**
     * A Dusk test example.
     * @group bmi
     */
    public function testBMI002(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/CalculatorBMI')
                    ->type('bb', 19)
                    ->press('Hitung')
                    ->assertSee('must be at least 20');
        });
    }

    /**
     * A Dusk test example.
     * @group bmi
     */
    public function testBMI003(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/CalculatorBMI')
                    ->type('tb', '')
                    ->type('bb', '')
                    ->press('Hitung')
                    ->assertSee('required');
        });
    }
}
