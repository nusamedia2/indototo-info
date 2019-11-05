@extends('apps.layout')
@section('sectionheader')
<h1>
   Sgp Morning Pools
   <small>Control panel</small>
 </h1>
 <ol class="breadcrumb">
   <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
   <li class="active">Sgp Morning Pools</li>
 </ol>
@endsection
@section('content')
<section class="content">
  <div class="box box-primary">
       <div class="box-body">
           <a class="btn btn-primary" href="/sgpmorning-add">Tambah Data</a>
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
             @foreach($gambar_sgpmornings as $gj)
             <tr>
                     <td>{{$loop->iteration}}</td>
                     <td>{{$gj->judul}}</td>
                     <td>{!!$gj->keterangan!!}</td>
                     <td><img width="150px" src="{{ url('/data_file/'.$gj->file) }}"></td>
                     <td>
                       <a class="btn btn-danger" href="/deletedatasgpmorning/{{ $gj->id }}">Delete</a>
                     </td>
             </tr>
             @endforeach
           </tbody>
           </table>
           </br>
           {{ $gambar_sgpmornings->links() }}
       </div>
  </div>
</section>
@stop
