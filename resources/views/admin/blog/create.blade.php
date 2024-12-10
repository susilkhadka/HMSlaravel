@extends('layouts.app')
@section('content')
    <h1 class="text-3xl font-bold">Add Blogs</h1>
    <hr class="h-1 bg-red-500">

    <form action="{{Route('admin.blog.store')}}" method="post" class="mt-5" enctype="multipart/form-data">
        <input type="text" placeholder="Blogs Title" name="title" class="block w-full my-4 p-2 rounded">
        @error('title')
            <div class="text-red-600 -mt-5">{{ $message }}</div>
        @enderror

        <input type="text" placeholder="Author Name" name="author" class="block w-full my-4 p-2 rounded">
        @error('author')
            <div class="text-red-600 -mt-5">{{ $message }}</div>
        @enderror

        <textarea name="content" id="" class="block w-full my-4 p-2 rounded"></textarea>
        @error('content')
        <div class="text-red-600 -mt-5">{{ $message }}</div>
        @enderror

        <input type="file" name="image" class="block w-full my-4 p-2 rounded">
        @error('image')
        <div class="text-red-600 -mt-5">{{ $message }}</div>
        @enderror

        <div class="flex justify-center">
            <input type="submit" class="bg-blue-600 text-white px-4 mx-2 py-2 rounded">
            <a href="{{Route('admin.blog.index')}}" class="bg-red-600 text-white px-10 mx-2 py-2 rounded">Exit</a>
        </div>
        @csrf
    </form>
@endsection
