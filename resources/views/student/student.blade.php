@extends('layouts.default')
<link rel="stylesheet" href="{{ asset('css/add.css') }}">
@section('content')
<div class="w-full overflow-x-auto">
    <div class="flex justify-center">
        <div class="w-full max-w-xl mb-4">
            <div class="relative w-full mr-6 focus-within:text-purple-500">
                <div class="absolute inset-y-0 flex items-center pl-2">
                    <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <input type="text" id="searchInput" oninput="search()" placeholder="search" class="w-full pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input" aria-label="Search" />
            </div>
        </div>
    </div>
    

    
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
        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800" id="globalStudent">
            @if($students->count()>0)
                @foreach($students as $student )
                    <tr class="text-gray-700 dark:text-gray-400" >
                        <td>{{ $startingIndex++ }}</td>
                    <td class="px-4 py-3">
                        <div class="flex items-center text-sm">
                        <!-- Avatar with inset shadow -->
                        <div class="relative hidden w-12 h-12 mr-3 rounded-full md:block">
                            <img class="object-cover w-full h-full rounded-full" src="storage/images/{{$student->image}}" alt="Student Image" loading="lazy"/>
                            <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                        </div>
                        
                        <div>
                            <p class="font-semibold">{{$student->name }}</p>
                            <p class="text-xs text-gray-600 dark:text-gray-400">{{$student->cin}}</p>
                        </div>
                        </div>
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{$student->phone}}
                    </td>
                    <td class="px-4 py-3 text-xs">
                        <span class="px-4 py-3 text-sm">
                            {{$student->email}}
                        </span>
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{$student->date_naissance}}
                    </td>
                    <td class="px-4 py-3">
                        <div class="flex items-center space-x-4 text-sm">
                            <a href="{{ route('editStudent', ['id' => $student->id]) }}"> <button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Edit">
                            <svg class="w-5 h-5" aria-hidden="true"  fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                            </svg>
                        </button></a>
                        <a href="{{route('students.show',['id'=>$student->id])}}">
                            <button data-target="#staticBackdrop" data-toggle="modal" class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Show">
                            <i class="fa-solid fa-eye"></i>
                        </button></a>
                    </td>
                        <td class="px-4 py-3">
                            <form action="{{ route('deleteStudent', ['id' => $student->id]) }}" method="POST">
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('searchInput');
        const globalStudent = document.getElementById('globalStudent');
        
        // Function to fetch all students from the server
        function fetchAllStudents() {
            const xhr = new XMLHttpRequest();
            xhr.open('GET', '/getStudent', true); 
            xhr.onload = function() {
                if (this.status === 200) {
                    const data = JSON.parse(this.responseText);
                    renderStudents(data.students);
                }
            };
            xhr.send();
        }
        
        function renderStudents(students) {
            globalStudent.innerHTML = ''; // Clear the table before rendering
            students.forEach(student => {
                const html = `
                            <tr class="text-gray-700 dark:text-gray-400">
                                <td>{{ $startingIndex++ }}</td>

                                <td class="px-4 py-3">
                                    <div class="flex items-center text-sm">
                                        <!-- Avatar with inset shadow -->
                                        <div class="relative hidden w-12 h-12 mr-3 rounded-full md:block">
                                            <img class="object-cover w-full h-full rounded-full" src="storage/images/${student.image}" alt="Student Image" loading="lazy"/>
                                            <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                        </div>
                                        
                                        <div>
                                            <p class="font-semibold">${student.name}</p>
                                            <p class="text-xs text-gray-600 dark:text-gray-400">${student.cin}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    ${student.phone}
                                </td>
                                <td class="px-4 py-3 text-xs">
                                    <span class="px-4 py-3 text-sm">
                                        ${student.email}
                                    </span>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    ${student.date_naissance}
                                </td>
                                <td class="px-4 py-3">
                                    <div class="flex items-center space-x-4 text-sm">
                                        <a href="{{ route('editStudent', ['id' => $student->id]) }}">
                                            <button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Edit">
                                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                                                </svg>
                                            </button>
                                        </a>

                                        <a href="{{ route('students.show', ['id' => $student->id]) }}">
                                            <button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Show">
                                                <i class="fa-solid fa-eye"></i>
                                            </button>
                                        </a>

                                        <form action="{{ route('deleteStudent', ['id' => $student->id]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Delete">
                                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </td>

                            </tr>
                        `;
                        globalStudent.innerHTML += html;
                    });
                }
                searchInput.addEventListener('input', function() {
            const inputValue = this.value.trim(); // Trim leading and trailing spaces
            if (inputValue === '') {
                // If input is empty, fetch all students
                fetchAllStudents();
            } else {
                // Otherwise, perform search
                const xhr = new XMLHttpRequest();
                xhr.open('GET', `/search?searchInput=${inputValue}`, true);
                xhr.onload = function() {
                    if (this.status === 200) {
                        const data = JSON.parse(this.responseText);
                        renderStudents(data.students);
                    }
                };
                xhr.send();
            }
        });

        fetchAllStudents();
    });
</script>



@endsection
