@extends('layouts.app')
@section('content')
@include('layouts.message')
<h1 class="font-bold text-3xl">Appointments</h1>
<hr class="h-1 bg-red-600">
<div class="my-5 text-right">
    <a href="{{route('admin.appointment.index','Pending')}}" class="bg-blue-600 text-white px-4 py-2 rounded">Pending</a>
    <a href="{{route('admin.appointment.index','Accepted')}}" class="bg-blue-600 text-white px-4 py-2 rounded">Accepted</a>

</div>
<table id="mytable" class="display">
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
                @if($item->status == 'Pending')
                <a href="{{route('admin.appointment.status',[$item->id,'Accepted'])}}" class="bg-blue-600 text-white px-2 py-1 rounded mx-1"><i class="bi bi-check-circle-fill width=" 10"">Accept</a>
                @else
                <a href="{{route('admin.appointment.status',[$item->id,'Pending'])}}" class="bg-blue-600 text-white px-2 py-1 rounded mx-1"><i class="bi bi-check-circle-fill width=" 10"">Pending</a>
                @endif
                <a onclick="return confirm('Are you sure to delete')" href="{{ route('admin.appointment.delete', $item->id) }}" class="bg-red-600 text-white px-2 py-1 rounded mx-1">Delete</a>
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