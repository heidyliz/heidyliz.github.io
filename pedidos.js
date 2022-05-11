$(document).ready(function(){

    $('#btn-send').click(function(){
        
        var errores = '';

        if( $('#name').val() == '' ){
            errores += '<p>Escriba un nombre</p>';
        }
        if( $('#surname').val() == '' ){
            errores += '<p>Escriba un apellido</p>';
        }
        if( $('#mail').val() == '' ){
            errores += '<p>Escriba un correo electrónico</p>';
        }
        if( $('#phone').val() == '' ){
            errores += '<p>Escriba un teléfono / celular</p>';
        }
        if( $('#province').val() == '' ){
            errores += '<p>Escriba su provincia</p>';
        }
        if( $('#adress').val() == '' ){
            errores += '<p>Escriba su dirección</p>';
        }
        if( $('#details').val() == '' ){
            errores += '<p>Escriba el detalle del pedido</p>';
        }

        
        if(errores == '' == false){
            var mensajeModal ='<div class="modal_wrap">'+
                                 '<div class="mensaje_modal">'+
                                   '<h3>Faltan datos por completar</h3>'+
                                      errores+
                                      '<span id="btnClose">Cerrar</span>'+
                                 '</div>'+
                               '</div>'
           
            $('body').append(mensajeModal);
        }

        $('#btnClose').click(function(){
            $('.modal_wrap').remove();
        });

    });


});