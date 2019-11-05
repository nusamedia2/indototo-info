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
                    <h3 class="mtb-30">Colok Bebas 2D</h3>
                    <p class="mt-15">Cara kerja seperti colok bebas tapi mesti yang keluar 2 angka dari 4D.</p>

                    <p class="mt-15">Struktur: ABCD</p>

                    <p class="mt-15">Analisis I:<br/>
                            Keluar : 4321<br/>
                            Misalnya dibeli 4 dan 2 dengan nilai 100rb.<br/>
                            Berarti menang:<br/>
                            100rb + [Indeks kemenangan untuk colok bebas 2D, kategori: 2 digit]</p>
                    <p class="mt-15">Analisis II:<br/>
                            Keluar : 4321<br/>
                            Misalnya dibeli 4 dan 6 dengan nilai 100rb.<br/>
                            Berarti KALAH dan nilai betting tidak dikembalikan<br/></p>

                    <p class="mt-15">Analisis III:<br/>
                            Keluar : 4331<br/>
                            Misalnya dibeli 4 dan 3 dengan nilai 100rb.<br/>
                            Berarti menang:<br/>
                            100rb + [Indeks kemenangan untuk colok bebas 2D, kategori: 3 digit]</p>

                    <p class="mt-15">Analisis IV:<br/>
                            Keluar : 4334<br/>
                            Misalnya dibeli 4 dan 3 dengan nilai 100rb.<br/>
                            Berarti menang:<br/>
                            100rb + [Indeks kemenangan untuk colok bebas 2D, kategori: 4 digit]</p>

                    <p class="mt-15">NB: Indeks menang dan diskon dapat dilihat di bagian Peraturan</p>
                </div>
             </div>
    </div>
</section>
@endsection
