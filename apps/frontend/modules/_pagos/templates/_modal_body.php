<p>Lista de todos los respaldos asociados al pago de este consumo, <br />dichas pueden ser <code>facturas, notas de venta o registro de pago</code></p>
<?php echo str_repeat('    ', 11) ?><table class="table table-striped table-bordered binarios" style="width: 80%; margin: 0 auto;">
<?php echo str_repeat('    ', 11) ?>    <tbody><?php foreach (DmlBinariosCompartidosTable::getBinariosPorIdPago($id)->execute(null, 5) as $k => $bc): echo PHP_EOL; ?>
<?php echo str_repeat('    ', 11) ?>        <tr>
<?php echo str_repeat('    ', 11) ?>            <td><?php echo link_to(
                                                        '<i class="icon-file"></i> '
                                                        .$bc['pa_pa_numero_factura']
                                                        .'_respaldo-'.($k + 1).'.pdf <sup>'
                                                        .number_format(($bc['bi_bi_tamanio_bytes'] / 1024), 2)
                                                        .' KB</sup>',
                                                        '@pdf?id='
                                                        .$bc['bi_id']
                                                        .'&doc=FACTURA_'
                                                        .$bc['pa_pa_numero_factura']
                                                        .'_respaldo-'.$bc['bi_id'].'.pdf',
                                                        array('target' => '_blank', 'class' => 'btn btn-small')
                                                    ) ?></td>
<?php echo str_repeat('    ', 11) ?>            <td style="width: 15%"><a bi-id="<?=$bc['bi_id']?>" pa-id="<?=$id?>" href="javascript:void(0)" class="btn btn-small"><i class="icon-trash"></i></a></td>
<?php echo str_repeat('    ', 11) ?>        </tr><?php endforeach; echo PHP_EOL; ?>
<?php echo str_repeat('    ', 11) ?>    </tbody>
<?php echo str_repeat('    ', 11) ?></table>
