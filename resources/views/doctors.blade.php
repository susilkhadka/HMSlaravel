@extends('header')
@section('content')
 <!--? Team Start -->
 <div class="team-area section-padding30">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row justify-content-center" id="ours-doctors">
                <div class="col-lg-6">
                    <div class="section-tittle text-center mb-100">
                        <span>Our Doctors</span>
                        <h2>Our Specialist</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- single Tem -->
                @foreach($doctors as $doctor)
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                    <div class="single-team mb-30  ">
                        <div class="team-caption">
                            <h1 class="text-danger-emphasis"><a href="#">{{$doctor->name}}</a></h1>
                            <span class="text-danger-emphasis mt-4 ">{{$doctor->specialist}}</span>
                            <a href="{{route('viewdoctor',$doctor->id)}}" class="btn btn-primary btn-sm mt-5">Get Appointment</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection