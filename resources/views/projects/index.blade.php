<html lang="en">
    <body>
        <div class="container text-center">
            <div class="row">
                <table>
                    <thead>
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
    </body>
</html>