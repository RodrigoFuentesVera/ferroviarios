@extends("theme.$theme.layout")

@section('titulo')
INTEGRANTES
@endsection

@section('subtitulo')
Lista de integrantes vigentes en el club
@endsection

@section("scripts")
<script type="text/javascript">
    $(function(){
        $(document).ready(function() {
            var tabla_integrantes = $('#tabla_integrantes').DataTable();
            
        });
    })


</script>
@endsection

@section('contenido')
<div class="row">
    <div class="col-lg-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title"></h3>
                <div class="box-tools pull-right">
                    <a href="{{route('crear_integrante')}}" class="btn btn-block btn-info btn-sm">
                        <i class="fa fa-fw fa-plus-circle"></i> Nuevo Integrante
                    </a>
                </div>
            </div>
            <div class="box-body table-responsive">
                <table id="tabla_integrantes" class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Rut</th>
                            <th>Categoría</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($integrantes as $inte)
                            <tr>
                                <td>{{$inte->nombre_integrante}} {{$inte->apellido_paterno_integrante}} {{$inte->apellido_materno_integrante}}</td>
                                <td>{{$inte->rut_integrante}}</td>
                                <td>
                                    @if ($inte->id_categoria == 1)<span class="badge bg-aqua-active">Adulto</span>@endif
                                    @if ($inte->id_categoria == 2)<span class="badge bg-fuchsia">Flag</span>@endif
                                    @if ($inte->id_categoria == 3)<span class="badge bg-teal">U21</span>@endif 
                                    @if ($inte->id_categoria == 4)<span class="badge bg-light-blue">Adulto/U21</span>@endif 
                                    @if ($inte->id_categoria == null)<span class="badge bg-gray text-black">Socio</span>@endif 
                                </td>
                                <td>
                                    <i class="fa fa-fw fa-pencil"></i>
                                    <i class="fa fa-fw fa-trash text-danger"></i>
                                </td>
                            </tr>    
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
