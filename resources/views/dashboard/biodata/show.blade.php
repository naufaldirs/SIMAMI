@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="title"><h5>
            <strong>Selamat! Pendaftaran anda telah berhasil dilakukan.<br>
            Berikut informasi tes anda :</strong></h5>
    </div><br>

<form method="GET"><h6>
        

<div class="form-group row">
    <label  class="control-label col-sm-2">Nama Lengkap :</label>
    <div class="col-sm-10">
      <a type="text" class="form-control" id="nama_lengkap" placeholder="">
        @foreach ($biodatas as $biodata)
        <td class="col-md-6">{{ $biodata->nama }}</td>
        @endforeach
      </a>
    </div>
</div>
<div class="form-group row">
    <label class="control-label col-sm-2">No. Test  :</label>
    <div class="col-sm-10">
      <a type="number" class="form-control" id="notest" placeholder="">
        @foreach ($biodatas as $biodata)
            100{{ $biodata->id }}
        @endforeach
      </a>
    </div>
</div>
<div class="form-group row">
    <label class="control-label col-sm-2">NIK   :</label>
    <div class="col-sm-10">
     <a type="number" class="form-control" id="nik" placeholder="">
        @foreach ($biodatas as $biodata)
        <td class="col-md-6">{{ $biodata->nik }}</td>
        @endforeach
     </a>
    </div>
</div>
<div class="form-group row">
    <label class="control-label col-sm-2">Asal Sekolah :</label>
    <div class="col-sm-10">
     <a type="text" class="form-control" id="asal_sekolah" placeholder="">
        @foreach ($biodatas as $biodata)
        <td class="col-md-6">{{ $biodata->nama_sekolah }}</td>
        @endforeach
     </a>
    </div>
</div>
<div class="form-group row">
    <label class="control-label col-sm-2">Jurusan 1 :</label>
    <div class="col-sm-10">
     <a type="text" class="form-control" id="jurusan1" placeholder="">
        @foreach ($biodatas as $biodata)
        <td class="col-md-6">{{ $biodata->jurusan1 }}</td>
        @endforeach
     </a>
    </div>
</div>
<div class="form-group row">
    <label class="control-label col-sm-2">Jurusan 2 :</label>
    <div class="col-sm-10">
     <a type="text" class="form-control" id="jurusan2" placeholder="">
        @foreach ($biodatas as $biodata)
        <td class="col-md-6">{{ $biodata->jurusan2 }}</td>
        @endforeach
     </a>
    </div>
</div>
<div class="form-group row">
    <label class="control-label col-sm-2">Waktu Ujian   :</label>
    <div class="col-sm-10">
     <a type="text" class="form-control" id="waktuujian" placeholder="">120 Menit</a>
    </div>
</div>
<div class="form-group row">
    <label class="control-label col-sm-2">Tanggal Ujian :</label>
    <div class="col-sm-10">
     <a type="number" class="form-control" id="tgl_ujian" placeholder="">17 - 08 - 2023</a>
    </div>
</div></h6>
</form>
<a class="btn btn-primary" href="/kartu_ujian/cetak_pdf" role="button">Cetak Kartu</a>           

</div></div>
<br><br><br>
@endsection