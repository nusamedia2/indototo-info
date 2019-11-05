@extends('apps.layout2')
@section('content')
<section>
        <div class="container">
            <div class="row">
                    @include('partials2.sidemenu')
                <div class="col-md-12 col-lg-8">
                    @foreach ($gambar_toto_macaus as $gh)
                    <h3 class="mt-30"><b>{{$gh->judul}}</b></h3>

                    <img width="600px" src="{{ url('/data_file/'.$gh->file) }}" >

                    <p class="mtb-15">{!!$gh->keterangan!!}</p>
                    @endforeach
                </div>
            </div>
        </div>
</section>
@endsection
