@extends('layouts.default')
<link rel="stylesheet" href="css/add.css">

@section('content')
    <div class="w-full max-w-[300px] bg-white rounded-lg shadow-md p-6">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Add a Payment : </h2>
        <form action="{{ route('addPayment') }}" method="POST" class="flex flex-col">
            @csrf
            <input type="text" class="bg-gray-100 text-gray-800 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150" id="amount" name="amount" placeholder="amount">
            <input type="date" class="bg-gray-100 text-gray-800 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150" id="date" name="date" placeholder="date">


            <button type="submit" class="button">ADD Payment</button>
        </form>
    </div>

@endsection
