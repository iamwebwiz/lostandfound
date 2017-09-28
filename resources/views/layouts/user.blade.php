<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="">
    <meta name="author" content="Oladejo Ezekiel">
    <meta name="author" content="Webwiz">
    <meta name="author" content="Noticeboard Team">

    <title>@yield('title', 'Dashboard')</title>

    <link rel="apple-touch-icon" href="{{ asset('dashboard/assets/images/apple-touch-icon.png') }}">
    <link rel="shortcut icon" href="{{ asset('dashboard/assets/images/favicon.ico') }}">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('dashboard/css/bootstrap.min3f0d.css?v2.2.0') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/css/bootstrap-extend.min3f0d.css?v2.2.0') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/assets/css/site.min3f0d.css?v2.2.0') }}">

    <!-- Skin tools (demo site only) -->
    <link rel="stylesheet" href="{{ asset('dashboard/css/skintools.min3f0d.css?v2.2.0') }}">
    <script src="{{ asset('dashboard/assets/js/sections/skintools.min.js') }}"></script>

    <!-- Plugins -->
    <link rel="stylesheet" href="{{ asset('dashboard/vendor/animsition/animsition.min3f0d.css?v2.2.0') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/vendor/asscrollable/asScrollable.min3f0d.css?v2.2.0') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/vendor/switchery/switchery.min3f0d.css?v2.2.0') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/vendor/intro-js/introjs.min3f0d.css?v2.2.0') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/vendor/slidepanel/slidePanel.min3f0d.css?v2.2.0') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/vendor/flag-icon-css/flag-icon.min3f0d.css?v2.2.0') }}">

    <!-- Plugins For This Page -->
    <link rel="stylesheet" href="{{ asset('dashboard/vendor/chartist-js/chartist.min3f0d.css?v2.2.0') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/vendor/aspieprogress/asPieProgress.min3f0d.css?v2.2.0') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.min3f0d.css?v2.2.0') }}">

    <!-- Page -->
    <link rel="stylesheet" href="{{ asset('dashboard/assets/examples/css/dashboard/ecommerce.min3f0d.css?v2.2.0') }}">

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('dashboard/fonts/web-icons/web-icons.min3f0d.css?v2.2.0') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/fonts/brand-icons/brand-icons.min3f0d.css?v2.2.0') }}">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

    <link rel="stylesheet" href="{{ asset('dashboard/fonts/font-awesome/font-awesome.min3f0d.css?v2.2.0') }}">

    <!--[if lt IE 9]>
    <script src="{{ asset('dashboard/vendor/html5shiv/html5shiv.min.js') }}"></script>
    <![endif]-->

    <!--[if lt IE 10]>
    <script src="{{ asset('dashboard/vendor/media-match/media.match.min.js') }}"></script>
    <script src="{{ asset('dashboard/vendor/respond/respond.min.js') }}"></script>
    <![endif]-->

    <!-- Scripts -->
    <script src="{{ asset('dashboard/vendor/modernizr/modernizr.min.js') }}"></script>
    <script src="{{ asset('dashboard/vendor/breakpoints/breakpoints.min.js') }}"></script>

    <!-- JQuery -->
    <script src="{{ asset('dashboard/vendor/jquery/jquery.min.js') }}"></script>

    {{-- Custom --}}
    <script src="{{ asset('js/lnf.js') }}"></script>

    {{-- TinyMCE Editor --}}
    <script src="{{ asset('js/tinymce/tinymce.min.js') }}"></script>
    <script>
        Breakpoints();
    </script>

    {{-- Extra styling --}}
    <style>
        .bigbutton {
            width: 100%;
            padding: 10px;
            display: block;
            font-size: 15pt;
            border-radius: 25px;
        }

        a.btn {
            text-decoration: none;
        }
    </style>
</head>

<body>

