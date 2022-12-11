<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ANTAU | Homepage</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top">
        <div class="container">
        
            <a class="navbar-brand" href="/">ANTAU</a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tentang">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#info">Info</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#fitur">Fitur</a>
                    </li>
                </ul>
                <div class="">
                    <a href="#" class="btn btn-outline-success me-2 px-3">Daftar</a>
                    <a href="{{ route('login') }}" class="btn btn-success px-3">Masuk</a>
                </div>
            </div>
            
            
            <button class="btn btn-dark d-block d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="offcanvas offcanvas-start d-block d-lg-none" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header border-bottom">
                    <h5 class="offcanvas-title fw-bold" id="offcanvasExampleLabel">ANTAU</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-dark active" href="">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#tentang">Tentang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#info">Info</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#fitur">Fitur</a>
                        </li>
                    </ul>
                    <div class="">
                        <a href="#" class="btn btn-outline-success me-2 px-3">Daftar</a>
                        <a href="{{ route('login') }}" class="btn btn-success px-3">Masuk</a>
                    </div>
                </div>
            </div>

        </div>
    </nav>

    <div class="container">
        <div class="size-content py-4">
            <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
    
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="8000">
                    <img src="{{ asset('assets/ilustrasion.webp') }}" class="d-block w-100 rounded-3 slide-image" style="" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="8000">
                    <img src="{{ asset('assets/image.webp') }}" class="d-block w-100 rounded-3 slide-image" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="8000">
                    <img src="{{ asset('assets/ilustrasion2.jpg') }}" class="d-block w-100 rounded-3 slide-image" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
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
        </div>

        <div class="row size-content" id="tentang">
            <div class="col-md-8 my-auto px-5">
                <h1>Kenal Dekat Dengan ANTAU</h1>
                <p>Hai anak rantau! Perkenalkan ANTAU Purwokerto merupakan sebuah layanan gratis berbasis website yang siap membantu permasalahan kalian para anak rantau, khususnya bagi kalian para mahasiswa Purwokerto.</p>
            </div>
            <div class="col-md-4 my-auto">
                <img src="{{ asset('assets/ilustrasi_antau.png') }}" class="logo mx-auto w-100" alt="Ilustrasi ANTAU">
            </div>
        </div>

        <div class="size-content py-5 pt-0" id="info">
            <h1 class="text-center pb-5">INFO</h1>
            <div class="row text-center">
                
                <div class="col-sm-12 col-md-4 pb-3">
                    <a href="" class="text-dark text-decoration-none">
                        <div class="card mx-auto" style="width: 20rem;">
                            <img src="{{ asset('assets/ilustrasion.webp') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                            <p class="fs-5">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-12 col-md-4 pb-3">
                    <a href="" class="text-dark text-decoration-none">
                        <div class="card mx-auto" style="width: 20rem;">
                            <img src="{{ asset('assets/ilustrasion2.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                            <p class="fs-5">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </a>
                </div>
                
                <div class="col-sm-12 col-md-4 pb-3">
                    <a href="" class="text-dark text-decoration-none">
                        <div class="card mx-auto" style="width: 20rem;">
                            <img src="{{ asset('assets/image.webp') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                            <p class="fs-5">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
            <div class="row">
                <a href="/" class="text-center w-100 p-3 fw-bold">LIHAT LAINNYA</a>
            </div>
        </div>

        <div class="size-content pb-5" id="fitur">
            <h1 class="text-center py-3 pb-5">FITUR</h1>
            <div class="row">
                <div class="col-12 pb-sm-5 pb-md-0">
                    <div class="row">
                        <div class="col-md-4 my-auto">
                            <img src="{{ asset('assets/logo_wawasan.png') }}" class="logo mx-5" alt="Logo Wawasan">
                        </div>
                        <div class="col-md-6 my-auto">
                            <h3 class="fw-bold">WAWASAN</h3>
                            <p>Apapun tentang tips atau wawasan yang ingin kamu ketahui, fitur ini akan sangat membantu. Hanya mengetikkan kata kunci dan kamu bisa mendapatkan ilmunya!</p>
                            <a href="#" class="btn btn-info btn-shadow text-white fw-bold px-4 shadow">COBA</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 pb-5">
                    <div class="row justify-content-end">
                        
                        <div class="col-md-4 my-auto d-md-none d-sm-block">
                            <img src="{{ asset('assets/logo_healing.png') }}" class="w-100" alt="Logo Healing">
                        </div>

                        <div class="col-1"></div>
                        <div class="col-md-6 my-auto">
                            <h3 class="fw-bold">HEALING</h3>
                            <p>Setelah menempuh lama perkuliahan, mahasiswa pasti lelah dan membutuhkan tempat untuk <i>refreshing</i>. Pada fitur ini, ANTAU menyediakan layanan Virtual Tour sebagai sarana informasi dalam menyampaikan tempat wisata dan tempat nongkrong di Purwokerto.</p>
                            <a href="#" class="btn btn-info btn-shadow text-white fw-bold px-4 shadow">COBA</a>
                        </div>
                        <div class="col-md-4 my-auto d-none d-md-block">
                            <img src="{{ asset('assets/logo_healing.png') }}" class="w-100" alt="Logo Healing">
                        </div>
                    </div>
                </div>

                <div class="col-12 pb-5">
                    <div class="row">
                        <div class="col-md-4 my-auto">
                            <img src="{{ asset('assets/logo_haus&lapar.png') }}" class="logo mx-5" alt="Logo Lapar & Haus">
                        </div>
                        <div class="col-md-6 my-auto">
                            <h3 class="fw-bold">LAPAR & HAUS</h3>
                            <p>Tanpa perlu kamu keluar untuk mencari alamat penjual makanan, kamu bisa menggunakan fitur ini untuk mengetahui lokasi tempat makan dan harga makanan serta minuman yang disediakan.</p>
                            <a href="" class="btn btn-info btn-shadow text-white fw-bold px-4 shadow">COBA</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    
    <div class="bg-dark text-white text-center p-3">
        <span>Website ANTAU &copy; 2022</span>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>