@extends('layouts.master')

@section('navbar')
@include('elements.navbar')
@endsection


@section('content')
<div class="container py-5">
    <div class="row breadcrumb">
        <h2 class>create a new article</h2>
    </div>
    <div class="col-md-12">
        <form action="{{ route('news.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="news_title">Title : </label>
                <input type="text" name="news_title" id="news_title" placeholder="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="news_content">Centent : </label>
                <textarea id="my-editor" name="news_content" class="form-control" id="news_content"></textarea>
            </div>
            <button type="submit" class="btn btn-primary form-control">New article</button>
        </form>
    </div>


</div>



@endsection
@section('scripts')
@parent
<script src="{{ asset('plugins/ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace('my-editor');
</script>


@endsection
