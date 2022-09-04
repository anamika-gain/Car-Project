<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'brand_id','model_id','car_name','price','description'
      
    ];

    public function brand()
    {
    	return $this->hasOne(Brand::class);
    }
    public function car_model()
    {
    	return $this->hasOne(CarModel::class);
    }
}
