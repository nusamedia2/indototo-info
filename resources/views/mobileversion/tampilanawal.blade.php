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

                    <h4 class="mt-30">Tampilan awal</h4>
                    <p class="mtb-30">Inilah tampilan indototo di mobile version</p>
                    <a class="fancybox-effects-a" href="images/mobile-version/tampilan-awal/untitled.jpg">
                        <img src="images/mobile-version/tampilan-awal/untitled.jpg" alt=""></a>

                    <p class="mtb-30">1. Klik logo indototo yang berada di pojok kiri atas untuk login</p>
                    <a class="fancybox-effects-a" href="images/mobile-version/tampilan-awal/untitled1.jpg">
                        <img src="images/mobile-version/tampilan-awal/untitled1.jpg" alt=""></a>

                    <p class="mtb-30">2. Isi form username dan password dengan benar</p>
                    <a class="fancybox-effects-a" href="images/mobile-version/tampilan-awal/untitled2.jpg">
                        <img src="images/mobile-version/tampilan-awal/untitled2.jpg" alt=""></a>

                    <p class="mtb-30">3. Jika sudah akan masuk ketampilan ini . Selamat bermain</p>
                    <a class="fancybox-effects-a" href="images/mobile-version/tampilan-awal/untitled3.jpg">
                        <img src="images/mobile-version/tampilan-awal/untitled3.jpg" alt=""></a>
                </div>
             </div>
        </div>
</section>
@endsection
