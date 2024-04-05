<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Former extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'date',
        'duedate',
        'amount',
        'status'
        
    ];
}
