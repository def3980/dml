<?php use_stylesheet('bootstrap-select') ?>
<?php use_javascript('bootstrap-select') ?>
<?php use_stylesheet('bootstrap-datetimepicker.min.css') ?>
<?php use_javascript('bootstrap-datetimepicker') ?>
<?php use_javascript('locales/bootstrap-datetimepicker.es.js') ?>
                    <form id="frm_mo" action="<?php echo url_for('movimientos/'.
                                                ($form->getObject()->isNew() 
                                                    ? 'create' 
                                                    : 'update'
                                                ).(!$form->getObject()->isNew() 
                                                    ? '?id='.$form->getObject()->getId() : '')) ?>" class="form-horizontal" method="post" autocomplete="off"<?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
                        <input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
                        <div class="row">
                            <div class="span12" style="float: none; margin: 0 auto;">
                                <div class="row">
                                    <div class="span3 offset2">
                                        <fieldset>
                                            <?php echo $form['ahorros']->renderLabel().PHP_EOL ?>
                                            <?php echo $form['ahorros']->render(array('placeholder' => 'ahorros', 'class' => 'show-menu-arrow span3')).PHP_EOL ?>
                                        </fieldset>
                                        <fieldset>
                                            <?php echo $form['mo_mini_detalle_json']->renderLabel().PHP_EOL ?>
                                            <?php echo $form['mo_mini_detalle_json']->render(array('placeholder' => 'mo_mini_detalle_json', 'class' => 'span3', 'style' => 'resize: none; height: 50px;', 'readonly' => true)).PHP_EOL ?>
                                            <button class="btn btn-small btnTrans" style="margin: 7px 0">Indicar transferencia</button>
                                        </fieldset>
                                        <fieldset>
                                            <?php echo $form['mo_concepto']->renderLabel().PHP_EOL ?>
                                            <?php echo $form['mo_concepto']->render(array('placeholder' => 'mo_concepto', 'class' => 'span3')).PHP_EOL ?>
                                        </fieldset>
                                        <fieldset>
                                            <?php echo $form['mo_tipo']->renderLabel().PHP_EOL ?>
                                            <div class="btn-group" data-toggle="buttons-radio" style="margin-bottom: 4px">
                                                <button type="button" class="btn btnDeb active">D&eacute;bito</button>
                                                <button type="button" class="btn btnCre">Cr&eacute;dito</button>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="span4 offset1" style="text-align: right">
                                        <fieldset>
                                            <?php echo $form['mo_fecha']->renderLabel().PHP_EOL ?>
                                            <div class="input-append date" id="dtp_dml_movimientos_mo_fecha">
                                                <?php echo $form['mo_fecha']->render(array('placeholder' => 'mo_fecha', 'style' => 'width: 230px', 'readonly' => 'true')).PHP_EOL ?>
                                                <span class='add-on'>
                                                    <i data-date-icon='icon-calendar' data-time-icon='icon-time'></i>
                                                </span>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <?php echo $form['mo_documento']->renderLabel().PHP_EOL ?>
                                            <?php echo $form['mo_documento']->render(array('placeholder' => 'mo_documento', 'class' => 'span3')).PHP_EOL ?>
                                        </fieldset>
                                        <fieldset>
                                            <?php echo $form['mo_oficina']->renderLabel().PHP_EOL ?>
                                            <?php echo $form['mo_oficina']->render(array('placeholder' => 'mo_oficina', 'class' => 'span3')).PHP_EOL ?>
                                        </fieldset>
                                        <fieldset>
                                            <?php echo $form['mo_monto']->renderLabel().PHP_EOL ?>
                                            <?php echo $form['mo_monto']->render(array('placeholder' => 'mo_monto', 'class' => 'span3')).PHP_EOL ?>
                                        </fieldset>
                                        <fieldset>
                                            <?php echo $form['mo_saldo']->renderLabel().PHP_EOL ?>
                                            <?php echo $form['mo_saldo']->render(array('placeholder' => 'mo_saldo', 'class' => 'span3')).PHP_EOL ?>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr style="margin: 20px 0" />
                        <div style="text-align: center">
                            <a class="btn btn-small" href="<?php echo url_for('movimientos/index') ?>">Regresar</a>
                             |&nbsp;<button type="submit" class="btn btn-small btn-success btns" style="margin: 0 auto">Guardar</button>
