<form id="frm_pa" action="<?php echo url_for('pagos/'.
    ($form->getObject()->isNew() ? 'create' : 'update')
        .(!$form->getObject()->isNew() ? '?pa_id='
            .$form->getObject()->getPaId() : '')) ?>" 
                method="post" <?php $form->isMultipart() 
                    and print 'enctype="multipart/form-data" ' ?> autocomplete="off">
<?php if (!$form->getObject()->isNew()): echo "\n"; ?><input type="hidden" name="sf_method" value="put" /><?php endif; ?>
    <h3 class="header smaller lighter blue" style="margin-top: 0">
        <i class="purple icon-magic bigger-110"></i>
        Formulario de <span>ingreso</span>
    </h3>
    <div class="row" style="margin: 0 auto">
        <div class="col-xs-12 col-sm-3">
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
        <div class="col-xs-12 col-sm-3">
            <div class="form-group">
                <?php echo $form['pa_fecha']->renderLabel() ?>
                <div class="input-group">
                    <input type="text" name="pa_fecha" class="form-control date-picker" data-date-format="yyyy-mm-dd" readonly="1" id="pa_fecha">
                    <span class="input-group-addon">
                        <i class="icon-calendar"></i>
                    </span>
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
                    <input type="text" name="pa_comision" class="form-control" style="text-align: right" data-a-dec="," data-a-sep="." data-v-max="999999.99" data-v-min="0.00" id="pa_comision">
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-3">
            <div class="form-group">
                <?php echo $form['pa_iva']->renderLabel() ?>
                <div class="input-group" id="iva">
                    <span class="input-group-addon">
                        <i class="icon-usd"></i>
                    </span>
                    <input type="text" name="pa_iva" class="form-control" readonly="1" style="text-align: right" data-a-dec="," data-a-sep="." data-v-max="999999.99" data-v-min="0.00" id="pa_iva">
                </div>
            </div>
        </div>
    </div><!-- fin fila 1 -->
    <div class="row" style="margin: 0 auto">
        <div class="col-xs-12 col-sm-3">
            <div class="form-group">
                <?php echo $form['tipo_consumo_tc_id']->renderLabel() ?>
                <br />
                <?php echo $form['tipo_consumo_tc_id']->render(array('class' => 'width-110 chosen-select', 'data-placeholder' => 'Escoger')) ?>
            </div>
        </div>
        <div class="col-xs-12 col-sm-3">
            <div class="form-group">
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
        <div class="col-xs-12 col-sm-3">
            <div class="form-group">
                <?php echo $form['pa_ice']->renderLabel() ?>
                <div class="input-group" id="ice">
                    <span class="input-group-addon">
                        <i class="icon-usd"></i>
                    </span>
                    <input type="text" name="pa_ice" class="form-control" readonly="1" style="text-align: right" data-a-dec="," data-a-sep="." data-v-max="999999.99" data-v-min="0.00" id="pa_ice">
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
                    <input type="text" name="pa_valor_total" class="form-control" style="text-align: right" data-a-dec="," data-a-sep="." data-v-max="999999.99" data-v-min="0.00" id="pa_valor_total">
                </div>
            </div>
        </div>
    </div><!-- fin fila 2 -->
    <div class="row" style="margin: 0 auto">
        <div class="col-xs-12 col-sm-6">
            <div class="form-group">
                <label for="file">Subir respaldos :</label>
                <div id="dropzone">
                    <div id="clickable" class="dropzone" style="width: 100%; min-height: 150px; padding: 0;">
                        <div id="previews" class="dropzone-previews" style="text-align: center"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6">
            <div class="form-group">
                <?php echo $form['pa_detalle']->renderLabel() ?>
                <div class="input-group">
                    <?php echo $form['pa_detalle']->render(array('class' => 'autosize-transition form-control', 'style' => 'overflow: hidden; word-wrap: break-word; resize: vertical; height: 92px;', 'cols' => '90')) ?>
                </div>
            </div>
            <button class="btn btn-primary">
                <i class="icon-hdd align-top bigger-110"></i>
                Guardar
            </button>
        </div>
    </div><!-- fin fila 3 -->
    <div class="header smaller lighter blue" style="margin-top: 6px"></div>
    <?php echo $form->renderGlobalErrors() ?><?php echo $form->renderHiddenFields(false) ?>
