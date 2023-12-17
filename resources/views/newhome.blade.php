@extends('format')
@section('content')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Siew</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Features section-->
            <section class="py-5" id="features">
            <div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <h1>Welcome, {{session('user')->user_name}}</h1>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://imgsrv2.voi.id/s0zlEsdOqRUA20p63IuPIc7P89xVndRJAY6v736IEZA/auto/1280/853/sm/1/bG9jYWw6Ly8vcHVibGlzaGVycy8xODg4Ny8yMDIwMTEwNTExMzItbWFpbi5jcm9wcGVkXzE2MDQ1NTA3MjkuanBlZw.jpg" style="width:350px;height:900px;" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <!-- <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p> -->
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://pophariini.com/wp-content/uploads/2018/06/Sheila-On-7.jpg" style="width:350px;height:900px;" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <!-- <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p> -->
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://asset.kompas.com/crops/06bEqP7rEo6F-yoUtEVW7GCwVtY=/80x0:1017x625/780x390/data/photo/2021/01/15/6001913fbad47.jpg" style="width:350px;height:900px;" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <!-- <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p> -->
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
            </section>
            <!-- Testimonial section-->
            <div class="py-5 bg-light">
                <div class="container px-5 my-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-10 col-xl-7">
                            <div class="text-center">
                                <div class="fs-4 mb-4 fst-italic">"Musik memberi kita jalan untuk bercerita, membuat kita merasa tak sendirian di dunia ini"</div>
                                <div class="d-flex align-items-center justify-content-center">
                                    <img class="rounded-circle me-3" src="https://upload.wikimedia.org/wikipedia/commons/c/cb/John_Denver_1974.jpg" alt="..." style="width:40px;height:40px;"/>
                                    <div class="fw-bold">
                                        John Denver
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog preview section-->
            <section class="py-5">
                <div class="container px-5 my-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-8 col-xl-6">
                            <div class="text-center">
                                <h2 class="fw-bolder">Our Recomendation</h2>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="row gx-5">
                    @foreach ($home as $list)
                    <div class="col-lg-4 mb-5">
                        <div class="card h-100 shadow border-0">
                            <img class="card-img-top" src={{$list->imageURL}} alt="..." style="width:100%;height:40%;"/>
                            <div class="card-body p-4">
                                <div class="badge bg-primary bg-gradient rounded-pill mb-2">Top Hits</div>
                                <a class="text-decoration-none link-dark stretched-link" href="songDetails_test/{{$list->id}}"><h5 class="card-title mb-3">{{$list->creators->creator_name}}</h5></a>
                                <p class="card-text mb-0">{{ Str::limit($list->description, 100) }}</p>
                            </div>
                            <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                <div class="d-flex align-items-end justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle me-3" src="https://cdn.discordapp.com/attachments/903219058252603442/1185143226018058310/gw_ganteng_parah_-_Copy.jpg?ex=658e89a3&is=657c14a3&hm=33b380bfe20358f9d65bfef07bcbce34e0bdead99426b46bb5153d8448bb9843&" alt="..." style="width:40px;height:40px;" />
                                        <div class="small">
                                            <div class="fw-bold">Pikamek</div>
                                            <div class="text-muted">{{$list->created_at}}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                    </div>
                </div>
            </section>
        </main>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="/assets/js/scripts.js"></script>
    </body>
    </html>
@endsection
