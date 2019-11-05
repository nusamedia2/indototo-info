@extends('apps.layout2')
@section('content')
<section>
    <div class="container">
        <div class="row">
                @include('partials2.sidemenu')
            <div class="col-md-12 col-lg-8">
                {{-- <img src="images/slider-1-1200x900.jpg" alt=""> --}}
                <h3 class="mt-30"><b>Cara Deposit & Withdraw</b></h3>
                {{-- <ul class="list-li-mr-20 mtb-15">
                    <li>by <a href="#"><b>Olivia Capzallo </b></a> Jan 25, 2018</li>
                    <li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>30,190</li>
                    <li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i>30</li>
                </ul> --}}

                <h4 class="mt-30"><b>Ketentuan Deposit</b></h4>

                <p class="mtb-15">1. Deposit dan withdraw dapat diproses hanya selama <b>BANK ONLINE .</b></br>
                    Proses deposit dan withdraw tidak dapat diproses jika <b>BANK SEDANG OFFLINE ATAU BANK SEDANG DALAM GANGGUAN</b> Semua proses deposit dan withdraw akan diproses kembali jika bank sudah kembali normal.</p>

                <p class="mtb-15">2. Proses deposit akan diproses cepat 1-3 menit proses deposit.</br>
                    Jika deposit anda sudah transfer tapi koin anda belum bertambah harap konfirmasi kebagian operator live chat kami agar segera dilakukan pengecekan.</p>

                <p class="mtb-15">3.<b> Pastikan anda mentransfer ke nomor rekening yang masih aktif.
                    Harap selalu menanyakan rekening aktif kepada cs kami sebelum melakukan deposit.</b></p>

                {{-- <div class="quote-primary mtb-20">
                    <h5>"This Is the first time that there's going to be a smart contract platform powered by the bitcoin network."</h5>
                    <h5 class="mt-15"><b>Oliver Dale</b></h5>
                </div><!-- quote-primary --> --}}

                <h4><b>Cara Deposit</b></h4>

                <p class="mtb-15">1. Lakukan login melalui website resmi kami, silakan masukan Username dan Password anda, lalu Klik “LOGIN” atau tekan “ENTER”</p>
                <a class="fancybox-effects-a" href="images/untitled12.jpg">
                    <img src="images/untitled12.jpg" alt=""></a>
                <p class="mtb-15">Lalu akan muncul halaman peraturan . Jika sudah dibaca klik setuju</p>
                <a class="fancybox-effects-a" href="images/untitled13.jpg">
                    <img src="images/untitled13.jpg" alt=""></a>

                <p class="mtb-15">2. Lalu Klik Menu <b>DEPOSIT</b> Pada Menu di Atas . </p>
                <a class="fancybox-effects-a" href="images/untitled14.jpg">
                    <img src="images/untitled14.jpg" alt=""></a>

                <p class="mtb-15">3. Lalu pilih bank tujuan yang tersedia .</p>
                <a class="fancybox-effects-a" href="images/untitled15.jpg">
                    <img src="images/untitled15.jpg" alt=""></a>

                <p class="mtb-15">4. Jika sudah pilih bank selanjutnya masukkan jumlah deposit dengan deposit minimal Rp 15.000 lalu klik kirim</p>
                <a class="fancybox-effects-a" href="images/untitled16.jpg">
                    <img src="images/untitled16.jpg" alt=""></a>

                <h4><b>Cara Withdraw</b></h4>

                <p class="mtb-15">Adalah proses menukarkan chips koin di UANG kan kembali ke rekening anda yang terdaftar atas nama id pertama kali pendaftaran.</p>

                <p class="mtb-15">1. Pilih menu <b>TRANSAKSI</b> lalu klik menu <b>WITHDRAW</b> dimenu atas.</p>
                <a class="fancybox-effects-a" href="images/untitled17.jpg">
                    <img src="images/untitled17.jpg" alt=""></a>

                <p class="mtb-15">2. Masukkan jumlah withdraw yang anda inginkan . Anda tidak dapat memasukkan jumlah withdraw lebih banyak dari balance yang anda punya. </br>
                Pastikan nama akun , bank tujuan , dan no rekening anda benar . Dan masukkan password anda, lalu klik kirim</p>
                <a class="fancybox-effects-a" href="images/untitled18.jpg">
                    <img src="images/untitled18.jpg" alt=""></a>

                <p class="mtb-15">3. Jika Bank dalam gangguan atau offline proses withdraw tidak dapat dilakukan sampai bank kembali online kembali.</p>

                <p class="mtb-15">4. Jika nomor rekening anda tidak terdaftar di bank atau tidak valid, maka withdraw anda akan kami reject dan dikembalikan ke koin anda kembali. Harap segera lapor kepada live support kami untuk perubahan nomor rekening yang salah.</p>
            </div>
        </div>
    </div>
</section>
@endsection
