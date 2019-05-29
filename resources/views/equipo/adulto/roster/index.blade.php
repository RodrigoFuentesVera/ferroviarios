@extends("theme.$theme.layout")

@section('titulo')
ROSTER ADULTO
@endsection

@section('subtitulo')
Lista de jugadores vigentes en equipo Adulto
@endsection

@section("scripts")
<script type="text/javascript">

</script>
@endsection

@section('contenido')
<div class="row">
    <div class="box box-info">
        <div class="col-lg-6">
            <div class="box-header with-border">
                <h3 class="box-title">Roster Oficial Torneo</h3>
            </div>
            <div class="box-body table-responsive">
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Edad</th>
                            <th>Pos 1</th>
                            <th>Pos 2</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jugadores as $jug)
                            <tr>
                                <td>{{$jug->num}}</td>
                                <td>{{$jug->nombre_integrante}} {{$jug->apellido_paterno_integrante}}</td>
                                <td>{{$jug->edad}}</td>
                                <td>
                                    @if ($jug->id_posicion_1 == 1 || 
                                        $jug->id_posicion_1 == 2 ||
                                        $jug->id_posicion_1 == 3 ||
                                        $jug->id_posicion_1 == 4 )
                                        <span class="badge bg-red">{{$jug->posicion_1}}</span>   
                                    @endif
                                    @if ($jug->id_posicion_1 == 5 || 
                                        $jug->id_posicion_1 == 6 ||
                                        $jug->id_posicion_1 == 7)
                                        <span class="badge bg-blue">{{$jug->posicion_1}}</span>   
                                    @endif
                                </td>
                                <td>
                                    @if ($jug->id_posicion_2 == 1 || 
                                        $jug->id_posicion_2 == 2 ||
                                        $jug->id_posicion_2 == 3 ||
                                        $jug->id_posicion_2 == 4 )
                                        <span class="badge bg-red">{{$jug->posicion_2}}</span>   
                                    @endif
                                    @if ($jug->id_posicion_2 == 5 || 
                                        $jug->id_posicion_2 == 6 ||
                                        $jug->id_posicion_2 == 7)
                                        <span class="badge bg-blue">{{$jug->posicion_2}}</span>   
                                    @endif
                                </td>
                                <td>
                                    <i class="fa fa-fw fa-pencil text-yellow" title="Cambiar posición"></i>
                                    <i class="fa fa-fw fa-remove text-danger" title="Quitar de roster oficial"></i>
                                </td>
                            </tr>    
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="box-header with-border">
                <h3 class="box-title">No Compiten</h3>
            </div>
            <div class="box-body table-responsive">
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Edad</th>
                            <th>Pos 1</th>
                            <th>Pos 2</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jugadoresNo as $jug)
                            <tr>
                                <td>{{$jug->num}}</td>
                                <td>{{$jug->nombre_integrante}} {{$jug->apellido_paterno_integrante}}</td>
                                <td>{{$jug->edad}}</td>
                                <td>
                                    @if ($jug->id_posicion_1 == 1 || 
                                        $jug->id_posicion_1 == 2 ||
                                        $jug->id_posicion_1 == 3 ||
                                        $jug->id_posicion_1 == 4 )
                                        <span class="badge bg-red">{{$jug->posicion_1}}</span>   
                                    @endif
                                    @if ($jug->id_posicion_1 == 5 || 
                                        $jug->id_posicion_1 == 6 ||
                                        $jug->id_posicion_1 == 7)
                                        <span class="badge bg-blue">{{$jug->posicion_1}}</span>   
                                    @endif
                                </td>
                                <td>
                                    @if ($jug->id_posicion_2 == 1 || 
                                        $jug->id_posicion_2 == 2 ||
                                        $jug->id_posicion_2 == 3 ||
                                        $jug->id_posicion_2 == 4 )
                                        <span class="badge bg-red">{{$jug->posicion_2}}</span>   
                                    @endif
                                    @if ($jug->id_posicion_2 == 5 || 
                                        $jug->id_posicion_2 == 6 ||
                                        $jug->id_posicion_2 == 7)
                                        <span class="badge bg-blue">{{$jug->posicion_2}}</span>   
                                    @endif
                                </td>
                                <td>
                                    <i class="fa fa-fw fa-pencil text-yellow" title="Cambiar posicion"></i>
                                    <i class="fa fa-fw fa-plus text-info" title="Agregar a roster oficial"></i>
                                </td>
                            </tr>    
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="box-header with-border">
                <h3 class="box-title">Ofensiva</h3>
            </div>
            <div class="box-body table-responsive">
                <table class="table table-bordered table-hover table-striped" style="width: 200px;">
                    <tbody>
                        <tr>
                            <th class="bg-red-gradient">QB</th>
                        </tr>
                        @foreach ($jugadores as $jug)
                            @if ($jug->id_posicion_1 == 1 || $jug->id_posicion_2 == 1)
                                <tr>
                                    <td>{{$jug->nombre_integrante}} {{$jug->apellido_paterno_integrante}}</td>
                                </tr>
                            @endif
                        @endforeach
                        <tr>
                            <th class="bg-red-gradient">WR / RB</th>
                        </tr>
                        @foreach ($jugadores as $jug)
                            @if ($jug->id_posicion_1 == 2 || $jug->id_posicion_1 == 3 || 
                                    $jug->id_posicion_2 == 2 || $jug->id_posicion_2 == 3)
                                <tr>
                                    <td>{{$jug->nombre_integrante}} {{$jug->apellido_paterno_integrante}}</td>
                                </tr>
                            @endif
                        @endforeach
                        <tr>
                            <th class="bg-red-gradient">OL</th>
                        </tr>
                        @foreach ($jugadores as $jug)
                            @if ($jug->id_posicion_1 == 4 || $jug->id_posicion_2 == 4)
                                <tr>
                                    <td>{{$jug->nombre_integrante}} {{$jug->apellido_paterno_integrante}}</td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="box-header with-border">
                <h3 class="box-title">Defensiva</h3>
            </div>
            <div class="box-body table-responsive">
                <table class="table table-bordered table-hover table-striped" style="width: 200px;">
                    <tbody>
                        <tr>
                            <th class="bg-blue-gradient">DL</th>
                        </tr>
                        @foreach ($jugadores as $jug)
                            @if ($jug->id_posicion_1 == 5 || $jug->id_posicion_2 == 5)
                                <tr>
                                    <td>{{$jug->nombre_integrante}} {{$jug->apellido_paterno_integrante}}</td>
                                </tr>
                            @endif
                        @endforeach
                        <tr>
                            <th class="bg-blue-gradient">LB</th>
                        </tr>
                        @foreach ($jugadores as $jug)
                            @if ($jug->id_posicion_1 == 7 || $jug->id_posicion_2 == 7)
                                <tr>
                                    <td>{{$jug->nombre_integrante}} {{$jug->apellido_paterno_integrante}}</td>
                                </tr>
                            @endif
                        @endforeach
                        <tr>
                            <th class="bg-blue-gradient">DB</th>
                        </tr>
                        @foreach ($jugadores as $jug)
                            @if ($jug->id_posicion_1 == 6 || $jug->id_posicion_2 == 6)
                                <tr>
                                    <td>{{$jug->nombre_integrante}} {{$jug->apellido_paterno_integrante}}</td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection