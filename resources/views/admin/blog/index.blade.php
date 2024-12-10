@extends('layouts.app')
@include('layouts.message')
@section('content')
<h1 class="font-bold text-3xl">Blogs</h1>
<hr class="h-1 bg-red-600">
<div class="my-5 text-right">
    <a href="{{route('admin.blog.create')}}" class="bg-blue-600 text-white px-4 py-2 rounded"> Add Blogs</a>
</div>

<table class="text-center mt-7 w-full ">
    <tr>
        <th class="border border-gray-200 p-2 bg-gray-300">S.N</th>
        <th class="border border-gray-200 p-2 bg-gray-300">Title</th>
        <th class="border border-gray-200 p-2 bg-gray-300">Author</th>
        <th class="border border-gray-200 p-2 bg-gray-300">Image</th>
        <th class="border border-gray-200 p-2 bg-gray-300">content</th>
        <th class="border border-gray-200 p-2 bg-gray-300">Action</th>
    </tr>
    @foreach($blogs as $blog)
    <tr>
        <td class="border border-gray-200 p-2">{{$loop->index+1}}</td>
        <td class="border border-gray-200 p-2">{{$blog->title}}</td>
        <td class="border border-gray-200 p-2">{{$blog->author}}</td>
        <td class="border border-gray-200 p-2"><img src="images/{{$blog->image}}" class="h-8"></td>
        <td class="border border-gray-200 p-2">@php echo substr( $blog->content,0,50);
            @endphp</td>
        <td class="border border-gray-200 p-2">
            <a href="{{ route('admin.blog.edit', $blog->id) }}" class="bg-blue-600 text-white px-2 py-1 rounded mx-1"><i class="fa-solid fa-pen-to-square"></i></a>
            <a onclick="return confirm('Are you sure to delete')" href="{{ route('admin.blog.delete', $blog->id) }}" class="bg-red-600 text-white px-2 py-1 rounded mx-1"><i class="fa-solid fa-trash"></i></a>
        </td>
    </tr>
    @endforeach

</table>
@endsection