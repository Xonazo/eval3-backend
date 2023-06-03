# eval3-backend

Integrantes:</br>
-Nelson Rubio</br>
-Edison Muñoz </br>

Ambos de Ingenieria Civil Informatica.


Rutas:
Buscar todos los perros (Get)
http://127.0.0.1:8000/api/perro/all
(Sin Json)

Crear Perro (Post)
http://127.0.0.1:8000/api/perro/create
Json Ejemplo:
```
{
	"nombre":"Nelson",
	"url_foto":"www.google.cl",
	"descripcion":"perro alto"
}
```


Buscar Perro ID
http://127.0.0.1:8000/api/perro/id
Json Ejemplo:
{
	"id":2
}

Editar Perro 
http://127.0.0.1:8000/api/perro/edit
Json Ejemplo:
{
	"id":10,
	"nombre":"Nelson",
	"url_foto":"www.google.cl",
	"descripcion":"tonto"
}

Borrar Perro
http://127.0.0.1:8000/api/perro/delete
Json Ejemplo:
{
	"id":12
}


Rutas Interaccion:
Crear Interaccion
http://127.0.0.1:8000/api/interaccion/create
Json Ejemplo:
{
	"Perro_interesado_id":1,
	"Perro_candidato_id":2,
	"preferencia":"2"
	
}

Borrar Interaccion
http://127.0.0.1:8000/api/interaccion/delete

Json Ejemplo
{
	"id":2
}

Obtener todas las interacciones
http://127.0.0.1:8000/api/interaccion/all
(Sin Json)


Editar Interacciones
http://127.0.0.1:8000/api/interaccion/edit
Json Ejemplo:
{
	"id":4,
	"Perro_interesado_id":9,
	"Perro_candidato_id":2,
	"preferencia":"R"
	
}

Obtener interacciones de perro
http://127.0.0.1:8000/api/interaccion/perro
Json Ejemplo:
{
	"id":"5"
}


