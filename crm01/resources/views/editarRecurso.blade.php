@extends('master')

@section('contenido')
<form action="{{url('/actualizarRecurso')}}/{{$recursos->id}}" method="POST">
<input id="token" type="hidden" name="_token" value="{{csrf_token() }}">
	<div class="from-group">
		<label for="nombre">nombre:</label>
		<input type="text" class="form-control" name="nombre" required value="{{$recursos->nombre}}">
	</div>
	<div class="from-group">
		<label for="correo">Imail:</label>
		<input type="text" class="form-control" name="correo" required value="{{$recursos->correo}}">

	</div>
	<div class="from-group">
		<label for="edad">Edad:</label>
		<input type="text" class="form-control" name="edad" required value="{{$recursos->edad}}">

	</div>
	<div class="from-group">
	    <label for="sexo">Sexo:</label>
		<select name="sexo" class="form-control">
		            @if($recursos->sexo==0)
    				<option value="0" selected>Hombre</option>
    				@elseif($recursos->sexo==1)
    				<option value="1" >Mujer</option>
    				@endif
		 
			<option value="0" selected>Hombre</option>
			<option value="1" >Mujer</option>
			
		</select>
		</div>
		<div class="from-group">
		<label for="pais">Pais:</label>
		<input type="text" class="form-control" name="pais" required value="{{$recursos->pais}}">

	</div>	
		<div class="from-group">
		<label for="estado">Estado</label>
		<input type="text" class="form-control" name="estado" required value="{{$recursos->estado}}">

	</div>		
	<div class="from-group">
	    <label for="uso">Para que solicita el servicio:</label>
		<select name="uso" class="form-control">
		            @if($recursos->uso==0)
    				<option value="0" selected>Hogar</option>
    				@elseif($recursos->uso==1)
    				<option value="1" >Tienda</option>
    				@elseif($recursos->uso==2)
    				<option value="2">Empresa</option>
  				@endif
		 
			<option value="0" selected>Hogar</option>
			<option value="1" >Tienda</option>
			<option value="2">Empresa</option>
			
		</select>
		</div>	
	<div class="from-group">
	    <label for="puesto">Enviar notificaciones:</label>
		<select name="puesto" class="form-control">
		<option selected="" value="{{$recursos->puesto_id}}">
		{{$recursos->descripcion}}</option>
		    @foreach($puestos as $r)
			<option value="{{$r->id}}">{{$r->descripcion}}</option>
			@endforeach
		</select>
	</div><br>
      
	

	<div>
		<button type="submit" class="btn btn-primary">Actualizar</button>
		<a href="{{url('/')}}" class="btn btn-danger">Cancelar</a>
	</div>

</form>

@stop