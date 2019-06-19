@extends("theme.$theme.layout")

@section('titulo')
REGISTRAR CUOTAS
@endsection

@section('subtitulo')
Registro de cuotas por integrante
@endsection

@section('scripts')
    <script src="{{asset("assets/pages/scripts/finanzas/cuotas/registrar.js")}}"></script>
    <script>
        function cambiarIntegrante(){

            id_anio = $('#id_anio').val();
            id_integrante = $('#id_integrante').val();

            $.ajax({
                url: "mostrar/"+id_anio+"/"+id_integrante,
                type: 'GET',
                success: function (data) {
                    $('#div_cuotas').html(data);
                },
                error: function () {

                }
            });
        }
    </script>


@endsection

@section('contenido')
<div class="row">
    <div class="col-lg-12">
        @include('includes.form-error')
        @include('includes.form-mensaje')
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Ingreso de Cuotas</h3>
            </div>
            <div class="box-body">
                @include('finanzas.cuotas.form')
            </div>
        </div>
    </div>
</div>
@endsection
