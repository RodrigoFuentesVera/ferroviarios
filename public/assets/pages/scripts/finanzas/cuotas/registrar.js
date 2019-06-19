$(document).ready(function () {
    $( "#id_integrante").change(function () {
        var idIntegrante = $("#id_integrante option:selected").val();
        if(null != idIntegrante && idIntegrante != ''){
            $('#tabla_cuotas').attr('hidden',false);
        }else{
            $('#tabla_cuotas').attr('hidden',true);
        }
    });
});

function actualizar(id_mes){

    id_anio = $('#id_anio').val();
    id_integrante = $('#id_integrante').val();

    $("#tabla_cuotas").on('submit', '.form-guardar_'+id_mes, function () {
        event.preventDefault();
        const form = $(this);
        /*swal({
                title: '¿ Está seguro que desea eliminar la cuota ?',
                text: "Esta acción no se puede deshacer!",
                icon: 'warning',
                buttons: {
                    cancel: "Cancelar",
                    confirm: "Aceptar"
                },
            }).then((value) => {
                if (value) {
                    ajaxRequest(form,id);
                }
            });
        }else{
            ajaxRequest(form,id);
        }*/
        ajaxRequest(form,id_mes,id_anio,id_integrante);
    });
}

function ajaxRequest(form,id_mes,id_anio,id_integrante) {
    $.ajax({
        url: form.attr('action')+'/'+id_anio+'/'+id_integrante,
        type: 'POST',
        data: form.serialize(),
        success: function (respuesta) {
            var btn = document.getElementById('btn_pagar_'+id_mes);
            if (respuesta.mensaje == "insert") {
                btn.className = 'btn btn-success btn-xs tooltipsC'
                btn.innerHTML = 'Pagado';
            } else if(respuesta.mensaje == "delete"){
                btn.className = 'btn btn-danger btn-xs tooltipsC'
                btn.innerHTML = 'No Pagado';
            } else {
                alert(respuesta.mensaje);
            }
        },
        error: function () {

        }
    });
}

