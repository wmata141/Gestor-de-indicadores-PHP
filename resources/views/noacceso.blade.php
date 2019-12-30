@extends('adminlte::page')
@section('title' , 'Enfermeria')

@section('content')
<div class="container" >
    <div class="row">
        <div class="col-md-11">
            <h4 style= "text-align:center;">GERENCIA SSST - SALUD OCUPACIONAL</h4>
            <div class="panel panel-default" >
               
                <div class="panel-heading" style="text-align:center;">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                     
                     <center><img src="{{URL::asset('imagenes/imagen10.png')}}" width="100%"  > 
                     
                     
                     </center>

                    
</div></div></div></div></div>




                
            </div>
        </div>
    </div>
</div>
@endsection
