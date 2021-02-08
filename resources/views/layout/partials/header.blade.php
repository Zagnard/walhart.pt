<header>
  <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img width="70px" src="./imagens/logo_walhart_pequeno.png">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item ">
            <a class="nav-link" aria-current="page" href="{{ route('wl.index')  }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('wl.services')  }}">Serviços</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Estúdio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('wl.portfolio')  }}">Portfólio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('wl.faq')  }}">F.a.Q.</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="...">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('wl.registo')  }}">Registo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('wl.front_user_edit')  }}">Front user edit</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('wl.perfil_de_utilizador')  }}">Perfil</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>