<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Maste extends Model
{
    //
    protected $fillable = ['title', 'note', 'designer_id', 'printer_id', 'country_id', 'repository_id',
                           'price', 'number', 'number_open', 'trade_flag', 'limit_flag', 'user_id'];

    public function Designer()
    {
        return $this->belongsTo('App\Models\Designer');
    }

    public function Printer()
    {
        return $this->belongsTo('App\Models\Printer');
    }

    public function Country()
    {
        return $this->belongsTo('App\Models\Country');
    }

    public function Repository()
    {
        return $this->belongsTo('App\Models\Repository');
    }

    public function User()
    {
        return $this->belongsTo('App\User');
    }

    //protected $dates = ['published_at'];
}
