/**
 * UTILIZADO PARA MENSAJES DE VALIDACIÓN DE FORMULARIOS
 */
function validador(obj, msj) {
    var txtOriginal = obj.prev().text();
    obj.focus();
    obj.prev().html(
        obj.prev().text() 
        + ' <span id="aviso" class="label label-important" style="display: none">' 
        + msj 
        + '</span>'
    );
    $('#aviso').fadeIn('slow');
    setTimeout(function(){
        $('#aviso').fadeOut('slow');
        setTimeout(function(){
            obj.prev().text(txtOriginal);
        }, 500);
    }, 1700);
}

/**
 * UTILIZADO PARA CONTAR CARACTERES DEACUERDO A LA LONGITUD INDICADA
 */
function contador(obj,maxLen,objTxt) {
    switch (maxLen.length) {
        case 2:
            var contador;
            if (obj.val().length <= 9) {
                contador = '0' + obj.val().length;
            } else if (obj.val().length <= maxLen) {
                contador = obj.val().length;
            }
            objTxt.text(contador + ' / ' + maxLen);
        break;
        case 3:
            var contador;
            if (realLength(obj) <= 9) {
                contador = '00' + realLength(obj);
            } else if (realLength(obj) <= 99) {
                contador = '0' + realLength(obj);
            } else if (realLength(obj) <= maxLen) {
                contador = realLength(obj);
            }
            objTxt.text(contador + ' / ' + maxLen);
        break;
    }
}

/**
 * CONTADOR REAL DE CARACTERES EN UN TEXTAREA
 */
function realLength(obj) {
    return obj.val().replace(/(\r\n|\n|\r)/g, "11").length;
}

/**
 * VALIDADORES DE PUNTOS Y COMAS
 */
function reemplazarPunto(val){
    str = val+"";
    out = str.replace(/\./g,'');
    return out;
}
function reemplazarComaXPunto(val){
    str = val+"";
    out = str.replace(/\,/g,'.');
    return out;
}
function reemplazarPuntoXComa(val){
    str = val+"";
    out = str.replace(/\./g,',');
    return out;
}
function quitarSignoDolar(val){
    strLen = val.length;
    out = val.substring(2,strLen);
    return out;
}