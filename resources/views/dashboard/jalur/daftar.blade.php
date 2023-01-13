@extends('dashboard.layouts.main')

@section('container')
 <!-- Page Content -->
    <div class="container-fluid">
		 	  <br><br>
			<center><strong><h2><b>Daftar Pendaftaran</b></h2></strong></center>
			<div class="table-responsive">          
			  <table class="table">
				<thead>
				  <tr>
					<th>Nama</th>
					<th>Gelombang</th>
					<th>Jalur</th>
					<th>Pilihan 1</th>
					<th>Pilihan 2</th>
					<th>Bukti Pembayaran</th>
					<th>Status Pendaftaran</th>
					<th width="20%">Aksi</th>
				  </tr>
				</thead>
                @foreach ($biodatas as $biodata)
				<tbody id="mytable">
					<tr>
						<td>{{ $biodata->nama }}</td>
						<td>2</td>
						<td>Mandiri</td>
						<td>{{ $biodata->education->jurusan1 }}</td>
						<td>{{ $biodata->education->jurusan2 }}</td>
						<td><a href="img/ttd.png" target="_blank">Lihat</a></td>
						<td>Sudah Divalidasi</td>
						<td><a class="btn btn-primary" href="/kartu_ujian/cetak_pdf" role="button">Print</a> 
						<a href="resume"><button type="button" class="btn btn-success" href="">Resume</button></a>
						</td>
					</tr>
				</tbody>
                @endforeach
			  </table>
			</div>
    </div>
</div>
@endsection