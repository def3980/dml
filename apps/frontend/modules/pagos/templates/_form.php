<?php use_javascript('JSPersonal/round.js') ?>
<?php use_javascript('JSPersonal/dump.js') ?>
<?php use_javascript('form/jquery.form.js') ?>
<form id="frm_pa" action="<?php echo url_for('pagos/'.($form->getObject()->isNew() ? 'create' : 'update')
        .(!$form->getObject()->isNew() ? '?pa_id='.$form->getObject()->getPaId() : '')) ?>" 
        method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?> autocomplete="off">
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('pagos/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'pagos/delete?pa_id='.$form->getObject()->getPaId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['pa_numero_factura']->renderLabel() ?></th>
        <td>
          <?php echo $form['pa_numero_factura']->renderError() ?>
          <?php echo $form['pa_numero_factura'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['pa_fecha']->renderLabel() ?></th>
        <td>
          <?php echo $form['pa_fecha']->renderError() ?>
          <?php echo $form['pa_fecha'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['pa_detalle']->renderLabel() ?></th>
        <td>
          <?php echo $form['pa_detalle']->renderError() ?>
          <?php echo $form['pa_detalle'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['pa_iva']->renderLabel() ?></th>
        <td>
          <?php echo $form['pa_iva']->renderError() ?>
          <?php echo $form['pa_iva'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['pa_ice']->renderLabel() ?></th>
        <td>
          <?php echo $form['pa_ice']->renderError() ?>
          <?php echo $form['pa_ice'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['pa_comision']->renderLabel() ?></th>
        <td>
          <?php echo $form['pa_comision']->renderError() ?>
          <?php echo $form['pa_comision'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['pa_valor_total']->renderLabel() ?></th>
        <td>
          <?php echo $form['pa_valor_total']->renderError() ?>
          <?php echo $form['pa_valor_total'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['pa_respaldo']->renderLabel() ?></th>
        <td>
          <?php echo $form['pa_respaldo']->renderError() ?>
          <?php echo $form['pa_respaldo'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['persona_pe_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['persona_pe_id']->renderError() ?>
          <?php echo $form['persona_pe_id'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
<script type="text/javascript">
    $(function(){<?php if ($form->getObject()->isNew()): ?>
        $('input[type="text"]:eq(0)').val("103-001-000226484");
        $('input[type="text"]:eq(1)').val("2013-07-15");
        $('textarea').val("Medicinas para Benjamín");
        $('input[type="text"]:eq(2)').val(round(42.28 - (42.28 / 1.12), 2));
        $('input[type="text"]:eq(5)').val(42.28);<?php endif; ?>
        $('#frm_pa').ajaxForm({
            dataType    : 'json',
            beforeSubmit: validate,
            success     : showResponse
        });
    });
    function validate(formData, jqForm, options) {}
    function showResponse(responseText, statusText, xhr, $form) {
        if (responseText.pa_numero_factura.length) {
            location.href = "<?php echo url_for('@homepage') ?>";
        } else {
            alert('Algo pasoo...');
        }
//        var_dump(responseText);
    }
</script>