<?php if (!$form->getObject()->isNew()): ?>
                             |&nbsp;<button class="btn btn-small btn-danger" id="del">Eliminar</button>
<?php endif; ?>
                        </div>
<?php echo $form->renderGlobalErrors() ?>
<?php echo $form->renderHiddenFields(false).PHP_EOL ?>
                    </form>
<?php if (!$form->getObject()->isNew()): ?>
                    <!-- Modal Eliminar -->
                    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="text-align: center">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 id="myModalLabel">Advertencia !!</h4>
                        </div>
                        <div class="modal-body">
                            <p>Se va a proceder a eliminar un registro <br />con n&uacute;mero de identificador <code>id = <?php echo $form['id']->getValue() ?></code></p>
                            <p>Est&aacute;s seguro?</p>
                        </div>
                        <div class="modal-footer" style="text-align: center">
                            <button class="btn btn-small btn-danger">Aceptar</button>
                            <button class="btn btn-small" data-dismiss="modal" aria-hidden="true">Cancelar</button>
                        </div>
                    </div>
<?php endif; ?>
                    <!-- Modal JSON -->
                    <div id="myModalJSON" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabelJSON" aria-hidden="true" style="text-align: center">
                        <div class="modal-header" style="text-align: center">
                            <h4 id="myModalLabelJSON">Informaci&oacute;n adicional</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row-fluid">
                                <div class="span12">
                                    <div class="row-fluid">
                                        <div class="span6" style="text-align: left">
                                            <fieldset>
                                                <label>Fecha:</label>
                                                <div class="input-append date" id="dtp_json_fecha">
                                                    <input type="text" name="json_fecha" placeholder="json_fecha" class="span11" readonly="true" id="json_fecha">
                                                    <span class='add-on'>
                                                        <i data-date-icon='icon-calendar' data-time-icon='icon-time'></i>
                                                    </span>
                                                </div>
                                            </fieldset>
                                            <fieldset>
                                                <label>Cuenta origen:</label>
                                                <input type="text" name="json_cuenta_origen" placeholder="json_cuenta_origen" id="json_cuenta_origen">
                                            </fieldset>
                                            <fieldset>
                                                <label>Monto:</label>
                                                <input type="text" name="json_monto" placeholder="json_monto" id="json_monto">
                                            </fieldset>
                                        </div>
                                        <div class="span6" style="text-align: right">
                                            <fieldset>
                                                <label>Concepto:</label>
                                                <input type="text" name="json_concepto" placeholder="json_concepto" id="json_concepto">
                                            </fieldset>
                                            <fieldset>
                                                <label>Cuenta destino:</label>
                                                <input type="text" name="json_cuenta_destino" placeholder="json_cuenta_destino" id="json_cuenta_destino">
                                            </fieldset>
                                            <fieldset>
                                                <div class="btn-group" data-toggle="buttons-radio" style="margin-bottom: 4px">
                                                    <button type="button" class="btn btn-mini ben active">Beneficiario</button>
                                                    <button type="button" class="btn btn-mini ord">Ordenante</button>
                                                </div>:<label></label>
                                                <input type="text" name="json_ord_ben" placeholder="json_ord_ben" id="json_ord_ben">
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row-fluid">
                                <div class="span12" style="text-align: center">
                                    <br />
                                    <button class="btn btn-small btn-success btnsDt">Guardar</button>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer" style="text-align: center">
                            <button class="btn btn-small btn-danger btna" disabled="true">Aceptar</button>
                            <button class="btn btn-small btnc" data-dismiss="modal" aria-hidden="true">Cancelar</button>
                        </div>
                    </div>
<?php slot('porcion_css') ?>
        <style>
            span.add-on .icon-calendar {
                background-position: -191px -118px;
            }
            span.add-on .icon-time {
                background-position: -47px -22px;
            }
            .opc {
                display: block;
                text-decoration: none;
                background-color: #eeeeee;
                border-color: #eeeeee #eeeeee #dddddd;
                color: #0088cc;
                padding-top: 8px;
                padding-bottom: 8px;
                margin-top: 2px;
                margin-bottom: 2px;
                padding-right: 12px;
                padding-left: 12px;
                margin-right: 2px;
                line-height: 14px;
                -webkit-border-radius: 5px;
                   -moz-border-radius: 5px;
                        border-radius: 5px;
            }
            form label {
                padding-top: 7px; 
            }
            form fieldset {
                padding-bottom: 8px;
            }
        </style>
