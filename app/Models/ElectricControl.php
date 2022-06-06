<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ElectricControl extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = 'electric_controls_id';
}
