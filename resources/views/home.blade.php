    @extends('layouts.main')
    @section('container')
    <section>
      <section>
        <div id="carouselExampleSlidesOnly" class="carousel slide container" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/home1.jpg" class="d-block w-100" alt="Politeknik STMI Jakarta" height="430px" width="200">
            </div>
            <div class="carousel-item">
              <img src="img/home2.jpg" class="d-block w-100" alt="Politeknik STMI Jakarta" height="430px">
            </div>
            <div class="carousel-item">
              <img src="img/home3.jpg" class="d-block w-100" alt="Politeknik STMI Jakarta" height="430px">
            </div>
          </div>
      </div>
      </section>
      <br><br><br>
      
      <section><center>
        <div class="container">
          <div class="card deck pt-5 pb-5 pr-3 pl-3 cardhome">
            <div class="mx-auto">
                <h1>Selamat Datang</h1><br>
            </div>
            <div class="mx-auto">
                <p>                                                                             
                  Selamat dan Terima kasih anda telah memilih Politeknik STMI Jakarta untuk melanjutkan pendidikan yang lebih tinggi. Politeknik STMI Jakarta merupakan salah satu Politeknik berstatus Negeri di bawah Kementerian Perindustrian Republik Indonesia.<br><br>
                  Menjadi Mahasiswa Politeknik STMI Jakarta membutuhkan disiplin, motivasi, ketekunan dan komitmen yang kuat. Pelaksanaan kegiatan pembelajaran menggunakan kurikulum dual system dimana 5 semester di kampus, 2 semester di industi dan 1 semester proyek tugas akhir.
                  Kami menyadari bahwa anda akanmengembangkan diri dengan baik dalam mewujudkan cita-cita dengan bergabung bersama Politeknik STMI Jakarta.YOUR FUTURE STARTS HERE.<br><br>
                  Jadi tunggu apa lagi? duduklah dengan nyaman dan isi form pendaftaran sekarang juga</p>
            </div>
          </div>
        </div>
      </section></center>
      <br><br>
      
      <section>
        <div class="container">
          <h1 class="text-center f400">Jadwal Pendaftaran</h1><br>
            <div class="text-center">
              <a href="/jalur-prestasi"><button type="button" class="btn butpres">STMI Prestasi</button></a>
              <p>Pendaftaran	: 25 januari - 10 Maret 2023.</p>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <a href="/jalur-mandiri"><button type="button" class="btn butgel mr-5 ml-5">STMI Mandiri Gelombang 1</button></a>
                <p class="text-center">Sabtu, 30 Mei 2023 jam 08.00 – 10.00 WIB.</p>
              </div>
              <div class="col-lg-6">  
                <a href="/jalur-mandiri"><button type="button" class="btn butgel mr-5 ml-5">STMI Mandiri Gelombang 2</button></a>
                <p class="text-center">Kamis, 30 Juni 2023 jam 08.00 – 10.00 WIB.</p>
              </div>
            </div>
        </div>
      </section>
      <br><br><br>
    @endsection
