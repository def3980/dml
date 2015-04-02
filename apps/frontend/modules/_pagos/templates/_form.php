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
                            <div class="span12" style="float: none; margin: 0 auto;">
                                <div class="row">
                                    <div class="span3 offset2">
                                        <fieldset>
                                            <?php echo $form['pa_fecha']->renderLabel().PHP_EOL ?>
                                            <div class="input-append date" id="dtp_dml_pagos_pa_fecha">
                                                <?php echo $form['pa_fecha']->render(array('placeholder' => 'pa_fecha', 'style' => 'width: 230px', 'readonly' => 'true')).PHP_EOL ?>
                                                <span class='add-on'>
                                                    <i data-date-icon='icon-calendar' data-time-icon='icon-time'></i>
                                                </span>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <?php echo $form['tipos_gastos']->renderLabel().PHP_EOL ?>
                                            <?php echo $form['tipos_gastos']->render(array('placeholder' => 'tipos_gastos', 'class' => 'show-menu-arrow span3')).PHP_EOL ?>
                                        </fieldset>
                                        <fieldset style="margin-bottom: 10px;">
                                            <?php echo $form['pa_beneficiarios_json']->renderLabel().PHP_EOL ?>
                                            <?php echo $form['pa_beneficiarios_json']->render(array('class' => 'chosen-select span3', 'data-placeholder' => 'pa_beneficiario')).PHP_EOL ?>
                                        </fieldset>
                                        <fieldset>
                                            <?php echo $form['pa_detalle']->renderLabel().PHP_EOL ?>
                                            <?php echo $form['pa_detalle']->render(array('placeholder' => 'pa_detalle', 'class' => 'span3', 'style' => 'resize: none; height: 50px;')).PHP_EOL ?>
                                        </fieldset>
                                    </div>
                                    <div class="span4 offset1">
                                        <div class="row">
                                            <div class="span2">
                                                <label>&nbsp;</label>
                                                <div class="btn-group" data-toggle="buttons-checkbox">
                                                    <button type="button" class="btn span2 fac<?php echo $form['pa_con_sin_factura']->getValue() ? ' active' : '' ?>">Activar</button>
                                                </div>
                                            </div>
                                            <div class="span2">
                                                <fieldset>
                                                    <?php echo $form['pa_numero_factura']->renderLabel().PHP_EOL ?>
                                                    <?php echo $form['pa_numero_factura']->render(array('placeholder' => 'pa_numero_factura', 'class' => 'span2', 'readonly' => $form->getObject()->isNew() ? 'false' : '')).PHP_EOL ?>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="span2">
                                                <label>&nbsp;</label>
                                                <div class="btn-group" data-toggle="buttons-checkbox">
                                                    <button type="button" class="btn span2 iva<?php echo $form['pa_iva']->getValue() ? ' active' : '' ?>">Activar</button>
                                                </div>
                                            </div>
                                            <div class="span2">
                                                <fieldset>
                                                    <?php echo $form['pa_iva']->renderLabel().PHP_EOL ?>
                                                    <?php echo $form['pa_iva']->render(array('placeholder' => 'pa_iva', 'class' => 'span2', 'readonly' => true)).PHP_EOL ?>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="span2">
                                                <label>&nbsp;</label>
                                                <div class="btn-group" data-toggle="buttons-checkbox">
                                                    <button type="button" class="btn span2 ice<?php echo $form['pa_ice']->getValue() ? ' active' : '' ?>">Activar</button>
                                                </div>
                                            </div>
                                            <div class="span2">
                                                <fieldset>
                                                    <?php echo $form['pa_ice']->renderLabel().PHP_EOL ?>
                                                    <?php echo $form['pa_ice']->render(array('placeholder' => 'pa_ice', 'class' => 'span2', 'readonly' => true)).PHP_EOL ?>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="span2">
                                                <label>&nbsp;</label>
                                                <div class="btn-group" data-toggle="buttons-checkbox">
                                                    <button type="button" class="btn span2 comision<?php echo $form['pa_comision']->getValue() ? ' active' : '' ?>">Activar</button>
                                                </div>
                                            </div>
                                            <div class="span2">
                                                <fieldset>
                                                    <?php echo $form['pa_comision']->renderLabel().PHP_EOL ?>
                                                    <?php echo $form['pa_comision']->render(array('placeholder' => 'pa_comision', 'class' => 'span2', 'readonly' => true)).PHP_EOL ?>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="span2">&nbsp;</div>
                                            <div class="span2">
                                                <fieldset>
                                                    <?php echo $form['pa_valor_total']->renderLabel().PHP_EOL ?>
                                                    <?php echo $form['pa_valor_total']->render(array('placeholder' => 'pa_valor_total', 'class' => 'span2', 'readonly' => ($form['pa_iva']->getValue()
                                                                                                                                                                            || $form['pa_ice']->getValue()
                                                                                                                                                                            || $form['pa_comision']->getValue()) ? 'false' : '')).PHP_EOL ?>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="span8 offset2">
                                <div class="tabbable">
                                    <ul class="nav nav-tabs" style="width: 95%">
                                        <li><a href="#lA" data-toggle="tab">Dropzone</a></li>
                                        <li class="active"><a href="#lB" data-toggle="tab">ShareFile</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane disabled" id="lA">
                                            <p>Click en el panel para agregar los archivos en el servidor</p>
                                            <div id="dropzone">
                                                <div id="clickable" class="dropzone" style="width: 96%; min-height: 170px; padding: 0;">
                                                    <div id="previews" class="dropzone-previews" style="text-align: center"></div>
                                                </div>
                                                <button class="btn btn-mini btnDropzoneC" style="margin-top: 10px">Deseleccionar</button>
                                            </div>
                                        </div>
                                        <div class="tab-pane active" id="lB">
                                            <p>Howdy, I'm in Section B.</p>
                                            <div id="accordeon">
