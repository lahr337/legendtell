<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BreakServices extends Model
{
    use HasFactory;
    protected $table = 'break_services';
    protected $guarded = [];
    protected $primaryKey = 'break_id';
}
