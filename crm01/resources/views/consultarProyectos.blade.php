@extends('master')

@section('contenido')
<table class="table table-hover">
 @include('flash::message')
   <thead>
    	<tr>
    		<th>ID</th>
    		<th>Descripcion</th>
    		<th>fecha Inicio</th>
    		<th>fecha Entrega</th>
            <th>Sexo</th>
    		<th>Encargado</th>
    		<th>Uso</th>
            <th>Opciones</th>
 	</tr>
    </thead>
    <thead>
    	<tbody>
    		@foreach($proyectos as $p)
    		<tr>
    			<td>{{$p->id}}</td>
    			<td>{{$p->descripcion}}</td>
    			<td>{{$p->fecha_inicio}}</td>
    			<td>{{$p->fecha_entrega}}</td> 
                <td>
                    @if($p->sexo==0)
                    <span class="label label-default">Hombre</span>
                    @elseif($p->sexo==1)
                    <span class="label label-primary">Mujer</span>
                    @endif
                </td> 
    			<td>{{$p->nombre}}</td>
    			<td>
    				@if($p->uso==0)
    				<span class="label label-default">Hogar</span>
    				@elseif($p->uso==1)
    				<span class="label label-primary">Tienda</span>
    				@elseif($p->uso==2)
    				<span class="label label-success">Empresa</span>
    				@endif
    			</td>
    		
    			<td>
                    <a href="{{url('/send')}}/{{$p->id}}" class="btn btn-xs btn-success">
                        <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                    </a>
    				<a href="{{url('/editarProyecto')}}/{{$p->id}}" class="btn btn-xs btn-primary">
    					<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
    				</a>
    				<a href="{{url('/eliminarProyecto')}}/{{$p->id}}" class="btn btn-xs btn-danger">
    					<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
    				</a>
                 
                   
    			</td>
    		</tr>
    		@endforeach
    	</tbody>
    </thead>
	
</table>
<script type="text/javascript">
        setTimeout(function(){
            $(".alert").fadeOut(1500);

        },1500);
         </script>

@stop