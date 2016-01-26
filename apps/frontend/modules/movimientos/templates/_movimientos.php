<?php if ($movimientos->count()): foreach ($movimientos->getResults() as $mo): echo PHP_EOL; ?>
                            <tr>
                                <td><?php echo link_to(Singleton::getInstance()->dateTimeESN($mo->getMoFecha(), false, true, false), 'movimientos/edit?id='.$mo->getId()) ?></td>
                                <td>
                                    <a href="#modal<?php echo $mo->getId() ?>" role="button" data-toggle="modal" title="<?php echo $mo->getMoOficina() ?>"<?php if (!is_null($mo->getMoMiniDetalleJson())) echo ' style="cursor: pointer; color: #F06C00"' ?>><?php echo $mo->getMoConcepto() ?></a>
<?php if (!is_null($mo->getMoMiniDetalleJson())) include_partial('modal', array('id' => $mo->getId(), 'concepto' => $mo->getMoConcepto(), 'json' => $mo->getMoMiniDetalleJson())) ?>
                                </td>
                                <td>
<?php if ($mo->getMoTipo() == 'C'): ?>
                                    <span style="color: #499249"><?php echo $mo->getMoTipo() ?></span>
<?php elseif ($mo->getMoTipo() == 'D'): ?>
                                    <span style="color: #d33"><?php echo $mo->getMoTipo() ?></span>
<?php endif; ?>
                                </td>
                                <td><span><?php echo str_repeat('0', (sfConfig::get('app_numero_documento') * 1) - strlen($mo->getMoDocumento())) ?></span><?php echo $mo->getMoDocumento() ?></td>
                                <td>
<?php if ($mo->getMoTipo() == 'C'): ?>
                                    <span style="color: #499249">+ $ <?php echo number_format($mo->getMoMonto(), 2, ',', '.') ?></span>
<?php elseif ($mo->getMoTipo() == 'D'): ?>
                                    <span style="color: #d33">- $ <?php echo number_format($mo->getMoMonto(), 2, ',', '.') ?></span>
<?php endif; ?>
                                </td>
                                <td><span style="color: <?php echo $mo->getMoSaldo() < 50 ? '#d33' : '#0088cc' ?>"><?php echo '$ '.number_format($mo->getMoSaldo(), 2, ',', '.') ?></span></td>
                            </tr><?php endforeach; ?>
<?php else: echo PHP_EOL; ?>
                            <tr>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr><?php endif; echo PHP_EOL; ?>