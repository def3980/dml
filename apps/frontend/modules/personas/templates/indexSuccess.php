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
<div class="container">
            <div class="row">
                <div class="span12">
                    <div class="row">
                        <div class="span6">
                            <h2><?php echo link_to('Personas', 'personas/index') ?></h2>
                        </div>
                        <div class="span6">
                            <ul class="nav nav-pills pull-right">
                                <li><span class="opc">Lista de registros</span></li>
                            </ul>
                        </div>
                    </div>
                    <hr style="margin: 0 0 20px">
                    <div class="alert alert-info">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4 class="alert-info">Atenci&oacute;n!!</h4>
                        <p>Si te percatas de la falta de algunos campos en esta tabla y en el modelo si existen, la razon es simple; la plantilla solo visualiza por defecto <code>5 campos</code> independientemente de cuantos tenga el modelo que esta en base a la tabla indicada en el comando <code>>_ ./symfony doctrine:generate-module</code>. No te preocupes solo necesitas llamarlos de acuerdo a su nombre, planteado en el modelo. Suerte y hasta un proxima oportunidad. \m/</p>
                    </div>
                    <table class="table table-bordered table-striped table-hover responsive-utilities">
                        <thead>
                            <tr>
                                <th>Id<small>id</small></th>
                                <th>Pe cedula<small>pe_cedula</small></th>
                                <th>Pe nombres<small>pe_nombres</small></th>
                                <th>Pe apellidos<small>pe_apellidos</small></th>
                                <th>Pe fecha nacimiento<small>pe_fecha_nacimiento</small></th>
                            </tr>
                        </thead>
                        <tbody><?php if ($personas->count()): foreach ($personas->getResults() as $pe): echo PHP_EOL; ?>
                            <tr>
                                <td><?php echo link_to($pe->getId(), 'personas/edit?id='.$pe->getId()) ?></td>
                                <td><?php echo $pe->getPeCedula() ?></td>
                                <td><?php echo $pe->getPeNombres() ?></td>
                                <td><?php echo $pe->getPeApellidos() ?></td>
                                <td><?php echo $pe->getPeFechaNacimiento() ?></td>
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
                            <?php echo link_to('Nuevo', 'personas/new', array('class' => 'btn btn-link')) ?>
                        </div>
                    </div>
<?php if ($personas->count()): if ($personas->haveToPaginate()): ?>
                    <hr>
                    <div class="pagination pagination-centered">
                        <ul>
                            <li<?php echo 1 == $personas->getPage() ? ' class="active"' : '' ?>>
                                <a<?php echo 1 == $personas->getPage() ? ' href="javascript:void(0)"' : ' href="'.url_for('personas/index?pagina=1').'"' ?>>&laquo;</a>
                            </li><?php foreach ($personas->getLinks() as $pag): echo PHP_EOL; ?>
                            <li<?php echo $pag == $personas->getPage() ? ' class="active"' : '' ?>>
                                <a<?php echo $pag == $personas->getPage() ? ' href="javascript:void(0)"' : ' href="'.url_for('personas/index?pagina='.$pag).'"' ?>><?php echo$pag?></a>
                            </li><?php endforeach; echo PHP_EOL; ?>
                            <li<?php echo $personas->getLastPage() == $personas->getPage() ? ' class="active"' : '' ?>>
                                <a<?php echo $personas->getLastPage() == $personas->getPage() ? ' href="javascript:void(0)"' : ' href="'.url_for('personas/index?pagina='.$personas->getNextPage()).'"' ?>>&raquo;</a>
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