@extends('master')

@section('contenido')
@include('flash::message')
<form action="{{url('/guardarProyecto')}}" method="POST">
<input id="token" type="hidden" name="_token" value="{{csrf_token() }}">
	<div class="from-group">
		<label for="descripcion">Descripcion:</label>
		<input type="text" class="form-control" name="descripcion" required>
	</div>
	<div class="from-group">
		<label for="fecha_inicio">Fecha Inicio:</label>
		<input type="Date" class="form-control" name="fecha_inicio" required>

	</div>
	<div class="from-group">
		<label for="fecha_entrega">Fecha Entrega:</label>
		<input type="Date" class="form-control" name="fecha_entrega" required>

	</div>
		<div class="from-group">
	    <label for="sexo">Sexo:</label>
		<select name="sexo" class="form-control">

    				<option value="0" selected>Hombre</option>

    				<option value="1" >Mujer</option>

			
		</select>
		</div>
	<div class="from-group">
	    <label for="encargado">Encargado:</label>
		<select name="encargado" class="form-control">
		    @foreach($encargados as $a)
			<option value="{{$a->id}}">{{$a->nombre}}</option>
			@endforeach
		</select>
	</div>
	<div class="from-group">
	    <label for="uso">Para que se solicita el servicio:</label>
		<select name="uso" class="form-control">

    				<option value="0" selected>Hogar</option>

    				<option value="1" >Tienda</option>

    				<option value="2">Empresa</option>

		 

		</select>
		</div>
	<div>
		<button type="submit" class="btn btn-primary">Registrar</button>
		<a href="{{url('/')}}" class="btn btn-danger">Cancelar</a>
	</div>

   	
   

</form>
 <script type="text/javascript">
        setTimeout(function(){
        	$(".alert").fadeOut(1500);

        },1500);
   	
   </script>

@stop