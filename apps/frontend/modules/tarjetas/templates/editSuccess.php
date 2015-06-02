<div class="container">
            <div class="row">
                <div class="span12">
                    <div class="row">
                        <div class="span6">
                            <h2><?php echo link_to('Tarjetas', 'tarjetas/index') ?></h2>
                        </div>
                        <div class="span6">
                            <ul class="nav nav-pills pull-right">
                                <li><span class="opc">Editar registro</span></li>
                            </ul>                            
                        </div>
                    </div>
                    <hr>
<?php include_partial('form', array(
    'form' => $form, 
    'frmFacturas' => $frmFacturas,
    'iva' => $iva,
    'ice' => $ice,
    'comision' => $comision,
    'bi_count' => $bi_count
)) ?>
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