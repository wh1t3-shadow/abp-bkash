@include('pages.frontend.head')

    <div class="monitoring-evalution-section">
<!-- first section start here  -->

        <div class="first-section">
            <div class="container">
                <div class="row">
                    <div class="left-col">
                        <div class="left-col-inner">
                            <h2 class="section-title">Postgraduate Diploma in</h2>
                            <h1 class="page-main-title">{{ $item1->course_title }}</h1>
                        </div>
                    </div>
                    <div class="right-col">
                        <div class="right-col-inner">
                            <div class="right-col-video">
                                <iframe width="373" height="209" src="https://www.youtube.com/embed/m4lg0ok2XxI" title="&quot;ABP Learning&quot; Mobile App Launching" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- second section start here  -->

        <div class="second-section">
            <div class="container">
                <div class="row">
                    <div class="left-col">
                        <div class="left-col-description">
                            <h2 class="left-col-content">{{ $item1->course_description }}</h2>




                        </div>
                        <div class="left-col-feature-section">
                            <div class="feature-row">
                                <div class="feature-item feature-col">
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="433" height="336"
                                            viewBox="0 0 433 336">
                                            <defs>
                                                <filter id="Rectangle_103" x="126" y="8" width="184" height="187"
                                                    filterUnits="userSpaceOnUse">
                                                    <feGaussianBlur stdDeviation="3"></feGaussianBlur>
                                                </filter>
                                                <clipPath id="clip-Timing_2">
                                                    <rect width="433" height="336"></rect>
                                                </clipPath>
                                            </defs>
                                            <g id="Timing_2" data-name="Timing – 2" clip-path="url(#clip-Timing_2)">
                                                <g transform="matrix(1, 0, 0, 1, 0, 0)" filter="url(#Rectangle_103)">
                                                    <rect id="Rectangle_103-2" data-name="Rectangle 103" width="166"
                                                        height="169" rx="7" transform="translate(135 14)"
                                                        fill="#f1f7ed"></rect>
                                                </g>
                                                <g id="Icon_ionic-md-time" data-name="Icon ionic-md-time"
                                                    transform="translate(173.885 55)">
                                                    <path id="Path_6" data-name="Path 6"
                                                        d="M45.517,3.375A42.183,42.183,0,1,0,87.74,45.558,42.168,42.168,0,0,0,45.517,3.375ZM45.558,79.3A33.746,33.746,0,1,1,79.3,45.558,33.746,33.746,0,0,1,45.558,79.3Z"
                                                        transform="translate(-3.375 -3.375)" fill="#50bc80"></path>
                                                    <path id="Path_7" data-name="Path 7"
                                                        d="M22.865,10.688H16.538V36L38.683,49.281l3.164-5.192L22.865,32.833Z"
                                                        transform="translate(21.427 10.404)" fill="#50bc80"></path>
                                                </g><text id="_7_Months_Flexible_Payments"
                                                    data-name="7 Months Flexible Payments"
                                                    transform="translate(216 256)" fill="#34315c" font-size="43"
                                                    font-family="Poppins-Medium, Poppins" font-weight="500">
                                                    <tspan x="-97.696" y="0">{{ $item1->course_duration }}</tspan>
                                                    <tspan font-family="Poppins-Bold, Poppins" font-weight="700">
                                                        <tspan x="-201.906" y="55">Flexible Payments</tspan>
                                                    </tspan>
                                                </text>
                                            </g>
                                        </svg>
                                    </a>
                                </div>



                            </div>
                        </div>

                        <div class="current-batch-section">
                            <div class="batch-row">
                                <div class="batch-left-col">
                                    <div class="left-col-inner">
                                        <h2 class="on-batch-going-title">
                                            <a href="#">On Going Batch</a>
                                        </h2>
                                        <h2 class="batch-number-title">
                                            <a href="#">PGDMEAL Batch 10</a>
                                        </h2>
                                        <a href="{{ url('enroll/'.$item1->id) }}" class="enroll-btn">Enroll Now</a>


                                    </div>
                                </div>



                                <div class="batch-right-col">
                                    <div class="right-col-inner">
                                        <h2 class="course-schedule">
                                            <a>
                                                <b>Class Starts:&nbsp;&nbsp;</b>
                                                <br>
                                                <b>Class End:&nbsp;&nbsp;</b>
                                                <br><b>Class Time:&nbsp;&nbsp;</b>(Fri 10:00AM-12:00AM)
                                            </a>
                                        </h2>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="right-col">
                        <div class="right-col-inner">
                            <h2 class="form-heading-title">Request For a Call</h2>
                            <div class="form-section">
                                <form action="#">
                                    <div class="form-group">
                                        <label for="name">Your Name</label>
                                        <input type="text" name="name" id="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="mobile">Mobile No.</label>
                                        <input type="text" name="mobile" id="mobile" placeholder="+88">
                                    </div>
                                    <div class="form-group">
                                        <label for="job-title">Job Title</label>
                                        <input type="text" name="job-title" id="job-title">
                                    </div>
                                    <div class="form-group">
                                        <div class="submit-btn">
                                            <input class="submit-btn-inner" type="submit" value="Submit">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--course-content-section -->

        <div class=" course-content">
            <div class="container">
                <div class="row">
                    <div class="course-left-col">
                        <div class="course-head-section">
                            <h2 class="course-title">Course Content</h2>
                        </div>
                        <div class="course-module">
                            @foreach ($item1->CourseContentModel as $item )
                            <div class="course-unit-group">
                                <div class="course-unit ">
                                    <div class="unit-item-title unit-item-title-1">
                                        <span class="unit-name unit-name-1">{{ $item->course_content_title }}</span>
                                        <span class="open-icon open-icon-1">
                                            <i class="fas fa-caret-down"></i>
                                        </span>
                                    </div>
                                    <div class="unit-item unit-item-1">
                                        <h6 class="topic-name"><strong><img src="{{ asset('assets/img/pdf-icon.webp') }}" alt=""></strong>
                                            <i class="fa-solid fa-lock fa-shake fa-lg" style="color: #f5220a;"></i>   Admition fast for get link</h6>

                                    </div>
                                </div>
                            </div>

                            @endforeach




                        </div>
                    </div>
                    {{-- <div class="course-right-col">
                        <div class="certificate-box">
                            <img src="{{ asset('frontend/assets/img/certificate.webp') }}" alt="certificate">
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>



        <!-- Fascinating-e-learning-platform-section start   -->
        {{-- <div class="fas-e-learning-platform-section ">
            <div class="container">
                <div class="row">
                    <div class="fas-e-learning-platform-left-col">
                        <div class="fas-head-section">
                            <h2 class="fas-heading-title">Fascinating E-Learning Platform</h2>
                        </div>

                        <div class="fas-content-section">
                            <div class="fas-content">
                                <div class="fas-content-left">
                                    <img src="{{ asset('frontend/assets/img/Artboard-6-1.webp') }}" alt="Artboard-6-1">
                                </div>
                                <div class="fas-content-right">
                                    <h2 class="fas-content-title">Get all resources at one place</h2>
                                    <h2 class="fas-content-deials">Online live lectures, recorded lectures, study
                                        materials, online exams, online results, live chat, important notifications and
                                        many more!</h2>
                                </div>
                            </div>
                        </div>
                        <div class="fas-content-section">
                            <div class="fas-content">
                                <div class="fas-content-left">
                                    <img src="{{ asset('frontend/assets/img/Artboard-13.webp') }}" alt="Artboard-13">
                                </div>
                                <div class="fas-content-right">
                                    <h2 class="fas-content-title">Get all resources at one place</h2>
                                    <h2 class="fas-content-deials">Online live lectures, recorded lectures, study
                                        materials, online exams, online results, live chat, important notifications and
                                        many more!</h2>
                                </div>
                            </div>
                        </div>
                        <div class="fas-content-section">
                            <div class="fas-content">
                                <div class="fas-content-left">
                                    <img src="{{ asset('frontend/assets/img/Artboard-14.webp') }}" alt="Artboard-14">
                                </div>
                                <div class="fas-content-right">
                                    <h2 class="fas-content-title">Get all resources at one place</h2>
                                    <h2 class="fas-content-deials">Online live lectures, recorded lectures, study
                                        materials, online exams, online results, live chat, important notifications and
                                        many more!</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fas-e-learning-platform-right-col">
                        <div class="fas-right-box">
                            <img src="{{ asset('frontend/assets/img/Artboard-11.webp') }}" alt="Artboard-11">
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}


        <!-- Industry Expert Trainers section  -->
        <div class="industry-expert-section ">
            <div class="container">
                <div class="row">
                    <div class="expert-section-head">
                        <div class="expert-head-section-title">
                            <h2 class="expert-heading-title">Industry Expert Trainers</h2>
                        </div>

                    </div>
                    <div class="expert-content-row">

                        @foreach ($item4 as $item4)


                        <div class="expert-column expert-column-1">
                            <div class="expert-column-inner">
                                <div class="expert-img">
                                    <img src="{{ url('images/'.$item4->image) }}" alt="Bashir">
                                </div>
                                <div class="expert-description">
                                    <div class="expart-name">
                                        <h2 class="expert-name-title">{{ $item4->name }}</h2>
                                    </div>
                                    <div class="expert-details">
                                        <p class="expert-details-content">{{ $item4->detail }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach










                    </div>
                </div>

            </div>
        </div>

        <!-- Corporate client section start here  -->
        <div class="corporate-client-section ">
            <div class="container">
                <div class="corporate-client-head">
                    <h2 class="corporate-client-heading-title ">Our Corporate Clients</h2>
                    <img src="{{ asset('frontend/assets/img/Artboard-9-2.webp') }}" alt="Artboard-9-2">
                </div>

                <div class="corporate-client-slider">
                    <div class="client-slider">
                        <div class="slide">
                            <img src="{{ asset('frontend/assets/img/bd-bank.webp') }}" alt="bd-bank">
                        </div>

                        <div class="slide">
                            <img src="{{ asset('frontend/assets/img/ucb.webp') }}" alt="ucb">
                        </div>
                        <div class="slide">
                            <img src="{{ asset('frontend/assets/img/city-bank.webp') }}" alt="city-bank">
                        </div>
                        <div class="slide">
                            <img src="{{ asset('frontend/assets/img/bank-asia.webp') }}" alt="bank-asia">
                        </div>
                        <div class="slide">
                            <img src="{{ asset('frontend/assets/img/dhaka-bank.webp') }}" alt="dhaka-bank">
                        </div>
                        <div class="slide">
                            <img src="{{ asset('frontend/assets/img/exim.webp') }}" alt="exim">
                        </div>
                        <div class="slide">
                            <img src="{{ asset('frontend/assets/img/islami-bank.webp') }}" alt="islami-bank">
                        </div>
                        <div class="slide">
                            <img src="{{ asset('frontend/assets/img/midas.webp') }}" alt="midas">
                        </div>
                        <div class="slide">
                            <img src="{{ asset('frontend/assets/img/midlandbank.webp') }}" alt="midlandbank">
                        </div>
                        <div class="slide">
                            <img src="{{ asset('frontend/assets/img/brackbank.webp') }}" alt="brackbank">
                        </div>
                        <div class="slide">
                            <img src="{{ asset('frontend/assets/img/czm.webp') }}" alt="czm">
                        </div>
                        <div class="slide">
                            <img src="{{ asset('frontend/assets/img/dhaka-commerce-college.webp') }}" alt="dhaka-commerce-college">
                        </div>
                        <div class="slide">
                            <img src="{{ asset('frontend/assets/img/mgi.webp') }}" alt="mgi">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- faq section start here  -->
        <div class="faq-section ">
            <div class="container">
                <div class="faq-row">
                    <div class="faq-main-section">
                        <div class="faq-heading">
                            <h2 class="faq-heading-title">FAQ?</h2>
                        </div>
                        <div class="faq-content">
                            <div class="faq-group">
                                <div class="faq-item-group">
                                    <div class="faq-item-title faq-item-title-1">
                                        <span class="question question-2">WHO SHOULD DO PGDHRM?</span>

                                        <span class="open-icon open-icon-1">
                                            <i class="fas fa-caret-down"></i>
                                        </span>
                                    </div>
                                    <div class="faq-item faq-item-1">
                                        <div class="video-icon faq-video-1">
                                            <h6>
                                                <img src="{{ asset('frontend/assets/img/Artboard-3-1.webp') }}" alt="Artboard-3-1">
                                            </h6>
                                        </div>
                                        <div class="faq-video">
                                            <iframe width="738" height="527" src="https://www.youtube.com/embed/8mhTN52UGeI" title="Who should do PGDHRM?" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="faq-group">
                                <div class="faq-item-group">
                                    <div class="faq-item-title faq-item-title-2">
                                        <span class="question question-2">WHAT ARE THE REQUIREMENTS FOR ADMISSION?</span>

                                        <span class="open-icon open-icon-2">
                                            <i class="fas fa-caret-down"></i>
                                        </span>
                                    </div>
                                    <div class="faq-item faq-item-2">
                                        <div class="video-icon">
                                            <h6>
                                                <img src="{{ asset('frontend/assets/img/Artboard-3-1.webp') }}" alt="Artboard-3-1">
                                            </h6>
                                        </div>
                                        <div class="faq-video faq-video-2">
                                            <iframe width="738" height="527" src="https://www.youtube.com/embed/ydpAN5QFgPM" title="What are the requirements for admission?" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="faq-group">
                                <div class="faq-item-group">
                                    <div class="faq-item-title faq-item-title-3">
                                        <span class="question question-3">CLASS SCHEDULE & PROCEDURES</span>

                                        <span class="open-icon open-icon-3">
                                            <i class="fas fa-caret-down"></i>
                                        </span>
                                    </div>
                                    <div class="faq-item faq-item-3">
                                        <div class="video-icon">
                                            <h6>
                                                <img src="{{ asset('frontend/assets/img/Artboard-3-1.webp') }}" alt="Artboard-3-1">
                                            </h6>
                                        </div>
                                        <div class="faq-video faq-video-3">
                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/AwYkB-SFhEI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="faq-group">
                                <div class="faq-item-group">
                                    <div class="faq-item-title faq-item-title-4">
                                        <span class="question question-4">WHO WILL PROVIDE CERTIFICATE?</span>

                                        <span class="open-icon open-icon-4">
                                            <i class="fas fa-caret-down"></i>
                                        </span>
                                    </div>
                                    <div class="faq-item faq-item-4">
                                        <div class="video-icon">
                                            <h6>
                                                <img src="{{ asset('frontend/assets/img/Artboard-3-1.webp') }}" alt="Artboard-3-1">
                                            </h6>
                                        </div>
                                        <div class="faq-video faq-video-4">
                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/ze3f63q4Mho" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="faq-group">
                                <div class="faq-item-group">
                                    <div class="faq-item-title faq-item-title-5">
                                        <span class="question question-5">PAYMENT METHOD</span>

                                        <span class="open-icon open-icon-5">
                                            <i class="fas fa-caret-down"></i>
                                        </span>
                                    </div>
                                    <div class="faq-item faq-item-5">
                                        <div class="video-icon">
                                            <h6>
                                                <img src="{{ asset('frontend/assets/img/Artboard-3-1.webp') }}" alt="Artboard-3-1">
                                            </h6>
                                        </div>
                                        <div class="faq-video faq-video-5">
                                            <iframe width="560" height="315"
                                                src="https://www.youtube.com/embed/7y-o69dC9Dg"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- contact-section start here  -->
        <div class="contact-section ">
            <div class="container">
                <div class="row">
                    <div class="contact-left-col">
                        <h2 class="contact-left-col-title">Do You Have Quistion?</h2>
                    </div>
                    <div class="contact-right-col">
                        <div class="contact-col-1">
                            <div class="contact-col-inner">
                                <svg xmlns="http://www.w3.org/2000/svg" id="FLIPPERS" height="512" viewBox="0 0 128 128"
                                    width="512">
                                    <path
                                        d="m121.5 64c1 0 1.7-.8 1.8-1.7v-21.8c0-1-.8-1.7-1.8-1.8h-4.8l-2.1-14.3c-.1-1-1-1.6-2-1.5l-27.1 4h-.1l-79.2 11.9s-1.5.3-1.5 1.7v21.7c0 1 .8 1.7 1.7 1.8 4.4 0 7.9 3.5 7.9 7.9s-3.5 7.9-7.9 7.9c-1 0-1.7.8-1.8 1.7v21.7c0 1 .8 1.7 1.8 1.8h115c1 0 1.7-.8 1.8-1.8v-21.6c0-1-.8-1.7-1.7-1.8-4.4 0-7.9-3.5-7.9-7.9s3.5-7.9 7.9-7.9zm-37.3-33.3.7 4.7c.1.9.9 1.5 1.7 1.5h.3c1-.1 1.6-1 1.5-2l-.7-4.7 23.7-3.5 1.8 12.1h-83.1zm35.6 52.5v18.4h-25.9v-4.8c0-1-.8-1.8-1.8-1.8s-1.8.8-1.8 1.8v4.8h-82v-18.4c6.2-1 10.5-6.8 9.5-13-.8-4.9-4.6-8.8-9.5-9.5v-18.4h82.1v4.7c0 1 .8 1.8 1.8 1.8s1.8-.8 1.8-1.8v-4.8h25.9v18.4c-6.2 1-10.5 6.8-9.5 13 .6 5 4.4 8.8 9.4 9.6z">
                                    </path>
                                    <path
                                        d="m92.1 74.6c-1 0-1.7.8-1.8 1.7v11.6c0 1 .8 1.8 1.8 1.8s1.8-.8 1.8-1.8v-11.5c0-1-.8-1.8-1.8-1.8z">
                                    </path>
                                    <path
                                        d="m92.1 54.2c-1 0-1.7.8-1.8 1.7v11.6c0 1 .8 1.8 1.8 1.8s1.8-.8 1.8-1.8v-11.6c0-.9-.8-1.7-1.8-1.7z">
                                    </path>
                                    <path
                                        d="m27.3 57h21.7c1 0 1.8-.8 1.8-1.8s-.8-1.7-1.8-1.7h-21.7c-1 0-1.8.8-1.8 1.8s.8 1.7 1.8 1.7z">
                                    </path>
                                    <path
                                        d="m70.7 64.6h-43.4c-1 0-1.8.8-1.8 1.8s.8 1.8 1.8 1.8h43.4c1 0 1.8-.8 1.8-1.8s-.8-1.8-1.8-1.8z">
                                    </path>
                                    <path
                                        d="m70.7 75.7h-43.4c-1 0-1.8.8-1.8 1.8s.8 1.8 1.8 1.8h43.4c1 0 1.8-.8 1.8-1.8s-.8-1.8-1.8-1.8z">
                                    </path>
                                    <path
                                        d="m70.7 86.8h-43.4c-1 0-1.8.8-1.8 1.8s.8 1.8 1.8 1.8h43.4c1 0 1.8-.8 1.8-1.8s-.8-1.8-1.8-1.8z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <div class="contact-col-2">
                            <div class="contact-content">
                                <h2 class="contact-content-title">Contact Us</h2>
                                <h2 class="contact-content-description">Just leave your mobile number with us! Our
                                    dedicated Support Team will contact you soon </h2>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Apply section start here   -->
        <div class="apply-section ">
            <div class="container">
                <div class="apply-row">
                    <h2 class="apply-section-title"><a href="#">Be part of Our Professional Family.</a></h2>
                    <h2 class="apply-section-title"><a href="#">Always be in Care.</a></h2>
                    <a href="#" class="apply-btn">Apply Now</a>
                </div>
            </div>
        </div>


    <div class="page-up-section">
        <div class="container">
            <a href="#" id="back-to-top-btn">
                <span>
                    <i class="qodef-icon-font-awesome fa fa-chevron-up "></i>
                </span>
            </a>
        </div>
    </div>


<!---------------------- Footer Section -------------------->
  @include('pages.frontend.footer')
