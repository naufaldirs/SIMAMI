<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Clockwork\Support\Lumen\Controller;

class LaporanController extends Controller
{
    public function index(Biodata $biodata)
    {
        return view('dashboard.biodata.kartu' , [
            'biodatas' => Biodata::where('user_id', auth()->user()->id)->get()
        ]);
    }

    public function export(){
        //mengambil data dan tampilan dari halaman laporan_pdf
        $biodata = Biodata::all();
        //data di bawah ini bisa kalian ganti nantinya dengan data dari database
        $pdf = PDF::loadview('karyawan.cetak', ['mahasiswa' => $biodata]);
        //mendownload laporan.pdf
    	return $pdf->download('kartu_ujian.pdf');
    }
}
