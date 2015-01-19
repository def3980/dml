<!-- Modal Lista PDF's -->
<?php echo str_repeat('    ', 9) ?><div id="modal<?=$id?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="text-align: center">
<?php echo str_repeat('    ', 9) ?>    <div class="modal-header">
<?php echo str_repeat('    ', 9) ?>        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
<?php echo str_repeat('    ', 9) ?>        <h4 id="myModalLabel">Respaldos PDF's !!</h4>
<?php echo str_repeat('    ', 9) ?>    </div>
<?php echo str_repeat('    ', 9) ?>    <div class="modal-body">
<?php echo str_repeat('    ', 9) ?>        <?php include_partial('modal_body', array('id' => $id)) ?>
<?php echo str_repeat('    ', 9) ?>    </div>
<?php echo str_repeat('    ', 9) ?>    <div class="modal-footer" style="text-align: center">
<?php echo str_repeat('    ', 9) ?>        <button class="btn btn-small btn-danger" data-dismiss="modal" aria-hidden="true">Aceptar</button>
<?php echo str_repeat('    ', 9) ?>    </div>
<?php echo str_repeat('    ', 9) ?></div>
