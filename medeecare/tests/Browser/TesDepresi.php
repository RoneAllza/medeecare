<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class DepressionTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testDepressionFormSubmission()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/tes-depresi') 
                    ->assertSee('Tes Depresi')
                    ->with('@form', function ($form) {
                        $questions = \App\Models\Pertanyaan::all();
                        foreach ($questions as $question) {
                            $form->radio('jawaban[' . $question->id_pertanyaan_depresi . ']', '0');
                        }
                    })
                    ->press('Submit Jawaban')
                    ->assertPathIs('/tes-depresi/store') 
                    ->assertSee('Terima kasih'); 
        });
    }
}
