@extends('apps.layout')
@section('sectionheader')
<h1>
   SgpMorning Pools
   <small>Control panel</small>
 </h1>
 <ol class="breadcrumb">
   <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
   <li class="active">SgpMorning Pools</li>
 </ol>
@endsection
@section('content')
<section class="content">
  <div class="box box-primary">
       <div class="box-body">
           <a class="btn btn-primary" href="/hasil-sgpmorning-add">Tambah Data</a>
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
             @foreach($hasil_sgpmornings as $gm)
             <tr>
                     <td>{{$loop->iteration}}</td>
                     <td>{{$gm->hari}}</td>
                     <td>{{$gm->tanggal}}</td>
                     <td>{{$gm->nomor}}</td>
                     <td>
                       <a class="btn btn-danger" href="/deletedatahasilsgpmorning/{{ $gm->id }}">Delete</a>
                     </td>
             </tr>
             @endforeach
           </tbody>
           </table>
           </br>
           {{ $hasil_sgpmornings->links() }}
       </div>
  </div>
</section>
@stop
