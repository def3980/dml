function modalConfirmDel(modArray) {
    var modal = '<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" '
                +'aria-labelledby="myModalLabel">'
                +'<div class="modal-header">'
                +'<h4 id="myModalLabel"><div class="text-error" style="margin: 0">IMPORTANTE !!</div></h4>'
                +'</div>'
                +'<div class="modal-body">';
        modal   += '<p>Se proceder&aacute; a eliminar la siguiente informaci&oacute;n :';
        modal   += '<ul>';
        for (i = 0 ; i < modArray.length ; i += 1) {
            modal += '<li>'+modArray[i]+'</li>';
        }
        modal   += '</ul>';
        modal   += 'de la base de datos de forma <strong>definitiva</strong>,';
        modal   += ' lo cual queda <span class="label label-important">bajo su total responsabilidad</span>.';
        modal   += '</div>'
                +'<div class="modal-footer">'
                +'<button class="btn btn-mini btn-danger btnEliminar">Eliminar</button>'
                +'<button class="btn btn-mini" data-dismiss="modal" aria-hidden="true">Cancelar</button>'
                +'</div>'
                +'</div>';
    return modal;
}

function modalSendEmail() {
    var modal = '<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">'
                    +'<div class="modal-header">'
                        +'<button type="button" class="close" style="margin-top: 10px" data-dismiss="modal" aria-hidden="true">×</button>'
                        +'<h4 id="myModalLabel"><div class="text-error" style="margin: 0">IMPORTANTE !!</div></h4>'
                    +'</div>'
                    +'<div class="modal-body">'
                        +'<p>Se proceder&aacute; a enviar un correo electr&oacute;nico de la informaci&oacute;n recopilada, puede dejarlo en "Pendiente" &oacute; enviarlo de forma definitiva :</p>'
                        +'<ul>'
                            +'<li style="margin-bottom: 2px"><button class="btn btn-warning btn-mini disabled">Pendiente</button> : indica que se puede modificar y enviar el requerimiento despu&eacute;s.</li>'
                            +'<li><button class="btn btn-success btn-mini disabled">Aprobaci&oacute;n</button> : envia el requerimiento y ya no se puede modificar o eliminar.</li>'
                        +'</ul>'
                    +'</div>'
                    +'<div class="modal-footer" style="text-align: center">'
                        +'<button class="btn btn-small btn-warning btnPendiente">Pendiente</button>'
                        +'<button class="btn btn-small btn-success btnAprobacion">Aprobaci&oacute;n</button>'
                    +'</div>'
                +'</div>';
    return modal;
}

function modalApprovals(option,da) {
    var modal = '';
    switch (option){
        case 'aprobacion':
            modal = '<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">'
                        +'<div class="modal-header">'
                            +'<button type="button" class="close" style="margin-top: 10px" data-dismiss="modal" aria-hidden="true">×</button>'
                            +'<h4 id="myModalLabel"><div class="text-error" style="margin: 0">IMPORTANTE !!</div></h4>'
                        +'</div>'
                        +'<div class="modal-body">'
                            +'<p>A continuaci&oacute;n se va a proceder a realizar la aprobaci&oacute;n de un ticket aereo y dicha acci&oacute;n <u><strong>no</strong> podr&aacute; ser modificada</u>. Si est&aacute; seguro de realizar este proceso, '
                            +'pulse en aceptar para terminar con la acci&oacute;n.</p>';
            if (da.length) {
                modal +=    '<p style="text-align: center">'
                            +'   Delegar funci&oacute;n de ticket aereo a '
                            +'   <select name="cbx-delegados" id="cbx-delegados" style="margin: 0">';
                for (var k in da) {
                    modal += '      <option value="'+k+'">'+da[k]+'</option>';
                }
                modal +=    '   </select>'
                            +'</p>';
            }
            modal +=     '</div>'
                        +'<div class="modal-footer" style="text-align: center">'
                            +'<button class="btn btn-small btn-success btnAprobacion">Aceptar</button>'
                        +'</div>'
                    +'</div>';
        break;
        default:
            modal = '<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">'
                        +'<div class="modal-header">'
                            +'<button type="button" class="close" style="margin-top: 10px" data-dismiss="modal" aria-hidden="true">×</button>'
                            +'<h4 id="myModalLabel"><div class="text-error" style="margin: 0">IMPORTANTE !!</div></h4>'
                        +'</div>'
                        +'<div class="modal-body">'
                            +'<p>Indique la raz&oacute;n o motivo por el cual se le niega el requerimeinto de pasaje o ticket aereo al funcionario. Tenga en cuenta que el texto ingresado no podr&aacute; ser modificado ni eliminado posteriormente.</p>'
                            +'<table style="width: 100%">'
                                +'<tbody>'
                                    +'<tr>'
                                        +'<td colspan="2" style="border-bottom: 1px dotted #ddd; padding: 5px 0"></td>'
                                    +'</tr>'
                                    +'<tr>'
                                        +'<td style="padding-top: 10px">'
                                            +'<label for="ap_negacion">Detalle de la negativa : <span class="label label-important msj-ap_negacion" style="display: none"></span></label>'
                                            +'<table style="width: 100%">'
                                                +'<tr>'
                                                    +'<td>'
                                                        +'<textarea rows="2" name="ap_negacion"  placeholder="Raz&oacute;n de la negativa al pasaje aereo..." style="resize: none; margin: 0; width: 97.5%;" id="ap_negacion"></textarea>'
                                                    +'</td>'
                                                +'</tr>'
                                                +'<tr>'
                                                    +'<td style="text-align: right"><span class="ap_negacion estilo">Sin l&iacute;mite</span></td>'
                                                +'</tr>'
                                            +'</table>'
                                        +'</td>'
                                    +'</tr>'
                                +'</tbody>'
                            +'</table>'
                        +'</div>'
                        +'<div class="modal-footer" style="text-align: center">'
                            +'<button class="btn btn-small btn-danger btnNegacion">Aceptar</button>'
                        +'</div>'
                    +'</div>';
    }
    return modal;
}