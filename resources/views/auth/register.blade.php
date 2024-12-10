<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HMS</title>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div class="flex h-screen w-full items-center justify-end p-10 bg-gray-900 bg-cover bg-no-repeat" style="background-image:url('https://wallpaperbat.com/img/645610-hd-hospital-wallpaper-top-free-hd-hospital-background.jpg')">
  <div class="rounded-xl bg-gray-800 bg-opacity-50 px-16 py-10 shadow-lg backdrop-blur-md max-sm:px-8">
    <div class="text-white">
      <div class="mb-8 flex flex-col items-center">
        <img src="https://companieslogo.com/img/orig/HMSY_BIG-cba14660.png?t=1600095233" width="150"  alt="" srcset="" />
        <!-- <h1 class="mb-2 text-2xl">Hospital Management System </h1> -->
        <span class="text-gray-300" m-"6">Enter Register Details </span>
      </div>
      <form action="{{route('register')}}" method="post">
        @csrf

        <div class="mb-4 text-lg">
          <input class="rounded-3xl border-none bg-yellow-400 bg-opacity-50 px-6 py-2 text-center text-inherit placeholder-slate-200 shadow-lg outline-none backdrop-blur-md" type="text" name="name" placeholder="Name" />
          @error('name')
            <div class="text-red-600 mb-8">{{ $message }}</div>
        @enderror
        </div>

        <div class="mb-4 text-lg">
          <input class="rounded-3xl border-none bg-yellow-400 bg-opacity-50 px-6 py-2 text-center text-inherit placeholder-slate-200 shadow-lg outline-none backdrop-blur-md" type="text" name="email" placeholder="id@email.com" />
          @error('email')
            <div class="text-red-600 mb-8">{{ $message }}</div>
        @enderror
        </div>

        <div class="mb-4 text-lg">
          <input class="rounded-3xl border-none bg-yellow-400 bg-opacity-50 px-6 py-2 text-center text-inherit placeholder-slate-200 shadow-lg outline-none backdrop-blur-md" type="text" name="address" placeholder="Enter Address" />
          @error('address')
            <div class="text-red-600 mb-8">{{ $message }}</div>
        @enderror
        </div>

        <div class="mb-4 text-lg">
          <input class="rounded-3xl border-none bg-yellow-400 bg-opacity-50 px-6 py-2 text-center text-inherit placeholder-slate-200 shadow-lg outline-none backdrop-blur-md" type="text" name="age" placeholder="Enter Age" />
          @error('age')
            <div class="text-red-600 mb-8">{{ $message }}</div>
        @enderror
        </div>

        <div class="mb-4 text-lg">
          <input class="rounded-3xl border-none bg-yellow-400 bg-opacity-50 px-6 py-2 text-center text-inherit placeholder-slate-200 shadow-lg outline-none backdrop-blur-md" type="text" name="contact_phone" placeholder="Enter your contact" />
          @error('contact_phone')
            <div class="text-red-600 mb-8">{{ $message }}</div>
        @enderror
        </div>

        <div class="mb-4 text-lg">
          <input class="rounded-3xl border-none bg-yellow-400 bg-opacity-50 px-6 py-2 text-center text-inherit placeholder-slate-200 shadow-lg outline-none backdrop-blur-md" type="Password" value="_('Password')" name="password" placeholder="******" />
          @error('password')
            <div class="text-red-600 mb-8">{{ $message }}</div>
        @enderror
        </div>

        <div class="mb-4 text-lg">
          <input class="rounded-3xl border-none bg-yellow-400 bg-opacity-50 px-6 py-2 text-center text-inherit placeholder-slate-200 shadow-lg outline-none backdrop-blur-md" type="Password" value="_('Confirm Password')" name="password_confirmation" placeholder="******" />
          @error('password_confirmation')
            <div class="text-red-600 mb-8">{{ $message }}</div>
        @enderror
        </div>

        <select name="gender" id="gender" class="rounded-3xl border-none bg-yellow-400 bg-opacity-50 px-6 py-2 text-center text-inherit placeholder-slate-200 shadow-lg outline-none backdrop-blur-md item-end" >
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select>

        <div class="mt-8 flex justify-center text-lg text-black">
          <button type="submit" class="rounded-3xl mx-4 bg-yellow-400 bg-opacity-50 px-10 py-2 text-white shadow-xl backdrop-blur-md transition-colors duration-300 hover:bg-yellow-600">Submit</button>        
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>