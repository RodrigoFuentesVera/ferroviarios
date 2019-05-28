$(function () {
    $('.select2').select2()
});

$( "#id_integrante").change(function () {
    var idIntegrante = $("#id_integrante option:selected").val();
    if(null != idIntegrante && idIntegrante != ''){
        $('#tabla_cuotas').attr('hidden',false);
    }else{
        $('#tabla_cuotas').attr('hidden',true);
    }
});