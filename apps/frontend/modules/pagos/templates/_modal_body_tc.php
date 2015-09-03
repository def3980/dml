<?php if ($consumos->count()): ?>
                            <table class="table table-bordered table-condensed table-striped table-hover responsive-utilities tblTc">
                                <thead>
                                    <tr>
                                        <th><input type="checkbox" class="todos"></th>
                                        <th>Detalle<small>consumo</small></th>
                                        <th>Valor<small>$ 0,01</small></th>
                                    </tr>
                                </thead>
                                <tbody><?php echo PHP_EOL; foreach ($consumos as $k => $v): ?>
                                    <tr>
                                        <td><input type="checkbox" id="c<?=$k?>"></td>
                                        <td><div class="expander"><?php echo $v['fa_fa_detalle'] ?></td>
                                        <td><?php echo '$ '.number_format($v['fa_fa_valor_total'], 2, ',', '.') ?></td>
                                    </tr><?php endforeach; echo PHP_EOL; ?>
                                </tbody>
                            </table>
<?php else: ?>
                            <code>No existen consumos ni pagos pendientes registrados a esta tarjeta</code>
<?php endif; ?>
                        <script>
$(function() {
    /* ----------------------------------------- Expander options */
    $('div.expander').expander({
        slicePoint: 35,
        widow: 2,
        expandSpeed: 0,
        wordCountText: ' ({{count}} words)',
        expandText: ' [+]',
        userCollapseText: ' [-]'
    });
    /* ------------------------------------- Fin Expander options */
});
</script>