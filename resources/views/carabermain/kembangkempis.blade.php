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
                    <h3 class="mtb-30">Kembang Kempis</h3>
                    <p class="mt-15">Struktur = ABCD<br/>
                            Jika Menebang posisi Depan maka yang menjadi fokus adalah AB<br/>
                            Jika Menebang posisi Tengah maka yang menjadi fokus adalah BC<br/>
                            Jika Menebang posisi Belakang maka yang menjadi fokus adalah CD</p>

                    <p class="mt-15">KEMBANG jika A < B ataupun B < C ataupun C < D<br/>
                        KEMPIS jika A > B ataupun B > C ataupun C > D<br/>
                        KEMBAR jika A = B ataupun B = C ataupun C = D</p>

                    <p class="mt-15">Analisis I: Beli Posisi Depan<br/>
                        Keluar : 4321<br/>
                        Yang menjadi pedoman adalah posisi Depan, berarti 43<br/>
                        43 => 4 > 3, hasil = KEMPIS</p>

                    <p class="mt-15">Analisis II:<br/>
                        Keluar : 4236 Beli Posisi Tengah<br/>
                        Yang menjadi pedoman adalah posisi Tengah, berarti 23<br/>
                        23 => 2 < 3, hasil = KEMBANG</p>

                    <p class="mt-15">Analisis III: Beli Posisi Belakang<br/>
                            Keluar : 4099<br/>
                            Yang menjadi pedoman adalah posisi Belakang, berarti 99<br/>
                            99 => Hasil = KEMBAR</p>

                    <p class="mt-15">Jika dilakukan pembelian dengan 100rb dan menang maka:<br/>
                            Menang = 100rb + [Indeks kemenangan untuk KEMBANG-KEMPIS]</p>

                    <p class="mt-15">NB: Indeks menang dan diskon dapat dilihat di bagian Peraturan</p>
                </div>
             </div>
    </div>
</section>
@endsection
