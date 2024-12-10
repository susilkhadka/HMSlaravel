@extends('header')
@section('content')

<!-- Message  -->
@if(Session::has('success'))
<div id="msg" style="position:fixed; top:2px; right:2px; background-color: blue; color:white; padding:4px 20px; border-radius:10px;">
    {{session('success')}}
</div>
<script>
    window.onload = function() {
        setTimeout(() => {
            document.getElementById('msg').style.display = 'none';
        }, 2000);
    }
</script>
@endif

<!--==================== Appointment ====================-->

<div class="contact-form-main ">
    <div class="container ">
        <div class="row justify-content-end ">
            <div class="from-left d-none d-lg-block">
                <!-- <img src="assets/img/gallery/contact_form.png" alt=""> -->
                <!--Section Tittle  -->
                <div class="form-tittle mt-30 mx-auto text-center">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="section-tittle section-tittle2">
                                <h2>Doctor Details</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single Tem -->
                <div class="col-xl-4 col-lg-4 col-md-6 text-center mx-auto">
                    <div class="single-team mb-30">

                        <div class="team-caption">
                            <h3><a href="#">{{$doctor->name}}</a></h3>
                            <span>{{$doctor->specialist}}</span>
                            <!-- Team social -->
                            <div class="team-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                            </div>
                            <!-- <a href="{{route('viewdoctor',$doctor->id)}}">Get Appointment</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-lg-7">
                <div class="form-wrapper">
                    <!--Section Tittle  -->
                    <div class="form-tittle">
                        <div class="row ">
                            <div class="col-xl-12">
                                <div class="section-tittle section-tittle2">
                                    <span>Appointment Apply Form</span>
                                    <h2>Appointment Form</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Section Tittle  -->
                    <form id="contact-form" action="{{route('admin.appointment.store')}}" method="POST">
                        @csrf
                        <div class="row">
                            <input type="hidden" name="doctor_id" value="{{ request('id') }}">
                            <div class="col-lg-6 col-md-6 mb-30">
                                <div class="form-box email-icon mb-30">
                                    <input type="date" placeholder="Date" id="date" name="appointment_date" />
                                </div>
                            </div>


                            <div class="col-lg-12">
                                <div class="form-box message-icon mb-65">
                                    <textarea name="message" id="message" placeholder="Message"></textarea>
                                </div>
                                <div class="submit-info">
                                    <button class="btn" type="submit"> Book Now <i class="ti-arrow-right"></i> </button>
                                </div>
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- contact left Img-->

<!-- Contact form End -->
<!--//End Appointment -->

@endsection