<table id="tabla_cuotas" class="table table-bordered table-hover table-striped" style="width: 300px;">
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
                    <form action="{{route('guardar_cuota',['id_mes' => $mes->id_mes])}}" class="form-guardar_{{$mes->id_mes}}" method="POST">
                        @csrf @method("post")
                        @if ($mes->pagado)
                            <button id="btn_pagar_{{$mes->id_mes}}" type="submit" onclick="javascript:actualizar({{$mes->id_mes}})" class="btn btn-success btn-xs" style="width: 90px;" title="Cambiar Estado">
                                Pagado
                            </button>
                        @else 
                            <button id="btn_pagar_{{$mes->id_mes}}" type="submit" onclick="javascript:actualizar({{$mes->id_mes}})" class="btn btn-danger btn-xs" style="width: 90px;" title="Cambiar Estado">
                                No Pagado
                            </button>
                        @endif
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>