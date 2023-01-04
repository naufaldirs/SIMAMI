<nav class="navbar navbar-expand-lg navbar-light bg">
  <div class="container">  
    <a class="navbar-brand" href="/"><img src="img/logo.png" height="50"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse fk" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a href="/"><button class="btn fk">Beranda</button></a>
        </li>
        <li class="nav-item active">
          <a href="/projur"><button class="btn fk">Program Studi</button></a>
        </li>
      </ul>
    </div>
  </div>

    <ul class="navbar-nav ml-auto">    
      @auth
            <form action="/logout" method="post">
              @csrf
                <button type="submit" class="btn fk"><i class="bi bi-box-arrow-right"></i>Keluar</button>
            </form>            
        </ul>
      </li>       
      @else
      <li class="nav-item active">
        <a href="/login"><button class="btn fk">Masuk</button></a>
      </li>
      @endauth
    </ul>  
      </div>
    </div>
  </nav>