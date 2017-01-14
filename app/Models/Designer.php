<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Designer extends Model
{
    //
    protected $fillable = ['name', 'user_id'];

    public function Maste()
    {
        return $this->hasMany('App\Models\Maste');
    }
}
