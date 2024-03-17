@extends('layouts.default')
<link rel="stylesheet" href="css/add.css">

@section('content')
  <div class="w-full max-w-[300px] bg-white rounded-lg shadow-md p-6">
    <h2 class="text-2xl font-bold text-gray-800 mb-4">Add a teachers </h2>
    <form action="{{ route('teachers.update',$teachers->id) }}" method="POST" class="flex flex-col">
        @method('PUT')
      @csrf
        <input type="text" class="bg-gray-100 text-gray-800 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150" name="nom" placeholder="First Name" value="{{$teachers->nom}}" >
        <input type="text" class="bg-gray-100 text-gray-800 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150" name="prenom" placeholder="Last Name">
        <input type="email" class="bg-gray-100 text-gray-800 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150" name="email" placeholder="Email">
        <input type="number" class="bg-gray-100 text-gray-800 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150" name="phone" placeholder="Phone Number">
        <input type="text" class="bg-gray-100 text-gray-800 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150" name="cin" placeholder="CIN">
        <input type="date" class="bg-gray-100 text-gray-800 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150" name="dateN" placeholder="Date of Birth">
        <button type="submit" class="button">Edit teachers</button>
    </form>
  </div>
@endsection