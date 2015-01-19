        <div id="myModalFinalSession" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="text-align: center">
            <div class="modal-header">
                <h4 id="myModalLabel">Estimado usuario</h4>
            </div>
            <div class="modal-body">
                <p>El tiempo de sesion ha caducado, necesita loguearse nuevamente<br />
                para poder realizar las operaciones cotidianas de este sistema</p>
                <p>Por favor presione aceptar para volver al login.</p>
            </div>
            <div class="modal-footer" style="text-align: center">
                <?php echo link_to('Aceptar', url_for('@login'), array('class' => 'btn btn-small btn-danger')).PHP_EOL ?>
            </div>
        </div>
