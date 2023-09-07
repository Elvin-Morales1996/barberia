<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointments extends Model
{
    use HasFactory;
    protected $fillable = [
        'appointments_date',
        'clients_id',
        'stylists_id',
        'services_id',
        'drinks_id',
        'musics_id'
    ];
}
