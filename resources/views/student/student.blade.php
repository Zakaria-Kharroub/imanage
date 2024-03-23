@extends('layouts.default')
<link rel="stylesheet" href="css/add.css">
@section('content')
<div class="w-full overflow-x-auto">
    <table class="w-full whitespace-no-wrap">
      <thead>
        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
          <th class="px-4 py-3">id</th>
          <th class="px-4 py-3">Students</th>
          <th class="px-4 py-3">phone</th>
          <th class="px-4 py-3">email</th>
          <th class="px-4 py-3"> date of birth</th>
          <th><a href="{{route('createStudent')}}"><button class="add"> Add a Student</button></a></th>
        </tr>
      </thead>
      <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
        @if($students->count()>0)
            @foreach($students as $rs )
                <tr class="text-gray-700 dark:text-gray-400">
                    <td>{{ $startingIndex++ }}</td>
                <td class="px-4 py-3">
                    <div class="flex items-center text-sm">
                    <!-- Avatar with inset shadow -->
                    <div class="relative hidden w-12 h-12 mr-3 rounded-full md:block">
                        <img class="object-cover w-full h-full rounded-full" src="storage/images/{{$rs->image}}" alt="Student Image" loading="lazy"/>
                        <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                    </div>
                    
                    <div>
                        <p class="font-semibold">{{$rs->name }}</p>
                        <p class="text-xs text-gray-600 dark:text-gray-400">{{$rs->cin}}</p>
                    </div>
                    </div>
                </td>
                <td class="px-4 py-3 text-sm">
                    {{$rs->phone}}
                </td>
                <td class="px-4 py-3 text-xs">
                    <span class="px-4 py-3 text-sm">
                        {{$rs->email}}
                    </span>
                </td>
                <td class="px-4 py-3 text-sm">
                    {{$rs->date_naissance}}
                </td>
                <td class="px-4 py-3">
                    <div class="flex items-center space-x-4 text-sm">
                        <a href="{{ route('editStudent', ['id' => $rs->id]) }}"> <button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Edit">
                        <svg class="w-5 h-5" aria-hidden="true"  fill="currentColor" viewBox="0 0 20 20">
                        <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                        </svg>
                    </button></a>
                    <a href="{{route('students.show',['id'=>$rs->id])}}">
                        <button data-target="#staticBackdrop" data-toggle="modal" class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Show">
                        <i class="fa-solid fa-eye"></i>
                    </button></a>
                </td>
                    <td class="px-4 py-3">
                        <form action="{{ route('deleteStudent', ['id' => $rs->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <div class="flex items-center space-x-4 text-sm">
                                <button type="submit" class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Delete">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </td>
                    </div>
                
                </tr>
                

            @endforeach
        @else
        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
            <td class="px-4 py-3">
                Student Not Found
            </td>
        </tr>
        @endif
      </tbody>
    </table>
    
  </div>
  {{ $students->links() }}
@endsection
