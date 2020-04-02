 @extends('layouts.master')
 @section('navbar')

<div class="custom-menu">
    <button class="navbar-toggler" id="sidebarCollapse" type="button" data-target="#sidebar" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">

    <span class="navbar-toggler-icon"></span>

</button>
</div>

@endsection

@section('content')
<div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar">

        <div class="img bg-wrap text-center py-4" style="background-image: url(images/bg_1.jpg);">
            <div class="user-logo">
                <div class="img" style="background-image: url(images/logo.jpg);"></div>
                <h3>Catriona Henderson</h3>
            </div>
        </div>
        <ul class="list-unstyled components mb-5">
            <li class="active">
                <a href="#"><span class="fa fa-home mr-3"></span> Home</a>
            </li>
            {{--
            <li>
                <a href="#"><span class="fa fa-download mr-3 notif"><small class="d-flex align-items-center justify-content-center">5</small></span> Download</a>
            </li> --}}
            <li>
                <a href="#"><span class="fa fa-user mr-3"></span> profile</a>
            </li>
            <li>
                <li>
                    <a href="#"><span class="fa fa-users mr-3"></span> Etudiants</a>
                </li>
                <li>
                    <li>
                        <a href="#"><span class="fa fa-calendar mr-3"></span> Classes</a>
                    </li>
                    <li>
                        <a href="#"><span class="fa fa-edit mr-3"></span> Notes</a>
                    </li>
                    <li>
                        <a href="#"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
                    </li>
        </ul>

    </nav>

    <!-- Page Content  -->
    <div id="content" class="p-4 p-md-5 pt-5">
        <h2 class="mb-4">Sidebar #09</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
            irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
            irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
</div>


@endsection
