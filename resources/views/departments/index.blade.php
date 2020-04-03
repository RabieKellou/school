<section id="departments" style="background: #fff; box-shadow: 0px 0px 1px 1px #ccc;" class="container px-auto home__info">
    <h3 class="text-center">Departements</h3>
    <hr class="sep">
    <div class="row">
        @foreach ($departments as $dept)
        <div class="col-md-3 col-sm-6 mb-2">
            <div class="card card-block p-2">
                <img src="https://static.pexels.com/photos/7096/people-woman-coffee-meeting.jpg" alt="Photo of sunset">
                <h5 class="card-title mt-1 mb-1">{{ $dept->dept_name }} </h5>
            <p class="card-text">{{ $dept->dept_desc }}</p>
            <a class="btn btn-secondary stretched-link" href="/depts/{{$dept->dept_id}}">Lire plus</a>

            </div>
        </div>
        @endforeach

    </div>

</section>
