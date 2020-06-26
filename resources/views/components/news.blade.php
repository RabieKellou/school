<section id="news" class="mt-2 container home__info">
    <h3 class="text-center">{{ $title }}</h3>
    <hr class="sep">
    <div class="row">
        @forelse ($news as $article)
        <div class="col-md-3 col-sm-6 mb-2">
            <div class="card card-block p-2">
                <img src="https://static.pexels.com/photos/7096/people-woman-coffee-meeting.jpg" alt="Photo of sunset">
                <h5 class="card-title mt-1 mb-1"> {{ $article->news_title }}</h5>
                <p class="card-text">{{ $article->news_content }}</p>
                {{-- \Carbon\Carbon::now()->toDateString() --}}
                <span>by <b>{{ $article->author->fullName() }}</b> </span><em class="text-right"><time>
                        {{  $article->updated_at->diffForHumans()}}</time></em>
                <a class="btn btn-secondary stretched-link"
                    href="{{  route('news.show',['id'=>$article->news_id]) }}">Lire plus</a>

            </div>
        </div>
        @empty
        <div class="row">
            <p>aucune actualité pour le moment</p>
        </div>

        @endforelse
    </div>
    <hr>

    {{-- <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="card card-block p-2">
                <img src="https://static.pexels.com/photos/7096/people-woman-coffee-meeting.jpg" alt="Photo of sunset">
                <h5 class="card-title mt-1 mb-1">Sierra Web Development </h5>
                <p class="card-text">This is a company that builds websites, web apps and e-commerce solutions.</p>
            <b class="mb-auto">by Rabie Kellou <time> {{ \Carbon\Carbon::now()->toDateString() }}</time> </b>
    <a class="btn btn-secondary stretched-link" href="#">Read more</a>

    </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="card card-block p-2">
            <img src="https://static.pexels.com/photos/7357/startup-photos.jpg" alt="Photo of sunset">
            <h5 class="card-title mt-1 mb-1">Sierra Web Development </h5>
            <p class="card-text">This is a company that builds websites, web apps and e-commerce solutions.</p>
            <b class="mb-auto">by Rabie Kellou <time> {{ \Carbon\Carbon::now()->toDateString() }}</time> </b>
            <a class="btn btn-secondary stretched-link" href="#">Read more</a>

        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="card card-block p-2">
            <img src="https://static.pexels.com/photos/326424/pexels-photo-326424.jpeg" alt="Photo of sunset">
            <h5 class="card-title mt-1 mb-1">Sierra Web Development </h5>
            <p class="card-text">This is a company that builds websites, web apps and e-commerce solutions.</p>
            <b class="mb-auto">by Rabie Kellou <time> {{ \Carbon\Carbon::now()->toDateString() }}</time> </b>
            <a class="btn btn-secondary stretched-link" href="#">Read more</a>

        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="card card-block p-2">
            <img src="https://static.pexels.com/photos/7096/people-woman-coffee-meeting.jpg" alt="Photo of sunset">
            <h5 class="card-title mt-1 mb-1">Sierra Web Development </h5>
            <p class="card-text">This is a company that builds websites, web apps and e-commerce solutions.</p>
            <b class="mb-auto">by Rabie Kellou <time> {{ \Carbon\Carbon::now()->toDateString() }}</time> </b>
            <a class="btn btn-secondary stretched-link" href="#">Read more</a>

        </div>
    </div>
    </div> --}}
    {{ $slot }}
    <hr>
</section>
