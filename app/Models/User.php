<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
/* use Spatie\Permission\Traits\HasRoles; */
use App\Models\staff;
use Spatie\Permission\Traits\HasRoles;
use App\Models\comment;
use App\Models\hasRole;
class User extends Authenticatable
{
    use HasFactory,Notifiable,HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guard_name = 'web';
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function staffRelation()
    {
        return $this->belongsTo('App\Models\staff','id','user');
    }

    public function userRelation(){
        return $this->hasOne('App\Models\customer','id','user');
    }

    public function commentRealation(){
        return $this->hasMany('App\Models\comment','id','id_user');
    }
    public function roleRelation(){
        return $this->hasOne('App\Models\hasRole','id','model_id');
    }
}
