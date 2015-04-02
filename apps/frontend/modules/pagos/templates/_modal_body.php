<p>Lista de todos los respaldos asociados al pago de este consumo, <br />dichas pueden ser <code>facturas, notas de venta o registro de pago</code></p>
<?php echo str_repeat('    ', 11) ?><table class="table table-striped table-bordered binarios" style="width: 80%; margin: 0 auto;">
<?php echo str_repeat('    ', 11) ?>    <tbody><?php foreach (DmlBinariosTable::getBinYFactura($idFa)->execute(null, 5) as $k => $bi): echo PHP_EOL; ?>
<?php echo str_repeat('    ', 11) ?>        <tr>
<?php echo str_repeat('    ', 11) ?>            <td><?php echo link_to(
                                                        '<i class="icon-file"></i> '
                                                        .$bi['fa_fa_numero_factura']
                                                        .'_respaldo-'.($k + 1).'.pdf <sup>'
                                                        .ceil($bi['bi_bi_tamanio_bytes'] / 1024)
                                                        .' KB</sup>',
                                                        '@pdf?id='
                                                        .$bi['bi_id']
                                                        .'&doc=FACTURA_'
                                                        .$bi['fa_fa_numero_factura']
                                                        .'_respaldo-'.($k + 1).'.pdf',
                                                        array('target' => '_blank', 'class' => 'btn btn-small')
                                                    ) ?></td>
<?php echo str_repeat('    ', 11) ?>            <td style="width: 15%"><a href="javascript:void(0)" class="btn btn-small disabled"><i class="icon-trash"></i></a></td>
<?php echo str_repeat('    ', 11) ?>        </tr><?php endforeach; echo PHP_EOL; ?>
<?php echo str_repeat('    ', 11) ?>    </tbody>
<?php echo str_repeat('    ', 11) ?></table>
