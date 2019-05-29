@extends("theme.$theme.layout")

@section('titulo')
PARTIDOS
@endsection

@section('subtitulo')
Creación de un nuevo partidso adulto
@endsection

@section("scripts")
<script type="text/javascript">
    $(function () {
        $('.select2').select2()
    });
    $('#fecha_partido').datepicker({
      autoclose: true
    });
    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })
</script>
@endsection


@section('contenido')
<div class="row">
    <div class="col-lg-12">
        @include('includes.form-error')
        @include('includes.form-mensaje')
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Crear Partido</h3>
            </div>
            <form action="" method="POST" id="form-general" class="form-horizontal">
                @csrf
                <div class="box-body">
                    @include('equipo/adulto/partido.form')
                </div>
                <div class="box-footer">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">
                        @include('includes.boton-form-crear')
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
@endsection
