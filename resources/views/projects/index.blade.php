<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  </head>
  <body>
  <div class="row">
    <div class="col">
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    </div>

</div>
    <div class="row">
    <div class="col-3">
      
        <ul class="nav flex-column">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
  </li>
</ul>

    </div>
    <div class="col">
      
        <p class="fs-1">Listado de proyectos</p>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">Codigo</th>
      <th scope="col">Titulo</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Fecha de creacion</th>
    </tr>
  </thead>
  <tbody>
                        @foreach ($proyectos as $proyecto)
                        <tr>
                            <th scope="row">{{ $proyecto->id }}</th>
                            <td>{{ $proyecto->titulo }}</td>
                            <td>{{ $proyecto->descripcion }}</td>
                            <td>{{ $proyecto->created_at }}</td>
                        </tr>
                        @endforeach
    </tbody>
</table>

    </div>
  </div>
  <div class="row">
    <div class="col">
     <footer class="py-5 bg-dark text-white">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md">
        <svg class="mb-2" width="40" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Bootstrap">
          <title>Bootstrap</title>
          <rect width="100%" height="100%" fill="#563d7c"/>
          <text x="50%" y="50%" fill="#fff" dy=".3em" text-anchor="middle" font-size="18">R</text>
        </svg>
        <small class="d-block mb-3 text-muted">&copy; 2025</small>
      </div>
      <div class="col-6 col-md">
        <h5>Features</h5>
        <ul class="list-unstyled text-small">
          <li><a class="link-light text-decoration-none" href="#">Cool stuff</a></li>
          <li><a class="link-light text-decoration-none" href="#">Random feature</a></li>
          <li><a class="link-light text-decoration-none" href="#">Team feature</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Resources</h5>
        <ul class="list-unstyled text-small">
          <li><a class="link-light text-decoration-none" href="#">Resource</a></li>
          <li><a class="link-light text-decoration-none" href="#">Resource name</a></li>
          <li><a class="link-light text-decoration-none" href="#">Another resource</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>About</h5>
        <ul class="list-unstyled text-small">
          <li><a class="link-light text-decoration-none" href="#">Team</a></li>
          <li><a class="link-light text-decoration-none" href="#">Locations</a></li>
          <li><a class="link-light text-decoration-none" href="#">Privacy</a></li>
          <li><a class="link-light text-decoration-none" href="#">Terms</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>
    </div>
  </div>
    </div>
    <div class="row">
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </body>
</html>


