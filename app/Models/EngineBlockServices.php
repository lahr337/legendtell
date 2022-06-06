<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EngineBlockServices extends Model
{
    use HasFactory;
    protected $table = 'engine_block_services';
    protected $guarded = [];
    protected $primaryKey = 'engine_id';
}
