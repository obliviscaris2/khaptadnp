<span class="lang_select">
@if(count(config('app.languages')) > 1)
                  

<div>
  @foreach(config('app.languages') as $langLocale => $langName)
  <a class="" href="{{ url()->current() }}?change_language={{ $langLocale }}">{{ strtoupper($langLocale) }} </a>
  @endforeach
</div>

@endif

</span>

<nav class="navbar navigation-bar navbar-expand-lg navbar-light fixed-top">
    <div class="container-fluid nav-all " >
      
       
                
       
      
        <div class="nav-logo-container">
       
            <a href="{{ route('home') }}">
                <img class="nav-logo-img" src="{{ asset('uploads/sitesetting/' . $sitesetting->main_logo ?? "") }}" alt="">
            </a>
            <div class="green_header">
                
                <span class="green-color">{{__($sitesetting->gov_name ?? '')}}</span>
                <br>
                <span class="green-color">{{ __($sitesetting->min_name ?? '')}}</span>
                <br>
                <span class="green-color">{{ __($sitesetting->dep_name ?? '')}}</span>
            </div>
         
        <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item ">
                    <a class="nav-link text-success" aria-current="page" href="{{ route('home') }}"><i class="fa-solid fa-house-chimney" aria-current="page"></i></a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-success" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ __('About Us') }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item text-success" href="{{ route('introduction') }}">{{ __('Introduction') }}</a></li>
                        <li><a class="dropdown-item text-success" href="{{ route('services') }}">{{ __('Services') }}</a></li>
                        <li><a class="dropdown-item text-success" href="{{ route('team') }}">{{ __('Teams') }}</a></li>
                        
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-success" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ __('Reports') }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item text-success" href="{{ route('publications') }}">{{ __('Publication') }}</a></li>
                        <li><a class="dropdown-item text-success" href="{{ route('reports') }}">{{ __('Report') }}</a></li>
                        <li><a class="dropdown-item text-success" href="{{ route('programs') }}">{{ __('Program') }}</a></li>
                        <li><a class="dropdown-item text-success" href="{{ route('news') }}">{{ __('News') }}</a></li>
                    </ul>
                </li>
{{-- 
                <li class="nav-item">
                    <a class="nav-link text-success" href="{{ route('reports') }}">Reports</a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link text-success" href="{{ route('policies') }}">{{ __('Policies/Acts') }}</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link text-success" href="{{ route('programs') }}">Programs</a>
                </li> --}}
                {{-- <li class="nav-item">
                    <a class="nav-link text-success" href="{{ route('news') }}">News</a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link text-success" href="{{ route('blog') }}">{{ __('Blogs') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-success" href="{{ route('gallery') }}">{{ __('Gallery') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-success" href="{{ route('contact') }}">{{ __('Contact') }}</a>
                </li>
            </ul>
      </div>
    </div>
</nav>


   
   {{-- For Quick News --}}
   <section class="quick_news">
    <div class="container">
        <div class="news_slider columns">


            <button class="qn_button">
                {{ __('News') }}
            </button>
            <div class="news_track">

              
                    @foreach ($newsnav as $new )
                 
              
                <div class="news_slide">
                    <a href="">

                    <p>
                               
                          {{ $new->title }} 
                        </p>
                    </a>
                   
                </div>
 
                       
                @endforeach
             

              

              
            </div>
        </div>
    </div>
</section>
