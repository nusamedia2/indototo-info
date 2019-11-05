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
                    <h3 class="mtb-30">Dragon Tiger</h3>
                    <p class="mt-15">Aturan permainan:<br/>
                            1. Jika anda membeli diluar dari nomor yang dikeluarkan, berarti anda kalah dan uang tidak dikembalikan sama sekali.<br/>
                            2. Angka yang dapat dibeli angka diluar yang sudah ada ( baik melalui hack maupun membobol proteksi angka kami ) maka anda akan dinyatakan fold dan uang tidak dibalikan<br/>
                            3. Untuk pengeluaran nomor 7 adalah kartu bandar. Pemasangan apapun kalah untuk semua (7 Loses All).</p>

                    <p class="mt-15">Cara Bermain :<br/>
                            Permainan Dragon & Tiger adalah permainan yang bertaruh pada pemilik kartu dengan nilai tertinggi.<br/>
                            </p>

                    <p class="mt-15">Ketentuan Kartu<br/>
                            Anda dapat memilih "Dragon" atau "Tiger" ataupun "Tie (seri)". Banker akan membagikan satu kartu, masing-masing pada "Dragon" & "Tiger".
                             Untuk menentukan setiap pemenang, Salah satu ("Dragon" atau "Tiger") yang mempunyai nilai tertinggi akan menjadi pemenang.
                             Jika "Dragon" & "Tiger" mempunyai nilai yang sama, maka permainan tersebut "TIE" (tidak tergantung pada kembang/motif).
                             K adalah nilai tertinggi & A adalah nilai terendah.</p>

                    <p class="mt-15">K, Q, J, 10, 9, 8, 7, 6, 5, 4, 3, 2, A</p>

                    <p class="mt-15">Baik "Dragon" atau "Tiger" yang menang, tidak akan ada komisi yang yang dibebankan kepada kedua pihak.
                        sNamun, jika terdapat "Tie" jumlah taruhan pada "Dragon" atau "Tiger" akan dikurangi 50% sebagai biaya komisi.</p>

                    <p class="mt-15">Pembayaran Kemenangan
                            Dragon 1 X pasangan ( dipotong 50% apabila hasil seri)
                            Tiger 1 X pasangan ( dipotong 50% apabila hasil seri)
                            Tie (seri) 8 X pasangan
                            </p>
                </div>
             </div>
    </div>
</section>
@endsection
