<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GambarSihanouk;
use App\HasilSihanouk;

class SihanoukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gambar_sihanouks = GambarSihanouk::paginate(5);
        return view('admin-prediksi.sihanoukdashboard', compact('gambar_sihanouks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin-prediksi.sihanouk');
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

        GambarSihanouk::create([
            'judul' => $request->judul,
            'keterangan' => nl2br($request->keterangan),
            'file' => $nama_file
        ]);
        return redirect('/sihanouk-dashboard');
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
        $gambar_sihanouks = GambarSihanouk::find($id);
        $gambar_sihanouks->delete();

        return redirect('/sihanouk-dashboard');
    }
    public function index2()
    {
        $gambar_sihanouks = GambarSihanouk::paginate(5);
        return view('prediksi.sihanouk', compact('gambar_sihanouks'));
    }

    public function indexhasiladmin()
    {
        $hasil_sihanouks = HasilSihanouk::paginate(10);
        return view('admin-hasil.sihanoukdashboard', compact('hasil_sihanouks'));
    }

    public function create2()
    {
        return view('admin-hasil.sihanouk');
    }

    public function store2(Request $request)
    {
        $this->validate($request, [
            'hari' => 'required',
            'tanggal' => 'required',
            'nomor' => 'required',
        ]);
        HasilSihanouk::create([
            'hari' => $request->hari,
            'tanggal' => $request->tanggal,
            'nomor' => $request->nomor
        ]);
        return redirect('/hasil-sihanouk-dashboard');
    }

    public function destroy2($id)
    {
        $hasil_sihanouks = HasilSihanouk::find($id);
        $hasil_sihanouks->delete();

        return redirect('/hasil-sihanouk-dashboard');
    }

    public function indexhasil()
    {
        $hasil_sihanouks = HasilSihanouk::paginate(10);
        return view('hasil.hasilsihanouk', compact('hasil_sihanouks'));
    }
}
