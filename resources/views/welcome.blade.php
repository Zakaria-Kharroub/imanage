@extends('layouts.default')

    @section('content') 
      <div class="container px-6 mx-auto grid">
        <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
          
          <!-- Card -->
          <div
            class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
          >
            <div
              class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500"
            >
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path
                  d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"
                ></path>
              </svg>
            </div>
            <div>
              <p
                class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
              >
                Total Students
              </p>
              <p
                class="text-lg font-semibold text-gray-700 dark:text-gray-200"
              >
              {{ $totalStudents }}
              </p>
            </div>
          </div>

          <!-- Card -->
          <div
            class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
          >
            <div
              class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500"
            >
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path
                  d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"
                ></path>
              </svg>
            </div>
            <div>
              <p
                class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
              >
                Total Teachers
              </p>
              <p
                class="text-lg font-semibold text-gray-700 dark:text-gray-200"
              >
              {{ $totalTeachers }}
              </p>
            </div>
          </div>
          
          <!-- Card -->
          <div
            class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
          >
            <div
              class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500"
            >
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path
                  fill-rule="evenodd"
                  d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                  clip-rule="evenodd"
                ></path>
              </svg>
            </div>
            <div>
              <p
                class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
              >
                total payments
              </p>
              <p
                class="text-lg font-semibold text-gray-700 dark:text-gray-200"
              >
              {{ $totalAmount ?? 0 }} DH
              </p>
            </div>
          </div>
          <!-- Card -->
          <div
            class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
          >
            <div
              class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500"
            >
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path
                  d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"
                ></path>
              </svg>
            </div>
            <div>
              <p
                class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
              >
                total formations
              </p>
              <p
                class="text-lg font-semibold text-gray-700 dark:text-gray-200"
              >
              {{ $totalFormations }}
              </p>
            </div>
            
          </div>
          <!-- Card -->
          <div
            class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
          >
            <div
              class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500"
            >
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path
                  d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"
                ></path>
              </svg>
            </div>
            <div>
              <p
                class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
              >
                total Classes
              </p>
              <p
                class="text-lg font-semibold text-gray-700 dark:text-gray-200"
              >
              {{ $totalClasses }}
              </p>
            </div>
            
          </div>
          <!-- Card -->
<div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
  <div class="p-3 mr-4 text-indigo-500 bg-indigo-100 rounded-full dark:text-indigo-100 dark:bg-indigo-500">
      <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
          <path fill-rule="evenodd" d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" clip-rule="evenodd"></path>
      </svg>
  </div>
  <div>
      <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
          Average Age of Students
      </p>
      <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
          {{ $averageAge }} years
      </p>
  </div>
