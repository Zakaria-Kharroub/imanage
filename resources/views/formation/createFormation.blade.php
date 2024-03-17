@extends('layouts.default')
<link rel="stylesheet" href="css/add.css">

@section('content')
    <div class="w-full max-w-[300px] bg-white rounded-lg shadow-md p-6">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Add a Formation </h2>
        <form action="{{ route('addFormation') }}" method="POST" class="flex flex-col">
            @csrf
            <input type="text" class="bg-gray-100 text-gray-800 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150" id="nom" name="name" placeholder="nom">
            <input type="text" class="bg-gray-100 text-gray-800 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150" id="nom" name="description" placeholder="description">
            <input type="text" class="bg-gray-100 text-gray-800 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150" id="duree" name="dure" placeholder="duree">
            <input type="date" class="bg-gray-100 text-gray-800 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150" id="dateDebut" name="datedebut" placeholder="dateDebut">
            
            <button type="submit" class="button">ADD Formation</button>
        </form>
    </div>

@endsection
