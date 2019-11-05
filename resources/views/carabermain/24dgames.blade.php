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
                    <h3 class="mtb-30">24D Games</h3>
                    <p class="mt-15">Struktur: AB<br/><br/>

                            Misalnya keluar : 12<br/>
                            Berarti pemenang untuk<br/>
                            Ball 24 = 12<br/><br/>


                            Menebak 50-50 Ball 24 (24D).<br/>
                            Struktur: AB<br/><br/>

                            Misalnya keluar : 12<br/>
                            Index Kecil antara 01 - 12<br/>
                            Index Besar antara 13 - 24<br/><br/>

                            Apabila user menebak :<br/>
                            Genap = Menang<br/>
                            Ganjil = Kalah<br/>
                            Besar = Kalah<br/>
                            Kecil = Menang<br/>
                            Aturan permainan:<br/>
                            1. Jika anda membeli diluar dari nomor yang dikeluarkan, berarti anda kalah dan uang tidak dikembalikan sama sekali.<br/>
                            2. Angka yang dapat dibeli hanya dari 01 sampai dengan 24 apabila anda membeli angka diluar 24 ( baik melalui hack maupun membobol proteksi angka kami ) maka anda akan dinyatakan fold dan uang tidak dibalikan<br/></p>
                    <h2 class="mtb-30">Pembayaran :</h2><br/>
                    <p class="mt-15">24D Nomor
                            Tebak 1 Nomor :23x Pasangan<br/>
                            Tebak 2 Nomor :11.5x Pasangan<br/>
                            Tebak 4 Nomor :6x Pasangan<br/>
                            Tebak Per Baris :4x Pasangan<br/>
                            Tebak Per Kolom :6x Pasangan<br/>
                            Tebak Double Baris :1.75x Pasangan<br/>
                            Tebak Double Kolom :2.75x Pasangan<br/><br/>

                            50-50
                            Tebak Ganjil - Genap :x2 pasangan - Kei 5%<br/>
                            Tebak Besar - Kecil :x2 pasangan - Kei 5%<br/>
                            Tebak Merah - Hitam :x2 pasangan - Kei 5%</p>
                    <div class="kotak">
                        <h3 class="mtb-30">Contoh :</h3>
                        <p class="mt-15">- Pemasangan Ganjil - Genap atau Besar - Kecil atau Merah - Hitam Sebesar pasangan : Rp 10.000<br/>
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
