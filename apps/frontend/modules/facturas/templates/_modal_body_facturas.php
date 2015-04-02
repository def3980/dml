<p>Lista de todos los respaldos asociados al pago de este consumo, <br />dichas pueden ser <code>facturas, notas de venta o registro de pago</code></p>
<?php echo str_repeat('    ', 7) ?><table class="table table-striped table-bordered binarios" style="width: 80%; margin: 0 auto;">
<?php echo str_repeat('    ', 7) ?>    <tbody><?php foreach (DmlBinariosTable::getBinYFactura($id)->execute(null, 5) as $k => $v): echo PHP_EOL; ?>
<?php echo str_repeat('    ', 7) ?>        <tr>
<?php echo str_repeat('    ', 7) ?>            <td style="text-align: center"><?php echo link_to(
                                                        '<i class="icon-file"></i> '
                                                        .$v['fa_fa_numero_factura']
                                                        .'_respaldo-'.$v['bi_id'].'.pdf <sup>'
                                                        .number_format(($v['bi_bi_tamanio_bytes'] / 1024), 2)
                                                        .' KB</sup>',
                                                        '@pdf?id='
                                                        .$v['bi_id']
                                                        .'&doc=FACTURA_'
                                                        .$v['fa_fa_numero_factura']
                                                        .'_respaldo-'.$v['bi_id'].'.pdf',
                                                        array('target' => '_blank', 'class' => 'btn btn-small')
                                                    ) ?></td>
<?php echo str_repeat('    ', 7) ?>            <td style="width: 15%; text-align: center;"><a bi-id="<?=$v['bi_id']?>" fa-id="<?=$id?>" href="javascript:void(0)" class="btn btn-small"><i class="icon-trash"></i></a></td>
<?php echo str_repeat('    ', 7) ?>        </tr><?php endforeach; echo PHP_EOL; ?>
<?php echo str_repeat('    ', 7) ?>    </tbody>
<?php echo str_repeat('    ', 7) ?></table>