<?php end_slot() ?>
<?php slot('porcion_js') ?>
        <script>
            $(function() {
                var inputDate = "#dtp_dml_movimientos_mo_fecha,#dtp_json_fecha";
                $(inputDate).datetimepicker({
                    format : 'yyyy-MM-dd', language: 'es', pickTime: false
                });
                $('.btnTrans').bind('click', function(e) {
                    e.preventDefault();
                    $('#myModalJSON').modal({ keyboard : false, backdrop: 'static' });
                });
                $('.btnc').bind('click', function() {
                    $('input[id^="json_"]').val('');
                });

<?php if (!$form->getObject()->isNew()): $token = new BaseForm(); ?>
                $('.btnDeb, .btnCre').removeClass('active');
                if ($('#dml_movimientos_mo_tipo').val() == 'D') {
                    $('.btnDeb').addClass('active');
                } else {
                    $('.btnCre').addClass('active');
                }
    
                // para abrir el modal
                $('#del').bind('click', function(e) {
                    e.preventDefault();
                    $('#myModal').modal({
                        keyboard : false
                    });
                });
                
                // para borrar el registro ~<?php echo sfConfig::get('sf_csrf_secret') ?>~
                $('#myModal div:last .btn-danger').bind('click', function() {
                    $('#myModal').find('div:last').append(
                        $('<form/>', { 
                            action : '<?php echo url_for('movimientos/delete?id='.$form->getObject()->getId()) ?>', 
                            method : 'post',
                            style  : 'display: none'
                        }).append(
                            $('<input/>', {
                                type  : 'hidden',
                                name  : 'sf_method',
                                value : 'delete'
                            }),
                            $('<input/>', {
                                type  : 'hidden',
                                name  : '<?php echo$token->getCSRFFieldName()?>',
                                value : '<?php echo$token->getCSRFToken()?>'
                            })
                        )
                    ).find('form').submit();
                });
<?php endif; ?>
                var inputForeinKey = "#dml_movimientos_ahorros";
                // activando bootstrap-select en los campos que son claves foreaneas
                $(inputForeinKey).selectpicker({
                    size : 5
                });
                $('#json_cuenta_origen, #json_cuenta_destino').autoNumeric('init', {
                    aSep: '', 
                    aPad: false,
                    vMin: 0,
                    vMax: 99999999999
                });
                $('#dml_movimientos_mo_monto, #dml_movimientos_mo_saldo, #json_monto').autoNumeric('init', {
                    aSep: '.', 
                    aDec: ',', 
                    mDec: 2,
                    aSign: '$ ',
                    aPad: true // Esta opcion me sirve para llenar ceros al lado derecho
                });
                $('#dml_movimientos_mo_documento').mask("***************", { placeholder : " " });
                $('.btnDeb').bind('click', function() { $('#dml_movimientos_mo_tipo').val('D') });
                $('.btnCre').bind('click', function() { $('#dml_movimientos_mo_tipo').val('C') });
                $('.btnTrans').bind('click', function() {
                    $('input[id^="json_"], .btnsDt').attr('disabled', false);
                    $('.btna').attr('disabled', true);
                    if ($.trim($('#dml_movimientos_mo_mini_detalle_json').val())) {
                        // Validando los datos JSON
                        var dataObj = JSON.parse($('#dml_movimientos_mo_mini_detalle_json').val());
                        $('#json_fecha').val(dataObj.fecha);
                        $('#json_cuenta_origen').val(dataObj.cuenta_origen);
                        $('#json_monto').autoNumeric('set', dataObj.monto);
                        $('#json_concepto').val(dataObj.concepto);
                        $('#json_cuenta_destino').val(dataObj.cuenta_destino);
                        if (typeof(dataObj.beneficiario) !== "undefined") {
                            $('.ben, .ord').removeClass('active');
                            $('#json_ord_ben').val(dataObj.beneficiario);
                            $('.ben').addClass('active');
                        } else if (typeof(dataObj.ordenante) !== "undefined") {
                            $('.ben, .ord').removeClass('active');
                            $('#json_ord_ben').val(dataObj.ordenante);
                            $('.ord').addClass('active');
                        }
                    }
                });
                $('.btnsDt').bind('click', function() {
                    if ($('#json_fecha').val().length < 3) {
                        validador($('#dtp_json_fecha'), "Sin fecha");
                    } else if ($('#json_cuenta_origen').val().length <= 9) {
                        validador($('#json_cuenta_origen'), "Longitud insuficiente");
                    } else if ($('#json_monto').val().length < 3) {
                        validador($('#json_monto'), "Sin valor");
                    } else if ($('#json_concepto').val().length < 3) {
                        validador($('#json_concepto'), "Longitud insuficiente");
                    } else if ($('#json_cuenta_destino').val().length <= 9) {
                        validador($('#json_cuenta_destino'), "Longitud insuficiente");
                    } else if ($('#json_ord_ben').val().length < 3) {
                        validador($('#json_ord_ben'), "Longitud insuficiente");
                    } else {
                        // Guardando el detalle de tranferencia
                        var info = new Object();
                        info.fecha = $('#json_fecha').val();
                        info.cuenta_origen = $('#json_cuenta_origen').val();
                        info.monto = Number($('#json_monto').val().replace('.', '').replace(',', '.').replace('$ ', '') * 1).toFixed(2);
                        info.concepto = $('#json_concepto').val();
                        info.cuenta_destino = $('#json_cuenta_destino').val();
                        if ($('.ben').hasClass('active')) {
                            info.beneficiario = $('#json_ord_ben').val();
                        } else if($('.ord').hasClass('active')) {
                            info.ordenante = $('#json_ord_ben').val();
                        }
                        $('#dml_movimientos_mo_mini_detalle_json').text(JSON.stringify(info));
                        $('input[id^="json_"], .ben, .ord').attr('disabled', true);
                        $(this).attr('disabled', true);
                        $('.btna').attr('disabled', false);
                    }
                });
                $('.ben').bind('click', function() {
                    $('#json_ord_ben').focus();
                });
                $('.ord').bind('click', function() {
                    $('#json_ord_ben').focus();
                });
                $('.btna').bind('click', function() {
                    $('input[id^="json_"]').val('');
                    $('.ben, .ord').removeClass('active');
                    $('.ben, .ord').attr('disabled', false);
                    $('.ben').addClass('active');
                    $('#myModalJSON').modal('hide');
                });
            });
            
            /* ----------------------------------------------------------- AJAX FORM */
                $('#frm_mo').ajaxForm({
                    dataType : 'json',
                    beforeSubmit : validate,
                    success : showResponse
                });
                function validate(formData, jqForm, options) {
                    if ($('#dml_movimientos_mo_concepto').val().length < 3) {
                        validador($('#dml_movimientos_mo_concepto'), "Logitud insuficiente");
                        return false;
                    } else if ($('#dml_movimientos_mo_fecha').val().length < 1) {
                        validador($('#dtp_dml_movimientos_mo_fecha'), "Fecha invalida");
                        return false;
                    } else if ($('#dml_movimientos_mo_documento').val().length < 3) {
                        validador($('#dml_movimientos_mo_documento'), "Logitud insuficiente");
                        return false;
                    } else if ($('#dml_movimientos_mo_oficina').val().length < 3) {
                        validador($('#dml_movimientos_mo_oficina'), "Logitud insuficiente");
                        return false;
                    } else if ($('#dml_movimientos_mo_monto').val().length < 3) {
                        validador($('#dml_movimientos_mo_monto'), "Sin valor");
                        return false;
                    } else if ($('#dml_movimientos_mo_saldo').val().length < 3) {
                        validador($('#dml_movimientos_mo_saldo'), "Sin valor");
                        return false;
                    }
                }
                function showResponse(responseText, statusText, xhr, $form) {
                    window.location.href = "<?php echo url_for('movimientos/edit?id=') ?>" + responseText.id;
                }
                /* --------------------------------------------------------------------- */
        </script>
<?php end_slot() ?>
