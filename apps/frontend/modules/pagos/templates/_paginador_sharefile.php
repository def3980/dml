<?php if ($facturas->count()): if ($facturas->haveToPaginate()): ?>
<?php echo str_repeat('    ', 11) ?><div class="pagination pagination-centered pagination-small" style="margin: 20px 0 0;">
<?php echo str_repeat('    ', 11) ?>    <ul>
<?php echo str_repeat('    ', 11) ?>        <li<?php echo 1 == $facturas->getPage() ? ' class="active"' : '' ?>>
<?php echo str_repeat('    ', 11) ?>            <a<?php echo 1 == $facturas->getPage() ? ' href="javascript:void(0)"' : ' id="'.$facturas->getPreviousPage().'" href="javascript:void(0)"' ?>>&laquo;</a>
<?php echo str_repeat('    ', 11) ?>        </li><?php foreach ($facturas->getLinks() as $pag): echo PHP_EOL; ?>
<?php echo str_repeat('    ', 11) ?>        <li<?php echo $pag == $facturas->getPage() ? ' class="active"' : '' ?>>
<?php echo str_repeat('    ', 11) ?>            <a<?php echo $pag == $facturas->getPage() ? ' href="javascript:void(0)"' : ' id="'.$pag.'" href="javascript:void(0)"' ?>><?php echo$pag?></a>
<?php echo str_repeat('    ', 11) ?>        </li><?php endforeach; echo PHP_EOL; ?>
<?php echo str_repeat('    ', 11) ?>        <li<?php echo $facturas->getLastPage() == $facturas->getPage() ? ' class="active"' : '' ?>>
<?php echo str_repeat('    ', 11) ?>            <a<?php echo $facturas->getLastPage() == $facturas->getPage() ? ' href="javascript:void(0)"' : ' id="'.$facturas->getNextPage().'" href="javascript:void(0)"' ?>>&raquo;</a>
<?php echo str_repeat('    ', 11) ?>        </li>
<?php echo str_repeat('    ', 11) ?>    </ul>
<?php echo str_repeat('    ', 11) ?></div>
<?php else: ?>
<?php echo str_repeat('    ', 11) ?><div class="pagination pagination-centered pagination-small" style="margin: 20px 0 0;">
<?php echo str_repeat('    ', 11) ?>    <ul>
<?php echo str_repeat('    ', 11) ?>        <li class="active"><a href="javascript:void(0)">&laquo;</a></li>
<?php echo str_repeat('    ', 11) ?>        <li class="active"><a href="javascript:void(0)">1</a></li>
<?php echo str_repeat('    ', 11) ?>        <li class="active"><a href="javascript:void(0)">&raquo;</a></li>
<?php echo str_repeat('    ', 11) ?>    </ul>
<?php echo str_repeat('    ', 11) ?></div>
<?php endif; else: echo PHP_EOL; ?>
<?php echo str_repeat('    ', 11) ?><div class="pagination pagination-centered pagination-small" style="margin: 20px 0 0;">
<?php echo str_repeat('    ', 11) ?>    <ul>
<?php echo str_repeat('    ', 11) ?>        <li class="active"><a href="javascript:void(0)">&laquo;</a></li>
<?php echo str_repeat('    ', 11) ?>        <li class="active"><a href="javascript:void(0)">1</a></li>
<?php echo str_repeat('    ', 11) ?>        <li class="active"><a href="javascript:void(0)">&raquo;</a></li>
<?php echo str_repeat('    ', 11) ?>    </ul>
<?php echo str_repeat('    ', 11) ?></div>
<?php endif; if (!isset($first)): ?>
                        <script>
$(function() {
    $('.pagination ul li a').bind('click', function() {
        if (!$(this).parent().hasClass('active')) {
            $.post('<?php echo url_for('pagos/collapseSharefile') ?>', { pagina : $(this).attr('id') }, function(data) {
                $('#accordeon').html(data);
            });
            $.post('<?php echo url_for('pagos/paginadorSharefile') ?>', { pagina : $(this).attr('id') }, function(data) {
                $('#pagina').html(data);
            });
        }
    });
});</script><?php endif; ?>