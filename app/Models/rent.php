<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rent extends Model
{
    use HasFactory;
    protected $fillable = [
        'date',
        'duedate',
        'amount',
        'status'
        
    ];
}
