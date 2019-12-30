@extends('adminlte::page')
@section('content')

 
<div class="container">
    <div class="row">

        <div class="col-md-10  " >
            <h4 style= "text-align:center;">INDICADORES DE GESTION</h4>
                <div class="col-md-6" >
                    
                </div> 

            <div class="panel panel-default" style="margin-top:60px">
                <div class="panel-heading" style= "background-color:SkyBlue;">PROYECTOS MICMAC</div>

                


<div class="center">
<div style="overflow-x:auto;">
 <table id="table" class="table table-bordered table-hover dataTable" role="grid" >
             <thead>
            <tr>
                <th>NOMBRE</th>
                <th>FECHA</th>
                <th>METODO(S)</th>
                
               <!--<th>Operacion</th>-->
            </tr>
            </thead>
            <tbody>
          
            <tr>
                <td >proyecto 1 </td>
                <td > 03/12/2018 </td>
                <td > micmac, mactor </td>
                <td>  <button class="btn btn-success" >Ver</button></td>

                
            </tr>

                <!-- <a class="waves-effect waves-light btn" id="{{--$user->id--}}" href="/workers"> </a>  -->
                {{--{!! link_to_route('usuario.edit', $title = 'Editar', $user->id, $attributes = ['class'=>'btn btn-primary']) !!}--}}
            
            </tbody>
        </table>
    </div>
    


            </div>
        </div>
    </div>
</div>

@endsection