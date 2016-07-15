<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Printer extends Model
{
    //
    protected $fillable = ['name'];

    public function mastes()
    {
        return $this->hasMane('App\Models\Maste');
    }
}
