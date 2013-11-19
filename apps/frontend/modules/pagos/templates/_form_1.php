<div class="widget-box" style="margin: 0">
    <div class="widget-header">
        <h5>Ingresar un nuevo pago</h5>
        <span class="widget-toolbar">
            <a href="#" data-dismiss="modal" aria-hidden="true">
                <i class="icon-remove"></i>
            </a>
        </span>
    </div>
    <div class="widget-body">
        <div class="widget-main">
            <form id="frm_pa" action="<?php echo url_for('pagos/'
                .($form->getObject()->isNew() ? 'create' : 'update')
                    .(!$form->getObject()->isNew() ? '?pa_id='.$form->getObject()->getPaId() : '')) ?>" 
                        method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?> 
                            autocomplete="off"><?php if (!$form->getObject()->isNew()): echo "\n"; ?>
                <input type="hidden" name="sf_method" value="put" /><?php endif; ?>
                <h3 class="header smaller lighter green">Formulario de ingreso</h3>
                <div class="row" style="margin: 0 auto">
                    <div class="col-xs-12 col-sm-6">
                        <div class="form-group">
                            <?php echo $form['pa_numero_factura']->renderLabel() ?>
                            <div class="input-group">
                                <?php echo $form['pa_numero_factura']->render(array('class' => 'form-control')) ?>
                                <span class="input-group-addon">
                                    <i class="icon-file-text-alt"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="form-group">
                            <?php echo $form['pa_fecha']->renderLabel() ?>
                            <div class="input-group">
                                <?php //echo $form['pa_fecha']->render(array('class' => 'form-control date-picker', 'data-date-format' => 'yyyy-mm-dd', 'readonly' => true)) ?>
                                <input type="text" name="pa_fecha" class="form-control date-picker" data-date-format="yyyy-mm-dd" readonly="1" id="pa_fecha">
                                <span class="input-group-addon">
                                    <i class="icon-calendar"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <?php echo $form['tipo_consumo_tc_id']->renderLabel() ?>
                        <br />
                        <?php echo $form['tipo_consumo_tc_id']->render(array('class' => 'width-110 chosen-select', 'data-placeholder' => 'Escoger')) ?>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <label for="hora">Hora :</label>
                        <br />
                        <div class="input-group bootstrap-timepicker">
                            <div class="bootstrap-timepicker-widget dropdown-menu">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td><a href="#" data-action="incrementHour"><i class="icon-chevron-up"></i></a></td>
                                            <td class="separator">&nbsp;</td>
                                            <td><a href="#" data-action="incrementMinute"><i class="icon-chevron-up"></i></a></td>
                                            <td class="separator">&nbsp;</td>
                                            <td><a href="#" data-action="incrementSecond"><i class="icon-chevron-up"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" name="hour" class="bootstrap-timepicker-hour" maxlength="2"></td>
                                            <td class="separator">:</td>
                                            <td><input type="text" name="minute" class="bootstrap-timepicker-minute" maxlength="2"></td>
                                            <td class="separator">:</td>
                                            <td><input type="text" name="second" class="bootstrap-timepicker-second" maxlength="2"></td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" data-action="decrementHour"><i class="icon-chevron-down"></i></a></td>
                                            <td class="separator"></td>
                                            <td><a href="#" data-action="decrementMinute"><i class="icon-chevron-down"></i></a></td>
                                            <td class="separator">&nbsp;</td>
                                            <td><a href="#" data-action="decrementSecond"><i class="icon-chevron-down"></i></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <input id="timepicker1" type="text" class="form-control" readonly="true">
                            <span class="input-group-addon">
                                <i class="icon-time bigger-110"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin: 10px auto">
                    <div class="col-xs-12 col-sm-12">
                        <div class="form-group">
                            <?php echo $form['pa_detalle']->renderLabel() ?>
                            <div class="input-group">
                                <?php echo $form['pa_detalle']->render(array('class' => 'autosize-transition form-control', 'style' => 'overflow: hidden; word-wrap: break-word; resize: vertical; height: 52px;', 'cols' => '90')) ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="form-group" style="cursor: pointer">
                            <?php echo $form['pa_iva']->renderLabel() ?>
                            <div class="input-group" id="iva">
                                <span class="input-group-addon">
                                    <i class="icon-usd"></i>
                                </span>
                                <?php //echo $form['pa_iva']->render(array('class' => 'form-control', 'readonly' => true, 'style' => 'text-align: right', 'data-a-dec' => ',', 'data-a-sep' => '.', 'data-v-max' => '999999.99', 'data-v-min' => '0.00')) ?>
                                <input type="text" name="pa_iva" class="form-control" readonly="1" style="text-align: right" data-a-dec="," data-a-sep="." data-v-max="999999.99" data-v-min="0.00" id="pa_iva">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="form-group">
                            <?php echo $form['pa_ice']->renderLabel() ?>
                            <div class="input-group" id="ice">
                                <span class="input-group-addon">
                                    <i class="icon-usd"></i>
                                </span>
                                <?php //echo $form['pa_ice']->render(array('class' => 'form-control', 'readonly' => true, 'style' => 'text-align: right', 'data-a-dec' => ',', 'data-a-sep' => '.', 'data-v-max' => '999999.99', 'data-v-min' => '0.00')) ?>
                                <input type="text" name="pa_ice" class="form-control" readonly="1" style="text-align: right" data-a-dec="," data-a-sep="." data-v-max="999999.99" data-v-min="0.00" id="pa_ice">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="form-group">
                            <?php echo $form['pa_comision']->renderLabel() ?>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="icon-usd"></i>
                                </span>
                                <?php //echo $form['pa_comision']->render(array('class' => 'form-control', 'style' => 'text-align: right', 'data-a-dec' => ',', 'data-a-sep' => '.', 'data-v-max' => '999999.99', 'data-v-min' => '0.00')) ?>
                                <input type="text" name="pa_comision" class="form-control" style="text-align: right" data-a-dec="," data-a-sep="." data-v-max="999999.99" data-v-min="0.00" id="pa_comision">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="form-group">
                            <?php echo $form['pa_valor_total']->renderLabel() ?>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="icon-usd"></i>
                                </span>
                                <?php //echo $form['pa_valor_total']->render(array('class' => 'form-control', 'style' => 'text-align: right', 'data-a-dec' => ',', 'data-a-sep' => '.', 'data-v-max' => '999999.99', 'data-v-min' => '0.00')) ?>
                                <input type="text" name="pa_valor_total" class="form-control" style="text-align: right" data-a-dec="," data-a-sep="." data-v-max="999999.99" data-v-min="0.00" id="pa_valor_total">
                            </div>
                        </div>
                    </div>
