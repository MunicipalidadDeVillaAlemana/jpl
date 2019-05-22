<?php

namespace App\Http\Controllers;

use App\Models\Cause;
use Illuminate\Http\Request;

class CausesController extends Controller
{
    //
    public function new(){

        Cause::create(['body' => request('body')]);

    }
}

