
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    
    <title>SIMAMI STMI | {{ $title }}</title>
  </head>
  <body class="navbg">

    <div class="container">
      
        <div class="row">
            <div class="col-lg-6 pt-3 text-center">
                <img src="img/logo.png" height="50">
              <div class="col-lg-6 text-center ml-4 pt-3">
                <img src="img/orang.png" height="400px">
              </div>
            </div>

            <div class="col-lg-6 login"><br><br><br><br><br><br>
                <h4 class="f700 fk ml-3 pt-4">Selamat Datang Di Simami</h4>
                <div class="container">
                    <form action="/login" method="post" class="f400 fl">
                      @csrf
                        <div class="form-group">
                          <label for="email">Email</label>
                          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" autofocus required value="{{ old('email') }}">                
                          @error('email')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label for="password">Password</label>
                          <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                          <p class="text-right"><a href="/login/lupa" class="btn fk">Lupa Password?</a></p>
                        </div>
                        <button type="submit" class="btn masuk">Submit</button>
                        <p>Belum Punya Akun?<a href="/register" class="btn fk">Daftar Disini</a></p>
                      </form><br><br><br>
                </div>
              </div>
        </div>
    </div>  

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
