<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shedules extends Model
{
    use HasFactory;
    protected $fillable = [
        'day_week',
        'start_time',
        'end_time',
        'stylist_id',
        'branches_id'
    ];
}
