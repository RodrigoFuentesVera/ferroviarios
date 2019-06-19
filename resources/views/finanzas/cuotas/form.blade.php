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
            value="{{old('id_integrante')}}"
            onchange="javascript:cambiarIntegrante();">
        <option value="">Seleccione Integrante</option>
        @foreach ($integrantes as $inte)
            <option value="{{$inte->id_integrante}}">{{$inte->nombre_integrante}} {{$inte->apellido_paterno_integrante}} {{$inte->apellido_materno_integrante}}</option> 
        @endforeach
    </select>
</div>

<div id="div_cuotas"></div>