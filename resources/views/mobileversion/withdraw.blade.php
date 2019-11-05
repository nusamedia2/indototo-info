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

                    <h4 class="mt-30"><b>Withdraw</b></h4>
                    <h3 class="mt-30">Ketentuan Withdraw</h3>
                    <p class="mtb-30">1. Withdraw dapat diproses hanya selama BANK ONLINE. Proses withdraw tidak dapat diproses jika BANK SEDANG OFFLINE. Semua proses withdraw akan diproses kembali jika bank sudah kembali nomor online kembali.<br/>
                            2. Proses withdraw akan diproses cepat 1-3 menit proses deposit. Jika withdraw anda sudah transfer tapi koin anda belum bertambah harap konfirmasi kebagian operator live chat kami agar segera dilakukan pengecekan.<br/>
                            3. <b>Pastikan anda mentransfer ke nomor rekening yang masih aktif.</b></p>

                    <p class="mtb-30">Minimal Withdraw Rp 25.000</p>

                    <p class="mtb-30">Silahkan Menuju Menu pilihan di pojok kiri atas, Kemudian Klik Menu <b>WITHDRAW.</b></p>
                    <a class="fancybox-effects-a" href="images/mobile-version/withdraw/untitled.jpg">
                        <img src="images/mobile-version/withdraw/untitled.jpg" alt=""></a>

                    <p class="mtb-30">Isi formulir withdraw dibawah ini. Masukan nilai yang akan anda withdraw kan dan konfirmasi password anda. lalu klik KIRIM.</p>
                    <a class="fancybox-effects-a" href="images/mobile-version/withdraw/untitled1.jpg">
                        <img src="images/mobile-version/withdraw/untitled1.jpg" alt=""></a>

                    <p class="mtb-30">Jika Bank dalam gangguan atau offline proses withdraw tidak dapat dilakukan sampai bank online kembali.</p>

                    <p class="mtb-30">Jika nomor rekening anda tidak terdaftar di bank atau tidak valid, maka withdraw anda akan kami REJECT dan koin anda akan kami kembalikan ke saldo kredit anda. Harap segera lapor kepada live support kami untuk perubahan nomor rekening yang salah.</p>
                </div>
             </div>
        </div>
</section>
@endsection
