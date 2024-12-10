@extends('layouts.app')
@section('content')
@include('layouts.message')
<h1 class="font-bold text-3xl">Booking</h1>
<hr class="h-1 bg-red-600">
<div class="my-5 text-right">
    <a href="{{route('admin.booking.index','Pending')}}" class="bg-blue-600 text-white px-4 py-2 rounded">Pending</a>
    <a href="{{route('admin.booking.index','Accepted')}}" class="bg-blue-600 text-white px-4 py-2 rounded">Accepted</a>

</div>
<table id="mytable" class="display">
    <thead>
        <tr>
            <th class="border border-gray-200 p-2 bg-gray-300">S.N</th>
            <th class="border border-gray-200 p-2 bg-gray-300">Name</th>
            <th class="border border-gray-200 p-2 bg-gray-300">phone</th>
            <th class="border border-gray-200 p-2 bg-gray-300">date</th>
            <th class="border border-gray-200 p-2 bg-gray-300">email</th>
            <th class="border border-gray-200 p-2 bg-gray-300">message</th>
            <th class="border border-gray-200 p-2 bg-gray-300">Status</th>
            <th class="border border-gray-200 p-2 bg-gray-300">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($bookings as $booking)
        <tr>
            <td>{{$loop->index+1}}</td>
            <td>{{$booking->name}}</td>
            <td>{{$booking->phone}}</td>
            <td>{{$booking->date}}</td>
            <td>{{$booking->email}}</td>
            <td>{{$booking->message}}</td>
            <td>{{$booking->status}}</td>
            <td>
                @if($booking->status == 'Pending')
                <a href="{{route('admin.booking.status',[$booking->id,'Accepted'])}}" class="bg-blue-600 text-white px-2 py-1 rounded mx-1"><i class="bi bi-check-circle-fill width=" 10"">Accept</a>
                @else
                <a href="{{route('admin.booking.status',[$booking->id,'Pending'])}}" class="bg-blue-600 text-white px-2 py-1 rounded mx-1"><i class="bi bi-check-circle-fill width=" 10"">Pending</a>
                @endif
                <a onclick="return confirm('Are you sure to delete')" href="{{ route('admin.booking.delete', $booking->id) }}" class="bg-red-600 text-white px-2 py-1 rounded mx-1">Delete</a>
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