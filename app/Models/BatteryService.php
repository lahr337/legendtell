<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BatteryService extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = 'battery_service_id';
}
