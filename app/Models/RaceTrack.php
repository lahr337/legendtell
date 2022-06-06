<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RaceTrack extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = 'race_track_id';
}
