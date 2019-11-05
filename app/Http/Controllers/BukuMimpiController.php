<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BukuMimpi;

class BukuMimpiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku_mimpis = BukuMimpi::paginate(10);
        return view ('admin-buku.buku_mimpi_admin', compact('buku_mimpis'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin-buku.buku_mimpi_add');
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
            'keterangan' => 'required',
            'jenis_game' => 'required',
            'nomor' => 'required'
        ]);

        BukuMimpi::create([
            'keterangan' => $request->keterangan,
            'jenis_game' => $request->jenis_game,
            'nomor' => $request->nomor
        ]);
        return redirect('/buku-mimpi-dashboard');
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
        $buku_mimpis = BukuMimpi::find($id);
        $buku_mimpis->delete();

        return redirect('/buku-mimpi-dashboard');
    }

    public function index2()
    {
        $buku_mimpis = BukuMimpi::all();
        return view ('bukumimpi', compact('buku_mimpis'));

    }
}
