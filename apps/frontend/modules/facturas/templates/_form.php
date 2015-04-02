<?php slot('titulo', 'Pagos &middot; Facturas') ?>
<?php use_stylesheet('bootstrap-select') ?>
<?php use_javascript('bootstrap-select') ?>
<?php use_stylesheet('bootstrap-datetimepicker.min.css') ?>
<?php use_javascript('bootstrap-datetimepicker') ?>
<?php use_javascript('locales/bootstrap-datetimepicker.es.js') ?>
                    <form id="frm_fa" action="<?php echo url_for('facturas/'.
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
                                            <?php echo $form['fa_numero_factura']->renderLabel().PHP_EOL ?>
                                            <div class="input-prepend">
                                                <button class="btn in-out" type="button" data-toggle="button" style="width: 30px; padding: 4px 0px;">
                                                    <i class="icon-pencil"></i>
                                                </button>
                                                <?php echo $form['fa_numero_factura']->render(array('placeholder' => 'fa_numero_factura', 'readonly' => true, 'style' => 'text-align: center; width: 225px;')).PHP_EOL ?>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <?php echo $form['fa_fecha']->renderLabel().PHP_EOL ?>
                                            <div class="input-append date" id="dtp_dml_facturas_fa_fecha">
                                                <?php echo $form['fa_fecha']->render(array('placeholder' => 'fa_fecha', 'style' => 'width: 227px', 'readonly' => 'true')).PHP_EOL ?>
                                                <span class='add-on'>
                                                    <i data-date-icon='icon-calendar' data-time-icon='icon-time'></i>
                                                </span>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <?php echo $frmPagos['pa_beneficiarios_json']->renderLabel().PHP_EOL ?>
                                            <?php echo $frmPagos['pa_beneficiarios_json']->render(array('class' => 'chosen-select span3', 'data-placeholder' => 'pa_beneficiario')).PHP_EOL ?>
                                        </fieldset>
                                        <fieldset>
                                            <?php echo $frmPagos['pa_detalle']->renderLabel().PHP_EOL ?>
                                            <?php echo $frmPagos['pa_detalle']->render(array('placeholder' => 'pa_detalle', 'class' => 'span3', 'style' => 'resize: none; height: 50px;')).PHP_EOL ?>
                                        </fieldset>
                                    </div>
                                    <div class="span4 offset1">
                                        <div class="pull-right">
                                            <fieldset>
                                                <?php echo $form['tipos_gastos']->renderLabel().PHP_EOL ?>
                                                <?php echo $form['tipos_gastos']->render(array('placeholder' => 'tipos_gastos', 'class' => 'show-menu-arrow span3')).PHP_EOL ?>
                                            </fieldset>
                                        </div>
                                        <div class="pull-right">
                                            <fieldset>
                                                <?php echo $form['fa_valor_total']->renderLabel().PHP_EOL ?>
                                                <?php echo $form['fa_valor_total']->render(array('placeholder' => 'fa_valor_total', 'class' => 'span3')).PHP_EOL ?>
                                            </fieldset>
                                        </div>
                                        <div class="row">
                                            <div class="span3 pull-right">
                                                <div class="pull-right">
                                                    <fieldset>
                                                        <?php echo $frmPagos['pa_ice']->renderLabel().PHP_EOL ?>
                                                        <div class="input-prepend">
                                                            <button class="btn ica<?php echo !$frmPagos->getObject()->isNew() && !empty($frmPagos['pa_ice']->getValue()) ? ' active' : '' ?>" type="button" data-toggle="button" style="width: 30px; padding: 4px 0px;">
                                                                <i class="icon-pencil"></i>
                                                            </button>
                                                            <?php echo $frmPagos['pa_ice']->render(array('placeholder' => 'pa_ice', 'readonly' => !$frmPagos->getObject()->isNew() && !empty($frmPagos['pa_ice']->getValue()) ? false : true, 'style' => 'width: 75px')).PHP_EOL ?>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <fieldset>
                                                    <?php echo $frmPagos['pa_iva']->renderLabel().PHP_EOL ?>
                                                    <div class="input-prepend">
                                                        <button class="btn iva<?php echo !$frmPagos->getObject()->isNew() && !empty($frmPagos['pa_iva']->getValue()) ? ' active' : '' ?>" type="button" data-toggle="button" style="width: 30px; padding: 4px 0px;">
                                                            <i class="icon-pencil"></i>
                                                        </button>
                                                        <?php echo $frmPagos['pa_iva']->render(array('placeholder' => 'pa_iva', 'readonly' => !$frmPagos->getObject()->isNew() && !empty($frmPagos['pa_iva']->getValue()) ? false : true, 'style' => 'width: 75px')).PHP_EOL ?>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="span3 pull-right">
                                                <div class="pull-right">
                                                    <fieldset>
                                                        <?php echo $frmPagos['pa_valor_parcial']->renderLabel().PHP_EOL ?>
                                                        <div class="input-prepend">
                                                            <button class="btn valor-parcial<?php echo !$frmPagos->getObject()->isNew() && !empty($frmPagos['pa_valor_parcial']->getValue()) ? ' active' : '' ?>" type="button" data-toggle="button" style="width: 30px; padding: 4px 0px;">
                                                                <i class="icon-pencil"></i>
                                                            </button>
                                                            <?php echo $frmPagos['pa_valor_parcial']->render(array('placeholder' => 'pa_valor_parcial', 'readonly' => !$frmPagos->getObject()->isNew() && !empty($frmPagos['pa_valor_parcial']->getValue()) ? false : true, 'style' => 'width: 75px')).PHP_EOL ?>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <fieldset>
                                                    <?php echo $frmPagos['pa_comision']->renderLabel().PHP_EOL ?>
                                                    <div class="input-prepend">
                                                        <button class="btn comision<?php echo !$frmPagos->getObject()->isNew() && !empty($frmPagos['pa_comision']->getValue()) ? ' active' : '' ?>" type="button" data-toggle="button" style="width: 30px; padding: 4px 0px;">
                                                            <i class="icon-pencil"></i>
                                                        </button>
                                                        <?php echo $frmPagos['pa_comision']->render(array('placeholder' => 'pa_comision', 'readonly' => !$frmPagos->getObject()->isNew() && !empty($frmPagos['pa_comision']->getValue()) ? false : true, 'style' => 'width: 75px')).PHP_EOL ?>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="span8 offset2">
                                <div class="tabbable">
                                    <ul class="nav nav-tabs" style="width: 96%">
                                        <li class="active"><a href="#lA" data-toggle="tab">Dropzone</a></li>
                                        <li><a href="#lB" data-toggle="tab">ShareFile</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="lA">
                                            <div class="row" style="margin-bottom: 10px">
                                                <div class="span4">Click en el panel para subir las imagenes al servidor.</div>
                                                <div class="offset1" style="float: left; width: 240px; text-align: right">
