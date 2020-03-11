@extends('layouts.master')

@section('navbar')
<button class="" id="sidebarCollapse" type="button" data-toggle="collapse" >
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
        <a cl<ass="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
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
    {{--  @unless(Auth::check())
        <a href="{{ route('login') }}" class="btn btn-primary ml-2">login</a>
    @else
    <a href="{{Auth::logout()  }}" class="btn btn-danger ml-2">logout</a>
    @endunless --}}

    <!-- Authentication Links -->
    @guest
        <li class="nav-item">
            <a class="btn btn-primary" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @if (Route::has('register'))
        <li class="nav-item">
            <a class="btn btn-primary" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
        @endif
        @else
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                    style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
    @endguest
</ul>
</div>
@endsection
@section('slider')
    @include('elements.carousel')
@endsection

@section('content')
@include('elements.news')

@endsection
