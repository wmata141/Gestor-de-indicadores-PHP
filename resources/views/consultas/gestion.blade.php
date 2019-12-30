@extends('adminlte::page')
@section('title' , 'Enfermeria')



@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 " style=" margin-left: 90px;" >
            <h4 style= "text-align:center;">GERENCIA SSHA - SALUD OCUPACIONAL</h4>

            
                    
                 
            <br>
            <div class="panel panel-default ">
                <div class="panel-heading" style= "background-color:SkyBlue; text-align:center;">
                    <h4> GESTION DE CONSULTA MEDICA</h4>
                </div>

                
                    <div class="center">
                        <div style="overflow-x:auto;">
                            <table class="table responsive-table hover striped centered bordered col-md-10" cellspacing="0"  style= "text-align: center">
                                <thead>
                                    <tr >
                                    <br>
                                        <th style= "text-align: center">
                                            <a  class="btn btn-success" style='width:300px; height:100px ' data-toggle="modal" data-target="#myModal"><h2>CONSULTA</h2></a>
                                        </th>

                                        <th style= "text-align: center">
                                            <a  class="btn btn-info" style='width:300px; height:100px' data-toggle="modal" data-target="#recipe"><h2>RECIPE</h2></a>
                                        </th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td >
                                        <a  class="btn btn-info" style='width:300px; height:100px' data-toggle="modal" data-target="#reposo" ><h2>REPOSO</h2></a>
                                        </td>
                                        <td >
                                        <a  class="btn btn-success" style='width:300px; height:100px' href="/examenes"><h2>EXAMENES</h2></a>
                                         </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                
            </div>
        </div>
    </div>
