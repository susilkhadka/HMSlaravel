<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>userprofile</title>
     <!-- Scripts -->
     @vite(['resources/css/app.css', 'resources/js/app.js'])

     <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://kit.fontawesome.com/26ffe6816b.js" crossorigin="anonymous"></script>


     <!-- Datatabale Scripts -->
     <link rel="stylesheet" href="{{asset('datatable/datatables.css')}}">
     <script src="{{asset('datatable/jquery.js')}}"></script>
     <script src="{{asset('datatable/datatables.js')}}"></script>

</head>

<body>

     <body class="font-sans antialiased">
          <div class="flex">
               <div class="w-56 bg-gray-200 h-screen ">
                    <img src="https://companieslogo.com/img/orig/HMSY_BIG-cba14660.png?t=1600095233" alt="" class="bg-white w-10/12 mx-auto mt-6 rounded-lg shadow">
                    <div class="mt-5">
                         <a href="{{route('userprofile')}}" class="px-4 py-2 hover:bg-gray-300 block border-b border-gray-300 border-l-blue-300 border-l-2 ml-2 mt-1"><i class="fa-solid fa-gauge-high"></i> Dashboard</a>
                         <a href="{{route('admin.appointment.myappointment')}}" class="px-4 py-2 hover:bg-gray-300 block border-b border-gray-300 border-l-blue-300 border-l-2 ml-2 mt-1"><i class="fa-solid fa-calendar-check"></i> Appointment</a>
                         <a href="{{route('user.indexuser')}}" class="px-4 py-2 hover:bg-gray-300 block border-b border-gray-300 border-l-blue-300 border-l-2 ml-2 mt-1"><i class="fa-solid fa-blog"></i> Profile</a>
                         <!-- logout button -->
                         <form action="{{route('logout')}}" method="post" class="px-4 py-2 hover:bg-gray-300 block border-b border-gray-300 border-l-blue-300 border-l-2 ml-2 ml-2">
                              <button type="submit" class="w-full text-left"><i class="fa-solid fa-right-from-bracket"></i>logout</button>
                              @csrf
                         </form>
                    </div>
               </div>
               <div class="flex-1 p-4">
                    @yield('content')
               </div>
          </div>
     </body>

</html>