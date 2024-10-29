<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Crear Tarea</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container-fluid">
            <a class="navbar-brand h1" href={{ route('tareas.index') }}>Tareas</a>
            <div class="justify-end ">
                <div class="col ">
                    <a class="btn btn-sm btn-success" href={{ route('tareas.create') }}>Añadir Tarea</a>
                </div>
            </div>
    </nav>

    <div class="container h-100 mt-5">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-10 col-md-8 col-lg-6">
                <h3>Add a tarea</h3>
                <form action="{{ route('tareas.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="dni">DNI</label>
                        <input type="text" class="form-control" id="dni" name="dni" maxlength="8" required>
                    </div>
                    <div class="form-group">
                        <label for="title">Título</label>
                        <input type="text" class="form-control" id="title" name="title" maxlength="100" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Descripción</label>
                        <textarea class="form-control" id="description" name="description" maxlength="500" rows="4" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="expiration">Fecha de expiración</label>
                        <input type="date" class="datepicker" data-date-format="yyyy/mm/dd" id="expiration" name="expiration" required>
                    </div>
                    <div class="form-group">
                        <label for="status">Estado</label>
                        <select class="form-select" id="status" name="status">
                            <!--<option value="">Seleccionar Estado</option>-->
                            <option value="Pendiente" >Pendiente</option>
                            <option value="En progreso" >En progreso</option>
                            <option value="Completada" >Completada</option>
                        </select>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Create tarea</button>                    

                    @include('parts.errors')
                </form>
            </div>
        </div>
    </div>
</body>

</html>