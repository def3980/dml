<div id="dropzone">
    <form action="<?php echo url_for('binarios/'
        .($form->getObject()->isNew() ? 'create' : 'update')
            .(!$form->getObject()->isNew() ? '?bi_id='.$form->getObject()->getBiId() : '')) ?>" 
                method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?> 
                    class="dropzone">
        <?php echo (!$form->getObject()->isNew()) ? '<input type="hidden" name="sf_method" value="put" />' : '' ?>
        <div class="fallback">
            <?php echo $form['bi_bin'] ?>
        </div>
        <input type="submit" value="Save" />
        <?php echo $form->renderGlobalErrors() ?><?php echo $form->renderHiddenFields(false) ?>
    </form>
</div>
<script type="text/javascript">
    jQuery(function($) {
        // Dropzone
        try {
            $(".dropzone").dropzone({
                paramName: "bi_bin",  // The name that will be used to transfer the file
                maxFilesize: 0.5,   // MB

                addRemoveLinks : true,
                dictDefaultMessage :
                    '<span class="bigger-150 bolder"><i class="icon-caret-right red"></i> Drop files</span> to upload \
                    <span class="smaller-80 grey">(or click)</span> <br /> \
                    <i class="upload-icon icon-cloud-upload blue icon-3x"></i>'
                    ,
                dictResponseError: 'Error while uploading file!',

                // change the previewTemplate to use Bootstrap progress bars
                previewTemplate: "<div class=\"dz-preview dz-file-preview\">\n  <div class=\"dz-details\">\n    <div class=\"dz-filename\"><span data-dz-name></span></div>\n    <div class=\"dz-size\" data-dz-size></div>\n    <img data-dz-thumbnail />\n  </div>\n  <div class=\"progress progress-small progress-striped active\"><div class=\"progress-bar progress-bar-success\" data-dz-uploadprogress></div></div>\n  <div class=\"dz-success-mark\"><span></span></div>\n  <div class=\"dz-error-mark\"><span></span></div>\n  <div class=\"dz-error-message\"><span data-dz-errormessage></span></div>\n</div>"
            });
        } catch(e) {
            alert('Dropzone.js does not support older browsers!');
        }
    });
</script>