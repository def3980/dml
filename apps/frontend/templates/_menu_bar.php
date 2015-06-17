        <!-- Navbar ================================================== -->
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="brand" href="<?php echo url_for('@homepage') ?>">Dml</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li><a href="<?php echo url_for('@homepage') ?>">Home</a></li>
<?php if ($barra_activa == 'pagos'): ?>
                            <li class="active"><a href="javascript:void(0)" style="cursor: default">Pagos</a></li>
<?php else: ?>
                            <li><a href="<?=url_for('@pagos')?>">Pagos</a></li>
<?php endif; ?>
<?php if ($barra_activa == 'tarjetas'): ?>
                            <li class="active"><a href="javascript:void(0)" style="cursor: default">Consumos T.C.</a></li>
<?php else: ?>
                            <li><a href="<?=url_for('@tarjetas')?>">Consumos T.C.</a></li>
<?php endif; ?>
<?php if ($barra_activa == 'movimientos'): ?>
                            <li class="active"><a href="javascript:void(0)" style="cursor: default">Movimientos</a></li>
<?php else: ?>
                            <li><a href="<?=url_for('@movimientos')?>">Movimientos</a></li>
<?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
