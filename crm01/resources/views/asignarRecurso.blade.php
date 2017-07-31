@extends('master')

@section('contenido')
   <h2>Proyecto: {{$proyecto->descripcion}}</h2>
   <form action="{{url('/guardarAsignacion')}}/{{$proyecto->id}}" method="POST">
   <input id="token" type="hidden" name="_token" value="{{csrf_token() }}" type="text">
   <div class="form-group">
          <select name="descripcion" class="form-control" id="">
          <option value="0">{{$proyecto->descripcion}}</option>q
        </select><br>
        <select name="recurso_id" class="form-control" id="">

          @foreach($recursosNoAsignados as $r)
          <option value="{{$r->id}}">{{$r->nombre}}</option>
          @endforeach
        </select><br>
            @foreach($recursosNoAsignados as $r)
          <option value="{{$r->id}}">{{$r->nombre}}</option>
          @endforeach
        </select><br>
        <button  type="submit" class="btn- btn-primary">Asignar</button>  
   </div>
   </form>
   @include('flash::message')
   <div class="row">
    <div class="col-xs-12">
    <h3>Lista De recursos Asignados</h3>
    <br>
        <table class="table table-striped">
        <thead>
          <tr>
            <th>Correo</th>
            <th>Eliminar</th>
          </tr>
        </thead>
        <tbody>
          @foreach($recursosAsignados as $ra)
          <tr>
            <td>{{$ra->nombre}}</td>
            <td>
              <a href="{{url('/eliminarAsignacion')}}/{{$ra->id}}/{{$proyecto->id}}" class="btn btn-xs btn-danger">
                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
              </a>
            </td>
          </tr>
          @endforeach
        </tbody>
          
        </table>
      
    </div>
   </div>
   <script type="text/javascript">
        setTimeout(function(){
          $(".alert").fadeOut(1500);

        },1500);
    
   </script>

@stop