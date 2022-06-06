<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExhaustServices extends Model
{
    use HasFactory;
    protected $table = 'exhaust_services';
    protected $guarded = [];
    protected $primaryKey = 'exhaust_id';
}
