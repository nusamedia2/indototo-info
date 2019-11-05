@extends('apps.layout2')
@section('content')
<section>
    <div class="container">
        <div class="row">
                <div class="col-4">
                        <div class="mtb-50">
                            <div class="row">
                            <div class="col-4 black">
                                   <h5 class="white">Jadwal Bank </h5><br/><br/>
                               <img src="images/bca.png" alt="" class="bca"></a>
                            </div>
                            <div class="col-8 black"><br/><br/><br/>
                               <p class="white">Senin - Jumat : 21.00 wib - 00.30 wib</p>
                               <p class="white">Sabtu : 23.55 wib - 04.00 wib (tidak dapat dipastikan)</p>
                               <p class="white">Minggu/libur : online 24 Jam</p>
                            </div>
                            <br><br><br><br><br><br><br><br><br><br>
                            <div class="col-4 black">
                               <img src="images/mandiri.png" alt="" class="bca"></a>
                                </div>
                                <div class="col-8 black">
                                   <p class="white">Senin - Jumat : 23.00 wib - 04.00 wib</p>
                                   <p class="white">Sabtu : 23.00 wib - 03.30 wib</p>
                                   <p class="white">Minggu : 23.00 wib - 03.00 wib</p>
                                </div>
                                <br><br><br><br><br><br><br>
                               <div class="col-4 black">
                                   <img src="images/bni.png" alt="" class="bca"></a>
                                </div>
                                <div class="col-8 black">
                                   <p class="white">Senin - Minggu : 00.00 - 00.15 wib</p>
                                </div>
                                <br><br><br><br>
                               <div class="col-4 black">
                                   <img src="images/bri.png" alt="" class="bca"></a>
                                </div>
                                <div class="col-8 black">
                                   <p class="white">Senin - Minggu : 22.30 - 03.00 wib</p>
                                </div>
                            </div><br/><br/>
                            <div class="row">

                                   <div class="col black"><br/>
                                       <h4 class="white">Jadwal Tutup Pasaran : </h4><br/>
                                       <p class="white">SYDNEY<br/>
                                               Closed 12:50 WIB & Result 14.00 WIB<br/>
                                               Langsung dari situs resmi www.sydneypoolstoday.com</p><br/>
                                       <p class="white">SINGAPORE<br/>
                                               Closed 17:25 WIB & Result 17.50 WIB</p><br/>
                                       <p class="white">HONGKONG<br/>
                                               Closed 22:00 WIB & Result 23.00 WIB<br/>
                                               Langsung darri situs resmi www.hongkongpools.com</p><br/>
                                       <p class="white">TOTO MACAU<br/>
                                               Closed 14:00/22:00 WIB & Result 14:15/22:15 WIB</p><br/>
                                       <p class="white">JAKARTA<br/>
                                               Closed 23:00 WIB & Result 23.30 WIB</p><br/>
                                       <p class="white">JOWO<br/>
                                               Closed 07:30/19:30 WIB & Result 09:00/21:30 WIB Live</p><br/>
                                    </div>
                            </div>

                       </div><!-- mtb-50 -->

               </div>
            <div class="col-md-12 col-lg-8">
                <h3 class="mt-30"><b>HASIL</b></h3>
                <select name="Select Pools" onchange="location = this.value;" class="form-control">
                    <option value="">-- Select Pools --</option>
                    <option value="/hasil-hongkong" selected>Hongkong Pools</option>
                    <option value="/hasil-jakarta">Jakarta Pools</option>
                    <option value="/hasil-jowo">Jowo Pools</option>
                    <option value="/hasil-sgpmorning">Sgp Morning Pools</option>
                    <option value="/hasil-sihanouk">Sihanouk Pools</option>
                    <option value="/hasil-singapore">Singapore Pools</option>
                    <option value="/hasil-sydney">Sydney Pools</option>
                    <option value="/hasil-totomacau">Toto Macau Pools</option>
                </select>
                <h3 class="mt-30">History Nomor</h3>
                <h4 class="mt-30"><b>Hongkong Pools</b></h4>
                <div class="box box-primary">
                    <div class="box-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Periode</th>
                                <th scope="col">Hari</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Nomor</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($hasil_hongkongs as $p)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$p->hari}}</td>
                                <td>{{$p->tanggal}}</td>
                                <td>{{$p->nomor}}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
