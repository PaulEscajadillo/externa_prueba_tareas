<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Editar Tarea</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container-fluid">
            <a class="navbar-brand h1" href={{ route('tareas.index') }}>Tareas</a>
            <div class="justify-end ">
                <div class="col ">
                    <a class="btn btn-sm btn-success" href={{ route('tareas.create') }}>Añadir Tareas</a>    
                </div>
            </div>
    </nav>
    <div class="container h-100 mt-5">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-10 col-md-8 col-lg-6">
                <h3>Update tarea</h3>
                <form action="{{ route('tareas.update', $tarea->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="dni">DNI</label>
                        <input type="text" class="form-control" id="dni" name="dni" maxlength="8"
                            value="{{ $tarea->dni }}" required>
                    </div>
                    <div class="form-group">
                        <label for="title">Título</label>
                        <input type="text" class="form-control" id="title" name="title" maxlength="100"
                            value="{{ $tarea->title }}" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Descripción</label>
                        <textarea class="form-control" id="description" name="description" maxlength="500" rows="3" required>{{ $tarea->description }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="expiration">Fecha de expiración</label>
                        <input type="date" class="datepicker" value="{{ $tarea->expiration }}" data-date-format="yyyy/mm/dd" id="expiration" name="expiration" required>
                    </div>
                    <div class="form-group">
                        <label for="status">Estado</label>
                        <select class="form-select" id="status" name="status">
                            <!--<option value="">Seleccionar Estado</option>-->
                            <option value="Pendiente" {{ $tarea->status == 'Pendiente' ? 'selected' : ''}}>Pendiente</option>
                            <option value="En progreso" {{ $tarea->status == 'En progreso' ? 'selected' : ''}}>En progreso</option>
                            <option value="Completada" {{ $tarea->status == 'Completada' ? 'selected' : ''}}>Completada</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Update tarea</button>

                    @include('parts.errors')
                </form>
            </div>
        </div>
    </div>
</body>

</html>
