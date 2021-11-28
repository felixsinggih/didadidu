@extends('web.layout.main')

@section('content')
    <!-- header -->
    <section class="h1-00 w-100 bg-white" style="box-sizing: border-box">
        <div class="header container-xxl mx-auto position-relative" style="font-family: 'Poppins', sans-serif">
            <div class="mx-auto d-flex flex-lg-row flex-column hero">
                <!-- Left Column -->
                <div
                    class="left-column d-flex flex-lg-grow-1 flex-column align-items-lg-start text-lg-start align-items-center text-center">
                    <h1 class="title-text-big">
                        Hosting Murah &<br class="d-lg-block d-none" />
                        Berkualitas di Indonesia
                    </h1>
                    <div
                        class="d-flex flex-sm-row flex-column align-items-center mx-lg-0 mx-auto justify-content-center gap-3">
                        <a href="/#hosting" class="btn btn-big btn-yellow">
                            Lihat Penawaran
                        </a>
                    </div>
                </div>
                <!-- Right Column -->
                <div class="right-column text-center d-flex justify-content-center pe-0">
                    <img id="img-fluid" class="h-auto mw-100"
                        src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header2/Header-2-1.png"
                        alt="" />
                </div>
            </div>
        </div>
    </section>
    <!-- end header -->

    <!-- benefit landscape -->
    <section class="h-100 w-100 bg-light-blue" style="box-sizing: border-box">
        <div class="benefit-landscape container-xxl mx-auto p-0  position-relative"
            style="font-family: 'Poppins', sans-serif">
            <div class="text-center title-text">
                <h1 class="text-title">All in 1 Services</h1>
                <p class="text-caption" style="margin-left: 3rem; margin-right: 3rem">
                    Didadidu adalah sentra layanan terpadu yang menggabungkan seluruh lini usaha yang di dukung oleh <br />
                    KPLI Banyumas dalam rangka menyediakan platform teknologi dan content serta solusi terkait IT yang anda
                    butuhkan.
                </p>
            </div>

            <div class="grid-padding text-center">
                <div class="row">
                    <div class="col-lg-3 column">
                        <div class="icon">
                            <img src="/assets/img/network.png" alt="" class="img-fluid" style="height: 150px" />
                        </div>
                        <h3 class="icon-title">Shared Hosting</h3>
                    </div>
                    <div class="col-lg-3 column">
                        <div class="icon">
                            <img src="/assets/img/network.png" alt="" class="img-fluid" style="height: 150px" />
                        </div>
                        <h3 class="icon-title">VPS Hosting</h3>
                    </div>
                    <div class="col-lg-3 column">
                        <div class="icon">
                            <img src="/assets/img/network.png" alt="" class="img-fluid" style="height: 150px" />
                        </div>
                        <h3 class="icon-title">Mail Server</h3>
                    </div>
                    <div class="col-lg-3 column">
                        <div class="icon">
                            <img src="/assets/img/network.png" alt="" class="img-fluid" style="height: 150px" />
                        </div>
                        <h3 class="icon-title">Software House</h3>
                    </div>
                </div>
            </div>

            <div class="card-block">
                <div class="card-red">
                    <div class="d-flex flex-lg-row flex-column align-items-center">
                        <div class="me-lg-3">
                            <img src="/assets/img/asvalue.png" alt="" style="height: 150px" />
                        </div>
                        <div class="flex-grow-1 text-lg-start text-center card-text">
                            <h3 class="card-title">
                                Asvalue's Point Of Sales
                            </h3>
                            <p class="card-caption">
                                Asvalue adalah aplikasi kasir berbasis cloud storage yang memudahkan proses operasional
                                usaha Anda. Asvalue memudahkan anda dalam merekap data-data transaksi.
                            </p>
                        </div>
                        <div class="card-btn-space col-lg-3">
                            <button class="btn btn-card-red">Pesan Sekarang</button>
                            <button class="btn btn-outline-red">Coba Gratis</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end benefit landscape -->

    <!-- hosting -->
    <section class="h-100 w-100 bg-white" style="box-sizing: border-box;" id="hosting">
        <div class="pricing overflow-hidden container-xxl mx-auto position-relative"
            style="font-family: 'Poppins', sans-serif">
            <div class="container mx-auto">
                <div class="d-flex flex-column text-center w-100" style="margin-bottom: 2.25rem">
                    <h2 class="title-text">Shared Hosting</h2>
                    <p class="caption-text mx-auto">
                        Memiliki hosting dengan nama domain sendiri selain untuk membangun kepercayaan dan awareness
                        pelanggan, juga bisa menjadi alat untuk semakin memantangkan brand image perusahaan atau pribadi
                        Anda, untuk itu kami adalah pilihan terbaik bagi anda.
                    </p>
                </div>
                <div class="d-flex flex-wrap">
                    @foreach ($hosting as $item)
                        <div class="mx-auto card-item position-relative">
                            <div class="card-item-outline bg-white d-flex flex-column position-relative overflow-hidden h-auto"
                                style="background-color: #2e3a53">
                                <h2 class="price-title">{{ $item->name }}</h2>
                                <h2 class="price-value d-flex align-items-center">
                                    <span class="cl-red">{{ 'Rp ' . number_format($item->price) }}</span>
                                    <span class="price-duration">/bln</span>
                                </h2>
                                <p class="price-caption">
                                    {{ $item->caption }}
                                </p>
                                <div class="price-list">
                                    @foreach ($spec = explode(', ', $item->specs) as $item)
                                        <p class="d-flex align-items-center check">
                                            <span
                                                class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                <img class="img-fluid" src="/assets/img/check.png" alt="" />
                                            </span>{{ $item }}
                                        </p>
                                    @endforeach

                                </div>
                                <button class="btn btn-big btn-fill-green align-items-center w-100">
                                    Pilih Paket
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- end hosting -->

    <!-- vpsHosting -->
    <section class="h-100 w-100 bg-light-blue" style="box-sizing: border-box;" id="vpsHosting">
        <div class="pricing overflow-hidden container-xxl mx-auto position-relative"
            style="font-family: 'Poppins', sans-serif">
            <div class="container mx-auto">
                <div class="d-flex flex-column text-center w-100" style="margin-bottom: 2.25rem">
                    <h2 class="title-text">VPS Hosting</h2>
                    <p class="caption-text mx-auto">
                        VPS Hosting memberikan sebuah tempat khusus kepada anda untuk mengeksplore resource server sendiri
                        (tidak berbagi dengan pengguna lainnya). Dengan harga terjangkau menjadikan VPS hosting kami sebagai
                        alternatif adalah pilihan terbaik bagi anda.
                    </p>
                </div>
                <div class="d-flex flex-wrap">
                    @foreach ($vps as $item)
                        <div class="mx-auto card-item position-relative">
                            <div class="card-item-outline bg-white d-flex flex-column position-relative overflow-hidden h-auto"
                                style="background-color: #2e3a53">
                                <h2 class="price-title">{{ $item->name }}</h2>
                                <h2 class="price-value d-flex align-items-center">
                                    <span class="cl-red">{{ 'Rp ' . number_format($item->price) }}</span>
                                    <span class="price-duration">/bln</span>
                                </h2>
                                <p class="price-caption">
                                    {{ $item->caption }}
                                </p>
                                <div class="price-list">
                                    @foreach ($spec = explode(', ', $item->specs) as $item)
                                        <p class="d-flex align-items-center check">
                                            <span
                                                class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                <img class="img-fluid" src="/assets/img/check.png" alt="" />
                                            </span>{{ $item }}
                                        </p>
                                    @endforeach

                                </div>
                                <button class="btn btn-big btn-fill-green align-items-center w-100">
                                    Pilih Paket
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- end vpsHosting -->

    <!-- mainServer -->
    <section class="h-100 w-100 bg-white" style="box-sizing: border-box;" id="mailServer">
        <div class="pricing overflow-hidden container-xxl mx-auto position-relative"
            style="font-family: 'Poppins', sans-serif">
            <div class="container mx-auto">
                <div class="d-flex flex-column text-center w-100" style="margin-bottom: 2.25rem">
                    <h2 class="title-text">Mail Server</h2>
                    <p class="caption-text mx-auto">
                        Menggunakan email dengan nama domain sendiri selain untuk membangun kepercayaan dan awareness
                        pelanggan, juga bisa menjadi alat untuk semakin memantabkan brand image perusahaan atau pribadi
                        Anda, untuk itu kami adalah pilihan terbaik bagi anda.
                    </p>
                </div>
                <div class="d-flex flex-wrap">
                    @foreach ($mail as $item)
                        <div class="mx-auto card-item position-relative">
                            <div class="card-item-outline bg-white d-flex flex-column position-relative overflow-hidden h-auto"
                                style="background-color: #2e3a53">
                                <h2 class="price-title">{{ $item->name }}</h2>
                                <h2 class="price-value d-flex align-items-center">
                                    <span class="cl-red">{{ 'Rp ' . number_format($item->price) }}</span>
                                    <span class="price-duration">/bln</span>
                                </h2>
                                <p class="price-caption">
                                    {{ $item->caption }}
                                </p>
                                <div class="price-list">
                                    @foreach ($spec = explode(', ', $item->specs) as $item)
                                        <p class="d-flex align-items-center check">
                                            <span
                                                class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                                <img class="img-fluid" src="/assets/img/check.png" alt="" />
                                            </span>{{ $item }}
                                        </p>
                                    @endforeach

                                </div>
                                <button class="btn btn-big btn-fill-green align-items-center w-100">
                                    Pilih Paket
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- end mainServer -->

    <!-- adventages -->
    <section class="adventages" style="background-color: #f2f6ff">
        {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
                integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
        </script> --}}

        <div class="container">
            <div class="row mx-0 text-center d-block">
                <div class="headline">
                    Kenapa anda harus memilih<br>
                    <span class="cl-blue font-red-hat-display">didadidu?</span>
                </div>
            </div>
            <div class="value row mx-0 d-flex justify-content-center justify-content-md-between">
                <div class="card">
                    <div class="card-body p-0">
                        {{-- <i class="fas fa-money-check fa-5x cl-red"></i> --}}
                        <img src="/assets/img/layanan.png" alt="" class="img-fluid" style="height: 150px">
                        <div class="card-desc">
                            <h4 class="card-title">Respon Cepat</h4>
                            <p class="card-text">Jarak bukan segalanya, tapi dapat menentukan seberapa cepat respon
                                bagi kesulitan anda.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body p-0">
                        <img src="/assets/img/flexibility.png" alt="" class="img-fluid" style="height: 150px">
                        <div class="card-desc">
                            <h4 class="card-title">Fleksible</h4>
                            <p class="card-text">Kami bisa berubah dengan cepat menyesuaikan tren teknologi terbaru.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body p-0">
                        <img src="/assets/img/unlimited.png" alt="" class="img-fluid" style="height: 150px">
                        <div class="card-desc">
                            <h4 class="card-title">Layanan Unlimited</h4>
                            <p class="card-text">Value for Money dimana manfaat yang anda rasakan jauh melebihi apa
                                yang anda bayar.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body p-0">
                        <img src="/assets/img/expert.png" alt="" class="img-fluid" style="height: 150px">
                        <div class="card-desc">
                            <h4 class="card-title">Tenaga Ahli</h4>
                            <p class="card-text">Tiap sektor di bidangi oleh tenaga ahli yang berpengalaman di bidang
                                tersebut.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- adventages -->

@endsection
