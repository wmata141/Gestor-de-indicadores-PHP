@extends('adminlte::page')
@section('title' , 'Enfermeria')




@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-11 " >
            
            <div class="panel panel-default">

                
                <table class="table responsive-table hover striped centered bordered" cellspacing="0" width="250%" >
                    
                    <thead>
                            <tr>
                                <th><div class="row">
                                        <center><img src="imagenes/LOGO2.JPG" width="80%" height="50%"  > </center>
                                        <br></div>
                                </th>
                                
                                <th><div class="row">
                                        <center> <img src="imagenes/LOGO2.JPG" width="80%" height="50%"> </center>
                                        <br></div>
                                </th>

                            </tr>
                    </thead>
                    <tbody>
                            
                            <tr style="text-align:center;">
                                <td> <h4>RECIPE</h4> </td>
                                <td> <h4>INDICACIONES MEDICAS </h4></td>

                            </tr>

                            <tr HEIGHT="200px">
                                <td> <h4>{{$xx->nombre}}{{ $xx->dosis}}<h4></td>
                                <td> <h4>{{$xx->indicacion}}<h4></td>

                            </tr>

                            <tr>
                                <td>  </td>
                                <td>  </td>

                            </tr>

                            <tr>
                                <td>  </td>
                                <td>  </td>

                            </tr>

                            <tr>
                                <td>  </td>
                                <td>  </td>
                                

                            </tr>
                            

                                
                    </tbody>
                

                </table>




            
            </div>
        </div>
    </div>
</div>
@endsection