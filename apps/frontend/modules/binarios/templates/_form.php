<?php use_stylesheet('bootstrap-select') ?>
<?php use_javascript('bootstrap-select') ?>
<?php use_stylesheet('bootstrap-datetimepicker.min.css') ?>
<?php use_javascript('bootstrap-datetimepicker') ?>
<?php use_javascript('locales/bootstrap-datetimepicker.es.js') ?>
<?php use_javascript('bootstrap-fileupload') ?>
<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>
                    <form action="<?php echo url_for('binarios/'.
                                                ($form->getObject()->isNew() 
                                                    ? 'create' 
                                                    : 'update'
                                                ).(!$form->getObject()->isNew() 
                                                    ? '?id='.$form->getObject()->getId() : '')) ?>" class="form-horizontal" method="post" autocomplete="off"<?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
                        <input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
                        <div class="row">
                            <div class="span6">
                                <div class="control-group">
                                    <?php echo $form['personas']->renderLabel('', array('class' => 'control-label')).PHP_EOL ?>
                                    <div class="controls">
<?php echo $form['personas']->renderError() ?>
                                        <?php echo $form['personas']->render(array('placeholder' => 'personas', 'class' => 'show-menu-arrow')).PHP_EOL ?>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <?php echo $form['hijos']->renderLabel('', array('class' => 'control-label')).PHP_EOL ?>
                                    <div class="controls">
<?php echo $form['hijos']->renderError() ?>
                                        <?php echo $form['hijos']->render(array('placeholder' => 'hijos', 'class' => 'show-menu-arrow')).PHP_EOL ?>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <?php echo $form['tarjetas_credito_debito']->renderLabel('', array('class' => 'control-label')).PHP_EOL ?>
                                    <div class="controls">
<?php echo $form['tarjetas_credito_debito']->renderError() ?>
                                        <?php echo $form['tarjetas_credito_debito']->render(array('placeholder' => 'tarjetas_credito_debito', 'class' => 'show-menu-arrow')).PHP_EOL ?>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <?php echo $form['pagos']->renderLabel('', array('class' => 'control-label')).PHP_EOL ?>
                                    <div class="controls">
<?php echo $form['pagos']->renderError() ?>
                                        <?php echo $form['pagos']->render(array('placeholder' => 'pagos', 'class' => 'show-menu-arrow')).PHP_EOL ?>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <?php echo $form['bi_fecha_registro']->renderLabel('', array('class' => 'control-label')).PHP_EOL ?>
                                    <div class="controls">
                                        <div class="input-append date" id="dtp_dml_binarios_bi_fecha_registro">
<?php echo $form['bi_fecha_registro']->renderError() ?>
                                            <?php echo $form['bi_fecha_registro']->render(array('placeholder' => 'bi_fecha_registro', 'style' => 'width: 180px', 'readonly' => 'true')).PHP_EOL ?>
                                            <span class='add-on'>
                                                <i data-date-icon='icon-calendar' data-time-icon='icon-time'></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <?php echo $form['bi_nombre']->renderLabel('', array('class' => 'control-label')).PHP_EOL ?>
                                    <div class="controls">
<?php echo $form['bi_nombre']->renderError() ?>
                                        <?php echo $form['bi_nombre']->render(array('placeholder' => 'bi_nombre')).PHP_EOL ?>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <?php echo $form['bi_tamanio_bytes']->renderLabel('', array('class' => 'control-label')).PHP_EOL ?>
                                    <div class="controls">
<?php echo $form['bi_tamanio_bytes']->renderError() ?>
                                        <?php echo $form['bi_tamanio_bytes']->render(array('placeholder' => 'bi_tamanio_bytes')).PHP_EOL ?>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <?php echo $form['bi_binario']->renderLabel('', array('class' => 'control-label')).PHP_EOL ?>
                                    <div class="controls">
<?php echo $form['bi_binario']->renderError() ?>
                                        <div class="fileupload fileupload-new" data-provides="fileupload" style="margin-bottom: 0">
                                            <span class="btn btn-file">
                                                <span class="fileupload-new"><i class="icon-file"></i></span>
                                                <span class="fileupload-exists"><i class="icon-file"></i></span>
                                                <?php echo $form['bi_binario']->render().PHP_EOL ?>
                                            </span>
                                            <span class="fileupload-preview"></span>
                                            <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">&times;</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="span6">                            
                                <div class="control-group">
                                    <?php echo $form['bi_ext']->renderLabel('', array('class' => 'control-label')).PHP_EOL ?>
                                    <div class="controls">
