<?php

namespace App\Http\Controllers;

use App\Cause;
use Illuminate\Http\Request;

class CausesController extends Controller
{
    //
    public function new(){

        Cause::create(['body' => request('body')]);

    }
}

