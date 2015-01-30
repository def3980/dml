<?php slot('porcion_css') ?>
        <style type="text/css">
            .table thead th,
            .table tbody td:first-child {
                text-align: center;
            }
            .table thead th:nth-child(1) {
                width: 15%;
            }
            .table thead th:nth-child(2) {
                width: 20%;
            }
            .table thead th:nth-child(3) {
                width: 50%;
            }
            .table thead th:nth-child(4) {
                width: 15%;
            }
            .table tbody td:nth-child(4) {
                text-align: right;
                padding-right: 1.5%;
                color: #d33;
            }
            .alert p {
                margin: 0;
            }
            .alert h4 {
                margin-bottom: 5px;
            }
            .opc {
                display: block;
                text-decoration: none;
                background-color: #eeeeee;
                border-color: #eeeeee #eeeeee #dddddd;
                color: #0088cc;
                padding-top: 8px;
                padding-bottom: 8px;
                margin-top: 2px;
                margin-bottom: 2px;
                padding-right: 12px;
                padding-left: 12px;
                margin-right: 2px;
                line-height: 14px;
                -webkit-border-radius: 5px;
                   -moz-border-radius: 5px;
                        border-radius: 5px;
            }
        </style>
<?php end_slot() ?>
<div class="container">
            <div class="row">
                <div class="span12">
                    <div class="row">
                        <div class="span6">
                            <h2><?php echo link_to('Pagos', 'pagos/index') ?></h2>
                        </div>
                        <div class="span6">
                            <ul class="nav nav-pills pull-right">
                                <li><span class="opc">Lista de registros</span></li>
                            </ul>
                        </div>
                    </div>
                    <hr style="margin: 0 0 20px">
                    <table class="table table-bordered table-striped table-hover responsive-utilities">
                        <thead>
                            <tr>
                                <th>Fecha<small>hora</small></th>
                                <th># factura<small>edicion</small></th>
                                <th>Detalle<small>pdf's</small></th>
                                <th>Valor total<small>&nbsp;</small></th>
                            </tr>
                        </thead>
                        <tbody><?php if ($pagos->count()): foreach ($res = $pagos->getResults() as $pa): echo PHP_EOL; $time = explode(" ", $pa->getPaFecha()); ?>
                            <tr>
                                <td>
                                    <a href="#" title="<?php echo end($time) ?>"><?php echo Singleton::getInstance()->dateTimeESN($pa->getPaFecha(), false) ?></a>
                                </td>
                                <td><?php echo strlen($pa->getPaNumeroFactura()) > 0
                                                ? link_to($pa->getPaNumeroFactura(), 'pagos/edit?id='.$pa->getId()) 
                                                : link_to("---", 'pagos/edit?id='.$pa->getId()) ?></td>
                                <td>
<?php
    $bi_count = DmlBinariosTable::getBinariosPorIdPago($pa->getId())
                ->execute()
                ->count();
    if ($bi_count > 0) {
?>
                                    <a href="#modal<?php echo $pa->getId() ?>" role="button" data-toggle="modal"><?php echo $pa->getPaDetalle() ?></a>
                                    <?php include_partial('modal', array('id' => $pa->getId())) ?>
<?php } else { ?>
                                    <?php echo $pa->getPaDetalle().PHP_EOL ?>
<?php } ?>
                                </td>
                                <td><?php echo '$ '.number_format($pa->getPaValorTotal(), 2, ',', '.') ?></td>
                            </tr><?php endforeach; ?>
<?php else: echo PHP_EOL; ?>
                            <tr>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr><?php endif; echo PHP_EOL; ?>
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="span6">&nbsp;</div>
                        <div class="span6" style="text-align: right">
                            <?php echo link_to('Nuevo', 'pagos/new', array('class' => 'btn btn-link')).PHP_EOL ?>
                        </div>
                    </div>
<?php if ($pagos->count()): if ($pagos->haveToPaginate()): ?>
                    <hr>
                    <div class="pagination pagination-centered">
                        <ul>
                            <li<?php echo 1 == $pagos->getPage() ? ' class="active"' : '' ?>>
                                <a<?php echo 1 == $pagos->getPage() ? ' href="javascript:void(0)"' : ' href="'.url_for('pagos/index?pagina=1').'"' ?>>&laquo;</a>
                            </li><?php foreach ($pagos->getLinks() as $pag): echo PHP_EOL; ?>
                            <li<?php echo $pag == $pagos->getPage() ? ' class="active"' : '' ?>>
                                <a<?php echo $pag == $pagos->getPage() ? ' href="javascript:void(0)"' : ' href="'.url_for('pagos/index?pagina='.$pag).'"' ?>><?php echo$pag?></a>
                            </li><?php endforeach; echo PHP_EOL; ?>
                            <li<?php echo $pagos->getLastPage() == $pagos->getPage() ? ' class="active"' : '' ?>>
                                <a<?php echo $pagos->getLastPage() == $pagos->getPage() ? ' href="javascript:void(0)"' : ' href="'.url_for('pagos/index?pagina='.$pagos->getNextPage()).'"' ?>>&raquo;</a>
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
                </div>
            </div>
        </div><!-- /container -->
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
<?php include_partial('footer') ?>
<?php slot('porcion_js') ?>
        <script>
            $(function() {
                $('.table tbody td:nth-child(1) a').tooltip({
                    'placement' : 'right'
                });
                $('.modal-body').delegate('tr a', 'click', function() {
                    var param = {   
                                    biId : $(this).attr('bi-id'),
                                    paId : $(this).attr('pa-id')
                                };
                    $.post('<?=url_for('pagos/binLogicalDelete')?>', param, function(data) {
                        if (data.logical_delete && data.pdfs_left > 0) {
                            $.post('<?=url_for('pagos/modalBody')?>', param, function(data) {
                                $('#modal' + param.paId + ' .modal-body').html(data);
                            });
                        } else {
                            $('#modal' + param.paId).modal('hide');
                            $('#modal' + param.paId).on('hidden', function() {
                                location.reload();
                            });
                        }
                    }, 'json');
                });
            });
        </script>
<?php end_slot() ?>