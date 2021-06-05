<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table='product';
    use HasFactory;

    public function staffRelation()
    {
        return $this->hasOne('App\Models\Staff','id','id_staff');
    }
    public function supplierRelation()
    {
        return $this->hasOne('App\Models\staff','id','id_supplier');
    }
    public function productTypeRelation()
    {
        return $this->hasOne('App\Models\productType','id','id_product_type');
    }

}
