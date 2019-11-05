@extends('apps.layout2')
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                <h2 class="mtb-30">{{$promos->judul}}</h2>
                <p class="mt-15">{!!$promos->keterangan!!}</p>
                </div>
            </div>
        </div>
    </section>
    @endsection
