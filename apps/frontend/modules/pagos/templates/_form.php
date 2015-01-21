<?php use_stylesheet('bootstrap-select') ?>
<?php use_javascript('bootstrap-select') ?>
<?php use_stylesheet('bootstrap-datetimepicker.min.css') ?>
<?php use_javascript('bootstrap-datetimepicker') ?>
<?php use_javascript('locales/bootstrap-datetimepicker.es.js') ?>
                    <form id="frm_pa" action="<?php echo url_for('pagos/'.
                                                ($form->getObject()->isNew() 
                                                    ? 'create' 
                                                    : 'update'
                                                ).(!$form->getObject()->isNew() 
                                                    ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" autocomplete="off"<?php $form->isMultipart() and print ' enctype="multipart/form-data"' ?>>
<?php if (!$form->getObject()->isNew()): ?>
                        <input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
                        <div class="row">
                            <div class="span9" style="float: none; margin: 0 auto;">
                                <div class="row">
                                    <div class="span3 offset1">
                                        <fieldset>
                                            <?php echo $form['pa_numero_factura']->renderLabel().PHP_EOL ?>
                                            <?php echo $form['pa_numero_factura']->render(array('placeholder' => 'pa_numero_factura', 'class' => 'span3')).PHP_EOL ?>
                                        </fieldset>
                                        <fieldset>                                    
                                            <?php echo $form['tipos_gastos']->renderLabel().PHP_EOL ?>
                                            <?php echo $form['tipos_gastos']->render(array('placeholder' => 'tipos_gastos', 'class' => 'show-menu-arrow span3')).PHP_EOL ?>
                                        </fieldset>
                                        <fieldset>
                                            <?php echo $form['pa_beneficiarios_json']->renderLabel().PHP_EOL ?>
                                            <?php echo $form['pa_beneficiarios_json']->render(array('class' => 'chosen-select span3', 'data-placeholder' => 'pa_beneficiario')).PHP_EOL ?>
                                        </fieldset>
                                        <fieldset>
                                            <?php echo $form['pa_detalle']->renderLabel().PHP_EOL ?>
                                            <?php echo $form['pa_detalle']->render(array('placeholder' => 'pa_detalle', 'class' => 'span3')).PHP_EOL ?>
                                        </fieldset>
                                        <fieldset>
                                            <label>Opciones adicionales:</label>
                                            <div class="btn-group" data-toggle="buttons-checkbox">
                                                <button type="button" class="btn btn-small active">Factura</button>
                                                <button type="button" class="btn btn-small">I.V.A.</button>
                                                <button type="button" class="btn btn-small">I.C.E.</button>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="span3 offset1">
                                        <fieldset>
                                            <?php echo $form['pa_fecha']->renderLabel().PHP_EOL ?>
                                            <div class="input-append date" id="dtp_dml_pagos_pa_fecha">
                                                <?php echo $form['pa_fecha']->render(array('placeholder' => 'pa_fecha', 'style' => 'width: 228px', 'readonly' => 'true')).PHP_EOL ?>
                                                <span class='add-on'>
                                                    <i data-date-icon='icon-calendar' data-time-icon='icon-time'></i>
                                                </span>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <?php echo $form['pa_valor_total']->renderLabel().PHP_EOL ?>
                                            <?php echo $form['pa_valor_total']->render(array('placeholder' => 'pa_valor_total', 'class' => 'span3')).PHP_EOL ?>
                                        </fieldset>
                                        <fieldset>
                                            <?php echo $form['pa_comision']->renderLabel().PHP_EOL ?>
                                            <?php echo $form['pa_comision']->render(array('placeholder' => 'pa_comision', 'class' => 'span3')).PHP_EOL ?>
                                        </fieldset>
                                        <fieldset>
                                            <label>Dropzone:</label>
                                            <div id="dropzone">
                                                <div id="clickable" class="dropzone" style="width: 100%; min-height: 227px; padding: 0;">
                                                    <div id="previews" class="dropzone-previews" style="text-align: center"></div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr style="margin: 20px 0" />
                        <div style="text-align: right">
                            <a class="btn btn-small" href="<?php echo url_for('pagos/index') ?>">Regresar</a>
                             |&nbsp;<button type="submit" class="btn btn-small btn-success" style="margin: 0 auto">Guardar</button>
<?php if (!$form->getObject()->isNew()): ?>
                             |&nbsp;<button class="btn btn-small btn-danger" id="del">Eliminar</button>
<?php endif; ?>
                        </div>
<?php echo $form->renderGlobalErrors() ?>
<?php echo $form->renderHiddenFields(false).PHP_EOL ?>
                    </form>
                    <button id="btnDropzone" style="display: none">guardar pdfs</button>
<?php if (!$form->getObject()->isNew()): ?>
                    <!-- Modal -->
                    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="text-align: center">
                        <div class="modal-header">
                            <h4 id="myModalLabel">Advertencia !!</h4>
                        </div>
                        <div class="modal-body">
                            <p>Se va a proceder a eliminar un registro <br />con n&uacute;mero de identificador <code>id = <?php echo $form['id']->getValue() ?></code><br />y toda la informaci&oacute;n en pdf relacionada.</p>
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
        </style>
<?php end_slot() ?>
<?php slot('porcion_js') ?>
        <script>
            $(function() {
                var inputDateTime = "#dtp_dml_pagos_pa_fecha";
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
                            action : '<?php echo url_for('pagos/delete?id='.$form->getObject()->getId()) ?>', 
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
                                name  : '<?php echo $token->getCSRFFieldName() ?>',
                                value : '<?php echo $token->getCSRFToken() ?>'
                            })
                        )
                    ).find('form').submit();
                });
