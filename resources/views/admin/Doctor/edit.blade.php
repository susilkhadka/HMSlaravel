@extends('layouts.app')
@section('content')
    <h1 class="text-3xl font-bold">Update Doctor</h1>
    <hr class="h-1 bg-red-500">

    <form action="{{ route('admin.doctor.update', ['id' => $doctors->id]) }}" method="post" class="mt-5" enctype="multipart/form-data">

    <input type="text" placeholder="First name" name="name" class="block w-full my-4 p-2 rounded"  value="{{$doctors->name}}">
        @error('name')
            <div class="text-red-600 -mt-5">{{ $message }}</div>
        @enderror

        
        <input type="text" placeholder="Email" name="email" class="block w-full my-4 p-2 rounded"  value="{{$doctors->email}}" >
        @error('email')
            <div class="text-red-600 -mt-5">{{ $message }}</div>
        @enderror


        <input type="text" placeholder="Address" name="address" class="block w-full my-4 p-2 rounded"  value="{{$doctors->address}}">
        @error('address')
            <div class="text-red-600 -mt-5">{{ $message }}</div>
        @enderror

        <input type="text" placeholder="phone" name="phone" class="block w-full my-4 p-2 rounded"  value="{{$doctors->phone}} ">
        @error('phone')
            <div class="text-red-600 -mt-5">{{ $message }}</div>
        @enderror

        <select name="specialist" id="Specialty" class="block w-full my-4 p-2 rounded"  value="{{$doctors->specialist}}">
            <option value="Orthopedic surgeons">Orthopedic surgeons</option>
            <option value="Plastic surgeons">Plastic surgeons</option> 
            <option value="Cardiac surgeons">Cardiac surgeons</option>
            <option value="Dermatologists ">Dermatologists</option>
            <option value="Endocrinologists ">Endocrinologists</option>
            <option value="Neurologists ">Neurologists</option>
            <option value="Radiologists ">Radiologists</option>
        </select>

        <div class="flex justify-center">
            <input type="submit" class="bg-blue-600 text-white px-4 mx-2 py-2 rounded">
            <a href="{{ route('admin.doctor.index') }}" class="bg-red-600 text-white px-10 mx-2 py-2 rounded">Exit</a>
        </div>
        @csrf
    </form>
@endsection
