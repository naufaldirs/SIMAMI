@extends('dashboard.layouts.main')

@section('container')
<div class="container p-3 my-3 border">
    <h1 class="text-center"></h1>
        <form id="form" method="post" action="/pendaftaran/store" enctype="multipart/form-data">
            @csrf
            <div class="alert ">
                <center><strong>Data Diri</strong></center>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Nama Lengkap :<label class="bintang">*</label></label>
                        <input type="text" name="nama" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Tempat Lahir :<label class="bintang">*</label></label>
                        <input type="text" name="tempatlahir" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Tanggal Lahir :<label class="bintang">*</label></label>
                        <input type="date" name="tanggallahir" class="form-control">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Jenis Kelamin:<label class="bintang">*</label></label><br>
                            <input type="radio" name="gender" value="Pria" checked> Pria<br>
                            <input type="radio" name="gender" value="Wanita"> Wanita<br>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>NIK :<label class="bintang">*</label></label>
                        <input type="text" name="nik" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>NISN :<label class="bintang">*</label></label>
                        <input type="text" name="nisn" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>NPWP :</label>
                        <input type="text" name="npwp" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Nama Ibu :<label class="bintang">*</label></label>
                        <input type="text" name="ibu" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Nama Ayah :<label class="bintang">*</label></label>
                        <input type="text" name="ayah" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Golongan Darah :</label>
                        <input type="text" name="goldar" class="form-control" placeholder="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Nomor Telepon :<label class="bintang">*</label></label>
                        <input type="text" name="phone" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Email :<label class="bintang">*</label></label>
                        <input type="email" name="email" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Agama:<label class="bintang">*</label></label>
                        <select class="form-control" name="agama">
                            <option>Pilih</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="form-group">
                    <label>Pas Foto :<label class="bintang">*</label></label>
                    <input type="file" id="image" name="image" class="form-control form-control-lg">
                </div>
            </div>
            <div class="alert">
                <center><strong>Data Tempat Tinggal</strong></center>
            </div>
            <div class="row">
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Alamat :<label class="bintang">*</label></label>
                        <textarea class="form-control" name="alamat" rows="2" id="alamat"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Kode Pos:<label class="bintang">*</label></label>
                        <input type="text" name="kodepos" class="form-control" placeholder="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Kelurahan :<label class="bintang">*</label></label>
                        <input type="text" name="kelurahan" class="form-control" placeholder="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Kecamatan :<label class="bintang">*</label></label>
                        <input type="text" name="kecamatan" class="form-control" placeholder="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Kabupaten / Kota :<label class="bintang">*</label></label>
                        <input type="text" name="kota" class="form-control" placeholder="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Provinsi :<label class="bintang">*</label></label>
                        <input type="text" name="provinsi" class="form-control" placeholder="">
                    </div>
                </div>
            </div>

            <div class="alert">
                <center><strong>Data Pendidikan</strong></center>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Pendidikan Terakhir :<label class="bintang">*</label></label>
                        <select class="form-control" name="pendidikan">
                            <option>Pilih</option>
                            <option value="SMA-IPA">SMA - IPA</option>
                            <option value="SMA-IPS">SMA - IPS</option>
                            <option value="SMK">SMK</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Nama Sekolah:<label class="bintang">*</label></label>
                        <input type="text" name="nama_sekolah" class="form-control" placeholder="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Nilai Rapor Kelas 12 :<label class="bintang">*</label></label>
                        <input type="text" name="nilai_raport" class="form-control" placeholder="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Alamat Sekolah:<label class="bintang">*</label></label>
                        <textarea class="form-control" name="alamat_sekolah" rows="2" id="alamat_sekolah"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Kota Sekolah<label class="bintang">*</label></label>
                        <input type="text" name="kota_sekolah" class="form-control" placeholder="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Jurusan Sekolah<label class="bintang">*</label></label>
                        <input type="text" name="jurusan_sekolah" class="form-control" placeholder="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Tahun Lulus :<label class="bintang">*</label></label>
                        <input type="text" name="tahunlulus" class="form-control"
                            placeholder="">
                    </div>
                </div>
            </div>

            <div class="alert">
                <center><strong>Pilihan Program Studi</strong></center>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Pilih Program Studi 1:<label class="bintang">*</label></label>
                        <select class="form-control" name="jurusan1">
                            <option value="D4 - Teknik Industri Otomotif">D4 - Teknik Industri Otomotif</option>
                            <option value="D4 - Sistem Informasi Industri Otomotif">D4 - Sistem Informasi Industri Otomotif</option>
                            <option value="D4 - Teknik Kimia Polimer">D4 - Teknik Kimia Polimer</option>
                            <option value="D4 - Administrasi Bisnis Otomotif">D4 - Administrasi Bisnis Otomotif</option>
                            <option value="D4 - Teknologi Rekayasa Otomotif">D4 - Teknologi Rekayasa Otomotif</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Pilih Program Studi 2:<label class="bintang">*</label></label>
                        <select class="form-control" name="jurusan2">
                            <option value="D4 - Teknik Industri Otomotif">D4 - Teknik Industri Otomotif</option>
                            <option value="D4 - Sistem Informasi Industri Otomotif">D4 - Sistem Informasi Industri Otomotif</option>
                            <option value="D4 - Teknik Kimia Polimer">D4 - Teknik Kimia Polimer</option>
                            <option value="D4 - Administrasi Bisnis Otomotif">D4 - Administrasi Bisnis Otomotif</option>
                            <option value="D4 - Teknologi Rekayasa Otomotif">D4 - Teknologi Rekayasa Otomotif</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <button type="submit" name="submit" id="submit" class="btn profil">Daftar</button>
                    <button type="reset" class="btn profil">Reset</button>
                    <p class="pt-2"><b>Tanda (<label class="bintang">*</label>) Wajib di isi</b></p>
                </div>
            </div>
        </form>
    </div>
    <br><br><br>

  <script>
    const form = document.getElementById('pendaftaran');
    const resetButton = form.querySelector('button[type="reset"]');
  
    resetButton.addEventListener('click', () => {
      form.reset();
    });
  </script>
@endsection


