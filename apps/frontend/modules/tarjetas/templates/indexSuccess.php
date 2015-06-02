<?php slot('titulo', 'Pagos Tarjetas Credito &middot; dml') ?>
<?php slot('menu_bar') ?>
<?php include_partial('global/menu_bar', array('barra_activa' => 'tarjetas')) ?>
<?php end_slot() ?>
<?php slot('porcion_css') ?>
        <style type="text/css">
            .table thead th,
            .table tbody td:first-child {
                text-align: center;
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
<br />
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="row">
                        <div class="span6">
                            <h2><?php echo link_to('Tarjetas', 'tarjetas/index') ?></h2>
                        </div>
                        <div class="span6">
                            <ul class="nav nav-pills pull-right">
                                <li><span class="opc">Lista de registros</span></li>
                            </ul>
                        </div>
                    </div>
                    <hr style="margin: 0 0 20px">
                    
                    <div class="navbar" style="position: static;">
                        <div class="navbar-inner">
                            <div class="container">
                                <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </a>
                                <a class="brand" href="#">Title</a>
                                <div class="nav-collapse collapse navbar-inverse-collapse">
                                    <ul class="nav">
                                        <li class="active"><a href="#">Home</a></li>
                                        <li><a href="#">Link</a></li>
                                        <li><a href="#">Link</a></li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li class="nav-header">Nav header</li>
                                                <li><a href="#">Separated link</a></li>
                                                <li><a href="#">One more separated link</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <div class="navbar-form pull-left">
                                        <input type="text" class="span3 txtSrch" placeholder="Buscar..." />
                                        <button type="button" class="btn btnSrch">Buscar</button>
                                    </div>
                                    <ul class="nav pull-right">
                                        <li><a href="#">Link</a></li>
                                        <li class="divider-vertical"></li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><?php echo link_to('Salir', '@logout') ?></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div><!-- /.nav-collapse -->
                            </div>
                        </div><!-- /navbar-inner -->
                    </div><!-- /navbar -->

                    <table class="table table-bordered table-striped table-hover responsive-utilities">
                        <thead>
                            <tr>
                                <th>Id<small>id</small></th>
                                <th>Tarjetas credito debito<small>tarjetas_credito_debito</small></th>
                                <th>Facturas<small>facturas</small></th>
                                <th>Ct iva<small>ct_iva</small></th>
                                <th>Ct ice<small>ct_ice</small></th>
                            </tr>
                        </thead>
                        <tbody><?php if ($tarjetas->count()): foreach ($tarjetas->getResults() as $ct): echo PHP_EOL; ?>
                            <tr>
                                <td><?php echo link_to($ct->getId(), 'tarjetas/edit?id='.$ct->getId()) ?></td>
                                <td><?php echo $ct->getTarjetasCreditoDebito() ?></td>
                                <td><?php echo $ct->getFacturas() ?></td>
                                <td><?php echo $ct->getCtIva() ?></td>
                                <td><?php echo $ct->getCtIce() ?></td>
                            </tr><?php endforeach; ?>
<?php else: echo PHP_EOL; ?>
                            <tr>
                                <td>-</td>
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
                            <?php echo link_to('Nuevo', 'tarjetas/new', array('class' => 'btn btn-link')) ?>
                        </div>
                    </div>
<?php if ($tarjetas->count()): if ($tarjetas->haveToPaginate()): ?>
                    <hr>
                    <div class="pagination pagination-centered">
                        <ul>
                            <li<?php echo 1 == $tarjetas->getPage() ? ' class="active"' : '' ?>>
                                <a<?php echo 1 == $tarjetas->getPage() ? ' href="javascript:void(0)"' : ' href="'.url_for('tarjetas/index?pagina=1').'"' ?>>&laquo;</a>
                            </li><?php foreach ($tarjetas->getLinks() as $pag): echo PHP_EOL; ?>
                            <li<?php echo $pag == $tarjetas->getPage() ? ' class="active"' : '' ?>>
                                <a<?php echo $pag == $tarjetas->getPage() ? ' href="javascript:void(0)"' : ' href="'.url_for('tarjetas/index?pagina='.$pag).'"' ?>><?php echo$pag?></a>
                            </li><?php endforeach; echo PHP_EOL; ?>
                            <li<?php echo $tarjetas->getLastPage() == $tarjetas->getPage() ? ' class="active"' : '' ?>>
                                <a<?php echo $tarjetas->getLastPage() == $tarjetas->getPage() ? ' href="javascript:void(0)"' : ' href="'.url_for('tarjetas/index?pagina='.$tarjetas->getNextPage()).'"' ?>>&raquo;</a>
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