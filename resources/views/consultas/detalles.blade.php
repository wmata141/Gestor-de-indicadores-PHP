@extends('adminlte::page')
@section('content')

    @section('content')
<div class="container">
    <div class="row">
        <div class="col-md-11 ">
        <div id="noprint" style="text-align:center;">
                        <input class="btn btn-success" name="Imprimir" type="submit" value="Imprimir" onclick=" this.style.visibility='hidden'; print(); this.style.visibility=''" />                    
                    </div> <br>
            
            <div class="panel panel-default">
                <div class="row">
                        <center><img src="{{URL::asset('imagenes/LOGO10.JPG')}}" width="70%" height="30%"  > </center>
                        <br></div>
                <div class="panel-body">
                   
            
           @foreach($consultas as $consulta) 
            
            
                <div class="box box-primary" style="padding: 0px;">
                    <div class="col-xs-10" style="margin:20px 20px 20px 0px"> <br>
                    <label for="ficha" style="font-size: 11px;">DATOS DEL PACIENTE</LABEL><br>
                    </div>
                <!-- /.box-header -->
                    <div class="box-body"> 
                    
                            <!-- text input -->
                        <div class="box-body">
                                <div class="row" style="padding: 0px;">
                                    <div class="col-xs-2"> 
                                    <label for="ficha" style="font-size: 11px;">FICHA</label><br>
                                    <p style="font-size: 11px;">{{$consulta->id_trabajador}}</p>
                                      
                                    </div>
                                    <div class="col-xs-3">
                                    <label for="nombre" style="font-size: 11px;">NOMBRE</label><br>
                                    <p style="font-size: 11px;">{{$consulta->nombre}}</p>
                                      
                                    </div>
                                    <div class="col-xs-3">
                                      <label style="font-size: 11px;"for="apellido">APELLIDO</label><br>
                                     <p style="font-size: 11px;">{{$consulta->apellido}}</p>
                                    </div>

                                    <div class="col-xs-4">
                                      <label  style="font-size: 11px;"for="motivo">MOTIVO DE CONSULTA</label> <br>
                                      <p style="font-size: 11px;">{{$consulta->motivo}}<h4>
                                    </div>
                                </div>                       
                         </div>
                    <br>


                    

                    <div class="col xs-12">
                        <label style="font-size: 11px;"for="situacion">SITUACION ACTUAL</label>
                        </div>
                    <!-- textarea -->
                    <div class="col-xs-12">
                      <p style="font-size: 11px;">{{$consulta->situacion_actual}}</p><br>
                      
                    </div>

                    <div class="col xs-12">
                        <label style="font-size: 11px;" for="antecedentes">ANTECEDENTES DE IMPORTANCIA</label>
                    </div>
                    <!-- textarea -->
                    <div class="col-xs-12">
                    <p style="font-size: 11px;">{{$consulta->antecedentes}}</p><br>
                     
                     </div>

                    <div class="col xs-12">
                        <label style="font-size: 11px;" for="exploracion">EXPLORACION FISICA</label>
                    </div>

                  <div class="box-body">
                  <div class="row">
                        <div class="col-xs-2" style="font-size: 11px;"> <center>TA
                          <p style="font-size: 11px;">{{$consulta->ta}}</p></center>
                        </div>
                        <div class="col-xs-2" style="font-size: 11px;"> <center>mmHg</center>
                        <center><p style="font-size: 11px;">{{$consulta->mm}}</p></center>
                        </div>
                        <div class="col-xs-2" style="font-size: 11px;">  <center>FC ipm</center>
                        <center><p style="font-size: 11px;">{{$consulta->fc}}</p></center>
                        </div>
                        <div class="col-xs-2" style="font-size: 11px;"> <center>FR rpm</center>
                        <center><p style="font-size: 11px;">{{$consulta->rp}}</p></center>
                        </div>
                        <div class="col-xs-2" style="font-size: 11px;"> <center>PESO</center>
                        <center><p style="font-size: 11px;">{{$consulta->peso}}</p></center> 
                        </div>
                        <div class="col-xs-2" style="font-size: 11px;"> <center>TALLA cm</center>
                        <center><p style="font-size: 11px;">{{$consulta->talla}}</p></center>
                        </div>
                        <div class="col-xs-2" style="font-size: 11px;"> <center>IMC %</center>
                        <center><p style="font-size: 11px;">{{$consulta->imc}}</p></center>
                        </div>
                  </div>
                  </div>


                    <div class="col xs-12">
                        <label for="hallazgos" style="font-size: 11px;">HALLAZGOS POSITIVOS AL EXAMEN FISICO</label>
                    </div>
                    <div class="col-xs-12">
                    <p style="font-size: 11px;">{{$consulta->hallazgo}}</p>
                    </div>


                     <div class="col xs-12">
                        <label for="impresiones" style="font-size: 11px;">IMPRESIONES DIAGNOSTICAS</label>
                    </div>
                        <div class="col-xs-12"> 
                         <p style="font-size: 11px;">{{$consulta->impresiones}}</p>  
                        </div>
                     
                    <div class="col xs-12">
                        <label for="plan" style="font-size: 11px;">PLAN DE TRATAMIENTO</label>
                    </div>
                    
                    <div class="col-xs-12">
                    <p style="font-size: 11px;">{{$consulta->plan_tratamiento}}</p>
                    </div>
                    @if ($consulta->plan_tratamiento1 <> "")
                     <div class="col-xs-12">
                    <p style="font-size: 11px;">{{$consulta->plan_tratamiento1}}</p>
                    </div>
                    @endif
                     @if ($consulta->plan_tratamiento2 <> "")
                     <div class="col-xs-12">
                    <p style="font-size: 11px;">{{$consulta->plan_tratamiento2}}</p>
                    </div>
                    @endif

                    @if ($consulta->impresiones2 <> "")
                    
                         <div class="col xs-12">
                            <label for="impresiones" style="font-size: 11px;">IMPRESIONES DIAGNOSTICAS</label>
                        </div>
                            <div class="col-xs-12"> 
                             <p style="font-size: 11px;">{{$consulta->impresiones2}}</p>  
                            </div>
                         
                        <div class="col xs-12">
                            <label for="plan" style="font-size: 11px;">PLAN DE TRATAMIENTO</label>
                        </div>
                        
                        <div class="col-xs-12">
                        <p style="font-size: 11px;">{{$consulta->plan_tratamiento3}}</p>
                        </div>

                         @if ($consulta->plan_tratamiento4 <> "")

                         <div class="col-xs-12">
                        <p style="font-size: 11px;">{{$consulta->plan_tratamiento4}}</p>
                        </div>

                        @endif
                         @if ($consulta->plan_tratamiento5 <> "")

                         <div class="col-xs-12">
                        <p style="font-size: 11px;">{{$consulta->plan_tratamiento5}}</p>
                        </div>
                        @endif


                    @endif

                    @if ($consulta->impresiones3 <> "")
                    
                         <div class="col xs-12">
                            <label for="impresiones" style="font-size: 11px;">IMPRESIONES DIAGNOSTICAS</label>
                        </div>
                            <div class="col-xs-12"> 
                             <p style="font-size: 11px;">{{$consulta->impresiones3}}</p>  
                            </div>
                         
                        <div class="col xs-12">
                            <label for="plan" style="font-size: 11px;">PLAN DE TRATAMIENTO</label>
                        </div>
                        
                        <div class="col-xs-12">
                        <p style="font-size: 11px;">{{$consulta->plan_tratamiento6}}</p>
                        </div>

                         @if ($consulta->plan_tratamiento4 <> "")

                         <div class="col-xs-12">
                        <p style="font-size: 11px;">{{$consulta->plan_tratamiento7}}</p>
                        </div>

                        @endif
                         @if ($consulta->plan_tratamiento5 <> "")

                         <div class="col-xs-12">
                        <p style="font-size: 11px;">{{$consulta->plan_tratamiento8}}</p>
                        </div>
                        @endif


                    @endif
                    
                  

                    <div class="col xs-12">
                        <label for="sugerencias" style="font-size: 11px;">SUGERENCIAS</label>
                    </div>
                    <div class="col-xs-12">
                    <p style="font-size: 11px;">{{$consulta->sugerencias}}</p><br>
                    </div>

                    @if ($consulta->reposo_ini <> "")
                    <label style="font-size: 11px;">REPOSO</label>
                    <p style="font-size: 11px;">Inicio de reposo : {{$consulta->reposo_ini}}</p>
                    <p style="font-size: 11px;">Fin de reposo : {{$consulta->reposo_fin}}</p>
                    @endif

                    @if ($consulta->referido<> "")
                    <label style="font-size: 11px;">REFERIDO</label>
                    <p style="font-size: 11px;">Especialista : {{$consulta->referido}}</p>
                    <p style="font-size: 11px;">Motivo : {{$consulta->motivo2}}</p>
                    @endif

                    <table class="table responsive-table hover striped centered bordered" cellspacing="0" width="250%">
                      
                      <tr style="text-align:center;">
                        <td> <p style="font-size: 11px;">FIRMA TRABAJADOR</p> </td>
                        <td> <p style="font-size: 11px;">FIRMA MEDICO OCUPACIONAL</p></td>
                    </tr>

                    
                        
                    <tr style="text-align:center;">
                        <td> <h4>__________________________<h4> </td>
                        <td> <h4>__________________________<h4> </td>
                    </tr>

                    
                 </table>




                    </div>
                    @endforeach
                </div>
        </div>
    </div>
</div>
@endsection

