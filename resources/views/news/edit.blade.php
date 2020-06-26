@extends('layouts.master')

@section('navbar')
@include('elements.navbar')
@endsection


@section('content')
<div class="container py-5">
    <div class="row breadcrumb">
        <h2 class>Edit your news</h2>
    </div>
    <div class="col-md-12">
        <form action="{{ route('news.update',['news'=>$article->news_id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="news_title">Title</label>
                <input type="text" name="news_title" id="news_title" placeholder="title"
                    value="{{ old('news_title',$article->news_title) }}" class="form-control">
            </div>
            <div class="form-group">
                <label for="news_content">Centent</label>
                <textarea id="my-editor" name="news_content" class="form-control" id="news_content">
                    {!! old('news_content',$article->news_content) !!}
                </textarea>
            </div>


            <button type="submit" class="btn btn-secondary form-control">Save</button>

        </form>
    </div>


</div>



@endsection
@section('scripts')
@parent
{{-- <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script> --}}
<script src="{{ asset('plugins/ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace('my-editor');
</script>


@endsection
