<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario de Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card shadow">
            <div class="card-body">
              <h2 class="mb-4">Formulario de Registro</h2>

              @if(session('success'))
                <div class="alert alert-success">
                  {{ session('success') }}
                </div>
              @endif

              <form action="{{ route('project.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                  <label for="titulo" class="form-label">Nombre</label>
                  <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Ingresa tu nombre" required>
                </div>

                <div class="mb-3">
                  <label for="descripcion" class="form-label">Comentarios</label>
                  <textarea class="form-control" name="descripcion" id="descripcion" rows="4" placeholder="Escribe tus comentarios..." required></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Enviar</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>