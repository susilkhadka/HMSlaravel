@extends('header')
@section('content')
@include('layouts.message')
<!--? slider Area Start-->
<div class="slider-area position-relative">
    <div class="slider-active">
        <!-- Single Slider -->
        <div class="single-slider slider-height d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-9 col-md-8 col-sm-9">
                        <div class="hero__caption">
                            <span>Committed to success</span>
                            <h1 class="cd-headline letters scale">We care about your
                                <strong class="cd-words-wrapper">
                                    <b class="is-visible">health</b>
                                    <b>Family</b>
                                </strong>
                            </h1>
                            <p data-animation="fadeInLeft" data-delay="0.1s">Our patients are at the centre of everything we do.</p>
                            <a href="#appointment" class="btn hero-btn" data-animation="fadeInLeft" data-delay="0.5s">Booking <i class="ti-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Slider -->
        <div class="single-slider slider-height d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-9 col-md-8 col-sm-9">
                        <div class="hero__caption">
                            <span>Committed to success</span>
                            <h1 class="cd-headline letters scale">We care about your
                                <strong class="cd-words-wrapper">
                                    <b class="is-visible">health</b>
                                    <b>Family</b>
                                </strong>
                            </h1>
                            <p data-animation="fadeInLeft" data-delay="0.1s">Our patients are at the centre of everything we do.</p>
                            <a href="#appointment" class="btn hero-btn" data-animation="fadeInLeft" data-delay="0.5s">Appointment <i class="ti-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider Area End-->
<!--? About Start-->
<div class="about-area section-padding2 ">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-10">
                <div class="about-caption mb-50">
                    <!-- Section Tittle -->
                    <div class="section-tittle section-tittle2 mb-35">
                        <span>About Our Hospital</span>
                        <h2>Welcome To Our Hospital</h2>
                    </div>
                    <p>The DZH Dhaulagiri Zonal Hospital was established in 2005 AD driven by the Vision to provide best medical healthcare to the people of Chitwan and its neighboring district so that the people be treated well as they were compelled to travel out of even for minor treatment.
                        As the overwhelming response it received from the people of this region, the hospital became one of the best hospital to provide finest healthcare in a pleasant environment by professional medical team. The hospital offered advance medical technology and expert medical care for the patient.</p>
                    <div class="about-btn1 mb-30">
                        <a href="#ours-doctors" class="btn about-btn">Find Doctors .<i class="ti-arrow-right"></i></a>
                    </div>
                    <div class="about-btn1 mb-30">
                        <a href="#appointment" class="btn about-btn2">Appointment <i class="ti-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <!-- about-img -->
                <div class="about-img ">
                    <div class="about-font-img d-none d-lg-block">
                        <img src="{{asset('assets/img/gallery/about2.png')}}" alt="">
                    </div>
                    <div class="about-back-img ">
                        <img src="{{asset('assets/img/gallery/about1.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About  End-->
<!--? Gallery Area Start -->
<div class="gallery-area section-padding30 p-3 mb-3 bg-light text-dark">
    <div class="container">
        <!-- Section Tittle -->
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-tittle text-center mb-100">
                    <span>Our Gellary</span>
                    <h2>Our Medical Camp</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Left -->
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="single-gallery mb-30">
                            <div class="gallery-img big-img" style="background-image: url(assets/img/gallery/gallery1.png);"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="single-gallery mb-30">
                            <div class="gallery-img small-img" style="background-image: url(assets/img/gallery/gallery2.png);"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="single-gallery mb-30">
                            <div class="gallery-img small-img" style="background-image: url(assets/img/gallery/gallery3.png);"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Right -->
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="single-gallery mb-30">
                            <div class="gallery-img small-img" style="background-image: url(assets/img/gallery/gallery4.png);"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="single-gallery mb-30">
                            <div class="gallery-img small-img" style="background-image: url(assets/img/gallery/gallery5.png);"></div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="single-gallery mb-30">
                            <div class="gallery-img big-img" style="background-image: url(assets/img/gallery/gallery6.png);"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Gallery Area End -->
