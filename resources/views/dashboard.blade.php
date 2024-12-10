@extends('layouts.app')
@section('content')

<h1 class="font-bold text-3xl">Dashboard</h1>
<hr class="h-1 bg-red-600">
<div class="grid grid-cols-3 gap-10 mt-5">
    <div class="px-2 py-4 flex justify-between bg-blue-700 text-white rounded-lg shadow">
        <p> Patient </p>
        <p class="text-5xl font-bold">{{$patient}}</p>
    </div>
    <div class="px-2 py-4 flex justify-between bg-red-700 text-white rounded-lg shadow">
        <p>Active Doctor</p>
        <p class="text-5xl font-bold">{{$doctor}}</p>
    </div>
    <div class="px-2 py-4 flex justify-between bg-green-800 text-white rounded-lg shadow">
        <p>Appointment</p>
        <p class="text-5xl font-bold">{{$appointment}}</p>
    </div>
    <div class="col-span-3 flex">
    <div class="h-80 w-full flex-1 ">
    <canvas id="myChart" class="w-full"></canvas>
    </div>
    </div>
    
</div>  

<script>
     const ctx = document.getElementById('myChart');
        const labels =  {!! json_encode($apdates) !!};
const data = {
  labels: labels,
  datasets: [{
    label: 'Appointment Details',
    data:  {!! json_encode($apcounts) !!},
    backgroundColor: [
      'rgba(255, 99, 132, 0.2)',
      'rgba(255, 159, 64, 0.2)',
      'rgba(255, 205, 86, 0.2)',
      'rgba(75, 192, 192, 0.2)',
      'rgba(54, 162, 235, 0.2)',
      'rgba(153, 102, 255, 0.2)',
      'rgba(201, 203, 207, 0.2)'
    ],
    borderColor: [
      'rgb(255, 99, 132)',
      'rgb(255, 159, 64)',
      'rgb(255, 205, 86)',
      'rgb(75, 192, 192)',
      'rgb(54, 162, 235)',
      'rgb(153, 102, 255)',
      'rgb(201, 203, 207)'
    ],
    borderWidth: 1
  }]

};

const myChart = new Chart(ctx, {
            type: 'line',
            data: data,
});
    </script>



@endsection