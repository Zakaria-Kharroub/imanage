@extends('layouts.default')
<link rel="stylesheet" href="css/add.css">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS (optional, if you need Bootstrap JavaScript features) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>


@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 mb-4">
            <a href="{{ route('createClass') }}" class="inline-block px-2 py-1 text-xs font-semibold leading-4 text-white bg-blue-600 rounded-md  mr-2">Add a new Class</a>
        </div>
        @if($classes->count()>0)
            @foreach($classes as $rs)
                <div class="col-sm-4 mb-4">
                    <div class="p-4 bg-white rounded-lg shadow-md">
                        <img class="object-cover w-full h-48 rounded-md mb-4" src="class.jpg" alt="Class Image">

                        <h2 class="text-xl font-semibold">{{ $rs->name }}</h2>
                        <p class="text-sm text-gray-600">Teacher: {{ $rs->teacher->name }}</p>
                        <p class="text-sm text-gray-600">Formation: {{ $rs->formation->name }}</p>

                        <div class="mt-4">
                            <a href="{{ route('editClass', ['id' => $rs->id]) }}" class="inline-block px-4 py-2 text-sm font-semibold leading-5 text-white bg-purple-600 rounded-md mr-2">Edit</a>
                            <a href="{{ route('detailClass', ['id' => $rs->id]) }}" class="inline-block px-4 py-2 text-sm font-semibold leading-5 text-white bg-purple-600 rounded-md mr-2">Show</a>
                            <form action="{{ route('deleteClass', ['id' => $rs->id]) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="px-4 py-2 text-sm font-semibold leading-5 text-white bg-purple-600 rounded-md">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="col-sm-12">
                <div class="p-4 bg-white rounded-lg shadow-md">
                    <p class="text-sm font-semibold">No classes found.</p>
                </div>
            </div>
        @endif
    </div>
</div>

{{ $classes->links() }}
@endsection