@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex" id="wrapper">
      <!-- Sidebar -->
      <div class="bg-light border-right" id="sidebar-wrapper">
        <div class="list-group list-group-flush">
          <a href="/dashboard" class="list-group-item list-group-item-action bg-light">Dashboard</a>
          <a href="/biodata" class="list-group-item list-group-item-action bg-light">Biodata Peserta</a>
          <a href="/pendaftaran" class="list-group-item list-group-item-action bg-light">Buat Pendaftaran</a>
          <a href="/daftar-pendaftar" class="list-group-item list-group-item-action bg-light">Daftar Pendaftaran</a>
          <a href="/jalur-prestasi" class="list-group-item list-group-item-action bg-light">Jadwal Ujian</a>
        </div>
      </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
      <div class="container-fluid">


            <style>
            div.gallery {
              margin: 50px;
              border: 1px solid #ccc;
              float: left;
              width: 300px;
            }

            div.gallery:hover {
              border: 1px solid #777;
            }

            div.gallery img {
              width: 100%;
              height: auto;
            }

            div.desc {
              padding: 15px;
              text-align: center;
            }
            </style>

        <center><h3><b>SELAMAT DATANG CALON MAHASISWA BARU !!!</b></h3></center>

            <div class="gallery">
              <a target="_blank" href="upload.png">
                <img src="/img/upload.png" alt="Uplod" width="600" height="400">
              </a>
              <div class="desc">Upload Dokumen Pendaftaran</div>
            </div>

            <div class="gallery">
              <a target="_blank" href="../kelulusan/lulus.html" download="download" class="lulus">
                <img src="/img/download.png" alt="Download" width="600" height="400">
              
              <div class="desc">Download Dokumen Hasil Kelulusan</div></a>
            </div>
      </div>
    </div>
  </div>

 
@endsection