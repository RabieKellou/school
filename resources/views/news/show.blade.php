@extends('layouts.master')

@section('navbar')
@include('elements.navbar')
@endsection
{{-- @section('slider')
    @include('elements.carousel')
@endsection --}}

@section('content')
<div class="container my-5">

    <div>
        <h1 class="text-center">{{ $article->news_title }}</h1>
        <em><time>{{ $article->updated_at->diffForHumans() }}</time></em> par
        <b>{{ $article->author->fullName()}}</b>
    </div>



    <article class="my-4">

        {!! $article->news_content !!}


    </article>
</div>
@endsection
