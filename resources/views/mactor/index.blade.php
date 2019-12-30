@extends('adminlte::page')
@section('content')

 
<div class="container">
    <div class="row">

        <div class="col-md-10  " >
            <h4 style= "text-align:center;">INDICADORES DE GESTION</h4>
                <div class="col-md-6" >
                    
                </div> 

            <div class="panel panel-default" style="margin-top:60px">
                <div class="panel-heading" style= "background-color:SkyBlue;">PROYECTOS MACTOR</div>

                


<div class="center">
<div style="overflow-x:auto;">
 <table id="table" class="table table-bordered table-hover dataTable" role="grid" >
             <thead>
            <tr>
                <th>N°</th>
                <th>ACTOR</th>
                <th>INFLUENCIA</th>
                <th>DEPENDENCIA</th>
                <th>OBJETIVOS</th>
                
               <!--<th>Operacion</th>-->
            </tr>
            </thead>
            <tbody>
          
            <tr>
                <td > 1</td>
                <td >  nombre</td>
                <td > <button class="btn btn-default" data-toggle="modal" data-target="#i" >Detalles</button></td>
                <td>  <button class="btn btn-default" data-toggle="modal" data-target="#d">Detalles</button></td>
                <td><button class="btn btn-default" data-toggle="modal" data-target="#o">Detalles</button></td>

                
            </tr>

                
            
            </tbody>
        </table>
    </div>
    


            </div>
        </div>

         <a  class="btn btn-danger" onclick="mostrar3()">Listado de objetivos</a>
        <a  class="btn btn-warning" onclick="mostrar1()">Graficas de actores</a>

        <div id="oculto3"  style="display:none;">
                <div class="panel panel-default" style="margin-top:60px">
                   

                        <div class="center">
                            <h4 style= "text-align:center;">LISTADO DE OBJETIVOS</h4> 
                            <div style="overflow-x:auto;">
                                <table id="table" class="table table-bordered table-hover dataTable" role="grid" >
                                    
                                        <tr>
                                            <th>Nombre Objetivo</th>
                                            <th>DESCRIPCION</th>
                                           
                                        </tr>

                                         <tr>
                                            <th></th>
                                            <th> </th>
                                           
                                        </tr>
                                       
                                    

                                    
                                </table>
                                
                            </div>
                        </div>
                </div>
            </div>

            <div id="oculto1"  style="display:none;">
                            <div class="panel panel-default" style="margin-top:60px">
                               

                                    <div class="center">
                                        <h4 style= "text-align:center;">TIPO DE ACTORES</h4> 
                                        <div style="overflow-x:auto;">
                                            <table id="table" class="table table-bordered table-hover dataTable" role="grid" >
                                    <thead>
                                        <tr>
                                            <th><img src="{{URL::asset('imagenes/barra.png')}}" width="300"></th>
                                            <th width="500">LEYENDA
                                                <p>Actores dominantes:</p>
                                                <p>Actores de enlace:</p>
                                                <p>Actores autonomos:</p>
                                                <p>Actores dominados</p>
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


<div class="modal fade" id="i" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
             <div class="panel panel-default" style="margin-top:60px">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div> 

                <div class="panel-heading" style= "background-color:SkyBlue; text-align:center">NOMBRE DEL ACTOR</div>

                    <table id="table" class="table table-bordered table-hover dataTable" role="grid" >
                                    <thead>
                                        <tr>
                                            <th>GRADOS</th>
                                            <th>ACTORES</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                              
                                    <tr>
                                        <td>0</td>
                                        <td> </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td></td>
                                    </tr>
                               
                                    </tbody>
                                    
                                </table>

                                <br>
                                <div class="panel-heading" style= "background-color:SkyBlue; text-align:center">GRAFICAS</div>
                                <table id="table" class="table table-bordered table-hover dataTable" role="grid" >
                                    <thead>
                                        <tr>
                                            <th><img src="{{URL::asset('imagenes/grafica.png')}}" width="300"></th>
                                            <th width="400">LEYENDA
                                                <p>0 Sin influencia:</p>
                                                <p>1 Influencia operativa:</p>
                                                <p>2 Influencia en proyecto:</p>
                                                <p>3 Influencia en mision:</p>
                                                <p>4 Influencia de existencia:</p>
                                            </th>
                                           
                                        </tr>

                                         
                                       
                                    </thead>

                                    
                                </table>
                
            </div>        
                   

        </div>
    </div>
</div>


<div class="modal fade" id="d" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
             <div class="panel panel-default" style="margin-top:60px">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div> 

                <div class="panel-heading" style= "background-color:SkyBlue; text-align:center">NOMBRE DEL ACTOR</div>

                    <table id="table" class="table table-bordered table-hover dataTable" role="grid" >
                                    <thead>
                                        <tr>
                                            <th>GRADOS</th>
                                            <th>ACTORES</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                              
                                    <tr>
                                        <td>0</td>
                                        <td> </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td></td>
                                    </tr>
                               
                                    </tbody>
                                    
                                </table>

                                <br>
                                <div class="panel-heading" style= "background-color:SkyBlue; text-align:center">GRAFICAS</div>
                                <table id="table" class="table table-bordered table-hover dataTable" role="grid" >
                                    <thead>
                                        <tr>
                                            <th><img src="{{URL::asset('imagenes/grafica.png')}}" width="300"></th>
                                            <th width="400">LEYENDA
                                                <p>0 Sin dependencia:</p>
                                                <p>1 Dependencia operativa:</p>
                                                <p>2 Dependencia en proyecto:</p>
                                                <p>3 Dependencia en mision:</p>
                                                <p>4 Dependencia de existencia:</p>
                                            </th>
                                           
                                        </tr>

                                         
                                       
                                    </thead>

                                    
                                </table>
                
            </div>        
                   

        </div>
    </div>
</div>



<div class="modal fade" id="o" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
             <div class="panel panel-default" style="margin-top:60px">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div> 

                <div class="panel-heading" style= "background-color:SkyBlue; text-align:center">NOMBRE DEL ACTOR</div>

                    <table id="table" class="table table-bordered table-hover dataTable" role="grid" >
                                    <thead>
                                        <tr>
                                            <th>GRADOS</th>
                                            <th>ACTORES</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                              
                                    <tr>
                                        <td>0</td>
                                        <td> </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td></td>
                                    </tr>
                               
                                    </tbody>
                                    
                                </table>

                                <br>
                                <div class="panel-heading" style= "background-color:SkyBlue; text-align:center">GRAFICAS</div>
                                <table id="table" class="table table-bordered table-hover dataTable" role="grid" >
                                    <thead>
                                        <tr>
                                            <th><img src="{{URL::asset('imagenes/grafica.png')}}" width="300"></th>
                                            <th width="400">LEYENDA
                                                <p>0 Poca o ninguna incidencia:</p>
                                                <p>1 Imprescindible operativa:</p>
                                                <p>2 Imprescindible en proyecto:</p>
                                                <p>3 Imprescindible en mision:</p>
                                                <p>4 Imprescindible para existencia:</p>
                                            </th>
                                           
                                        </tr>

                                         
                                       
                                    </thead>

                                    
                                </table>
                
            </div>        
                   

        </div>
    </div>
</div>
@endsection