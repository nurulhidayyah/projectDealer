<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dealer Honda | {{ $title }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.css">
    <link rel="stylesheet" href="css/style.css">

    <script type="text/javascript" src="js/style.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="js/owl.carousel.js"></script>
</head>

<body>
    @include('partials.navbar')

    @yield('container')

    <footer class="bg-dark text-white text-center pb-2">
        {{-- <p>Creaded With &copy; <i class="bi bi-suit-heart-fill text-danger "></i> <a
                href="https://instagram.com/agusmfth_/">TheBungsuFreelance</a></p> --}}
        <strong>Copyright &copy; 2023 <i class="bi bi-suit-heart-fill text-danger "></i> <a href="#"
                class="text-decoration-none">TBF Official</a></strong> All rights reserved.
    </footer>

    {{-- <script type="text/javascript" src="js/style.js"></script> --}}
    {{-- <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="js/owl.carousel.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>

{{-- <!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <link rel="stylesheet" href="style/owl.carousel.min.css">
    <link rel="stylesheet" href="style/owl.theme.default.css">
    <link rel="stylesheet" href="style/style.css">

    <script type="text/javascript" src="js/style.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="js/owl.carousel.js"></script>


    <title>dealer</title>
</head>

<body>


    <!-- navbar -->
    

    <!-- Slide -->
    <div id="carouselExampleIndicators" class="carousel slide mt-5" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner ">
            <div class="carousel-item active">
                <img src="img/bghonda.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/bg2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/bg3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- section 1 -->

    <section class="bg-secondary">
        <div class="container">
            <div class="col-md">
                <div class="card">
                    <div class="card-body text-center">

                        <img src="img/dreams.png" class="img-fluid" alt="">
                        <h4> <strong>Apakah Anda Sedang Mencari Mobil Honda Baru Dan Mengalami Salah Satu Kendala
                                Berikut
                                ?</strong><br><br><br></h4>

                        <h5>Bingung memilih <strong>Mobil Honda</strong> yang tepat untuk <strong>Keluarga
                                Tercinta?</strong><br><br></h5>
                        <h5>Berapa dp dan angsuran <strong>Mobil Honda</strong> impian Anda ? <br><br></h5>
                        <h5>Bagaimana cara <strong>Claim Asuransi</strong> dan berapa biaya perawatan mobil ?
                            <br><br><br></h5>

                        <h4> <strong>hondamobilserangbanten.com Solusinya </strong></h4>

                        <!-- card 1 -->

                        <div class="row row-cols-1  mt-5 row-cols-md-4 g-3">
                            <div class="col">
                                <div class="card1">
                                    <img src="img/transaksi.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title1">Pembiayaan Bisa Melalui Tunai/Kredit</h5>

                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card1">
                                    <img src="img/service.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Dibantu Approval Tanpa Biaya Tambahan</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card1">
                                    <img src="img//kredit.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">DP Murah & Angsuran Ringan</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card1">
                                    <img src="img/note.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Pelayanan Maksimal Sampai Selesai</h5>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- section 2 -->
    <section class="bg-dark text-light p-5 mt-5">
        <div class="row">
            <div class="text-center">
                <div class="p-4 border bg-secondary bg-gradient text-center">
                    <h1>PRODUCT & PRICE 2023</h1>
                </div>

                <div class="text mt-4">
                    <h5><strong>*Keterangan</strong>: Harga tertera adalah harga dengan tipe terendah. Harga tertera
                        adalah
                        harga OTR Banten dan kepemilikan mobil pertama. Harga yang tertera adalah harga OTR untuk nomor
                        rangka
                        tahun 2023</h5>
                </div>

                <div class="row justify-content-center mt-5">
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="img/brio.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <strong>
                                    <h3 class="card-title1 text-dark fw-bold fs-2">BRIO</h3>
                                </strong>
                                <a href="https://api.whatsapp.com/send?phone=6289602675711&text=HALLO Robbi, saya mau tanya tanya harga mobil honda, saya dapat informasi dari website hondamobilserangbanten.com"
                                    class="btn btn-danger d-block p-4 fw-bold fs-4">Harga Rp.200.000.000</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="img/brio.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <strong>
                                    <h3 class="card-title1 text-dark fs-2 fw-bold">BRIO</h3>
                                </strong>
                                <a href="https://api.whatsapp.com/send?phone=6289602675711&text=HALLO Robbi, saya mau tanya tanya harga mobil honda, saya dapat informasi dari website hondamobilserangbanten.com"
                                    class="btn btn-danger d-block p-4 fw-bold fs-4">Harga Rp.200.000.000</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="img/brio.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <strong>
                                    <h3 class="card-title1 text-dark fw-bold fs-2 ">BRIO</h3>
                                </strong>
                                <a href="https://api.whatsapp.com/send?phone=6289602675711&text=HALLO Robbi, saya mau tanya tanya harga mobil honda, saya dapat informasi dari website hondamobilserangbanten.com"
                                    class="btn btn-danger d-block p-4 fw-bold fs-4">Harga Rp.200.000.000</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="img/brio.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <strong>
                                    <h3 class="card-title1 text-dark fw-bold fs-2 ">BRIO</h3>
                                </strong>
                                <a href="https://api.whatsapp.com/send?phone=6289602675711&text=HALLO Robbi, saya mau tanya tanya harga mobil honda, saya dapat informasi dari website hondamobilserangbanten.com"
                                    class="btn btn-danger d-block p-4 fw-bold fs-4">Harga Rp.200.000.000</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="img/brio.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <strong>
                                    <h3 class="card-title1 text-dark fw-bold fs-2 ">BRIO</h3>
                                </strong>
                                <a href="https://api.whatsapp.com/send?phone=6289602675711&text=HALLO Robbi, saya mau tanya tanya harga mobil honda, saya dapat informasi dari website hondamobilserangbanten.com"
                                    class="btn btn-danger d-block p-4 fw-bold fs-4">Harga Rp.200.000.000</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="img/brio.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <strong>
                                    <h3 class="card-title1 text-dark fw-bold fs-2 ">BRIO</h3>
                                </strong>
                                <a href="https://api.whatsapp.com/send?phone=6289602675711&text=HALLO Robbi, saya mau tanya tanya harga mobil honda, saya dapat informasi dari website hondamobilserangbanten.com"
                                    class="btn btn-danger d-block p-4 fw-bold fs-4">Harga Rp.200.000.000</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="img/brio.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <strong>
                                    <h3 class="card-title1 text-dark fw-bold fs-2 ">BRIO</h3>
                                </strong>
                                <a href="https://api.whatsapp.com/send?phone=6289602675711&text=HALLO Robbi, saya mau tanya tanya harga mobil honda, saya dapat informasi dari website hondamobilserangbanten.com"
                                    class="btn btn-danger d-block p-4 fw-bold fs-4">Harga Rp.200.000.000</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="img/brio.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <strong>
                                    <h3 class="card-title1 text-dark fw-bold fs-2 ">BRIO</h3>
                                </strong>
                                <a href="https://api.whatsapp.com/send?phone=6289602675711&text=HALLO Robbi, saya mau tanya tanya harga mobil honda, saya dapat informasi dari website hondamobilserangbanten.com"
                                    class="btn btn-danger d-block p-4 fw-bold fs-4">Harga Rp.200.000.000</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="img/brio.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <strong>
                                    <h3 class="card-title1 text-dark fw-bold fs-2 ">BRIO</h3>
                                </strong>
                                <a href="https://api.whatsapp.com/send?phone=6289602675711&text=HALLO Robbi, saya mau tanya tanya harga mobil honda, saya dapat informasi dari website hondamobilserangbanten.com"
                                    class="btn btn-danger d-block p-4 fw-bold fs-4">Harga Rp.200.000.000</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-button mt-4">
                    <form action="https://drive.google.com/file/d/1FvqMhnJ6SVGLD5bFSTiomKOpfRW4DuOH/view">
                        <button type="submit" class="btn btn-outline-success">Dapatkan Brosur Honda</button>
                    </form>
                </div>

            </div>
        </div>
        </div>
        </div>
    </section>

    <!-- section 3 -->
    <section class="bg-secondary mt-5 p-1" id="galeri">

        <div class="container justify-content-center">
            <div class="col">
                <div class="mt-5 border bg-light bg-gradient text-center">
                    <h1 class="fs-1 fw-bold">GALERI PELANGGAN</h1>
                </div>
            </div>
            <div class="col text-center text-light mt-4">
                <h1 class="fs-3">Real Testimoni Pelanggan hondamobilserangbanten.com</h1>
            </div>
        </div>

        <!-- Galeri Pelanggan-->


        <div class="container mt-4 mb-5">
            <div class="owl-carousel owl-theme">
                <div class="item img-thumbnail"><img src="img/s1.jpeg"></div>
                <div class="item img-thumbnail"><img src="img/s2.jpeg"></div>
                <div class="item img-thumbnail"><img src="img/s1.jpeg"></div>
                <div class="item img-thumbnail"><img src="img/s2.jpeg"></div>
                <div class="item img-thumbnail"><img src="img/s1.jpeg"></div>
                <div class="item img-thumbnail"><img src="img/s2.jpeg"></div>
            </div>
        </div>

        <script>
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 5
                    }
                }
            })
        </script>
    </section>

    <!-- Galeri Pelanggan-->


    <section class="bg-dark bg-gradient mt-5">

    </section>


    <footer class="bg-dark text-white text-center pb-2">
        <p>Creaded With <i class="bi bi-suit-heart-fill text-danger "></i> <a href="">TheBungsuFreelance</a>
        </p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>



</body>

</html> --}}
