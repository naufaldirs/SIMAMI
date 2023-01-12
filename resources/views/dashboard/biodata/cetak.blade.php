<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.css">
    <style>
    @page { margin:0px; }
    </style>
  </head>
  <body>
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <div class="container">  
                <img src="{{ public_path('/img/stmi.png') }}" width="50px">
                <img src="{{ public_path('/img/logo.png') }}" width="290px" class="pl-2">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
      
              <div class="collapse navbar-collapse fk" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                    <p class="kartu pt-5">Jl. Letjen Suprapto No. 26 Cempaka Putih Jakarta Pusat, DKI Jakarta 10510,Indonesia<br>Telp: (021) 42886064, Fax: (021) 42888206, Whatsapp:,087876067799,E- Mail: humas@stmi.ac.id<br>
                        Copyright SA02 2021 Politeknik STMI Jakarta</p>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </div><br><br>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    @foreach ($biodatas as $biodata)
                    <img src="{{ storage_path('app/public/'.$biodata->image) }}" height="400px" class="tepi">
                    @endforeach
                </div>
            <div class="col-lg-7">
                <p class="tepi"><b>Kartu Tanda Peseta Ujian </b></p>
                <div class="form-group">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td width="30%">No. Test</td>
                                @foreach ($biodatas as $biodata)
                                <td width="3%">:</td>
                                <td class="col-md-6">
                                    100{{ $biodata->id }}
                                </td>
                                @endforeach
                            </tr>
                            <tr>
                                <td width="30%">Nama Lengkap</td>
                                <td width="3%">:</td>
                                @foreach ($biodatas as $biodata)
                                <td class="col-md-6">{{ $biodata->nama }}</td>   
                                @endforeach
                            </tr>
                            <tr>
                                <td width="30%">NIK</td>
                                <td width="3%">:</td>
                                @foreach ($biodatas as $biodata)
                                <td class="col-md-6">{{ $biodata->nik }}</td>   
                                @endforeach
                            </tr>
                            
                            <tr>
                                <td width="30%">Asal Sekolah</td>
                                <td width="3%">:</td>
                                @foreach ($biodatas as $biodata)
                                <td class="col-md-6">{{ $biodata->nama_sekolah }}</td>   
                                @endforeach
                            </tr>
                            <tr>
                                <td width="30%">Jurusan 1</td>
                                <td width="3%">:</td>
                                @foreach ($biodatas as $biodata)
                                <td class="col-md-6">{{ $biodata->jurusan1 }}</td>   
                                @endforeach
                            </tr>
                            <tr>
                                <td width="30%">Jurusan 2</td>
                                <td width="3%">:</td>
                                @foreach ($biodatas as $biodata)
                                <td class="col-md-6">{{ $biodata->jurusan2 }}</td>   
                                @endforeach
                            </tr>
                            <tr>
                                <td width="30%">Waktu Ujian</td>
                                <td width="3%">:</td>
                                <td class="col-md-6">120 Menit</td>
                            </tr>
                            <tr>
                                <td width="30%">Tanggal Ujian</td>
                                <td width="3%">:</td>
                                <td class="col-md-6">17 - 08 - 2023</td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td width="50%">Materi</td>
                                <td width="50%">Ttd Pengawas Ujian</td>
                            </tr>
                            <tr>
                                <td width="50%">Tes Potensi Akademik (TPA) dan Bahasa Inggris</td>
                                <td width="50%"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <p><b>SEBELUM MELAKUKAN UJIAN PESERTA DIHARUSKAN :   </b></p><br>
            <p>- Membaca Petunjuk Teknis Ujian <br>
                - Waktu Ujian 120 Menit <br>
                - Dilarang izin ke luar ruangan ketika ujian berlangsung<br>
                - Peserta hanya membawa alat tulis dan kartu ujian saja<br>
                - Peserta disarankan untuk stand by 15 menit sebelum ujian dimulai<br>
                - Kartu Ujian disimpan untuk tahap selanjutnya ketika lulus seleksi<br>
                - Kelulusan peserta merupakan murni hasil kerja keras masing-masing peserta. Jangan pernah <br>
                - percaya pada pihak manapun yang menwarkan kelulusan dengan membayar sejumlah uang </p>
        </div>
    </section>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>