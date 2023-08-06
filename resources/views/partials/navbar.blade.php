<nav class="navbar fixed-top  navbar-expand-lg navbar-dark shadow" style="background-none">
    <div class="container">
      <a class="navbar-brand logo-image" href="/"><img src="img/logog.png" width="142px" alt="alternative"></a> 
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
          <a class="nav-link {{ ($title === 'Home') ? 'active' : '' }}" href="/">Home</a>
          <a class="nav-link {{ ($title === 'About') ? 'active' : '' }}" href="/about">About</a>
          <a class="nav-link {{ ($title === 'Statistik') ? 'active' : '' }}" href="/statistic">Statistic</a>
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Welcome back, {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-window-reverse"></i>Dashboard</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form action="/logout" method="get">
                  @csrf
                  <button type="submit" class="dropdown-item">
                    <i class="bi bi-box-arrow-right"></i>Log out</li>
            </ul>
          </li> 
          @else
          <a class="nav-link {{ ($title === 'Login') ? 'active' : '' }}" href="/login"><i class="bi bi-box-arrow-in-right"></i> Login</a>
          @endauth

        </div>
      </div>
    </div>
  </nav>

  
  <script>
    var nav = document.querySelector('nav');

    window.addEventListener('scroll', function(){
      if (window.pageYOffset > 100) {
        nav.classList.add('bg-dark', 'shadow');
              }else {
                nav.classList.remove('bg-dark', 'shadow');
              }
    });
  </script>
  
  {{-- jumbotron  --}}
  {{-- <div id="background">
  <div class="jumbotron text-center">
    {{-- <img src="img/komplenbox.png" alt="Gambar pengaduan" width="250" > --}}
    {{-- <h1 class="display-6 ms-3 me-3 fw-bold">Layanan Pengaduan dan Aspirasi Mahasiswa</h1> --}}
    {{-- <p class="lead ms-3 me-3">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p> --}}
    {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#7F7400" fill-opacity="1" d="M0,0L26.7,42.7C53.3,85,107,171,160,181.3C213.3,192,267,128,320,106.7C373.3,85,427,107,480,128C533.3,149,587,171,640,154.7C693.3,139,747,85,800,69.3C853.3,53,907,75,960,101.3C1013.3,128,1067,160,1120,165.3C1173.3,171,1227,149,1280,122.7C1333.3,96,1387,64,1413,48L1440,32L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path></svg> --}}
      {{-- </div>
       </div> --}} 
{{-- akhir jumbotron --}}

     




      
    

     