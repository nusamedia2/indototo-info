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
                    <a class="btn btn-info" href="/roulette">Roulette</a>
                    <a class="btn btn-info" href="/sicbo">Sicbo</a>
                    <a class="btn btn-info" href="/12d-games">12D Games</a><br/><br/>
                    <a class="btn btn-info" href="/dragon-tiger">Dragon Tiger</a>
                    <h3 class="mtb-30">Roulette</h3>
                    <p class="mt-15">Struktur: AB</p>
                    <p class="mt-15">Misalnya keluar : 12<br/>
                            Berarti pemenang untuk<br/>
                            Roulette = 12</p>
                    <p class="mt-15">Menebak 50-50 Roulette.<br/><br/>

                            Struktur: AB<br/><br/>

                            Misalnya keluar : 12<br/>
                            Index Kecil antara 01 - 18<br/>
                            Index Besar antara 19 - 36<br/><br/>

                            Apabila user menebak :<br/>
                            Genap = Menang<br/>
                            Ganjil = Kalah<br/>
                            Besar = Kalah<br/>
                            Kecil = Menang<br/>
                            Hitam = Kalah<br/>
                            Merah = Menang</p>
                    <p class="mt-15">Aturan permainan:<br/>
                            1. Angka yang dapat dibeli hanya dari 01 sampai dengan 36 apabila anda membeli angka diluar 36 ( baik melalui hack maupun membobol proteksi angka kami ) maka anda akan dinyatakan fold dan uang tidak dibalikan
                            2. Jika Nomor yang Keluar adalah angka 0, maka taruhan pada besar-kecil , ganjil-genap, merah-hitam,1st-2nd-3rb,1st Line- 2nd Line-3rd Line akan dianggap kalah</p>
                    <h2 class="mtb-30">Cara Bermain :</h2>
                    <p class="mt-15">Jika anda memilih angka genap atau ganjil, angka 0 tidak termasuk genap atau ganjil.</p>

                    <p class="mt-15">Straight Up :Memasang pada salah satu nomor tunggal (termasuk nol). Mencakup 1 nomor.<br/>
                            Split Bet :Memasang pada garis antara dua nomor (termasuk nol). Mencakup 2 nomor.<br/>
                            Street Bet :Memasang di akhir setiap baris nomor. Street Bet mencakup 3 nomor.<br/>
                            Corner Bet :Memasang di sudut di mana empat nomor bertemu. Mencakup 4 nomor.<br/>
                            Line Bet :Memasang pada akhir dua baris di persimpangan. Mencakup semua angka di kedua baris total 6 nomor.tersebut, mencakup 12 nomor. (Nol ini tidak termasuk).<br/>
                            Column Bet :Memasang dalam salah satu kotak yang ditandai '2 ke 1 'di akhir kolom mencakup semua angka dalam kolom<br/>

                            Dozen Bet :Memasang di salah satu dari ketiga box bertandakan '1 st 12', '2 nd 12', atau '3 rd 12' mencakup 12 nomor.<br/>
                            Red/Black :Memilih salah satu warna hitam atau merah dari hasil permainan mencakup 18 nomor.<br/>
                            Even/Odd :Memilih angka ganjil atau genap mencakup 18 nomor<br/><br/>

                            Pembayarannya :<br/>
                            1 nomor :36 X pasangan<br/>
                            2 Nomor :18 X pasangan<br/>
                            3 Nomor :12 X pasangan<br/>
                            4 Nomor :9 X pasangan<br/>
                            6 Nomor :6 X pasangan<br/>
                            12 Nomor :3 X pasangan<br/>
                            18 Nomor :2 X pasangan<br/>

                            </p>
                </div>
             </div>
    </div>
</section>
@endsection
