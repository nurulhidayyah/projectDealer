@extends('layouts.main')

@section('container')
    <!-- Slide -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
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

                        <img src="img/dreams.png" alt="">
                        <h4> <strong>Apakah Anda Sedang Mencari Mobil Honda Baru Dan Mengalami Salah Satu Kendala Berikut
                                ?</strong><br><br><br></h4>

                        <h5>Bingung memilih <strong>Mobil Honda</strong> yang tepat untuk <strong>Keluarga
                                Tercinta?</strong><br><br></h5>
                        <h5>Berapa dp dan angsuran <strong>Mobil Honda</strong> impian Anda ? <br><br></h5>
                        <h5>Bagaimana cara <strong>Claim Asuransi</strong> dan berapa biaya perawatan mobil ? <br><br><br>
                        </h5>

                        <h4> <strong>HondaSerang.com Solusinya </strong></h4>

                        <!-- card 1 -->

                        <div class="row row-cols-1  mt-5 row-cols-md-4 g-3">
                            <div class="col">
                                <div class="card1">
                                    <img src="img/rp.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title1">Pembiayaan Bisa Melalui Tunai/Kredit</h5>

                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card1">
                                    <img src="img/paper.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Dibantu Approval Tanpa Biaya Tambahan</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card1">
                                    <img src="img/price-tag.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">DP Murah & Angsuran Ringan</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card1">
                                    <img src="img/notepad.png" class="card-img-top" alt="...">
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
                    <h1>PRODUCT & PRICE 2022</h1>
                </div>

                <div class="text mt-4">
                    <h5><strong>*Keterangan</strong>: Harga tertera adalah harga dengan tipe terendah. Harga tertera adalah
                        harga OTR Jakarta dan kepemilikan mobil pertama. Harga yang tertera adalah harga OTR untuk nomor
                        rangka
                        tahun 2022</h5>
                </div>

                @if ($home->count())
                    <div class="row justify-content-center mt-5">
                        @foreach ($home as $homes)
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    @if ($homes->image)
                                        <img src="img/{{ $homes->image }}" class="img-fluid" alt="{{ $homes->title }}">
                                    @else
                                        <img src="img/blank.jpg" class="card-img-top" class="card-img-top"
                                            alt="{{ $homes->title }}">
                                    @endif
                                    <div class="card-body">
                                        <strong>
                                            <h3 class="card-title1 text-dark fw-bold fs-2">{{ $homes->title }}</h3>
                                        </strong>
                                        <a href="https://api.whatsapp.com/send?phone=6289602675711&text=HALLO Robbi, saya mau tanya tanya harga mobil honda, saya dapat informasi dari website hondaserang.com"
                                            class="btn btn-danger d-block p-4 fw-bold fs-4">Harga Rp.{{ $homes->harga }}</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <p class="text-center fs-4">No Post Found.</p>
                @endif

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
    <section class="bg-secondary mt-5 p-1">

        <div class="row justify-content-center">
            <div class="mt-5 border bg-light bg-gradient text-center col-md-4 ">
                <h1 class="fs-1 fw-bold">GALERI PELANGGAN</h1>
            </div>
        </div>
        <div class="row text-center text-light mt-4">
            <h1 class="fs-3">Real Testimoni Pelanggan AutoSerang.com</h1>
        </div>

        <!-- Galeri Pelanggan-->





        <div class="container p-5">
            <div class="card-group">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center p-1"> <strong>HARUS MEMPERCAYAKAN PROSES MOBIL ANDA PADA
                                KAMI?</strong><br><br><br><br><br></h4>
                        <ul>
                            <li>
                                <h5><strong>Terpercaya.</strong> Sales senior</h5>
                            </li>
                            <li>
                                <h5>Solutif, selalu bisa menyesuaikan dengan kondisi <strong>Budget Anda</h5></strong>
                            </li>
                            <li>
                                <h5><Strong>Segala Warna</Strong> bisa diusahakan</h5>
                            </li>
                            <li>
                                <h5>Pengisian data bisa dibantu <strong>Sampai ACC</h5></strong>
                            </li>
                            <li>
                                <h5><strong>Banyak Dikson</h5></strong>
                            </li>
                            <li>
                                <h5>Banyak <strong>Bonus Aksesoris</h5></strong>
                            </li>
                        </ul>
                        <a class="btn btn-primary bg-success "
                            href="https://api.whatsapp.com/send?phone=6289602675711&text=HALLO Robbi, saya mau tanya tanya harga mobil honda, saya dapat informasi dari website hondaserang.com">Hubungi</a>
                    </div>
                </div>
                <div class="card" id=contact>
                    <div class="card-body">
                        <h3 class="card-title text-center" bold><Strong></Strong>LOKASI</Strong></h3>
                        <div class="map-responsive">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1300.4671054711048!2d106.13306112923651!3d-6.095085266200527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e418b6abc301fd1%3A0x6fe88f60e41f2971!2sHonda%20Auto%20Serang%20%3A%20Randy!5e1!3m2!1sid!2sid!4v1672187477662!5m2!1sid!2sid"
                                width="600" height="378" frameborder="0" style="border:0; width: 100%;"
                                allowfullscreen=""></iframe>
                        </div>
                        <p class="card-text text-center">Jl. Raya Cilegon No.517, Drangong, Kec. Taktakan, Kota Serang,
                            Banten 42162
                        </p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
