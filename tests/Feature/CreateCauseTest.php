<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class CreateCauseTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function guest_user_cant_create_causes(){

        $response = $this->post(route('causes.new'), [
            'rol' => '185.065',
            // fecha ingreso
            'complainant_name' => 'Nombre Denunciante',
            'denounced_name' => 'Nombre Denunciado',
            'primary_category' => 'Categoria Principal',
            'secondary_category' => 'Categoria Secundaria',
            'state' => 'Estado 0'
            //fecha de ultimo estado
        ]);

        $response->assertRedirect('login');
    }


    /** @test */
    public function an_authenticated_user_can_create_causes(){

        $this->withoutExceptionHandling();

        // 1.- Teniendo un usuario autenticado
        $user = factory(User::class)->create(['name' => 'Actuaria']);
        $this->actingAs($user);
        // 2.- Cuando hace un post request a causes
        $response = $this->post(route('causes.new'), [
            'rol' => '185.065',
            // fecha ingreso
            'complainant_name' => 'Nombre Denunciante',
            'denounced_name' => 'Nombre Denunciado',
            'primary_category' => 'Categoria Principal',
            'secondary_category' => 'Categoria Secundaria',
            'state' => 'Estado 0'
            //fecha de ultimo estado
        ]);

        $response->assertJson([
            'rol' => '185.065',
            // fecha ingreso
            'complainant_name' => 'Nombre Denunciante',
            'denounced_name' => 'Nombre Denunciado',
            'primary_category' => 'Categoria Principal',
            'secondary_category' => 'Categoria Secundaria',
            'state' => 'Estado 0'
            //fecha de ultimo estado
        ]);

        // 3.- Entonces veo una nueva causa en la bd
        $this->assertDatabaseHas('causes',[
            'user_id' => $user->id,
            'rol' => '185.065',
            // fecha ingreso
            'complainant_name' => 'Nombre Denunciante',
            'denounced_name' => 'Nombre Denunciado',
            'primary_category' => 'Categoria Principal',
            'secondary_category' => 'Categoria Secundaria',
            'state' => 'Estado 0'
            //fecha de ultimo estado
        ]);

    }
}
