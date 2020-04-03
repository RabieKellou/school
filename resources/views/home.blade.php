@extends('layouts.master')

@section('navbar')
    @include('elements.navbar')
@endsection
@section('slider')
    @include('elements.carousel')
@endsection

@section('content')
    @component('components.news',['news'=>$news])
        @slot('title')
            Actualités récentes
        @endslot

            <div class="row">
                <a href="/news" class="btn btn-lg btn-dark px-4 mx-auto">Voir toutes les actualités</a>
            </div>

    @endcomponent
    @include('departments.index')
@endsection
