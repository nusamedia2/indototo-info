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
                    <h3 class="mtb-30">12D Games</h3>
                    <p class="mt-15">Struktur: AB<br/><br/>

                            Misalnya keluar : 8<br/>
                            Berarti pemenang untuk<br/>
                            Ball 12 = 08</p>

                    <p class="mt-15">Menebak 50-50 Ball 12 (12D).<br/>
                            Struktur: AB<br/><br/>

                            Misalnya keluar : 08<br/>
                            Index Kecil antara 01 - 06<br/>
                            Index Besar antara 07 - 12</p>

                    <p class="mt-15">Apabila user menebak :<br/>
                            Genap = Menang<br/>
                            Ganjil = Kalah<br/>
                            Besar = Kalah<br/>
                            Kecil = Menang</p>
                    <p class="mt-15">Aturan permainan:<br/>
                            1. Jika anda membeli diluar dari nomor yang dikeluarkan, berarti anda kalah dan uang tidak dikembalikan sama sekali.<br/>
                            2. Angka yang dapat dibeli hanya dari 01 sampai dengan 12 apabila anda membeli angka diluar 12 ( baik melalui hack maupun membobol proteksi angka kami ) maka anda akan dinyatakan fold dan uang tidak dibalikan
                            </p>
                    <h2 class="mtb-30">Pembayaran :</h2><br/>
                    <p class="mt-15">24D Nomor<br/>
                            Tebak 1 Nomor :11x Pasangan<br/>
                            Tebak 2 Nomor :5.5x Pasangan<br/>
                            Tebak 4 Nomor :2.75x Pasangan<br/>
                            Tebak Per Baris :2.75x Pasangan<br/>
                            Tebak Per Kolom :3.6x Pasangan<br/>
                            Tebak Jackpot :45x Pasangan<br/><br/>

                            50-50<br/>
                            Tebak Ganjil - Genap :x2 pasangan - Kei 5%<br/>
                            Tebak Besar - Kecil :x2 pasangan - Kei 5%<br/>
                            Tebak Merah - Hitam :x2 pasangan - Kei 5%<br/>
                            </p>
                        <div class="kotak">
                            <p class="mt-15">Contoh :<br/>
                                    - Pemasangan Ganjil - Genap atau Besar - Kecil atau Merah - Hitam Sebesar pasangan : Rp 10.000<br/>
                                    - Angka yang keluar : MERAH<br/>
                                    Pembayaran :<br/>
                                    Rp 10.000 x Kei 5% = 500<br/>
                                    Rp 10.000 x 2 = Rp 20.000<br/>
                                    Kemenangan Potong Kei 5% dari pasangan = Rp 500<br/>
                                    Total Kemenangn yang dibayar adalah = Rp 20.000 - Rp 500 = Rp 19.500</p>
                        </div>
                </div>
             </div>
    </div>
</section>
@endsection
