@extends('adminlte::page')

@section('content')

    @section('content')
<div class="container">
    <div class="row">

        <div class="col-md-10 " >
            <h4 style= "text-align:center;">GERENCIA SSST - SALUD OCUPACIONAL</h4>
                <div class="col-md-6" >
                    <div class="row">
                        <a type="submit" href="doctores/create" class="btn btn-primary"> AGREGAR USUARIO</a> 
                        
                    </div>
                </div> 

            <div class="panel panel-default" style="margin-top:60px">
                <div class="panel-heading" style= "background-color:SkyBlue;">USUARIOS DEL SISTEMA</div>

                


<div class="center">
<div style="overflow-x:auto;">
 <table id="table" class="table table-bordered table-hover dataTable" role="grid" >
             <thead>
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>USERNAME</th>
                <th>ROL</th>
                <th></th>
                
               <!--<th>Operacion</th>-->
            </tr>
            </thead>
            <tbody>
            @foreach($doctores as $doc)<!-- ciclo que tiene una lista de trabajadores y por cada fila llena cada atributo del trabajador-->
            <tr>
                <td >{{$doc->id}} </td>
                <td >{{$doc->nombre}} </td>
                <th>{{$doc->usuario}}</th>
                <th>{{$doc->rol}}</th>
                <th>
                 <a  class="btn btn-warning">editar</a>
                 <button class="btn btn-danger" data-catid="{{$doc->id}}" data-toggle="modal" data-target="#delete">Eliminar</button>

                                         </th>
                
            </tr>

                <!-- <a class="waves-effect waves-light btn" id="{{--$user->id--}}" href="/workers"> </a>  -->
                {{--{!! link_to_route('usuario.edit', $title = 'Editar', $user->id, $attributes = ['class'=>'btn btn-primary']) !!}--}}
            @endforeach
            </tbody>
        </table>
    </div>
    


            </div>
        </div>
    </div>
</div>

<!-- Modal Eliminar-->
<div class="modal modal-danger fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                 <h4 class="modal-title text-center" id="myModalLabel"><span>Confirmar</span></h4>
            </div>

            <form action="{{route('doctores.destroy','test')}}" method="post">
                {{method_field('delete')}}
                {{csrf_field()}}
            <div class="modal-body">
                <p class="text-center">
                    <span>Esta seguro que quiere eliminar este registro?</span>
                </p>
                 <input type="hidden" name="category_id" id="cat_id" value="">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span>No, Cancelar</span></button>
                <button type="submit" class="btn btn-danger"><span>Si, Eliminar</span></button>
            </div>
            </form>
        </div>
    </div>
</div>


@endsection

@section('js')
    <script src="{{asset('js/dataTable.js')}}"></script>
    <script src="{{asset('js/deleteConfirmationModal.js')}}"></script>



@endsection


