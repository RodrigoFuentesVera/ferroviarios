@extends("theme.$theme.layout")

@section('titulo')
Mantenedor Equipo 
@endsection

@section("scripts")
<script type="text/javascript">
    $(function(){
        $(document).ready(function() {
            var tabla_equipos = $('#tabla_equipos').DataTable();
            
        });
    })


</script>
@endsection

@section('contenido')
<div class="row">
    <div class="col-lg-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Equipos</h3>
                <div class="box-tools pull-right">
                    <a href="{{route('crear_equipo')}}" class="btn btn-block btn-info btn-sm">
                        <i class="fa fa-fw fa-plus-circle"></i> Ingresar Equipo
                    </a>
                </div>
            </div>
            <div class="box-body table-responsive">
                <table id="tabla_equipos" class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Equipo</th>
                            <th>Categoría</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($equipos as $equipo)
                            <tr>
                                <td>{{$equipo->equipo}}</td>
                                <td>
                                    @if ($equipo->id_categoria == 1)<span class="badge bg-aqua-active">Adulto</span>@endif
                                    @if ($equipo->id_categoria == 2)<span class="badge bg-fuchsia">Flag</span>@endif
                                    @if ($equipo->id_categoria == 3)<span class="badge bg-teal">U21</span>@endif  
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
