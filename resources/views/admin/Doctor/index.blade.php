@extends('layouts.app')
@section('content')
<h1 class="font-bold text-3xl">Doctor</h1>
<hr class="h-1 bg-red-600">
<div class="my-5 text-right">
    <a href="{{Route('admin.doctor.create')}}" class="bg-blue-600 text-white px-4 py-2 rounded"> Add Doctor</a>
</div>

<table id="mytable" class="display">
    <thead>
        <tr>
            <th class="border border-gray-200 p-2 bg-gray-300">S.N</th>
            <th class="border border-gray-200 p-2 bg-gray-300">First Name</th>
            <th class="border border-gray-200 p-2 bg-gray-300">Email</th>
            <th class="border border-gray-200 p-2 bg-gray-300">Address</th>
            <th class="border border-gray-200 p-2 bg-gray-300">phone</th>
            <th class="border border-gray-200 p-2 bg-gray-300">specialist</th>
            <th class="border border-gray-200 p-2 bg-gray-300">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($doctors as $doctor)
        <tr>
            <td>{{$loop->index+1}}</td>
            <td>{{$doctor->name}}</td>
            <td>{{$doctor->email}}</td>
            <td>{{$doctor->address}}</td>
            <td>{{$doctor->phone}}</td>
            <td>{{$doctor->specialist}}</td>
            <td>
                <a href="{{ route('admin.doctor.edit', $doctor->id) }}" class="bg-blue-600 text-white px-2 py-1 rounded mx-1"><i class="fa-solid fa-pen-to-square"></i></a>
                <a onclick="return confirm('Are you sure to delete')" href="{{ route('admin.doctor.delete', $doctor->id) }}" class="bg-red-600 text-white px-2 py-1 rounded mx-1"><i class="fa-solid fa-trash"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
    <script>
        $(document).ready(function() {
            $('#mytable').DataTable();
        });
    </script>


</table>
@endsection