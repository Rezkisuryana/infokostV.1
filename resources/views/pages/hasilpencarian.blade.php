@extends('layouts/index')

@section('title')
    Result
@endsection

@section('breadcumb')
<div id="breadcumb">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a><span>Beranda</span></a></li>
            <li class="breadcrumb-item"><a><span>Pencarian</span></a></li>
            <li class="breadcrumb-item"><a><span>Jabodetabek</span></a></li>
            <li class="breadcrumb-item active"><span>Jakarta Selatan</span></li>
        </ol>
    </div>
</div>
@endsection

@section('search')
<div id="search">
    <form>
        <div class="d-flex search-item"><input class="form-control" type="text" placeholder="Ketik nama daerah, nama kost atau nama apartement" id="item-1"><button class="btn btn-light" type="submit" id="item-3">Cari di Peta</button><button class="btn btn-light" type="submit" id="item-2">Cari Kamar</button></div>
    </form>
    <form>
        <div class="d-flex list-search">
            <ul class="list-unstyled column1">
                <li><i class="fa fa-angle-double-right icon-list"></i><a href="#">Cilandak</a></li>
                <li><i class="fa fa-angle-double-right icon-list"></i><a href="#">Mampang Prapatan</a></li>
            </ul>
            <ul class="list-unstyled column1">
                <li><i class="fa fa-angle-double-right icon-list"></i><a href="#">Jagakarsa</a></li>
                <li><i class="fa fa-angle-double-right icon-list"></i><a href="#">Pancoran</a></li>
            </ul>
            <ul class="list-unstyled column1">
                <li><i class="fa fa-angle-double-right icon-list"></i><a href="#">Kebayoran Baru</a></li>
                <li><i class="fa fa-angle-double-right icon-list"></i><a href="#">Pasar Minggu</a></li>
            </ul>
            <ul class="list-unstyled">
                <li><i class="fa fa-angle-double-right icon-list"></i><a href="#">Kebayoran Lama</a></li>
                <li><i class="fa fa-angle-double-right icon-list"></i><a href="#">Pesanggrahan</a></li>
            </ul>
        </div>
        <div class="text-center"><a href="#">Tampilkan Lainnya<i class="fa fa-angle-double-down"></i></a></div>
    </form>
</div>
@endsection

@section('slider')
<div id="slider">
        <div class="container">
            <div class="carousel slide" data-ride="carousel" id="carousel-1">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active"><img class="w-100 d-block" src=" {{asset('public/img/kost1.jpg')}} " alt="Slide Image"></div>
                    <div class="carousel-item"><img class="w-100 d-block" src="{{asset('public/img/kost1.jpg')}}" alt="Slide Image"></div>
                    <div class="carousel-item"><img class="w-100 d-block" src="{{asset('public/img/kost1.jpg')}}" alt="Slide Image"></div>
                </div>
                <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button"
                        data-slide="next"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
                <ol class="carousel-indicators">
                    <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-1" data-slide-to="1"></li>
                    <li data-target="#carousel-1" data-slide-to="2"></li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('result')
