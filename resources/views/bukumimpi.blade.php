@extends('apps.layout2')
@section('content')
<section>
    <div class="container">
        <div class="row">
            @include('partials2.sidemenu')
            <div class="col-md-12 col-lg-8">
                <h3 class="mt-30"><b>Buku Mimpi</b></h3><hr />
                <input class="form-control" id="myInput" type="text" placeholder="Search..">
                <div class="box box-primary">
                    <div class="box-body">
                        <table class="table my-tbody">
                            <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Jenis Game</th>
                                <th scope="col">Nomor</th>
                            </tr>
                            </thead>
                            <tbody id="myTable">
                                @foreach($buku_mimpis as $bm)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{!!$bm->keterangan!!}</td>
                                    <td>{{$bm->jenis_game}}</td>
                                    <td>{{$bm->nomor}}</td>
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
