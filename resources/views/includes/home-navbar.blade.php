<nav class="navbar navigation-bar navbar-expand-lg navbar-light fixed-top">
    <div class="container-fluid nav-all " >
        <div class="nav-logo-container">
       
            <a href="{{ route('home') }}"><img class="nav-logo-img" src="{{ asset('uploads/sitesetting/' . $sitesetting->main_logo ?? "") }}" alt=""></a>
            <div>
                <span class="green-color">{{ $sitesetting->gov_name }}</span>
                <br>
                <span class="green-color">{{ $sitesetting->min_name }}</span>
                <br>
                <span class="green-color">{{ $sitesetting->dep_name }}</span>
            </div>
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
                    Abouts
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item text-success" href="{{ route('introduction') }}">Introduction</a></li>
                        <li><a class="dropdown-item text-success" href="{{ route('services') }}">Services</a></li>
                        <li><a class="dropdown-item text-success" href="{{ route('team') }}">Team</a></li>
                        
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-success" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Reports
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item text-success" href="{{ route('publications') }}">Publications</a></li>
                        <li><a class="dropdown-item text-success" href="{{ route('reports') }}">Reports</a></li>
                        <li><a class="dropdown-item text-success" href="{{ route('programs') }}">Programs</a></li>
                        <li><a class="dropdown-item text-success" href="{{ route('news') }}">News</a></li>
                    </ul>
                </li>
{{-- 
                <li class="nav-item">
                    <a class="nav-link text-success" href="{{ route('reports') }}">Reports</a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link text-success" href="{{ route('policies') }}">Policies/Acts</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link text-success" href="{{ route('programs') }}">Programs</a>
                </li> --}}
                {{-- <li class="nav-item">
                    <a class="nav-link text-success" href="{{ route('news') }}">News</a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link text-success" href="{{ route('blog') }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-success" href="{{ route('gallery') }}">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-success" href="{{ route('contact') }}">Contact Us</a>
                </li>
            </ul>
      </div>
    </div>
</nav>

