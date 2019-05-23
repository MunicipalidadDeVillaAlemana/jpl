<?php

namespace App\Http\Controllers;

use App\Models\Cause;
use Illuminate\Http\Request;

class CausesController extends Controller
{
    //
    public function new(){

        $cause = Cause::create([
            'body' => request('body'),
            'user_id' => auth()->id()
        
        ]);

        return response()->json(['body'=> $cause->body]);
    }
}

