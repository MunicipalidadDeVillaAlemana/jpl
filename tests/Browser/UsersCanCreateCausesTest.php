<?php

namespace Tests\Browser;

use App\User;
use function PHPSTORM_META\type;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class UsersCanCreateCausesTest extends DuskTestCase
{
    use DatabaseMigrations;
    /**
     * A Dusk test example.
     *
     * @test
     * @throws \Throwable
     */
    public function users_can_create_causes()
    {
        $user = factory(User::class)->create();

        $this->browse(function (Browser $browser) use ($user) {
            $browser->loginAs($user)
                    ->visit('/')
                    ->type('rol', '185.065')
                    ->type('complainant_name', 'Nombre Denunciante')
                    ->type('denounced_name', 'Nombre Denunciado')
                    ->select('primary_category') //selecciona un valor RANDOM del 'primary_category', para forzar una seleccion ->select('primary_category', 'ley de transito');
                    ->select('secondary_category')
                    ->select('state')
                    ->press('#create-cause')

                    ->screenshot('after #create-cause')

                    ->assertSee('185.065')
                    ->assertSee('Nombre Denunciante')
                    ->assertSee('Nombre Denunciado')
            ;
        });
    }
}
