@extends('apps.layout2')
@section('content')
<section>
    <div class="container">
         <div class="row">
            <div class="col-md-12 col-lg-8">
                @foreach ($promos as $p)
                <h2 class="mtb-30 text-center">{{$p->judul}}</h2>
                <img src="{{ url('/data_file/'.$p->file) }}"><br/><br/>
                <a class="btn btn-warning" href="/more-info/{{$p->id}}">More Info</a><br/><br/>
                <a class="btn btn-warning" href="http://indodota.club/register.php">Join Now</a>
                @endforeach

            </div>
        </div>
    </div>
</section>
@endsection
