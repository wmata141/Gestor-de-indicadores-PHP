@extends('adminlte::page')
@section('title' , 'Enfermeria')



@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-11 " >
            <h4 style= "text-align:center;">GERENCIA SSST - SALUD OCUPACIONAL</h4>

            <div class="panel panel-default">
                <div class="panel-heading" style= "background-color:SkyBlue;">CONSULTAS REALIZADAS</div>

                

<div class="center">
<div style="overflow-x:auto;">


         <table id="table" class="table table-bordered table-hover dataTable" role="grid" >
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Ficha</th>
                <th>Nombre</th>
                <th>Apellido</th>
               
                <th></th>
                
                 <!--<th>Operacion</th>-->
            </tr>
            </thead>
            <tbody>

            @foreach($consultas as $consulta)<!-- ciclo que tiene una lista de trabajadores y por cada fila llena cada atributo del trabajador-->
           
              
                    

                        @if ($x<> $consulta->id_trabajador  )


                                              
                                <tr>
                                    <td class="warning">{{$consulta->id}}</td>
                                    <td >{{$consulta->id_trabajador}} </td>
                                    <td >{{$consulta->nombre}} </td>
                                    <td >{{$consulta->apellido}} </td>       
                                         
                                    
                                    <td>
                                        <a href="{{ route('consultas.show', $consulta->id_trabajador) }}" class="btn btn-success">Ver Consultas</a>
                                              
                                    <?php $x=$consulta->id_trabajador ?>
                                    </td>
                                    
                                </tr>
                                
                                </div>

                                    <!--pendiente REVISAR RUTA-->
                                    {{--{!! link_to_route('usuario.edit', $title = 'Editar', $user->id, $attributes = ['class'=>'btn btn-primary']) !!}--}}
                               
                       

                    @endif



                    @endforeach
                    </tbody>



            

        </table>
        
    </div>
    






                
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script src="{{asset('js/dataTable.js')}}"></script>

@endsection


