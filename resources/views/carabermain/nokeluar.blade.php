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
                    <h3 class="mtb-30">NOMOR KELUAR</h3>
                    <p class="mt-15">nomor pengeluaran adalah berdasar kan 1st prize nomor yang dihasilkan oleh 4D Jakarta untuk melihat hasil
                        nomor tersebut bisa dilihat di <a href="http://www.indototo.com"><b>www.Indototo.com</b></a> setiap pukul 00.00 setiap hari.<br/><br/>

                        Contoh nomor bola angka yang dihasilkan Jakarta toto:</p>
                    <p class="mt-15">Bola 1 = 7<br/>
                            Bola 2 = 21<br/>
                            Bola 3 = 29<br/>
                            Bola 4 = 32<br/>
                            Bola 5 = 36<br/>
                            Bola 6 = 38<br/>
                            Additional Number = 04<br/>
                            Nomor buka 0885</p>
                    <p class="mt-15">Cara perhitungan rumus:<br/>

                            1. Bola di urutkan dari yang terkecil sampai yang terbesar.<br/>
                            2. Bola ke 1 sampai bola ke 6 dijumlahkan 7+21+29+32+36+38 = 163 di kali 2 = 326<br/>
                            3. Hasil dari 326 dikurangkan bola ke 1 ( 7 ) dan bola ke 6 ( 38 ) = 281<br/>
                            4. Sisa 281 ditambah additional number (04) = 285<br/>
                            5. Dari hasil 285, didapatkan 2 angka puluhan 85 tersebut. Setelah itu dicari angka ratusan dan ribuan nya.<br/>
                            6. Untuk mendapat angka ratusan kita mengambil dari bola ke 4 ( 32 ) ditambah bola ke 5 ( 36 ) jumlah = 68 kita ambil ekor 8 ini sebagai angka untuk ratusan<br/>
                            7. Untuk mendapat angka ribuan kita mengambil dari bola ke 2 ( 21 ) ditambah bola ke 3 ( 29 ) jumlah = 50 kita ambil ekor 0 ini sebagai angka untuk ribuan</p>
                    <p class="mt-15">Maka hasil perhitungan diatas:<br/>
                            Ribuan = 0<br/>
                            Ratusan = 8<br/>
                            Puluhan = 85<br/>
                            Hasilnya = buka 0885</p>
                    <p class="mt-15">Untuk melihat hasil dari perputaran nomor untuk toto Jakarta ini bisa dilihat di website resminya <a href="http://www.indototo.com"><b>www.Indototo.com.</b></a>

                            Untuk togel jenis 4D Jakarta pengeluaran setiap hari kami mengambil pedoman sebagai nomor pengeluaran adalah berdasar kan 1st prize nomor yang dihasilkan oleh 4D Jakarta untuk melihat hasil nomor tersebut bisa dilihat <a href="http://www.indototo.com"><b>di www.Indototo.com.</b></a></p><hr/>
                    <h3 class="mtb-30">Jenis Permainan</h3>
                    <p class="mt-15">Jenis permainan togel sudah sangat banyak, sudah membaur dan menyesuaikan diri dengan permainan lokal. Alhasil dikenal beberapa karakteristik togel daerah.<br/>

                            Jenis permainan yang disajikan disini adalah:</p>
                    <p class="mt-15">1. 4D, 3D dan 2D<br/>
                            2. Colok Bebas<br/>
                            3. Colok Bebas 2D<br/>
                            4. Colok Jitu<br/>
                            5. Colok Naga<br/>
                            6. 50-50 (Besar-Kecil-Ganjil-Genap)<br/>
                            7. Shio<br/>
                            8. Kembang Kempis<br/>
                            9. Silang Homo<br/>
                            10. Tengah Tepi<br/>
                            11. Dasar (Besar-Kecil-Ganjil-Genap)<br/>
                            12. 2 Kombinasi</p>
                    <p class="mt-15">Struktur nomor keluar (misalnya : A B C D), berarti:<br/>
                            A = AS<br/>
                            B = KOP<br/>
                            C = KEPALA<br/>
                            D = EKOR</p>
                </div>
             </div>
    </div>
</section>
@endsection
