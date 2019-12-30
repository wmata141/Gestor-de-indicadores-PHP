<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title_prefix', config('adminlte.title_prefix', ''))
@yield('title', config('adminlte.title', 'AdminLTE 2'))
@yield('title_postfix', config('adminlte.title_postfix', ''))</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/vendor/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/vendor/font-awesome/css/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/vendor/Ionicons/css/ionicons.min.css') }}">

    @if(config('adminlte.plugins.select2'))
        <!-- Select2 -->
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css">
    @endif

    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/AdminLTE.min.css') }}">

    @if(config('adminlte.plugins.datatables'))
        <!-- DataTables -->
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
    @endif

    @yield('adminlte_css')

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition @yield('body_class')">

@yield('body')

<script src="{{ asset('vendor/adminlte/vendor/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/adminlte/vendor/jquery/dist/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('vendor/adminlte/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>

@if(config('adminlte.plugins.select2'))
    <!-- Select2 -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
@endif

@if(config('adminlte.plugins.datatables'))
    <!-- DataTables -->
    <script src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
@endif

@if(config('adminlte.plugins.chartjs'))
    <!-- ChartJS -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js"></script>
@endif

@if(config('adminlte.plugins.datatables'))
    <!-- datatable JS -->
   <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <!-- datatable style -->
    <link rel="stylesheet" href="{{asset('css/dataTables.jqueryui.min.css')}}">
    <!-- datatable bootstrap style -->
    <link rel="stylesheet" href="{{asset('css/dataTables.bootstrap.min.css')}}">
@endif

@yield('adminlte_js')

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
                  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
                  <script>
                  $( function() {
                    var date = $('#datepicker').datepicker({ dateFormat: 'dd/mm/yy' }).val();
                  } );
                  </script>


                  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
                  <script>
                  $( function() {
                    var date = $('#datepicker1').datepicker({ dateFormat: 'dd/mm/yy' }).val();
                  } );
                  </script>

                  <script>
                  $(document).ready(function() {
    $('.js-example-basic-single').select2();
});
                  </script>

                  <link href="path/to/select2.min.css" rel="stylesheet" />
<script src="path/to/select2.min.js"></script>


<script languague="javascript">
        function mostrar() {
            div = document.getElementById('flotante');
            div.style.display = '';
        }

        function cerrar() {
            div = document.getElementById('flotante');
            div.style.display = 'none';
        }
</script>

<script type="text/javascript">
function mostrar(){
document.getElementById('oculto').style.display = 'block';}
</script>

<script type="text/javascript">
function mostrar1(){
document.getElementById('oculto1').style.display = 'block';}
</script>

<script type="text/javascript">
function mostrar3(){
document.getElementById('oculto3').style.display = 'block';}
</script>
<script >
$("#btn").click(function() {
  $(this).fadeOut(50);
  $("btn2").fadeIn(2000);
  
});
</script>

<script >
$("#btn2").click(function() {
  $(this).fadeOut(50);
  
  
});
</script>

<script type="text/javascript">
function mostrar4(){
document.getElementById('oculto4').style.display = 'block';}
</script>

<script>
function alerta()
{
alert('consulta creada con exito');
}
</script>

<script> 



    $('#edit').on('show.bs.modal', function (event) {

        console.log("Modal Opened");
          var button = $(event.relatedTarget) 
          
          var recipient = button.data('whatever') 



          var modal = $(this)


          modal.find('.modal-body input').val(recipient)
    })
    

    $('#delete').on('show.bs.modal', function (event) {

      var button = $(event.relatedTarget) 

      var cat_id = button.data('catid') 
      var modal = $(this)

      modal.find('.modal-body #cat_id').val(cat_id);
    })

    $('#myModalEdit').on('show.bs.modal', function (event) {

      console.log('modal open');
      var button = $(event.relatedTarget) 
      var res_laboratorio = button.data('res_laboratorio') 
      var res_rayosx = button.data('res_rayosx') 
      var  res_visual= button.data('res_visual') 
      var  res_audio= button.data('res_audio') 
      var  res_exa_med= button.data('res_exa_med') 
      var  consultorio= button.data('consultorio')
      var cat_id = button.data('catid') 
 
      var modal = $(this)

      modal.find('.modal-body #laboratorio').val(res_laboratorio);
      modal.find('.modal-body #rayosx').val(res_rayosx);
      modal.find('.modal-body #visual').val(res_visual);
      modal.find('.modal-body #audio').val(res_audio);
      modal.find('.modal-body #examen').val(res_exa_med);
      modal.find('.modal-body #consultorio').val(consultorio);
      modal.find('.modal-body #cat_id').val(consulta);
})
  


</script>



</body>
</html>
