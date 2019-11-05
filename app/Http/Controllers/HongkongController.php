<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GambarHongkong;
use App\HasilHongkong;

class HongkongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gambar_hongkongs = GambarHongkong::paginate(5);
        return view('admin-prediksi.hongkongdashboard', compact('gambar_hongkongs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin-prediksi.hongkong');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'keterangan' => 'required',
            'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048'
        ]);
        $file = $request->file('file');

        $nama_file = time()."_".$file->getClientOriginalName();

        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload,$nama_file);

        GambarHongkong::create([
            'judul' => $request->judul,
            'keterangan' => nl2br($request->keterangan),
            'file' => $nama_file
        ]);
        return redirect('/hongkong-dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gambar_hongkongs = GambarHongkong::find($id);
        $gambar_hongkongs->delete();

        return redirect('/hongkong-dashboard');
    }
    public function index2()
    {
        $gambar_hongkongs = GambarHongkong::paginate(5);
        return view('prediksi.hongkong', compact('gambar_hongkongs'));
    }

    public function indexhasiladmin()
    {
        $hasil_hongkongs = HasilHongkong::paginate(10);
        return view('admin-hasil.hongkongdashboard', compact('hasil_hongkongs'));
    }

    public function create2()
    {
        return view('admin-hasil.hongkong');
    }

    public function store2(Request $request)
    {
        $this->validate($request, [
            'hari' => 'required',
            'tanggal' => 'required',
            'nomor' => 'required',
        ]);
        HasilHongkong::create([
            'hari' => $request->hari,
            'tanggal' => $request->tanggal,
            'nomor' => $request->nomor
        ]);
        return redirect('/hasil-hongkong-dashboard');
    }

    public function destroy2($id)
    {
        $hasil_hongkongs = HasilHongkong::find($id);
        $hasil_hongkongs->delete();

        return redirect('/hasil-hongkong-dashboard');
    }

    public function indexhasil()
    {
        $hasil_hongkongs = HasilHongkong::paginate(10);
        return view('hasil.hasilhongkong', compact('hasil_hongkongs'));
    }
}
