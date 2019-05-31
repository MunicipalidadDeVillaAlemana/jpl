<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cause;

class CausesController extends Controller
{
    //
    public function new (){

        $cause = Cause::create([
            'rol' => request('rol'),
            'user_id' => auth()->id(),
            'complainant_name' => request('complainant_name'),
            'denounced_name' => request('denounced_name'),
            'primary_category' => request('primary_category'),
            'secondary_category' => request('secondary_category'),
            'state' => request('state'),
        ]);

        return response()->json([
            'rol' => $cause->rol,
            'complainant_name' => 'Nombre Denunciante',
            'denounced_name' => 'Nombre Denunciado',
            'primary_category' => 'Categoria Principal',
            'secondary_category' => 'Categoria Secundaria',
            'state' => 'Estado 0',
            ]);
    }
}
