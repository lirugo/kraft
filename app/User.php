<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laratrust\Traits\LaratrustUserTrait;
use Cmgmyr\Messenger\Traits\Messagable;

class User extends Authenticatable
{
    use Notifiable;
    use LaratrustUserTrait;
    use Messagable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function Auth()
    {
    }

    public function getcompany()
    {
        return $this->hasOne('App\Company');
    }

    public function getDistributors(){
        return $this->hasMany(Company::class, 'rmid', 'id');
    }

    public function objects()
    {
        return $this->hasMany('App\Object', 'creatorid');
    }

    public function msgs(){
        return $this->hasMany(Msg::class);
    }

    public function msgsobject(){
        return $this->hasMany(MsgObject::class);
    }

    public function hasTwoFactorAuthenticationEnabled(){
        return $this->two_factor_type != 'off';
    }

    public function hasSmsTwoFactorAuthenticationEnabled(){
        return $this->two_factor_type == 'sms';
    }

    public function hasTwoFactorType($type){
        return $this->two_factor_type == $type;
    }
}
