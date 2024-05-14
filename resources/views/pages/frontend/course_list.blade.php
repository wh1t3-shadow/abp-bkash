@include('pages.frontend.head')
    <!-- header-section -->

    <section class="our-courses-section">
        <div class="container">
            <div class="row">
                <h1>Our Courses</h1>
            </div>
        </div>
    </section>

    <section class="course-list-section">
        <div class="container">
            <div class="row">
                <div class="course-list-column">
                    @foreach ($dta as $item)


                    <div class="course-item">
                        <div class="course-img">
                            <a href="{{ url('course-single/'.$item->id) }}"><img src="{{ url('images/'.$item->course_image) }}"></a>
                        </div>
                         <div class="course-content">
                            <a href="{{ url('course-single/'.$item->id) }}">
                                <h2>{{ $item->course_title }}</h2>
                                <p style="overflow: hidden; height: 153px;">{{ $item->course_description }}</p>
                                <a href="{{ url('course-single/'.$item->id) }}" class="button">View More</a>
                            </a>
                        </div>
                    </div>
                    @endforeach




                </div>
                    {{-- <nav aria-label="Page navigation example">
                      <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                          <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#">Next</a>
                        </li>
                      </ul>
                    </nav> --}}
                    {{ $dta->links() }}
            </div>
        </div>
    </section>


<!---------------------- Footer Section -------------------->
   @include('pages.frontend.footer')
