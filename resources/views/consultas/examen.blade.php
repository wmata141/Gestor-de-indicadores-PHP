@extends('adminlte::page')
@section('title' , 'Enfermeria')




@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-11 " >

        <div id="noprint" style="text-align:center;">
                        <input class="btn btn-success" name="Imprimir" type="submit" value="Imprimir" onclick=" this.style.visibility='hidden'; print(); this.style.visibility=''" />                    
                    </div> <br>
            
            <div style="margin-top:-20px" class="panel panel-default">

                
                <table class="table responsive-table hover striped centered bordered" cellspacing="0" width="250%" >
                    
                    
                    <tbody>

                    <tr>
                                <th style="padding: 0px;"><div class="row">
                                        <center><img src="{{URL::asset('imagenes/x1.jpg')}}" width="50%" height="20%"  > </center>
                                        <br></div>
                                </th>
                                
                                <th style="padding: 0px;"><div class="row">
                                        <center> <img src="{{URL::asset('imagenes/x2.jpg')}}" width="50%" height="20%"> </center>
                                        <br></div>
                                </th>

                            </tr>
                            
                            <tr style="text-align:center;">
                                <td style="padding: 0px;"> <p style=" font-weight: bold; padding: 0px; font-size: 13px;">DATOS DEL TRABAJADOR</p> </td>
                                <td style="padding: 0px;"> <p style=" font-weight: bold; padding: 0px; font-size: 13px;">DATOS DEL TRABAJADOR </p></td>

                            </tr>

                            <tr >
                                <td style="padding: 0px; "> <p style="font-size: 11px;">NOMBRE Y APELLIDO:  {{$consultas->nombre}} {{$consultas->apellido}}</p></td>
                                <td style="padding: 0px; "> <p style="font-size: 11px;">NOMBRE Y APELLIDO: {{$consultas->nombre}} {{$consultas->apellido}}</p> </td>

                            </tr>

                            <tr>
                                <td style="padding: 0px; "> <p style="font-size: 11px;">CEDULA DE IDENTIDAD : {{$consultas->cedula}}  EDAD : {{$consultas->edad}} </p> </td>
                                <td style="padding: 0px; ">  <p style="font-size: 11px;"> CEDULA DE IDENTIDAD : {{$consultas->cedula}}  EDAD : {{$consultas->edad}}</p> </td>

                            </tr>


                            <tr>
                            <td  style="text-align:center; padding: 0px;">
                            <p style="font-size: 11px; font-weight: bold;">REQUISITOS Y/O RECOMENDACIONES</p>
                            <td  style="text-align:center; padding: 0px;">
                            <p style="font-size: 11px; font-weight: bold;">REQUISITOS Y/O RECOMENDACIONES</p>
                            </td>



                            </tr>
                            <tr >
                                <td style="padding: 0px; "><p style="font-size: 11px;">°DEBE CENAR UNA COMIDA LIVIANA ANTES DE LAS 6 pm EL DÍA ANTERIOR A LA CITA  </p></td>
                                <td style="padding: 0px; "><p style="font-size: 11px;">°DEBE CENAR UNA COMIDA LIVIANA ANTES DE LAS 6 pm EL DÍA ANTERIOR A LA CITA  </p></td>
                            </tr>

                            <tr>
                                <td style="padding: 0px; "><p style="font-size: 11px;">°DORMIR NO MENOS DE 06 HORAS EN LA NOCHE ANTERIOR</p></td>
                                <td style="padding: 0px; "><p style="font-size: 11px;">°DORMIR NO MENOS DE 06 HORAS EN LA NOCHE ANTERIOR</p></td>

                            </tr>

                             <tr>
                                <td style="padding: 0px; "><p style="font-size: 11px;">°ACUDIR EN AYUNAS ( SIN COMER NI TOMAR ALIMENTOS O BEBIDAS, EXCEPTO AGUA; NO COMER CHICLE, NI CARAMELOS )</p></td>
                                <td style="padding: 0px; "><p style="font-size: 11px;">°ACUDIR EN AYUNAS ( SIN COMER NI TOMAR ALIMENTOS O BEBIDAS, EXCEPTO AGUA; NO COMER CHICLE, NI CARAMELOS )</p></td>
                            </tr>

                             <tr>
                                <td style="padding: 0px; "><p style="font-size: 11px;">°NO INGERIR BEBIDAS ALCOHOLICAS, CAFÉ EN GRANDES CANTIDADES, NI SUSTANCIAS ESTIMULANTES EL DÍA ANTERIOR A LA CITA</p></td>
                                <td style="padding: 0px; "><p style="font-size: 11px;">°NO INGERIR BEBIDAS ALCOHOLICAS, CAFÉ EN GRANDES CANTIDADES, NI SUSTANCIAS ESTIMULANTES EL DÍA ANTERIOR A LA CITA</p></td>
                            </tr>

                             <tr>
                                <td > <p style="font-size: 11px; background-color:yellow;">°SI USA LENTES CORRECTIVOS ( ADAPTADOS ) DE SEGURIDAD, DEBE TRAERLOS EL DÍA DE SU CITA, EN SU DEFECTO TRAER LOS LENTES DE USO PERSONAL. </p></td>
                                <td > <p style="font-size: 11px; background-color:yellow;">°SI USA LENTES CORRECTIVOS ( ADAPTADOS ) DE SEGURIDAD, DEBE TRAERLOS EL DÍA DE SU CITA, EN SU DEFECTO TRAER LOS LENTES DE USO PERSONAL. </p></td>
                            </tr>

                             <tr>
                                <td style="padding: 0px; "><p style="font-size: 11px;">°SI TIENE 40 AÑOS DE EDAD O MÁS, SE LE PRACTICARÁ ADICIONALMENTE EN EL LABORATORIO LOS ANTIGENOS PROSTÁTICOS, PARA LO CUAL SE REQUIERE UN MÍNIMO DE 2 DÍAS DE ABSTINENCIA SEXUAL.</p></td>
                                <td style="padding: 0px; "><p style="font-size: 11px;">°SI TIENE 40 AÑOS DE EDAD O MÁS, SE LE PRACTICARÁ ADICIONALMENTE EN EL LABORATORIO LOS ANTIGENOS PROSTÁTICOS, PARA LO CUAL SE REQUIERE UN MÍNIMO DE 2 DÍAS DE ABSTINENCIA SEXUAL.</p></td>
                            </tr>

                             <tr>
                                <td><p style="font-size: 11px;">°EL DIA ANTERIOR DEBE HABER ESTADO EN EL SEGUNDO TURNO (7:00 a.m – 3:00 p.m)</p</td>
                                <td ><p style="font-size: 11px;">°EL DIA ANTERIOR DEBE HABER ESTADO EN EL SEGUNDO TURNO (7:00 a.m – 3:00 p.m)</p></td>

                            </tr>

                            <tr>
                                <td style="padding: 0px; "> <p style="font-size: 11px; font-weight: bold;">LABORATORIO :
                                @if($exa->laboratorio == "X")
                                  X </p> @endif</p> </td> 
                                <td style="padding: 0px; "> <p style="font-size: 11px; font-weight: bold;">LABORATORIO :
                                @if($exa->laboratorio == "X")
                                 X </p> @endif</p> </td>
                            </tr>

                             <tr>
                                <td style="padding: 0px; "> <p style="font-size: 11px; font-weight: bold;">RAYOS x DE TORAX : 
                                @if($exa->rayosx == "X")
                                 X </p> @endif</p></td>
                                <td style="padding: 0px; "> <p style="font-size: 11px; font-weight: bold;">RAYOS x DE TORAX :
                                @if($exa->rayosx == "X")
                                  X </p> @endif</p></td>
                            </tr>

                             <tr>
                                <td style="padding: 0px; "><p style="font-size: 11px; font-weight: bold;">EXAMEN VISUAL - ELECTROCARDIOGRAMA :
                                @if($exa->visual == "X")
                                  X </p> @endif</p></td>
                                <td style="padding: 0px; "> <p style="font-size: 11px; font-weight: bold;">EXAMEN VISUAL - ELECTROCARDIOGRAMA :
                                @if($exa->visual == "X")
                                  X </p> @endif</p></td>
                            </tr>

                             <tr>
                                <td style="padding: 0px; "><p style="font-size: 11px; font-weight: bold;">AUDIOMETRIA - ESPIROMETRIA :
                                @if($exa->audio == "X")
                                  X </p> @endif</p></td>
                                <td style="padding: 0px; "> <p style="font-size: 11px; font-weight: bold;">AUDIOMETRIA - ESPIROMETRIA :
                                @if($exa->audio == "X")
                                  X </p> @endif</p></td>
                            </tr>

                             <tr>
                                <td style="padding: 0px; "><p style="font-size: 11px; font-weight: bold;">EXAMEN MEDICO :
                                @if($exa->exa_med == "X")
                                  X </p> @endif</p></td>
                                <td style="padding: 0px; "><p style="font-size: 11px; font-weight: bold;">EXAMEN MEDICO :
                                @if($exa->exa_med == "X")
                                  X </p> @endif</p></td>
                            </tr>

                             <tr>
                                <td style="padding: 0px; "><p style="font-size: 11px; font-weight: bold;">CONSULTORIO N :
                                @if($exa->consultorio <> "")
                                  {{$exa->consultorio}} </p> @endif</p></td>
                                <td style="padding: 0px; "><p style="font-size: 11px; font-weight: bold;">CONSULTORIO N :
                                @if($exa->consultorio <> "")
                                 {{$exa->consultorio}} </p> @endif</p></td>
                            </tr>


                            

                                
                    </tbody>
                

                </table>




            
            </div>
        </div>
    </div>
</div>
@endsection