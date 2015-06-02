<?php echo str_repeat('    ', 11) ?><div class="accordion" id="accordion2"><?php foreach ($facturas->getResults() as $kf => $vf): echo PHP_EOL; ?>
<?php echo str_repeat('    ', 11) ?>    <div class="accordion-group" style="width: 96%">
<?php echo str_repeat('    ', 11) ?>        <div class="accordion-heading">
<?php echo str_repeat('    ', 11) ?>            <div class="btn-group pull-left" data-toggle="buttons-checkbox" id="chk<?php echo $vf->getId() ?>" style="padding: 5px 7px 0px 10px;">
<?php echo str_repeat('    ', 11) ?>                <button type="button" class="btn btn-small"><i class="icon-chevron-right"></i></button>
<?php echo str_repeat('    ', 11) ?>            </div>
<?php echo str_repeat('    ', 11) ?>            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse<?=$kf?>">
<?php echo str_repeat('    ', 11) ?>                <?php $fecha = explode(" ", $vf->getFaFecha()); echo trim(reset($fecha)).' :: '.$vf->getFaNumeroFactura().' :: '.$vf->getFaDetalle().PHP_EOL; ?>
<?php echo str_repeat('    ', 11) ?>            </a>
<?php echo str_repeat('    ', 11) ?>        </div>
<?php echo str_repeat('    ', 11) ?>        <div id="collapse<?=$kf?>" class="accordion-body collapse<?php //echo $kf == 0 ? ' in' : '' ?>">
<?php echo str_repeat('    ', 11) ?>            <div class="accordion-inner" style="padding-left: 10px"><?php foreach (DmlBinariosTable::getBinYFactura($vf->getId())->execute(null, 5) as $kb => $vb): echo PHP_EOL; ?>
<?php echo str_repeat('    ', 11) ?>                <div<?php echo $kb != 0 ? ' style="margin-top: 6px"' : '' ?>>
<?php echo str_repeat('    ', 11) ?>                    <?php echo link_to(
                                                            '<i class="icon-file"></i> '.$vb['bi_bi_nombre_original'].' ~ PDF <sup>'
                                                            .number_format(ceil(($vb['bi_bi_tamanio_bytes'] / 1024)), 0)
                                                            .' KB</sup>',
                                                            '@pdf?id='
                                                            .$vb['bi_id']
                                                            .'&doc=FACTURA_'
                                                            .$vb['fa_fa_numero_factura']
                                                            .'_respaldo-'
                                                            .$vb['bi_id']
                                                            .'.pdf',
                                                            array('target' => '_blank', 'class' => 'btn btn-small')
                                                        ) ?>
<?php echo str_repeat('    ', 11) ?>                </div><?php endforeach; echo PHP_EOL; ?>
<?php echo str_repeat('    ', 11) ?>            </div>
<?php echo str_repeat('    ', 11) ?>        </div>
<?php echo str_repeat('    ', 11) ?>    </div><?php endforeach; echo PHP_EOL; ?>
<?php echo str_repeat('    ', 11) ?></div>
<?php if (!isset($first)): ?>
                        <script>
$(function() {
    $('div[id^="chk"]').bind('click', function() {
        if (!$(this).find('button').hasClass('active')) {
            var params = { idFa : $(this).attr('id').replace('chk', '') };
            $.post('<?=url_for('tarjetas/cargarInformacion')?>', params, function(data) {
                var comun = '#dml_facturas_', fa = data.dml_facturas;
                $(comun + 'id').val(fa.id);
                $(comun + 'fa_numero_factura').val(fa.fa_numero_factura);
                $('#dtp_dml_facturas_fa_fecha').datetimepicker('setDate', new Date(fa.fa_fecha));
                $('#dml_facturas_tipos_gastos').val(fa.tipos_gastos);
                $('#dml_facturas_tipos_gastos').selectpicker('refresh');
                $(comun + 'fa_valor_total').autoNumeric('set', fa.fa_valor_total);
                $.each($.parseJSON(fa.fa_beneficiarios_json), function(k, v) {
                    $(comun + 'fa_beneficiarios_json option[value="' + v + '"]').prop('selected', true);
                });
                $(comun + 'fa_beneficiarios_json').trigger('chosen:updated');
                $(comun + 'fa_detalle').text(fa.fa_detalle);
                $('.pdfsLeft').text(data.pdfs_left);
                $('.supAviso').text(<?=sfConfig::get('app_max_files_per_paid')?> - data.pdfs_left);
            }, 'json');
        }
    });
});
</script>
<?php endif; ?>