<?php endif; ?>
                var inputForeinKey = "#dml_pagos_tipos_gastos",
                    inputNumeroFactura = "#dml_pagos_pa_numero_factura";
                $(inputNumeroFactura).mask("999-999-999999999", { placeholder : "x" });
                // activando bootstrap-select en los campos que son claves foreaneas
                $(inputForeinKey).selectpicker({ size : 5 });
                
                $('#frm_pa').ajaxForm({
                    dataType : 'json',
                    beforeSubmit : validate,
                    success : showResponse
                });
                function validate(formData, jqForm, options) {
                    if ($('#dml_pagos_pa_detalle').val().length < 3) {
                        validador($('#dml_pagos_pa_detalle'), "Logitud insuficiente");
                        return false;
                    }  else if ($('#dml_pagos_pa_fecha').val().length < 1) {
                        validador($('#dtp_dml_pagos_pa_fecha'), "Fecha invalida");
                        return false;
                    }  else if ($('#dml_pagos_pa_valor_total').val().length < 1) {
                        validador($('#dml_pagos_pa_valor_total'), "Agregar un valor");
                        return false;
                    }
                }
                function showResponse(responseText, statusText, xhr, $form) {
                    $("#btnDropzone").text(responseText.id).click();
                }
                
                /* ------------------------------------------------------------ DROPZONE */
                Dropzone.autoDiscover = false;
                new Dropzone(document.body, {                // Make the whole body a dropzone
                    url                  : "<?php echo url_for('pagos/dropzone') ?>",// Set the url
                    previewsContainer    : "#previews",      // Define the container to display the previews
                    clickable            : "#clickable",     // Define the element that should be used as click trigger to select files.
                    autoProcessQueue     : false,
                    addRemoveLinks       : true,
                    maxFilesize          : 3,
                    maxFiles             : <?php echo $bi_count ?>,
                    parallelUploads      : <?php echo $bi_count ?>,
                    dictRemoveFile       : 'Quitar',
                    dictCancelUpload     : 'Cancelar',
                    dictInvalidFileType  : 'Tipo de archivo no permitido',
                    dictFileTooBig       : 'Archivo muy grande ({{filesize}} MB). Máx. permitido: {{maxFilesize}} MB.',
                    dictMaxFilesExceeded : "Sólo puedes máx. {{maxFiles}} archivos por ingreso.",
                    acceptedFiles        : '.pdf',
                    init: function() {
                        var submitButton = document.querySelector("#btnDropzone"),
                            myDropzone = this; // closure
                        submitButton.addEventListener("click", function() {
                            if (myDropzone.files.length > 0) { // valido para cuando no envio archivos
                                myDropzone.processQueue(); // Tell Dropzone to process all queued files.
                            } else {
                                setTimeout(function(){
                                    window.location.href = "<?php echo url_for('pagos/edit?id=') ?>" + $("#btnDropzone").text();
                                }, 350);
                            }
                        });
                        this.on("sending", function(file, xhr, formData) {
                            formData.append("id", $("#btnDropzone").text()); // enviando parametro por cada archivo
                        });
                        this.on("success", function(file) {
                            if (this.getUploadingFiles().length === 0 
                                && this.getQueuedFiles().length === 0) { // verificando cuando todo los archivos se han subido
                                setTimeout(function(){
                                    window.location.href = "<?php echo url_for('pagos/edit?id=') ?>" + $("#btnDropzone").text();
                                }, 350);
                            }
                        });
                    }
                });
                /* --------------------------------------------------------------------- */
                
                /* -------------------------------------------------------------- CHOSEN */
                var config = { '.chosen-select' : {} }
                for (var selector in config) $(selector).chosen(config[selector]);
                /* --------------------------------------------------------------------- */
            });
        </script>
<?php end_slot() ?>
