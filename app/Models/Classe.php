<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'formation_id',
        'teacher_id'
    ];

    public function formation(){
        return $this->belongsTo(Formation::class);
    }

    public function teacher(){
        return $this->belongsTo(Teacher::class);
    }

    public function students(){
        return $this->belongsToMany(Student::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

}
