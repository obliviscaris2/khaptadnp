@extends('layouts.home-master')


@section('content')

    {{-- ====================================================================

            TITLE AND COVER IMAGE CAROUSEL STARTS HERE

    ==================================================================== --}}

    {{-- <div class="front-page-title">
        <h1 class="main-page-title">Welcome To Khaptad National Park</h1>
    </div> --}}

    <div class="carousel">
        <div class="slides">
            @foreach ($coverimages as $coverimage)
                <div class="slide">

                    <img src="{{ asset('uploads/coverimage/' . $coverimage->image) }}" alt="slide image" class="img_slide">

                </div>
            @endforeach
        </div>
        <div class="controls">
            <div class="control prev-slide">&#9668;</div>
            <div class="control next-slide">&#9658;</div>
        </div>
    </div>

    {{-- ====================================================================

            TITLE AND COVER IMAGE CAROUSEL ENDS HERE

    ==================================================================== --}}


    {{-- ====================================================================

            HOME MAIN CONTENTS STARTS HERE

    ==================================================================== --}}
    
    
    <div class="content-container">

    {{-- ====================================================================

            ABOUT/TEAM/MAP CONTENTS STARTS HERE

    ==================================================================== --}}

        <div class="home-about-container">
            
            @foreach ($abouts as $about)
            <div class="home-description-container">
                <h2 class="home-about-title">{{ $about->title }}</h2>
                <p class="home-about-para">
                
                    {!! $about->content  !!}
                 </p>
                @endforeach

                <div class="about-button-container">
                    <a href="{{ route('introduction') }}">
                        <button class="about-readmore-btn">Read More</button>
                    </a>  
                </div>
                <div class="map-container">
                    <a href="{{ asset('khaptadnpassets/landcover.webp') }}" target="_blank" rel="noopener noreferrer"><img class="map-image" src="{{ asset('khaptadnpassets/landcover.webp') }}" alt="khaptad-landcover-area"></a>
                </div>
            </div>



            <div class="home-team-container">
                @foreach ($teams as $team)
                <div class="home-team-card ">
                    <span class="home-team-role">{{ $team->role }}</span>
                    <img class="home-team-image" src="{{ asset('uploads/team/' . $team->image) }}" alt="team image">
                    <span class="home-team-name">{{ $team->name }}</span>
                    <span class="home-team-position">{{ $team->position }}</span>
                </div>
                @endforeach
            </div>
        </div>
         

    {{-- ====================================================================

            ABOUT/TEAM/MAP CONTENTS ENDS HERE

    ==================================================================== --}}


    {{-- ====================================================================

            NEWS/REPORT/PUBLICATIONS SECTION CONTENTS STARTS HERE

    ==================================================================== --}}

        <div class="news-section-container">
            <div class="single-container">
                <h3 class="news-title">News</h3>
                @foreach ($news as $new )
                <h5 class="news-section-title">{{$new->title}}</h5>
                <p class="news-description">{!! Str::substr($new->description, 0, 40) !!}...<a class="green-color" href="{{ route('news') }}">See more</a> </p>
                <hr>
                @endforeach
                <div class="button-container">
                    <a href="{{route('news')}}">
                        <button class="btn">Read More</button>
                    </a>
                </div>

            </div>

            <div class="single-container">
                <h3 class="reports-title news-title">Reports</h3>
                @foreach ($reports as $report )
                <h5 class="news-section-title">{{$report->title}}</h5>
                <div>
                    {{-- <p>{{ $report->description }} <a href="">See more</a></p> --}}
                    <a href="{{ asset('uploads/reports/' . $report->file) }}" target="_blank">
                        <p class="file">{{ $report->file }} </p>
                        <a href="" download="{{ $report->file }}"><i class="fa-solid fa-download" style="margin-right: 5px"></i>Download</a>
                    </a>
                </div>
                <hr>
                @endforeach
                <div class="button-container">
                    <a href="{{route('reports')}}">
                        <button class="btn">Read More</button>
                    </a>
                </div>

            </div>

            <div class="single-container">
                <h3 class="publication-title news-title">Publications</h3>
                @foreach ($publications as $publication )
                <h5 class="news-section-title">{{ $publication->title }}</h5>
                <div>
                    <a href="{{ asset('uploads/publications/' . $publication->file) }}" target="_blank">
                        <p class="file">{{ $publication->file }} </p>
                        <a href="" download="{{ $publication->file }}"><i class="fa-solid fa-download" style="margin-right: 5px"></i>Download</a>
                    </a>
                    
                </div>
                <hr>
                @endforeach
                <div class="button-container">
                    <a href="{{route('publications')}}">
                        <button class="btn">Read More</button>
                    </a>
                </div>

            </div>

        </div>
    {{-- ====================================================================

            NEWS/REPORT/PUBLICATIONS SECTION CONTENTS STARTS HERE

    ==================================================================== --}}


    {{-- ====================================================================

           GALLERY SECTION CONTENTS STARTS HERE

    ==================================================================== --}}

        <h2 class="gallery-title">Gallery</h2>

                <div class="home-gallery-container">
                    @foreach ($galleries as $gallery )
                    <div class="home-gallery-card">
                        <div class="img-container">
                            <a href="{{ asset('uploads/gallery/' . $gallery->image) }}" data-lightbox="mygallery" data-title="{{ $gallery->title }}">
                                <img  class="gallery-card-image" src="{{ asset('uploads/gallery/' . $gallery->image)  }}" alt="gallery-images" style="width:100%; height: 300px">
                            </a>
                        </div>
                        
                        <div class="gallery-title-container">
                            <p>{{ $gallery->title }}</p>
                        </div>
                      </div>
                    @endforeach
                    
                </div>
    
    {{-- ====================================================================

           GALLERY SECTION CONTENTS ENDS HERE

    ==================================================================== --}}

    {{-- ====================================================================

           BLOG SECTION CONTENTS STARTS HERE

    ==================================================================== --}}

                <div class="news-section-container blogpost-section-container">

                    <div class="single-container">
                        <h2 class="gallery-title blog-title">Blog Posts</h2>
                        @foreach ($blogs as $blog )
                        <h4 style="color: black">{{$blog->title}}</h4>
                        <p style="color: green"><span style="color: black;">By: </span> {{ $blog->author }}</p>
                        
                        <p class="blog-description">{!! Str::substr($blog->description, 0, 248) !!}...</p>
                        <hr>
                        @endforeach
                        <div class="button-container">
                            <a href="{{ route('blog') }}">
                                <button class="blog-btn btn">Read More</button> 
                            </a>  
                        </div>
    
                    </div>
                </div>

    {{-- ====================================================================

           BLOG SECTION CONTENTS ENDS HERE

    ==================================================================== --}}

    {{-- ====================================================================

           CONTACT SECTION CONTENTS STARTS HERE

    ==================================================================== --}}
                <h2 class="gallery-title home-contact-title"> Contact Us</h1>
                <section id="contact">

                    <div class="contact-box">
                      <div class="contact-links">
                        
                        <div id="googleMap" class="google-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d124879.66831699565!2d81.07899856872054!3d29.3783955973332!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39a3c7039e06e43d%3A0x2bf2b6c6e596a807!2sKhaptad%20National%20Park!5e0!3m2!1sen!2snp!4v1666250713917!5m2!1sen!2snp" width="100%" height="400" style="border:4" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                      </div>
                      <div class="contact-form-wrapper">
                        <form action="{{ route('userfeedback.homestore') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                          <div class="form-item">
                            <input type="text"  name="name" placeholder="Name:" required>
                            <label></label>
                          </div>
                          <div class="form-item">
                            <input type="text" placeholder="Email:" name="email" required>
                            <label></label>
                          </div>
                          <div class="form-item">
                            <input type="text" name="phone" placeholder="Phone:" required>
                            <label></label>
                          </div>
                          <div class="form-item">
                            <textarea class="" name="message" placeholder="Message:" required></textarea>
                            <label></label>
                          </div>
                          <div class="captcha">
                            {!! NoCaptcha::renderJs() !!}
                            {!! NoCaptcha::display() !!}
                          </div>
                          
                          <button type="submit" class="contact-submit-btn">Submit</button>
                        </form>
                      </div>
                    </div>
                  </section>
    {{-- ====================================================================

           CONTACT SECTION CONTENTS ENDS HERE

    ==================================================================== --}}

        
                
    {{-- ====================================================================

            HOME MAIN CONTENTS ENDS HERE

    ==================================================================== --}}


    {{-- ====================================================================

           SCRIPT FOR CAROUSEL

    ==================================================================== --}}

    <script>

        // COVER IMAGE SLIDER
    
        const delay = 3000; //ms
    
        const slides = document.querySelector(".slides");
        const slidesCount = slides.childElementCount;
        const maxLeft = (slidesCount - 1) * 100 * -1;
    
        let current = 0;
    
        function changeSlide(next = true) {
            if (next) {
                current += current > maxLeft ? -100 : current * -1;
            } else {
                current = current < 0 ? current + 100 : maxLeft;
            }
    
            slides.style.left = current + "%";
        }
    
        let autoChange = setInterval(changeSlide, delay);
        const restart = function() {
            clearInterval(autoChange);
            autoChange = setInterval(changeSlide, delay);
        };
    
        // Controls
        document.querySelector(".next-slide").addEventListener("click", function() {
            changeSlide();
            restart();
        });
    
        document.querySelector(".prev-slide").addEventListener("click", function() {
            changeSlide(false);
            restart();
        });
    
        
    </script>


@endsection





    
