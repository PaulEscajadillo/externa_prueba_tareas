
<h1 align="center">
  <br>
  Tareas
  <br>
</h1>

<h4 align="center">Aplicación web de evaluación para postular Externa</a>.</h4>

<p align="center">
</p>


## Acerca de
Es una aplicación simple que permite hacer CRUD sobre tareas, tanto desde el frontend generado en Blade como mediante Rest API

## Autor 
Paul Escajadillo

## Instrucciones
Se debe realizar las respectiva ejecución de migraciones, mediante 
$ php artisan migrate

La inyección de data de prueba mediante seeders, no es relavante. Se tenía planeado utilizar autenticación, para lo cual un primer usuario de prueba era necesario, pero se mantuvo la aplicación lo más simple.

## Endpoints 

Get: http://127.0.0.1:8000/api/tareas
Lista las tareas

Get: http://127.0.0.1:8000/api/tareas/show/{id}
Muestra la tarea con el id enviado

Post: http://127.0.0.1:8000/api/tareas/store
Graba la tarea
Recibe:
dni: 8 caracteres numéricos
title: máximo 100 caracteres alfanuméricos
description: máximo 500 caracteres alfanuméricos
expiration: fecha con formato yyyy-mm-dd
status: máximo 20 caracteres alfanuméricos

Put: http://127.0.0.1:8000/api/tareas/update
Actualiza la tarea con el id pasado en el request
Recibe:
dni: 8 caracteres numéricos
title: máximo 100 caracteres alfanuméricos
description: máximo 500 caracteres alfanuméricos
expiration: fecha con formato yyyy-mm-dd
status: máximo 20 caracteres alfanuméricos

Delete: http://127.0.0.1:8000/api/tareas/destroy
Elimina la tarea con el id especificado en el request

