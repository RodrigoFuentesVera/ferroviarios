@extends("theme.$theme.layout")

@section('titulo')
PARTIDOS
@endsection

@section('subtitulo')
Lista de partidos del equipo adulto 
@endsection

@section("scripts")
<script type="text/javascript">

</script>
@endsection

@section('contenido')
<div class="row">
    <div class="box box-info">
        <div class="col-lg-12">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_oficial" data-toggle="tab">Oficiales</a></li>
                <li><a href="#tab_amistoso" data-toggle="tab">Amistosos</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab_oficial">
                    <div class="box-header with-border">
                        <h3 class="box-title">Partidos Oficiales del Torneo</h3>
                    </div>
                    <div class="box-body table-responsive">
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>Fecha</th>
                                    <th>Local</th>
                                    <th class="text-center">Resultado</th>
                                    <th>Visita</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($partidosOf as $par)
                                    <tr>
                                        <td>{{$par->fecha_partido}}</td>
                                        <td>{{$par->equipo_local}}</td>
                                        <td class="text-center">{{$par->puntos_local}} - {{$par->puntos_visita}}</td>
                                        <td>{{$par->equipo_visita}}</td>
                                        <td>
                                            <i class="fa fa-fw fa-pencil text-yellow" title="Editar partido"></i>
                                            <i class="fa fa-fw fa-remove text-danger" title="Eliminar partido"></i>
                                        </td>
                                    </tr>    
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane" id="tab_amistoso">
                    <div class="box-header with-border">
                        <h3 class="box-title">Partidos Amistoso</h3>
                    </div>
                    <div class="box-body table-responsive">
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>Fecha</th>
                                    <th>Local</th>
                                    <th class="text-center">Resultado</th>
                                    <th>Visita</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($partidosNof as $par)
                                    <tr>
                                        <td>{{$par->fecha_partido}}</td>
                                        <td>{{$par->equipo_local}}</td>
                                        <td class="text-center">{{$par->puntos_local}} - {{$par->puntos_visita}}</td>
                                        <td>{{$par->equipo_visita}}</td>
                                        <td>
                                            <i class="fa fa-fw fa-pencil text-yellow" title="Editar partido"></i>
                                            <i class="fa fa-fw fa-remove text-danger" title="Eliminar partido"></i>
                                            <button type="button" class="btn btn-info btn-xs" title="Nomina">Nomina</button>
                                        </td>
                                    </tr>    
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            

            
        </div>
    </div>
</div>
@endsection