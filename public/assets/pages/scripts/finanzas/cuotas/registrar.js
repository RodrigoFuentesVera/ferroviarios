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

function actualizar(id){
    $("#tabla_cuotas").on('submit', '.form-guardar_'+id, function () {
        event.preventDefault();
        const form = $(this);
        /*swal({
            title: '¿ Está seguro que desea eliminar el registro ?',
            text: "Esta acción no se puede deshacer!",
            icon: 'warning',
            buttons: {
                cancel: "Cancelar",
                confirm: "Aceptar"
            },
        }).then((value) => {
            if (value) {
                ajaxRequest(form);
            }
        });*/
        ajaxRequest(form,id);
    });
}

function ajaxRequest(form,id) {
    $.ajax({
        url: form.attr('action'),
        type: 'POST',
        data: form.serialize(),
        success: function (respuesta) {
            var btn = document.getElementById('btn_pagar_'+id);
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