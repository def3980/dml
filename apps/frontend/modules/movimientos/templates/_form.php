<?php use_stylesheet('bootstrap-select') ?>
<?php use_javascript('bootstrap-select') ?>
<?php use_stylesheet('bootstrap-datetimepicker.min.css') ?>
<?php use_javascript('bootstrap-datetimepicker') ?>
<?php use_javascript('locales/bootstrap-datetimepicker.es.js') ?>
<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>
                    <form action="<?php echo url_for('movimientos/'.
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
                                            <?php echo $form['mo_mini_detalle_json']->render(array('placeholder' => 'mo_mini_detalle_json', 'class' => 'span3', 'style' => 'resize: none; height: 50px;')).PHP_EOL ?>
                                            <button class="btn btn-small" style="margin: 7px 0">Indicar transferencia</button>
                                        </fieldset>
                                        <fieldset>
                                            <?php echo $form['mo_concepto']->renderLabel().PHP_EOL ?>
                                            <?php echo $form['mo_concepto']->render(array('placeholder' => 'mo_concepto', 'class' => 'span3')).PHP_EOL ?>
                                        </fieldset>
                                        <fieldset>
                                            <?php echo $form['mo_tipo']->renderLabel().PHP_EOL ?>
                                            <?php echo $form['mo_tipo']->render(array('placeholder' => 'mo_tipo', 'class' => 'span3')).PHP_EOL ?>
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
                             |&nbsp;<button type="submit" class="btn btn-small btn-success" style="margin: 0 auto">Guardar</button>
<?php if (!$form->getObject()->isNew()): ?>
                             |&nbsp;<button class="btn btn-small btn-danger" id="del">Eliminar</button>
<?php endif; ?>
                        </div>
<?php echo $form->renderGlobalErrors() ?>
<?php echo $form->renderHiddenFields(false).PHP_EOL ?>
                    </form>
<?php if (!$form->getObject()->isNew()): ?>
                    <!-- Modal -->
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
                var inputDate = "#dtp_dml_movimientos_mo_fecha";
                $(inputDate).datetimepicker({
                    format : 'yyyy-MM-dd', language: 'es', pickTime: false
                });
<?php if (!$form->getObject()->isNew()): $token = new BaseForm(); ?>
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
            });
        </script>
<?php end_slot() ?>
