<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_id',
        'formation_id',
        'amount',
        'date'
    ];

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id'); // Corrected foreign key
    }

    public function formation()
    {
        return $this->belongsTo(Formation::class, 'formation_id'); // Assuming you have a Formation model
    }
    public function showPayments()
{
    $payments = Payment::with('student')->get();
    return view('payment.payment', compact('payments'));
}
}
