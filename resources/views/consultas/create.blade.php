@extends('adminlte::page')
@section('content')

    @section('content')
<div class="container">
    <div class="row">
        <div class="col-md-11 ">
            <h4 style= "text-align:center;">GERENCIA SSST - SALUD OCUPACIONAL</h4><br>

            <div class="panel panel-default">
                <div class="panel-heading" style= "background-color:SkyBlue;"><center>NUEVA CONSULTA</center></div>

                <div class="panel-body">
                   

            <form id="create-form" method="POST" action="{{ url('/consultas') }}">
            {{ csrf_field() }}
                <div class="box box-primary">
                    <div class="box-header with-border">
                      <h4 class="title1">Datos del paciente</h4>
                    </div>
                <!-- /.box-header -->
                    <div class="box-body">
                    <form role="form">
                            <!-- text input -->
                        <div class="box-body">
                                <div class="row">
                                    <div class="col-xs-3"> 
                                    <label for="ficha">FICHA</label>
                                        <div class="form-group{{ $errors->has('id_trabajador') ? ' has-error' : '' }}">
                                          {!! Form::number('id_trabajador',
                                          null,
                                          [
                                          'required',
                                          'placeholder' => 'FICHA',
                                          'autocomplete' => 'off',
                                          'maxlength' => 100,
                                          'rows' => 1, 'cols' => 5,
                                           'class'=> 'form-control'
                                          ]
                                          ) !!}

                                          @if($errors->has('id_trabajador'))
                                            <span class="help-block">
                                              <strong>{{ $errors->first('id_trabajador')}}</strong>
                                            </span>
                                          @endif
                                        </div>

                                      </div>


                                    
                                      <div class="col-xs-3"> 
                                    <label for="ficha">CEDULA</label>
                                        <div class="form-group{{ $errors->has('cedula') ? ' has-error' : '' }}">
                                          {!! Form::number('cedula',
                                          null,
                                          [
                                          'required',
                                          'placeholder' => 'CEDULA',
                                          'autocomplete' => 'off',
                                          'maxlength' => 100,
                                          'rows' => 1, 'cols' => 20,
                                           'class'=> 'form-control'
                                          ]
                                          ) !!}

                                          @if($errors->has('cedula'))
                                            <span class="help-block">
                                              <strong>{{ $errors->first('cedula')}}</strong>
                                            </span>
                                          @endif
                                        </div>

                                      </div>


                                    <div class="col-xs-3">
                                    <label for="nombre">NOMBRE</label>
                                      <input id= "nombre" name="nombre" type="text" class="form-control" placeholder="NOMBRE">
                                      
                                    </div>
                                    <div class="col-xs-3">
                                    <label for="apellido">APELLIDO</label>
                                      <input id= "apellido" name="apellido" type="text" class="form-control" placeholder="APELLIDO">
                                      
                                    </div>
                              </div>
                        </div> 

 

                        <div class="box-body">
                                <div class="row">
                                    <div class="col-xs-3"> 
                                        <label for="ficha">EDAD</label>
                                            <div class="form-group{{ $errors->has('edad') ? ' has-error' : '' }}">
                                              {!! Form::number('edad',
                                              null,
                                              [
                                              'required',
                                              'placeholder' => 'EDAD',
                                              'autocomplete' => 'off',
                                              'maxlength' => 2,
                                              'rows' => 1, 'cols' => 5,
                                               'class'=> 'form-control'
                                              ]
                                              ) !!}

                                              @if($errors->has('edad'))
                                                <span class="help-block">
                                                  <strong>{{ $errors->first('edad')}}</strong>
                                                </span>
                                              @endif
                                    </div>

                                </div>




                        </div></div>


                        <br>
                   <div class="box-body">
                    <div class="row">
                    <div class="col-xs-6">
                    <label for="motivo">MOTIVO DE CONSULTA</label> 
                    <div class="col-xs-12"> 
                          <select class="form-control" id="motivo" name="motivo">
                          <option value=""></option>
                          <option value="PRE-VACACIONAL">PRE-VACACIONAL</option>
                          <option value="POST-VACACIONAL">POST-VACACIONAL</option>
                          <option value="CONSULTA MEDICA">CONSULTA MEDICA</option>
                          <option value="CONTROL MEDICO">CONTROL MEDICO</option>
                          <option value="ACCIDENTES">ACCIDENTES</option>
                          <option value="CONTROL PROGRAMA DE PREVENCION">CONTROL PROGRAMA DE PREVENCION</option>
                          <option value="DEPORTIVO">DEPORTIVO</option>
                          <option value="PRE-JUBILADO">PRE-JUBILADO</option>
                          <option value="OTRO MOTIVO">OTRO MOTIVO</option>
                          </select>
                    </div> </div>

                     
                    <div class="col-xs-6">
                    <label for="motivo">DOCTOR</label> 
                    <div class="col-xs-12"> 
                          <select class="form-control" id="doctor" name="doctor">
                          <option value={{$user1->name}}> {{$user1->name}}</option>
                          </select>
                    </div> </div>  </div> </div>
                    <br>

                    <div class="col-xs-12">
                        <div class="form-group">
                            <div class="radio">
                              <H4>TIPO DE CONSULTA</H4>
                              <label>
                                <input type="radio" name="tipo_consulta" id="tipo_consulta" value="no_aplica" >
                                NO APLICA
                              </label>
                            </div>
                            <div class="radio">
                              <label>
                                <input type="radio" name="tipo_consulta" id="tipo_consulta" value="preventiva">
                                PREVENTIVA
                              </label>
                            </div>
                            <div class="radio">
                              <label>
                                <input type="radio" name="tipo_consulta" id="tipo_consulta" value="curantiva">
                                CURANTIVA
                              </label>
                            </div>
                          
                        </div>
                    </div>
                    

                    <div class="col-xs-12">
                    <label for="xx">SITUACION ACTUAL</label>
                        </div>
                    <!-- textarea -->
                    <div class="form-group">
                      
                        <textarea id="situacion_actual" name="situacion_actual" class="form-control" rows="3" placeholder=" ..."></textarea>
                    </div>

                    <div class="col-xs-12">
                    <label for="xx">ANTECEDENTES DE IMPORTANCIA</label>
                    </div>
                    <!-- textarea -->
                    <div class="form-group">
                      
                        <textarea id="antecedentes" name="antecedentes" class="form-control" rows="3" placeholder=" ..."></textarea>
                    </div>

                    <div class="col-xs-12">
                    <label for="xx">EXPLORACION FISICA</label>
                    </div>

                  <div class="box-body">
                  <div class="row">
                        <div class="col-xs-2"> <center>TA</center>
                          <input id="ta" name="ta" type="text" class="form-control" placeholder=" ">
                        </div>
                        <div class="col-xs-2"> <center>mmHg</center>
                          <input id="mm" name="mm" type="text" class="form-control" placeholder=" ">
                        </div>
                        <div class="col-xs-2">  <center>FC ipm</center>
                          <input id="fc" name="fc" type="text" class="form-control" placeholder=" ">
                        </div>
                        <div class="col-xs-2"> <center>FR rpm</center>
                          <input id="rp" name="rp" type="text" class="form-control" placeholder=" ">
                        </div>
                        <div class="col-xs-2"> <center>PESO</center>
                          <input id="peso" name="peso" type="text" class="form-control" placeholder=" ">
                        </div>
                        <div class="col-xs-2"> <center>TALLA cm</center>
                          <input  id="talla" name="talla"type="text" class="form-control" placeholder=" ">
                        </div>
                        <div class="col-xs-2"> <center>IMC %</center>
                          <input id="imc" name="imc" type="text" class="form-control" placeholder=" ">
                        </div>
                  </div>
                  </div>


                    <div class="col-xs-12">
                    <label for="xx">HALLAZGOS POSITIVO AL EXAMEN FISICO</label>
                    </div>
                    <div class="form-group">
                      <textarea id="hallazgo" name="hallazgo" class="form-control" rows="4" placeholder=" ..."></textarea>
                    </div>

                   <div class="col-xs-2">
                    <label for="xx" style="color:blue">IMPRESIONES DIAGNOSTICAS</label>
                    </div>
                     
                         
                    <select class="js-example-basic-single col-xs-3"  id="impresiones" name="impresiones">
                        @foreach($enfermedadx as $enfermedad)
                            <option value="{{$enfermedad->nombre}} {{$enfermedad->sistema}}">{{$enfermedad->nombre}}  {{$enfermedad->sistema}}</option>
                        @endforeach

                    </select>

                    <br><br><br>
                    <div class="col-xs-2">
                    <label for="xx">PLAN DE TRATAMIENTO</label>
                    </div>
                    

                    
                        <select class="js-example-basic-single col-xs-3"  id="plan_tratamiento" name="plan_tratamiento">
                           @foreach($plan_tratamientox as $trata)
                           <option value="{{$trata->nombre}} {{$trata->dosis}}"> {{$trata->nombre}}  {{$trata->dosis}}  {{$trata->uso}}</option>
                           @endforeach

                        </select>

                        <select class="js-example-basic-single col-xs-3"  id="plan_tratamiento1" name="plan_tratamiento1">
                           @foreach($plan_tratamientox as $trata)
                           <option value="{{$trata->nombre}} {{$trata->dosis}}">{{$trata->nombre}}  {{$trata->dosis}}  {{$trata->uso}}</option>
                           @endforeach

                        </select>

                        <select class="js-example-basic-single col-xs-3"  id="plan_tratamiento2" name="plan_tratamiento2">
                           @foreach($plan_tratamientox as $trata)
                           <option value="{{$trata->nombre}} {{$trata->dosis}}"> {{$trata->nombre}}  {{$trata->dosis}}  {{$trata->uso}}</option>
                           @endforeach

                        </select>
                        <br><br><br>

                        <div class="col-xs-12">
                        <input type="button" class="btn btn-info " value=" AGREGAR OTRO DIAGNOSTICO" onclick="mostrar3()" id="btn">
                        </div>

                          <div id="oculto3"  style="display:none;"> 

                              <div class="col-xs-2" >
                              
                              <label for="xx" style="color:blue">IMPRESIONES DIAGNOSTICAS</label>
                              </div>
                               
                                   
                              <select class="js-example-basic-single col-xs-12"  id="impresiones2" name="impresiones2" style="width:25%" >
                                  @foreach($enfermedadx as $enfermedad)
                                      <option value="{{$enfermedad->nombre}} {{$enfermedad->sistema}}" >{{$enfermedad->nombre}}  {{$enfermedad->sistema}}</option>
                                  @endforeach

                              </select>
                              

                              <br><br><br>
                              <div class="col-xs-2">
                              <label for="xx">PLAN DE TRATAMIENTO</label>
                              </div>
                              
                                  <select class="js-example-basic-single col-xs-12"  id="plan_tratamiento3" name="plan_tratamiento3" style="width:25%">
                                     @foreach($plan_tratamientox as $trata)
                                     <option value="{{$trata->nombre}} {{$trata->dosis}}" >{{$trata->nombre}}  {{$trata->dosis}}  {{$trata->uso}}</option>
                                     @endforeach

                                  </select>

                                  <select class="js-example-basic-single col-xs-12"  id="plan_tratamiento4" name="plan_tratamiento4" style="width:25%">
                                     @foreach($plan_tratamientox as $trata)
                                     <option value="{{$trata->nombre}} {{$trata->dosis}}">{{$trata->nombre}}  {{$trata->dosis}}  {{$trata->uso}}</option>
                                     @endforeach

                                  </select>

                                  <select class="js-example-basic-single col-xs-12"  id="plan_tratamiento5" name="plan_tratamiento5" style="width:25%">
                                     @foreach($plan_tratamientox as $trata)
                                     <option value="{{$trata->nombre}} {{$trata->dosis}}">{{$trata->nombre}}  {{$trata->dosis}}  {{$trata->uso}}</option>
                                     @endforeach

                                  </select>
                                  <br>

                                  <div class="col-xs-12">
                                  <input type="button" class="btn btn-info " value=" AGREGAR OTRO DIAGNOSTICO" onclick="mostrar4()" id="btn2">
                                  </div>

                              </div>
                        <br>


                        <div id="oculto4"  style="display:none;"> 

                              <div class="col-xs-2" >
                              
                              <label for="xx" style="color:blue">IMPRESIONES DIAGNOSTICAS</label>
                              </div>
                               
                                   
                              <select class="js-example-basic-single col-xs-12"  id="impresiones3" name="impresiones3" style="width:25%" >
                                  @foreach($enfermedadx as $enfermedad)
                                      <option value="{{$enfermedad->nombre}} {{$enfermedad->sistema}}">{{$enfermedad->nombre}}  {{$enfermedad->sistema}}</option>
                                  @endforeach

                              </select>
                              

                              <br><br><br>
                              <div class="col-xs-2">
                              <label for="xx">PLAN DE TRATAMIENTO</label>
                              </div>
                              
                                  <select class="js-example-basic-single col-xs-12"  id="plan_tratamiento6" name="plan_tratamiento6" style="width:25%">
                                     @foreach($plan_tratamientox as $trata)
                                     <option value="{{$trata->nombre}} {{$trata->dosis}}">{{$trata->nombre}}  {{$trata->dosis}}  {{$trata->uso}}</option>
                                     @endforeach

                                  </select>

                                  <select class="js-example-basic-single col-xs-12"  id="plan_tratamiento7" name="plan_tratamiento7" style="width:25%">
                                     @foreach($plan_tratamientox as $trata)
                                     <option value="{{$trata->nombre}} {{$trata->dosis}}">{{$trata->nombre}}  {{$trata->dosis}}  {{$trata->uso}}</option>
                                     @endforeach

                                  </select>

                                  <select class="js-example-basic-single col-xs-12"  id="plan_tratamiento8" name="plan_tratamiento8" style="width:25%">
                                     @foreach($plan_tratamientox as $trata)
                                     <option value="{{$trata->nombre}} {{$trata->dosis}}">{{$trata->nombre}}  {{$trata->dosis}}  {{$trata->uso}}</option>
                                     @endforeach

                                  </select>
                                  <br>

                              </div>
                        <br>


                        






                    <br><br><br>

                    <div class="col-xs-12">
                    <label for="xx">SUGERENCIAS</label>
                    </div>
                    <div class="form-group">
                      
                      <textarea id="sugerencias" name="sugerencias" class="form-control" rows="3" placeholder=" ..."></textarea>
                    </div>

                    <input type="button" class="btn btn-success" value=" AGREGAR REPOSO" onclick="mostrar1()">

                    <div id='oculto1' style='display:none;'>
                    <H5>  </H5> DIAS : <input class="col-xs-1" id="dias" name="dias" type"number" > 
                    <h5><input type="text" id="datepicker" name="reposo_ini"  > FECHA DE INICIO
                    <input type="text" id="datepicker1" name="reposo_fin"  > FECHA FINAL <h5>
                     </div></h5>

                     <input type="button" class="btn btn-warning" value="AGREGAR REFERIDO" onclick="mostrar()">

                    <div id='oculto' style='display:none;'>
                    ESPECIALISTA: <input class="form-control" type="text" id="referido" name="referido"  >
                    MOTIVO: <input class="form-control" type="text" id="motivo2" name="motivo2"  > 
                    </div> 

                    <div class="box-footer">
                        <button  class="btn btn-primary" type="submit" name="action">AGREGAR</button>

                    </div>

                    

                    </div>
                </div>
        </div>
    </div>
</div>



@endsection



@section('scripts')
<script>
 $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
</script>




@endsection

