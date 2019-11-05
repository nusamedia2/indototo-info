@extends('apps.layout2')
@section('content')
<section>
    <div class="container">
             <div class="row">
                    @include('partials2.sidemenu')

                <div class="col-md-12 col-lg-8">
                    <h3 class="mt-30"><b>Cara Bermain</b></h3><hr />
                    <a class="btn btn-info" href="/no-keluar">No. Keluar</a>
                    <a class="btn btn-info" href="/4d-3d-2d">4D/3D/2D</a>
                    <a class="btn btn-info" href="/colok-bebas">Colok Bebas</a>
                    <a class="btn btn-info" href="/colok-bebas-2d">Colok Bebas 2D</a>
                    <a class="btn btn-info" href="/colok-naga">Colok Naga</a><br/><br/>
                    <a class="btn btn-info" href="/colok-jitu">Colok Jitu</a>
                    <a class="btn btn-info" href="/tengah-tepi">Tengah Tepi</a>
                    <a class="btn btn-info" href="/kombinasi">Kombinasi</a>
                    <a class="btn btn-info" href="/dasar">Dasar</a>
                    <a class="btn btn-info" href="/50-50">50 - 50</a>
                    <a class="btn btn-info" href="/shio">Shio</a>
                    <a class="btn btn-info" href="/silang">Silang</a><br/><br/>
                    <a class="btn btn-info" href="/kembang-kempis">Kembang Kempis</a>
                    <a class="btn btn-info" href="/24d-games">24D Games</a>
                    <a class="btn btn-info" href="/roulette">Rouletee</a>
                    <a class="btn btn-info" href="/sicbo">Sicbo</a>
                    <a class="btn btn-info" href="/12d-games">12D Games</a><br/><br/>
                    <a class="btn btn-info" href="/dragon-tiger">Dragon Tiger</a>
                    <h3 class="mtb-30">Silang Homo</h3>
                    <p class="mt-15">Permainan ini kadang disebut suami istri.
                            Menebak dari posisi Depan, Tengah, Belakang.</p>

                    <p class="mt-15">Contoh no 1234<br/>
                            Yang dimaksud dengan Posisi Depan adalah 2 no terdepan yaitu 12<br/>
                            Yang dimaksud dengan Posisi Tengah adalah 2 no ditengah yaitu 23<br/>
                            Yang dimaksud dengan Posisi Belakang adalah 2 no terbelakang yaitu 34</p>

                    <p class="mt-15">SILANG = Terdapat Ganjil dan Genap<br/>
                            HOMO = Terdapat 1 pasang Ganjil atau 1 pasang Genap</p>

                    <p class="mt-15">Analisis I: Beli Posisi Depan<br/>
                            Keluar : 4321.<br/>
                            Yang menjadi pedoman adalah posisi Depan, berarti 12<br/>
                            12 => 1=ganjil dan 2=genap , berarti hasil = SILANG</p>

                    <p class="mt-15">Analisis II: Beli Posisi Tengah<br/>
                            Keluar : 4326.<br/>
                            Yang menjadi pedoman adalah posisi Tengah, berarti 32<br/>
                            32 => 3=ganjil dan 2=genap , berarti hasil = SILANG</p>
                    <p class="mt-15">Analisis III: Beli Posisi Belakang<br/>
                            Keluar : 4533.<br/>
                            Yang menjadi pedoman adalah posisi Belakang, berarti 33<br/>
                            33 => 3=ganjil dan 3=ganjil , berarti hasil = HOMO</p>
                    <p class="mt-15">Jika dilakukan pembelian dengan 100rb dan menang maka:<br/>
                            Menang = 100rb + [Indeks kemenangan untuk Silang-Homo]</p>
                    <p class="mt-15">NB: Indeks menang dan diskon dapat dilihat di bagian Peraturan</p>
                </div>
             </div>
    </div>
</section>
@endsection
