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
    use DatabaseMigrations;
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee(' ')
                    ->clickLink('SignIn')
                    ->pause(2000)
                    ->assertPathIs('/SignIn')
                    ->type('Email Address', 'min@min')
                    ->type('Password', 'min')
                    ->press('Login')
                    ->assertSee('Selamat Datang');
        });
    }
}
