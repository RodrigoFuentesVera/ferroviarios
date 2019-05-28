<div class="form-group">
    <label for="rut_integrante" class="col-lg-3 control-label requerido">Rut</label>
    <div class="col-lg-8">
    <input type="text" class="form-control" name="rut_integrante" id="rut_integrante" required value="{{old('rut_integrante')}}">
    </div>
</div>
<div class="form-group">
    <label for="nombre_integrante" class="col-lg-3 control-label requerido">Nombre</label>
    <div class="col-lg-8">
        <input type="text" class="form-control" name="nombre_integrante" id="nombre_integrante" required value="{{old('nombre_integrante')}}">
    </div>
</div>
<div class="form-group">
    <label for="apellido_paterno_integrante" class="col-lg-3 control-label requerido">Apellido Paterno</label>
    <div class="col-lg-8">
        <input type="text" class="form-control" name="apellido_paterno_integrante" id="apellido_paterno_integrante" required value="{{old('apellido_paterno_integrante')}}">
    </div>
</div>
<div class="form-group">
    <label for="apellido_materno_integrante" class="col-lg-3 control-label">Apellido Materno</label>
    <div class="col-lg-8">
        <input type="text" class="form-control" name="apellido_materno_integrante" id="apellido_materno_integrante"  value="{{old('apellido_materno_integrante')}}">
    </div>
</div>
<div class="form-group">
    <label for="fecha_nacimineto_integrante" class="col-lg-3 control-label requerido">Fecha de Nacimiento</label>
    <div class="col-lg-8">
        <input type="text" class="form-control" name="fecha_nacimineto_integrante" id="fecha_nacimineto_integrante" required value="{{old('fecha_nacimineto_integrante')}}">
    </div>
</div>
<div class="form-group">
    <label for="id_sexo" class="col-lg-3 control-label requerido">Sexo</label>
    <div class="col-lg-8">
        <select class="form-control select2" style="width: 100%;" name="id_sexo" id="id_sexo" required value="{{old('id_sexo')}}">
            <option>Seleccione Sexo</option>
            <option value="1">Masculino</option>
            <option value="2">Femenino</option>
        </select>
    </div>
</div>
<div class="form-group">
    <label for="email" class="col-lg-3 control-label requerido">Email</label>
    <div class="col-lg-8">
        <input type="email" class="form-control" name="email" id="email" required value="{{old('email')}}">
    </div>
</div>
<div class="form-group">
    <label for="id_tipo_integrante" class="col-lg-3 control-label requerido">Tipo de Integrante</label>
    <div class="col-lg-8">
        <select class="form-control select2" style="width: 100%;" name="id_tipo_integrante" id="id_tipo_integrante" required value="{{old('id_tipo_integrante')}}">
            <option>Seleccione Tipo Integrante</option>
            <!-- TIPOS INTEGRNATE -->
        </select>
    </div>
</div>
<div class="form-group">
    <label for="id_categoria" class="col-lg-3 control-label requerido">Categoría</label>
    <div class="col-lg-8">
        <select class="form-control select2" style="width: 100%;" name="id_categoria" id="id_categoria" required value="{{old('id_categoria')}}">
            <option>Seleccione Categoría</option>
            <!-- CATEGORIAS -->
        </select>
    </div>
</div>