</form>
<button id="submit-all" style="display: none">Countdown To Extinction</button>
<script type="text/javascript">
    jQuery(function($) {
        /* ------------------------------- PARA EL CASO DEL NUMERO DE FACTURA */
        $('#pagos_pa_numero_factura').mask('999-999-999999999');
        /* ------------------------------------------------------------------ */
        
        /* -------------------- PARA EL CASO DE LOS VALORES DE FECHA Y TIEMPO */
        $('.date-picker')
            .val(<?php echo (!$form->getObject()->isNew()) ? '"'.MyHelpers::opcion()->verSoloFecha($form['pa_fecha']->getValue()).'"' : 'nowDate()' ?>)
                .datepicker({ autoclose:true, language:'es'/*, startDate:'-15d', endDate:'-1d'*/ })
                    .next()
                        .on(ace.click_event, function(){ $(this).prev().focus(); });
        $('#timepicker1').timepicker({
            minuteStep  : 1,
            showSeconds : true,
            showMeridian: false<?php echo (!$form->getObject()->isNew()) ? ",\n\t    defaultTime : '".MyHelpers::opcion()->verHoraMinSeg($form['pa_fecha']->getValue())."'\n" : "\n" ?>
        }).next().on(ace.click_event, function(){ $(this).prev().focus(); });
        $('#pagos_pa_fecha').val($('#pa_fecha').val() + ' ' +$('#timepicker1').val());
        $('#pa_fecha,#timepicker1').change(function(){
            $('#pagos_pa_fecha').val($('#pa_fecha').val() + ' ' +$('#timepicker1').val());
        });
//        $('#cancelar').bind('click', function(e){ e.preventDefault(); });
        /* ------------------------------------------------------------------ */

        /* ----------------------- PARA EL CASO DEL SELECT DE TIPO DE CONSUMO */
        $(".chosen-select").chosen();
        $('#pagos_tipo_consumo_tc_id').next('div:first').css({'width':'100%'});
        
        // modificando un poco el select - chosen single
        $('a.chosen-single').css({
            'height'        : '34px',
            'line-height'   : '32px'
        });
        /* ------------------------------------------------------------------ */

        /* ------------------------- PARA EL CASO DEL TEXTAREA AUTO AJUSTABLE */
        $('textarea[class*=autosize]').autosize({ append: "\n" });
        /* ------------------------------------------------------------------ */
        
        /* --------------------------- PARA EL CASO DE LOS FORMATOS DE MODENA */
         $('#pa_valor_total, '
            +'#pa_comision, '
                +'#pa_ice, '
                    +'#pa_iva').autoNumeric('init',{ aPad : false });
        $('#iva span').css('cursor', 'pointer').bind('click',function(){
            $('#iva input[type="text"]').val('');
        });
        $('#iva input[type="text"]').css('cursor', 'pointer').bind('click',function(){
            if ($('#pagos_pa_valor_total').val().length) {        
                var vi = reemplazarComaXPunto(reemplazarPunto($('#pa_valor_total').val()));
                $('#pa_iva').val(reemplazarPuntoXComa(round(vi - (vi / 1.12), 2)));
                $('#pagos_pa_iva').val(round(vi - (vi / 1.12), 2));
            }
        });
        $('#ice span').css('cursor', 'pointer').bind('click',function(){
            $('#ice input[type="text"]').val('');
        });
        $('#ice input[type="text"]').css('cursor', 'pointer').bind('click',function(){
            if ($('#pagos_pa_valor_total').val().length) {
                var vi = reemplazarComaXPunto(reemplazarPunto($('#pa_valor_total').val()));
                $('#pa_ice').val(reemplazarPuntoXComa(round(vi - (vi / 1.15), 2)));
                $('#pagos_pa_ice').val(round(vi - (vi / 1.15), 2));
            }
        });
        <?php echo (!$form->getObject()->isNew()) ? $form['pa_iva']->getValue() != NULL ? "\n\t$('#pa_iva').autoNumeric('set',".$form['pa_iva']->getValue().");\n" : "\n" : "\n"; 
        echo (!$form->getObject()->isNew()) ? $form['pa_ice']->getValue() != NULL ? "\n\t$('#pa_ice').autoNumeric('set',".$form['pa_ice']->getValue().");\n" : "\n" : "\n"; 
        echo (!$form->getObject()->isNew()) ? $form['pa_comision']->getValue() != NULL ? "\n\t$('#pa_comision').autoNumeric('set',".$form['pa_comision']->getValue().");\n" : "\n" : "\n"; 
        echo (!$form->getObject()->isNew()) ? $form['pa_valor_total']->getValue() != NULL ? "\n\t$('#pa_valor_total').autoNumeric('set',".$form['pa_valor_total']->getValue().");\n" : "\n" : "\n"; ?>
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
            $('#pagos_pa_valor_total').val(reemplazarComaXPunto(reemplazarPunto($(this).val())));
        });
        /* ------------------------------------------------------------------ */
        
        Dropzone.autoDiscover = false;
        new Dropzone(document.body, {               // Make the whole body a dropzone
            url                     : "<?php echo url_for('pagos/dropzoneSavePDF') ?>",// Set the url
            previewsContainer       : "#previews",      // Define the container to display the previews
            clickable               : "#clickable",     // Define the element that should be used as click trigger to select files.
            autoProcessQueue        : false,
            addRemoveLinks          : true,
            maxFilesize             : 5,
            maxFiles                : 5,
            parallelUploads         : 5,
            dictRemoveFile          : 'Quitar',
            dictCancelUpload        : 'Cancelar',
            dictInvalidFileType     : 'Tipo de archivo no permitido',
            dictFileTooBig          : 'Archivo muy grande ({{filesize}} MB). Máx. permitido: {{maxFilesize}} MB.',
            dictMaxFilesExceeded    : "Sólo puedes máx {{maxFiles}} archivos por ingreso.",
            acceptedFiles           : '.pdf',
            init: function() {
                var submitButton    = document.querySelector("#submit-all")
                myDropzone          = this; // closure

                submitButton.addEventListener("click", function() {
                    myDropzone.processQueue(); // Tell Dropzone to process all queued files.
                });
                this.on("sending", function(file, xhr, formData) {
                    formData.append("id", $("#submit-all").text()); // enviando parametro por cada archivo
                });
                this.on("success", function(file) {
                    if (this.getUploadingFiles().length === 0 
                        && this.getQueuedFiles().length === 0){ // verificando cuando todo los archivos se han subido
                        setTimeout(function(){ window.location.reload(); }, 350);
                    }
                });
            }
        });

        $('#frm_pa').ajaxForm({
            dataType    : 'json',
            beforeSubmit: validate,
            success     : showResponse
        });
        function validate(formData, jqForm, options) {
            if ($('#pa_valor_total').val().length < 1) {
                validador($('#pa_valor_total'),"Indique un valor",$('.msj-pa_valor_total'));
                return false;
            } else if ($('#pagos_pa_detalle').val().length < 3) {
                validador($('#pagos_pa_detalle'),"Logitud insuficiente",$('.msj-pa_detalle'));
                return false;
            }
        }
        function showResponse(responseText, statusText, xhr, $form) {
            $("#submit-all").text(responseText.pa_id);
            $("#submit-all").click();
            if (!$('#previews').is(':parent')) { window.location.reload(); }
            var_dump(responseText);
        }
    });
</script>