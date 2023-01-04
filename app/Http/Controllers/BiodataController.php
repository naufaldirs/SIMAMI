<?php

namespace App\Http\Controllers;

use App\Http\Requests\PendaftaranRequest;
use App\Models\Biodata;
use Illuminate\Http\Request;

class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswas = Biodata::all();
        return view('dashboard.biodata.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.biodata.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PendaftaranRequest $request)
    {
        $pendaftaran = new Biodata();
        $pendaftaran->nik = $request->nik;
        $pendaftaran->nisn = $request->nisn;
        // $pendaftaran->name = $request->name;
        // $pendaftaran->npwp = $request->npwp;
        // $pendaftaran->gender = $request->gender;
        // $pendaftaran->tempatlahir = $request->tempatlahir;
        // $pendaftaran->tanggallahir = $request->tanggallahir;
        // $pendaftaran->ibu = $request->ibu; 
        // $pendaftaran->ayah = $request->ayah; 
        // $pendaftaran->goldar = $request->goldar; 
        // $pendaftaran->alamat = $request->alamat; 
        // $pendaftaran->kelurahan = $request->kelurahan; 
        // $pendaftaran->kecamatan = $request->kecamatan; 
        // $pendaftaran->kota = $request->kota; 
        // $pendaftaran->phone = $request->phone; 
        // $pendaftaran->email = $request->email; 
        // $pendaftaran->nama_sekolah = $request->nama_sekolah; 
        // $pendaftaran->nilai_raport = $request->nilai_raport;
        // $pendaftaran->alamat_sekolah = $request->alamat_sekolah; 
        // $pendaftaran->kota_sekolah = $request->kota_sekolah; 
        // $pendaftaran->alamat_sekolah = $request->alamat_sekolah; 
        // $pendaftaran->tahunlulus = $request->tahunlulus; 
        // $pendaftaran->jurusan1 = $request->jurusan1; 
        // $pendaftaran->jurusan2 = $request->jurusan2; 
        $pendaftaran->save();
        return redirect('/biodata');
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
        //
    }
}
