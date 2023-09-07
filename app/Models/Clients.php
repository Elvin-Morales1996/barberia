<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    use HasFactory;
    //se agregan los campos que tiene la tabla cliente
    protected $fillable = [
        'name',
        'email',
        'phone',
        'birthday_date'
    ];
}
