<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class HomeTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group home
     */
    public function testHome001(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Ayo Cek Kesehatanmu!')
                    ->clickLink('Cek Stress')
                    ->assertPathIs('/SignIn');
        });
    }

    /**
     * A Dusk test example.
     * @group home
     */
    public function testHome002(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/SignIn')
                    ->type('email', 'mon@mon')
                    ->type('password', 'mon')
                    ->press('Login')
                    ->assertSee('Selamat Datang');
        });
    }
}
