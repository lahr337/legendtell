<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomBuildBody extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = 'custom_build_body_id';
}
