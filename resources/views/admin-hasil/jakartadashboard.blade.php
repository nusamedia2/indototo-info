@extends('apps.layout')
@section('sectionheader')
<h1>
   Jakarta Pools
   <small>Control panel</small>
 </h1>
 <ol class="breadcrumb">
   <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
   <li class="active">Jakarta Pools</li>
 </ol>
@endsection
@section('content')
<section class="content">
  <div class="box box-primary">
       <div class="box-body">
           <a class="btn btn-primary" href="/hasil-jakarta-add">Tambah Data</a>
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
             @foreach($hasil_jakartas as $gm)
             <tr>
                     <td>{{$loop->iteration}}</td>
                     <td>{{$gm->hari}}</td>
                     <td>{{$gm->tanggal}}</td>
                     <td>{{$gm->nomor}}</td>
                     <td>
                       <a class="btn btn-danger" href="/deletedatahasiljakarta/{{ $gm->id }}">Delete</a>
                     </td>
             </tr>
             @endforeach
           </tbody>
           </table>
           </br>
           {{ $hasil_jakartas->links() }}
       </div>
  </div>
</section>
@stop
