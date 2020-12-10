<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactCenter extends Model
{
    use HasFactory;
    protected $casts = [
        'record_day' => 'date',
        'avg_talk' => 'datetime',
        'avg_wait_pickup' => 'datetime',
        'avg_wait_hangup' => 'datetime',
        'peak_avg_wait_pickup' => 'datetime',
        'peak_avg_wait_hangup' => 'datetime'
    ]; 
}
