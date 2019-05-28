@extends("theme.$theme.layout")

@section('titulo')
Mantenedor Año 
@endsection

@section("scripts")
<script type="text/javascript">
    $(function(){
        $(document).ready(function() {
            var tabla_anios = $('#tabla_anios').DataTable();
            
        });
    })


</script>
@endsection

@section('contenido')
<div class="row">
    <div class="col-lg-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Años</h3>
                <div class="box-tools pull-right">
                    <a href="{{route('crear_anio')}}" class="btn btn-block btn-info btn-sm">
                        <i class="fa fa-fw fa-plus-circle"></i> Ingresar Año
                    </a>
                </div>
            </div>
            <div class="box-body table-responsive">
                <table id="tabla_anios" class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Año</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($anios as $anio)
                            <tr>
                                <td>{{$anio->anio}}</td>
                                <td>
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
