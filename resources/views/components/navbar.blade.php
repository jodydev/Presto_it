 <nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid">

    <a class="navbar-brand ms-5 text-white" href="/">Presto.it</a>
    <a class="navbar-brand ms-5 text-white" href="{{route('announcements.create')}}">crea annuncio</a>

    <!-- collapse button -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- search bar -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <div class="navbar-nav me-auto ms-auto mb-2 mb-lg-0 py-1">
          <input class="form-control me-2 my-searchbar" type="search" placeholder="Search" aria-label="Search">
          <a href="#" class="my-btn-searchbar" type="submit"><i class="fa-solid fa-magnifying-glass fa-lg" style="color: #000000;"></i></a>
      </div>
    </div>

    <!-- login | register -->
    <form class="d-flex">
        <a href="/login" class="btn my-btn-login me-2" type="submit">Accedi</a>
        <a href="/register" class="btn my-btn-login me-2" type="submit">Registrati</a>
    </form>
    <form class="d-flex" method="post" action="/logout">
      @csrf
      <button class="btn btn-danger">logout</button>
    </form>
    

  </div>
</nav>
