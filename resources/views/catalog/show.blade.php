
@extends ('layouts.master');

@section ('content')
	<div class="row">
		<div class="col-sm-4">
		   <img src={{$arrayPeliculas->poster}}>
		</div>
		<div class="col-sm-8">
			<p class="h1">{{$arrayPeliculas->title}}</p>

			<strong>Año: </strong>
			{{$arrayPeliculas->year}}
			<br>
			Director:
			{{$arrayPeliculas->director}}
			<br>
			<br>
			<strong>Resumen: </strong>
			{{$arrayPeliculas->synopsis}}
			<br>
			<strong>Estado: </strong>
			
			@if($arrayPeliculas->rented==false)
			  Pelicula actualmente disponible
			  <br>
			 <a href="#" class="btn btn-default border border-1 bg-danger">Alquilar Pelicula</a>
			@else
			    Pelicula actualmente alquilada
			    <br>
			    <a href="#" class="btn btn-default border border-1 bg-danger">Devolver Pelicula</a>
			@endif
				
			<a href="{{ route ('/catalog/edit/'=>[8])}}" class="btn btn-default border border-1 bg-warning">Editar Pelicula</a>
			<a href="{{ url('/catalog/') }}" class="btn btn-default border border-1 bg-white">Volver Listado</a>
		</div>
	</div>
@endsection