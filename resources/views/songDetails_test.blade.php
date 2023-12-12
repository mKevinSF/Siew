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
                            @foreach ($creators as $song)

                            <h1 class="fw-bolder mb-1">{{$song->creator_name}}</h1>
                            @endforeach
                            <div class="text-muted fst-italic mb-2">Posted on January 1, 2023 by Start Bootstrap</div>
                            <!-- Post meta content-->
                            <!-- Post categories-->
                            <a class="badge bg-secondary text-decoration-none link-light" href="#!">Indonesian Song</a>
                            <a class="badge bg-secondary text-decoration-none link-light" href="#!">Pop</a>
                            <a class="badge bg-secondary text-decoration-none link-light" href="#!">Rock</a>
                        </header>
                        <!-- Preview image figure-->
                        <figure class="mb-4"><img class="img-fluid rounded" src="https://dummyimage.com/900x400/ced4da/6c757d.jpg" alt="..." /></figure>
                        <!-- Post content-->
                        <section class="mb-5">
                            <p class="fs-5 mb-4">"Lagu Cinta Ini Membunuhku" adalah salah satu lagu populer dari grup musik Indonesia, D'Masiv. Lagu ini dirilis pada tahun 2009 sebagai salah satu singel dari album mereka yang berjudul "Menuju Nirwana." Lagu ini menjadi sangat populer di Indonesia dan banyak digemari oleh penggemar musik.</p>
                            <p class="fs-5 mb-4">Latar belakang lagu ini adalah tentang perasaan cinta yang begitu mendalam sehingga terasa seperti menyiksa. Lirik lagu ini menggambarkan perasaan seseorang yang begitu terpukul dan hancur oleh cinta yang tidak berbalas atau hubungan yang berakhir. Mereka merasa bahwa cinta itu "membunuh" mereka, bukan secara fisik tetapi emosional. Lagu ini mencerminkan perasaan kehilangan, kesedihan, dan keputusasaan yang sering muncul dalam hubungan cinta yang rumit.</p>
                            <p class="fs-5 mb-4">Lagu ini menjadi sangat populer karena liriknya yang kuat dan musik yang menyentuh hati. D'Masiv berhasil mengungkapkan emosi kompleks yang terkait dengan cinta yang tidak berjalan dengan baik melalui lagu ini, dan itulah mengapa lagu ini masih dicintai oleh banyak orang hingga saat ini.</p>
                            <h2 class="fw-bolder mb-4 mt-5">Detail d'Masiv</h2>
                            <p class="fs-5 mb-4">d'Masiv adalah band rock Indonesia yang dibentuk di Jakarta pada tahun 2003.</p>
                            <p class="fs-5 mb-4">d'Masiv telah merilis 5 album studio dan meraih berbagai penghargaan.</p>
                            <p class="fs-5 mb-4">Band ini dikenal dengan lagu-lagunya yang bertema cinta dan kehidupan.</p>
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
                        <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
                    </div>
                    <!-- Profesional Reviews-->
                    <!-- <div class="card mb-4"> -->
                        <div class="container">
                            <br/>

                            <label for="input-3" class="control-label">Give a rating for this song:</label>

                            <input id="input-3" name="input-3" class="rating rating-loading" data-min="0" data-max="5" data-step="0.1" value="5">
                        <!-- </div> -->
                        <!-- <div class="card-header">Give your rating</div>
                        <div class="card-body">
                            <div class="star-rating">
                                <span class="fa fa-star-o" data-rating="1"></span>
                                <span class="fa fa-star-o" data-rating="2"></span>
                                <span class="fa fa-star-o" data-rating="3"></span>
                                <span class="fa fa-star-o" data-rating="4"></span>
                                <span class="fa fa-star-o" data-rating="5"></span>
                                <input type="hidden" name="whatever1" class="rating-value" value="2.5">
                            </div>
                        </div> -->
                    </div>
                    <!-- User Reviews-->
                    <div class="card mb-4">
                        <div class="card-header">Profesional Reviews</div>
                        <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
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
