<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stylists extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'branches_id'
    ];
}
