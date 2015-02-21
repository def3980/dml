<?php slot('titulo', 'Movimientos &middot; dml') ?>
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
        </style>
<?php end_slot() ?>
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
                    <div class="row-fluid">
                        <div class="span12">
                            <div class="row-fluid">
                                <div class="span6">
                                    <fieldset>
                                        <label>B&uacute;squeda de movimientos:</label>
                                        <input type="text" placeholder="Ingrese su b&uacute;squeda" />
                                    </fieldset>
                                </div>
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
                    </div>
                    <table class="table table-bordered table-striped table-hover responsive-utilities">
                        <thead>
                            <tr>
                                <th>Fecha<small>mo_fecha</small></th>
                                <th>Concepto<small>mo_concepto</small></th>
                                <th>Tipo<small>&nbsp;</small></th>
                                <th>Documento<small>ahorros</small></th>
                                <th>Monto<small>&nbsp;</small></th>
                                <th>Saldo<small>&nbsp;</small></th>
                            </tr>
                        </thead>
                        <tbody><?php if ($movimientos->count()): foreach ($movimientos->getResults() as $mo): echo PHP_EOL; ?>
                            <tr>
                                <td><?php echo link_to(Singleton::getInstance()->dateTimeESN($mo->getMoFecha(), false, true, false), 'movimientos/edit?id='.$mo->getId()) ?></td>
                                <td><a href="#" title="<?php echo $mo->getMoOficina() ?>"><?php echo $mo->getMoConcepto() ?></a></td>
                                <td>
<?php if ($mo->getMoTipo() == 'C'): ?>
                                    <span style="color: #499249"><?php echo $mo->getMoTipo() ?></span>
<?php elseif ($mo->getMoTipo() == 'D'): ?>
                                    <span style="color: #d33"><?php echo $mo->getMoTipo() ?></span>
<?php endif; ?>
                                </td>
                                <td><?php echo $mo->getMoDocumento() ?></td>
                                <td>
<?php if ($mo->getMoTipo() == 'C'): ?>
                                    <span style="color: #499249">+ $ <?php echo number_format($mo->getMoMonto(), 2, ',', '.') ?></span>
<?php elseif ($mo->getMoTipo() == 'D'): ?>
                                    <span style="color: #d33">- $ <?php echo number_format($mo->getMoMonto(), 2, ',', '.') ?></span>
<?php endif; ?>
                                </td>
                                <td><span style="color: <?php echo $mo->getMoSaldo() < 50 ? '#d33' : '#0088cc' ?>"><?php echo '$ '.number_format($mo->getMoSaldo(), 2, ',', '.') ?></span></td>
                            </tr><?php endforeach; ?>
<?php else: echo PHP_EOL; ?>
                            <tr>
                                <td>-</td>
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
                            <?php echo link_to('Nuevo', 'movimientos/new', array('class' => 'btn btn-link')).PHP_EOL ?>
                            |&nbsp;<button class="btn btn-link" id="mass">Inserci&oacute;n masiva</button>
                        </div>
                    </div>
<?php if ($movimientos->count()): if ($movimientos->haveToPaginate()): ?>
                    <hr>
                    <div class="pagination pagination-centered">
                        <ul>
                            <li<?php echo 1 == $movimientos->getPage() ? ' class="active"' : '' ?>>
                                <a<?php echo 1 == $movimientos->getPage() ? ' href="javascript:void(0)"' : ' href="'.url_for('movimientos/index?pagina=1').'"' ?>>&laquo;</a>
                            </li><?php foreach ($movimientos->getLinks() as $pag): echo PHP_EOL; ?>
                            <li<?php echo $pag == $movimientos->getPage() ? ' class="active"' : '' ?>>
                                <a<?php echo $pag == $movimientos->getPage() ? ' href="javascript:void(0)"' : ' href="'.url_for('movimientos/index?pagina='.$pag).'"' ?>><?php echo$pag?></a>
                            </li><?php endforeach; echo PHP_EOL; ?>
                            <li<?php echo $movimientos->getLastPage() == $movimientos->getPage() ? ' class="active"' : '' ?>>
                                <a<?php echo $movimientos->getLastPage() == $movimientos->getPage() ? ' href="javascript:void(0)"' : ' href="'.url_for('movimientos/index?pagina='.$movimientos->getNextPage()).'"' ?>>&raquo;</a>
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
                    location.href = '<?php echo url_for('@movimientos?cuenta=') ?>' + $.trim(option.text());
                });
                // + ----------------------------------------------------------- +
                
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