/**
 * UTILIZADO PARA MOSTRAR EN LA CONSOLA DEL NAVEGADOR LA INFO. DEL ARCHIVO
 * JSON YA SEA OBJETO O VARIABLE NORMAL
 */
function var_dump(variable) {
    switch (typeof variable) {
        case "object":
            for (var i in variable) {
                console.log(i + ":" + variable[i]);
            }
        break;
        default: //number, string, boolean, null, undefined 
            console.log(typeof variable + ":" + variable);
        break;
    }
}