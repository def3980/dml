<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('binarios/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?bi_id='.$form->getObject()->getBiId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('binarios/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'binarios/delete?bi_id='.$form->getObject()->getBiId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['bi_nombre']->renderLabel() ?></th>
        <td>
          <?php echo $form['bi_nombre']->renderError() ?>
          <?php echo $form['bi_nombre'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['bi_tamanio']->renderLabel() ?></th>
        <td>
          <?php echo $form['bi_tamanio']->renderError() ?>
          <?php echo $form['bi_tamanio'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['bi_bin']->renderLabel() ?></th>
        <td>
          <?php echo $form['bi_bin']->renderError() ?>
          <?php echo $form['bi_bin'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['bi_ext']->renderLabel() ?></th>
        <td>
          <?php echo $form['bi_ext']->renderError() ?>
          <?php echo $form['bi_ext'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['pagos_pa_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['pagos_pa_id']->renderError() ?>
          <?php echo $form['pagos_pa_id'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
