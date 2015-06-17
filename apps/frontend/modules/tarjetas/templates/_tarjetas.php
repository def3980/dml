<?php if ($tarjetas->count()): foreach ($tarjetas->getResults(5) as $ct): echo PHP_EOL; $time = explode(" ", $ct['fa_fa_fecha']); ?>
                            <tr>
                                <td>
                                    <a href="#" data-toggle="tooltip" data-placement="right" title="<?=end($time)?>"><?=Singleton::getInstance()->dateTimeESN($ct['fa_fa_fecha'], false)?></a>
                                </td>
                                <td><?php echo strlen($ct['fa_fa_numero_factura']) > 0
                                                ? link_to($ct['fa_fa_numero_factura'], 'tarjetas/edit?id='.$ct['ct_id']) 
                                                : link_to("---", 'tarjetas/edit?id='.$ct['ct_id']) ?></td>
                                <td>
<?php if (DmlBinariosTable::getConteoBinNoEliminados($ct['fa_id']) > 0): ?>
                                    <?php echo image_tag('mastercard', array('size' => '23x13')).PHP_EOL ?>
                                    <?php //echo image_tag('diners', array('size' => '28x17')).PHP_EOL ?>
                                    <a href="#modal<?=$ct['fa_id']?>" role="button" data-toggle="modal"><?=$ct['fa_fa_detalle']?></a>
<?php include_partial('modal', array('idFa' => $ct['fa_id'])) ?>
<?php else: ?>
                                    <?=$ct['fa_fa_detalle']?>
<?php endif; ?>
                                </td>
                                <td><?php echo '$ '.number_format($ct['fa_fa_valor_total'], 2, ',', '.') ?></td>
                                <td>
<?php if (DmlPagosConsumosTarjetasTable::getEstadoConsumoPagoOImpago($ct['ct_id']) > 0): ?>
                                    <span class="label label-success">Pagado</span>
<?php else: ?>
                                    <span class="label label-important">Impago</span>
<?php endif; ?>
                                </td>
                            </tr><?php endforeach; ?>
<?php else: echo PHP_EOL; ?>
                            <tr>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr><?php endif; ?>