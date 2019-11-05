@extends('apps.layout2')
@section('content')
<section>
        <div class="container">
             <div class="row">
                    @include('partials2.sidemenu')
                <div class="col-md-12 col-lg-8">
                    <h3 class="mt-30"><b>Mobile Version</b></h3><hr />
                    <a class="btn btn-info" href="/tampilan-awal">Tampilan Awal</a>
                    <a class="btn btn-info" href="/cara-betting">Cara Betting</a>
                    <a class="btn btn-info" href="/deposit">Deposit</a>
                    <a class="btn btn-info" href="/withdraw">Withdraw</a>
                    <a class="btn btn-info" href="/lupa-password2">Lupa Password</a><br/><br/>
                    <a class="btn btn-info" href="/memo">Memo</a>
                    <a class="btn btn-info" href="/transaksi">Transaksi</a>
                    <a class="btn btn-info" href="live-chat">Live Chat</a><hr />

                    <h4 class="mt-30"><b>Transaksi</b></h4>

                    <p class="mtb-30">Anda dapat melihat transaksi deposit, withdraw, hingga history permainan di menu Transaksi. Pertama silahkan anda menuju menu pilihan di pojok kiri atas, Kemudian Klik Menu Transaksi.</p>
                    <a class="fancybox-effects-a" href="images/mobile-version/transaksi/untitled.jpg">
                        <img src="images/mobile-version/transaksi/untitled.jpg" alt=""></a>

                    <p class="mtb-30">Setelah klik menu Transaksi akan keluar tampilan berikut. Disini anda bisa melihat dengan detail history transaksi deposit, withdraw, dan permainan apa saja yang anda mainkan di Dewatogel.</p>
                    <a class="fancybox-effects-a" href="images/mobile-version/transaksi/untitled1.jpg">
                        <img src="images/mobile-version/transaksi/untitled1.jpg" alt=""></a>

                    <p class="mtb-30">Tapi maaf di contoh tidak ada data transaksinya</p>
                </div>
             </div>
        </div>
</section>
@endsection
