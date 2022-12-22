<!DOCTYPE html>
<html lang="en">
    @include('includes.home-head')
<body>


    <div class="whole-content-container">
        @include('includes.home-navbar')
        <div class="main-content-container">
            @yield('content')

            
        </div>
        
    </div>
    @include('includes.home-footer')
    @include('includes.home-script')
</body>
</html>