<?php echo $form['bi_ext']->renderError() ?>
                                        <?php echo $form['bi_ext']->render(array('placeholder' => 'bi_ext')).PHP_EOL ?>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <?php echo $form['bi_fecha_crea']->renderLabel('', array('class' => 'control-label')).PHP_EOL ?>
                                    <div class="controls">
                                        <div class="input-append date" id="dtp_dml_binarios_bi_fecha_crea">
<?php echo $form['bi_fecha_crea']->renderError() ?>
                                            <?php echo $form['bi_fecha_crea']->render(array('placeholder' => 'bi_fecha_crea', 'style' => 'width: 180px', 'readonly' => 'true')).PHP_EOL ?>
                                            <span class='add-on'>
                                                <i data-date-icon='icon-calendar' data-time-icon='icon-time'></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <?php echo $form['bi_quien_crea']->renderLabel('', array('class' => 'control-label')).PHP_EOL ?>
                                    <div class="controls">
<?php echo $form['bi_quien_crea']->renderError() ?>
                                        <?php echo $form['bi_quien_crea']->render(array('placeholder' => 'bi_quien_crea')).PHP_EOL ?>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <?php echo $form['bi_fecha_modifica']->renderLabel('', array('class' => 'control-label')).PHP_EOL ?>
                                    <div class="controls">
                                        <div class="input-append date" id="dtp_dml_binarios_bi_fecha_modifica">
<?php echo $form['bi_fecha_modifica']->renderError() ?>
                                            <?php echo $form['bi_fecha_modifica']->render(array('placeholder' => 'bi_fecha_modifica', 'style' => 'width: 180px', 'readonly' => 'true')).PHP_EOL ?>
                                            <span class='add-on'>
                                                <i data-date-icon='icon-calendar' data-time-icon='icon-time'></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <?php echo $form['bi_quien_modifica']->renderLabel('', array('class' => 'control-label')).PHP_EOL ?>
                                    <div class="controls">
<?php echo $form['bi_quien_modifica']->renderError() ?>
                                        <?php echo $form['bi_quien_modifica']->render(array('placeholder' => 'bi_quien_modifica')).PHP_EOL ?>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <?php echo $form['bi_fecha_borra']->renderLabel('', array('class' => 'control-label')).PHP_EOL ?>
                                    <div class="controls">
                                        <div class="input-append date" id="dtp_dml_binarios_bi_fecha_borra">
<?php echo $form['bi_fecha_borra']->renderError() ?>
                                            <?php echo $form['bi_fecha_borra']->render(array('placeholder' => 'bi_fecha_borra', 'style' => 'width: 180px', 'readonly' => 'true')).PHP_EOL ?>
                                            <span class='add-on'>
                                                <i data-date-icon='icon-calendar' data-time-icon='icon-time'></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <?php echo $form['bi_quien_borra']->renderLabel('', array('class' => 'control-label')).PHP_EOL ?>
                                    <div class="controls">
<?php echo $form['bi_quien_borra']->renderError() ?>
                                        <?php echo $form['bi_quien_borra']->render(array('placeholder' => 'bi_quien_borra')).PHP_EOL ?>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <?php echo $form['bi_borrado_logico']->renderLabel('', array('class' => 'control-label')).PHP_EOL ?>
                                    <div class="controls">
<?php echo $form['bi_borrado_logico']->renderError() ?>
                                        <?php echo $form['bi_borrado_logico']->render(array('placeholder' => 'bi_borrado_logico')).PHP_EOL ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr style="margin: 0 0 20px 0" />
                        <div style="text-align: center">
                            <a class="btn btn-small" href="<?php echo url_for('binarios/index') ?>">Regresar</a>
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
        </style>
<?php end_slot() ?>
<?php slot('porcion_js') ?>
        <script>
            $(function() {
                var inputDate = "#dtp_dml_binarios_bi_fecha_registro",
                    inputDateTime = "#dtp_dml_binarios_bi_fecha_crea, #dtp_dml_binarios_bi_fecha_modifica, #dtp_dml_binarios_bi_fecha_borra";
                $(inputDate).datetimepicker({
                    format : 'yyyy-MM-dd', language: 'es', pickTime: false
                });
                $(inputDateTime).datetimepicker({ 
                    format : 'yyyy-MM-dd hh:mm:ss', language: 'es' 
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
                            action : '<?php echo url_for('binarios/delete?id='.$form->getObject()->getId()) ?>', 
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
                var inputForeinKey = "#dml_binarios_personas, #dml_binarios_hijos, #dml_binarios_tarjetas_credito_debito, #dml_binarios_pagos";
                // activando bootstrap-select en los campos que son claves foreaneas
                $(inputForeinKey).selectpicker({
                    size : 5
                });
            });
        </script>
<?php end_slot() ?>
