<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Maste extends Model
{
    //
    protected $fillable = ['title', 'note', 'designer_id', 'printer_id', 'country_id', 'repository_id', 'price', 'number', 'number_open', 'trade_flag', 'limit_flag'];

    public function designer()
    {
        return $this->belongsTo('App\\Models\Designer');
    }

    public function printer()
    {
        return $this->belongsTo('App\Models\Printer');
    }

    public function country()
    {
        return $this->belongsTo('App\Models\Country');
    }

    public function repository()
    {
        return $this->belongsTo('App\Models\Repository');
    }

    //protected $dates = ['published_at'];
}
