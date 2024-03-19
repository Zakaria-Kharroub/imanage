@extends('layouts.default')
<link rel="stylesheet" href="css/add.css">

@section('content')
    <div class="w-full max-w-[300px] bg-white rounded-lg shadow-md p-6">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Add a Class</h2>
        <form action="{{ route('addClass') }}" method="post">   
            @csrf
            <input type="text" name="name" placeholder="Nom" class="w-full bg-gray-100 text-gray-800 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150">
            
            <select name="teacher_id" class="w-full bg-gray-100 text-gray-800 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150">
                <option value="">Select Teacher</option>
                @foreach($teachers as $teacher)
                    <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                @endforeach
            </select>
        
            <select name="formation_id" class="w-full bg-gray-100 text-gray-800 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150">
                <option value="">Select Formation</option>
                @foreach($formations as $formation)
                    <option value="{{ $formation->id }}">{{ $formation->name }}</option>
                @endforeach
            </select>
        
            <button type="submit" class="button ">Add Class</button>
        </form>
    </div>
@endsection
