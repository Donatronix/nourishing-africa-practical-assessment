<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="description" content="Nourishing Africa Practical assessment.">
    <!-- Twitter meta-->
    <title>Nourishing Africa Practical Assessment - @yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css"
          href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    @yield('styles')

</head>

<body class="app sidebar-mini rtl">
<!-- Navbar-->
<header class="app-header">
    <a class="app-header__logo" href="{{ url('/') }}">Nourishing Africa</a>
    <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"
                                    aria-label="Hide Sidebar"></a>
    <!-- Navbar Right Menu-->
    <ul class="app-nav">
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i
                    class="fa fa-user fa-lg"></i> {{ auth()->user()->name }}</a>
            <ul class="dropdown-menu settings-menu dropdown-menu-right">
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                            <i class="fa fa-sign-out fa-lg"></i>
                            Logout
                        </a>
                    </form>
                </li>
            </ul>
        </li>
    </ul>
</header>
@yield('content')

<!-- Essential javascripts for application to work-->
<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<!-- The javascript plugin to display page loading on top-->
<script src="{{ asset('js/plugins/pace.min.js') }}"></script>
<!-- Page specific javascripts-->

@yield('scripts')
</body>

</html>
