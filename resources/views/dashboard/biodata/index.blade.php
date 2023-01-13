@extends('dashboard.layouts.main')

@section('container')
<center><b><h3>Biodata Siswa</h3></b><br></center>
			<div class="form-group">
				<table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td width="30%">NIK</td>
                            <td width="3%">:</td>
                            @foreach ($biodatas as $biodata)
                            <td class="col-md-6">{{ $biodata->nik }}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <td width="30%">NISN</td>
                            <td width="3%">:</td>
                            @foreach ($biodatas as $biodata)
                            <td class="col-md-6">{{ $biodata->nisn }}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <td width="30%">Nama</td>
                            <td width="3%">:</td>
                            <td class="col-md-6">{{ auth()->user()->namadepan }} {{ auth()->user()->namabelakang }}</td>
                        </tr>
                        
                        <tr>
                            <td width="30%">NPWP</td>
                            <td width="3%">:</td>
                            @foreach ($biodatas as $biodata)
                            <td class="col-md-6">{{ $biodata->npwp }}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <td width="30%">Jenis Kelamin</td>
                            <td width="3%">:</td>
                            @foreach ($biodatas as $biodata)
                            <td class="col-md-6">{{ $biodata->gender }}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <td width="30%">Tempat Lahir</td>
                            <td width="3%">:</td>
                            @foreach ($biodatas as $biodata)
                            <td class="col-md-6">{{ $biodata->tempatlahir }}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <td width="30%">Tanggal Lahir</td>
                            <td width="3%">:</td>
                            @foreach ($biodatas as $biodata)
                            <td class="col-md-6">{{ $biodata->tanggallahir }}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <td width="30%">Golongan Darah</td>
                            <td width="3%">:</td>
                            @foreach ($biodatas as $biodata)
                            <td class="col-md-6">{{ $biodata->goldar }}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <td width="30%">Nama Ibu</td>
                            <td width="3%">:</td>
                            @foreach ($biodatas as $biodata)
                            <td class="col-md-6">{{ $biodata->ibu }}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <td width="30%">Nama Ayah</td>
                            <td width="3%">:</td>
                            @foreach ($biodatas as $biodata)
                            <td class="col-md-6">{{ $biodata->ayah }}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <td width="30%">Alamat</td>
                            <td width="3%">:</td>
                            @foreach ($biodatas as $biodata)
                            <td class="col-md-6">{{ $biodata->alamat }}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <td width="30%">Kelurahan</td>
                            <td width="3%">:</td>
                            @foreach ($biodatas as $biodata)
                            <td class="col-md-6">{{ $biodata->kelurahan }}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <td width="30%">Kecamatan</td>
                            <td width="3%">:</td>
                            @foreach ($biodatas as $biodata)
                            <td class="col-md-6">{{ $biodata->kecamatan }}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <td width="30%">Kabupaten / Kota</td>
                            <td width="3%">:</td>
                            @foreach ($biodatas as $biodata)
                            <td class="col-md-6">{{ $biodata->kota }}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <td width="30%">Kode Pos</td>
                            <td width="3%">:</td>
                            @foreach ($biodatas as $biodata)
                            <td class="col-md-6">{{ $biodata->kodepos }}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <td width="30%">Nomor Telepon</td>
                            <td width="3%">:</td>
                            <td class="col-md-6">{{ auth()->user()->phone }}</td>
                        </tr>
                        <tr>
                            <td width="30%">Email</td>
                            <td width="3%">:</td>
							<td class="col-md-6">{{ auth()->user()->email }}</td>
                        </tr>
						<tr>
                            <td colspan="3" align="center"><b>Data Sekolah</b></td>
                        </tr>
                        <tr>
                            <td width="30%">Jenis Sekolah</td>
                            <td width="3%">:</td>
                            @foreach ($biodatas as $biodata)
                            <td class="col-md-6">{{ $biodata->education->pendidikan }}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <td width="30%">Nama Sekolah</td>
                            <td width="3%">:</td>
                            @foreach ($biodatas as $biodata)
                            <td class="col-md-6">{{ $biodata->education->nama_sekolah }}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <td width="30%">Alamat Sekolah</td>
                            <td width="3%">:</td>
                            @foreach ($biodatas as $biodata)
                            <td class="col-md-6">{{ $biodata->education->alamat_sekolah }}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <td width="30%">Kota Asal Sekolah</td>
                            <td width="3%">:</td>
                            @foreach ($biodatas as $biodata)
                            <td class="col-md-6">{{ $biodata->education->kota_sekolah }}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <td width="30%">Jurusan</td>
                            <td width="3%">:</td>
                            @foreach ($biodatas as $biodata)
                            <td class="col-md-6">{{ $biodata->education->jurusan_sekolah }}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <td width="30%">Tahun Lulus</td>
                            <td width="3%">:</td>
                            @foreach ($biodatas as $biodata)
                            <td class="col-md-6">{{ $biodata->education->tahunlulus }}</td>
                            @endforeach
                        </tr>
                    </tbody>
                </table>
			</div>
		</div>
		
</div>
@endsection


