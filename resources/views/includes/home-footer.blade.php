{{-- <footer class="main-footer">
                    
    <div class="nav-logo-container footer-logo-container">
        @foreach ($sitesettings as $sitesetting )
        <img class="logo-image" src="{{ asset('uploads/sitesetting/' . $sitesetting->side_logo ?? "") }}" alt="">

        @endforeach

    </div>

    <div class="footer-options">

        <div class="footer-contents-container">
            
            <div class="footer-contact-container footer-title-container">
                <h3 class="footer-title" >Contact</h3>
                
                @foreach ($contacts as $contact)
                <i class="fa-solid fa-phone" style="margin-right: 4px"></i><p> {{ $contact->phone }}</p>
                
                <i class="fa-solid fa-envelope" style="margin-right: 4px"></i><p>{{ $contact->email }}</p>
                @endforeach
                <div class="footer-button-container">
                    <a href="{{ route('contact') }}">
                        <button class="footer-btn">Contact Us</button>
                    </a>
                </div>
            </div>
            

            
            <div class="footer-policy-container footer-title-container">
                <h3 class="footer-title">Policies</h3>
                @foreach ($policies as $policy )
                <a href="{{ route('policies') }}"><p>- {{ $policy->title }}</p></a>
                @endforeach
                <div class="footer-button-container">
                    <a href="{{ route('policies') }}">
                        <button class="footer-btn">More Policies</button>
                    </a>
                </div>
            </div>

            
            

            <div class="footer-programs-container footer-title-container">
                <h3 class="footer-title">Programs</h3>
                @foreach ($programs as $program )
                <a href="{{ route('programs') }}"><p>- {{ $program->title }}</p></a>
                @endforeach

                <div class="footer-button-container">
                    <a href="{{ route('programs') }}">
                        <button class="footer-btn">More Programs</button>
                    </a>
                </div>
                
            </div>

            <div class="footer-reports-container footer-title-container">
                <h3 class="footer-title">Reports</h3>
                @foreach ($reports as $report)
                <a href="{{ route('reports') }}"><p>- {{ $report->title }}</p></a>
                @endforeach
                
                <div class="footer-button-container">
                    <a href="{{ route('reports') }}">
                        <button class="footer-btn">More Reports</button>
                    </a>
                </div>
            </div>
        </div>
        
        <div class="footer-media-container">
            <ul class="social-media-list">
                <li class="social-media-icon"><i class="fa-brands fa-facebook"></i></li>
                <li class="social-media-icon"><i class="fa-brands fa-instagram"></i></li>
                <li class="social-media-icon"><i class="fa-regular fa-envelope"></i></li>
            </ul>

        </div>
    </div>
</footer>
<section class="website-end">
    <p class="website-end-para">Done by Aashatech Pvt Ltd</p>
</section> --}}

<style>

ul {
    margin: 0px;
    padding: 0px;
}

.footer-section {
  background: #e5e5e5;
  /* background-color: white; */
  /* position: relative; */
  width: 100%
  height: 500px;
  opacity: .9;
}

.footer-cta {
  border-bottom: 1px solid #373636;
}

.single-cta i {
  color: #65e16d;
  font-size: 30px;
  float: left;
  margin-top: 8px;
}

.cta-text {
  padding-left: 15px;
  display: inline-block;
}
.cta-text h4 {
  color: rgb(0, 0, 0);
  font-size: 20px;
  font-weight: 600;
  margin-bottom: 2px;
}
.cta-text span {
  color: #272727;
  font-size: 15px;
}
.footer-content {
  position: relative;
  z-index: 2;
}
.footer-pattern img {
  position: absolute;
  top: 0;
  left: 0;
  height: 330px;
  background-size: cover;
  background-position: 100% 100%;
}
.footer-logo {
  margin-bottom: 30px;
}
.footer-logo img {
    max-width: 200px;
}
.footer-text p {
  margin-bottom: 14px;
  font-size: 14px;
  color: #569459;
  line-height: 28px;
}
.footer-social-icon span {
    color: #272727;
    display: block;
    font-size: 20px;
    font-weight: 700;
  
  margin-bottom: 20px;
}
.footer-social-icon a {
  color: #fff;
  font-size: 16px;
  margin-right: 15px;
}
.footer-social-icon i {
  height: 40px;
  width: 40px;
  text-align: center;
  line-height: 38px;
  border-radius: 50%;
}
.facebook-bg{
  background: #3b58985b;
}

.twitter-bg{
  background:#3b58985b;
}

