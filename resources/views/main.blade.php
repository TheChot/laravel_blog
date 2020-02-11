<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Blogger') }}</title>
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ed211401f8.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="mynav-front">
        <ul class="myNav-list mynav-left">
            <li><a href="{{route('home')}}">Home</a></li>
            <li><a href="{{route('blog')}}">News</a></li>
            <li><a href="{{route('team')}}">Team</a></li>
            <li><a href="{{route('contact_us')}}">Contact Us</a></li>
            <li>About Us</li>
        </ul>
        <div class="mynav-img">
            <img src="{{asset('img/logo.png')}}" class="img-responsive" alt="">
        </div>
        <ul class="myNav-list mynav-right">
            <li>Home</li>
            <li>Home</li>
            <li>Home</li>
            <li>Home</li>
        </ul>
    </div>

    @yield('content')

    <div class="my-footer section-150">
        <div class="container">
            <div class="footer-title">
                <div class="myfooter-img">
                    <img src="{{asset('img/logo.png')}}" class="img-fluid" alt="">

                </div>
                <h4>LARAVEL BLOGGER APPLICATION: MADE FOR EASE</h4>

            </div>
            <div class="row footer-col-container">
                <div class="col-md-4 footer-col">
                    <h4> Learn More </h4>
                    <p><a href="{{route('blog')}}">NEWS</a></p>
                    <p>APPLY NOW</p>
                    <p>CONTACT US</p>
                    <p>ABOUT US</p>

                </div>
                <div class="col-md-4 footer-col">
                    <h4> Contact Us </h4>
                    <p>+2609999999999</p>
                    <p>+2609999999999</p>
                    <p>+2609999999999</p>
                    <p>EMAIL@COPPERPLANET.COM</p>
                    <p>EMAIL@COPPERPLANET.COM</p>


                </div>
                <div class="col-md-4 footer-col">
                    <h4> Our Addresses </h4>
                    <p>35 MUMBWA ROAD</p>
                    <p>LUSAKA WEST</p>
                    <p>LUSAKA</p>
                    <p>ZAMBIA</p>


                </div>
            </div>

        </div>

    </div>
    <!--Bootstrap Scripts-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <!--Bootstrap Scripts End -->
    @yield('scripts')
</body>

</html>