<div id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-lg-3 filter">
                    <div class="column2"><a class="btn btn-light btn-block text-uppercase text-left button-collapse" data-toggle="collapse" aria-expanded="true" aria-controls="collapse-1" role="button" href="#collapse-1">Tipe Properti<i class="fa fa-chevron-down float-right icon-filter"></i></a>
                        <div
                            class="collapse show" id="collapse-1">
                            <fieldset class="padding-filter">
                                <div class="custom-control custom-radio"><input type="radio" name="customRadio" checked="" id="customRadio1" class="custom-control-input"><label class="custom-control-label" for="customRadio1">All</label></div>
                                <div class="custom-control custom-radio"><input type="radio" name="customRadio" checked="" id="customRadio1" class="custom-control-input"><label class="custom-control-label" for="customRadio2">Kost</label></div>
                                <div class="custom-control custom-radio"><input type="radio" name="customRadio" id="customRadio1" class="custom-control-input"><label class="custom-control-label" for="customRadio2">Apartement</label></div>
                                <div class="custom-control custom-radio"><input type="radio" name="customRadio" id="customRadio1" class="custom-control-input"><label class="custom-control-label" for="customRadio2">Villa</label></div>
                                <div class="custom-control custom-radio"><input type="radio" name="customRadio" id="customRadio1" class="custom-control-input"><label class="custom-control-label" for="customRadio2">Hunian Lain</label></div>
                            </fieldset>
                    </div>
                </div>
                <div class="column2"><a class="btn btn-light btn-block text-uppercase text-left button-collapse" data-toggle="collapse" aria-expanded="true" aria-controls="collapse-2" role="button" href="#collapse-2">Periode Tinggal<i class="fa fa-chevron-down float-right icon-filter"></i></a>
                    <div
                        class="collapse show" id="collapse-2">
                        <fieldset class="d-flex padding-filter">
                            <div class="custom-control custom-radio custom-control-inline"><input type="radio" name="customRadioInline" checked="" id="customRadioInline1" class="custom-control-input"><label class="custom-control-label" for="customRadioInline1">All</label></div>
                            <div class="custom-control custom-radio custom-control-inline"><input type="radio" name="customRadioInline" id="customRadioInline2" class="custom-control-input"><label class="custom-control-label" for="customRadioInline2">Harian</label></div>
                            <div class="custom-control custom-radio custom-control-inline"><input type="radio" name="customRadioInline" id="customRadioInline2" class="custom-control-input"><label class="custom-control-label" for="customRadioInline2">Mingguan</label></div>
                            <div class="custom-control custom-radio custom-control-inline"><input type="radio" name="customRadioInline" id="customRadioInline2" class="custom-control-input"><label class="custom-control-label" for="customRadioInline2">Bulanan</label></div>
                            <div class="custom-control custom-radio custom-control-inline"><input type="radio" name="customRadioInline" id="customRadioInline2" class="custom-control-input"><label class="custom-control-label" for="customRadioInline2">Tahunan</label></div>
                        </fieldset>
                </div>
            </div>
            <div class="column2"><a class="btn btn-light btn-block text-uppercase text-left button-collapse" data-toggle="collapse" aria-expanded="true" aria-controls="collapse-3" role="button" href="#collapse-3">Harga<i class="fa fa-chevron-down float-right icon-filter"></i></a>
                <div
                    class="collapse show" id="collapse-3">
                    <fieldset class="padding-filter">
                        <div>
                            <div class="row">
                                <div class="col-6 text-left"><span class="range"><strong>IDR 10</strong></span></div>
                                <div class="col-6 text-right"><span class="range"><strong>IDR 1000</strong></span></div>
                            </div><input type="text" id="ex2" class="span2" value="" data-slider-min="10" data-slider-max="1000" data-slider-step="5" data-slider-value="[250,450]"></div>
                    </fieldset>
            </div>
        </div>
        <div class="column2"><a class="btn btn-light btn-block text-uppercase text-left button-collapse" data-toggle="collapse" aria-expanded="true" aria-controls="collapse-4" role="button" href="#collapse-4">Fasilitas<i class="fa fa-chevron-down float-right icon-filter"></i></a>
            <div
                class="collapse show" id="collapse-4">
                <fieldset class="d-flex padding-filter">
                    <div class="custom-control custom-checkbox custom-control-inline"><input type="checkbox" checked="" id="customCheckInline1" class="custom-control-input"><label class="custom-control-label" for="customCheckInline1">Dapur</label></div>
                    <div class="custom-control custom-checkbox custom-control-inline"><input type="checkbox" id="customCheckInline2" class="custom-control-input"><label class="custom-control-label" for="customCheckInline2">Kamar Mandi Luar</label></div>
                    <div class="custom-control custom-checkbox custom-control-inline"><input type="checkbox" id="customCheckInline2" class="custom-control-input"><label class="custom-control-label" for="customCheckInline2">Parkir Mobil</label></div>
                    <div class="custom-control custom-checkbox custom-control-inline"><input type="checkbox" id="customCheckInline2" class="custom-control-input"><label class="custom-control-label" for="customCheckInline2">Parkir Motor</label></div>
                    <div class="custom-control custom-checkbox custom-control-inline"><input type="checkbox" id="customCheckInline2" class="custom-control-input"><label class="custom-control-label" for="customCheckInline2">Asisten Rumah Tangga</label></div>
                    <div class="custom-control custom-checkbox custom-control-inline"><input type="checkbox" id="customCheckInline2" class="custom-control-input"><label class="custom-control-label" for="customCheckInline2">Ruang Tamu</label></div>
                    <div class="custom-control custom-checkbox custom-control-inline"><input type="checkbox" id="customCheckInline2" class="custom-control-input"><label class="custom-control-label" for="customCheckInline2">Security</label></div>
                    <div class="custom-control custom-checkbox custom-control-inline"><input type="checkbox" id="customCheckInline2" class="custom-control-input"><label class="custom-control-label" for="customCheckInline2">WIFI</label></div>
                </fieldset>
        </div>
    </div>
    <div class="column2"><a class="btn btn-light btn-block text-uppercase text-left button-collapse" data-toggle="collapse" aria-expanded="true" aria-controls="collapse-5" role="button" href="#collapse-5">Jenis Penghuni<i class="fa fa-chevron-down float-right icon-filter"></i></a>
        <div
            class="collapse show" id="collapse-5">
            <fieldset class="d-flex padding-filter">
                <div class="custom-control custom-checkbox custom-control-inline"><input type="checkbox" checked="" id="customCheckInline1" class="custom-control-input"><label class="custom-control-label" for="customCheckInline1">Dapur</label></div>
                <div class="custom-control custom-checkbox custom-control-inline"><input type="checkbox" id="customCheckInline2" class="custom-control-input"><label class="custom-control-label" for="customCheckInline2">Kamar Mandi Luar</label></div>
                <div class="custom-control custom-checkbox custom-control-inline"><input type="checkbox" id="customCheckInline2" class="custom-control-input"><label class="custom-control-label" for="customCheckInline2">Parkir Mobil</label></div>
                <div class="custom-control custom-checkbox custom-control-inline"><input type="checkbox" id="customCheckInline2" class="custom-control-input"><label class="custom-control-label" for="customCheckInline2">Parkir Motor</label></div>
                <div class="custom-control custom-checkbox custom-control-inline"><input type="checkbox" id="customCheckInline2" class="custom-control-input"><label class="custom-control-label" for="customCheckInline2">Asisten Rumah Tangga</label></div>
                <div class="custom-control custom-checkbox custom-control-inline"><input type="checkbox" id="customCheckInline2" class="custom-control-input"><label class="custom-control-label" for="customCheckInline2">Ruang Tamu</label></div>
                <div class="custom-control custom-checkbox custom-control-inline"><input type="checkbox" id="customCheckInline2" class="custom-control-input"><label class="custom-control-label" for="customCheckInline2">Security</label></div>
                <div class="custom-control custom-checkbox custom-control-inline"><input type="checkbox" id="customCheckInline2" class="custom-control-input"><label class="custom-control-label" for="customCheckInline2">WIFI</label></div>
            </fieldset>
    </div>
    </div>
    <div class="column2"><a class="btn btn-light btn-block text-uppercase text-left button-collapse" data-toggle="collapse" aria-expanded="true" aria-controls="collapse-6" role="button" href="#collapse-6">Lokasi terdekat<i class="fa fa-chevron-down float-right icon-filter"></i></a>
        <div
            class="collapse show" id="collapse-6">
            <fieldset class="d-flex padding-filter"></fieldset>
    </div>
    </div>
    <div class="left-banner"><img src=" {{asset('public/img/300x250.png')}} " class="ukuran-left-banner"></div>
    </div>
    <div class="col-md-9 col-lg-9 main-content">
        <div class="product">
            <div class="rekomendasi">
                <ul class="nav color-nav">
                    <li class="nav-item"><a class="nav-link text-uppercase color-font" href="#">Rekomendasi<i class="fa fa-thumbs-o-up float-left margin-icon"></i></a></li>
                </ul>
                <div class="row">
                    @foreach($hasil as $row)
                    <div class="col-sm">
                        <div class="card" style="width: 21rem;">
                            <a href=""><img src=" {{ $row->images }} " class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <h4 class="card-title font-weight-bold">{{ $row->property_name }}</h4>
                                <h6 class="card-text">{{ $row->property_address }}</h6>
                                {{-- masih Error --}}
                                {{-- <div class="row">
                                    @if(isset($row->facility))
                                        @foreach ($row->facility as $key => $value)
                                            <div class="col-4 detail-icon">
                                                <img src="{{ asset('img/svg/'.\App\Providers\AppHelper::to_icon($value).'.svg') }}" alt="{{ $value }}" width="33" height="33">
                                                <label>{{ $value['facility_name'] }}</label>
                                            </div>
                                        @endforeach
                                    @endif
                                </div> --}}
                                <span class="size-icon margin-icon">
                                    <i class="fa fa-user-circle"></i>
                                    <i class="fa fa-user-circle"></i>
                                    <i class="fa fa-user-circle"></i>
                                    <i class="fa fa-user-circle"></i>
                                </span>
                            </div>
                            <div class="card-footer">
                                <h2>IDR {{ $row->property_daily_max}}<span class="per-hari">/hari</span></h2>
                            </div>
                        </div>
                    </div>
                    <br>
                    @endforeach
                </div>
            </div>
            <div class="sundulgan">
                <ul class="nav color-nav mt-3">
                    <li class="nav-item"><a class="nav-link text-uppercase color-font" href="#">sundul gan<i class="fa fa-thumbs-o-up float-left margin-icon"></i></a></li>
                </ul>
                <div class="row">
                    <div class="col-sm">
                            <div class="card" style="width: 21rem;">
                                <a href=""><img src=" {{asset('public/img/kost2.jpg')}} " class="card-img-top" alt="..."></a>
                                <div class="card-body">
                                    <h3 class="card-title font-weight-bold">Kost Damai Mansion</h3>
                                    <h5 class="card-text">Jl. Damai II N.1 Kebayoran Baru</h5>
                                    <span class="size-icon margin-icon">
                                        <i class="fa fa-user-circle"></i>
                                        <i class="fa fa-user-circle"></i>
                                        <i class="fa fa-user-circle"></i>
                                        <i class="fa fa-user-circle"></i>
                                    </span>
                                </div>
                                <div class="card-footer">
                                    <h2>IDR 350.000<span class="per-hari">/hari</span></h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="card" style="width: 21rem;">
                                <a href=""><img src="{{asset('public/img/kost2.jpg')}}" class="card-img-top" alt="..."></a>
                                <div class="card-body">
                                    <h3 class="card-title font-weight-bold">Kost Damai Mansion</h3>
                                    <h5 class="card-text">Jl. Damai II N.1 Kebayoran Baru</h5>
                                    <span class="size-icon margin-icon">
                                        <i class="fa fa-user-circle"></i>
                                        <i class="fa fa-user-circle"></i>
                                        <i class="fa fa-user-circle"></i>
                                        <i class="fa fa-user-circle"></i>
                                    </span>
                                </div>
                                <div class="card-footer">
                                    <h2>IDR 350.000<span class="per-hari">/hari</span></h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="card" style="width: 21rem;">
                                <a href=""><img src="{{asset('public/img/kost2.jpg')}}" class="card-img-top" alt="..."></a>
                                <div class="card-body">
                                    <h3 class="card-title font-weight-bold">Kost Damai Mansion</h3>
                                    <h5 class="card-text">Jl. Damai II N.1 Kebayoran Baru</h5>
                                    <span class="size-icon margin-icon">
                                        <i class="fa fa-user-circle"></i>
                                        <i class="fa fa-user-circle"></i>
                                        <i class="fa fa-user-circle"></i>
                                        <i class="fa fa-user-circle"></i>
                                    </span>
                                </div>
                                <div class="card-footer">
                                    <h2>IDR 350.000<span class="per-hari">/hari</span></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right-banner mt-3">
                        <span class="margin-banner">
                            <img src=" {{asset('public/img/300x100.jpg')}} ">
                        </span>
                        <span>
                            <img src=" {{asset('public/img/300x100.jpg')}} ">
                        </span>
                    </div>
                    <div class="row">
                    <div class="col-sm">
                            <div class="card" style="width: 21rem;">
                                <a href=""><img src="{{asset('public/img/kost2.jpg')}}" class="card-img-top" alt="..."></a>
                                <div class="card-body">
                                    <h3 class="card-title font-weight-bold">Kost Damai Mansion</h3>
                                    <h5 class="card-text">Jl. Damai II N.1 Kebayoran Baru</h5>
                                    <span class="size-icon margin-icon">
                                        <i class="fa fa-user-circle"></i>
                                        <i class="fa fa-user-circle"></i>
                                        <i class="fa fa-user-circle"></i>
                                        <i class="fa fa-user-circle"></i>
                                    </span>
                                </div>
                                <div class="card-footer">
                                    <h2>IDR 350.000<span class="per-hari">/hari</span></h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="card" style="width: 21rem;">
                                <a href=""><img src="{{asset('public/img/kost2.jpg')}}" class="card-img-top" alt="..."></a>
                                <div class="card-body">
                                    <h3 class="card-title font-weight-bold">Kost Damai Mansion</h3>
                                    <h5 class="card-text">Jl. Damai II N.1 Kebayoran Baru</h5>
                                    <span class="size-icon margin-icon">
                                        <i class="fa fa-user-circle"></i>
                                        <i class="fa fa-user-circle"></i>
                                        <i class="fa fa-user-circle"></i>
                                        <i class="fa fa-user-circle"></i>
                                    </span>
                                </div>
                                <div class="card-footer">
                                    <h2>IDR 350.000<span class="per-hari">/hari</span></h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="card" style="width: 21rem;">
                                <a href=""><img src="{{asset('public/img/kost2.jpg')}}" class="card-img-top" alt="..."></a>
                                <div class="card-body">
                                    <h3 class="card-title font-weight-bold">Kost Damai Mansion</h3>
                                    <h5 class="card-text">Jl. Damai II N.1 Kebayoran Baru</h5>
                                    <span class="size-icon margin-icon">
                                        <i class="fa fa-user-circle"></i>
                                        <i class="fa fa-user-circle"></i>
                                        <i class="fa fa-user-circle"></i>
                                        <i class="fa fa-user-circle"></i>
                                    </span>
                                </div>
                                <div class="card-footer">
                                    <h2>IDR 350.000<span class="per-hari">/hari</span></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-inline-block pagination mt-5">
                        <nav>
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                <li class="page-item active"><a class="page-link">1</a></li>
                                <li class="page-item"><a class="page-link">2</a></li>
                                <li class="page-item"><a class="page-link">3</a></li>
                                <li class="page-item"><a class="page-link">4</a></li>
                                <li class="page-item"><a class="page-link">5</a></li>
                                <li class="page-item"><a class="page-link" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                            </ul>
                        </nav>
                    </div>
                <div class="hunian-lainnya">
                    <ul class="nav color-nav">
                        <li class="nav-item"><a class="nav-link text-uppercase color-font" href="#">Hunian lainnya<i class="fa fa-thumbs-o-up float-left margin-icon"></i></a></li>
                    </ul>
                    <div class="row mx-md-n5">
                        <div class="col">
                            <div class="card" style="width: 15rem;">
                                <a href=""><img src="{{asset('public/img/kost2.jpg')}}" class="card-img-top" alt="..."></a>
                                <div class="card-body">
                                    <h5 class="card-title font-weight-bold">Kost Damai Mansion</h5>
                                    <p class="card-text">Jl. Damai II N.1 Kebayoran Baru</p>
                                    <span class="size-icon margin-icon">
                                        <i class="fa fa-user-circle"></i>
                                        <i class="fa fa-user-circle"></i>
                                        <i class="fa fa-user-circle"></i>
                                        <i class="fa fa-user-circle"></i>
                                    </span>
                                </div>
                                <div class="card-footer">
                                    <h4>IDR 350.000<span class="per-hari">/hari</span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="width: 15rem;">
                                <a href=""><img src="{{asset('public/img/kost2.jpg')}}" class="card-img-top" alt="..."></a>
                                <div class="card-body">
                                    <h5 class="card-title font-weight-bold">Kost Damai Mansion</h5>
                                    <p class="card-text">Jl. Damai II N.1 Kebayoran Baru</p>
                                    <span class="size-icon margin-icon">
                                        <i class="fa fa-user-circle"></i>
                                        <i class="fa fa-user-circle"></i>
                                        <i class="fa fa-user-circle"></i>
                                        <i class="fa fa-user-circle"></i>
                                    </span>
                                </div>
                                <div class="card-footer">
                                    <h4>IDR 350.000<span class="per-hari">/hari</span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="width: 15rem;">
                                <a href=""><img src="{{asset('public/img/kost2.jpg')}}" class="card-img-top" alt="..."></a>
                                <div class="card-body">
                                    <h5 class="card-title font-weight-bold">Kost Damai Mansion</h5>
                                    <p class="card-text">Jl. Damai II N.1 Kebayoran Baru</p>
                                    <span class="size-icon margin-icon">
                                        <i class="fa fa-user-circle"></i>
                                        <i class="fa fa-user-circle"></i>
                                        <i class="fa fa-user-circle"></i>
                                        <i class="fa fa-user-circle"></i>
                                    </span>
                                </div>
                                <div class="card-footer">
                                    <h4>IDR 350.000<span class="per-hari">/hari</span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="width: 15rem;">
                                <a href=""><img src="{{asset('public/img/kost2.jpg')}}" class="card-img-top" alt="..."></a>
                                <div class="card-body">
                                    <h5 class="card-title font-weight-bold">Kost Damai Mansion</h5>
                                    <p class="card-text ">Jl. Damai II N.1 Kebayoran Baru</p>
                                    <span class="size-icon margin-icon">
                                        <i class="fa fa-user-circle"></i>
                                        <i class="fa fa-user-circle"></i>
                                        <i class="fa fa-user-circle"></i>
                                        <i class="fa fa-user-circle"></i>
                                    </span>
                                </div>
                                <div class="card-footer">
                                    <h4>IDR 350.000<span class="per-hari">/hari</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
@endsection