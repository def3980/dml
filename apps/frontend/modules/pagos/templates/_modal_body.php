<?php $rnd = 'mmismo'; ?>
<?php //$rnd = rand(11111, 99999); ?>
<p>Lista de todos los respaldos asociados al pago de este consumo, <br />dichas pueden ser <code>facturas, notas de venta o registro de pago</code></p>
<?php echo str_repeat('    ', 11) ?><table class="table table-striped table-bordered binarios" style="width: 80%; margin: 0 auto;">
<?php echo str_repeat('    ', 11) ?>    <tbody><?php foreach (DmlBinariosTable::getBinariosPorIdPago($id)->execute() as $k => $bi): echo PHP_EOL; ?>
<?php echo str_repeat('    ', 11) ?>        <tr>
<?php echo str_repeat('    ', 11) ?>            <td><?php echo link_to(
                                                        '<i class="icon-file"></i> '.
                                                        ("" !== $bi->getDmlPagos()->getPaNumeroFactura()
                                                        ? $bi->getDmlPagos()->getPaNumeroFactura() 
                                                        : $rnd)
                                                        .'_respaldo-'.($k + 1).'.pdf <sup>'
                                                        .number_format(($bi->getBiTamanioBytes() / 1024), 2)
                                                        .' KB</sup>',
                                                        '@pdf?id='
                                                        .$bi->getId()
                                                        .'&doc=FACTURA_'
                                                        .("" !== $bi->getDmlPagos()->getPaNumeroFactura()
                                                        ? $bi->getDmlPagos()->getPaNumeroFactura() 
                                                        : $rnd)
                                                        .'_respaldo-'.($k + 1).'.pdf',
                                                        array('target' => '_blank', 'class' => 'btn btn-small')
                                                    ) ?></td>
<?php echo str_repeat('    ', 11) ?>            <td style="width: 15%"><a bi-id="<?php echo $bi->getId() ?>" pa-id="<?=$id?>" href="javascript:void(0)" class="btn btn-small"><i class="icon-trash"></i></a></td>
<?php echo str_repeat('    ', 11) ?>        </tr><?php endforeach; echo PHP_EOL; ?>
<?php echo str_repeat('    ', 11) ?>    </tbody>
<?php echo str_repeat('    ', 11) ?></table>
