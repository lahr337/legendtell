<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PowderCoating extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = 'powder_coating_id';
}
