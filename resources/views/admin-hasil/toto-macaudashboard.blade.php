@extends('apps.layout')
@section('sectionheader')
<h1>
   Toto Macau Pools
   <small>Control panel</small>
 </h1>
 <ol class="breadcrumb">
   <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
   <li class="active">Toto Macau Pools</li>
 </ol>
@endsection
@section('content')
<section class="content">
  <div class="box box-primary">
       <div class="box-body">
           <a class="btn btn-primary" href="/hasil-toto-macau-add">Tambah Data</a>
           <table class="table">
           <thead>
               <tr>
                   <th scope="col">Periode</th>
                   <th scope="col">Hari</th>
                   <th scope="col">Tanggal</th>
                   <th scope="col">Nomor</th>
                   <th scope="col">Opsi</th>
               </tr>
           </thead>
           <tbody>
             @foreach($hasil_toto_macaus as $gm)
             <tr>
                     <td>{{$loop->iteration}}</td>
                     <td>{{$gm->hari}}</td>
                     <td>{{$gm->tanggal}}</td>
                     <td>{{$gm->nomor}}</td>
                     <td>
                       <a class="btn btn-danger" href="/deletedatahasiltotomacau/{{ $gm->id }}">Delete</a>
                     </td>
             </tr>
             @endforeach
           </tbody>
           </table>
           </br>
           {{ $hasil_toto_macaus->links() }}
       </div>
  </div>
</section>
@stop
