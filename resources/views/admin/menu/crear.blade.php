@extends("theme.$theme.layout")

@section('titulo')
Menú 
@endsection

@section('scripts')
<script src="{{asset("assets/pages/scripts/admin/menu/crear.js")}}" type="javascript"></script>
@endsection

@section('contenido')
<div class="row">
    <div class="col-lg-12">
        @include('includes.form-error')
        @include('includes.form-mensaje')
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Crear Menú</h3>
            </div>
            <form action="{{route('guardar_menu')}}" method="POST" id="form-general" class="form-horizontal" autocomplete="off">
                @csrf
                <div class="box-body">
                    @include('admin.menu.form')
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
