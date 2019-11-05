<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GambarSingapore;
use App\HasilSingapore;

class SingaporeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gambar_singapores = GambarSingapore::paginate(5);
        return view('admin-prediksi.singaporedashboard', compact('gambar_singapores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin-prediksi.singapore');
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

        GambarSingapore::create([
            'judul' => $request->judul,
            'keterangan' => nl2br($request->keterangan),
            'file' => $nama_file
        ]);
        return redirect('/singapore-dashboard');
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
        $gambar_singapores = GambarSingapore::find($id);
        $gambar_singapores->delete();

        return redirect('/singapore-dashboard');
    }
    public function index2()
    {
        $gambar_singapores = GambarSingapore::paginate(5);
        return view('prediksi.singapore', compact('gambar_singapores'));
    }

    public function indexhasiladmin()
    {
        $hasil_singapores = HasilSingapore::paginate(10);
        return view('admin-hasil.singaporedashboard', compact('hasil_singapores'));
    }

    public function create2()
    {
        return view('admin-hasil.singapore');
    }

    public function store2(Request $request)
    {
        $this->validate($request, [
            'hari' => 'required',
            'tanggal' => 'required',
            'nomor' => 'required',
        ]);
        HasilSingapore::create([
            'hari' => $request->hari,
            'tanggal' => $request->tanggal,
            'nomor' => $request->nomor
        ]);
        return redirect('/hasil-singapore-dashboard');
    }

    public function destroy2($id)
    {
        $hasil_singapores = HasilSingapore::find($id);
        $hasil_singapores->delete();

        return redirect('/hasil-singapore-dashboard');
    }

    public function indexhasil()
    {
        $hasil_singapores = HasilSingapore::paginate(10);
        return view('hasil.hasilsingapore', compact('hasil_singapores'));
    }
}
