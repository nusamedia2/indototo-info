@extends('apps.layout')
@section('sectionheader')
<h1>
   Buku Mimpi
   <small>Control panel</small>
 </h1>
 <ol class="breadcrumb">
   <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
   <li class="active">Buku Mimpi</li>
 </ol>
@endsection
@section('content')
<section class="content">
  <div class="box box-primary">
       <div class="box-body">
           <a class="btn btn-primary" href="/buku-mimpi-add">Tambah Data</a>
           <table class="table">
           <thead>
               <tr>
                   <th scope="col">No</th>
                   <th scope="col">Keterangan</th>
                   <th scope="col">Jenis Game</th>
                   <th scope="col">Nomor</th>
                   <th scope="col">Opsi</th>
               </tr>
           </thead>
           <tbody>
             @foreach($buku_mimpis as $bm)
             <tr>
                     <td>{{$loop->iteration}}</td>
                     <td>{{ $bm->keterangan }}</td>
                     <td>{{$bm->jenis_game}}</td>
                     <td>{{$bm->nomor}}</td>
                     <td>
                       <a class="btn btn-danger" href="/deletedatabukumimpi/{{ $bm->id }}">Delete</a>
                     </td>
             </tr>
             @endforeach
           </tbody>
           </table>
           </br>
           {{ $buku_mimpis->links() }}
       </div>
  </div>
</section>
@stop
