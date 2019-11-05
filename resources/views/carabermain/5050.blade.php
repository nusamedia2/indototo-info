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
                    <h3 class="mtb-30">50 - 50</h3>
                    <p class="mt-15">Menebak ganjil/genap, besar/kecil.<br/>
                            Permainan ini sangat menarik karena pasarannya naik turun sesuai keinginan market pada waktu tersebut.<br/>
                            Dengan demikian, nilai pembelian dipengaruhi kei (pasaran).</p>

                    <p class="mt-15">Struktur: ABCD<br/>
                            Menebak ganjil/genap dan besar/kecil dari posisi:<br/>
                            A = AS<br/>
                            B = KOP<br/>
                            C = KEPALA<br/>
                            D = EKOR<br/>
                            Besar/Kecil: 0-4=kecil, 5-9=besar<br/>
                            Ganjil/Genap : 1=ganjil, 2=genap dan seterusnya</p>

                    <p class="mt-15">Analisis I:<br/>
                            Keluar : 4327<br/>
                            Berarti pemenang adalah yang memilih:<br/>
                            AS GENAP/KECIL<br/>
                            KOP GANJIL/KECIL<br/>
                            KEPALA GENAP/KECIL<br/>
                            EKOR GANJIL/BESAR<br/>
                            Misal anda membeli dengan dana Rp.100rb untuk AS Genap, menang = 100rb + [indeks pasaran AS Genap 50-50]<br/>
                            Atau:<br/>
                            Jika membeli dengan dana Rp.100rb untuk Ekor Ganjil, menang = 100rb + [indeks pasaran Ekor Ganjil 50-50]<br/>
                            Atau:<br/>
                            Jika membeli dengan dana Rp.100rb untuk AS Ganjil, kalah = 100rb + [indeks pasaran AS Ganjil 50-50]</p>

                    <p class="mt-15">NB: Indeks menang dan diskon dapat dilihat di bagian Peraturan</p>
                </div>
             </div>
    </div>
</section>
@endsection
