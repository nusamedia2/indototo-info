<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GambarJowo;
use App\HasilJowo;

class JowoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gambar_jowos = GambarJowo::paginate(5);
        return view('admin-prediksi.jowodashboard', compact('gambar_jowos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin-prediksi.jowo');
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

        GambarJowo::create([
            'judul' => $request->judul,
            'keterangan' => nl2br($request->keterangan),
            'file' => $nama_file
        ]);
        return redirect('/jowo-dashboard');
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
        $gambar_jowos = GambarJowo::find($id);
        $gambar_jowos->delete();

        return redirect('/jowo-dashboard');
    }
    public function index2()
    {
        $gambar_jowos = GambarJowo::paginate(5);
        return view('prediksi.jowo', compact('gambar_jowos'));
    }

    public function indexhasiladmin()
    {
        $hasil_jowos = HasilJowo::paginate(10);
        return view('admin-hasil.jowodashboard', compact('hasil_jowos'));
    }

    public function create2()
    {
        return view('admin-hasil.jowo');
    }

    public function store2(Request $request)
    {
        $this->validate($request, [
            'hari' => 'required',
            'tanggal' => 'required',
            'nomor' => 'required',
        ]);
        HasilJowo::create([
            'hari' => $request->hari,
            'tanggal' => $request->tanggal,
            'nomor' => $request->nomor
        ]);
        return redirect('/hasil-jowo-dashboard');
    }

    public function destroy2($id)
    {
        $hasil_jowos = HasilJowo::find($id);
        $hasil_jowos->delete();

        return redirect('/hasil-jowo-dashboard');
    }

    public function indexhasil()
    {
        $hasil_jowos = HasilJowo::paginate(10);
        return view('hasil.hasiljowo', compact('hasil_jowos'));
    }
}
