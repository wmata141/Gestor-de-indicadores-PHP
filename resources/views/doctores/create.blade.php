@extends('adminlte::page')
@section('content')

    @section('content')
<div class="container">

    <div class="row">
        <div class="col-md-11 ">
            <h4 style= "text-align:center;">GERENCIA SSST - SALUD OCUPACIONAL</h4><br>
            <div class="panel panel-default">
                <div class="panel-heading" style= "background-color:SkyBlue;"><center>NUEVO USUARIO</center></div>

                <div class="panel-body">
                   

            <form id="create-form" method="POST" action="{{ url('/doctores') }}">
            {{ csrf_field() }}
                <div class="box box-primary">
                    <div class="box-header with-border" >
                      <h4 class="title1">USUARIOS ADMINISTRADORES</h4>
                    </div>
                <!-- /.box-header -->
                    <div class="box-body">
                    <form role="form">
                            <!-- text input -->
                 
                          <div class="box-body">
                          <div class="row">
                                <div class="col-xs-12"> <center>NOMBRE Y APELLIDO </center>
                                  <input id="nombre" name="nombre" type="text" class="form-control" placeholder="ingresar Nombre y Apellido exactamente igual a Active directory">
                                </div>
                                 <div class="col-xs-12"> <center>USERNAME</center>
                                  <input id="usuario" name="usuario" type="text" class="form-control" placeholder="ingresar username exactamente igual a Active directory">
                                </div>
                                 <div class="col-xs-12"> <center>ROL</center>                                                       
                                          <select class="form-control" id="rol" name="rol">
                                          <option value=""></option>
                                          <option value="doctor">doctor</option>
                                          <option value="enfermero">enfermero</option>
                                          <option value="usuario">usuario</option>
                                          
                                          </select>
                                    
                                </div>
                                

                                
                          </div> 
                          </div>


                          <div class="box-footer">
                              <input type="submit" class="btn btn-primary" ></input>
                          
                              <a type="submit" class="btn btn-primary" href="/doctores">REGRESAR</a>
                          </div>

                    </div>
                </div>
        </div>
    </div>
</div>
@endsection