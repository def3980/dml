<?php use_stylesheet('bootstrap-datetimepicker.min.css') ?>
<?php use_javascript('bootstrap-datetimepicker') ?>
<?php use_javascript('locales/bootstrap-datetimepicker.es.js') ?>
<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>
                    <form action="<?php echo url_for('personas/'.
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
                                    <?php echo $form['pe_cedula']->renderLabel('', array('class' => 'control-label')).PHP_EOL ?>
                                    <div class="controls">
<?php echo $form['pe_cedula']->renderError() ?>
                                        <?php echo $form['pe_cedula']->render(array('placeholder' => 'pe_cedula')).PHP_EOL ?>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <?php echo $form['pe_nombres']->renderLabel('', array('class' => 'control-label')).PHP_EOL ?>
                                    <div class="controls">
<?php echo $form['pe_nombres']->renderError() ?>
                                        <?php echo $form['pe_nombres']->render(array('placeholder' => 'pe_nombres')).PHP_EOL ?>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <?php echo $form['pe_apellidos']->renderLabel('', array('class' => 'control-label')).PHP_EOL ?>
                                    <div class="controls">
<?php echo $form['pe_apellidos']->renderError() ?>
                                        <?php echo $form['pe_apellidos']->render(array('placeholder' => 'pe_apellidos')).PHP_EOL ?>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <?php echo $form['pe_fecha_nacimiento']->renderLabel('', array('class' => 'control-label')).PHP_EOL ?>
                                    <div class="controls">
                                        <div class="input-append date" id="dtp_dml_personas_pe_fecha_nacimiento">
<?php echo $form['pe_fecha_nacimiento']->renderError() ?>
                                            <?php echo $form['pe_fecha_nacimiento']->render(array('placeholder' => 'pe_fecha_nacimiento', 'style' => 'width: 180px', 'readonly' => 'true')).PHP_EOL ?>
                                            <span class='add-on'>
                                                <i data-date-icon='icon-calendar' data-time-icon='icon-time'></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <?php echo $form['pe_email']->renderLabel('', array('class' => 'control-label')).PHP_EOL ?>
                                    <div class="controls">
<?php echo $form['pe_email']->renderError() ?>
                                        <?php echo $form['pe_email']->render(array('placeholder' => 'pe_email')).PHP_EOL ?>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <?php echo $form['pe_salt']->renderLabel('', array('class' => 'control-label')).PHP_EOL ?>
                                    <div class="controls">
<?php echo $form['pe_salt']->renderError() ?>
                                        <?php echo $form['pe_salt']->render(array('placeholder' => 'pe_salt')).PHP_EOL ?>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <?php echo $form['pe_password']->renderLabel('', array('class' => 'control-label')).PHP_EOL ?>
                                    <div class="controls">
<?php echo $form['pe_password']->renderError() ?>
                                        <?php echo $form['pe_password']->render(array('placeholder' => 'pe_password')).PHP_EOL ?>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <?php echo $form['pe_online']->renderLabel('', array('class' => 'control-label')).PHP_EOL ?>
                                    <div class="controls">
<?php echo $form['pe_online']->renderError() ?>
                                        <?php echo $form['pe_online']->render(array('placeholder' => 'pe_online')).PHP_EOL ?>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <?php echo $form['pe_inicio_sesion']->renderLabel('', array('class' => 'control-label')).PHP_EOL ?>
                                    <div class="controls">
                                        <div class="input-append date" id="dtp_dml_personas_pe_inicio_sesion">
<?php echo $form['pe_inicio_sesion']->renderError() ?>
                                            <?php echo $form['pe_inicio_sesion']->render(array('placeholder' => 'pe_inicio_sesion', 'style' => 'width: 180px', 'readonly' => 'true')).PHP_EOL ?>
                                            <span class='add-on'>
                                                <i data-date-icon='icon-calendar' data-time-icon='icon-time'></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="span6">                            
                                <div class="control-group">
                                    <?php echo $form['pe_fin_sesion']->renderLabel('', array('class' => 'control-label')).PHP_EOL ?>
                                    <div class="controls">
                                        <div class="input-append date" id="dtp_dml_personas_pe_fin_sesion">
<?php echo $form['pe_fin_sesion']->renderError() ?>
                                            <?php echo $form['pe_fin_sesion']->render(array('placeholder' => 'pe_fin_sesion', 'style' => 'width: 180px', 'readonly' => 'true')).PHP_EOL ?>
                                            <span class='add-on'>
                                                <i data-date-icon='icon-calendar' data-time-icon='icon-time'></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <?php echo $form['pe_duracion_sesion']->renderLabel('', array('class' => 'control-label')).PHP_EOL ?>
                                    <div class="controls">
