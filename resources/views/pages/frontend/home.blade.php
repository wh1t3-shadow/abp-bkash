@include('pages.frontend.head')

    <!-- header-section -->


<!--==================== Banner Section ====================-->
     <div class="banner-section">
        <div class="container">
            @foreach ($item1 as $item1 )


            <div class="banner-main">
                <div class="left-col">
                    <h1>{{ $item1->title }}</h1>
                       <p>
                        {{ $item1->dis }}
                        </p>
                        <div class="course_button">
                            <a href="#">All Courses</a>
                        </div>
                </div>
                <div class="right-col">
                    <img src="{{ url('images/'.$item1->image) }}" alt="Banner Image">
                </div>
            </div>
            @endforeach
        </div>
     </div>

    <!-- Partners-section -->
<!--     <div class="partners-section">
        <div class="container">
            <h2><a href="#">Our International Partners</a></h2>
            <div class="partners-slider">
                <div class="slider-items">
                <div><a href="#"><img src="asset/img/CPDuklogo24.webp" alt="Partners Logo"></a></div>
                <div><a href="#"><img src="asset/img/isra1.webp" alt="Partners Logo"></a></div>
                <div><a href="#"><img src="asset/img/edupro1.webp" alt="Partners Logo"></a></div>
                <div><a href="#"><img src="asset/img/csribf1.webp" alt="Partners Logo"></a></div>
                <div><a href="#"><img src="asset/img/growlearnconnect1.webp" alt="Partners Logo"></a></div>
                <div><a href="#"><img src="asset/img/aaoifi1.webp" alt="Partners Logo"></a></div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Partners-section -->

<!--     <section class="home-img-banner-section text-align">
        <div class="container">
            <img src="assets/img/home/COVER-FOR-6K-POST-for-web.webp">
        </div>
    </section> -->

    <!-- Diploma-section -->
        <div class="diploma-section">
            <div class="container">
                @foreach ($item2 as $item2)


                <div class="diploma-main">
                    <div class="left-col">
                        <a href="#">{{ $item2->f_title }}</a>
                        <h3>{{ $item2->s_title }}</h3>
                        <h2><a href="#">{{ $item2->t_title }}</a></h2>
                        <div class="see-more">
                            <a href="#">See More</a>
                        </div>
                    </div>
                    <div class="right-col">
                        <div class="diploma-img">
                            <a href="#"><img src="{{ url('images/'.$item2->image) }}" alt="diploma-image"></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    <!-- Diploma-section -->

<!--================== Popular Courses Section ==================-->
        <div class="courses-section">
            <div class="container">
                <h2 class="course-title"><a href="#">Popular Courses</a></h2>
                <div class="courses-main">
                    @foreach ($item3 as $item3)


                        <div class="course-box">
                            <div class="img-col">
                                <a href="#">
                                    <img src="{{ url('images/'.$item3->course_image) }}" alt="course image">
                                </a>
                            </div>
                            <div class="text-col" style="text-align: center;">
                                <a href="{{ url('/course-single/'.$item3->id) }}">
                                    <h3>{{ $item3->course_title}}</h3>
                                    <p>{{ $item3->course_duration }}</p>
                                </a>
                            </div>
                        </div>
                        @endforeach

                </div>
            </div>
        </div>

<!--======================= Mobile App Section =========================-->
        {{-- <div class="app-section">
            <div class="container">
                <div class="app-main">
                    <div class="left-col">
                        <h2>Everything in ABP Mobile App</h2>

                        <div class="app-feature">
                            <ul>
                                <li>Online Study Guide</li>
                                <li>Revision Class</li>
                                <li>Recorded Videos</li>
                            </ul>

                            <ul>
                                <li>Online Mock Exam</li>
                                <li>Live Exam Proctoring</li>
                                <li>Secured Exam and Assessment</li>
                            </ul>

                            <ul>
                                <li>Online Assignment Submission</li>
                                <li>Discussion Forum</li>
                                <li>Dedicated Student Support </li>
                            </ul>
                        </div>
                        <div class="app-store">
                            <a href="#"><img src="frontend/assets/img/appstore.webp" alt="app-store imgage"></a>
                            <a href="#"><img src="frontend/assets/img/google.webp" alt="app-store imgage"></a>
                        </div>

                    </div>
                    <div class="middle-col">
                        <img src="frontend/assets/img/mobile.webp" alt="App Learnig img">
                    </div>
                    <div class="right-col">
                        <img src="frontend/assets/img/professionalFILEminimizer.webp" alt="">
                    </div>
                </div>
            </div>
        </div> --}}