<!--                    <div class="col-xs-12 col-sm-12">
                        <?php /*echo $form['pa_respaldo']->renderLabel() ?>
                        <?php echo (!$form->getObject()->isNew() ? (count($form['pa_respaldo']->getValue()) ? (count($form['pa_numero_factura']->getValue()) ? '<i class="icon-file bigger-120"></i> factura_'.$form['pa_numero_factura']->getValue().'.pdf' : '<i class="icon-file bigger-120"></i> referencia_'.$form['pa_id']->getValue().'.pdf') : '') : '') ?>
                        <div><?php echo $form['pa_respaldo']->render(array('style' => 'margin: 0; padding: 0;'))*/ ?></div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <ul class="list-unstyled" style="text-align: left">
                                    <li><i class="icon-check bigger-110 green"></i> <small>S&oacute;lo archivos PDF's</small></li>
                                </ul>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <ul class="list-unstyled" style="text-align: right">
                                    <li><i class="icon-asterisk bigger-110 red"></i> <small>Campo obligatorio</small></li>
                                </ul>
                            </div>
                        </div>
                    </div>-->
                </div>
                <div class="header smaller lighter green"></div>
                <div class="row" style="margin: 0 auto">
                    <div class="col-xs-12 col-sm-6">
                        <div class="form-group" style="text-align: right">
                            <button id="cancelar" class="btn btn-sm btn-danger" data-dismiss="modal" aria-hidden="true">Cancelar</button>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="form-group">
                            <button class="btn btn-sm btn-primary">Guardar</button>
                        </div>
                    </div>
                </div>
                    <?php echo $form->renderGlobalErrors() ?><?php echo $form->renderHiddenFields(false) ?>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
    jQuery(function($) {
        $('.date-picker')
            .val(<?php echo (!$form->getObject()->isNew()) ? '"'.MyHelpers::opcion()->verSoloFecha($form['pa_fecha']->getValue()).'"' : 'nowDate()' ?>)
                .datepicker({ autoclose:true, language:'es'/*, startDate:'-15d', endDate:'-1d'*/ })
                    .next()
                        .on(ace.click_event, function(){
                            $(this).prev().focus();
                        });
        $('#timepicker1').timepicker({
            minuteStep  : 1,
            showSeconds : true,
            showMeridian: false<?php echo (!$form->getObject()->isNew()) ? ",\n\t    defaultTime : '".MyHelpers::opcion()->verHoraMinSeg($form['pa_fecha']->getValue())."'\n" : "\n" ?>
        }).next().on(ace.click_event, function(){ $(this).prev().focus(); });
        $('textarea[class*=autosize]').autosize({ append: "\n" });        
//        $('#pagos_pa_respaldo').ace_file_input({
//            no_file         : 'Sin archivo ...',
//            btn_choose      : 'Escoger',
//            btn_change      : 'Cambiar',
//            droppable       : false,
//            onchange        : null,
//            thumbnail       : false,
//            before_change   : function(files, dropped) {
//                var file = files[0];
//                if (typeof file == "string") {
//                    //file is just a file name here 
//                    //(used in browsers that don't support FileReader API such as IE8)
//                    if (! (/^.+\.(?:[pP][dD][fF])$/).test(file) ) {
//                        //not an image extension?
//                        //alert user
//                        return false;
//                    }
//                } else {
//                    var type = $.trim(file.type);
//                    if (
//                       ( type.length > 0 && ! (/^application\/(?:[pP][dD][fF])$/).test(type) )
//                       || 
//                       //for android's default browser!
//                       ( type.length == 0 && ! (/^.+\.(?:[pP][dD][fF])$/).test(file.name) )
//                       )
//                    {
//                       //alert user
//                       return false;
//                    }
//                }
//                return true;
//            }
//        });
//        $('.ace-file-input').css({'margin':0, 'padding':0});
        $('#pagos_pa_numero_factura').mask('999-999-999999999');
        $('#pa_valor_total, '
            +'#pa_comision, '
                +'#pa_ice, '
                    +'#pa_iva').autoNumeric('init',{aPad:false});
        $('#iva,#iva input,#ice,#ice input[type="text"]').css('cursor', 'pointer');
        $('#iva').css('cursor', 'pointer').bind('click',function(){
            if ($('#pagos_pa_valor_total').val().length) {        
                var vi = reemplazarComaXPunto(reemplazarPunto($('#pa_valor_total').val()));
                $('#pa_iva').val(reemplazarPuntoXComa(round(vi - (vi / 1.12), 2)));
                $('#pagos_pa_iva').val(round(vi - (vi / 1.12), 2));
            }
        });
        $('#ice').bind('click',function(){
            if ($('#pagos_pa_valor_total').val().length) {
                var vi = reemplazarComaXPunto(reemplazarPunto($('#pa_valor_total').val()));
                $('#pa_ice').val(reemplazarPuntoXComa(round(vi - (vi / 1.15), 2)));
                $('#pagos_pa_ice').val(round(vi - (vi / 1.15), 2));
            }
        });<?php echo (!$form->getObject()->isNew()) ? $form['pa_iva']->getValue() != NULL ? "\n\t$('#pa_iva').autoNumeric('set',".$form['pa_iva']->getValue().");\n" : "\n" : "\n"; 
        echo (!$form->getObject()->isNew()) ? $form['pa_ice']->getValue() != NULL ? "\n\t$('#pa_ice').autoNumeric('set',".$form['pa_ice']->getValue().");\n" : "\n" : "\n"; 
        echo (!$form->getObject()->isNew()) ? $form['pa_comision']->getValue() != NULL ? "\n\t$('#pa_comision').autoNumeric('set',".$form['pa_comision']->getValue().");\n" : "\n" : "\n"; 
        echo (!$form->getObject()->isNew()) ? $form['pa_valor_total']->getValue() != NULL ? "\n\t$('#pa_valor_total').autoNumeric('set',".$form['pa_valor_total']->getValue().");\n" : "\n" : "\n"; 
        ?>
        $('#pa_iva').keyup(function(){
            $('#pagos_pa_iva').val(reemplazarComaXPunto(reemplazarPunto($(this).val())));
        });
        $('#pa_ice').keyup(function(){
            $('#pagos_pa_ice').val(reemplazarComaXPunto(reemplazarPunto($(this).val())));
        });
        $('#pa_comision').keyup(function(){
            $('#pagos_pa_comision').val(reemplazarComaXPunto(reemplazarPunto($(this).val())));
        });
        $('#pa_valor_total').bind('blur keyup', function(){
//            if (!$(this).val().length) {
//                $('#pagos_pa_iva,#pa_ice,#pagos_pa_comision').val(NULL);
//            } else {
                $('#pagos_pa_valor_total').val(reemplazarComaXPunto(reemplazarPunto($(this).val())));
//            }
        });
        $('#pagos_pa_fecha').val($('#pa_fecha').val() + ' ' +$('#timepicker1').val());
        $('#pa_fecha,#timepicker1').change(function(){
            $('#pagos_pa_fecha').val($('#pa_fecha').val() + ' ' +$('#timepicker1').val());
        });
        $('#cancelar').bind('click', function(e){ e.preventDefault(); });
        $('#frm_pa button:last').bind('click', function(){
            /*if ($('#pagos_pa_numero_factura').val().length < 3) {
                validador($('#pagos_pa_numero_factura'),"Logitud insuficiente",$('.msj-pa_numero_factura'));
                return false;
            } else*/ if ($('#pagos_pa_detalle').val().length < 3) {
                validador($('#pagos_pa_detalle'),"Logitud insuficiente",$('.msj-pa_detalle'));
                return false;
            } else if ($('#pa_valor_total').val().length < 1) {
                validador($('#pa_valor_total'),"Vacío",$('.msj-pa_valor_total'));
                return false;
            }
        });
        $(".chosen-select").chosen();
        $('#pagos_tipo_consumo_tc_id').next('div:first').css({'width':'100%'});
    });
</script>