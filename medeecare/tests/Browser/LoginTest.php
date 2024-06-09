<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group login
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Ayo Cek')
                    ->clickLink('Sign in')
                    ->assertPathIs('/SignIn')
                    ->type('email', 'mon@mon')
                    ->type('password', 'mona')
                    ->press('Login')
                    ->assertSee('Selamat Datang');
        });
    }
}
