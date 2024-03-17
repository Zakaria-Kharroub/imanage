<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Classe;

class Formation extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'dure',
        'datedebut'
        
    ];
    
    public function classes(){
        return $this->hasMany(Classe::class);
    }
}
