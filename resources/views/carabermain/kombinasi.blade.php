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
                    <h3 class="mtb-30">Kombinasi</h3>

                    <p class="mt-15">Struktur: ABCD</p>

                    <p class="mt-15">A = AS<br/>
                            B = KOP<br/>
                            C = KEPALA<br/>
                            D = EKOR<br/>
                            Besar/Kecil: 0-4=kecil, 5-9=besar<br/>
                            Ganjil/Genap : 1=ganjil, 2=genap dan seterusnya</p>

                    <p class="mt-15">Anda dapat menebak Genap/Ganjil, Besar/Kecil
                            dari 2 kombinasi antara AS, KOP, KEPALA, EKOR</p>

                    <p class="mt-15">Analisis :<br/>
                            Keluar : 1845</p>

                    <p class="mt-15">Berarti pemenang untuk :<br/>
                            AS Kecil/Ganjil dan KOP Besar/Genap<br/>
                            KEPALA Kecil/Genap dan EKOR Besar/Ganjil<br/>
                            AS Kecil/Ganjil dan KEPALA Kecil/Genap<br/>
                            AS Kecil/Ganjil dan EKOR Besar/Ganjil<br/>
                            KOP Besar/Genap dan KEPALA Kecil/Genap<br/>
                            KOP Besar/Genap dan EKOR Besar/Ganjil</p>

                    <p class="mt-15">Misalnya anda membeli AS KECIl dan KOP GENAP seharga 100rb,<br/>
                            maka menang = 100rb + [indeks kemenangan untuk kombinasi 2]<br/>
                            atau :<br/>
                            jika membeli KOP GENAP dan KEPALA GENAP seharga 100rb,<br/>
                            maka menang = 100rb + [indeks kemenangan untuk kombinasi 2]<br/>
                            atau :<br/>
                            jika membeli KEPALA KECIL dan EKOR GENAP seharga 100rb, berarti KALAH<br/>
                            ( Anda harus menebak keduanya dengan Benar agar Menang )</p>

                    <p class="mt-15">NB: Indeks menang dan diskon dapat dilihat di bagian Peraturan</p>
                </div>
             </div>
    </div>
</section>
@endsection
