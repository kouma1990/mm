<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function Maste()
    {
        return $this->hasMany('App\Models\Maste');
    }

    public function Designer()
    {
        return $this->hasMany('App\Models\Designer');
    }

    public function Printer()
    {
        return $this->hasMany('App\Models\Printer');
    }

    public function Country()
    {
        return $this->hasMany('App\Models\Country');
    }

    public function Repository()
    {
        return $this->hasMany('App\Models\Repository');
    }
}
