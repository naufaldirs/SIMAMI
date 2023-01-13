<nav class="navbar navbar-expand-lg navbar-info bg-info" style="">
    <div class="container">   
      <a class="navbar-brand" alt="logo" href="/dashboard"><img src="img/logo.png" height="50"></a>
    <ul class="navbar-nav ms-auto">
      @auth
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Selamat Datang, {{ auth()->user()->namadepan }}
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-sidebar-inset-reverse"></i>Beranda</a></li>
          <li><hr class="dropdown-divider"></li>
          <li>
            <form action="/logout" method="post">
              @csrf
                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>Logout</button>
            </form>
          </li>
        

        </ul>
      </li>       
      @endauth
    </ul>
    
      </div>
    </div>
  </nav>
