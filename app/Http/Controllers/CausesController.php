<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cause;

class CausesController extends Controller
{
    //
    public function new (){

        Cause::create([
            'body' => request('body'),
            'user_id' => auth()->id()
        ]);
    }
}
