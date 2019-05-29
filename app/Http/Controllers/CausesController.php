<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cause;

class CausesController extends Controller
{
    //
    public function new (){

        $cause = Cause::create([
            'body' => request('body'),
            'user_id' => auth()->id()
        ]);

        return response()->json(['body' => $cause->body]);
    }
}
