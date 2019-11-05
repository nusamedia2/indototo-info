@extends('apps.layout2')
@section('content')
<section>
    <div class="container">
        <div class="row">
                @include('partials2.sidemenu')
            <div class="col-md-12 col-lg-8">
                {{-- <img src="images/slider-1-1200x900.jpg" alt=""> --}}
                <h3 class="mt-30"><b>Ketentuan Daftar</b></h3>
                {{-- <ul class="list-li-mr-20 mtb-15">
                    <li>by <a href="#"><b>Olivia Capzallo </b></a> Jan 25, 2018</li>
                    <li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>30,190</li>
                    <li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i>30</li>
                </ul> --}}

                <p class="mtb-15">1. Satu rekening hanya untuk satu <b>ACCOUNT USER ID</b></p>

                <p class="mtb-15">2. Nomor rekening, email dan nomor HP anda harus <b>AKTIF</b> dan <b>BENAR</b> karena jika anda lupa password data ini sangat penting untuk konfirmasi user id anda.</p>

                <p class="mtb-15">3. <b>Nama rekening</b> dan <b>nomor rekening</b> sangat penting dan pastikan <b>BENAR</b> saat mengisi data ini.</p>

                <h4><b>CARA DAFTAR</b></h4>

                {{-- <div class="quote-primary mtb-20">
                    <h5>"This Is the first time that there's going to be a smart contract platform powered by the bitcoin network."</h5>
                    <h5 class="mt-15"><b>Oliver Dale</b></h5>
                </div><!-- quote-primary --> --}}

            <p class="mtb-15">1. Buka salah satu website resmi kami . Disini sebagai contoh menggunakan <b><a href="http://indodota.club" target="_blank">indodota.club</a></b></p>
                <a class="fancybox-effects-a" href="images/untitled11.jpg" title="Tampilan depan indodota.club">
                <img src="images/untitled11.jpg" alt=""></a>

                <p class="mtb-15">2. Lalu Klik Daftar, dan akan muncul tampilan seperti dibawah ini dan isikan form tersebut dengan benar</p>
                <a class="fancybox-effects-a" href="images/untitled10.jpg" title="Tampilan daftar indodota.club">
                <img src="images/untitled10.jpg" alt=""></a>

                <p class="mtb-15">- <b>USERNAME</b>, Isi kolom ini dengan user id sesuai dengan kesukaan anda</br>
                    NB: (harus unik dan huruf kecil semua, bisa juga digabung dengan angka tapi tidak boleh ada spasi ataupun tanda baca seperti titik koma dan sebagainya).</p>

                <p class="mtb-15">- <b>PASSWORD</b>, Isi password anda (bersifat rahasia dan tidak dishare kesiapapun).</p>

                <p class="mtb-15">- <b>KONFIRMASI PASSWORD</b>, Isi ulang password anda untuk konfirmasi ulang.</p>

                <p class="mtb-15">- <b>EMAIL</b>, Isi Kolom email ini dengan email aktif anda, harap isi dengan benar.</p>

                <p class="mtb-15">- <b>NOMOR TELEPON</b>, Isi nomor telepon aktif anda.</p>

                <p class="mtb-15">- <b>SILAHKAN PILIH BANK</b>, Isikan nama bank yang akan anda daftarkan dari account bank yang anda miliki (misal: BCA, BNI, MANDIRI).</p>

                <p class="mtb-15">- <b>NAMA REKENING</b>, Isikan dengan nama yang tertera pada buku rekening anda yang akan anda daftarkan.</p>

                <p class="mtb-15">- <b>NOMOR REKENING</b>, Masukan nomor rekening anda dengan benar sesuai dengan buku tabungan anda. Pastikan nomor yang anda masukan adalah benar.</br>
                    Penting dikarenakan untuk pengiriman withdraw akan dikirim ke rekening tersebut.</p>

                <p class="mtb-15">- <b>VALIDASI</b>, Masukan nomor validasi yang tertera diwebsite.</p>

                <p class="mtb-15">Jika semua data telah diisi dengan benar pastikan cek kembali sebelum benar-benar mendaftar dan Ingatlah selalu User Id, Password , Serta Data – data anda. Setelah benar silakan tekan tombol “SUBMIT”. Pendaftaran anda akan sukses dan selamat menikmati game kami</p>
            </div>
        </div>
    </div>
</section>
@endsection
