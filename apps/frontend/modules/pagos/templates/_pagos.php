<?php if ($pagos->count()): foreach ($pagos->getResults(5) as $pa): echo PHP_EOL; $time = explode(" ", $pa['fa_fa_fecha']); ?>
                            <tr>
                                <td>
                                    <a href="#" data-toggle="tooltip" data-placement="right" title="<?=end($time)?>"><?=Singleton::getInstance()->dateTimeESN($pa['fa_fa_fecha'], false)?></a>
                                </td>
                                <td><?php echo strlen($pa['fa_fa_numero_factura']) > 0
                                                ? link_to($pa['fa_fa_numero_factura'], 'pagos/edit?id='.$pa['pa_id']) 
                                                : link_to("---", 'pagos/edit?id='.$pa['pa_id']) ?></td>
                                <td>
<?php if (DmlBinariosTable::getConteoBinNoEliminados($pa['fa_id']) > 0): ?>
                                    <a href="#modal<?=$pa['fa_id']?>" role="button" data-toggle="modal"><?=$pa['fa_fa_detalle']?></a>
<?php include_partial('modal', array('idFa' => $pa['fa_id'])) ?>
<?php else: ?>
                                    <?=$pa['fa_fa_detalle']?>
<?php endif; ?>
                                </td>
                                <td><?php echo '$ '.number_format($pa['pa_pa_valor_parcial'], 2, ',', '.') ?></td>
                            </tr><?php endforeach; ?>
<?php else: echo PHP_EOL; ?>
                            <tr>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr><?php endif; ?>