@extends('master')

@section('contenido')
@include('flash::message')
<form action="{{url('/guardarRecurso')}}" method="POST">
<input id="token" type="hidden" name="_token" value="{{csrf_token() }}">
	<div class="from-group">
		<label for="nombre">Nombre:</label>
		<input type="text" class="form-control" name="nombre" required>
	</div>
	<div class="from-group">
		<label for="correo">Email:</label>
		<input type="text" class="form-control" name="correo" required>

	</div>
	<div class="from-group">
		<label for="edad">Edad:</label>
		<input type="text" class="form-control" name="edad" required>

	</div>
			<div class="from-group">
	    <label for="sexo">Sexo:</label>
		<select name="sexo" class="form-control">
		 
			<option value="0">Hombre</option>
			<option value="1">Mujer</option>
			
		</select>	
		
	<div class="from-group">
		<label for="pais">Pais:</label>
		<input type="text" class="form-control" name="pais" required>

		</div>
	<div class="from-group">
		<label for="estado">Estado:</label>
		<input type="text" class="form-control" name="estado" required>

	</div>	
	<div class="from-group">
	    <label for="puesto">Enviaremos promociones al email:</label>
		<select name="puesto" class="form-control">
		    @foreach($puestos as $a)
			<option value="{{$a->id}}">{{$a->descripcion}}</option>
			@endforeach
		</select>
	</div>
	<br>
			<div class="from-group">
	    <label for="estado">Deseo proteger:</label>
		<select name="uso" class="form-control">
		 
			<option value="0">Hogar</option>
			<option value="1" >Tienda</option>
			<option value="2">Empresa</option>
			
		</select>
		</div>
		<br>

	<div>
		<button type="submit" class="btn btn-primary">Guardar</button>
		<a href="{{url('/')}}" class="btn btn-danger">Cancelar</a>
	</div>

</form>
<script type="text/javascript">
        setTimeout(function(){
        	$(".alert").fadeOut(1500);

        },1500);
   	
   </script>

@stop
