<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConciergeServices extends Model
{
    use HasFactory;
    protected $table = 'concierge_services';
    protected $guarded = [];
    protected $primaryKey = 'conc_id';
}
