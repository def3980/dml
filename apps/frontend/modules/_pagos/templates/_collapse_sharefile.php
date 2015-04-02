
<?php echo str_repeat('    ', 11) ?><div class="accordion" id="accordion2"><?php foreach ($pagos->getResults() as $kp => $vp): echo PHP_EOL; ?>
<?php echo str_repeat('    ', 11) ?>    <div class="accordion-group" style="width: 95%">
<?php echo str_repeat('    ', 11) ?>        <div class="accordion-heading">
<?php echo str_repeat('    ', 11) ?>            <div class="btn-group pull-left" data-toggle="buttons-checkbox" id="chk<?php echo $vp->getId() ?>" style="padding: 5px 7px 0px 10px;">
<?php echo str_repeat('    ', 11) ?>                <button type="button" class="btn btn-small"><i class="icon-chevron-right"></i></button>
<?php echo str_repeat('    ', 11) ?>            </div>
<?php echo str_repeat('    ', 11) ?>            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse<?=$kp?>">
<?php echo str_repeat('    ', 11) ?>                <?php $fecha = explode(" ", $vp->getPaFecha()); echo trim(reset($fecha)).' :: '.$vp->getPaDetalle(); ?>
<?php echo str_repeat('    ', 11) ?>            </a>
<?php echo str_repeat('    ', 11) ?>        </div>
<?php echo str_repeat('    ', 11) ?>        <div id="collapse<?=$kp?>" class="accordion-body collapse<?php //echo $kp == 0 ? ' in' : '' ?>">
<?php echo str_repeat('    ', 11) ?>            <div class="accordion-inner"><?php foreach (DmlBinariosCompartidosTable::getBinariosPorIdPago($vp->getId())->execute(null, 5) as $kb => $vb): echo PHP_EOL; ?>
<?php echo str_repeat('    ', 11) ?>                <div<?php echo $kb != 0 ? ' style="margin-top: 6px"' : '' ?>>
<?php echo str_repeat('    ', 11) ?>                    <?php echo link_to(
                                                        '<i class="icon-file"></i> '.$vb['bi_bi_nombre_original'].' ~ PDF <sup>'
                                                        .number_format(ceil(($vb['bi_bi_tamanio_bytes'] / 1024)), 0)
                                                        .' KB</sup>',
                                                        '@pdf?id='
                                                            .$vb['bi_id']
                                                            .'&doc=FACTURA_'
                                                            .$vb['pa_pa_numero_factura']
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
<!--<script>
$(function() {
    $('input[id^="chk_"]').bind('click', function() {
        if (!$(this).find('i').hasClass('icon-chevron-up'))
            $(this).text('<i class="icon-chevron-right"></i>');
    });
});</script>-->
<?php /*echo str_repeat('    ', 11) ?><table class="table table-condensed table-striped table-bordered" style="width: 100%; margin: 0 auto;">
<?php echo str_repeat('    ', 11) ?>    <tbody><?php foreach ($pagos as $kp => $vp): echo PHP_EOL; ?>
<?php echo str_repeat('    ', 11) ?>        <tr>
<?php echo str_repeat('    ', 11) ?>            <td style="width: 60%; text-align: center; vertical-align: middle;"><?php echo $vp->getPaDetalle() ?></td>
<?php echo str_repeat('    ', 11) ?>            <td style="vertical-align: middle; text-align: center"><?php foreach (DmlBinariosCompartidosTable::getBinariosPorIdPago($vp->getId())->execute(null, 5) as $kb => $vb): echo PHP_EOL; ?>
<?php echo str_repeat('    ', 11) ?>                <?php echo link_to(
                                                                '<i class="icon-file"></i> Respaldo-'.$vb['bi_id'],
                                                                '@pdf?id='
                                                                    .$vb['bi_id']
                                                                    .'&doc=FACTURA_'
                                                                    .$vb['pa_pa_numero_factura']
                                                                    .'_respaldo-'
                                                                    .$vb['bi_id']
                                                                    .'.pdf',
                                                                array('target' => '_blank', 'class' => 'btn btn-link')
                                                    ) ?><br /><?php endforeach; echo PHP_EOL; ?>
<?php echo str_repeat('    ', 11) ?>            </td>
<?php echo str_repeat('    ', 11) ?>        </tr><?php endforeach; echo PHP_EOL; ?>
<?php echo str_repeat('    ', 11) ?>    </tbody>
<?php echo str_repeat('    ', 11) ?></table><?php */ ?>
