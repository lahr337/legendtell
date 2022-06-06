<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GlassServices extends Model
{
    use HasFactory;
    protected $table = 'glass_services';
    protected $guarded = [];
    protected $primaryKey = 'glass_id';
}
