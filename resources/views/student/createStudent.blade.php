@extends('layouts.default')
<link rel="stylesheet" href="css/add.css">

@section('content')
  <div class="w-full max-w-[300px] bg-white rounded-lg shadow-md p-6">
    <h2 class="text-2xl font-bold text-gray-800 mb-4">Add a Student </h2>
    <form action="{{route('addStudent')}}" method="POST" class="flex flex-col">
      @csrf
        <input type="text" class="bg-gray-100 text-gray-800 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150" name="name" placeholder="First Name">
        <input type="email" class="bg-gray-100 text-gray-800 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150" name="email" placeholder="Email">
        <input type="number" class="bg-gray-100 text-gray-800 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150" name="phone" placeholder="Phone Number">
        <input type="text" class="bg-gray-100 text-gray-800 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150" name="cin" placeholder="CIN">
        <input type="date" class="bg-gray-100 text-gray-800 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150" name="date_naissance" placeholder="Date of Birth">
        <select name="classe_id" class="bg-gray-100 text-gray-800 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150">
          <option value="">Select class</option>
          @foreach($classes as $class)
              <option value="{{ $class->id }}">{{ $class->name }}</option>
          @endforeach
      </select>
        <button type="submit" class="button">ADD Student</button>
    </form>
  </div>
@endsection