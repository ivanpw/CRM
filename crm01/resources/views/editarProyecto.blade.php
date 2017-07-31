@extends('master')

@section('contenido')
<form action="{{url('/actualizarProyecto')}}/{{$proyecto->id}}" method="POST">
<input id="token" type="hidden" name="_token" value="{{csrf_token() }}">
	<div class="from-group">
		<label for="descripcion">Descripcion:</label>
		<input type="text" class="form-control" name="descripcion" required value="{{$proyecto->descripcion}}">
	</div>
		<div class="from-group">
		<label for="fecha_inicio">Fecha Inicio:</label>
		<input type="Date" class="form-control" name="fecha_inicio" required value="{{$proyecto->fecha_inicio}}">

	</div>
	<div class="from-group">
		<label for="fecha_entrega">Fecha Entrega:</label>
		<input type="Date" class="form-control" name="fecha_entrega" required value="{{$proyecto->fecha_entrega}}">

	</div>
	<div class="from-group">
	    <label for="sexo">Sexo:</label>
		<select name="sexo" class="form-control">
		            @if($proyecto->sexo==0)
    				<option value="0" selected>Hombre</option>
    				@elseif($proyecto->sexo==1)
    				<option value="1" >Mujer</option>
    				@endif
		 
			<option value="0" selected>Hombre</option>
			<option value="1" >Mujer</option>
			
		</select>	
	<div class="from-group">
	    <label for="uso">Para que se solicita el servicio:</label>
		<select name="uso" class="form-control">
		            @if($proyecto->uso==0)
    				<option value="0" selected>Hogar</option>
    				@elseif($proyecto->uso==1)
    				<option value="1" >Tienda</option>
    				@elseif($proyecto->uso==2)
    				<option value="2">Empresa</option>
    				@endif
		 
			<option value="0" selected>Hogar</option>
			<option value="1">Tienda</option>
			<option value="2">Empresa</option>
			
		</select>	
	
	<div class="from-group">
	    <label for="encargado">Encargado:</label>
		<select name="encargado" class="form-control">
		<option selected="" value="{{$proyecto->encargado_id}}">
			{{$proyecto->nombre}}</option>
		    @foreach($encargados as $a)
			<option value="{{$a->id}}">{{$a->nombre}}</option>
			@endforeach
		</select>
	</div>


	<div><br>
		<button type="submit" class="btn btn-primary">Actualizar</button>
		<a href="{{url('/')}}" class="btn btn-danger">Cancelar</a>
	</div>

</form>

@stop