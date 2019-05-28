@extends("theme.$theme.layout")

@section('titulo')
REGISTRAR CUOTAS
@endsection

@section('subtitulo')
Registro de cuotas por integrante
@endsection

@section('scripts')
    <script src="{{asset("assets/pages/scripts/finanzas/cuotas/registrar.js")}}"></script>
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
            <form action="{{route('guardar_cuota')}}" method="POST" id="form-general" class="form-horizontal">
                @csrf
                <div class="box-body">
                    @include('finanzas.cuotas.form')
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
