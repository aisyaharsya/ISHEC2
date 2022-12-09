<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISHEC</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                       @auth
                       @if(Auth::user()->level == 2)
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Selamat datang {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/">Dashboard</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <form action="/logout" method="post">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Logout</button>
                                    </form>

                                </ul>
                            </li>
                            @endif
                       @if(Auth::user()->level == 0)
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Selamat datang
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                <li><a class="dropdown-item" href="/ad">Dashboard</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <form action="/logout" method="post">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Logout</button>
                                    </form>

                                </ul>
                            </li>
                            @endif
                       @if(Auth::user()->level == 1)
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Selamat datang
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown3">
                                <li><a class="dropdown-item" href="/doc">Dashboard</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <form action="/logout" method="post">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Logout</button>
                                    </form>

                                </ul>
                            </li>
                            @endauth
                            @else
                            <li class="nav-item"><a class="nav-link" href="#services">Pendaftaran Pasien</a></li>
                            <li class="nav-item"><a class="nav-link" href="#portfolio">Artikel Kesehatan</a></li>
                            <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
                            <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                            @endif
                          
                            {{-- @if(!Auth::check())
                            <li class="nav-item"><a class="nav-link" href="#services">Pendaftaran Pasien</a></li>
                            <li class="nav-item"><a class="nav-link" href="#portfolio">Artikel Kesehatan</a></li>
                            <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
                            <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                            @endif --}}

                        </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Welcome To ISHEC!</div>
                <div class="masthead-heading text-uppercase">INDONESIA HEALTH CARE</div>
                <div class="col-md-6 offset-md-3">
                <input class="form-control me-2 p-3" type="search" placeholder="Search" aria-label="Search" style="border-radius: 30px">
                <button class="btn mt-3 btn-yellow" style="font-family: Arial, Helvetica, sans-serif" type="submit">Search</button>
</div>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Pendaftaran Pasien</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
                <form action="" method="POST">
                    @csrf
                <div class="row d-flex justify-content-center">
                    <div class="col-md-6">
                        <label for="inputDate" class="form-label "style="font-family: Verdana, Geneva, Tahoma, sans-serif">DATE</label>
                        <div class="col-sm-15">
                          <input type="date" name="date" class="form-control"style="border-radius: 30px">
                        </div>
                    </div>
                    {{-- <div class="col-md-5">
                        <div class="form-group">
                            <span class="form-label" style="font-family: Verdana, Geneva, Tahoma, sans-serif">POLI KLINIK</span>
                            <select class="form-control" style="border-radius: 30px">
                                <option>Umum</option>
                                <option>Gigi</option>
                                <option>KIA</option>
                                <option>Lansia</option>
                                <option>Psikologi</option>
                                <option>Gizi</option>
                                <option>Batra</option>
                                <option>Anak</option>
                            </select>
                            <span class="select-arrow"></span>
                        </div>
                    </div> --}}
                    <div class="col-md-2">
                        <div class="form-btn">
                            <button class="submit-btn btn btn-warning mt-4" type="submit">Cari</button>
                        </div>
                    </div>
                </div>
                </form>
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Artikel Kesehatan</h2>
                    <h3 class="section-subheading text-muted">Artikel Terpopuler</h3>
                </div>
                <div class="row">
                    @foreach($artikel as $item)

                    <div class="portfolio-modal modal fade" id="portfolioModal{{$item->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8">
                                            <div class="modal-body">
                                                <!-- Project details-->
                                                <h2 class="text-uppercase">{{$item->title}}</h2>
                                                <img class="img-fluid d-block mx-auto" src="{{$item->lokasi_img}}" alt="..." />
                                                <p>{{$item->body}}</p>
                                                <ul class="list-inline">
                                                </ul>
                                                <form action="/lihat-artikel" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{$item->id}}">
                                                    <button type="submit" class="btn btn-primary btn-xl text-uppercase">
                                                        <i class=""></i>
                                                        Baca
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="row">
                    @foreach($artikel as $item)
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal{{$item->id}}">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{$item->lokasi_img}}" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">{{$item->title}}</div>
                                <div class="portfolio-caption-subheading text-muted"></div>
                            </div>
                        </div>
                    </div>
                   @endforeach
                </div>
            </div>

                 <div class="text-center col-md-5">
                    {{$artikel->links()}}
                </div>

        </section>



        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
       @foreach($artikel as $item)
        <div class="portfolio-modal modal fade" id="portfolioModal{{$item->id}}" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">{{$item->title}}</h2>
                                    <img class="img-fluid d-block mx-auto" src="{{$item->lokasi_img}}" alt="..." />
                                    <p>{{$item->body}}</p>
                                    <ul class="list-inline">
                                    </ul>
                                    <form action="/lihat-artikel" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$item->id}}">
                                        <button type="submit" class="btn btn-primary btn-xl text-uppercase">
                                            <i class=""></i>
                                            Baca
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @if (session()->has('found'))
            <script>
                alert('{{ session('found') }}')
                if (confirm('apakah anda ingin membuat reservasi')) {
                    window.location.href = '/reservasi';
                }
            </script>            
        @endif
        @if (session()->has('notfound'))
            <script>
                alert('{{ session('notfound') }}')
            </script>            
        @endif
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>
