@extends('layouts.main')

@section('container')
    <!-- Slide -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="margin-top: 76px">
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

                        <img class="img-fluid" src="img/dreams.png" alt="">
                        <h4> <strong>Apakah Anda Sedang Mencari Mobil Honda Baru Dan Mengalami Salah Satu Kendala Berikut
                                ?</strong><br><br><br></h4>

                        <h5>Bingung memilih <strong>Mobil Honda</strong> yang tepat untuk <strong>Keluarga
                                Tercinta?</strong><br><br></h5>
                        <h5>Berapa dp dan angsuran <strong>Mobil Honda</strong> impian Anda ? <br><br></h5>
                        <h5>Bagaimana cara <strong>Claim Asuransi</strong> dan berapa biaya perawatan mobil ? <br><br><br>
                        </h5>

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
                                    <img src="img/kredit.png" class="card-img-top" alt="...">
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
    <section class="bg-dark text-light p-5 mt-5" id="product">
        <div class="row">
            <div class="text-center mt-5">
                <div class="p-4 border bg-secondary bg-gradient text-center">
                    <h1>PRODUCT & PRICE 2023</h1>
                </div>

                <div class="text mt-4">
                    <h5><strong>*Keterangan</strong>: Harga tertera adalah harga dengan tipe terendah. Harga tertera adalah
                        harga OTR Banten dan kepemilikan mobil pertama. Harga yang tertera adalah harga OTR untuk nomor
                        rangka
                        tahun 2023</h5>
                </div>

                @if ($home->count())
                    <div class="row justify-content-center mt-5">
                        @foreach ($home as $homes)
                            <div class="col-md-4 mb-3">
                                <div class="card" style="height: 430px">
                                    @if ($homes->image)
                                        <div style="max-height: 300px; overflow: auto;">
                                            <img src="{{ asset('storage/' . $homes->image) }}" class="img-fluid"
                                                alt="{{ $homes->title }}">
                                        </div>
                                    @else
                                        <img src="img/blank.jpg" class="card-img-top" class="card-img-top"
                                            alt="{{ $homes->title }}">
                                    @endif
                                    <div class="card-body d-flex align-items-center flex-column">
                                        <strong class="mt-auto">
                                            <h3 class="card-title1 text-dark fw-bold fs-2">{{ $homes->title }}</h3>
                                        </strong>
                                        <a href="https://api.whatsapp.com/send?phone=6289602675711&text=HALLO Robbi, saya mau tanya tanya harga mobil honda, saya dapat informasi dari website hondamobilserangbanten.com"
                                            class="btn btn-danger d-block p-4 fw-bold fs-4">Harga Rp
                                            {{ $homes->harga }}</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <p class="text-center fs-4">No Post Found.</p>
                @endif

                <div class="text-button mt-4">
                    @foreach ($brosurs as $brosur)
                        <form target="blank" action="{{ asset('storage/' . $brosur->brosur) }}">
                            @csrf
                            <button type="submit" class="btn btn-outline-success">Dapatkan Brosur Honda</button>
                        </form>
                    @endforeach
                </div>

            </div>
        </div>
    </section>

    <!-- section 3 -->
    <section class="bg-secondary mt-5 p-1" id="gallery">

        <div class="container justify-content-center">
            <div class="col">
                <div class="border bg-light bg-gradient text-center" style="margin-top: 80px">
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
                @foreach ($galleries as $gallery)
                    <div class="item img-thumbnail">
                        <img src="{{ asset('storage/' . $gallery->image) }}">
                    </div>
                @endforeach
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
    <section class="bg-dark bg-gradient">
        @include('partials.contact')
    </section>
@endsection
