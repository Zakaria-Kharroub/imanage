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
            <a href="{{ route('createFormation') }}" class="inline-block px-2 py-1 text-xs font-semibold leading-4 text-white bg-blue-600 rounded-md  mr-2">Add a new Formation</a>
        </div>
        @if($formations->count()>0)
            @foreach($formations as $rs)
                <div class="col-sm-4 mb-4">
                    <div class="p-4 bg-white rounded-lg shadow-md">
                        <img class="object-cover w-full h-48 rounded-md mb-4" src="formation.jpeg" alt="Class Image">

                        <h2 class="text-xl font-semibold">{{ $rs->name }}</h2>
                        <p class="text-sm text-gray-600">description: {{ $rs->description }}</p>
                        <p class="text-sm text-gray-600">duree: {{ $rs->dure }}</p>
                        <p class="text-sm text-gray-600">date debut: {{ $rs->datedebut }}</p>

                        <div class="mt-4">
                            <form action="{{ route('deleteFormation', ['id' => $rs->id]) }}" method="POST" class="inline-block">
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
                    <p class="text-sm font-semibold">No formations found.</p>
                </div>
            </div>
        @endif
    </div>
</div>

{{ $formations->links() }}
@endsection
