{{--
<!DOCTYPE html>
<html>
<head>
@include('layouts.frontend.head')


</head>
<body>
    @include('layouts.frontend.header')

    <div class="container-fluid home-container">
        <div class="container home-container">

            @include('layouts.frontend.home_page_pc_sidebar')

            <div class="destop-center-content">

                @yield('content')
            </div>

            @include('layouts.frontend.right_content')
        </div>

    </div>
    <br>


    @include('layouts.frontend.footer')
</body>

</html> --}}




<!DOCTYPE html>
<html lang="en">
    @include('layouts.frontend.head')



<body>
    <div class="wrapper">
        @include('layouts.frontend.header')

        @yield('content')

        @include('layouts.frontend.footer')


       @include('layouts.frontend.js-link')
    </div>


    @yield('js')
</body>


</html>
