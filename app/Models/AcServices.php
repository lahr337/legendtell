<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcServices extends Model
{
    use HasFactory;
    protected $table = 'ac_services';
    protected $guarded = [];
    protected $primaryKey = 'ac_id';
}