<!--========================= Facility Section =========================-->

    <hr>

        <div class="facility-section">
            <div class="container">
                <div class="main">

                    @foreach ($item4 as $item4)


                    <div class="facility-col">
                        <div class="img">
                            <img src="{{ url('images/'.$item4->image) }}" alt="facility image">
                        </div>
                        <div class="text">
                            <h2>{{ $item4->title }}</h2>
                            <p>{{ $item4->dis }}</p>
                        </div>
                    </div>

                    @endforeach

                </div>
            </div>
        </div>

<!--============================ Home Video Section =================-->
        <div class="home-video-section">
            <div class="container">
                @foreach ($item5 as $item5)


                <div class="main">
                    <div class="left-col">
                        <div class="video-icon">
                            <a href="#"><img src="{{ url('images/'.$item5->image) }}" alt="video image"></a>
                        </div>
                            <h2>{{ $item5->title }}</h2>
                            <div class="btn">
                                <a href="#" class="see-more">See More Video</a>
                            </div>
                        </a>
                    </div>
                    <div class="right-col">
                        <iframe width="580" height="328" src="{{ $item5->iframe }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    <!-- video-section -->

<!--========================== Home Blog Section ================-->
    <div class="home-blog-section">
        <div class="container">
            <div class="blog-main">
                @foreach ($item6 as $item6)


                <div class="single-blog">
                    <a href="{{ url('blog-single/'.$item6->id) }}"><img src="{{ url('images/'.$item6->image) }}" alt="Blog feature image"></a>
                    <h2>
                        <a href="{{ url('blog-single/'.$item6->id) }}">{{ $item6->title }}</a>
                    </h2>
                    <p style="height:105px; overflow:hidden; text-overflow:ellipsis;">{{ $item6->dis }}</p>
                </div>
                @endforeach

            </div>
            <div class="btn">
                <a href="#"> See More Blog</a>
            </div>
        </div>
    </div>
    <!-- Blog-section -->

    {{-- <!-- Consultation-section -->
    <div class="consultation-section">
        <div class="container">
            <div class="main">

                <div class="consultation-col">
                    <div class="content">
                        <div class="text">
                            <h2>I am an International Student. How do I Apply?</h2>
                        </div>
                        <div class="img">
                            <img src="frontend/assets/img/joinimg.webp" alt="">
                        </div>

                    </div>
                    <div class="bottom-col">
                        <div class="online-join">
                            <a href="tel:0155655" class="request">Request an online Consultation</a>
                            <a href="#" class="join">Join Now!</a>
                        </div>
                    </div>
                </div>

                <div class="consultation-col">
                    <div class="content">
                        <div class="text">
                            <h2>I am a Local Student. How do I Apply?</h2>
                        </div>
                        <div class="img">
                            <img src="frontend/assets/img/desi.webp" alt="">
                        </div>

                    </div>
                    <div class="bottom-col">
                        <div class="online-join">
                            <a href="tel:0155655" class="request">Request an online Consultation</a>
                            <a href="#" class="join">Join Now!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!--  Corporate-Clients-section -->
       <!--  <div class="client-section partners-section">
            <div class="container">
                <h2><a href="#">Our Corporate Clients</a></h2>
                <div class="partners-slider">
                    <div class="slider-items">
                    <div><a href="#"><img src="assets/img/clients/client1.webp" alt="client Logo"></a></div>
                    <div><a href="#"><img src="assets/img/clients/client2.webp" alt="client Logo"></a></div>
                    <div><a href="#"><img src="assets/img/clients/client3.webp" alt="client Logo"></a></div>
                    <div><a href="#"><img src="assets/img/clients/client4.webp" alt="client Logo"></a></div>
                    <div><a href="#"><img src="assets/img/clients/client5.webp" alt="client Logo"></a></div>
                    <div><a href="#"><img src="assets/img/clients/client6.webp" alt="client Logo"></a></div>
                    <div><a href="#"><img src="assets/img/clients/client7.webp" alt="client Logo"></a></div>
                    <div><a href="#"><img src="assets/img/clients/client8.webp" alt="client Logo"></a></div>
                    <div><a href="#"><img src="assets/img/clients/client9.webp" alt="client Logo"></a></div>
                    <div><a href="#"><img src="assets/img/clients/client10.webp" alt="client Logo"></a></div>
                    <div><a href="#"><img src="assets/img/clients/client12.webp" alt="client Logo"></a></div>
                    <div><a href="#"><img src="assets/img/clients/client13.webp" alt="client Logo"></a></div>
                    <div><a href="#"><img src="assets/img/clients/client14.webp" alt="client Logo"></a></div>
                    <div><a href="#"><img src="assets/img/clients/client15.webp" alt="client Logo"></a></div>
                    </div>
                </div>
            </div>
        </div>
 -->
<!--------------------- Corporate Client Section ---------------------->
        <!-- <div class="corporate-client-section ibf-corporate-client-section">
            <div class="container">
                <div class="corporate-client-head">
                    <h2 class="corporate-client-heading-title ">Our Corporate Clients</h2>
                    <img src="img/Artboard-9-2.webp" alt="Artboard-9-2">
                </div>

                <div class="corporate-client-slider">
                    <div class="client-slider">
                        <div class="slide">
                            <img src="img/bd-bank.webp" alt="bd-bank">
                        </div>
                        <div class="slide">
                            <img src="img/bpi.webp" alt="bpi">
                        </div>
                        <div class="slide">
                            <img src="img/ucb.webp" alt="ucb">
                        </div>
                        <div class="slide">
                            <img src="img/city-bank.webp" alt="city-bank">
                        </div>
                        <div class="slide">
                            <img src="img/bank-asia.webp" alt="bank-asia">
                        </div>
                        <div class="slide">
                            <img src="img/dhaka-bank.webp" alt="dhaka-bank">
                        </div>
                        <div class="slide">
                            <img src="img/exim.webp" alt="exim">
                        </div>
                        <div class="slide">
                            <img src="img/islami-bank.webp" alt="islami-bank">
                        </div>
                        <div class="slide">
                            <img src="img/midas.webp" alt="midas">
                        </div>
                        <div class="slide">
                            <img src="img/midlandbank.webp" alt="midlandbank">
                        </div>
                        <div class="slide">
                            <img src="img/brackbank.webp" alt="brackbank">
                        </div>
                        <div class="slide">
                            <img src="img/czm.webp" alt="czm">
                        </div>
                        <div class="slide">
                            <img src="img/dhaka-commerce-college.webp" alt="dhaka-commerce-college">
                        </div>
                        <div class="slide">
                            <img src="img/mgi.webp" alt="mgi">
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Corporate-Clients-section -->

<!------------------- Quality-Education Section  -------------------->
        {{-- <div class="quality-education-section">
            <div class="container">
                <div class="main">
                    <div class="education-col">
                        <h2>Quality Education</h2>
                        <p> Honestly my previous expectation and what I am witnessing right now I see a big difference, actually they treated me very well and I liked their quality education also how they are trying to make sure that each and everyone with us to meet his/her goal. </p>
                            <div class="name">
                                <h3>Abdullahi Hassan Mudey Cagayare</h3>
                                <p>Lecturer at Darul Hikmah University-DHU,<br>Somalia</p>
                            </div>
                    </div>

                    <div class="education-col masrursir-col">

                        <img src="frontend/assets/img/masrursir.webp" alt="masrur sir image">
                        <h2>Latest and Relevant Content</h2>
                        <p>  Content of this course are very much relevant for professionals in different sectors. It's a bridge point of education and professionalism. </p>
                            <div class="name">
                                <h3>Masrur Salekin, PhD</h3>
                                <p>Hardiman Research Scholar <br>National University of Ireland Galway <br> LLM in International Law and Development, Chevening <br>Scholar, University of Nottingham</p>
                            </div>
                    </div>

                </div>
            </div>
        </div> --}}
        <!-- Quality-Education -->

<!---------------------- Footer Section -------------------->
@include('pages.frontend.footer')
