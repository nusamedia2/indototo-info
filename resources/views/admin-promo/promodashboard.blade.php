@extends('apps.layout')
@section('sectionheader')
<h1>
   Promo
   <small>Control panel</small>
 </h1>
 <ol class="breadcrumb">
   <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
   <li class="active">Promo</li>
 </ol>
@endsection
@section('content')
<section class="content">
  <div class="box box-primary">
       <div class="box-body">
           <a class="btn btn-primary" href="/promo-add">Tambah Data</a>
           <div class="table-responsive">
           <table class="table">
           <thead>
               <tr>
                   <th scope="col">Id</th>
                   <th scope="col">Judul</th>
                   <th scope="col">Keterangan</th>
                   <th scope="col">Gambar</th>
                   <th scope="col">Opsi</th>
               </tr>
           </thead>
           <tbody>
             @foreach($promos as $p)
             <tr>
                     <td>{{$loop->iteration}}</td>
                     <td>{{$p->judul}}</td>
                     <td>{!!$p->keterangan!!}</td>
                     <td><img width="150px" src="{{ url('/data_file/'.$p->file) }}"></td>
                     <td>
                       <a class="btn btn-danger" href="/deletedatapromo/{{ $p->id }}">Delete</a>
                     </td>
             </tr>
             @endforeach
           </tbody>
           </table>
           </div>
           </br>
           {{ $promos->links() }}
       </div>
  </div>
</section>
@stop
