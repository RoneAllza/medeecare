<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RujukanRSTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group rujukan
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee(' ')
                    ->press('Layanan')
                    ->select('Layanan','Rujuk Rumah Sakit')
                    ->assertPathIs('/Rujukrs')
                    ->select('Pilih Rumah Sakit Tujuan','Oetomo Hospital (Operasional : 24 jam)')
                    ->type('Email Address','bayu@gmail.com')
                    ->type('Nama Lengkap','Bayu asep')
                    ->type('Riwayat Penyakit','Gerd')
                    ->select('Keperluan Rujukan (wajib isi salah satu)','Penanganan Lanjutan')
                    ->clickLink('Submit Form')
                    ->assertPathIs('/Rujukrs/submit');
        });
    }
}
