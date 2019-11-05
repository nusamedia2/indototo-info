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
                    <h3 class="mtb-30">4D, 3D DAN 2D</h3>
                    <p class="mt-15">Menebak 4 angka, 3 angka dan 2 angka.</p>

                    <p class="mt-15">Struktur: ABCD<br/>
                                    Misalnya keluar : 4321<br/>
                                    Berarti pemenang untuk<br/>
                                    4D = 4321<br/>
                                    3D = 321<br/>
                                    2D = 21<br/>

                                    Aturan Permainan<br/>

                            1. Jika anda membeli diluar dari nomor yang dikeluarkan, berarti anda kalah dan uang tidak dikembalikan sama sekali.<br/>
                            2. Jika anda membeli masing 100rb untuk angka:<br/>
                            4D = 4321<br/>
                            3D = 321<br/>
                            2D = 21<br/>
                            (Khusus untuk 4D,3D dan 2D diberikan diskon tambahan. Diskon akan makin besar jika nilai akumulasi betting dalam satu periode makin besar).<br/>

                            Berarti kemenangan anda adalah:<br/>
                            4D = 100rb x [Indeks kemenangan untuk 4D]<br/>
                            3D = 100rb x [Indeks kemenangan untuk 3D]<br/>
                            2D = 100rb x [Indeks kemenangan untuk 2D]<br/>
                            (Catatan: nilai bet 100rb tidak dikembalikan ke member)</p><hr/>
                    <h3 class="mtb-30">QUICK BET</h3>
                    <p class="mt-15">Untuk memudahkan pembelian dalam jumlah banyak dengan kombinasi nomor berturutan, misalnya:<br/>
                            4321<br/>
                            321<br/>
                            21<br/>
                            1<br/>
                            Maka dapat dilakukan dengan:<br/>
                            BET : 4321 4*500 x1000<br/>
                            BET : 4321 3*400 x1000<br/>
                            BET : 4321 2*300 x1000<br/>
                            BET : 4321 1*100 x1000<br/>
                            Ini berarti anda sudah berbelanja:<br/>
                            4321 untuk 500rb<br/>
                            321 untuk 400rb<br/>
                            21 untuk 300rb<br/>
                            1 untuk 100rb</p><hr/>

                    <h3 class="mtb-30">2D POSISI</h3>
                    <p class="mt-15">Struktur: ABCD<br/>
                            Misalnya keluar nomor = 1234<br/>
                            berati pemenang untuk 2D Depan adalah = 12<br/>
                            berati pemenang untuk 2D Tengah adalah = 23<br/>
                            berati pemenang untuk 2D Belakang adalah = 34<br/><br/>
                </div>
             </div>
    </div>
</section>
@endsection
