<?php slot('titulo', 'Pagos &middot; dml') ?>
<?php slot('menu_bar') ?>
<?php include_partial('global/menu_bar', array('barra_activa' => 'pagos')) ?>
<?php end_slot() ?>
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
<br />
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
                                <th>Fecha<small>hora</small></th>
                                <th># Factura<small>edici&oacute;n</small></th>
                                <th>Detalle<small>pdf's</small></th>
                                <th>Valor parcial<small>total</small></th>
                            </tr>
                        </thead>
                        <tbody><?php include_partial('pagos', array('pagos' => $pagos, 'first' => true)) ?>
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="span6">&nbsp;</div>
                        <div class="span6" style="text-align: right">
                            <?php echo link_to('Nuevo', 'pagos/new', array('class' => 'btn btn-link')).PHP_EOL ?>
                        </div>
                    </div>
                    <div class="paginador"><?php include_partial('paginador', array('pagos' => $pagos, 'first' => true)) ?>
                    </div>
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
                $('body').tooltip({
                    selector  : '[data-toggle=tooltip]'
                });
                /* --------------------------------------------------- buscar */
                $('.btnSrch').bind('click', function() {
                    var params = { faDet : $(this).prev().val() };
                    $.post('<?=url_for('pagos/searchPaid')?>', params, function(data) {
                        $('.table tbody').html(data);
                    });
                    $.post('<?=url_for('pagos/searchPager')?>', params, function(data) {
                        $('.paginador').html(data);
                    });
                });
                /* ----------------------------------------------- fin buscar */
                
                /* ------------------------------------------ paginador pagos */
                $('.pagination ul li a').bind('click', function() {
                    if (!$(this).parent().hasClass('active')) {
                        var params = { pagina : $(this).attr('id'), faDet : $(this).prev().val() };
                        console.log(params);
                        $.post('<?php echo url_for('pagos/searchPaid') ?>', params, function(data) {
                            $('.table tbody').html(data);
                        });
                        $.post('<?php echo url_for('pagos/searchPager') ?>', params, function(data) {
                            $('.paginador').html(data);
                        });
                    }
                });
                /* -------------------------------------- fin paginador pagos */
            });
        </script>
<?php end_slot() ?>