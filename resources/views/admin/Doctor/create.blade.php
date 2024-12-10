@extends('layouts.app')
@section('content')
    <h1 class="text-3xl font-bold">Add Doctor</h1>
    <hr class="h-1 bg-red-500">

    <form action="{{ route('admin.doctor.store') }}" method="post" class="mt-5" enctype="multipart/form-data">
        <input type="text" placeholder="First name" name="name" class="block w-full my-4 p-2 rounded">
        @error('name')
            <div class="text-red-600 -mt-5">{{ $message }}</div>
        @enderror

        
        <input type="text" placeholder="Email" name="email" class="block w-full my-4 p-2 rounded">
        @error('email')
            <div class="text-red-600 -mt-5">{{ $message }}</div>
        @enderror


        <input type="text" placeholder="Address" name="address" class="block w-full my-4 p-2 rounded">
        @error('address')
            <div class="text-red-600 -mt-5">{{ $message }}</div>
        @enderror

        <input type="text" placeholder="phone" name="phone" class="block w-full my-4 p-2 rounded">
        @error('phone')
            <div class="text-red-600 -mt-5">{{ $message }}</div>
        @enderror

        <input type="password" placeholder="password" name="password" class="block w-full my-4 p-2 rounded">
        @error('password')
            <div class="text-red-600 -mt-5">{{ $message }}</div>
        @enderror


        <input type="password" placeholder="password_confirmation" name="password_confirmation" class="block w-full my-4 p-2 rounded">
        @error('password_confirmation')
            <div class="text-red-600 -mt-5">{{ $message }}</div>
        @enderror

        <select name="specialist" id="Specialty" class="block w-full my-4 p-2 rounded">
            <option value="Orthopedic surgeons">Orthopedic surgeons</option>
            <option value="Plastic surgeons">Plastic surgeons</option> 
            <option value="Cardiac surgeons">Cardiac surgeons</option>
            <option value="Cardiac surgeons">Dermatologists</option>
            <option value="Cardiac surgeons">Endocrinologists</option>
            <option value="Cardiac surgeons">Neurologists</option>
            <option value="Cardiac surgeons">Radiologists</option>
        </select>

        <div class="flex justify-center">
            <input type="submit" class="bg-blue-600 text-white px-4 mx-2 py-2 rounded">
            <a href="{{ route('admin.doctor.index') }}" class="bg-red-600 text-white px-10 mx-2 py-2 rounded">Exit</a>
        </div>
        @csrf
    </form>
@endsection
