<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tires extends Model
{
    use HasFactory;
    protected $table = 'tires';
    protected $guarded = [];
    protected $primaryKey = 'tire_id';
}
