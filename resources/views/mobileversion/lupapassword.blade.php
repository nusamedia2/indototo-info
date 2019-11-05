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

                    <h4 class="mt-30">Lupa Password</h4>

                    <h3 class="mt-30">Ketentuan Lupa Password</h3>

                    <p class="mtb-30">1. Pastikan data anda benar dan tepat saat melakukan konfirmasi dan sesuai dengan pada saat pertama kali anda lakukan registrasi.<br/>
                    2. Konfirmasi lupa password tidak dikenakan biaya apapun atau FREE. Jika ada pungutan biaya harap diabaikan karena itu adalah penipuan.<br/>
                    3. Jika anda sama sekali lupa akan semua data-data anda, silakan hubungi operator LiveChat kami.<br/>
                    4. Bila anda tidak dapat melakukan pendaftaran dikarenakan sudah pernah melakukan pendaftaran dengan rekening yang sama, silakan hubungi operator melalui LiveChat Support kami.<br/>
                    5. Konfirmasi lupa password hanya melalui website resmi kami dan melalui formulir di bawah ini atau LiveChat Support kami.</p>

                    <p class="mtb-30">Pertama klik tombol Lupa Password</p>
                    <a class="fancybox-effects-a" href="images/mobile-version/lupa-password/untitled.jpg">
                        <img src="images/mobile-version/lupa-password/untitled.jpg" alt=""></a>

                    <p class="mtb-30">Konfirmasi lupa password anda pada form di bawah ini. Silakan isikan data lengkap anda sesuai dengan data yang pertama kali anda daftarkan.</p>

                    <p class="mtb-30">Username<br/>
                            No.Telp/HP<br/>
                            Nama Bank<br/>
                            Nomor rekening<br/>
                            Validasi</p>
                    <a class="fancybox-effects-a" href="images/mobile-version/lupa-password/untitled1.jpg">
                        <img src="images/mobile-version/lupa-password/untitled1.jpg" alt=""></a>

                    <p class="mtb-30">Jika anda telah isi semua data pada formulir lupa password di atas kemudian tekan SUBMIT. Jika data anda benar otomatis anda akan mendapatkan password baru.</p>
                </div>
             </div>
        </div>
</section>
@endsection
