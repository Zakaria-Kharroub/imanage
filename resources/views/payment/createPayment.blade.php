@extends('layouts.default')
<link rel="stylesheet" href="css/add.css">

@section('content')
    <div class="w-full max-w-[300px] bg-white rounded-lg shadow-md p-6">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Add a Payment </h2>
        <form action="{{ route('addPayment') }}" method="POST" class="flex flex-col">

            @csrf
            <input type="text" class="bg-gray-100 text-gray-800 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150" id="amount" name="amount" placeholder="Amount">
            
            <input type="date" class="bg-gray-100 text-gray-800 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150" id="date" name="date" placeholder="Date">

            <!-- Select option for students -->
            <select class="bg-gray-100 text-gray-800 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150" id="student_id" name="student_id">
                <option value="">Select a Student</option>
                @foreach($students as $student)
                    <option value="{{ $student->id }}">{{ $student->name }}</option>
                @endforeach
            </select>
            
            <select class="bg-gray-100 text-gray-800 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150" id="formation_id" name="formation_id">
                <option value="">Select a Formation</option>
                @foreach($formations as $formation)
                    <option value="{{ $formation->id }}">{{ $formation->name }}</option>
                @endforeach
            </select>
            <select class="bg-gray-100 text-gray-800 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150" id="status" name="status">
                <option value="paid">Paid</option>
                <option value="unpaid">Unpaid</option>
            </select>
            

            <button type="submit" class="button">Add Payment</button>
        </form>
    </div>
@endsection
