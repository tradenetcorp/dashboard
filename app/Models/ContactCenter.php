<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactCenter extends Model
{
    use HasFactory;
    protected $casts = [
        'record_day' => 'date'
    ]; 
}
