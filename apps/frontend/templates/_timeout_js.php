<?php $userOptions = $sf_user->getOptions(); $timeout = $userOptions['timeout']; ?>
        <script>
            $(function() {
                setTimeout(function() {
                    $('#myModalFinalSession').modal({ backdrop: 'static', keyboard : false });
                }, <?php echo $timeout * 1000 ?>);
            });
        </script>
