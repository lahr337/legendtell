<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarIssue extends Model
{
    use HasFactory;
    protected $table = 'car_issues';
    protected $guarded = [];
    protected $primaryKey = 'issue_id';
}
