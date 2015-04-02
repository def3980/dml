<?php if ($pagos->count()): if ($pagos->haveToPaginate()): ?>
                        <hr>
                        <div class="pagination pagination-centered">
                            <ul>
                                <li<?php echo 1 == $pagos->getPage() ? ' class="active"' : '' ?>>
                                    <a<?php echo 1 == $pagos->getPage() ? ' href="javascript:void(0)"' : ' id="'.$pagos->getPreviousPage().'" href="javascript:void(0)"' ?>>&laquo;</a>
                                </li><?php foreach ($pagos->getLinks() as $pag): echo PHP_EOL; ?>
                                <li<?php echo $pag == $pagos->getPage() ? ' class="active"' : '' ?>>
                                    <a<?php echo $pag == $pagos->getPage() ? ' href="javascript:void(0)"' : ' id="'.$pag.'" href="javascript:void(0)"' ?>><?php echo$pag?></a>
                                </li><?php endforeach; echo PHP_EOL; ?>
                                <li<?php echo $pagos->getLastPage() == $pagos->getPage() ? ' class="active"' : '' ?>>
                                    <a<?php echo $pagos->getLastPage() == $pagos->getPage() ? ' href="javascript:void(0)"' : ' id="'.$pagos->getNextPage().'" href="javascript:void(0)"' ?>>&raquo;</a>
                                </li>
                            </ul>
                        </div>
<?php else: echo PHP_EOL; ?>
                        <hr>
                        <div class="pagination pagination-centered">
                            <ul>
                                <li class="active"><a href="javascript:void(0)">&laquo;</a></li>
                                <li class="active"><a href="javascript:void(0)">1</a></li>
                                <li class="active"><a href="javascript:void(0)">&raquo;</a></li>
                            </ul>
                        </div>
<?php endif; else: echo PHP_EOL; ?>
                        <hr>
                        <div class="pagination pagination-centered">
                            <ul>
                                <li class="active"><a href="javascript:void(0)">&laquo;</a></li>
                                <li class="active"><a href="javascript:void(0)">1</a></li>
                                <li class="active"><a href="javascript:void(0)">&raquo;</a></li>
                            </ul>
                        </div>
<?php endif; if (!isset($first)): ?>
                        <script>
$(function() {
    $('.pagination ul li a').bind('click', function() {
        if (!$(this).parent().hasClass('active')) {
            var params = { pagina : $(this).attr('id'), faDet : $(this).prev().val() };
            $.post('<?php echo url_for('pagos/searchPaid') ?>', params, function(data) {
                $('.table tbody').html(data);
            });
            $.post('<?php echo url_for('pagos/searchPager') ?>', params, function(data) {
                $('.paginador').html(data);
            });
        }
    });
});</script><?php endif; ?>