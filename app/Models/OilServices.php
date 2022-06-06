<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OilServices extends Model
{
    use HasFactory;
    protected $table = 'oil_services';
    protected $guarded = [];
    protected $primaryKey = 'oil_id';
}
