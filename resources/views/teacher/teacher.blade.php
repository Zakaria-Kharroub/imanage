@extends('layouts.default')
<link rel="stylesheet" href="css/add.css">
@section('content')
<div class="w-full overflow-x-auto">
    <table class="w-full whitespace-no-wrap">
      <thead>
        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
          <th class="px-4 py-3">id</th>
          <th class="px-4 py-3">teachers</th>
          <th class="px-4 py-3">phone</th>
          <th class="px-4 py-3">email</th>
          <th class="px-4 py-3"> date of birth</th>
          <th><a href="{{route('createTeacher')}}"><button class="add"> Add teacher</button></a></th>
        </tr>
      </thead>
      <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
        @if($teachers->count()>0)
            @foreach($teachers as $rs )
                <tr class="text-gray-700 dark:text-gray-400">
                    <td>{{$loop->iteration}}</td>
                <td class="px-4 py-3">
                    <div class="flex items-center text-sm">
                    <!-- Avatar with inset shadow -->
                    <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                        <img class="object-cover w-full h-full rounded-full" src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="" loading="lazy"/>
                        <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                    </div>
                    <div>
                        <p class="font-semibold">{{$rs->nom }} {{$rs->prenom}}</p>
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
                    {{$rs->dateN}}
                </td>
                <td class="px-4 py-3">
                    <div class="flex items-center space-x-4 text-sm">
                   <a href="{{ route('teachers.edit', $rs->id ) }}"> <button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Edit">
                        <svg class="w-5 h-5" aria-hidden="true"  fill="currentColor" viewBox="0 0 20 20">
                        <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                        </svg>
                    </button></a>
                    <button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Delete">
                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"  viewBox="0 0 20 20">
                        <path
                            fill-rule="evenodd"
                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                            clip-rule="evenodd">
                        </path>
                        </svg>
                    </button>
                    </div>
                </td>
                </tr>
            @endforeach
        @else
        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
            <td class="px-4 py-3">
                teacher Not Found
            </td>
        </tr>
        @endif
      </tbody>
    </table>
  </div>
@endsection