<?php include_partial('collapse_sharefile', array('pagos' => $pagos)) ?>
                                            </div>
                                            <div id="pagina">
<?php include_partial('paginador_sharefile', array('pagos' => $pagos, 'first' => true)) ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr style="margin: 20px 0" />
                        <div style="text-align: center">
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
                    <!-- Modal ShareFile -->
                    <div id="myModalSharefile" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="text-align: center">
                        <div class="modal-header">
                            <h4 id="myModalLabel">Aviso !!</h4>
                        </div>
                        <div class="modal-body">
                            <p>S&oacute;lo se puede asociar de 1 a 5 pdf's por pago, <br />no se puede juntar los pdf's de varios pagos a la vez.</p>
                        </div>
                        <div class="modal-footer" style="text-align: center">
                            <button class="btn btn-small btn-danger" data-dismiss="modal" aria-hidden="true">Aceptar</button>
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
            #dml_pagos_pa_numero_factura,
            #dml_pagos_pa_iva,
            #dml_pagos_pa_ice,
            #dml_pagos_pa_comision,
            #dml_pagos_pa_valor_total {
                text-align: right;
            }
            .dropzone .dz-preview, .dropzone-previews .dz-preview {
                border: none;
                width: 83px;
                font-size: 12px;
                margin: 10px 12px;
            }
            .dropzone .dz-preview .dz-details, .dropzone-previews .dz-preview .dz-details {
                width: 70px;
                height: 70px;
                margin-bottom: 0;
            }
            .dropzone a.dz-remove, .dropzone-previews a.dz-remove {
                width: 70px;
                border: none;
                margin-top: 10px;
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
                    inputNumeroFactura = "#dml_pagos_pa_numero_factura",
                    inputValorTotal = "#dml_pagos_pa_valor_total";
                $(inputNumeroFactura).mask("999-999-999999999", { placeholder : "x" });
                // activando bootstrap-select en los campos que son claves foreaneas
                $(inputForeinKey).selectpicker({ size : 5 });
                
                
                /* ----------------------------------------------------------- AJAX FORM */
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
//                    else {
//                        var cont = new Array(), arr = [], ids = [];
//                        $('div[id^="chk"]').each(function() {
//                            if ($(this).find('button').hasClass('active')) {
//                                cont.push($(this).parent().parent().parent().prev().find('a').text().trim());
//                                ids.push($(this).attr('id').replace('chk', ''));
//                            }
//                        });
//                        $.each(cont, function(k, v) { if ($.inArray(v, arr) === -1) arr.push(v); });
//                        if (arr.length > 1) {
//                            $('#myModalSharefile').modal({ keyboard : false });
//                            return false;
//                        } else {
//                            var element = {};
//                            element.name = "dml_pagos[pa_compartido]";
//                            element.required = false;
//                            element.type = "text";
//                            element.value = JSON.stringify(ids);
//                            formData.push(element);
//                        }
//                    }
                    for ( var i = 0 ; i < formData.length ; i++ ) { 
                        if (obtenerStringEntreParentesisCuadrado(formData[i].name.toString()) != "")
                            if (obtenerStringEntreParentesisCuadrado(formData[i].name.toString()) == "pa_con_sin_factura")
                                formData[i].value = $('.fac').hasClass('active') ? '1' : '0';
                    }
                }
                function showResponse(responseText, statusText, xhr, $form) {
                    $("#btnDropzone").text(responseText.id).click();
                }
                /* --------------------------------------------------------------------- */
                
                /* ------------------------------------------------------------ DROPZONE */
                $('.btnDropzone').bind('click', function(e) {
                    e.preventDefault();
                    $('#myModalDropzone').modal({ keyboard : false });
                });
                $('.btnDropzoneA').bind('click', function(e) {
                    e.preventDefault();
                    $('#myModalDropzone').modal('hide');
                });
                $('.btnDropzoneC').bind('click', function(e) {
                    e.preventDefault();
                });
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
                    dictInvalidFileType  : 'Tipo de archivo no permitido.',
                    dictFileTooBig       : 'Archivo muy grande ({{filesize}} MB). Máx. permitido: {{maxFilesize}} MB.',
                    dictMaxFilesExceeded : "Máx. {{maxFiles}} archivos.",
                    acceptedFiles        : '.pdf',
                    init: function() {
                        var submitButton = document.querySelector("#btnDropzone"),
                            clearButton = document.querySelector(".btnDropzoneC"),
                            myDropzone = this; // closure
                        submitButton.addEventListener("click", function() {
                            if (myDropzone.files.length > 0) { // valido para cuando no envio archivos
                                myDropzone.processQueue(); // Tell Dropzone to process all queued files.
                            } else {
                                var cont = new Array(), arr = [], ids = [];
                                $('div[id^="chk"]').each(function() {
                                    if ($(this).find('button').hasClass('active')) {
                                        cont.push($(this).parent().parent().parent().prev().find('a').text().trim());
                                        ids.push($(this).attr('id').replace('chk', ''));
                                    }
                                });
                                $.each(cont, function(k, v) { if ($.inArray(v, arr) === -1) arr.push(v); });
                                if (arr.length == 1) {
                                    var params = { idShare : ids, idPagos : $("#btnDropzone").text() }
                                    $.post('<?php echo url_for('pagos/sharefile') ?>', params, function(data) {
                                        setTimeout(function() {
                                            window.location.href = "<?php echo url_for('pagos/edit?id=') ?>" + $("#btnDropzone").text();
                                        }, 350);
                                    });
                                } else {
                                    setTimeout(function() {
                                        window.location.href = "<?php echo url_for('pagos/edit?id=') ?>" + $("#btnDropzone").text();
                                    }, 350);
                                }
                            }
                        });
                        clearButton.addEventListener("click", function() { myDropzone.removeAllFiles(); });
                        this.on("sending", function(file, xhr, formData) {
                            formData.append("id", $("#btnDropzone").text()); // enviando parametro por cada archivo
                        });
                        this.on("success", function(file) {
                            if (this.getUploadingFiles().length === 0 
                                && this.getQueuedFiles().length === 0) { // verificando cuando todo los archivos se han subido
                                setTimeout(function() {
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
                
                /* --------------------------------------------------------- AUTONUMERIC */
                $('#dml_pagos_pa_iva,' +
                  '#dml_pagos_pa_ice,' +
                  '#dml_pagos_pa_valor_total').autoNumeric('init', {
                    aSep: '.', 
                    aDec: ',', 
                    aSign: '$ '
                });
                $('#dml_pagos_pa_comision').autoNumeric('init', {
                    aSep: '.', 
                    aDec: ',', 
                    aSign: '$ ',
                    vMin: '0.00',
                    vMax: '<?=$comision?>'
                });
                /* --------------------------------------------------------------------- */
                
                /* ----------------------------------- CALCULO DE IMPUESTOS Y COMISIONES */
                $('.iva').bind('click', function() {
                    if ($(this).hasClass('active')) {
                        var pa_vt = $('#dml_pagos_pa_valor_total');
                        if (!$('.ice').hasClass('active') && !$('.comision').hasClass('active')) {
                            var pa_iva = $('#dml_pagos_pa_iva'),
                                lim = limpiarValor(pa_vt.val()),
                                sin_iva = quitarIva(lim);
                            pa_iva.val('');
                            pa_vt.autoNumeric('set', sin_iva);
                            pa_vt.attr('readonly', false);
                        } else if ($('.ice').hasClass('active') && !$('.comision').hasClass('active')) {
                            var pa_iva = $('#dml_pagos_pa_iva'),
                                lim_con_iva_ice = limpiarValor(pa_vt.val()),
                                lim = quitarIvaIce(lim_con_iva_ice),
                                ice = obtenerIce(lim);
                            pa_iva.val('');
                            pa_vt.autoNumeric('set', (lim + ice));
                        } else if (!$('.ice').hasClass('active') && $('.comision').hasClass('active')) {
                            var pa_iva = $('#dml_pagos_pa_iva'),
                                lim_con_iva_com = limpiarValor(pa_vt.val()),
                                lim_con_iva = quitarComision(lim_con_iva_com, limpiarValor($('#dml_pagos_pa_comision').val())),
                                lim = quitarIva(lim_con_iva),
                                com = obtenerComision(limpiarValor($('#dml_pagos_pa_comision').val()));
                            pa_iva.val('');
                            pa_vt.autoNumeric('set', (lim + com));
                        } else if ($('.ice').hasClass('active') && $('.comision').hasClass('active')) {
                            var pa_iva = $('#dml_pagos_pa_iva'),
                                lim_con_iva_ice_com = limpiarValor(pa_vt.val()),
                                lim_con_iva_ice = quitarComision(lim_con_iva_ice_com, limpiarValor($('#dml_pagos_pa_comision').val())),
                                lim = quitarIvaIce(lim_con_iva_ice),
                                ice = obtenerIce(lim),
                                com = obtenerComision(limpiarValor($('#dml_pagos_pa_comision').val()));
                            pa_iva.val('');
                            pa_vt.autoNumeric('set', (lim + ice + com));                            
                        }
                    } else {
                        var pa_vt = $('#dml_pagos_pa_valor_total');
                        if (limpiarValor(pa_vt.val()) > 0.001) {
                            if (!$('.ice').hasClass('active') && !$('.comision').hasClass('active')) {
                                var pa_iva = $('#dml_pagos_pa_iva'),
                                    lim = limpiarValor(pa_vt.val()),
                                    iva = obtenerIva(lim);
                                pa_iva.autoNumeric('set', iva);
                                pa_vt.autoNumeric('set', (lim + iva));
                            } else if ($('.ice').hasClass('active') && !$('.comision').hasClass('active')) {
                                var pa_iva = $('#dml_pagos_pa_iva'),
                                    lim_con_ice = limpiarValor(pa_vt.val()),
                                    lim = quitarIce(lim_con_ice),
                                    iva = obtenerIva(lim),
                                    ice = obtenerIce(lim);
                                pa_iva.autoNumeric('set', iva);
                                pa_vt.autoNumeric('set', (lim + iva + ice));
                            } else if (!$('.ice').hasClass('active') && $('.comision').hasClass('active')) {
                                var pa_iva = $('#dml_pagos_pa_iva'),
                                    lim_con_com = limpiarValor(pa_vt.val()),
                                    lim = quitarComision(lim_con_com, limpiarValor($('#dml_pagos_pa_comision').val())),
                                    iva = obtenerIva(lim),
                                    com = obtenerComision(limpiarValor($('#dml_pagos_pa_comision').val()));
                                pa_iva.autoNumeric('set', iva);
                                pa_vt.autoNumeric('set', (lim + iva + com));
                            } else if ($('.ice').hasClass('active') && $('.comision').hasClass('active')) {
                                var pa_iva = $('#dml_pagos_pa_iva'),
                                    lim_con_ice_com = limpiarValor(pa_vt.val()),
                                    lim_ice = quitarComision(lim_con_ice_com, limpiarValor($('#dml_pagos_pa_comision').val())),
                                    lim = quitarIce(lim_ice),
                                    iva = obtenerIva(lim),
                                    ice = obtenerIce(lim),
                                    com = obtenerComision(limpiarValor($('#dml_pagos_pa_comision').val()));
                                pa_iva.autoNumeric('set', iva);
                                pa_vt.autoNumeric('set', (lim + iva + ice + com));
                            }
                            pa_vt.attr('readonly', true);
                        }
                    }
                });
                $('.ice').bind('click', function() {
                    if ($(this).hasClass('active')) {
                        var pa_vt = $('#dml_pagos_pa_valor_total');
                        if (!$('.iva').hasClass('active') && !$('.comision').hasClass('active')) {
                            var pa_ice = $('#dml_pagos_pa_ice'),
                                lim = limpiarValor(pa_vt.val()),
                                sin_ice = quitarIce(lim);
                            pa_ice.val('');
                            pa_vt.autoNumeric('set', sin_ice);
                            pa_vt.attr('readonly', false);
                        } else if ($('.iva').hasClass('active') && !$('.comision').hasClass('active')) {
                            var pa_ice = $('#dml_pagos_pa_ice'),
                                lim_con_iva_ice = limpiarValor(pa_vt.val()),
                                lim = quitarIvaIce(lim_con_iva_ice),
                                iva = obtenerIva(lim);
                            pa_ice.val('');
                            pa_vt.autoNumeric('set', (lim + iva));
                        } else if (!$('.iva').hasClass('active') && $('.comision').hasClass('active')) {
                            var pa_ice = $('#dml_pagos_pa_ice'),
                                lim_con_ice_com = limpiarValor(pa_vt.val()),
                                lim_con_ice = quitarComision(lim_con_ice_com, limpiarValor($('#dml_pagos_pa_comision').val())),
                                lim = quitarIce(lim_con_ice),
                                com = obtenerComision(limpiarValor($('#dml_pagos_pa_comision').val()));
                            pa_ice.val('');
                            pa_vt.autoNumeric('set', (lim + com));
                        } else if ($('.iva').hasClass('active') && $('.comision').hasClass('active')) {
                            var pa_ice = $('#dml_pagos_pa_ice'),
                                lim_con_iva_ice_com = limpiarValor(pa_vt.val()),
                                lim_con_iva_ice = quitarComision(lim_con_iva_ice_com, limpiarValor($('#dml_pagos_pa_comision').val())),
                                lim = quitarIvaIce(lim_con_iva_ice),
                                iva = obtenerIva(lim),
                                com = obtenerComision(limpiarValor($('#dml_pagos_pa_comision').val()));
                            pa_ice.val('');
                            pa_vt.autoNumeric('set', (lim + iva + com));                            
                        }
                    } else {
                        var pa_vt = $('#dml_pagos_pa_valor_total');
                        if (limpiarValor(pa_vt.val()) > 0.001) {
                            if (!$('.iva').hasClass('active') && !$('.comision').hasClass('active')) {
                                var pa_ice = $('#dml_pagos_pa_ice'),
                                    lim = limpiarValor(pa_vt.val()),
                                    ice = obtenerIce(lim);
                                pa_ice.autoNumeric('set', ice);
                                pa_vt.autoNumeric('set', (lim + ice));
                            } else if ($('.iva').hasClass('active') && !$('.comision').hasClass('active')) {
                                var pa_ice = $('#dml_pagos_pa_ice'),
                                    lim_con_iva = limpiarValor(pa_vt.val()),
                                    lim = quitarIva(lim_con_iva),
                                    iva = obtenerIva(lim),
                                    ice = obtenerIce(lim);
                                pa_ice.autoNumeric('set', ice);
                                pa_vt.autoNumeric('set', (lim + iva + ice));
                            } else if (!$('.iva').hasClass('active') && $('.comision').hasClass('active')) {
                                var pa_ice = $('#dml_pagos_pa_ice'),
                                    lim_con_com = limpiarValor(pa_vt.val()),
                                    lim = quitarComision(lim_con_com, limpiarValor($('#dml_pagos_pa_comision').val())),
                                    ice = obtenerIce(lim),
                                    com = obtenerComision(limpiarValor($('#dml_pagos_pa_comision').val()));
                                    pa_ice.autoNumeric('set', ice);
                                    pa_vt.autoNumeric('set', (lim + ice + com));
                            } else if ($('.iva').hasClass('active') && $('.comision').hasClass('active')) {
                                var pa_ice = $('#dml_pagos_pa_ice'),
                                    lim_con_iva_com = limpiarValor(pa_vt.val()),
                                    lim_iva = quitarComision(lim_con_iva_com, limpiarValor($('#dml_pagos_pa_comision').val())),
                                    lim = quitarIva(lim_iva),
                                    iva = obtenerIva(lim),
                                    ice = obtenerIce(lim),
                                    com = obtenerComision(limpiarValor($('#dml_pagos_pa_comision').val()));
                                pa_ice.autoNumeric('set', ice);
                                pa_vt.autoNumeric('set', (lim + iva + ice + com));
                            }
                            pa_vt.attr('readonly', true);
                        }
                    }
                });
                $('.comision').bind('click', function() {
                    if ($(this).hasClass('active')) {
                        var pa_vt = $('#dml_pagos_pa_valor_total'),
                            pa_com = $('#dml_pagos_pa_comision'),
                            lim_con_com = limpiarValor(pa_vt.val()),
                            lim_sin_com = quitarComision(lim_con_com, limpiarValor(pa_com.val()));
                        pa_com.val('');
                        pa_vt.autoNumeric('set', (lim_sin_com));
                        pa_com.attr('readonly', true);
                    } else {
                        var pa_vt = $('#dml_pagos_pa_valor_total');
                        if (limpiarValor(pa_vt.val()) > 0.001) {
                            $('#dml_pagos_pa_comision').attr('readonly', false).focus();
                            pa_vt.attr('readonly', true);
                        }
                    }
                });
                $('#dml_pagos_pa_comision').focusout(function() {
                    var pa_vt = $('#dml_pagos_pa_valor_total');
                    if (limpiarValor(pa_vt.val()) > 0.001)
                        pa_vt.autoNumeric('set', (limpiarValor(pa_vt.val()) + limpiarValor($(this).val())));
                });
                function limpiarValor(cadena) {
                    return parseFloat(cadena.replace('.', '').replace(',', '.').replace('$ ', ''));
                }
                function obtenerIva(valor) {
                    return parseFloat(valor * <?=$iva?> / 100);
                }
                function quitarIva(valor) {
                    return parseFloat(valor / 1.<?=$iva?>);
                }
                function obtenerIce(valor) {
                    return parseFloat(valor * <?=$ice?> / 100);
                }
                function quitarIce(valor) {
                    return parseFloat(valor / 1.<?=$ice?>);
                }
                function quitarIvaIce(valor) {
                    return parseFloat(valor / 1.<?php echo $iva + $ice?>);
                }
                function obtenerComision(com) {
                    return parseFloat(com);
                }
                function quitarComision(lim_con_com, com) {
                    return parseFloat(lim_con_com - parseFloat(com));
                }
                /* --------------------------------------------------------------------- */
                
                /* --------------------------------------- LISTA DE ARCHIVOS COMPARTIDOS */
                $('.pagination ul li a').bind('click', function() {
                    if (!$(this).parent().hasClass('active')) {
                        $.post('<?php echo url_for('pagos/collapseSharefile') ?>', { pagina : $(this).attr('id') }, function(data) {
                            $('#accordeon').html(data);
                        });
                        $.post('<?php echo url_for('pagos/paginadorSharefile') ?>', { pagina : $(this).attr('id') }, function(data) {
                            $('#pagina').html(data);
                        });
                    }
                });
                $('.btnSharefile').bind('click', function(e) {
                    e.preventDefault();
                    $.post('<?=url_for('pagos/modalBodySharefile')?>', function(data) {
                        $('#myModalSharefile .modal-body').html(data);
                    });
                    $('#myModalSharefile').modal({ keyboard : false });
                });
                $('.btnSharefileA').bind('click', function(e) {
                    e.preventDefault();
                });
                $('.btnSharefileC').bind('click', function(e) {
                    e.preventDefault();
                });
                
                $('#btnImp').bind('click', function() {
                    var cont = new Array(),
                        arr = [];
                    $('div[id^="chk"]').each(function() {
                        if ($(this).find('button').hasClass('active')) {
                            cont.push($(this).parent().parent().parent().prev().find('a').text().trim());
                            console.log($(this).attr('id'));
                        }
                    });
                    $.each(cont, function(k, v){
                        if ($.inArray(v, arr) === -1) arr.push(v);
                    });
                    $('#validarChk').text(JSON.stringify(arr));
                });
                $('#btnRev').bind('click', function() {
                    var obj = JSON.parse($('#validarChk').text());
                    if (obj.length > 1)
                        console.log("Solo debe escoger de 1 hasta 5 pdf's por pago...");
                });
                /* --------------------------------------------------------------------- */

<?php if ($form->getObject()->isNew()): ?>
                /* --------------------------------------------- VALIDANDO BOTON FACTURA */
                var com = '#dml_pagos_',
                    fac = $('.fac'),
                    iva = $('.iva'),
                    ice = $('.ice');
                fac.bind('click', function() {
                    if (fac.hasClass('active')) {
                        $(com + 'pa_numero_factura').attr('readonly', true);
                        $.getJSON('<?php echo url_for('pagos/intermediate') ?>', function(data) {
                            $(com + 'pa_numero_factura').val(data.pa_numero_factura);
                        });
                    } else {
                        $.getJSON('<?php echo url_for('pagos/intermediate') ?>', function(data) {
                            $(com + 'pa_numero_factura').val(data.pa_numero_factura);
                        });
                        $(com + 'pa_numero_factura').attr('readonly', false);
                    }
                });
                /* --------------------------------------------------------------------- */
                
<?php else: ?>
                /* --------------------------------------------- VALIDANDO BOTON FACTURA */
                var com = '#dml_pagos_',
                    fac = $('.fac'),
                    iva = $('.iva'),
                    ice = $('.ice'),
                    val = $(com + 'pa_numero_factura').val();
                if ($(com + 'pa_con_sin_factura').val() == '0') {
                    $(com + 'pa_numero_factura').attr('readonly', true);
                } else {
                    $(com + 'pa_numero_factura').attr('readonly', false);
                }
                fac.bind('click', function() {
                    if (fac.hasClass('active')) {
                        $(com + 'pa_numero_factura').attr('readonly', true);
//                        $.getJSON('<?php echo url_for('pagos/intermediate') ?>', function(data) {
//                            $(com + 'pa_numero_factura').val(data.pa_numero_factura);
//                            $(com + 'pa_con_sin_factura').val('0');
//                        });
                        $(com + 'pa_numero_factura').val(val);
                        $(com + 'pa_con_sin_factura').val('1');
                    } else {
//                        $.getJSON('<?php echo url_for('pagos/intermediate') ?>', function(data) {
//                            $(com + 'pa_numero_factura').val(data.pa_numero_factura);
//                            $(com + 'pa_con_sin_factura').val('1');
//                        });
                        $(com + 'pa_numero_factura').val(val);
                        $(com + 'pa_con_sin_factura').val('1');
                        $(com + 'pa_numero_factura').attr('readonly', false);
                    }
                });
                /* --------------------------------------------------------------------- */
<?php endif; ?>
            });
        </script>
<?php end_slot() ?>
