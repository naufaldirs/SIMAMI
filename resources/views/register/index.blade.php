@extends('layouts.main')

@section('container')
<section class="latar">
    <div class="text-center pt-5">
        <h2 class="f400">Pendaftaran Akun <br><b>SIMAMI POLITEKNIK STMI</b></h2>
    </div>
    <div class="row pt-3 justify-content-center">
      <div class="col-lg-8 col-md-12 col-12">
        <form action="/register" method="post" class="form mx-auto">
          @csrf
          <div class="form-row">
            <div class="form-group pb-3 f400">
              <label for="name"><b>Nama Lengkap</b></label>
              <input type="text" name="name" class="first light form-control @error('name') is-invalid @enderror" id="name" placeholder="Masukkan Nama Depan" required value="{{ old('name') }}">
              @error('name')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          <div class="form-group pb-3 f400">
            <label for="email"><b>Email</b></label>
            <input type="email" name="email"  class="first form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan Email" required value="{{ old('email') }}">
            @error('email')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
          </div>
          <div class="form-group pb-3 f400">
            <label for="password"><b>Password</b></label>
            <input type="password" name="password" class="first form-control @error('password') is-invalid @enderror" id="password" placeholder="Masukkan Password" required>
            @error('password')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
          </div>
          <div class="form-group pb-3 f400">
            <label for="konfirmasipassword"><b>Ulangi Password</b></label>
            <input type="password" name="konfirmasipassword" class="first form-control @error('konfirmasipassword') is-invalid @enderror" id="konfirmasipassword" placeholder="Ulangi Password" required>
            @error('konfirmasipassword')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
          </div>
        </form>
        <div class="form-group pb-3 f400 text-center">
          <label for="exampleFormControlTextarea1"><b>Password minimal terdiri dari 6 karakter
            dan harus kombinasi huruf angka</b></label>
        </div>
        <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Daftar</button>
        <div class="mb-3 text-center">
          <p>Sudah punya akun? <a class="btn tptb pl-0" href="/login" role="button">Masuk Disini</button></p>
        </div>
      </div>
    </div>
</section><br><br><br>

@endsection