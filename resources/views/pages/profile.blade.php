@extends('layouts.main')

@section('konten')
<h2 class="mx-2">Profile Perusahaan</h2>
<hr>
<div class="card mb-3 mx-auto" style="max-width: 50rem;">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="{{ asset('dist/img/Logo1.png') }}" class="img-fluid" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">ADRENALI Outdoor</h5>
                <p class="card-text">ADRENALI Outdoor adalah toko Online yang beridri sejak 2023. Disini kami
                    menyediakan perlengkapan untuk Hiking, Climbing, sampai dengan Berkemah baik dari product Local
                    sampai dengan Import.
                    <br> Product yang kami tawarkan sudah dinyatakan lolos Quality Control (QC) dan sudah dapat di
                    pastikan jauh dari barang reject.
                </p>
            </div>
        </div>
    </div>
</div>
<h2 class="mx-2">Shop</h2>
<hr>

<div class="row row-cols-1 row-cols-md-3 g-4 mx-2">
    <div class="col">
        <div class="card">
            <img src="{{ asset('dist/img/Daypack Eiger 30L Kanawa 1.jpg') }}" class="img-fluid" alt="...">
            <div class="card-body">
                <h5 class="card-title">Daypack Eiger 30L Kanawa 1</h5>
                <p class="card-text">Daypack harian, Cocok untuk kegiatan Kantor ataupun Sekolah | 30L</p>
                <p>Rp. 450.000</p>
                <a href="#" class="btn btn-primary">Buy Now..</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <img src="{{ asset('dist/img/Eiger Anaconda Vibram.jpg') }}" class="img-fluid" alt="...">
            <div class="card-body">
                <h5 class="card-title">Eiger Anaconda Vibram</h5>
                <p class="card-text">Sepatu harian, Cocok untuk kegiatan Hiking ataupun Travelling | Size : 43, 44, 45</p>
                <p>Rp. 750.000</p>
                <a href="#" class="btn btn-primary">Buy Now..</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <img src="{{ asset('dist/img/Eiger Athena WTP.jpg') }}" class="img-fluid" alt="...">
            <div class="card-body">
                <h5 class="card-title">Eiger Athena WTP</h5>
                <p class="card-text">Jaket Tebal & Menghangatkan Khusus Untuk Wanita | Size : L, XL, XXL</p>
                <p>Rp. 550.000</p>
                <a href="#" class="btn btn-primary">Buy Now..</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <img src="{{ asset('dist/img/Jaket Gunung Pria Martial Arei Outdoorgear.jpeg') }}" class="img-fluid" alt="...">
            <div class="card-body">
                <h5 class="card-title">Jaket Gunung Pria Martial Arei Outdoorgear</h5>
                <p class="card-text">Jaket Gunung Pria, Cocok untuk kegiatan Outdoor ataupun Travelling | Size : L, XL, XXL</p>
                <p>Rp. 550.000</p>
                <a href="#" class="btn btn-primary">Buy Now..</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <img src="{{ asset('dist/img/Eiger Peak Series 30L.jpg') }}" class="img-fluid" alt="...">
            <div class="card-body">
                <h5 class="card-title">Eiger Peak Series 30L</h5>
                <p class="card-text">Carriel yang cukup besar & Luas, Cocok untuk kegiatan Outdoor | 45L</p>
                <p>Rp. 1.500.000</p>
                <a href="#" class="btn btn-primary">Buy Now..</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <img src="{{ asset('dist/img/IMG-20220621-WA0060_1.jpg') }}" class="img-fluid" alt="...">
            <div class="card-body">
                <h5 class="card-title">Kameja Arei Pria</h5>
                <p class="card-text">Kameja Lapangan, Cocok untuk kegiatan Kantor ataupun Outdoor | L, XL, XXL</p>
                <p>Rp. 350.000</p>
                <a href="#" class="btn btn-primary">Buy Now..</a>
            </div>
        </div>
    </div>
</div>


</div>
</div>
</section>
<!-- /.content -->
</div>
@endsection