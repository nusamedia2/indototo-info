<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GambarSgpmorning;
use App\HasilSgpmorning;

class SgpmorningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gambar_sgpmornings = GambarSgpmorning::paginate(5);
        return view('admin-prediksi.sgpmorningdashboard', compact('gambar_sgpmornings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin-prediksi.sgpmorning');
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

        GambarSgpmorning::create([
            'judul' => $request->judul,
            'keterangan' => nl2br($request->keterangan),
            'file' => $nama_file
        ]);
        return redirect('/sgpmorning-dashboard');
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
        $gambar_sgpmornings = GambarSgpmorning::find($id);
        $gambar_sgpmornings->delete();

        return redirect('/sgpmorning-dashboard');
    }
    public function index2()
    {
        $gambar_sgpmornings = GambarSgpmorning::paginate(5);
        return view('prediksi.sgpmorning', compact('gambar_sgpmornings'));
    }

    public function indexhasiladmin()
    {
        $hasil_sgpmornings = HasilSgpmorning::paginate(10);
        return view('admin-hasil.sgpmorningdashboard', compact('hasil_sgpmornings'));
    }

    public function create2()
    {
        return view('admin-hasil.sgpmorning');
    }

    public function store2(Request $request)
    {
        $this->validate($request, [
            'hari' => 'required',
            'tanggal' => 'required',
            'nomor' => 'required',
        ]);
        HasilSgpmorning::create([
            'hari' => $request->hari,
            'tanggal' => $request->tanggal,
            'nomor' => $request->nomor
        ]);
        return redirect('/hasil-sgpmorning-dashboard');
    }

    public function destroy2($id)
    {
        $hasil_sgpmornings = HasilSgpmorning::find($id);
        $hasil_sgpmornings->delete();

        return redirect('/hasil-sgpmorning-dashboard');
    }

    public function indexhasil()
    {
        $hasil_sgpmornings = HasilSgpmorning::paginate(10);
        return view('hasil.hasilsgpmorning', compact('hasil_sgpmornings'));
    }
}
