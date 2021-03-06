<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Blogger') }}</title>
    <!--Bootstrap-->
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> --}}
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">



    <!-- BOOTSTRAP STYLES-->
    <link href="{{ asset('admin/css/bootstrap.css') }}" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    {{-- <link href="{{ asset('admin/css/font-awesome.css') }}" rel="stylesheet" /> --}}

    <!--CUSTOM BASIC STYLES-->
    <link href="{{ asset('admin/css/basic.css') }}" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="{{ asset('admin/css/custom.css') }}" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    @yield('css')

    <link href="{{ asset('admin/css/admin-custom.css') }}" rel="stylesheet">

    <script src="https://kit.fontawesome.com/90d5e9fe21.js" crossorigin="anonymous"></script>
</head>

<body>
    @include('admin.inc.messages')

    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">COPPER PLANET</a>
            </div>

            <div class="header-right">

                <a href="message-task.html" class="btn btn-info" title="New Message"><b>30 </b><i
                        class="fa fa-envelope-o fa-2x"></i></a>
                <a href="message-task.html" class="btn btn-primary" title="New Task"><b>40 </b><i
                        class="fa fa-bars fa-2x"></i></a>
                <a href="{{ route('logout') }}" class="btn btn-danger" title="Logout" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i
                        class="fa fa-exclamation-circle fa-2x"></i></a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="{{asset('img/logo.png')}}" class='img-responsive' />
                        </div>

                    </li>


                    <li>
                        <a class="active-menu" href="index.html"><i class="fa fa-dashboard "></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-desktop "></i>Blogs <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{route('admin.news')}}"><i class="fa fa-toggle-on"></i>All Blogs</a>
                            </li>
                            <li>
                                <a href="{{route('admin.news.add.page')}}"><i class="fa fa-bell "></i>Add Blog</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-desktop "></i>Team Members <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{route('admin.team.index')}}"><i class="fa fa-toggle-on"></i>All Team
                                    Members</a>
                            </li>
                            <li>
                                <a href="{{route('admin.team.add.page')}}"><i class="fa fa-bell "></i>Add Team
                                    Member</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-desktop "></i>Users <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{route('admin.users.index')}}"><i class="fa fa-toggle-on"></i>All Users</a>
                            </li>
                            <li>
                                <a href="{{route('admin.user.add')}}"><i class="fa fa-bell "></i>Add Users</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{route('admin.all_contacts')}} "><i class="fas fa-phone-alt"></i>Contacts</a>
                    </li>



                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            @include('admin.inc.messages')
            <div id="page-inner">
                @yield('content')
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

    <div id="footer-sec">
        &copy; 2014 YourCompany | Design By : <a href="http://www.binarytheme.com/" target="_blank">BinaryTheme.com</a>
    </div>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="{{ asset('admin/js/jquery-1.10.2.js') }}"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="{{ asset('admin/js/bootstrap.js') }}"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="{{ asset('admin/js/jquery.metisMenu.js') }}"></script>
    @yield('scripts')
    <!-- CUSTOM SCRIPTS -->
    <script src="{{ asset('admin/js/custom.js') }}"></script>
    <script>
        function toastAppear(){
            var toast= document.getElementById('toast');

            toast.style.display = 'block';
            toast.classList.add('hide-toast');
        }
        document.addEventListener('DOMContentLoaded', toastAppear);
    </script>

</body>

</html>