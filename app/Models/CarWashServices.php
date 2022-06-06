<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarWashServices extends Model
{
    use HasFactory;
    protected $table = 'car_wash_services';
    protected $guarded = [];
    protected $primaryKey = 'wash_id';
}
