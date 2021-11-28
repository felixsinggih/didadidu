<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="publisher" content="didadidu.com">
    <meta name="author" content="Didadidu team">
    <meta name="description"
        content="Didadidu adalah sentra layanan terpadu yang menggabungkan seluruh lini usaha yang di dukung oleh KPLI Banyumas dalam rangka menyediakan platform teknologi dan content serta solusi terkait IT yang anda butuhkan.">
    <meta name="keywords"
        content="Hosting, Web Hosting, Shared Hosting, Hosting Murah, Hosting Murah Indonesia, VPS, VPS Hosting, VPS Murah, VPS Murah Indonesia, Mail Server, Mail Server Murah, Software House Banyumas, Software House Cilacap, KPLI Banyumas, Komunitas Programmer Linux Indonesia">

    <title>Didadidu | {{ $title }}</title>
    <link href="/assets/img/d_logo.png" rel="shortcut icon">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- fontawesome -->
    <link rel="stylesheet" href="/assets/fontawesome-free/css/all.css">
    <!-- style -->
    <link rel="stylesheet" href="/assets/web/style/style.css">
</head>

<body>
    <!-- navbar -->
    @include('web.layout.navbar')
    <!-- end navbar -->

    @yield('content')

    <!-- footer -->
    @include('web.layout.footer')
    <!-- end footer -->

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
