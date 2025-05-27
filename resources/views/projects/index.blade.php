<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyectos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      .delete-btn {
        transition: opacity 0.2s;
      }
    </style>
  </head>
  <body>

  <div class="row">
    <div class="col">
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
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
                <a class="nav-link disabled">Disabled</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search">
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
          <a class="nav-link active" href="#">Active</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
    </div>

    <div class="col-9">
      <p class="fs-1">Proyectos</p>

      @if (session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
      @endif

      <table class="table">
        <thead>
          <tr>
            <th scope="col">Código</th>
            <th scope="col">Título</th>
            <th scope="col">Descripción</th>
            <th scope="col">Fecha de creación</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($proyectos as $proyecto)
          <tr class="project-row">
            <th scope="row">{{ $proyecto->id }}</th>
            <td>{{ $proyecto->titulo }}</td>
            <td>{{ $proyecto->descripcion }}</td>
            <td>
              {{ $proyecto->created_at }}
              <button type="button" class="btn btn-danger btn-sm float-end delete-btn"
                      data-bs-toggle="modal"
                      data-bs-target="#deleteModal"
                      data-id="{{ $proyecto->id }}"
                      data-title="{{ $proyecto->titulo }}">
                Eliminar
              </button>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

  <!-- Modal de Confirmación de Eliminación -->
  <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <form id="deleteForm" method="POST">
        @csrf
        @method('DELETE')
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Confirmar eliminación</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
          </div>
          <div class="modal-body">
            ¿Estás seguro que quiere eliminar el proyecto <strong id="projectTitle"></strong>?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
            <button type="submit" class="btn btn-danger">Sí</button>
          </div>
        </div>
      </form>
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
                <text x="50%" y="50%" fill="#fff" dy=".3em" text-anchor="middle" font-size="18">GOB</text>
              </svg>
              <small class="d-block mb-3 text-muted">&copy; 2025</small>
            </div>
            <div class="col-6 col-md">
              <h5>Features</h5>
              <ul class="list-unstyled text-small">
                <li><a class="link-light text-decoration-none" href="#">Cool stuff</a></li>
                <li><a class="link-light text-decoration-none" href="#">Random feature</a></li>
              </ul>
            </div>
            <div class="col-6 col-md">
              <h5>Resources</h5>
              <ul class="list-unstyled text-small">
                <li><a class="link-light text-decoration-none" href="#">Resource</a></li>
                <li><a class="link-light text-decoration-none" href="#">Another resource</a></li>
              </ul>
            </div>
            <div class="col-6 col-md">
              <h5>About</h5>
              <ul class="list-unstyled text-small">
                <li><a class="link-light text-decoration-none" href="#">Team</a></li>
                <li><a class="link-light text-decoration-none" href="#">Locations</a></li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const deleteModal = document.getElementById('deleteModal');
      deleteModal.addEventListener('show.bs.modal', function (event) {
        const button = event.relatedTarget;
        const id = button.getAttribute('data-id');
        const title = button.getAttribute('data-title');
        const form = document.getElementById('deleteForm');
        const projectTitle = document.getElementById('projectTitle');

        form.action = `/project/${id}`;
        projectTitle.textContent = title;
      });
    });
  </script>
  </body>
</html>