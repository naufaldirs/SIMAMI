<nav class="navbar navbar-expand-lg navbar-info bg-info" style="">
  <a class="navbar-brand" href="/"><img src="img/logo.png" height="50"></a>
    <div class="container">   
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($active === "home") ? 'active' : '' }}" href="/">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle {{ ($active === "categories") ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Program Studi
          </a>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li><a class="dropdown-item" href="/siio">Sistem Informasi Industri Otomotif</a></li>
            <li><a class="dropdown-item" href="/abo">Administrasi Bisnis Otomotif</a></li>
            <li><a class="dropdown-item" href="#">Teknik Kimia Polimer</a></li>
            <li><a class="dropdown-item" href="#">Teknik Industri Otomotif</a></li>
            <li><a class="dropdown-item" href="#">Teknologi Rekayasa Otomotif</a></li>
          </ul>
        </li>


    <ul class="navbar-nav ms-auto">
      @auth
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Welcome Back, {{ auth()->user()->name }}
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-sidebar-inset-reverse"></i>My Dashboard</a></li>
          <li><hr class="dropdown-divider"></li>
          <li>
            <form action="/logout" method="post">
              @csrf
                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>Logout</button>
            </form>
          </li>
        

        </ul>
      </li>       
      @else
      <li class="nav-item">
        <a href="/login" class="nav-link" {{ ($active === "categories") ? 'active' : '' }}>Login</a>
      </li>
      <li class="nav-item">
        <a href="/register" class="nav-link" {{ ($active === "categories") ? 'active' : '' }}>Buat Akun</a>
      </li>
      @endauth
    </ul>
    
      </div>
    </div>
  </nav>
