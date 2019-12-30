@extends('adminlte::page')
@section('content')

 
<div class="container">
    <div class="row">

        <div class="col-md-10  " >
            <h4 style= "text-align:center;">INDICADORES DE GESTION</h4>
         

            <div class="panel panel-default" style="margin-top:60px">
                <div class="panel-heading" style= "background-color:SkyBlue;">PROYECTO 1
                </div>

                    <div class="center">
                        <div style="overflow-x:auto;">
                            <table id="table" class="table table-bordered table-hover dataTable" role="grid" >
                                <thead>
                                    <tr>
                                        <th>N°</th>
                                        <th>VARIABLE CLAVE</th>
                                        <th>% INFLUENCIA</th>
                                        <th>% DEPENDENCIA</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td > </td>
                                        <td >  </td>
                                        <td >  </td>
                                        <td >  </td>
                                        <td>   <a href="{{ route('micmac.create') }}" class="btn btn-success" data-toggle="modal" data-target="#recipe">Detalles</a></td>   
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
            </div>

                  <h4 style= "text-align:left;">NUMERO TOTAL DE VARIABLES: </h4>
                  <br>
                  <a  class="btn btn-danger" onclick="mostrar3()">Listado total de variables</a>
                   <a  class="btn btn-warning" onclick="mostrar1()">Gráficas de indicadores</a>

            <div id="oculto3"  style="display:none;">
                <div class="panel panel-default" style="margin-top:60px">
                    <div class="panel-heading" style= "background-color:SkyBlue;">PROYECTO 1
                    </div>

                        <div class="center">
                            <div style="overflow-x:auto;">
                                <table id="table" class="table table-bordered table-hover dataTable" role="grid" >
                                    <thead>
                                        <tr>
                                            <th>N°</th>
                                            <th>VARIABLE CLAVE</th>
                                            <th>% INFLUENCIA</th>
                                            <th>% DEPENDENCIA</th>
                                            <th>Zona I/D</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td > </td>
                                            <td >  </td>
                                            <td >  </td>
                                            <td >  </td>
                                            <th >  </th>
                                            <td>   <a data-toggle="modal" data-target="#recipe" class="btn btn-success">Detalles</a></td>   
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                </div>
            </div>



            <div id="oculto1"  style="display:none;">
                <div class="panel panel-default" style="margin-top:60px">
                   

                        <div class="center">
                            <h4 style= "text-align:center;">INDICADOR DE MOTRICIDAD/DEPENDENCIA</h4> 
                            <div style="overflow-x:auto;">
                                <table id="table" class="table table-bordered table-hover dataTable" role="grid" >
                                    <thead>
                                        <tr>
                                            <th><img src="{{URL::asset('imagenes/images.png')}}" width="300"></th>
                                            <th width="500">LEYENDA
                                                <p>Variables totales:</p>
                                                <p>Variables claves:</p>
                                                <p>Porcentaje:</p>
                                            </th>
                                           
                                        </tr>

                                         <tr>
                                            <th><img src="{{URL::asset('imagenes/grafica.png')}}" width="300"></th>
                                            <th width="500">LEYENDA
                                                <p>Variables determinantes:</p>
                                                <p>Variables peloton:</p>
                                                <p>Variables autonomas:</p>
                                                <p>Variables resultado:</p>
                                                <p>Variables de enlace:</p>
                                            </th>
                                           
                                        </tr>
                                       
                                    </thead>

                                    
                                </table>
                                
                            </div>
                        </div>
                </div>
            </div>

        </div>
    </div>





<div class="modal fade" id="recipe" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
             <div class="panel panel-default" style="margin-top:60px">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div> 

                <h4 style= "text-align:center;">NOMBRE DE VARIABLE</h4> 

                <H5>Descripcion: qui dolorem ipsum, quia dolor sit amet consectetur adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem</H5> 
                
                    <img src="{{URL::asset('imagenes/grafica.png')}}" width="40%"  >
                    <h5 style= "text-align:center">% influencia</h5> 
                    <h5 style= "text-align:center">% dependencia</h5> 
                    
                
            </div>        
                   

        </div>
    </div>
</div>


@endsection