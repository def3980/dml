/**
 * UTILIZADO PARA MOSTRAR LA FECHA Y HORA ACTUAL DEL SERVIDOR
 */
function nowDateTime() {
    var now     = new Date(),
        anio    = now.getFullYear(),
        mes     = now.getMonth()    <= 9 ? "0" + (now.getMonth() + 1)   : now.getMonth() + 1,
        dia     = now.getDate()     <= 9 ? "0" + now.getDate()          : now.getDate(),
        hora    = now.getHours()    <= 9 ? "0" + now.getHours()         : now.getHours(),
        minuto  = now.getMinutes()  <= 9 ? "0" + now.getMinutes()       : now.getMinutes(),
        segundo = now.getSeconds()  <= 9 ? "0" + now.getSeconds()       : now.getSeconds();
    return anio + "-" + mes + "-" + dia + " " + hora + ":" + minuto + ":" + segundo;
}

/**
 * UTILIZADO PARA MOSTRAR LA FECHA ACTUAL DEL SERVIDOR
 */
function nowDate() {
    var now     = new Date(),
        anio    = now.getFullYear(),
        mes     = now.getMonth()    <= 9 ? "0" + (now.getMonth() + 1)   : now.getMonth() + 1,
        dia     = now.getDate()     <= 9 ? "0" + now.getDate()          : now.getDate();
    return anio + "-" + mes + "-" + dia;
}