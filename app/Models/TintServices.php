<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TintServices extends Model
{
    use HasFactory;
    protected $table = 'tint_services';
    protected $guarded = [];
    protected $primaryKey = 'tint_id';
}