<?php echo $form['pe_duracion_sesion']->renderError() ?>
                                        <?php echo $form['pe_duracion_sesion']->render(array('placeholder' => 'pe_duracion_sesion')).PHP_EOL ?>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <?php echo $form['pe_fecha_crea']->renderLabel('', array('class' => 'control-label')).PHP_EOL ?>
                                    <div class="controls">
                                        <div class="input-append date" id="dtp_dml_personas_pe_fecha_crea">
<?php echo $form['pe_fecha_crea']->renderError() ?>
                                            <?php echo $form['pe_fecha_crea']->render(array('placeholder' => 'pe_fecha_crea', 'style' => 'width: 180px', 'readonly' => 'true')).PHP_EOL ?>
                                            <span class='add-on'>
                                                <i data-date-icon='icon-calendar' data-time-icon='icon-time'></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <?php echo $form['pe_quien_crea']->renderLabel('', array('class' => 'control-label')).PHP_EOL ?>
                                    <div class="controls">
<?php echo $form['pe_quien_crea']->renderError() ?>
                                        <?php echo $form['pe_quien_crea']->render(array('placeholder' => 'pe_quien_crea')).PHP_EOL ?>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <?php echo $form['pe_fecha_modifica']->renderLabel('', array('class' => 'control-label')).PHP_EOL ?>
                                    <div class="controls">
                                        <div class="input-append date" id="dtp_dml_personas_pe_fecha_modifica">
<?php echo $form['pe_fecha_modifica']->renderError() ?>
                                            <?php echo $form['pe_fecha_modifica']->render(array('placeholder' => 'pe_fecha_modifica', 'style' => 'width: 180px', 'readonly' => 'true')).PHP_EOL ?>
                                            <span class='add-on'>
                                                <i data-date-icon='icon-calendar' data-time-icon='icon-time'></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <?php echo $form['pe_quien_modifica']->renderLabel('', array('class' => 'control-label')).PHP_EOL ?>
                                    <div class="controls">
<?php echo $form['pe_quien_modifica']->renderError() ?>
                                        <?php echo $form['pe_quien_modifica']->render(array('placeholder' => 'pe_quien_modifica')).PHP_EOL ?>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <?php echo $form['pe_fecha_borra']->renderLabel('', array('class' => 'control-label')).PHP_EOL ?>
                                    <div class="controls">
                                        <div class="input-append date" id="dtp_dml_personas_pe_fecha_borra">
<?php echo $form['pe_fecha_borra']->renderError() ?>
                                            <?php echo $form['pe_fecha_borra']->render(array('placeholder' => 'pe_fecha_borra', 'style' => 'width: 180px', 'readonly' => 'true')).PHP_EOL ?>
                                            <span class='add-on'>
                                                <i data-date-icon='icon-calendar' data-time-icon='icon-time'></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <?php echo $form['pe_quien_borra']->renderLabel('', array('class' => 'control-label')).PHP_EOL ?>
                                    <div class="controls">
<?php echo $form['pe_quien_borra']->renderError() ?>
                                        <?php echo $form['pe_quien_borra']->render(array('placeholder' => 'pe_quien_borra')).PHP_EOL ?>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <?php echo $form['pe_borrado_logico']->renderLabel('', array('class' => 'control-label')).PHP_EOL ?>
                                    <div class="controls">
<?php echo $form['pe_borrado_logico']->renderError() ?>
                                        <?php echo $form['pe_borrado_logico']->render(array('placeholder' => 'pe_borrado_logico')).PHP_EOL ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr style="margin: 0 0 20px 0" />
                        <div style="text-align: center">
                            <a class="btn btn-small" href="<?php echo url_for('personas/index') ?>">Regresar</a>
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
                var inputDate = "#dtp_dml_personas_pe_fecha_nacimiento",
                    inputDateTime = "#dtp_dml_personas_pe_inicio_sesion, #dtp_dml_personas_pe_fin_sesion, #dtp_dml_personas_pe_fecha_crea, #dtp_dml_personas_pe_fecha_modifica, #dtp_dml_personas_pe_fecha_borra";
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
                            action : '<?php echo url_for('personas/delete?id='.$form->getObject()->getId()) ?>', 
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
            });
        </script>
<?php end_slot() ?>
