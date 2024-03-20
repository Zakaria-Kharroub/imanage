<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'date_naissance',
        'cin',
        'image',
        'classe_id'
    ];

    public function classes(){
        return $this->belongsToMany(Classe::class);
    }

}
