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

                    <h4 class="mt-30"><b>Memo</b></h4>
                    <p class="mtb-30">Memo berfungsi untuk memberikan seputar informasi kepada Member Dewatogel. Member juga bisa mengirimkan Memo kepada admin perihal pengajuan deposit dan withdraw.

                            Silahkan Menuju Menu pilihan di pojok kiri atas, Kemudian Klik Menu <b>Memo.</b></p>
                    <a class="fancybox-effects-a" href="images/mobile-version/memo/untitled.jpg">
                        <img src="images/mobile-version/memo/untitled.jpg" alt=""></a>

                    <p class="mtb-30">Setelah klik menu Memo akan keluar tampilan berikut.</p>
                    <a class="fancybox-effects-a" href="images/mobile-version/memo/untitled1.jpg">
                        <img src="images/mobile-version/memo/untitled1.jpg" alt=""></a>

                    <h3 class="mt-15">Keterangan :</h3>

                    <p class="mtb-30">1. <b>Inbox :</b> anda bisa cek memo masuk melalui daftar inbox<br />
                            2. <b>Sent Mail :</b> Memo yang anda kirim akan masuk secara dalam daftar Sent Mail.<br />
                            3. <b>Compose Memo :</b>  Tempat anda mengirimkan Memo melalui compose Memo</p>
                </div>
             </div>
        </div>
</section>
@endsection
