@extends('layouts.doctorapp')
@section('content')
<h1 class="font-bold text-3xl">Doctor Dashboard</h1>
<hr class="h-1 bg-red-600">
<div class="grid grid-cols-3 gap-10 mt-5">
    <div class="px-2 py-4 flex justify-between bg-green-800 text-white rounded-lg shadow">
        <p>Appointment</p>
        <p class="text-5xl font-bold">{{$appointment}}</p>
    </div>
</div>  
@endsection