<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Illuminate\Http\Request;
class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Biodata $biodata)
    {
        return view('dashboard.biodata.index', [
            'biodatas' => Biodata::where('user_id', auth()->user()->id)->get(),
            'biodata'=> $biodata
        ]);
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
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nik' => 'required',
            'nisn' => 'required',
            'nama' => 'required',
            'npwp' => 'min:1',
            'gender' => 'required',
            'tempatlahir' => 'required',
            'tanggallahir' => 'required|date',
            'goldar' => 'required',
            'ibu' => 'required',
            'ayah' => 'required',
            'image' => 'image|file|max:1024',
            'alamat' => 'required',
            'kelurahan' => 'required',
            'kecamatan' => 'required',
            'kota' => 'required',
            'provinsi' => 'required',
            'kodepos' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'pendidikan' => 'required',
            'nama_sekolah' => 'required',
            'alamat_sekolah' => 'required',
            'kota_sekolah' => 'required',
            'jurusan_sekolah' => 'required',
            'nilai_raport' => 'required',
            'tahunlulus'=> 'required',
            'jurusan1' => 'required',
            'jurusan2' => 'required'
           ]);
           if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('Files');
           }    
           $validatedData['user_id'] = auth()->user()->id;
        Biodata::create($validatedData);
        return redirect('/resume');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('dashboard.biodata.show' , [
            'biodatas' => Biodata::where('user_id', auth()->user()->id)->get()
        ]);
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
    public function kartuujian()
    {
        return view('dashboard.biodata.kartu' , [
            'biodatas' => Biodata::where('user_id', auth()->user()->id)->get()
        ]);
    }
    public function cetak()
    {
        $biodata = Biodata::where('user_id', auth()->user()->id)->get();
        $pdf = FacadePdf::loadview('dashboard.biodata.cetak', ['biodatas' => $biodata])->setPaper('A3');
        return $pdf->download('Kartu_Ujian.pdf');


    }
}
