@extends('dashboard.layouts.main')

@section('container')
<center><b><h3>Biodata Siswa</h3></b><br></center>
			<div class="form-group">
				<table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td width="30%">NIK</td>
                            <td width="3%">:</td>
                            <td class="col-md-6">{{ $pendaftaran->nik }}</td>
                        </tr>
                        <tr>
                            <td width="30%">NISN</td>
                            <td width="3%">:</td>
                            <td class="col-md-6"></td>
                        </tr>
                        <tr>
                            <td width="30%">Nama</td>
                            <td width="3%">:</td>
                            <td class="col-md-6">{{ $pendaftaran->name }}</td>
                        </tr>
                        
                        <tr>
                            <td width="30%">NPWP</td>
                            <td width="3%">:</td>
                            <td class="col-md-6"></td>
                        </tr>
                        <tr>
                            <td width="30%">Jenis Kelamin</td>
                            <td width="3%">:</td>
                            <td class="col-md-6"></td>
                        </tr>
                        <tr>
                            <td width="30%">Tempat Lahir</td>
                            <td width="3%">:</td>
                            <td class="col-md-6"></td>
                        </tr>
                        <tr>
                            <td width="30%">Tanggal Lahir</td>
                            <td width="3%">:</td>
                            <td class="col-md-6"></td>
                        </tr>
                        <tr>
                            <td width="30%">Golongan Darah</td>
                            <td width="3%">:</td>
                            <td class="col-md-6"></td>
                        </tr>
                        <tr>
                            <td width="30%">Nama Ibu</td>
                            <td width="3%">:</td>
                            <td class="col-md-6"></td>
                        </tr>
                        <tr>
                            <td width="30%">Nama Ayah</td>
                            <td width="3%">:</td>
                            <td class="col-md-6"></td>
                        </tr>
                        <tr>
                            <td width="30%">Alamat</td>
                            <td width="3%">:</td>
                            <td class="col-md-6"></td>
                        </tr>
                        <tr>
                            <td width="30%">Kelurahan</td>
                            <td width="3%">:</td>
                            <td class="col-md-6"></td>
                        </tr>
                        <tr>
                            <td width="30%">Kecamatan</td>
                            <td width="3%">:</td>
							<td class="col-md-6"></td>
                        </tr>
                        <tr>
                            <td width="30%">Kabupaten / Kota</td>
                            <td width="3%">:</td>
                            <td class="col-md-6"></td>
                        </tr>
                        <tr>
                            <td width="30%">Kode Pos</td>
                            <td width="3%">:</td>
                            <td class="col-md-6"></td>
                        </tr>
                        <tr>
                            <td width="30%">Nomor Telepon</td>
                            <td width="3%">:</td>
                            <td class="col-md-6"></td>
                        </tr>
                        <tr>
                            <td width="30%">Email</td>
                            <td width="3%">:</td>
							<td class="col-md-6"></td>
                        </tr>
						<tr>
                            <td colspan="3" align="center"><b>Data Sekolah</b></td>
                        </tr>
                        <tr>
                            <td width="30%">Jenis Sekolah</td>
                            <td width="3%">:</td>
                            <td class="col-md-6"></td>
                        </tr>
                        <tr>
                            <td width="30%">Nama Sekolah</td>
                            <td width="3%">:</td>
                            <td class="col-md-6"></td>
                        </tr>
                        <tr>
                            <td width="30%">Alamat Sekolah</td>
                            <td width="3%">:</td>
                            <td class="col-md-6"></td>
                        </tr>
                        <tr>
                            <td width="30%">Kota Asal Sekolah</td>
                            <td width="3%">:</td>
                            <td class="col-md-6"></td>
                        </tr>
                        <tr>
                            <td width="30%">Jurusan</td>
                            <td width="3%">:</td>
                            <td class="col-md-6"></td>
                        </tr>
                        <tr>
                            <td width="30%">Tahun Lulus</td>
                            <td width="3%">:</td>
                            <td class="col-md-6"></td>
                        </tr>
                    </tbody>
                </table>
			</div>
		</div>
		
</div>
@endsection


