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

                    <h4 class="mt-30"><b>Live Chat</b></h4>

                    <p class="mtb-30">Livechat berfungsi sebagai media anda untuk berkomunikasi langsung dengan Costumer Service Dewatogel. Anda bisa menanyakan seputar Deposit, withdraw, Promo, Game, dan Account anda.</p>

                    <p class="mtb-30">Pertama klik tombol <b>LIVECHAT.</b></p>
                    <a class="fancybox-effects-a" href="images/mobile-version/live-chat/untitled.jpg">
                        <img src="images/mobile-version/live-chat/untitled.jpg" alt=""></a>

                    <p class="mtb-30">Setelah itu wajib masukkan ID anda Game anda email hanya opsional saja, lalu pilih untuk keperluan apa yang ingin anda tanyakan kepada Costumer Service kami dengan memberi tanda (√ ). Setelah selesai klik tombol “Mulai Obrolan”</p>
                    <a class="fancybox-effects-a" href="images/mobile-version/live-chat/untitled1.jpg">
                        <img src="images/mobile-version/live-chat/untitled1.jpg" alt=""></a>

                    <p class="mtb-30">Tuliskan keperluan anda atau hal yang ingin anda tanyakan di kolom komentar.</p>
                    <a class="fancybox-effects-a" href="images/mobile-version/live-chat/untitled2.jpg">
                        <img src="images/mobile-version/live-chat/untitled2.jpg" alt=""></a>
                </div>
             </div>
        </div>
</section>
@endsection
