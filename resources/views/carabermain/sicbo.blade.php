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
                    <h3 class="mtb-30">SICBO</h3>
                    <p class="mt-15">Misalnya Dadu yang keluar : 2 , 3, 5<br/>
                            Berarti pemenang untuk<br/>
                            Dadu angka 2, Dadu angka 3, Dadu angka 5<br/>
                            bet pada jumlah dadu 10</p>
                    <p class="mt-15">Apabila user menebak :<br/>
                            Dadu angka 1 = Kalah<br/>
                            Dadu angka 2 = Menang<br/>
                            Genap = Menang<br/>
                            Ganjil = Kalah<br/>
                            Besar = Kalah<br/>
                            Kecil = Menang</p>
                    <p class="mt-15">Aturan permainan:<br/>
                            1. Jika anda membeli diluar dari nomor yang dikeluarkan, berarti anda kalah dan uang tidak dikembalikan sama sekali.<br/>
                            2. Dadu yang dapat dibeli hanya pilihan yang terdapat pada meja tersebut( baik melalui hack maupun membobol proteksi angka kami ) maka anda akan dinyatakan fold dan uang tidak dibalikan<br/>
                            3. Bila dadu kembar 3, contoh 4, 4, 4. maka taruhan pada besar-kecil, ganjil-genap. akan dianggap kalah</p>
                    <h2 class="mtb-30">Cara Bermain</h2>
                    <p class="mt-15">Inti dari permainan ini adalah menebak hasil dari tiga dadu.</p>

                    <p class="mt-15">

                            1. Memilih 1 nomor kembar tiga untuk keluar pada ketiga dadu (bukan salah satu dadu) pembayaran 150X pasangan<br/>
                            2. Memilih angka apa saja akan keluar sama pada ketiga dadu pembayaran 24 X pasangan<br/>
                            3. Jumlah hasil dari 3 Dadu adalah 4 atau 17 pembayaran 50 X pasangan<br/>
                            4. Jumlah hasil dari 3 Dadu adalah 5 atau 16 pembayaran 30 X pasangan<br/>
                            5. Jumlah hasil dari 3 Dadu adalah 6 atau 15 pembayaran 18 X pasangan<br/>
                            6. Jumlah hasil dari 3 Dadu adalah 7 atau 14 pembayaran 12 X pasangan<br/>
                            7. Jumlah hasil dari 3 Dadu adalah 8 atau 13 pembayaran 8 X pasangan<br/>
                            8. Jumlah hasil dari 3 Dadu adalah 9,10,11 atau 14 pembayaran 8 X pasangan<br/>
                            9. Memilih 2 nomor dadu yg akan keluar dari ketiga dadu 5 X pasangan<br/>
                            10. Memilih 1 nomor dadu yg akan keluar dari ketiga dadu<br/>
                            Apabila cocok 1 dadu sesuai dengan nomor yg dipasang pembayaran 1 X pasangan<br/>
                            Apabila cocok 2 dadu sesuai dengan nomor yg dipasang pembayaran 2 x Pasangan<br/>
                            Apabila cocok 3 dadu sesuai dengan nomor yg dipasang pembayaran 3 x Pasangan<br/>
                            11. Big (besar) Jumlah dari ketiga buah dadu adalah 11 sampai 17. pembayaran 1 x Pasangan.<br/>
                            Triple dadu tidak termasuk besar.<br/>
                            12. Small (kecil) Jumlah dari ketiga buah dadu adalah 4 sampai 10. Pembayaran 1 X Pasangan.
                            Triple dadu tidak termasuk kecil.</p>
                </div>
             </div>
    </div>
</section>
@endsection