<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">

    <div class="navbar-header">
        <button type="button" class="navbar-toggle hamburger hamburger-close navbar-toggle-left hided"
                data-toggle="menubar">
            <span class="sr-only">Toggle navigation</span>
            <span class="hamburger-bar"></span>
        </button>
        <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-collapse"
                data-toggle="collapse">
            <i class="icon wb-more-horizontal" aria-hidden="true"></i>
        </button>
        <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
            <img class="navbar-brand-logo" src="{{ asset('dashboard/assets/images/logo.png') }}" title="Remark">
            <span class="navbar-brand-text hidden-xs"> LostAndFound</span>
        </div>
        <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-search"
                data-toggle="collapse">
            <span class="sr-only">Toggle Search</span>
            <i class="icon wb-search" aria-hidden="true"></i>
        </button>
    </div>

    <div class="navbar-container container-fluid">
        <!-- Navbar Collapse -->
        <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
            <!-- Navbar Toolbar -->
            <ul class="nav navbar-toolbar">
                <li class="hidden-float" id="toggleMenubar">
                    <a data-toggle="menubar" href="#" role="button">
                        <i class="icon hamburger hamburger-arrow-left">
                            <span class="sr-only">Toggle menubar</span>
                            <span class="hamburger-bar"></span>
                        </i>
                    </a>
                </li>
                <li class="hidden-xs" id="toggleFullscreen">
                    <a class="icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
                        <span class="sr-only">Toggle fullscreen</span>
                    </a>
                </li>
                <li class="hidden-float">
                    <a class="icon wb-search" data-toggle="collapse" href="#" data-target="#site-navbar-search"
                       role="button">
                        <span class="sr-only">Toggle Search</span>
                    </a>
                </li>

            </ul>
            <!-- End Navbar Toolbar -->

            <!-- Navbar Toolbar Right -->
            <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">

                <li class="dropdown">
                    <a data-toggle="dropdown" href="javascript:void(0)" title="Notifications" aria-expanded="false"
                       data-animation="scale-up" role="button">
                        Hello, {{ Auth::guard('web')->user()->email }}
                    </a>

                </li>
                <li class="dropdown">
                    <a class="navbar-avatar dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false"
                       data-animation="scale-up" role="button">
              <span class="avatar avatar-online">
                <img src="{{ asset('dashboard/portraits/5.jpg') }}" alt="...">
                <i></i>
              </span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li role="presentation">
                            <a href="/profile" role="menuitem"><i class="icon wb-user" aria-hidden="true"></i> Profile</a>
                        </li>
                        {{-- <li role="presentation">
                            <a href="" role="menuitem"><i class="icon wb-settings" aria-hidden="true"></i> Password Reset</a>
                        </li> --}}
                        <li class="divider" role="presentation"></li>
                        <li role="presentation">
                            <a href="/logout" role="menuitem">
                                <i class="icon wb-power" aria-hidden="true"></i> Logout
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)" data-animation="scale-up"
                       aria-expanded="false">
                        <span class="flag-icon flag-icon-ng"></span>
                    </a>
                </li> --}}

            </ul>
        </div>
        <!-- End Navbar Collapse -->

        <!-- Site Navbar Seach -->
        <div class="collapse navbar-search-overlap" id="site-navbar-search">
            <form role="search">
                <div class="form-group">
                    <div class="input-search">
                        <i class="input-search-icon wb-search" aria-hidden="true"></i>
                        <input type="search" class="form-control" name="site-search" placeholder="Search...">
                        <button type="button" class="input-search-close icon wb-close" data-target="#site-navbar-search" data-toggle="collapse" aria-label="Close"></button>
                    </div>
                </div>
            </form>
        </div>
        <!-- End Site Navbar Seach -->
    </div>
</nav>

