<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'student',
        'formation',
        'amount',
        'date'
    ];
    public function student()
    {
        return $this->belongsTo(Student::class, 'id');
    }
    public function showPayments()
{
    $payments = Payment::with('student')->get();
    return view('payments.index', compact('payments'));
}
}
