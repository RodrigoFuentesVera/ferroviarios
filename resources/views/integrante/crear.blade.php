@extends("theme.$theme.layout")

@section('titulo')
INTEGRANTES
@endsection

@section('subtitulo')
Creación de un nuevo integrante
@endsection

@section("scripts")
<script type="text/javascript">
    $(function () {
        $('.select2').select2()
    });
</script>
@endsection


@section('contenido')
<div class="row">
    <div class="col-lg-12">
        @include('includes.form-error')
        @include('includes.form-mensaje')
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Crear Integrante</h3>
            </div>
            <form action="{{route('guardar_integrante')}}" method="POST" id="form-general" class="form-horizontal">
                @csrf
                <div class="box-body">
                    @include('integrante.form')
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
