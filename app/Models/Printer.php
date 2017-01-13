<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Printer extends Model
{
    //
    protected $fillable = ['name'];

    public function Maste()
    {
        return $this->hasMany('App\Models\Maste');
    }
}
