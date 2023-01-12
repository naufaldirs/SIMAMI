<?php

namespace App\Http\Controllers;
use App\Models\Biodata;
use Illuminate\Http\Request;

class JalurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.jalur.index', [
            'title' => "Jalur Prestasi"
        ]);
    }

 public function daftar()
 {
    return view('dashboard.jalur.daftar', [
        'title' => "Daftar Pendaftaran",
        'biodatas' => Biodata::where('user_id', auth()->user()->id)->get()
    ]);
 }
}
