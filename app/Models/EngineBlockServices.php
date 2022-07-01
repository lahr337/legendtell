<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EngineBlockServices extends Model
{
    use HasFactory;
    protected $table = 'engine_block_services';
    protected $guarded = [];
    protected $primaryKey = 'engine_id';

    public function shop_service()
    {
        return $this->hasOne(ShopServices::class,'service_id','service_id');
    }

    public function shop_user()
    {
        return $this->hasOne(User::class,'id','user_id');
    }

    public function car_user()
    {
       return $this->hasOne(Car::class,'id','car_id');
    }
}
