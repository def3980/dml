<?php if ($movimientos->count()): if ($movimientos->haveToPaginate()): ?>
                        <hr>
                        <div class="pagination pagination-centered">
                            <ul>
                                <li<?php echo 1 == $movimientos->getPage() ? ' class="active"' : '' ?>>
                                    <a<?php echo 1 == $movimientos->getPage() ? ' href="javascript:void(0)"' : ' id="'.$movimientos->getPreviousPage().'" href="javascript:void(0)"' ?>>&laquo;</a>
                                </li><?php foreach ($movimientos->getLinks() as $pag): echo PHP_EOL; ?>
                                <li<?php echo $pag == $movimientos->getPage() ? ' class="active"' : '' ?>>
                                    <a<?php echo $pag == $movimientos->getPage() ? ' href="javascript:void(0)"' : ' id="'.$pag.'" href="javascript:void(0)"' ?>><?php echo$pag?></a>
                                </li><?php endforeach; echo PHP_EOL; ?>
                                <li<?php echo $movimientos->getLastPage() == $movimientos->getPage() ? ' class="active"' : '' ?>>
                                    <a<?php echo $movimientos->getLastPage() == $movimientos->getPage() ? ' href="javascript:void(0)"' : ' id="'.$movimientos->getNextPage().'" href="javascript:void(0)"' ?>>&raquo;</a>
                                </li>
                            </ul>
                        </div>
<?php else: ?>
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
<?php endif; ?>
                        <script>
$(function() {
    $('body').tooltip({
        selector  : '[data-toggle=modal]'
    });
    $('.pagination ul li a').bind('click', function() {
        if (!$(this).parent().hasClass('active')) {
            var params = { pagina : $(this).attr('id'), moCon : $('.txtSrch').val() };
            $.post('<?php echo url_for('movimientos/searchMove') ?>', params, function(data) {
                $('.table tbody').html(data);
            });
            $.post('<?php echo url_for('movimientos/searchPager') ?>', params, function(data) {
                $('#paginador').html(data);
            });
        }
    });
});</script>