</div>

          </div>
        </div>
        <div style="background-image: url('{{ asset('col (2).jpg') }}'); background-size: cover; background-position: center; height: 630px; position: relative;">
          <h1 style="text-align: center; color: rgb(255, 255, 255); font-weight: bold; font-size: 24px; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); padding: 20px; background-color: rgba(0, 0, 0, 0.5);">WYKEE est un centre de formation professionnelle innovant, Complète et 100% pratique avec des pédagogies d'apprentissage innovants, de plusieurs domaines clés tels que l'informatique, le football, le développement personnel.</h1>
        </div>

        
        <!-- Additional content below the background image -->
        <div class="grid gap-6 mb-8 md:grid-cols-2">
          <!-- Latest Student Table -->
          <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
              <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
                  Latest Student
              </h4>
              <table class="w-full whitespace-no-wrap">
                  <!-- Table headers -->
                  <!-- Modify these according to your student attributes -->
                  <thead>
                      <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                          <th class="px-4 py-3">ID</th>
                          <th class="px-4 py-3">Name</th>
                          <th class="px-4 py-3">Phone</th>
                          <th class="px-4 py-3">Email</th>
                          <th class="px-4 py-3">Date of Birth</th>
                      </tr>
                  </thead>
                  <!-- Table body -->
                  <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                      @if($lastStudent)
                          <tr class="text-gray-700 dark:text-gray-400">
                              <!-- Populate these with the corresponding student data -->
                              <td>{{ $lastStudent->id }}</td>
                              <td class="px-4 py-3">{{ $lastStudent->name }}</td>
                              <td class="px-4 py-3">{{ $lastStudent->phone }}</td>
                              <td class="px-4 py-3">{{ $lastStudent->email }}</td>
                              <td class="px-4 py-3">{{ $lastStudent->date_naissance }}</td>
                          </tr>
                      @else
                          <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                              <td class="px-4 py-3" colspan="5">Student Not Found</td>
                          </tr>
                      @endif
                  </tbody>
              </table>
          </div>
  
          <!-- Latest Teacher Table -->
          <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
              <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
                  Latest Teacher
              </h4>
              <table class="w-full whitespace-no-wrap">
                  <!-- Table headers -->
                  <!-- Modify these according to your teacher attributes -->
                  <thead>
                      <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                          <th class="px-4 py-3">ID</th>
                          <th class="px-4 py-3">Name</th>
                          <th class="px-4 py-3">Phone</th>
                          <th class="px-4 py-3">Email</th>
                          <th class="px-4 py-3">Date of Birth</th>
                      </tr>
                  </thead>
                  <!-- Table body -->
                  <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                      @if($lastTeacher)
                          <tr class="text-gray-700 dark:text-gray-400">
                              <!-- Populate these with the corresponding teacher data -->
                              <td>{{ $lastTeacher->id }}</td>
                              <td class="px-4 py-3">{{ $lastTeacher->name }}</td>
                              <td class="px-4 py-3">{{ $lastTeacher->phone }}</td>
                              <td class="px-4 py-3">{{ $lastTeacher->email }}</td>
                              <td class="px-4 py-3">{{ $lastTeacher->date_of_birth }}</td>
                          </tr>
                      @else
                          <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                              <td class="px-4 py-3" colspan="5">Teacher Not Found</td>
                          </tr>
                      @endif
                  </tbody>
              </table>
          </div>
        </div>

        <div class="grid gap-6 mb-8 md:grid-cols-2">
          <!-- Latest cLASS Table -->
          <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
              <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
                  Latest Class
              </h4>
              <table class="w-full whitespace-no-wrap">
                  <!-- Table headers -->
                  <!-- Modify these according to your cLASS attributes -->
                  <thead>
                      <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                          <th class="px-4 py-3">ID</th>
                          <th class="px-4 py-3">Name</th>
                          <th class="px-4 py-3">Teacher</th>
                          <th class="px-4 py-3">Formation</th>
                      </tr>
                  </thead>
                  <!-- Table body -->
                  <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                      @if($lastClass)
                          <tr class="text-gray-700 dark:text-gray-400">
                              <!-- Populate these with the corresponding student data -->
                              <td>{{ $lastClass->id }}</td>
                              <td class="px-4 py-3">{{ $lastClass->name }}</td>
                              <td class="px-4 py-3">{{ $lastClass->teacher->name }}</td>
                              <td class="px-4 py-3">{{ $lastClass->formation->name }}</td>
                          </tr>
                      @else
                          <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                              <td class="px-4 py-3" colspan="5">Class Not Found</td>
                          </tr>
                      @endif
                  </tbody>
              </table>
          </div>
  
          <!-- Latest Payment Table -->
          <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
              <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
                  Latest Payment
              </h4>
              <table class="w-full whitespace-no-wrap">
                  <!-- Table headers -->
                  <!-- Modify these according to your Payment attributes -->
                  <thead>
                      <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                          <th class="px-4 py-3">ID</th>
                          <th class="px-4 py-3">student</th>
                          <th class="px-4 py-3">amount</th>
                          <th class="px-4 py-3">date</th>
                          <th class="px-4 py-3">status </th>
                      </tr>
                  </thead>
                  <!-- Table body -->
                  <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                      @if($lastPayment)
                          <tr class="text-gray-700 dark:text-gray-400">
                              <!-- Populate these with the corresponding Payment data -->
                              <td>{{ $lastPayment->id }}</td>
                              <td class="px-4 py-3">{{ $lastPayment->student->name }}</td>
                              <td class="px-4 py-3">{{ $lastPayment->amount }}</td>
                              <td class="px-4 py-3">{{ $lastPayment->date }}</td>
                              
                              <td class="px-4 py-3">
                                @if($lastPayment->status == 'paid')
                                <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                    Paid
                                </span>
                            @elseif($lastPayment->status == 'unpaid')
                                <span class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700">
                                    Unpaid
                                </span>
                            @endif
                          </tr>
                      @else
                          <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                              <td class="px-4 py-3" colspan="5">Payment Not Found</td>
                          </tr>
                      @endif
                  </tbody>
              </table>
              
          </div>
          
      </div>
  </div>
  @endsection
