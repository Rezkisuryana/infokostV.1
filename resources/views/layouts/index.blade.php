<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link rel="stylesheet" href=" {{asset('public/bootstrap/css/bootstrap.min.css')}} ">
    <link rel="stylesheet" href=" {{asset('public/fonts/font-awesome.min.css')}} ">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.2/css/bootstrap-slider.min.css">
    <link rel="stylesheet" href=" {{asset('public/css/styles.css')}} ">
</head>

<body>
    <div id="header">
        <nav class="navbar navbar-light navbar-expand-md navigation-clean-search">
            <div class="container"><a class="navbar-brand" href="#"><img src=" {{asset('public/img/logo.png')}} "></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav mx-auto">
                        <li class="nav-item nav-color" role="presentation"><a class="nav-link active" href="#">Cek Pemesanan</a></li>
                        <li class="nav-item nav-color" role="presentation"><a class="nav-link" href="#">Peta</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#">Kost</a></li>
                        <li class="nav-item nav-color" role="presentation"><a class="nav-link" href="#">Apartement</a></li>
                        <li class="nav-item nav-color" role="presentation"><a class="nav-link" href="#">Villa</a></li>
                        <li class="nav-item nav-color" role="presentation"><a class="nav-link" href="#">Hunian</a></li>
                        <li class="nav-item nav-color" role="presentation"><a class="nav-link" href="#">Daftar/Masuk</a></li>
                    </ul><a class="btn btn-light action-button" role="button" href="#">Kelola Hunian Anda</a>
                </div>
            </div>
        </nav>
    </div>
    
    @yield('breadcumb')
    @yield('search')
    @yield('slider')
    @yield('result')

    <div class="text-center" id="payment">
        <h5>Pembayaran</h5>
        <span class="padding-payment">
            <img src=" {{asset('public/img/visa.png')}} ">
        </span>
        <span class="padding-payment">
            <img src=" {{asset('public/img/mc.png')}} ">
        </span>
        <span class="padding-payment">
            <img src=" {{asset('public/img/gopay.png')}} ">
        </span>
        <span class="padding-payment">
            <img src=" {{asset('public/img/bank-transfer.png')}} ">
        </span>
    </div>
    <div
        id="footer" class="footer-clean">
        <footer>
            <div class="container">
                <div class="row margin-footer">
                    <div class="col-2 col-sm-2 col-md-2 item margin-footer">
                        <h3 class="warna-judul-footer">Lokasi Populer</h3>
                        <ul>
                            <li class="margin-list-footer"><a href="#">Jabodetabek</a></li>
                            <li class="margin-list-footer"><a href="#">Bali</a></li>
                            <li class="margin-list-footer"><a href="#">Bandung</a></li>
                            <li class="margin-list-footer"><a href="#">Surabaya</a></li>
                            <li class="margin-list-footer"><a href="#">Yogyakarta</a></li>
                            <li><a href="#">Semarang</a></li>
                        </ul>
                    </div>
                    <div class="col-3 col-sm-3 col-md-3 col-lg-3 item margin-footer">
                        <h3 class="warna-judul-footer">Dekat Kampus</h3>
                        <ul>
                            <li class="margin-list-footer"><a href="#">Universitas Bina Nusantara</a></li>
                            <li class="margin-list-footer"><a href="#">Universitas Trisakti</a></li>
                            <li class="margin-list-footer"><a href="#">Universitas Tarumanegara</a></li>
                            <li class="margin-list-footer"><a href="#">Institut Pertanian Jakarta</a></li>
                            <li class="margin-list-footer"><a href="#">Universitas Budi Luhur</a></li>
                            <li><a href="#">London School</a></li>
                        </ul>
                    </div>
                    <div class="col-2 col-sm-2 col-md-2 col-lg-2 item margin-footer">
                        <h3 class="warna-judul-footer">Dekat Mall</h3>
                        <ul>
                            <li class="margin-list-footer"><a href="#">Central Park</a></li>
                            <li class="margin-list-footer"><a href="#">Mall Taman anggrek</a></li>
                            <li class="margin-list-footer"><a href="#">Senayan City</a></li>
                            <li class="margin-list-footer"><a href="#">Mall Kelapa Gading</a></li>
                            <li class="margin-list-footer"><a href="#">FX Sudirman</a></li>
                            <li><a href="#">Lippo Mall Kemang</a></li>
                        </ul>
                    </div>
                    <div class="col-2 col-sm-2 col-md-2 col-lg-2 item margin-footer">
                        <h3 class="warna-judul-footer">Dekat Perkantoran</h3>
                        <ul>
                            <li class="margin-list-footer"><a href="#">DBS Tower</a></li>
                            <li class="margin-list-footer"><a href="#">Sahid Sudirman</a></li>
                            <li class="margin-list-footer"><a href="#">The Energy</a></li>
                            <li class="margin-list-footer"><a href="#">The Plaza</a></li>
                            <li class="margin-list-footer"><a href="#">Wisma BNI 46</a></li>
                            <li class="margin-list-footer"><a href="#">BTPN</a></li>
                        </ul>
                    </div>
                    <div class="col-3 col-sm-3 col-md-3 col-lg-3 item social">
                        <h3 class="text-left warna-judul-footer">Social Media</h3>
                        <p class="margin-sosmed"><img src=" {{asset('public/img/facebook.png')}} " class="icon-sosmed"><span>Facebook</span></p>
                        <p class="margin-sosmed"><img src=" {{asset('public/img/twitter.png')}} " class="icon-sosmed"><span>Twitter</span></p>
                        <p class="margin-sosmed"><img src=" {{asset('public/img/instagram.png')}} " class="icon-sosmed"><span>Instagram</span></p>
                        <p class="margin-sosmed"><img src=" {{asset('public/img/Gplus.png')}} " class="icon-sosmed"><span>Google Plus</span></p>
                        <p class="margin-sosmed"><img src=" {{asset('public/img/pinterest.png')}} " class="icon-sosmed"><span>Pinterest</span></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2 col-md-2 col-lg-2 item">
                        <h3 class="warna-judul-footer">Tentang Infokost</h3>
                        <ul>
                            <li class="margin-list-footer"><a href="#">Karir</a></li>
                            <li class="margin-list-footer"><a href="#">Tentang Kami</a></li>
                            <li class="margin-list-footer"><a href="#">Hubungi Kami</a></li>
                            <li class="margin-list-footer"><a href="#">Bantuan</a></li>
                            <li class="margin-list-footer"><a href="#">SiteMap</a></li>
                            <li class="margin-list-footer"><a href="#">Lowongan Kerja</a></li>
                        </ul>
                    </div>
                    <div class="col-3 col-md-3 col-lg-3 item">
                        <h3 class="warna-judul-footer">Lainnya</h3>
                        <ul>
                            <li class="margin-list-footer"><a href="#">Ketentuan Pengguna</a></li>
                            <li class="margin-list-footer"><a href="#">Kebijakan Privasi</a></li>
                            <li class="margin-list-footer"><a href="#">Bantuan</a></li>
                            <li class="margin-list-footer"><a href="#">Beriklan Dengan Kami</a></li>
                            <li class="margin-list-footer"><a href="#">Riwayat Sewa Kamar</a></li>
                            <li class="margin-list-footer"><a href="#">SiteMap</a></li>
                        </ul>
                    </div>
                    <div class="col-4 col-md-4 col-lg-4 item">
                        <h3 class="warna-judul-footer">Layanan Pelanggan</h3>
                        <ul>
                            <li class="margin-list-footer"><a href="#">021-29675858 ext : 401</a></li>
                            <li><a href="#">0811 -587-5678</a></li>
                        </ul>
                    </div>
                    <div class="col-3 col-md-3 col-lg-3 item">
                        <h3 class="warna-judul-footer">Layanan Pelanggan</h3>
                        <div class="button-download margin-list-footer">
                            <img src=" {{asset('public/img/Gplay.png')}} ">
                        </div>
                        <div class="button-download">
                            <img src=" {{asset('public/img/appstore.png')}} ">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 copyright text-center">
                        <span class="isi-copyright">Allright Reserved 2007-2019</span>
                    </div>
                </div>
            </div>
        </footer>
        </div>
</body>
<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip(); 
    });
</script>
<script src=" {{asset('public/js/jquery.min.js')}} "></script>
<script src=" {{asset('public/bootstrap/js/bootstrap.min.js')}} "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.2/bootstrap-slider.min.js"></script>
<script src=" {{asset('public/js/Range-selector---slider.js')}} "></script>
</html>