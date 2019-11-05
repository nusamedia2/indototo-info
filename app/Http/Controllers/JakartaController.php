<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GambarJakarta;
use App\HasilJakarta;
class JakartaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gambar_jakartas = GambarJakarta::paginate(5);
        return view('admin-prediksi.jakartadashboard', compact('gambar_jakartas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin-prediksi.jakarta');
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

        GambarJakarta::create([
            'judul' => $request->judul,
            'keterangan' => nl2br($request->keterangan),
            'file' => $nama_file
        ]);
        return redirect('/jakarta-dashboard');
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
        $gambar_jakartas = GambarJakarta::find($id);
        $gambar_jakartas->delete();

        return redirect('/jakarta-dashboard');
    }
    public function index2()
    {
        $gambar_jakartas = GambarJakarta::paginate(5);
        return view('prediksi.jakarta', compact('gambar_jakartas'));
    }

    public function indexhasiladmin()
    {
        $hasil_jakartas = HasilJakarta::paginate(10);
        return view('admin-hasil.jakartadashboard', compact('hasil_jakartas'));
    }

    public function create2()
    {
        return view('admin-hasil.jakarta');
    }

    public function store2(Request $request)
    {
        $this->validate($request, [
            'hari' => 'required',
            'tanggal' => 'required',
            'nomor' => 'required',
        ]);
        HasilJakarta::create([
            'hari' => $request->hari,
            'tanggal' => $request->tanggal,
            'nomor' => $request->nomor
        ]);
        return redirect('/hasil-jakarta-dashboard');
    }

    public function destroy2($id)
    {
        $hasil_jakartas = HasilJakarta::find($id);
        $hasil_jakartas->delete();

        return redirect('/hasil-jakarta-dashboard');
    }

    public function indexhasil()
    {
        $hasil_jakartas = HasilJakarta::paginate(10);
        return view('hasil.hasiljakarta', compact('hasil_jakartas'));
    }
}
