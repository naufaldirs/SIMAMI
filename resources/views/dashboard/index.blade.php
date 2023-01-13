@extends('dashboard.layouts.main')
@section('container')


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

 
@endsection