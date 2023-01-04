@extends('layouts.main')
@section('container')
<div class="text-center pt-5">
  <h2 class="f400 fc"><b>Pendaftaran Akun SIMAMI POLITEKNIK STMI</b></h2>
</div>
<div class="row pt-3 justify-content-center">
<div class="col-lg-8 col-md-12 col-12">
  <form action="/register" method="post" class="form mx-auto">
    @csrf
    <div class="form-row">
      <div class="form-group col-md-6 mr-lg-0 f400">
        <label for="namadepan"><b>Nama Depan</b></label>
        <input type="text" name="namadepan" class="first light form-control @error('namadepan') is-invalid @enderror" id="namadepan" placeholder="Masukkan Nama Depan" required value="{{ old('namadepan') }}">
        @error('namadepan')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="form-group col-md-6 f400">
        <label for="namabelakang"><b>Nama Belakang</b></label>
        <input type="text" name="namabelakang" class="first light form-control @error('namabelakang') is-invalid @enderror" id="namabelakang" placeholder="Masukkan Nama Belakang" required value="{{ old('namabelakang') }}">
                @error('namabelakang')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
      </div>
    </div>
    <div class="form-group pb-3 f400">
      <label for="exampleFormControlInput1"><b>Email</b></label>
      <input type="email" name="email"  class="first form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan Email" required value="{{ old('email') }}">
      @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
    </div>
    <div class="form-group pb-3 f400">
      <label for="exampleFormControlInput1"><b>Telepon</b></label>
      <input type="text" name="phone"  class="first form-control @error('phone') is-invalid @enderror" id="phone" placeholder="Masukkan No HP" required value="{{ old('phone') }}">
      @error('phone')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
    </div>
    <div class="form-group pb-3 f400">
      <label for="exampleFormControlInput1"><b>Password</b></label>
      <input type="password" name="password" class="first form-control @error('password') is-invalid @enderror" id="password" placeholder="Masukkan Password" required>
      @error('password')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
    </div>
    <div class="form-group pb-3 f400">
      <label for="exampleFormControlInput1"><b>Ulangi Password</b></label>
      <input type="password" name="konfirmasipassword" class="first form-control @error('konfirmasipassword') is-invalid @enderror" id="konfirmasipassword" placeholder="Ulangi Password" required>
      @error('konfirmasipassword')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
    </div>
    <div class="sign pt-3 pb-1 pl-2 pr-2 text-center">
      <p><b>* Password minimal terdiri dari 6 karakrer dan harus kombinasi huruf angka</b></p>
    </div><br>
    <div class="mb-3 text-center">
      <button type="submit" class="btn daftar">Daftar</button>
    </div>
    <p class="text-center">Sudah Punya Akun? <a href="../login">Masuk Disini</a></p>
  </form>
</div>
</div>
<br> <br> <br>
@endsection