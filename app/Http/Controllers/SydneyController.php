<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GambarSydney;
use App\HasilSydney;

class SydneyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gambar_sydneys = GambarSydney::paginate(5);
        return view('admin-prediksi.sydneydashboard', compact('gambar_sydneys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin-prediksi.sydney');
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

        GambarSydney::create([
            'judul' => $request->judul,
            'keterangan' => nl2br($request->keterangan),
            'file' => $nama_file
        ]);
        return redirect('/sydney-dashboard');
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
        $gambar_sydneys = GambarSydney::find($id);
        $gambar_sydneys->delete();

        return redirect('/sydney-dashboard');
    }
    public function index2()
    {
        $gambar_sydneys = GambarSydney::paginate(5);
        return view('prediksi.sydney', compact('gambar_sydneys'));
    }

    public function indexhasiladmin()
    {
        $hasil_sydneys = HasilSydney::paginate(10);
        return view('admin-hasil.sydneydashboard', compact('hasil_sydneys'));
    }

    public function create2()
    {
        return view('admin-hasil.sydney');
    }

    public function store2(Request $request)
    {
        $this->validate($request, [
            'hari' => 'required',
            'tanggal' => 'required',
            'nomor' => 'required',
        ]);
        HasilSydney::create([
            'hari' => $request->hari,
            'tanggal' => $request->tanggal,
            'nomor' => $request->nomor
        ]);
        return redirect('/hasil-sydney-dashboard');
    }

    public function destroy2($id)
    {
        $hasil_sydneys = HasilSydney::find($id);
        $hasil_sydneys->delete();

        return redirect('/hasil-sydney-dashboard');
    }

    public function indexhasil()
    {
        $hasil_sydeys = HasilSydney::paginate(10);
        return view('hasil.hasilsydney', compact('hasil_sydeys'));
    }
}