<?php if (!$form->getObject()->isNew()): ?>
                                                    <a href="#modal<?php echo $form['id']->getValue() ?>" role="button" data-toggle="modal">Respaldos sobre esta factura <i class="icon-inbox"></i></a>
<?php endif; ?>
                                                </div>
                                            </div>
                                            <div id="dropzone">
                                                <div id="clickable" class="dropzone" style="width: 96%; min-height: 170px; padding: 0;">
                                                    <div id="previews" class="dropzone-previews" style="text-align: center"></div>
                                                </div>
                                                <div style="text-align: center">
                                                    <button class="btn btn-mini btnDropzoneC" style="margin-top: 10px">Deseleccionar</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="lB">
                                            <p>Howdy, I'm in Section B.</p>
                                            <div id="accordeon">
<?php //include_partial('collapse_sharefile', array('pagos' => $pagos)) ?>
                                            </div>
                                            <div id="pagina">
<?php //include_partial('paginador_sharefile', array('pagos' => $pagos, 'first' => true)) ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr style="margin: 30px 0 20px 0" />
                        <div style="text-align: center">
                            <a class="btn btn-small" href="<?php echo url_for('facturas/index') ?>">Regresar</a>
                             |&nbsp;<button type="submit" class="btn btn-small btn-success" style="margin: 0 auto">Guardar</button>
<?php if (!$form->getObject()->isNew()): ?>
                             |&nbsp;<button class="btn btn-small btn-danger" id="del">Eliminar</button>
<?php endif; ?>
                        </div>
<?php echo $form->renderGlobalErrors() ?>
<?php echo $form->renderHiddenFields(false).PHP_EOL ?>
                    </form>
                    <button id="btnDropzone" style="display: none">guardar</button>
