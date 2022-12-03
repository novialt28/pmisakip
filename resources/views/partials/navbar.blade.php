   <!-- Navbar -->
   <nav class="navbar navbar-expand-lg navbar-dark shadow-sm" style="background-color:#0099ff">
    <div class="container">
      <a class="navbar-brand" href="#">Smart PMI SAKIP</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Dashboard") ? 'active' : '' }}"  href="/"><i class="bi bi-house"></i> Dashboard</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle {{ ($title === "LKE Gabungan") ? 'active' : '' }} {{ ($title === "LKE Unit") ? 'active' : '' }} {{ ($title === "LKE Instansi") ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-list-task"></i>
              Penilaian
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/lke_gabungan"><i class="bi bi-list"></i> LKE Gabungan</a></li>
              <li><a class="dropdown-item" href="/lke_instansi"><i class="bi bi-list"></i> LKE Instansi</a></li>
              <li><a class="dropdown-item" href="/lke_unit"><i class="bi bi-list"></i> LKE Unit</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Pengaturan") ? 'active' : '' }}" href="#"><i class="bi bi-gear"></i> Pengaturan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">LHE</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Welcome back, {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li>
                
                <form action="/logout" method="POST">
                  @csrf
                  <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                </form>
            </ul>
          </li>
        </ul> 
      </div>
    </div>
  </nav>
      <!-- End Navbar -->