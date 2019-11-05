@extends('apps.layout2')
@section('content')
<section>
    <div class="container">
         <div class="row">
                @include('partials2.sidemenu')
            <div class="col-md-12 col-lg-8">
                <h3 class="mt-30"><b>HASIL</b></h3>
                <select name="Select Pools" onchange="location = this.value;" class="form-control">
                    <option value="">-- Select Pools --</option>
                    <option value="/hasil-hongkong">Hongkong Pools</option>
                    <option value="/hasil-jakarta">Jakarta Pools</option>
                    <option value="/hasil-jowo">Jowo Pools</option>
                    <option value="/hasil-sihanouk">Sihanouk Pools</option>
                    <option value="/hasil-singapore">Singapore Pools</option>
                    <option value="/hasil-sydney">Sydney Pools</option>
                    <option value="/hasil-totomacau">Toto Macau Pools</option>
                    <option value="/hasil-sgpmorning">Toto Macau Pools</option>
                </select>
            </div>
         </div>
    </div>
</section>
@endsection

