<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ContactFormTest extends DuskTestCase
{
    /** 
        @test
     */
    public function testVisitContactPage()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/contato')
                    ->assertSee('Contato');
        });
    }

    public function testIfExistImputs(){
        $this->browse(function (Browser $browser) {
            $browser->visit('/contato')
                    ->assertSee('Nome completo')
                    ->assertSee('Email')
                    ->assertSee('Mensagem');
        });
    }

    public function testIfContactFormIsWorking(){
        $this->browse(function (Browser $browser) {
            $browser->visit('/contato')
                    ->type('name', 'danilo testador')
                    ->type('email', 'gui.a.weiss@hotmail.com')
                    ->type('message', 'valeu rapazes ta bombando.')
                    ->press('Enviar mensagem')
                    //->waitFor('.toast-message')
                    ->assertPathIs('/contato')
                    ->assertSee('Mensagem enviada');
        });
    }
}
