<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vinyl extends Model
{
    use HasFactory;
    protected $table = 'vinyls';
    protected $guarded = [];
    protected $primaryKey = 'vinyl_id';
}