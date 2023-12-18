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
                        <?php
                            $videoURL = $song->youtubeURL;
                            $convertedURL = str_replace("watch?v=","embed/", $videoURL);
                        ?>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="<?php echo $convertedURL; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <br>
                        <!-- Post content-->
                        <section class="mb-5">
                            <p class="fs-5 mb-4">{{$song->description}}</p>
                            <h2 class="fw-bolder mb-4 mt-5">Detail {{$song->creators->creator_name}}</h2>
                            <p class="fs-5 mb-4">{{$song->detail}}</p>
                        </section>
                    </article>

                    <!-- Comments section-->
                    <section class="card mb-5">
                        <h4 class="card-header mb-2 fw-bolder">Add Comment</h4>
                            <div class="card-body">
                                <!-- Comment form-->
                                <form method="post" action="{{ route('storeComment', ['user' => session('user')->id, 'post' => $song->id])}}" >
                                    @csrf
                                    <textarea class="form-control" rows="3" placeholder="Join the discussion and leave a comment!" name="comment"></textarea>
                                    <button type="submit" class="btn btn-dark mt-2">Submit</button>
                                </form>
                            </div>
                    </section>

                    <div>
                        <h2>Comments</h2>
                            <section style="background-color: #e7effd;">
                                <div class="container my-5 py-5 text-dark">
                                <div class="row d-flex">
                                    <div class="col-md-11 col-lg-50 col-xl-7">
                                        @forelse($song->comments as $comment)
                                        <div class="d-flex flex-start mb-4">
                                            <img class="rounded-circle shadow-1-strong me-3"
                                            src="https://media.istockphoto.com/id/1300845620/vector/user-icon-flat-isolated-on-white-background-user-symbol-vector-illustration.jpg?s=612x612&w=0&k=20&c=yBeyba0hUkh14_jgv1OKqIH0CCSWU_4ckRkAoy2p73o=" alt="avatar" width="65"
                                            height="65" />
                                            <div class="card" style="width: 60%;">
                                            <div class="card-body p-4">
                                                <div class="">
                                                    <span class="badge text-bg-primary">
                                                        {{$comment->users->user_name}}
                                                    </span>
                                                <p class="small">Posted at: {{$comment->created_at}}</p>
                                                    <p>{{ $comment->comment}}</p>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        @empty
                                        <p>No Comments yet.</p>
                                        @endforelse
                                    </div>
                                </div>
                                </div>
                            </section>
                    </div>
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
                                <button type="submit">Submit your rating</button>
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
