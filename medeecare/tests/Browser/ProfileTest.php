<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ProfileTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group profile
     */
    public function testProfile001(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/SignIn')
                    ->type('email', 'mon@mon')
                    ->type('password', 'mon')
                    ->press('Login')
                    ->assertSee('Selamat Datang')
                    ->click('[name="profile-img"]')
                    ->clickLink('Your Profile')
                    ->assertSee('Edit Profile')
                    ->type('name', 'mon')
                    ->press('Edit')
                    ->assertSee('mon');
        });
    }

    /**
     * A Dusk test example.
     * @group profile
     */
    public function testProfile002(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->assertSee('Edit Profile')
                    ->attach('photo', __DIR__.'/files/testPhoto.png')
                    ->assertAttributeContains('.card-body img', 'src', 'testPhoto.png');
        });
    }

    /**
     * A Dusk test example.
     * @group profile
     */
    public function testProfile003(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->assertPathIs('/Profile');
        });
    }
}
