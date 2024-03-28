<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'amount',
        'student_id',
        'formation_id',
        'date',
        'status'
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
    
    public function formation()
    {
        return $this->belongsTo(Formation::class); 
    }
    public function showPayments()
{
    $payments = Payment::with('student')->get();
    return view('payment.payment', compact('payments'));
}
}
