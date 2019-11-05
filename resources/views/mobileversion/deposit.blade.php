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

                    <h4 class="mt-30">Deposit</h4>
                    <p class="mtb-30">Klik tombol deposit yang berada di pojok kanan atas</p>
                    <a class="fancybox-effects-a" href="images/mobile-version/deposit/untitled1.jpg">
                        <img src="images/mobile-version/deposit/untitled1.jpg" alt=""></a>

                    <p class="mtb-30">Lihat dan gunakan selalu nomor rekening deposit yang aktif jika ingin melakukan transfer deposit atau pastikan rekening tersebut masih di gunakan</p>
                    <a class="fancybox-effects-a" href="images/mobile-version/deposit/untitled2.jpg">
                        <img src="images/mobile-version/deposit/untitled2.jpg" alt=""></a>

                    <p class="mtb-30">Jika anda sudah melakukan transfer, maka silakan konfirmasi deposit anda.<br/>
                        1. Pilih bank tujuan yang tadi telah anda transfer<br/>
                        2. Masukan nominal uang yang telah anda transfer<br/>
                        3. Lalu klik tombol KONFIRMASI.</p>

                    <p class="mtb-30">Setelah sukses mengirimkan konfirmasi deposit kepada kami harap anda bisa tunggu sampai 1-3 menit untuk memprosesan koin anda.</p>

                </div>
             </div>
        </div>
</section>
@endsection
