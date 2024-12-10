@extends('header')
@section('content')
<div class="home_blog-area section-padding30 p-3 mb-2 bg-light text-dark" id="blog">
    <div class="container">
        <div class="row justify-content-sm-center">
            <div class="cl-xl-7 col-lg-8 col-md-10">
                <!-- Section Tittle -->
                <div class="section-tittle text-center mb-70">
                    <span>Our recent news</span>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach($blog as $items)

            <div class="col-xl-4 col-lg-4 col-md-6 " value="blog">
                <div class="single-blogs mb-30">
                    <div class="blog-img">
                        <img src="../images/{{$items->image}}" alt="">
                    </div>
                    <div class="blogs-cap" value="blog">
                        <div class="date-info">
                            <span>{{$items->author}}</span>
                            <p>{{$items->created_at}}</p>
                        </div>
                        <h4>{{$items->title}}</h4>
                        @php echo substr( $items->content,0,50);
                        @endphp
                        <a href="{{route('blogview',$items->id)}}" class="read-more1">Read more</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

    </div>
</div>
<!-- Blog End -->
@endsection