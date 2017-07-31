@extends('master')

@section('contenido')
<table class="table table-hover">
@include('flash::message')
    <thead>
        <tr>
            <th>ID</th>
            <th>nombre</th>
            <th>e-mail</th>
            <th>edad</th>
            <th>Sexo</th>
            <th>pais</th>
            <th>estado</th>                        
            <th>Uso</th>
            <th>Msn</th>
            <th>Opciones</th>
    </tr>
    </thead>
    <thead>
        <tbody>
            @foreach($recursos as $r)
            <tr>
                <td>{{$r->id}}</td>
                <td>{{$r->nombre}}</td>
                <td>{{$r->correo}}</td>
                <td>{{$r->edad}}</td>
                <td>
                    @if($r->sexo==0)
                    <span class="label label-default">Hombre</span>
                    @elseif($r->sexo==1)
                    <span class="label label-primary">Mujer</span>
                    @endif
                </td> 
                <td>{{$r->pais}}</td>
                <td>{{$r->estado}}</td>
                <td>
                    @if($r->uso==0)
                    <span class="label label-default">Hogar</span>
                    @elseif($r->uso==1)
                    <span class="label label-primary">Tienda</span>
                    @elseif($r->uso==2)
                    <span class="label label-success">Empresa</span>
                    @endif
                </td>  
                <td>{{$r->descripcion}}</td>
                <td>
                    @if($r->descripcion==0)
                    <span class="label label-default"></span>
                    
                    @endif
                </td>
            <td>
                    <a href="{{url('/editarRecurso')}}/{{$r->id}}" class="btn btn-xs btn-primary">
                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>
                    <a href="{{url('/eliminarRecurso')}}/{{$r->id}}" class="btn btn-xs btn-danger">
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