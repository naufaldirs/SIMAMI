@extends('dashboard.layouts.main')

@section('container')
<div class="card cardhome">
    <div class="card-body">
      <h5 class="card-title projur text-center"><b>Jalur Prestasi</b></h5>
        <br>
      <h6 class="card-title mb-2"><b>Jadwal Penting:</b></h6>
      <p>Pendaftaran	: 25 januari - 10 Maret 2023<br>
        Pengumuman Kelulusan Portofolio	: 16 Maret 2023<br>
        Pelaksanaan Ujian Wawancara	: 22 - 23 Maret 2023<br>
        Pengumuman Kelulusan Peserta	: 29 Maret 2023 <br>
        </p>  
        <br>
    
      <h6 class="card-title mb-2"><b>Petunjuk :</b></h6>
      <p>Upload Ukuran berkas pada 2 Jenis:<br>
        1. Nilai Raport<br>
        <a href=""><button class="btn"><img src="img/uplot.png" width="150px"></button></a><br>
        2. Sertifikat Kejuaraan<br>
        <a href=""><button class="btn"><img src="img/uplot.png" width="150px"></button></a>
        <br></p>

      <a href="/jalur-mandiri"><button class="btn kanan">Gelombang I dan II -></button></a>
      
    </div>
  </div>
  @endsection