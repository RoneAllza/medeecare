<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LogoutTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group logout
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/SignIn')
                    ->type('email', 'mon@mon')
                    ->type('password', 'mon')
                    ->press('Login')
                    ->assertSee('Selamat Datang')
                    ->click('[name="profile-img"]')
                    ->clickLink('Sign out')
                    ->assertPathIs('/');
        });
    }
}
