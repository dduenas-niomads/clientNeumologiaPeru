<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    const TABLE_NAME = 'schedules';
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'date', 'hour', 'duration', 'capacity' 
    ];
}