<!--? All startups Start -->
<div class="all-starups-area testimonial-area fix">
    <!-- left Contents -->
    <div class="starups">
        <!--? Testimonial Start -->
        <div class="h1-testimonial-active">
            <!-- Single Testimonial -->
            <div class="single-testimonial text-center">
                <!-- Testimonial Content -->
                <div class="testimonial-caption ">
                    <div class="testimonial-top-cap">
                        <img src="assets/img/gallery/testimonial.png" alt="">
                        <p>“DH- Dhaulagiri Hospital (DH) has set the highest standard for health care and reached and surpassed it year after year. We are community oriented 100 bed medical centre with well equipped departments and wards with super specialised doctors and well trained and experienced nurses and paramedics."</p>
                    </div>
                    <!-- founder -->
                    <div class="testimonial-founder d-flex align-items-center justify-content-center">
                        <div class="founder-img">
                            <img src="https://dhaulagirihospital.gandaki.gov.np/images/management_committees/narayan-prasad-sharma-paudel_1685091002.jpg" class="rounded" alt="">
                        </div>
                        <div class="founder-text">
                            <span>Narayan Prasad Sharma Paudel</span>
                            <p>Chairman</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
    </div>
    <!--Right Contents  -->
    <div class="starups-img"></div>
</div>
<!--All startups End -->
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
                <div class="single-team mb-30">

                    <div class="team-caption" id='ours-doctors'>
                        <h3><a href="#">{{$doctor->name}}</a></h3>
                        <span class="mt-3">{{$doctor->specialist}}</span>
                    </div>

                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Team End -->
<!--? Contact form Start -->
<div class="contact-form-main" id="appointment">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-xl-7 col-lg-7">
                <div class="form-wrapper">
                    <!--Section Tittle  -->
                    <div class="form-tittle">
                        <div class="row ">
                            <div class="col-xl-12">
                                <div class="section-tittle section-tittle2">
                                    <span>Booking Apply Form</span>
                                    <h2>Booking Form</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Section Tittle  -->
                    <form id="contact-form" action="{{route('admin.booking.store')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-box user-icon mb-30">
                                    <input type="text" name="name" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-box email-icon mb-30">
                                    <input type="text" name="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mb-30">
                                <div class="form-box email-icon mb-30">
                                    <input type="date" placeholder="date" id="date" name="date" />
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-box subject-icon mb-30">
                                    <input type="number" name="phone" placeholder="Phone">
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
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- contact left Img-->
    <div class="from-left d-none d-lg-block">
        <img src="assets/img/gallery/contact_form.png" alt="">
    </div>
</div>
<!-- Contact form End -->
<!--? gallery Products Start -->
<div class="gallery-area fix">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="gallery-box">
                    <div class="single-gallery">
                        <div class="gallery-img " style="background-image: url(assets/img/gallery/gallery1.png);"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="gallery-box">
                    <div class="single-gallery">
                        <div class="gallery-img " style="background-image: url(assets/img/gallery/gallery2.png);"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="gallery-box">
                    <div class="single-gallery">
                        <div class="gallery-img " style="background-image: url(assets/img/gallery/gallery3.png);"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="gallery-box">
                    <div class="single-gallery">
                        <div class="gallery-img " style="background-image: url(assets/img/gallery/gallery4.png);"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="gallery-box">
                    <div class="single-gallery">
                        <div class="gallery-img " style="background-image: url(assets/img/gallery/gallery5.png);"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="gallery-box">
                    <div class="single-gallery">
                        <div class="gallery-img " style="background-image: url(assets/img/gallery/gallery6.png);"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- gallery Products End -->
<!--? Blog start -->
<div class="home_blog-area section-padding30" id="blog">
    <div class="container">
        <div class="row justify-content-sm-center">
            <div class="cl-xl-7 col-lg-8 col-md-10">
                <!-- Section Tittle -->
                <div class="section-tittle text-center mb-70">
                    <span>Oure recent news</span>
                    <h2>OurNews From Blog</h2>
                </div>
            </div>
        </div>
        <div class="row" id="blog">
            @foreach($blogs as $items)

            <div class="col-xl-4 col-lg-4 col-md-6 " value="blog">
                <div class="single-blogs mb-30">
                    <div class="blog-img">
                        <a href="{{route('blogview',$items->id)}}"><img src="../images/{{$items->image}}" alt=""></a>
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