.footer-widget-heading h3 {
  color: rgb(0, 0, 0);
  font-size: 20px;
  font-weight: 600;
  margin-bottom: 40px;
  position: relative;
}
.footer-widget-heading h3::before {
  content: "";
  position: absolute;
  left: 0;
  bottom: -15px;
  height: 2px;
  width: 50px;
  background: #6ee953e7;
}

.footer-widget ul li {
  display: inline;
  float: left;
  width: 80%;
  margin-bottom: 5px;
}
.footer-widget ul li a:hover{
  color: #17f24e;
}
.footer-widget ul li a {
  color: #569459;
  text-transform: capitalize;
}
.subscribe-form {
  position: relative;
  overflow: hidden;
}
.subscribe-form input {
  width: 100%;
  padding: 14px 28px;
  background: #2E2E2E;
  border: 1px solid #2E2E2E;
  color: #fff;
}
.subscribe-form button {
    position: absolute;
    right: 0;
    background: #ff5e14;
    padding: 13px 20px;
    border: 1px solid #ff5e14;
    top: 0;
}
.subscribe-form button i {
  color: #fff;
  font-size: 22px;
  transform: rotate(-6deg);
}
.copyright-area{
  background: #ffffff66;
  padding: 10px 0;
  text-align: center;
  height: 50px;
}

.copyright-area p {
    color: green;
}

@media screen and (max-width: 580px) {
    .single-cta{
        margin-bottom: 1rem;
    }

    .footer-widget ul li a {
        color: green;
    }

    .footer-widget{
        margin-top: 1rem;
    }

    .copyright-area{
        font-size: 12px;
    }
}

</style>

 {{-- For Footer --}}

<footer class="footer-section ">
    <div class="container ">
        <div class="footer-cta pt-5 pb-5">
            <div class="row">
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="cta-text">
                            <h4>Find us</h4>
                            <span>{{ $sitesetting->address }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="fas fa-phone"></i>
                        <div class="cta-text">
                        <h4>Call us</h4>
                
                        <span>{{ $sitesetting->phone }}</span>
                       
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-4 mb-30">
                <div class="single-cta">
                    <i class="far fa-envelope-open"></i>
                    <div class="cta-text">
                        <h4>Mail us</h4>
                        
                        <span>{{ $sitesetting->email }}</span>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-content pt-5 pb-5">
        <div class="row">
            <div class="col-xl-4 col-lg-4 mb-50">
                <div class="footer-widget">
                    <div class="footer-logo">
                      
                        <a href="/"><img src="{{ asset('uploads/sitesetting/' . $sitesetting->side_logo ?? "") }}" class="img-fluid" alt="logo"></a>
              
                        
                    </div>
                    <div class="footer-text">
                        <p>Khaptad National Park is a protected area in the Far-Western Region, Nepal. Stretching over the four districts, it covers an area of 225 km2 (87 sq mi) and ranges in elevation from 1,400 m (4,600 ft) to 3,300 m (10,800 ft).</p>
                    </div>
                    <div class="footer-social-icon">
                        <span>Follow us</span>
                        <a href="{{ $sitesetting->face_link }}" target="_blank"><i class="fab fa-facebook-f facebook-bg"></i></a>
                        <a href="{{ $sitesetting->twitter }}"><i class="fab fa-twitter twitter-bg"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                <div class="footer-widget">
                    <div class="footer-widget-heading">
                        <h3>Useful Links</h3>
                    </div>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="{{ route('introduction') }}">About Us</a></li>
                        <li><a href="{{ route('publications') }}">Publications</a></li>
                        <li><a href="{{ route('reports') }}">Report</a></li>
                        <li><a href="{{ route('policies') }}">Policies</a></li>
                        <li><a href="{{ route('programs') }}">Programs</a></li>
                        <li><a href="{{ route('news') }}">News</a></li>
                        <li><a href="{{ route('blog') }}">Blog</a></li>
                        <li><a href="{{ route('gallery') }}">Gallery</a></li>
                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                        <li><a href="{{ route('team') }}">Our Team</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
                <div class="footer-widget">
                    <div class="footer-widget-heading">
                        <h3>More Links</h3>
                    </div>
                    <ul>
                        <li><a href="https://dnpwc.gov.np/en/" target="_blank">Department Of National Park & Wildlife Conservation</a></li>
                        <li><a href="https://doenv.gov.np/" target="_blank">Department of Environment</a></li>
                        <li><a href="http://www.mofe.gov.np/" target="_blank">Ministry of Forests & Environment</a></li>
                        <li><a href="https://frtc.gov.np/home" target="_blank">Forest Research & Training Center</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="copyright-area">
    <p>Copyright &copy; 2022, All Right Reserved Khaptad National Park</p>
</div>
</footer>