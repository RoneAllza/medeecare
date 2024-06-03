<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegistrasiTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testRegistrasi(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/regis-proses')
                    ->assertSee('Please register!') // Memastikan teks 'Please register!' ada di halaman
                    ->clickLink('Registrasi')
                    ->type('name', 'jeon jungkook') // Nama field sesuai dengan 'name'
                    ->type('email', 'jungkook@gmail.com')
                    ->type('password', 'jungkook97')
                    ->press('Registrasi') // Tombol dengan teks 'Registrasi'
                    ->pause(1000) // Pause 1 detik setelah menekan tombol
                    ->assertPathIs('/SignIn'); // Pastikan halaman berubah menjadi '/SignIn'
        });
    }
}
