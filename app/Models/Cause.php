<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cause extends Model
{
    //
    protected $guarded = []; // no hacer Cause::create(request()->all()) "asignacion masiva"

}
