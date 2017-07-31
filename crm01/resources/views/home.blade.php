@extends('master')

@section('contenido')
@include('flash::message')

<div class="jumbotron">
  <h1>Syscom </h1>
  <h2>Todo en Sistemas de Emergencia, Seguridad y comunicacion
</h2>
  <img src="img/camara1.jpg">
  <p>eres nuevo?  que esperas registrate</p>
  <p><a href="{{url('/registrarRecursos')}}" class="btn btn-primary btn-lg">registrate</a></p>
</div>
<script type="text/javascript">
        setTimeout(function(){
        	$(".alert").fadeOut(1500);

        },1500);
 </script>
@stop

