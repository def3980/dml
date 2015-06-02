<?php slot('titulo', 'Movimientos &middot; dml') ?>
<?php slot('menu_bar') ?>
<?php include_partial('global/menu_bar', array('barra_activa' => 'movimientos')) ?>
<?php end_slot() ?>
<?php use_stylesheet('bootstrap-select') ?>
<?php use_javascript('bootstrap-select') ?>
<?php slot('porcion_css') ?>
        <style type="text/css">
            .table thead th,
            .table tbody td:nth-child(1),
            .table tbody td:nth-child(2),
            .table tbody td:nth-child(3),
            .table tbody td:nth-child(4) {
                text-align: center;
            }
            .table tbody td:nth-child(3) {
                font-weight: bold;
            }
            .table thead th:nth-child(1) {
                width: 15%;
            }
            .table thead th:nth-child(2) {
                width: 45%;
            }
            .table thead th:nth-child(3) {
                width: 5%;
            }
            .table thead th:nth-child(4) {
                width: 15%;
            }
            .table thead th:nth-child(5),
            .table thead th:nth-child(6) {
                width: 10%;
            }
            .table tbody td:nth-child(5),
            .table tbody td:nth-child(6) {
                text-align: right;
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
            .table tbody td:nth-child(2) a {
                cursor: default;
            }
            .dropdown-menu {
                text-align: left;
            }
            .bootstrap-select.btn-group:not(.input-group-btn),
            .bootstrap-select.btn-group[class*="span"] {
                margin-bottom: 5px;
            }
        </style>
<?php end_slot() ?>
<br />
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="row">
                        <div class="span6">
                            <h2><?php echo link_to('Movimientos', 'movimientos/index') ?></h2>
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
                                        <li><a href="javascript:void(0)">Cuentas bancarias</a></li>
                                        <li>
                                            <select id="cuentas" class="show-menu-arrow span2"><?php foreach ($cuentas_ahorros as $k => $ah): echo "\n"; ?>
                                                <option value="<?=$ah['ah_id']?>" data-subtext="<?=$ah['en_en_alias']?>"><?php echo str_replace("_", "&nbsp;&nbsp;", str_pad($ah['ah_ah_numero_cuenta'], 11, "_", STR_PAD_LEFT)) ?></option><?php endforeach; echo PHP_EOL; ?>
                                            </select>
                                        </li>
<!--                                        <li><a href="#">Link</a></li>
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
                                        </li>-->
                                    </ul>
                                </div><!-- /.nav-collapse -->
                            </div>
                        </div><!-- /navbar-inner -->
                    </div><!-- /navbar -->
<!--                    <div class="row-fluid">
                        <div class="span12">
                            <div class="row-fluid">
                                <div class="span6">&nbsp;</div>
                                <div class="span6">
                                    <fieldset style="text-align: right">
                                        <label>Cuentas bancarias:</label>
                                        <select id="cuentas" class="show-menu-arrow span5"><?php foreach ($cuentas_ahorros as $k => $ah): echo "\n"; ?>
                                            <option value="<?=$ah['ah_id']?>" data-subtext="<?=$ah['en_en_alias']?>"><?php echo str_replace("_", "&nbsp;&nbsp;", str_pad($ah['ah_ah_numero_cuenta'], 11, "_", STR_PAD_LEFT)) ?></option><?php endforeach; echo PHP_EOL; ?>
                                        </select>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                    </div>-->
                    <table class="table table-bordered table-striped table-hover responsive-utilities">
                        <thead>
                            <tr>
                                <th>Fecha<small>mo_fecha</small></th>
                                <th>Concepto<small>mo_concepto</small></th>
                                <th>Tipo<small>C/D</small></th>
                                <th>Documento<small>ahorros</small></th>
                                <th>Monto<small>$ 0,01</small></th>
                                <th>Saldo<small>$ 0,01</small></th>
                            </tr>
                        </thead>
                        <tbody>
<?php include_partial('movimientos', array('movimientos' => $movimientos)) ?>
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="span6">&nbsp;</div>
                        <div class="span6" style="text-align: right">
                            <?php echo link_to('Nuevo', 'movimientos/new', array('class' => 'btn btn-link')).PHP_EOL ?>
                            |&nbsp;<button class="btn btn-link" id="mass">Inserci&oacute;n masiva</button>
                        </div>
                    </div>
                    <div id="paginador">
<?php include_partial('paginador', array('movimientos' => $movimientos, 'first' => true)) ?>
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
        <!-- Modal -->
        <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header" style="text-align: center">
                <h4 id="myModalLabel">Inserci&oacute;n masiva</h4>
            </div>
            <div class="modal-body">
                <div class="row-fluid">
                    <div class="span12">
                        <div class="row-fluid">
                            <div class="span6">Usar Ctrl + V para cargar todos los movimientos bancarios que deseas insertar masivamente.</div>
                            <div class="span6">
                                <fieldset>
                                    <label>Cuentas bancarias a asociar:</label>
                                    <select id="ctas" class="show-menu-arrow span12"><?php foreach ($cuentas_ahorros as $k => $ah): echo "\n"; ?>
                                        <option value="<?=$ah['ah_id']?>" data-subtext="<?=$ah['en_en_alias']?>"><?php echo str_replace("_", "&nbsp;&nbsp;", str_pad($ah['ah_ah_numero_cuenta'], 11, "_", STR_PAD_LEFT)) ?></option><?php endforeach; echo PHP_EOL; ?>
                                    </select>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <fieldset>
                    <textarea rows="3" style="width: 97.5%; resize: none;" id="txta"></textarea>
                </fieldset>
                <div class="row-fluid">
                    <div class="span12" style="text-align: center">
                        <button class="btn btn-small btn-success btns">Guardar</button>
                    </div>
                </div>
            </div>
            <div class="modal-footer" style="text-align: center">
                <button class="btn btn-small btn-danger btna" disabled="disabled">Aceptar</button>
                <button class="btn btn-small btnc" data-dismiss="modal" aria-hidden="true">Cancelar</button>
            </div>
        </div>
<?php include_partial('footer') ?>
<?php slot('porcion_js') ?>
        <script>
            $(function() {
                $('.table tbody td:nth-child(2) a').tooltip({
                    'placement' : 'right'
                });
                // para abrir el modal
                $('#mass').bind('click', function() {
                    $('#myModal').modal({
                        keyboard : false,
                        backdrop : 'static'
                    });
                });
                
                $('#cuentas, #ctas').selectpicker({ size : 5 });
                
                // + ----------------------------------------------------------- +
                $('#cuentas').on('change', function(e) {
                    var option = $(this).find("option:selected");
                    $('.txtSrch').val("");
                    $.post('<?php echo url_for('movimientos/transactions') ?>', { cuenta : $.trim(option.text()) }, function(data) {
                        $('.table tbody').html(data);
                        $('.table tbody td:nth-child(2) a').tooltip({
                            'placement' : 'right'
                        });
                    });
                    $.post('<?php echo url_for('movimientos/transactionsPager') ?>', { cuenta : $.trim(option.text()), pagina : 1 }, function(data) {
                        $('#paginador').html(data);
                    });
                });
                $('.pagination ul li a').bind('click', function() {
                    if (!$(this).parent().hasClass('active')) {
                        var option = $('#cuentas').find("option:selected");
                        $.post('<?php echo url_for('movimientos/transactions') ?>', { cuenta : $.trim(option.text()), pagina : $(this).attr('id') }, function(data) {
                            $('.table tbody').html(data);
                            $('.table tbody td:nth-child(2) a').tooltip({
                                'placement' : 'right'
                            });
                        });
                        $.post('<?php echo url_for('movimientos/transactionsPager') ?>', { cuenta : $.trim(option.text()), pagina : $(this).attr('id') }, function(data) {
                            $('#paginador').html(data);
                        });
                    }
                });
                // + ----------------------------------------------------------- +
                
                /* --------------------------------------------------- buscar */
                $('.btnSrch').bind('click', function() {
                    var params = { moCon : $(this).prev().val(), ahNc : $('#cuentas').find("option:selected").text().trim() };
                    $.post('<?=url_for('movimientos/searchMove')?>', params, function(data) {
                        $('.table tbody').html(data);
                    });
                    $.post('<?=url_for('movimientos/searchPager')?>', params, function(data) {
                        $('#paginador').html(data);
                    });
                });
                /* ----------------------------------------------- fin buscar */
                
                var node = document.getElementById('txta'), global = null;
                node.onpaste = function(e) {
                    if (e.clipboardData) {
                        if (e.clipboardData.types) {
                            var i = 0;
                            while (i < e.clipboardData.types.length) {
                                var key = e.clipboardData.types[i], val = e.clipboardData.getData(key);
                                if (e.clipboardData.types[i] === "text/html") global = val;
                                i++;
                            }
                        }
                    }
                }
                $('.btns').bind('click', function() {
                    var arrTable = new Array(), $table = null;
                    $('#txta').attr('readonly', true);
                    $('.btnc').attr('disabled', true);
                    $(global).each(function(k, v) {
                        if (v.nodeName === "TABLE")
                            $table = $(v); 
                    });
                    if ($table != null) {
                        $table.find('tbody tr').each(function(x) {
                            var arrTd = new Array();
                            $(this).children('td').each(function(y) {
                                arrTd[y] = $.trim($(this).text());
                            });
                            arrTable[x] = arrTd;
                        });
                        arrTable.push($('#ctas').val());
                        $.ajax({
                            type     : 'POST',
                            url      : '<?php echo url_for('movimientos/massInsertion') ?>',
                            dataType : 'json',
                            data     : { movimientos : arrTable },
                            success  : function(data) {
                                if (Object.keys(data.movimientos) != "observacion") {
                                    $('.modal-body fieldset:last').html(
                                        $('<table/>', { class : 'table table-bordered table-condensed', style : 'margin-bottom: 10px' })
                                        .append($('<thead/>')
                                            .append($('<tr/>')
                                                .append($('<th/>', { colspan : 2 }).html('Movimientos'))
                                            )
                                        )
                                        .append($('<tbody/>')
                                            .append($('<tr/>')
                                                .append($('<td/>', { style : 'width: 49.5%' }).html($('<code/>').text('Insertados')))
                                                .append($('<td/>').html(data.movimientos.insertados))
                                            )
                                            .append($('<tr/>')
                                                .append($('<td/>').html($('<code/>').text('Repetidos')))
                                                .append($('<td/>').html(data.movimientos.repetidos))
                                            )
                                        )
                                    );
                                } else {
                                    $('.modal-body fieldset:last').html(
                                        $('<table/>', { class : 'table table-bordered table-condensed', style : 'margin-bottom: 10px' })
                                        .append($('<thead/>')
                                            .append($('<tr/>')
                                                .append($('<th/>', { colspan : 2 }).html('Movimientos'))
                                            )
                                        )
                                        .append($('<tbody/>')
                                            .append($('<tr/>')
                                                .append($('<td/>', { style : 'width: 49.5%' }).html($('<code/>').text('Observacion')))
                                                .append($('<td/>').html(data.movimientos.observacion))
                                            )
                                            .append($('<tr/>')
                                                .append($('<td/>').html('&nbsp;'))
                                                .append($('<td/>').html('&nbsp;'))
                                            )
                                        )
                                    );
                                }
                                $('.btns').attr('disabled', 'disabled');
                                $('.btna').attr('disabled', false);
                            }
                        });
                    } else {
                        $('.modal-body fieldset:last').html(
                            $('<table/>', { class : 'table table-bordered table-condensed', style : 'margin-bottom: 10px' })
                            .append($('<thead/>')
                                .append($('<tr/>')
                                    .append($('<th/>', { colspan : 2 }).html('Movimientos'))
                                )
                            )
                            .append($('<tbody/>')
                                .append($('<tr/>')
                                    .append($('<td/>', { style : 'width: 49.5%' }).html($('<code/>').text('Observacion')))
                                    .append($('<td/>').html('Copia de movimientos, no admitida'))
                                )
                                .append($('<tr/>')
                                    .append($('<td/>').html('&nbsp;'))
                                    .append($('<td/>').html('&nbsp;'))
                                )
                            )
                        );
                        $('.btns').attr('disabled', 'disabled');
                        $('.btna').attr('disabled', false);
                    }
                });

                $('.btnc').bind('click', function() {
                    $('.modal-body fieldset:last').html($('<textarea/>', { rows : 3, style : 'width: 97.5%; resize: none;', id : 'txta' }));
                    $('#ctas option:first').attr('selected', 'selected');
                    $('#ctas').selectpicker('refresh');
                    $('.btns').attr('disabled', false);
                    $('#myModal').modal('hide');
                    $('.btna').attr('disabled', 'disabled');
                    $('.btnc').attr('disabled', false);
                });
                $('.btna').bind('click', function() {
                    $('.modal-body fieldset:last').html($('<textarea/>', { rows : 3, style : 'width: 97.5%; resize: none;', id : 'txta' }));
                    $('#ctas option:first').attr('selected', 'selected');
                    $('#ctas').selectpicker('refresh');
                    $('.btns').attr('disabled', false);
                    $('#myModal').modal('hide');
                    $('.btna').attr('disabled', 'disabled');
                    $('.btnc').attr('disabled', false);
                    location.href = '<?php echo url_for('@movimientos') ?>';
                });
            });
        </script>
<?php end_slot() ?>