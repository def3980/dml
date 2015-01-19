<?php slot('titulo', 'Sign in &middot; dml') ?>
<?php slot('porcion_css') ?>
        <style type="text/css">
            body {
                padding-top: 40px;
                padding-bottom: 40px;
                background-color: #f6f6f6;
            }
            .form-signin {
                max-width: 300px;
                padding: 19px 29px 29px;
                margin: 0 auto 20px;
                background-color: #fff;
                border: 1px solid #e5e5e5;
                -webkit-border-radius: 5px;
                   -moz-border-radius: 5px;
                        border-radius: 5px;
                   -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                      -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                           box-shadow: 0 1px 2px rgba(0,0,0,.05);
            }
            .form-signin .form-signin-heading,
            .form-signin .checkbox {
                margin-bottom: 15px;
            }
        </style>
<?php end_slot() ?>
<div class="container">
            <form class="form-signin" action="<?php echo url_for('login/index') ?>" method="post" autocomplete="off">
                <h3 class="form-signin-heading"><?php echo link_to('Dml', url_for('@login')) ?></h3>
                <?php echo $form['usr']->render(array('placeholder' => 'Email address', 'class' => 'input-block-level', 'value' => 'def.3980@gmail.com')).PHP_EOL ?>
                <?php echo $form['pwd']->render(array('placeholder' => 'Password', 'class' => 'input-block-level')).PHP_EOL ?>
                <div style="margin: 15px auto 0; width: 35%;">
                    <button class="btn btn-small btn-danger btn-block" type="submit">Entrar</button>
                </div>
<?php echo $form->renderGlobalErrors() ?>
<?php echo $form->renderHiddenFields(false).PHP_EOL ?>
            </form>
        </div> <!-- /container -->