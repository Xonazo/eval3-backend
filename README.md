# eval3-backend

Integrantes:</br>
-Nelson Rubio</br>
-Edison Muñoz </br>

Ambos de Ingenieria Civil Informatica.


# Rutas Perro:
## Buscar todos los perros (Get) </br>
http://127.0.0.1:8000/api/perro/all</br>
(Sin Json)
</br>
## Crear Perro (Post)</br>
http://127.0.0.1:8000/api/perro/create</br>
Json Ejemplo:
```
{
	"nombre":"Nelson",
	"url_foto":"www.google.cl",
	"descripcion":"perro alto"
}
```


## Buscar Perro ID </br>
http://127.0.0.1:8000/api/perro/id </br>

Json Ejemplo:
```
{
	"id":2
}
```
## Editar Perro </br>
http://127.0.0.1:8000/api/perro/edit </br>
Json Ejemplo:
```
{
	"id":10,
	"nombre":"Nelson",
	"url_foto":"www.google.cl",
	"descripcion":"tonto"
}
```

## Borrar Perro</br>
http://127.0.0.1:8000/api/perro/delete</br>
Json Ejemplo:
```
{
	"id":12
}
```


# Rutas Interaccion:</br>
## Crear Interaccion</br>
http://127.0.0.1:8000/api/interaccion/create</br>
Json Ejemplo:
```
{
	"Perro_interesado_id":1,
	"Perro_candidato_id":2,
	"preferencia":"2"
	
}
```

## Borrar Interaccion</br> 
http://127.0.0.1:8000/api/interaccion/delete</br>

Json Ejemplo
```
{
	"id":2
}
```

## Obtener todas las interacciones</br>
http://127.0.0.1:8000/api/interaccion/all</br>
(Sin Json)


## Editar Interacciones
http://127.0.0.1:8000/api/interaccion/edit </br>
Json Ejemplo:
```
{
	"id":4,
	"Perro_interesado_id":9,
	"Perro_candidato_id":2,
	"preferencia":"R"
	
}
```

## Obtener interacciones de perro</br> 
http://127.0.0.1:8000/api/interaccion/perro</br>
Json Ejemplo:
```
{
	"id":"5"
}
```


