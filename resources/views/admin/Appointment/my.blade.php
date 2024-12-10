@extends('layouts.userapp')
@section('content')
@include('layouts.message')
<h1 class="font-bold text-3xl">Appointments</h1>
<hr class="h-1 bg-red-600 mb-8" />
<table id="mytable">
    <thead>
        <tr>
            <th class="border border-gray-200 p-2 bg-gray-300">S.N</th>
            <th class="border border-gray-200 p-2 bg-gray-300">doctor_id</th>
            <th class="border border-gray-200 p-2 bg-gray-300">patient_id</th>
            <th class="border border-gray-200 p-2 bg-gray-300">appointment_date</th>
            <th class="border border-gray-200 p-2 bg-gray-300">message</th>
            <th class="border border-gray-200 p-2 bg-gray-300">Status</th>
            <th class="border border-gray-200 p-2 bg-gray-300">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($appointments as $item)
        <tr>
            <td>{{$loop->index+1}}</td>
            <td>{{$item->doctor_id}}</td>
            <td>{{$item->patient_id}}</td>
            <td>{{$item->appointment_date}}</td>
            <td>{{$item->message}}</td>
            <td>{{$item->status}}</td>
            <td class="border border-gray-200 p-2">
                <a onclick="return confirm('Are you sure to delete')" href="{{ route('admin.appointment.deleteappointment', $item->id) }}" class="bg-red-600 text-white px-2 py-1 rounded mx-1"><i class="fa-solid fa-trash"></i></a>
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