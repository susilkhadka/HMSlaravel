@extends('layouts.userapp')
@section('content')
<h1 class="font-bold text-3xl">Profile</h1>
<hr class="h-1 bg-red-600">

<div class="flex ">
    <div class="card bg-white rounded-lg drop-shadow-2xl p-9 max-w-2xl w-full">
        <h1 class="font-bold text-3xl mb-6 text-center  ">Patient Profile</h1>
        <form action="{{ route('user.update') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('post')
            <div class="mb-3">

                <label for="code" class="form-label">Full Name *</label>
                <input type="text" class="form-control w-full " id="code" name="name" value="{{$userdata->name}}">
                <div class="mb-3">
                    <label for="Address" class="form-label">Address</label>
                    <input type="text" class="form-control w-full" id="address" name="address" value="{{$userdata->address}}" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Email *</label>
                    <input class="form-control w-full" id="description" name="email" rows="10" required value="{{$userdata->email}}">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Mobile Number</label>
                    <input type="tel" class="form-control w-full" id="phone" name="phone" value="{{$userdata->phone}}">
                </div>
                <div class="mb-3">
                    <label for="age" class="form-label"> Age</label>
                    <input type="number" class="form-control w-full" id="age" name="age" value="{{$userdata->age}}">
                </div>
                <input type="file" name="image" class="block w-full my-4 p-2 rounded">
                <div class="flex justify-center mt-6">
                    <input class="bg-blue-600 text-white px-4 py-2 rounded mx-2 hover:cursor-pointer" type="submit" value="update">
                </div>
            </div>
        </form>
    </div>
    <div class="px-8 py-8 bg-gray-100">
        <img class="h-96" src="images/{{$userdata->image}}" alt="" srcset="">
    </div>
</div>
@endsection