</div>
 

            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <center>
                                <input class="btn btn-success" type="button" onclick="printDiv('areaImprimirConsulta')" value="IMPRIMIR CONSULTA" /> 
                                
                            </center>

                        </div>


                        <div id="areaImprimirConsulta">
                        <div class="panel panel-default">

                            <div class="row">
                                <center>
                                <img src="{{URL::asset('imagenes/LOGO10.JPG')}}" width="60%" height="15%"  >
                                </center>
                                <br>
                            </div>

                            <div class="panel-body">
                   
                                <div class="box box-primary">
                                    <div class="col-xs-10" style="margin:20px 20px 20px 0px"> <br>
                                        <label for="ficha">DATOS DEL PACIENTE</label><br>
                                    </div>
                
                                    <div class="box-body">
                    
                                        <div class="row">
                                            <div class="col-xs-2"> 
                                                <label for="ficha">FICHA</label><br>
                                                <h4>{{$consulta->id_trabajador}}</h4>
                                            </div>

                                            <div class="col-xs-3">
                                                <label for="nombre">NOMBRE</label><br>
                                                <h4>{{$consulta->nombre}}</h4> 
                                            </div>

                                            <div class="col-xs-3">
                                              <label for="apellido">APELLIDO</label><br>
                                              <h4>{{$consulta->apellido}}</h4>
                                            </div>

                                            <div class="col-xs-4">
                                              <label for="motivo">MOTIVO DE CONSULTA</label> <br>
                                              <h4>{{$consulta->motivo}}</h4>
                                            </div>
                                        </div>                       
                                    </div>
                                    <br>

                                    <div class="col xs-12">
                                        <label for="situacion">SITUACION ACTUAL</label>
                                    </div>
                                    
                                    <div class="col-xs-12">
                                      <h4>{{$consulta->situacion_actual}}</h4><br>
                                    </div>

                                    <div class="col xs-12">
                                        <label for="antecedentes">ANTECEDENTES DE IMPORTANCIA</label>
                                    </div>
                                    
                                    <div class="col-xs-12">
                                        <h4>{{$consulta->antecedentes}}</h4><br>
                                    </div>

                                    <div class="col xs-12">
                                        <label for="exploracion">EXPLORACION FISICA</label>
                                    </div>

                                  <div class="box-body">
                                      <div class="row">
                                            <div class="col-xs-2"> <center>TA
                                              <h4>{{$consulta->ta}}</h4></center>
                                            </div>
                                            <div class="col-xs-2"> <center>mmHg</center>
                                                <center><h4>{{$consulta->mm}}</h4></center>
                                            </div>
                                            <div class="col-xs-2">  <center>FC ipm</center>
                                                <center><h4>{{$consulta->fc}}</h4></center>
                                            </div>
                                            <div class="col-xs-2"> <center>FR rpm</center>
                                                <center><h4>{{$consulta->rp}}</h4></center>
                                            </div>
                                            <div class="col-xs-2"> <center>PESO</center>
                                                <center><h4>{{$consulta->peso}}</h4></center> 
                                            </div>
                                            <div class="col-xs-2"> <center>TALLA cm</center>
                                                <center><h4>{{$consulta->talla}}</h4></center>
                                            </div>
                                            <div class="col-xs-2"> <center>IMC %</center>
                                                <center><h4>{{$consulta->imc}}</h4></center>
                                            </div>
                                      </div>
                                  </div>


                                    <div class="col xs-12">
                                        <label for="hallazgos">HALLAZGOS POSITIVOS AL EXAMEN FISICO</label>
                                    </div>
                                    <div class="col-xs-12">
                                        <h4>{{$consulta->hallazgo}}</h4><br>
                                    </div>

                                    <table class="table table-bordered responsive-table hover striped centered bordered" cellspacing="0" width="250%">
                                     
                                            <tr  valign="middle">
                                                <td class="success" for="impresiones" style="font-size: 14px; font-weight: bold;">IMPRESIONES DIAGNOSTICAS</td>
                                                <td class="success" for="plan" style="font-size: 14px; font-weight: bold;">PLAN DE TRATAMIENTO</td>
                                            
                                            </tr>

                                            <tr  valign="middle">
                                                <td class="danger"><p style="font-size: 14px;">{{$consulta->impresiones}}</p> </td>
                                                <td class="danger">
                                                    <p style="font-size: 14px;">{{$consulta->plan_tratamiento}}</p>
                                                    @if ($consulta->plan_tratamiento1 <> "")
                                                    <p style="font-size: 14px;">{{$consulta->plan_tratamiento1}}</p>
                                                    @endif
                                                    @if ($consulta->plan_tratamiento2 <> "")
                                                    <p style="font-size: 14px;">{{$consulta->plan_tratamiento2}}</p>
                                                    @endif
                                                </td>
                                            </tr>
                                            
                                            @if ($consulta->impresiones2 <> "")
                                            <tr  valign="middle">
                                                <td class="success"><p style="font-size: 14px;">{{$consulta->impresiones2}}</p> 
                                                <td class="success">
                                                   <p style="font-size: 14px;">{{$consulta->plan_tratamiento3}}</p>
                                                   @if ($consulta->plan_tratamiento4 <> "") 
                                                        <p style="font-size: 14px;">{{$consulta->plan_tratamiento4}}</p>
                                                   @endif
                                                    @if ($consulta->plan_tratamiento5 <> "")
                                                        <p style="font-size: 14px;">{{$consulta->plan_tratamiento5}}</p>
                                                   @endif
                                                </td> 
                                            </td>
                                            </tr>
                                            @endif
                                            
                                            @if ($consulta->impresiones3 <> "")
                                                   <tr>
                                                       <td class="danger"><p style="font-size: 14px;">{{$consulta->impresiones3}}</p> </td>
                                                       <td class="danger">
                                                            <p style="font-size: 14px;">{{$consulta->plan_tratamiento6}}</p>
                                                            @if ($consulta->plan_tratamiento7 <> "")
                                                            <p style="font-size: 14px;">{{$consulta->plan_tratamiento7}}</p>
                                                            @endif
                                                            @if ($consulta->plan_tratamiento8 <> "")
                                                            <p style="font-size: 14px;">{{$consulta->plan_tratamiento8}}</p>
                                                            @endif
                                                       </td>
                                                     </tr>
                                            @endif
                                    </table>
                    

                                    <div class="col xs-12">
                                        <label for="sugerencias">SUGERENCIAS</label>
                                    </div>
                                    <div class="col-xs-12">
                                        <h4>{{$consulta->sugerencias}}</h4><br>
                                    </div>

                                    @if ($consulta->reposo_ini <> "")
                                        <h4 style="font-weight: bold;">REPOSO</h4>
                                        <H4 >DIAS: {{$consulta->dias}}</H4>
                                        <h4>Inicio de reposo : {{$consulta->reposo_ini}}</h4>
                                        <h4>Fin de reposo : {{$consulta->reposo_fin}}</h4>
                                    @endif

                                    @if ($consulta->referido<> "")
                                        <h4 style="font-weight: bold;">REFERIDO</h4>
                                        <h4>Especialista : {{$consulta->referido}}</h4>
                                        <h4>Motivo : {{$consulta->motivo2}}</h4>
                                    @endif

                                    <table class="table responsive-table hover striped centered bordered" cellspacing="0" width="250%">
                                      
                                        <tr style="text-align:center;">
                                            <td> <h4>firma del trabajador</h4> </td>
                                            <td> <h4>firma medico ocupacional</h4></td>
                                        </tr>

                                        <tr>
                                            <td> <h4></h4> </td>
                                            <td> <h4></h4> </td>
                                        </tr>
                                            
                                        <tr style="text-align:center;">
                                            <td> <h4>__________________________</h4> </td>
                                            <td> <h4>__________________________</h4> </td>
                                        </tr><br>
                                    </table>

                                    <br><br><br>
                    

                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="modal fade" id="examenes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    
                         <div id="areaImprimirOrden">
                        <form id="create-form" method="POST" action="" >
                         {{ csrf_field() }}
                            <table class="table responsive-table hover striped centered bordered" cellspacing="2" width="250%" >                                  
                                <tbody>                       
                                        <tr style="text-align:center;">
                                            <td style="padding: 0px;"> <p style=" font-weight: bold; padding: 0px; font-size: 15px;">DATOS DEL TRABAJADOR</p> </td>
                                        </tr>
                                        <tr >
                                            <td style="padding: 0px; "> <p style="font-size: 14px;">NOMBRE Y APELLIDO: {{$consulta->nombre}} {{$consulta->apellido}} </p></td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 0px; "> <p style="font-size: 14px;">CEDULA DE IDENTIDAD : {{$consulta->cedula}}   </p> </td>
                                         </tr>
                                        <tr>
                                            <td style="padding: 0px; "> <p style="font-size: 14px; font-weight: bold;">LABORATORIO   <input type="checkbox" id="laboratorio" value="laboratorio"> </p></td>
                                        </tr>
                                         <tr>
                                            <td style="padding: 0px; "> <p style="font-size: 14px; font-weight: bold;">RAYOS x DE TORAX <input type="checkbox" id="rayos" value="rayos"> </p></td>
                                        </tr>
                                         <tr>
                                            <td style="padding: 0px; "><p style="font-size: 14x; font-weight: bold;">EXAMEN VISUAL - ELECTROCARDIOGRAMA <input type="checkbox" id="visual" value="visual"> </p></td>
                                        </tr>
                                         <tr>
                                            <td style="padding: 0px; "><p style="font-size: 14px; font-weight: bold;">AUDIOMETRIA - ESPIROMETRIA <input type="checkbox" id="audio" value="audio"> </p></td>
                                        </tr>
                                         <tr>
                                            <td style="padding: 0px; "><p style="font-size: 14px; font-weight: bold;">EXAMEN MEDICO <input type="checkbox" id="exa_med" value="exam_med"> </p></td>
                                        </tr>
                                         <tr>
                                            <td style="padding: 0px; "><p style="font-size: 14px; font-weight: bold;">CONSULTORIO N° <input type="text" id="consultorio" > </p> </td>
                                        </tr>            
                                </tbody>
                            </table>
                            </form>
                        </div>

                            <center>
                                 <button  type="submit" class="btn btn-primary" name="action">GUARDAR</button>
                                <input class="btn btn-success" type="button" onclick="printDiv('areaImprimirOrden')" value="IMPRIMIR ORDEN" /> 
                                
                            </center>
                            <br>
                </div>
              </div>
            </div>
        



            <div class="modal fade" id="reposo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    
                  </div>
                    <div id="areaImprimirReposo">

                        <div class="modal-body">
                            

                            <div class="row">
                                        <center><img src="{{URL::asset('imagenes/LOGO2.JPG')}}" width="40%" height="20%"  > </center>
                                            <br>
                                        <h4 style="text-align:center; "> REPOSO MEDICO DE EMPRESA</h4> 
                                            <br>

                                        <div class="col-md-11" style=" margin-left: 10px; ">
                                             <h4 style="  line-height:30px;"> 
                                                <div class="col-xs-5">  <label>Trabajador(a): </label> {{ $consultas->nombre}} {{ $consultas->apellido}} </div>
                                                <div class="col-xs-2"> <label>Edad: </label>{{ $consultas->edad}}   </div>
                                                <div class="col-xs-3"> <label>C.I: </label>{{ $consultas->cedula}} </div>
                                                 <div class="col-xs-2"> <label> Ficha:</label>{{ $consultas->id_trabajador}} </div>
                                             </h4>
                                        </div>
                                            
                                        <div class="col-xs-12" style=" margin-left: 30px; line-height:30px;">
                                             <h4 style="  line-height:30px;"><label>Sintomas: </label>{{$consultas->situacion_actual}}</h4>
                                        </div>
                                        <div class="col-xs-12" style=" margin-left: 30px; line-height:30px;">
                                             <h4 style="  line-height:30px;"><label>Diagnostico: </label>{{$consultas->impresiones}}, {{$consultas->impresiones2}}, {{$consultas->impresiones3}}</h4>
                                        </div>
                                        <div class="col-xs-12" style=" margin-left: 30px; line-height:30px;"> 
                                             <h4 style="  line-height:30px;"><label>Dias de Reposo: {{$consultas->dias}}</label></h4>
                                        </div>
                                        <div class="col-xs-12" style=" margin-left: 30px; line-height:30px;">     
                                             <h4 style="  line-height:50px;"><label>Periodo.  inicio: </label>{{$consultas->reposo_ini}} , <label>Reintegro : </label>{{$consultas->reposo_fin}} </h4>                                            </div>
                                        </div>

                                      <table class="table responsive-table hover striped centered bordered" cellspacing="0" width="250%">
                                      
                                      <tr style="text-align:center;">
                                        <td> <h4>firma del trabajador</h4> </td>
                                        <td> <h4>firma medico ocupacional</h4></td>
                                    </tr>

                                    <tr>
                                      <td> <h4></h4> </td>
                                      <td> <h4></h4> </td>
                                    </tr>
                                        
                                    <tr style="text-align:center;">
                                        <td> <h4>__________________________</h4> </td>
                                        <td> <h4>__________________________</h4> </td>
                                    </tr><br>
                                    </table>

                                    <br><br><br>     

                            </div>
                        </div>

                                <center>
                                    <input class="btn btn-success" type="button" onclick="printDiv('areaImprimirReposo')" value="IMPRIMIR ORDEN" /> 
                                </center> <br>
                    </div>
                </div>
              </div>
            </div> 




            <div class="modal fade" id="recipe" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    
                  </div>
                    
                    <div id="areaImprimir">
                        
                        <table class="table responsive-table hover striped centered bordered" cellspacing="0" width="250%" >
                                
                                <thead>
                                        <tr>
                                            <th>    <div class="row">
                                                        <center><img src="{{URL::asset('imagenes/LOGO2.JPG')}}" width="80%" height="30%"  > </center>
                                                    <br>
                                                    </div>
                                            </th>
                                            
                                            <th>    <div class="row">
                                                    <center> <img src="{{URL::asset('imagenes/LOGO2.JPG')}}" width="80%" height="30%"  >  </center>
                                                    <br>
                                                    </div>
                                            </th>

                                        </tr>
                                </thead>
                                <tbody>
                                        
                                        <tr style="text-align:center;">
                                            <td> <h4>RECIPE</h4> </td>
                                            <td> <h4>INDICACIONES MEDICAS </h4></td>

                                        </tr>

                                        <tr HEIGHT="100px">
                                            <td> <h4>{{$consultas->plan_tratamiento}}</h4></td>

                                             @foreach($plan_tratamientox as $tra)

                                             @if($consultas->plan_tratamiento == $tra->nombre . " ". $tra->dosis )

                                                <td> 
                                                    <h5> Nombre: {{$tra->nombre}} </h5> <h5> Dosis:  {{$tra->dosis}} </h5> <h5>Indicacion: {{$tra->indicacion}}</h5> 
                                                </td>
                                            @endif
                                            @endforeach

                                        </tr>

                                       <tr HEIGHT="100px">
                                            <td> <h4>{{$consultas->plan_tratamiento2}}</h4></td>

                                             @foreach($plan_tratamientox as $tra)

                                             @if($consultas->plan_tratamiento2 == $tra->nombre . " ". $tra->dosis )

                                                <td> 
                                                <h5> Nombre: {{$tra->nombre}} </h5> <h5> Dosis:  {{$tra->dosis}} </h5> <h5>Indicacion: {{$tra->indicacion}}</h5> 
                                                </td>
                                            @endif
                                            @endforeach

                                        </tr>

                                        <tr HEIGHT="100px">
                                            <td> <h4>{{$consultas->plan_tratamiento3}}</h4></td>

                                             @foreach($plan_tratamientox as $tra)

                                             @if($consultas->plan_tratamiento3 == $tra->nombre . " ". $tra->dosis )

                                                <td> 
                                                    <h5> Nombre: {{$tra->nombre}} </h5> <h5> Dosis:  {{$tra->dosis}} </h5> <h5>Indicacion: {{$tra->indicacion}}</h5> 
                                                </td>
                                            @endif
                                            @endforeach

                                        </tr>

                                        <tr style="text-align:center;">
                                            <td> <h4>firma del trabajador</h4> 
                                             <h4>______________________</h4> </td>
                                        
                                            <td> <h4>firma medico ocupacional</h4>
                                             <h4>______________________</h4> </td>
                                        </tr><br>

                                        
                                </tbody>
                        </table>

                    </div>
                        <center>
                        <input class="btn btn-success" type="button" onclick="printDiv('areaImprimir')" value="IMPRIMIR RECIPE" /> 
                        
                        </center>
                        <br>

                </div>
              </div>
            </div>





@endsection

<script language="Javascript">
  

  function printDiv(areaImprimir) {
     var contenido= document.getElementById(areaImprimir).innerHTML;
     var contenidoOriginal= document.body.innerHTML;
     
     document.body.innerHTML = contenido;

     }
     </script>
<script language="Javascript">

    function printDiv(areaImprimirReposo) {
     var contenido= document.getElementById(areaImprimirReposo).innerHTML;
     var contenidoOriginal= document.body.innerHTML;
     
     document.body.innerHTML = contenido;

    }
</script>
<script language="Javascript">
    function printDiv(areaImprimirOrden) {
     var contenido= document.getElementById(areaImprimirOrden).innerHTML;
     var contenidoOriginal= document.body.innerHTML;
     
     document.body.innerHTML = contenido;

    }
</script>
<script language="Javascript">
    function printDiv(areaImprimirConsulta) {
     var contenido= document.getElementById(areaImprimirConsulta).innerHTML;
     var contenidoOriginal= document.body.innerHTML;
     
     document.body.innerHTML = contenido;

     window.print();

     //document.body.innerHTML = contenidoOriginal;
     location.reload();
    }
    

  </script>

 