<?php include_partial('modal_facturas', array('id' => $form['id']->getValue())) ?>
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
            .input-append .active, 
            .input-prepend .active {
                outline: 0;
            }
            fieldset {
                margin-bottom: 15px;
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
                var inputDateTime = "#dtp_dml_facturas_fa_fecha";
                $(inputDateTime).datetimepicker({ format : 'yyyy-MM-dd hh:mm:ss', language: 'es' });
<?php if (!$form->getObject()->isNew()): $token = new BaseForm(); ?>
                // para abrir el modal
                $('#del').bind('click', function(e) {
                    e.preventDefault();
                    $('#myModal').modal({ keyboard : false });
                });

                $('#myModal div:last .btn-danger').bind('click', function() {
                    $('#myModal').find('div:last').append(
                        $('<form/>', { 
                            action : '<?php echo url_for('facturas/delete?id='.$form->getObject()->getId()) ?>', 
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
                var inputForeinKey = "#dml_facturas_tipos_gastos";
                // activando bootstrap-select en los campos que son claves foreaneas
                $(inputForeinKey).selectpicker({ size : 5 });
                
                /* ------------------------------------------- numero factura */
                var comun = '#dml_facturas_',
                    inOutObj = $('.in-out'),
                    numFacObj = $(comun + 'fa_numero_factura'),
                    ordenFac = numFacObj.val(),
                    conSinFac = $(comun + 'fa_con_sin_factura');
                numFacObj.mask("999-999-999999999", { placeholder : "x" });
                inOutObj.bind('click', function() {
                    if (!$(this).hasClass('active')) {
                        numFacObj.attr('readonly', false).focus();
                        conSinFac.val('1');
                    } else {
                        conSinFac.val('0');
                        numFacObj.val(ordenFac).attr('readonly', true);
                    }
                });
                /* --------------------------------------- fin numero factura */
                
                /* ---------------------------------------------- valor total */
                $(comun + 'fa_valor_total, '
                    + '#dml_pagos_pa_iva, '
                    + '#dml_pagos_pa_ice, '
                    + '#dml_pagos_pa_valor_parcial').autoNumeric('init', {
                    aSep: '.', 
                    aDec: ',', 
                    aSign: '$ ',
                    vMin: '0.00',
                    vMax: '99999.99'
                }).css('text-align', 'right');
                $('#dml_pagos_pa_comision').autoNumeric('init', {
                    aSep: '.', 
                    aDec: ',', 
                    aSign: '$ ',
                    vMin: '0.00',
                    vMax: '<?=$comision?>'
                }).css('text-align', 'right');
                /* ------------------------------------------ fin valor total */
                
                /* -------------------------------------------- beneficiarios */
                var config = { '.chosen-select' : {} }
                for (var selector in config) $(selector).chosen(config[selector]);
                /* ---------------------------------------- fin beneficiarios */
                
                /* ------------------------ calculo de impuestos y comisiones */
                $('.iva').bind('click', function() {
                    var comun = '#dml_pagos_',
                        iva = $(comun + 'pa_iva');
                    if (!$(this).hasClass('active')) {
                        iva.attr('readonly', false).focus();
                    } else {
                        iva.attr('readonly', true).val('');
                    }
                });
                $('.ice').bind('click', function() {
                    var comun = '#dml_pagos_',
                        ice = $(comun + 'pa_ice');
                    if (!$(this).hasClass('active')) {
                        ice.attr('readonly', false).focus();
                    } else {
                        ice.attr('readonly', true).val('');
                    }
                });
                $('.comision').bind('click', function() {
                    var comun = '#dml_pagos_',
                        comision = $(comun + 'pa_comision');
                    if (!$(this).hasClass('active')) {
                        comision.attr('readonly', false).focus();
                    } else {
                        comision.attr('readonly', true).val('');
                    }
                });
                $('.valor-parcial').bind('click', function() {
                    var comun = '#dml_pagos_',
                        par = $(comun + 'pa_valor_parcial');
                    if (!$(this).hasClass('active')) {
                        par.attr('readonly', false).focus();
                    } else {
                        par.attr('readonly', true).val('');
                    }
                });
                /* -------------------- fin calculo de impuestos y comisiones */
                
                /* ------------------------------------------------ ajax form */
                $('#frm_fa').ajaxForm({
                    dataType : 'json',
                    beforeSubmit : validate,
                    success : showResponse
                });
                function validate(formData, jqForm, options) {
                    var comun = '#dml_facturas_';
                    if ($(comun + 'fa_fecha').val().length < 1) {
                        validador($('#dtp_dml_facturas_fa_fecha'), "Fecha invalida");
                        return false;
                    } else if ($('#dml_pagos_pa_detalle').val().length < 3) {
                        validador($('#dml_pagos_pa_detalle'), "Logitud insuficiente");
                        return false;
                    }  else if ($(comun + 'fa_valor_total').val().length < 1) {
                        validador($(comun + 'fa_valor_total'), "Agregar un valor");
                        return false;
                    }
                }
                function showResponse(responseText, statusText, xhr, $form) {
                    $("#btnDropzone").text(responseText.id).click();
                }
                /* -------------------------------------------- fin ajax form */
                
                /* ------------------------------------------------- dropzone */
                Dropzone.autoDiscover = false;
                new Dropzone(document.body, {                // Make the whole body a dropzone
                    url                  : "<?php echo url_for('facturas/dropzone') ?>",// Set the url
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
                                var pagos = {
<?php if (!$form->getObject()->isNew()): ?>
                                                id : <?php echo $frmPagos['id']->getValue() ?>,
<?php endif; ?>
                                                pa_beneficiarios_json : $('#dml_pagos_pa_beneficiarios_json').val(),
                                                pa_detalle : $('#dml_pagos_pa_detalle').val(),
                                                pa_iva : $('#dml_pagos_pa_iva').val(),
                                                pa_ice : $('#dml_pagos_pa_ice').val(),
                                                pa_comision : $('#dml_pagos_pa_comision').val(),
                                                pa_valor_parcial : $('#dml_pagos_pa_valor_parcial').val(),
                                                facturas : $("#btnDropzone").text()
                                            };
<?php if (!$form->getObject()->isNew()): ?>
                                $.post('<?php echo url_for('facturas/pagosUpdate') ?>', { dml_pagos : pagos }, function() {
<?php else: ?>
                                $.post('<?php echo url_for('facturas/pagosCreate') ?>', { dml_pagos : pagos }, function() {
<?php endif; ?>
                                    setTimeout(function() {
                                        window.location.href = "<?php echo url_for('facturas/edit?id=') ?>" + $("#btnDropzone").text();
                                    }, 350);
                                });
                            }
                        });
                        clearButton.addEventListener("click", function() { myDropzone.removeAllFiles(); });
                        this.on("sending", function(file, xhr, formData) {
                            formData.append("id", $("#btnDropzone").text()); // enviando parametro por cada archivo
                        });
                        this.on("success", function(file) {
                            if (this.getUploadingFiles().length === 0 
                                && this.getQueuedFiles().length === 0) { // verificando cuando todo los archivos se han subido
                                var pagos = {
<?php if (!$form->getObject()->isNew()): ?>
                                                id : <?php echo $frmPagos['id']->getValue() ?>,
<?php endif; ?>
                                                pa_beneficiarios_json : $('#dml_pagos_pa_beneficiarios_json').val(),
                                                pa_detalle : $('#dml_pagos_pa_detalle').val(),
                                                pa_iva : $('#dml_pagos_pa_iva').val(),
                                                pa_ice : $('#dml_pagos_pa_ice').val(),
                                                pa_comision : $('#dml_pagos_pa_comision').val(),
                                                pa_valor_parcial : $('#dml_pagos_pa_valor_parcial').val(),
                                                facturas : $("#btnDropzone").text()
                                            };
<?php if (!$form->getObject()->isNew()): ?>
                                $.post('<?php echo url_for('facturas/pagosUpdate') ?>', { dml_pagos : pagos }, function() {
<?php else: ?>
                                $.post('<?php echo url_for('facturas/pagosCreate') ?>', { dml_pagos : pagos }, function() {
<?php endif; ?>
                                    setTimeout(function() {
                                        window.location.href = "<?php echo url_for('facturas/edit?id=') ?>" + $("#btnDropzone").text();
                                    }, 350);
                                });
                            }
                        });
                    }
                });
                /* -------------------------------------------- fin dropzone  */
                
                /* --------------------------------------- eliminación lógica */
                $('.modal-body').delegate('tr a', 'click', function() {
                    var param = {   
                                    biId : $(this).attr('bi-id'),
                                    faId : $(this).attr('fa-id')
                                }; console.log(param);
//                    $.post('<//?=url_for('pagos/binLogicalDelete')?>', param, function(data) {
//                        if (data.logical_delete && data.pdfs_left > 0) {
//                            $.post('<//?=url_for('pagos/modalBody')?>', param, function(data) {
//                                $('#modal' + param.paId + ' .modal-body').html(data);
//                            });
//                        } else {
//                            $('#modal' + param.paId).modal('hide');
//                            $('#modal' + param.paId).on('hidden', function() {
//                                location.reload();
//                            });
//                        }
//                    }, 'json');
                });
                /* ----------------------------------- fin eliminación lógica */
            });
        </script>
<?php end_slot() ?>
