<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class SearchTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group search
     */
    public function testSearch001(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/SignIn')
                    ->type('email', 'mon@mon')
                    ->type('password', 'mon')
                    ->press('Login')
                    ->assertSee('Selamat Datang')
                    ->type('search', 'kal')
                    ->pause(1000)
                    ->assertSee('Kalkulator BMI');
        });
    }

    /**
     * A Dusk test example.
     * @group search
     */
    public function testSearch002(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->type('search', 'awikwok')
                    ->pause(1000)
                    ->assertSee('No results found');
        });
    }
}
