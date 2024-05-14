@include('pages.frontend.head')
        <section class="blog-page-cover-section">
            <div class="container">
                <div class="row">
                    <h1>{{ $data1->title }}</h1>
                </div>
            </div>
        </section>
        <section class="blogpage-content-section">
            <div class="container">
                <div class="page-row">
                    <div class="content-column">
                        <img src="{{ asset('images/'.$data1->image) }}" alt="Blog Single Thumbnail">
                        <p>{{ $data1->dis }} </p>
                         </div>
                </div>
            </div>
        </section>

        {{-- <section class="blogpage-grid-section">
            <div class="container">
                <div class="row">
                    <h3>More Related Blog</h3>
                    <div class="grid-column">
                        <div class="grid-content">
                            <a href="#">
                                <img src="assets/img/blog/dorF.webp" alt="Blog Thubnail">
                                <h2>Dream Job or First Job</h2>
                                <p>ক্যারিয়ারের শুরুতে আপনি “ড্রিম জব” না পেলেও, প্রথম জব থেকে আপনি অনেক কিছু শিখতে পারেন।</p>
                            </a>
                        </div>
                    </div>
                    <div class="grid-column">
                        <div class="grid-content">
                            <a href="#">
                                <img src="assets/img/blog/dorF.webp" alt="Blog Thubnail">
                                <h2>Dream Job or First Job</h2>
                                <p>ক্যারিয়ারের শুরুতে আপনি “ড্রিম জব” না পেলেও, প্রথম জব থেকে আপনি অনেক কিছু শিখতে পারেন।</p>
                            </a>
                        </div>
                    </div>
                    <div class="grid-column">
                        <div class="grid-content">
                            <a href="#">
                                <img src="assets/img/blog/dorF.webp" alt="Blog Thubnail">
                                <h2>Dream Job or First Job</h2>
                                <p>ক্যারিয়ারের শুরুতে আপনি “ড্রিম জব” না পেলেও, প্রথম জব থেকে আপনি অনেক কিছু শিখতে পারেন।</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
<br><br><br><br>
   @include('pages.frontend.footer')
