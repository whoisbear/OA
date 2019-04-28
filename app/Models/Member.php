<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use App\Notifications\ResetPasswordNotification;

class Member extends Authenticatable
{
    protected $table = 'members';
    protected $fillable = ['phone','name','password','avatar','remember_token','uuid','station_id','wages_template_id','diploma','status'];
    protected $hidden = ['password','remember_token'];

    public function station(){
        return $this->hasOne('App\Models\Station','id','station_id');
    }


}
