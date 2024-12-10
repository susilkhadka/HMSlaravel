@extends('layouts.app')
@section('content')
<h1 class="text-3xl font-bold">Edit Blog</h1>
<hr class="h-1 bg-red-500">

<form action="{{ route('admin.blog.update', ['id' => $blog->id]) }}" method="post" class="mt-5" enctype="multipart/form-data">
    @method('PUT') <!-- Method override for PUT -->
    @csrf

    <input type="text" placeholder="Title name" name="title" class="block w-full my-4 p-2 rounded" value="{{ $blog->title }}">
    @error('title')
    <div class="text-red-600 -mt-5">{{ $message }}</div>
    @enderror

    <input type="text" placeholder="Author Name" name="author" class="block w-full my-4 p-2 rounded" value="{{ $blog->author }}">
    @error('author')
    <div class="text-red-600 -mt-5">{{ $message }}</div>
    @enderror

    <textarea name="content" id="" class="block w-full my-4 p-2 rounded">{{ $blog->content }}</textarea>
    @error('content')
    <div class="text-red-600 -mt-5">{{ $message }}</div>
    @enderror

    @if($blog->image)
    <img src="../../images/{{$blog->image}}" class="h-8">
    @else
    No Image!
    @endif

    <input type="file" name="image" class="block w-full my-4 p-2 rounded">
    @error('image')
    <div class="text-red-600 -mt-5">{{ $message }}</div>
    @enderror


    <div class="flex justify-center">
        <input type="submit" class="bg-blue-600 text-white px-4 mx-2 py-2 rounded">
        <a href="{{Route('admin.blog.index')}}" class="bg-red-600 text-white px-10 mx-2 py-2 rounded"> Exit </a>
    </div>
</form>
@endsection