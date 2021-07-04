<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\supplier;
use App\Models\promotion;
class product extends Model
{
    protected $table='product';
    use HasFactory;

    public function staffRelation()
    {
        return $this->hasOne('App\Models\staff','id','id_staff');
    }
    public function supplierRelation()
    {
        return $this->hasOne('App\Models\supplier','id','id_supplier');
    }
    public function promotionRelation()
    {
        return $this->hasOne('App\Models\promotion','id','id_promotion');
    }

    public function productTypeRelation()
    {
        return $this->hasOne('App\Models\productType','id','id_product_type');
    }
    public function image(){
        return $this->hasMany(productImage::class);
    }
}
