@extends('adminlte::page')
@section('title' , 'Enfermeria')




@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-11 " >
            
            <div class="panel panel-default">

               
                    
                    <div class="row">
                            <center><img src="imagenes/LOGO2.JPG" width="40%" height="20%"  > </center>
                            <br>
                              
                                
                                

                            
                           
                                 <p style="text-align:center; font-size: 15px;"> REPOSO MEDICO DE EMPRESA</p> 
                                 <br>

                                 <div class="col-md-11" style=" margin-left: 10px; ">
                                     <p style="font-size: 14px;"> 
                                        <div class="col-xs-4">  <p style=" font-weight: bold;">Trabajador (a) : </p> {{ $consultas->nombre}} {{ $consultas->apellido}} </div>
                                         <div class="col-xs-2"> <p style=" font-weight: bold;">Edad : </p>{{ $consultas->edad}}   </div>
                                         <div class="col-xs-3"> <p style=" font-weight: bold;">C.I : </p>{{ $consultas->cedula}} </div>
                                         <div class="col-xs-2"> <p style=" font-weight: bold;">Ficha : </p>{{ $consultas->id_trabajador}} 
                                     </>
                                </div>

                                 <div class="col-xs-12" style=" margin-left: 30px; line-height:30px;">
                                     <p style="font-size: 14px; font-weight: bold;">Cargo: </p>
                                </div>
                                <div class="col-xs-12" style=" margin-left: 30px; line-height:30px;">
                                     <p style="font-size: 14px; font-weight: bold;">Sintomas: {{$consultas->situacion_actual}}</p>
                                </div>
                                <div class="col-xs-12" style=" margin-left: 30px; line-height:30px;">
                                     <p style="font-size: 14px; font-weight: bold;">Diagnostico: {{$consultas->impresiones}} </p>
                                </div>
                                <div class="col-xs-12" style=" margin-left: 30px; line-height:30px;"> 
                                     <p style="font-size: 14px; font-weight: bold;">Dias de Reposo: </p>
                                </div>
                                <div class="col-xs-12" style=" margin-left: 30px; line-height:30px;">     
                                     <p style="font-size: 14px; font-weight: bold;">Periodo.  inicio: {{$consultas->reposo_inil}} , Reintegro : {{$consultas->reposo_fin}} </p>
                                </div>

                                

                                


                    <div class="col-xs-12" style=" margin-left: 30px; line-height:30px;">
                        <div class="form-group">
                            <div class="radio" >
                              <H4>CLASIFICACION</H4>

                            <div class="col-xs-2" >
                                <input type="radio" name="tipo_consulta"   > Enf. Común
                            </div>
                            
                             <div class="col-xs-2" >
                                <input type="radio" name="tipo_consulta"  >Accidente  común 
                              </div>
                            
                              <div class="col-xs-2" >
                                <input type="radio" name="tipo_consulta" >Enf. Laboral 
                              </div>
                            
                              
                              
                            </div>
                        </div>
                    </div>


                    <div class="col-xs-12" style=" margin-left: 30px; line-height:30px;">
                        <div class="form-group">
                            <div class="radio" >
                             
                              
                           
                              <div class="col-xs-2" >
                                <input type="radio" name="tipo_consulta" >Accidente de Trabajo 
                              </div>

                              <div class="col-xs-2" >
                                <input type="radio" name="tipo_consulta" >Pre  y post Natal 
                              </div>

                              <div class="col-xs-2" >
                                <input type="radio" name="tipo_consulta" >Accidente deportivo   
                              </div>

                            </div>
                          
                        </div>
                    </div>
                                     

</div>
                               
                            

                            
                           <table class="table responsive-table hover striped centered bordered" cellspacing="0" width="250%">
                      
                      <tr style="text-align:center;">
                        <td> <h4>firma del trabajador<h4> </td>
                        <td> <h4>firma medico ocupacional</h4></td>
                    </tr>

                   
                        
                    <tr style="text-align:center;">
                        <td> <h4>__________________________<h4> </td>
                        <td> <h4>__________________________<h4> </td>
                    </tr><br>
                    </table>

                    <br><br><br>     

                           


                    




            </div>
            </div>
        </div>
    </div>
</div>
@endsection