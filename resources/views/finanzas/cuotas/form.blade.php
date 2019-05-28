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
        <tr>
            <td>Enero</td>
            <td>
                <form action="{{route('guardar_cuota')}}" method="POST">
                    <button type="submit" class="btn btn-success" style="width: 90px;" title="Pagado">
                            Pagado
                    </button>
                </form>
            </td>
        </tr>
        <tr>
            <td>Febrero</td>
            <td>
                <form action="{{route('guardar_cuota')}}" method="POST">
                    <button type="submit" class="btn btn-danger" style="width: 90px;" title="No Pagado">
                            No Pagado
                    </button>
                </form>
            </td>
        </tr>
        <tr>
            <td>Marzo</td>
            <td></td>
        </tr>
        <tr>
            <td>Abril</td>
            <td></td>
        </tr>
        <tr>
            <td>Mayo</td>
            <td></td>
        </tr>
        <tr>
            <td>Junio</td>
            <td></td>
        </tr>
        <tr>
            <td>Julio</td>
            <td></td>
        </tr>
        <tr>
            <td>Agosto</td>
            <td></td>
        </tr>
        <tr>
            <td>Septiembre</td>
            <td></td>
        </tr>
        <tr>
            <td>Octubre</td>
            <td></td>
        </tr>
        <tr>
            <td>Novimebre</td>
            <td></td>
        </tr>
        <tr>
            <td>Diciembre</td>
            <td></td>
        </tr>
    </thead>
    <tbody>
    </tbody>
</table>