<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class TestArtikelCovid extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group articlecovid
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee(' ')
                    ->clickLink('Artikel')
                    ->assertSee('Cegah');
        });
    }
}