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
                    <h3 class="mtb-30">Dasar</h3>
                    <p class="mt-15">Menebak ganjil/genap dan besar/kecil dari penjumlah angka-angka 2D.
                            Nilai pembelian ditentukan pasaran (kei) pada saat itu.</p>

                    <p class="mt-15">Struktur: CD (2 angka terakhir)<br/>
                            Kecil = angka 0-4<br/>
                            Besar = angka 5-9<br/>
                            Ganjil = 1,3,5,7,9<br/>
                            Genap = 0,2,4,6,8</p>

                    <p class="mt-15">Analisis I:<br/>
                            Keluar : 1234,<br/>
                            3+4 = 7<br/>
                            Berarti keluar : Ganjil dan Besar</p>

                    <p class="mt-15">Analisis II:<br/>
                            Keluar : 5678,<br/>
                            7+8 = 15<br/>
                            Karena angka 15 lebih besar dari 9, kembali dihitung 1+5=6<br/>
                            Berarti keluar : Genap dan Besar</p>

                    <p class="mt-15">Analisis III:<br/>
                            Keluar : 1204,<br/>
                            0+4 = 4<br/>
                            Berarti keluar : Genap dan Kecil<br/>
                            Misal anda membeli dengan Rp.100rb untuk Genap, menang = 100rb + [indeks menang untuk Dasar]</p>

                    <p class="mt-15">NB: Indeks menang dan diskon dapat dilihat di bagian Peraturan</p>
                </div>
             </div>
    </div>
</section>
@endsection
