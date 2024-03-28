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
            <svg height="24px" width="24px" viewBox="0 0 48 48" id="Layer_1" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
              <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
              <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
              <g id="SVGRepo_iconCarrier">
                  <style type="text/css"> .st0{fill:#010101;} </style>
                  <path class="st0" d="M41.5,7h-34C7.224,7,7,7.224,7,7.5v21.83c0,0.276,0.224,0.5,0.5,0.5h10.663l-2.605,8.918 c-0.144,0.492-0.087,1.01,0.16,1.459c0.246,0.449,0.653,0.775,1.145,0.917c0.177,0.052,0.356,0.076,0.533,0.076 c0.83,0,1.597-0.544,1.841-1.379l2.918-9.993h3.69l2.919,9.993c0.244,0.835,1.011,1.379,1.841,1.379 c0.176,0,0.355-0.024,0.533-0.076c0.492-0.143,0.899-0.468,1.145-0.917c0.247-0.449,0.304-0.967,0.16-1.459l-2.605-8.918H41.5 c0.276,0,0.5-0.224,0.5-0.5V7.5C42,7.224,41.776,7,41.5,7z M41,8v18.012H18.583V24c0-0.276-0.224-0.5-0.5-0.5H12 c-0.276,0-0.5,0.224-0.5,0.5v2.012H8V8H41z M17.583,26.012H12.5V24.5h5.083V26.012z M18.276,39.542 c-0.141,0.484-0.651,0.762-1.135,0.623c-0.235-0.068-0.429-0.224-0.547-0.439c-0.118-0.215-0.146-0.462-0.077-0.698l2.688-9.199 h1.908L18.276,39.542z M31.482,39.029c0.069,0.235,0.042,0.483-0.077,0.698c-0.118,0.215-0.312,0.371-0.547,0.439 c-0.484,0.137-0.995-0.139-1.135-0.623l-2.837-9.712h1.908L31.482,39.029z M29.17,28.83h-2.95h-4.44h-2.95H8v-1.818h4h6.083H41 v1.818H29.17z"></path>
              </g>
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
            <svg height="24px" width="24px" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-51.2 -51.2 614.40 614.40" xml:space="preserve" fill="#000000">
              <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
              <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="15.36"></g>
              <g id="SVGRepo_iconCarrier">
                  <style type="text/css"> .st0{fill:#000000;} </style>
                  <g>
                      <path class="st0" d="M81.44,116.972c23.206,0,42.007-18.817,42.007-42.008c0-23.215-18.801-42.016-42.007-42.016 c-23.216,0-42.016,18.801-42.016,42.016C39.424,98.155,58.224,116.972,81.44,116.972z"></path>
                      <path class="st0" d="M224.166,245.037c0-0.856-0.142-1.673-0.251-2.498l62.748-45.541c3.942-2.867,4.83-8.411,1.963-12.362 c-1.664-2.285-4.342-3.652-7.17-3.652c-1.877,0-3.667,0.589-5.191,1.689l-62.874,45.636c-2.341-1.068-4.909-1.704-7.65-1.704 h-34.178l-8.294-47.222c-4.555-23.811-14.112-42.51-34.468-42.51h-86.3C22.146,136.873,0,159.019,0,179.383v141.203 c0,10.178,8.246,18.432,18.424,18.432c5.011,0,0,0,12.864,0l7.005,120.424c0,10.83,8.788,19.61,19.618,19.61 c8.12,0,28.398,0,39.228,0c10.83,0,19.61-8.78,19.61-19.61l9.204-238.53h0.463l5.27,23.269c1.744,11.097,11.293,19.28,22.524,19.28 h51.534C215.92,263.461,224.166,255.215,224.166,245.037z M68.026,218.861v-67.123h24.126v67.123l-12.817,15.118L68.026,218.861z"></path>
                      <polygon class="st0" points="190.326,47.47 190.326,200.869 214.452,200.869 214.452,71.595 487.874,71.595 487.874,302.131 214.452,302.131 214.452,273.113 190.326,273.113 190.326,326.256 512,326.256 512,47.47 "></polygon>
                      <path class="st0" d="M311.81,388.597c0-18.801-15.235-34.029-34.028-34.029c-18.801,0-34.036,15.228-34.036,34.029 c0,18.785,15.235,34.028,34.036,34.028C296.574,422.625,311.81,407.381,311.81,388.597z"></path>
                      <path class="st0" d="M277.781,440.853c-24.259,0-44.866,15.919-52.782,38.199h105.565 C322.648,456.771,302.04,440.853,277.781,440.853z"></path>
                      <path class="st0" d="M458.573,388.597c0-18.801-15.235-34.029-34.028-34.029c-18.801,0-34.036,15.228-34.036,34.029 c0,18.785,15.235,34.028,34.036,34.028C443.338,422.625,458.573,407.381,458.573,388.597z"></path>
                      <path class="st0" d="M424.545,440.853c-24.259,0-44.866,15.919-52.783,38.199h105.565 C469.411,456.771,448.804,440.853,424.545,440.853z"></path>
                  </g>
              </g>
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
              <svg height="24px" width="24px" viewBox="-3 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" fill="#000000">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <title>stats</title>
                    <desc>Created with Sketch Beta.</desc>
                    <defs></defs>
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                        <g id="Icon-Set-Filled" sketch:type="MSLayerGroup" transform="translate(-314.000000, -673.000000)" fill="#000000">
                            <path d="M328,673 L326,673 C324.896,673 324,673.896 324,675 L324,703 C324,704.104 324.896,705 326,705 L328,705 C329.104,705 330,704.104 330,703 L330,675 C330,673.896 329.104,673 328,673 L328,673 Z M338,689 L336,689 C334.896,689 334,689.896 334,691 L334,703 C334,704.104 334.896,705 336,705 L338,705 C339.104,705 340,704.104 340,703 L340,691 C340,689.896 339.104,689 338,689 L338,689 Z M318,682 L316,682 C314.896,682 314,682.896 314,684 L314,703 C314,704.104 314.896,705 316,705 L318,705 C319.104,705 320,704.104 320,703 L320,684 C320,682.896 319.104,682 318,682 L318,682 Z" id="stats" sketch:type="MSShapeGroup"></path>
                        </g>
                    </g>
                </g>
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
                          <th class="px-4 py-3"></th>
                          <th class="px-4 py-3">Name</th>
                          <th class="px-4 py-3">Phone</th>
                          <th class="px-4 py-3">Email</th>
                      </tr>
                  </thead>
                  <!-- Table body -->
                  <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                      @if($lastStudent)
                          <tr class="text-gray-700 dark:text-gray-400">
                              <!-- Populate these with the corresponding student data -->
                              <td>{{ $lastStudent->id }}</td>
                              <td> <div class="relative hidden w-12 h-12 mr-3 rounded-full md:block">
                                <img class="object-cover w-full h-full rounded-full" src="storage/images/{{$lastStudent->image}}" alt="Student Image" loading="lazy"/>
                                <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                            </div></td>
                             
                              <td class="px-4 py-3">{{ $lastStudent->name }}</td>
                              <td class="px-4 py-3">{{ $lastStudent->phone }}</td>
                              <td class="px-4 py-3">{{ $lastStudent->email }}</td>
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
                          <th class="px-4 py-3"></th>
                          <th class="px-4 py-3">Name</th>
                          <th class="px-4 py-3">Phone</th>
                          <th class="px-4 py-3">Email</th>
                      </tr>
                  </thead>
                  <!-- Table body -->
                  <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                      @if($lastTeacher)
                          <tr class="text-gray-700 dark:text-gray-400">
                              <!-- Populate these with the corresponding teacher data -->
                              <td>{{ $lastTeacher->id }}</td>
                              <td> <div class="relative hidden w-12 h-12 mr-3 rounded-full md:block">
                                <img class="object-cover w-full h-full rounded-full" src="storage/images/{{$lastTeacher->image}}" alt="Student Image" loading="lazy"/>
                                <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                            </div></td>
                              <td class="px-4 py-3">{{ $lastTeacher->name }}</td>
                              <td class="px-4 py-3">{{ $lastTeacher->phone }}</td>
                              <td class="px-4 py-3">{{ $lastTeacher->email }}</td>
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
                          <th class="px-4 py-3"></th>
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
                              <td>   <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                <img class="object-cover w-full h-full rounded-full" src="class.jpg" alt="" loading="lazy"/>
                                <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                            </div></td>
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
                          <th class="px-4 py-3"></th>
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
                              <td>  <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                <img class="object-cover w-full h-full rounded-full" src="storage/images/{{$lastPayment->student?->image}}" alt="" loading="lazy"/>
                                <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                            </div></td>
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
      <div style="background-image: url('{{ asset('col (2).jpg') }}'); background-size: cover; background-position: center; height: 630px; position: relative;">
        <h1 style="text-align: center; color: rgb(255, 255, 255); font-weight: bold; font-size: 24px; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); padding: 20px; background-color: rgba(0, 0, 0, 0.5);">WYKEE est un centre de formation professionnelle innovant, Complète et 100% pratique avec des pédagogies d'apprentissage innovants, de plusieurs domaines clés tels que l'informatique, le football, le développement personnel.</h1>
      </div>
  </div>
  @endsection
