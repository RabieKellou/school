<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <title>OWA | @yield('title','Bienvenue')</title>
</head>

<body>
    <header id="main-header">
        <!-- Navigation -->
        <nav id="navbar" class="navbar navbar-expand-lg navbar-dark bg-dark shadow fixed-top">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="{{asset('images/logo.svg')}}" alt="skool logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        {{--
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Présentation
                                <span class="sr-only">(current)</span>
                            </a>
                        </li> --}}
                        <li class="nav-item active">
                            <a class="nav-link" href="#news">Actualités
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#news">Espace Etudiant</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#news">Espace Enseignant</a>
                        </li>
                        {{--
                        <li class="nav-item dropdown dmenu">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                Espace Etudiant
                            </a>
                            <div class="dropdown-menu sm-menu">
                                <a class="dropdown-item" href="#">informations</a>
                                <a class="dropdown-item" href="#">Consultation de notes</a>
                                <a class="dropdown-item" href="#"></a>
                            </div>
                        </li> --}} {{--
                        <li class="nav-item dropdown dmenu">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                Espace Enseignant
                            </a>
                            <div class="dropdown-menu sm-menu">
                                <a class="dropdown-item" href="#">Consultation des notes</a>
                                <a class="dropdown-item" href="#">service 2</a>
                                <a class="dropdown-item" href="#">service 3</a>
                            </div>
                        </li> --}}
                        <li class="nav-item">
                            <a class="nav-link" href="#">Departements</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>

                        <button class="btn btn-primary ml-2">login</button>

                    </ul>
                </div>
            </div>
        </nav>
        @yield('slider')
    </header>






    @yield('content')



    <!-- Footer -->
    <section id="footer">
        <div class="container">
            <div class="row text-center text-xs-center text-sm-left text-md-left">
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5>Quick links</h5>
                    <ul class="list-unstyled quick-links">
                        <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Home</a></li>
                        <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>About</a></li>
                        <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
                        <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
                        <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Videos</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5>Quick links</h5>
                    <ul class="list-unstyled quick-links">
                        <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Home</a></li>
                        <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>About</a></li>
                        <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
                        <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
                        <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Videos</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5>Quick links</h5>
                    <ul class="list-unstyled quick-links">
                        <li><a href="javascript:void();"><i class="fa fa-angle-double-right bo"></i>Home</a></li>
                        <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>About</a></li>
                        <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
                        <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
                        <li><a href="https://wwwe.sunlimetech.com" title="Design and developed by"><i
                                    class="fa fa-angle-double-right"></i>Imprint</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                    <ul class="list-unstyled list-inline social text-center">
                        <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a>
                        </li>
                        <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a>
                        </li>
                        <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i
                                    class="fa fa-envelope"></i></a></li>
                    </ul>
                </div>
                </hr>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                    <p><u><a href="https://www.nationaltransaction.com/">National Transaction Corporation</a></u> is a Registered MSP/ISO of Elavon, Inc. Georgia [a wholly owned subsidiary of U.S. Bancorp, Minneapolis, MN]</p>
                    <p class="h6">&copy All right Reversed.<a class="text-green ml-2" href="https://www.sunlimetech.com" target="_blank">Sunlimetech</a></p>
                </div>
                </hr>
            </div>
        </div>
    </section>
    <!-- ./Footer -->
    @section('scripts')
    <script src="{{ asset('js/app.js') }}"></script>
    <!--  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->
    @show
</body>

</html>
