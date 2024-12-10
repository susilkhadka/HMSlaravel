@extends('header')
@section('content')

<div class="p-3 mb-2 bg-light text-dark" >
    <div id="title" class="d-flex justify-content-center mb-5 fw-bolder ">
        <h1 ><strong>{{$blogs->title}}</strong></h1>
    </div>
    <div id="wrapper" class="d-flex justify-content-center ">
        <div class="mr-5">
        <img src="../images/{{$blogs->image}}" style="width: 500px;;" class="rounded mx-auto d-block">
        </div>
        <div id="content" class="lh-sm font-monospace" >
            <p>{{$blogs->content}}</p>      
        </div>
    </div>
</div>


@endsection