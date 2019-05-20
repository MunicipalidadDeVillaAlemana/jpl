<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CausesTest extends TestCase
{
    /**
     * 
     */
    use RefreshDatabase;


    public function test_an_authtenticated_user_can_create_a_new_cause()
    {
        $this->withoutExceptionHandling();

        // 1. Teniendo un usuario autenticado
        $user = factory(User::class)->create(['name' => 'Actuaria']);
        $this->actingAs($user);

        // 2. Cuando hace un post request al formulario de causas
        $this->post(route('causes.new'), ['body' => 'Nueva Causa']);

        // 3. Entonces veo una nueva causa en la BD
        $this->assertDatabaseHas('causes', [
            'body' => 'Nueva Causa'
        ]);

    }
}

