<div class="form-group col-lg-12">
    <label for="id_anio" class="control-label">Año</label>
    <select class="form-control select2" style="width: 100%;" name="id_anio" id="id_anio" value="{{old('id_anio')}}">
        @foreach ($anios as $anio)
            @if ($anio->anio == now()->year)
                <option value="{{$anio->id_anio}}" selected>{{$anio->anio}}</option>
            @else
                <option value="{{$anio->id_anio}}">{{$anio->anio}}</option>
            @endif
        @endforeach
    </select>
</div>

<div class="form-group col-lg-12">
    <label for="id_integrante" class="control-label">Integrante</label>
    <select class="form-control select2" 
            style="width: 100%;" 
            name="id_integrante" 
            id="id_integrante" 
            value="{{old('id_integrante')}}">
        <option value="">Seleccione Integrante</option>
        @foreach ($integrantes as $inte)
            <option value="{{$inte->id_integrante}}">{{$inte->nombre_integrante}} {{$inte->apellido_paterno_integrante}} {{$inte->apellido_materno_integrante}}</option> 
        @endforeach
    </select>
</div>

<table id="tabla_cuotas" class="table table-bordered table-hover table-striped" style="width: 300px;" hidden>
    <thead>
        <tr>
            <th>Mes</th>
            <th>Pagado/No Pagado</th>
        </tr>
    </thead>
    <tbody>
        <input type="hidden" name="hid_id_mes" id="hid_id_mes">
        @foreach ($meses as $mes)
            <tr>
                <td>{{$mes->mes}}</td>
                <td>
                    <form action="{{route('guardar_cuota',['id_mes' => $mes->id_mes, 'id_anio' => 5, 'id_integrante' => 65])}}" class="form-guardar_{{$mes->id_mes}}" method="POST">
                        @csrf @method("post")
                        @if ($mes->pagado)
                            <button id="btn_pagar_{{$mes->id_mes}}" type="submit" onclick="javascript:actualizar({{$mes->id_mes}})" class="btn btn-success btn-xs tooltipsC" style="width: 90px;" title="Cambiar Estado">
                                Pagado
                            </button>
                        @else 
                            <button id="btn_pagar_{{$mes->id_mes}}" type="submit" onclick="javascript:actualizar({{$mes->id_mes}})" class="btn btn-danger btn-xs tooltipsC" style="width: 90px;" title="Cambiar Estado">
                                No Pagado
                            </button>
                        @endif
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>