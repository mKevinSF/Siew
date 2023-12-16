@extends('format')
@section('content')
<!DOCTYPE html>
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Post content-->
                    <article>
                        <!-- Post header-->
                        <header class="mb-4">
                            <!-- Post title-->
                            <h1 class="fw-bolder mb-1">{{$song->music_name}}</h1>
                            <div class="text-muted fst-italic mb-2">Posted on {{$song->created_at}} by Pikamek</div>
                            <!-- Post meta content-->
                            <!-- Post categories-->
                            <a class="badge bg-secondary text-decoration-none link-light" href="#!">Indonesian Song</a>
                            <a class="badge bg-secondary text-decoration-none link-light" href="#!">Pop</a>
                            <a class="badge bg-secondary text-decoration-none link-light" href="#!">Rock</a>
                        </header>
                        <!-- Preview image figure-->
                        <figure class="mb-4"><img class="img-fluid rounded" src="{{$song->imageURL}}" style="width:900px;height:400px;" alt="..." /></figure>
                        <!-- Post content-->
                        <section class="mb-5">
                            <p class="fs-5 mb-4">{{$song->description}}</p>
                            <h2 class="fw-bolder mb-4 mt-5">Detail {{$song->creators->creator_name}}</h2>
                            <p class="fs-5 mb-4">{{$song->detail}}</p>
                        </section>
                    </article>
                    <!-- Comments section-->
                    <section class="mb-5">
                        <div class="card bg-light">
                            <div class="card-body">
                                <!-- Comment form-->
                                <form class="mb-4"><textarea class="form-control" rows="3" placeholder="Join the discussion and leave a comment!"></textarea></form>
                                <!-- Comment with nested comments-->
                                <div class="d-flex mb-4">
                                    <!-- Parent comment-->
                                    <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                    <div class="ms-3">
                                        <div class="fw-bold">Commenter Name</div>
                                        If you're going to lead a space frontier, it has to be government; it'll never be private enterprise. Because the space frontier is dangerous, and it's expensive, and it has unquantified risks.
                                        <!-- Child comment 1-->
                                        <div class="d-flex mt-4">
                                            <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                            <div class="ms-3">
                                                <div class="fw-bold">Commenter Name</div>
                                                And under those conditions, you cannot establish a capital-market evaluation of that enterprise. You can't get investors.
                                            </div>
                                        </div>
                                        <!-- Child comment 2-->
                                        <div class="d-flex mt-4">
                                            <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                            <div class="ms-3">
                                                <div class="fw-bold">Commenter Name</div>
                                                When you put money directly to a problem, it makes a good headline.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single comment-->
                                <div class="d-flex">
                                    <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                    <div class="ms-3">
                                        <div class="fw-bold">Commenter Name</div>
                                        When I look at the universe and all the ways the universe wants to kill us, I find it hard to reconcile that with statements of beneficence.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <!-- Side widgets-->
                <div class="col-lg-4">
                    <!-- User Reviews-->
                    
                    <div class="card mb-4">
                        <div class="card-header">User Reviews</div>
                        <div class="card-body">
                            <h3>{{ $rating->rating }}.0/5.0</h3>
                        </div>
                    </div>
                    <!-- Profesional Reviews-->
                    <!-- <div class="card mb-4"> -->
                        <div class="container">
                            <br/>
                            <form method="POST" action="{{ route('music.rate', ['post' => $song->id]) }}">
                                @csrf
                                <label for="input-3" class="control-label">Give a rating for this song:</label>
                                <input type="number" name="user_rating" id="user-rating" min="1" max="5" step="0.1">
                                <br>
                                <button type="submit">Sumit your rating</button>
                            </form>
                            <!-- <input id="input-3" name="input-3" class="rating rating-loading" data-min="0" data-max="5" data-step="0.1" value="5"> -->
                    </div>
                    <!-- User Reviews-->
                    <div class="card mb-4">
                        <div class="card-header">Profesional Reviews</div>
                        <div class="card-body">{{$song->Profesional_review}}</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script>
        $("#input-id").rating();
        </script>

    </body>
</html>
@endsection
