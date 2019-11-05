@extends('apps.layout2')
@section('content')
<section>
    <div class="container">
             <div class="row">
                    @include('partials2.sidemenu')

                <div class="col-md-12 col-lg-8">
                    <h3 class="mt-30"><b>Cara Bermain</b></h3><hr />
                    <a class="btn btn-info" href="/no-keluar">No. Keluar</a>
                    <a class="btn btn-info" href="/4d-3d-2d">4D/3D/2D</a>
                    <a class="btn btn-info" href="/colok-bebas">Colok Bebas</a>
                    <a class="btn btn-info" href="/colok-bebas-2d">Colok Bebas 2D</a>
                    <a class="btn btn-info" href="/colok-naga">Colok Naga</a><br/><br/>
                    <a class="btn btn-info" href="/colok-jitu">Colok Jitu</a>
                    <a class="btn btn-info" href="/tengah-tepi">Tengah Tepi</a>
                    <a class="btn btn-info" href="/kombinasi">Kombinasi</a>
                    <a class="btn btn-info" href="/dasar">Dasar</a>
                    <a class="btn btn-info" href="/50-50">50 - 50</a>
                    <a class="btn btn-info" href="/shio">Shio</a>
                    <a class="btn btn-info" href="/silang">Silang</a><br/><br/>
                    <a class="btn btn-info" href="/kembang-kempis">Kembang Kempis</a>
                    <a class="btn btn-info" href="/24d-games">24D Games</a>
                    <a class="btn btn-info" href="/roulette">Rouletee</a>
                    <a class="btn btn-info" href="/sicbo">Sicbo</a>
                    <a class="btn btn-info" href="/12d-games">12D Games</a><br/><br/>
                    <a class="btn btn-info" href="/dragon-tiger">Dragon Tiger</a>
                    <h3 class="mtb-30">SHIO</h3>
                    <p class="mt-15">Struktur: ABCD<br/>
                            Menebak SHIO dari posisi 2D<br/>
                            SHIO merupakan 12 lambang kelahiran dalam penanggalan China.<br/>
                            Dalam permainan ini, setiap lambang diwakili dengan satu nomor.</p><br/>
                            <table class="table table-bordered">
                                    <thead style="background-color:teal;">
                                      <tr>
                                        <th scope="col">Nama Shio</th>
                                        <th scope="col">Nomor Terkait</th>
                                      </tr>
                                    </thead>
                                    <tbody style="background-color:white;">
                                            <tr>
                                              <td>Tikus</td>
                                              <td>1, 13, 25, 37, 49, 61, 73, 85, 97</td>
                                            </tr>
                                            <tr>
                                                <td>Kerbau</td>
                                                <td>2, 14, 26, 38, 50, 62, 74, 86, 98</td>
                                            </tr>
                                            <tr>
                                                <td>Harimau</td>
                                                <td>3, 15, 27, 39, 51, 63, 75, 87, 99</td>
                                            </tr>
                                            <tr>
                                                <td>Kelinci</td>
                                                <td>4, 16, 28, 40, 52, 64, 76, 88, 00</td>
                                            </tr>
                                            <tr>
                                                <td>Naga</td>
                                                <td>5, 17, 29, 41, 53, 65, 77, 89</td>
                                            </tr>
                                            <tr>
                                                <td>Ular</td>
                                                <td>6, 18, 30, 42, 54, 66, 78, 90</td>
                                            </tr>
                                            <tr>
                                                 <td>Kuda</td>
                                                 <td>7, 19, 31, 43, 55, 67, 79, 91</td>
                                             </tr>
                                             <tr>
                                                <td>Kambing</td>
                                                <td>8, 20, 32, 44, 56, 68, 80, 92</td>
                                            </tr>
                                            <tr>
                                                <td>Monyet</td>
                                                <td>9, 21, 33, 45, 57, 69, 81, 93</td>
                                            </tr>
                                            <tr>
                                                <td>Ayam</td>
                                                <td>10, 22, 34, 46, 58, 70, 82, 94</td>
                                            </tr>
                                            <tr>
                                                <td>Anjing</td>
                                                <td>11, 23, 35, 47, 59, 71, 83, 95</td>
                                            </tr>
                                            <tr>
                                                <td>Babi</td>
                                                <td>12, 24, 36, 48, 60, 72, 84, 96</td>
                                            </tr>
                                    </tbody>
                            </table><br/>
                    <p class="mt-15">Analisis I:<br/>
                            Keluar : 4321<br/>
                            Permainan ini hanya memperhatikan posisi 2D, berarti yang dipedomanin = 21<br/>
                            Hasil = 21-12 = 9 (shio disesuaikan dengan tabel diatas)</p>

                    <p class="mt-15">Analisis II:<br/>
                            Keluar : 6543<br/>
                            Permainan ini hanya memperhatikan posisi 2D, berarti yang dipedomanin = 43<br/>
                            Hasil = 43-36 = 7 (shio disesuaikan dengan tabel diatas)</p>

                    <p class="mt-15">Analisis III:<br/>
                            Keluar : 1389<br/>
                            Permainan ini hanya memperhatikan posisi 2D, berarti yang dipedomanin = 89<br/>
                            Hasil = 89-84 = 5 (shio disesuaikan dengan tabel diatas)</p>

                    <p class="mt-15">Catatan: nilai yang dikurangi merupakan kelipatan 12</p>

                    <p class="mt-15">Jika dilakukan pembelian dengan 100rb dan menang maka:
                            Menang = 100rb + [Indeks kemenangan untuk SHIO]</p>
                    <p class="mt-15">NB: Indeks menang dan diskon dapat dilihat di bagian Peraturan/p>
                </div>
             </div>
    </div>
</section>
@endsection
