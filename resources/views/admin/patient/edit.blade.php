@extends('layouts.app')
@section('content')
    <h1 class="text-3xl font-bold">Add patient </h1>
    <hr class="h-1 bg-red-500">

    <form action="{{ route('admin.patient.update', ['id' => $patients->id]) }}" method="post" class="mt-5" enctype="multipart/form-data">

        <input type="text" placeholder="Patient name" name="name" class="block w-full my-4 p-2 rounded" value="{{$patients->name}}">
        @error('name')
            <div class="text-red-600 -mt-5">{{ $message }}</div>
        @enderror

        <input type="text" placeholder="Patient address" name="address" class="block w-full my-4 p-2 rounded" value="{{$patients->address}}">
        @error('address')
            <div class="text-red-600 -mt-5">{{ $message }}</div>
        @enderror

        <input type="text" placeholder="Age" name="age" class="block w-full my-4 p-2 rounded" value="{{$patients->age}}">
        @error('age')
            <div class="text-red-600 -mt-5">{{ $message }}</div>
        @enderror

        <input type="text" placeholder="Email" name="email" class="block w-full my-4 p-2 rounded" value="{{$patients->email}}">
        @error('email')
            <div class="text-red-600 -mt-5">{{ $message }}</div>
        @enderror

        <input type="text" placeholder="Contact number" name="phone" class="block w-full my-4 p-2 rounded" value="{{$patients->phone}}">
        @error('phone')
            <div class="text-red-600 -mt-5">{{ $message }}</div>
        @enderror

        <select name="gender" id="gender" class="block w-full my-4 p-2 rounded">
            <option value="Male" {{ $patients->gender === 'Male' ? 'selected' : '' }}>Male</option>
            <option value="Female" {{ $patients->gender === 'Female' ? 'selected' : '' }}>Female</option>
            <option value="Other" {{ $patients->gender === 'Other' ? 'selected' : '' }}>Other</option>
        </select>

        <div class="flex justify-center">
            <input type="submit" class="bg-blue-600 text-white px-4 mx-2 py-2 rounded">
            <a href="{{route('admin.patient.index')}}" class="bg-red-600 text-white px-10 mx-2 py-2 rounded"> Exit </a>
        </div>
        @csrf
    </form>
@endsection
