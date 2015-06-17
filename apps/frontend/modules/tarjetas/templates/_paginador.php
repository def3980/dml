<?php if ($tarjetas->count()): if ($tarjetas->haveToPaginate()): ?>
                        <hr>
                        <div class="pagination pagination-centered">
                            <ul>
                                <li<?php echo 1 == $tarjetas->getPage() ? ' class="active"' : '' ?>>
                                    <a<?php echo 1 == $tarjetas->getPage() ? ' href="javascript:void(0)"' : ' id="'.$tarjetas->getPreviousPage().'" href="javascript:void(0)"' ?>>&laquo;</a>
                                </li><?php foreach ($tarjetas->getLinks() as $pag): echo PHP_EOL; ?>
                                <li<?php echo $pag == $tarjetas->getPage() ? ' class="active"' : '' ?>>
                                    <a<?php echo $pag == $tarjetas->getPage() ? ' href="javascript:void(0)"' : ' id="'.$pag.'" href="javascript:void(0)"' ?>><?php echo$pag?></a>
                                </li><?php endforeach; echo PHP_EOL; ?>
                                <li<?php echo $tarjetas->getLastPage() == $tarjetas->getPage() ? ' class="active"' : '' ?>>
                                    <a<?php echo $tarjetas->getLastPage() == $tarjetas->getPage() ? ' href="javascript:void(0)"' : ' id="'.$tarjetas->getNextPage().'" href="javascript:void(0)"' ?>>&raquo;</a>
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
            var params = { pagina : $(this).attr('id') };
            $.post('<?=url_for('tarjetas/cardsList')?>', params, function(data) {
                $('.table tbody').html(data);
            });
            $.post('<?=url_for('tarjetas/cardsPager')?>', params, function(data) {
                $('.paginador').html(data);
            });
        }
    });
});</script><?php endif; ?>