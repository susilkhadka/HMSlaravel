@extends('layouts.app')
@section('content')
<h1 class="font-bold text-3xl">Patient</h1>
<hr class="h-1 bg-red-600">
<div class="my-5 text-right">
    <a href="{{ route('admin.patient.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded"> Add Patient</a>
</div>

<table id="mytable" class="display">
    <thead>
        <tr>
            <th class="border border-gray-200 p-2 bg-gray-300">S.N</th>
            <th class="border border-gray-200 p-2 bg-gray-300">Patient Name</th>
            <th class="border border-gray-200 p-2 bg-gray-300">Address</th>
            <th class="border border-gray-200 p-2 bg-gray-300">Age</th>
            <th class="border border-gray-200 p-2 bg-gray-300">Contact Number</th>
            <th class="border border-gray-200 p-2 bg-gray-300">Gender</th>
            <th class="border border-gray-200 p-2 bg-gray-300">Email</th>
            <th class="border border-gray-200 p-2 bg-gray-300">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($patients as $patient)
        <tr>
            <td >{{$loop->index+1}}</td>
            <td >{{ $patient->name }}</td>
            <td >{{ $patient->address }}</td>
            <td >{{ $patient->age }}</td>
            <td >{{ $patient->phone }}</td>
            <td >{{ $patient->gender }}</td>
            <td >{{ $patient->email }}</td>
            <td >
                <a href="{{ route('admin.patient.edit', $patient->id) }}" class="bg-blue-600 text-white px-2 py-1 rounded mx-1"><i class="fa-solid fa-pen-to-square"></i></a>
                <a onclick="return confirm('Are you sure to delete')" href="{{ route('admin.patient.delete', $patient->id) }}" class="bg-red-600 text-white px-2 py-1 rounded mx-1"><i class="fa-solid fa-trash"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>
<script>
    $(document).ready(function() {
        $('#mytable').DataTable();
    });
</script>
@endsection