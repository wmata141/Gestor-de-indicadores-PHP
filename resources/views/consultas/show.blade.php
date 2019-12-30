@extends('adminlte::page')
@section('title' , 'Enfermeria')



@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 " >
            <h4 style= "text-align:center;">GERENCIA SSHA - SALUD OCUPACIONAL</h4>

            
            <div class="panel panel-default">
                <div class="panel-heading" style= "background-color:SkyBlue;">CONSULTAS REALIZADAS</div>

                

<div class="center">
<div style="overflow-x:auto;">
        <table id="table" class="table table-bordered table-hover dataTable" role="grid" >
            <thead>
            <tr>
                <th>Codigo</th>
                <th>Ficha</th>
                <th>Nombre y Apellido</th>
                <th>Motivo</th>
                <th>Fecha</th>
                <th></th>
                
                 <!--<th>Operacion</th>-->
            </tr>
            </thead>
            <tbody>

            @foreach($consultas as $consulta)<!-- ciclo que tiene una lista de trabajadores y por cada fila llena cada atributo del trabajador-->
           
                             
                    <tr>
                        <td class="warning">{{$consulta->id}}</td>
                        <td >{{$consulta->id_trabajador}} </td>
                        <td >{{$consulta->nombre}} {{$consulta->apellido}} </td>
                        <td >{{$consulta->motivo}} </td>      
                        <td >{{$consulta->created_at}} </td>
                            
                        <td>
                            <a href="{{ route('consulta.show', $consulta->id ) }}" class="btn btn-success">Ver detalles</a>
                           
                           
                         <!--   
                             -->
                        </td>
                        
                    </tr>
                    
                    </div>

                       
                    @endforeach
                    </tbody>

        </table>
        
    </div>
    
                
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="myModalLabel">Agregar resultados</h4>
      </div>
      <form action="{{route('examenes.update','test')}}" method="post">
            {{method_field('patch')}}
            {{csrf_field()}}
          <div class="modal-body">
                <input type="hidden" name="category_id" id="cat_id" value="">
                 <div class="form-group">
                    <label for="title">resultado de laboratorio</label>
                    <input type="text" class="form-control " name="res_laboratorio" id="res_laboratorio">
                </div>
                <div class="form-group">
                    <label for="title">resultado de rayos X</label>
                    <input type="text" class="form-control " name="res_rayosx" id="res_rayosx">
                </div>
                <div class="form-group">
                    <label for="title">resultado de examen visual</label>
                    <input type="text" class="form-control " name="res_visual" id="res_visual">
                </div>
                <div class="form-group">
                    <label for="title">resultado de examen auditivo</label>
                    <input type="text" class="form-control " name="res_audio" id="res_audio">
                </div>
                <div class="form-group">
                    <label for="title">resultado de examen medico</label>
                    <input type="text" class="form-control " name="res_exa_med" id="res_exa_med">
                </div>
                <div class="form-group">
                    <label for="title">consultorio</label>
                    <input type="text" class="form-control " name="consultorio" id="consultorio">
                </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
      </form>
    </div>
  </div>
</div>


@endsection

@section('js')
    <script src="{{asset('js/dataTable.js')}}"></script>

@endsection
