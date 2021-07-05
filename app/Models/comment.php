<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\rating;
class comment extends Model
{
    protected $table='comment';
    use HasFactory;

    public function userRelation(){
        return $this->belongsTo('App\Models\User','id_user','id');
    }
    public function staffRelation(){
        return $this->belongsTo('App\Models\staff','id_user','user');
    }
    public function customerRelation(){
        return $this->belongsTo('App\Models\customer','id_user','user');
    }
    public function RatingRelation(){
        return $this->hasOne('App\Models\rating','id_comment','id');
    }
}
