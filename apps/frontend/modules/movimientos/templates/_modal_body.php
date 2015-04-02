<?php $array = json_decode(html_entity_decode(htmlspecialchars_decode($json), true)) ?>
<?php echo str_repeat('    ', 11) ?><table class="table table-striped table-bordered binarios" style="width: 80%; margin: 0 auto;">
<?php echo str_repeat('    ', 11) ?>    <tbody>
<?php echo str_repeat('    ', 11) ?>        <tr>
<?php echo str_repeat('    ', 11) ?>            <td colspan="2"><code><?=$concepto?></code></td>
<?php echo str_repeat('    ', 11) ?>        </tr><?php foreach ($array as $k => $dt): echo PHP_EOL; ?>
<?php echo str_repeat('    ', 11) ?>        <tr>
<?php echo str_repeat('    ', 11) ?>            <td style="width: 20%; text-align: left;"><code><?php echo ucfirst(str_replace('_', ' ', $k)) ?>:</code></td>
<?php echo str_repeat('    ', 11) ?>            <td><?php
                                                        switch ($k):
                                                            case "fecha": echo Singleton::getInstance()->dateTimeESN($dt, false, true, false); break;
                                                            case "monto": echo "$ ".number_format($dt, 2, ',', '.'); break;
                                                            default: echo $dt; break;
                                                        endswitch;
                                                ?></td>
<?php echo str_repeat('    ', 11) ?>        </tr><?php endforeach; echo PHP_EOL; ?>
<?php echo str_repeat('    ', 11) ?>    </tbody>
<?php echo str_repeat('    ', 11) ?></table>
