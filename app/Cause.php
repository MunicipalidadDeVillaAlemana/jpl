<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cause extends Model
{
    //
    protected $guarded = []; // No hacer un request()->all() .. asignacion masiva
}