<div class="site-menubar">
    <div class="site-menubar-body">
        <div>
            <div>
                <ul class="site-menu">
                    <li class="site-menu-category">General</li>
                    <li class="site-menu-item">
                        <a href="/home">
                            <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                            <span class="site-menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="site-menu-item">
                        <a href="/profile">
                            <i class="site-menu-icon wb-user" aria-hidden="true"></i>
                            <span class="site-menu-title">Profile</span>
                        </a>
                    </li>
                    <li class="site-menu-item">
                        <a href="/profile/edit">
                            <i class="site-menu-icon wb-edit" aria-hidden="true"></i>
                            <span class="site-menu-title">Edit Profile</span>
                        </a>
                    </li>
                    <li class="site-menu-item">
                        <a href="/items">
                            <i class="site-menu-icon wb-list" aria-hidden="true"></i>
                            <span class="site-menu-title">Posted Items</span>
                        </a>
                    </li>

                    <li class="site-menu-item">
                        <a href="/items/new">
                            <i class="site-menu-icon wb-plus" aria-hidden="true"></i>
                            <span class="site-menu-title">Add new item</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="site-menubar-footer">
        {{-- <a href="javascript: void(0);" class="fold-show" data-placement="top" data-toggle="tooltip"
           data-original-title="Settings">
            <span class="icon wb-settings" aria-hidden="true"></span>
        </a> --}}
        {{-- <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Lock">
            <span class="icon wb-eye-close" aria-hidden="true"></span>
        </a> --}}
        <a href="/logout" class="fold-show" data-placement="top" data-toggle="tooltip" data-original-title="Logout">
            <span class="icon wb-power" aria-hidden="true"></span>
        </a>
    </div>
</div>

<!-- Page -->
<div class="page animsition">
    @yield('body')
</div>
<!-- End Page -->

<!-- Footer -->
<footer class="site-footer">
    <div class="site-footer-legal">&copy; <?php echo date('Y'); ?>
        <a href="https://twitter.com/oaunoticeboard">Noticeboard&rsquo;s Lost &lsquo;n&rsquo; Found</a>
    </div>
    <div class="site-footer-right">
        Made with <i class="red-600 wb wb-heart"></i> by <a href="https://github.com/iamwebwiz">Oladejo Ezekiel (Webwiz)</a>
    </div>
</footer>
<!-- Core  -->
<script src="{{ asset('dashboard/vendor/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ asset('dashboard/vendor/animsition/animsition.min.js') }}"></script>
<script src="{{ asset('dashboard/vendor/asscroll/jquery-asScroll.min.js') }}"></script>
<script src="{{ asset('dashboard/vendor/mousewheel/jquery.mousewheel.min.js') }}"></script>
<script src="{{ asset('dashboard/vendor/asscrollable/jquery.asScrollable.all.min.js') }}"></script>
<script src="{{ asset('dashboard/vendor/ashoverscroll/jquery-asHoverScroll.min.js') }}"></script>

<!-- Plugins -->
<script src="{{ asset('dashboard/vendor/switchery/switchery.min.js') }}"></script>
<script src="{{ asset('dashboard/vendor/intro-js/intro.min.js') }}"></script>
<script src="{{ asset('dashboard/vendor/screenfull/screenfull.min.js') }}"></script>
<script src="{{ asset('dashboard/vendor/slidepanel/jquery-slidePanel.min.js') }}"></script>

<!-- Plugins For This Page -->
<script src="{{ asset('dashboard/vendor/chartist-js/chartist.min.js') }}"></script>
<script src="{{ asset('dashboard/vendor/aspieprogress/jquery-asPieProgress.min.js') }}"></script>
<script src="{{ asset('dashboard/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.min.js') }}"></script>

<!-- Scripts -->
<script src="{{ asset('dashboard/js/core.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/site.min.js') }}"></script>

<script src="{{ asset('dashboard/assets/js/sections/menu.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/sections/menubar.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/sections/gridmenu.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/sections/sidebar.min.js') }}"></script>

<script src="{{ asset('dashboard/js/configs/config-colors.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/configs/config-tour.min.js') }}"></script>

<script src="{{ asset('dashboard/js/components/asscrollable.min.js') }}"></script>
<script src="{{ asset('dashboard/js/components/animsition.min.js') }}"></script>
<script src="{{ asset('dashboard/js/components/slidepanel.min.js') }}"></script>
<script src="{{ asset('dashboard/js/components/switchery.min.js') }}"></script>

<script src="{{ asset('dashboard/js/components/aspieprogress.min.js') }}"></script>

<script src="{{ asset('dashboard/assets/examples/js/dashboard/ecommerce.min.js') }}"></script>

</body>
</html>
