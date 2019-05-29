<div class="form-group">
    <label for="fecha_partido" class="col-lg-3 control-label requerido">Fecha Partido</label>
    <div class="col-lg-8">
        <div class="input-group date">
            <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
            </div>
            <input type="text" class="form-control pull-right" id="fecha_partido" name="fecha_partido" required>
        </div>
    </div>
</div>

<div class="form-group">
    <label for="id_equipo_local" class="col-lg-3 control-label requerido">Equipo Local</label>
    <div class="col-lg-8">
        <select class="form-control select2" style="width: 100%;" name="id_equipo_local" id="id_equipo_local" required value="{{old('id_equipo_local')}}">
            <option>Seleccione Equipo</option>
            @foreach ($equipos as $eq)
                <option value="{{$eq->id_equipo}}">{{$eq->equipo}}</option>
            @endforeach
        </select>
    </div>
</div>
<div class="form-group">
    <label for="id_equipo_visita" class="col-lg-3 control-label requerido">Equipo Visitao</label>
    <div class="col-lg-8">
        <select class="form-control select2" style="width: 100%;" name="id_equipo_visita" id="id_equipo_visita" required value="{{old('id_equipo_visita')}}">
            <option>Seleccione Equipo</option>
            @foreach ($equipos as $eq)
                <option value="{{$eq->id_equipo}}">{{$eq->equipo}}</option>
            @endforeach
        </select>
    </div>
</div>
<div class="form-group">
    <label for="apellido_materno_integrante" class="col-lg-3 control-label">¿Partido Oficial?</label>
    <div class="col-lg-8">
        <label>
            <input type="checkbox" class="flat-red" name="apellido_materno_integrante" id="apellido_materno_integrante"  value="{{old('apellido_materno_integrante')}}">
        </label>
    </div>
</div>
