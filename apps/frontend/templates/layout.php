<?php if ($sf_user->isAuthenticated()) Singleton::getInstance()->timeout() ?>
<!DOCTYPE html>
<html lang="en">
    <head>
<?php //include_http_metas() ?>
<?php include_metas() ?>
        <title><?php include_slot('titulo', 'Bootstrap') ?></title>

        <!-- Le styles -->        
<?php include_stylesheets() ?>
<?php if (has_slot('porcion_css')): ?>
<?php include_slot('porcion_css') ?>
<?php endif; ?>

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <?php echo javascript_include_tag('js/html5shiv', array('inside' => true)) ?>
        <![endif]-->

        <!-- Le fav and touch icons -->
<?php
print
    "\t".stylesheet_tag(image_path('ico/apple-touch-icon-144-precomposed.png'), array(
            'rel'   => 'apple-touch-icon-precomposed',
            'sizes' => '144x144',
            'icons' => true
        )).
    "\t".stylesheet_tag(image_path('ico/apple-touch-icon-114-precomposed.png'), array(
            'rel'   => 'apple-touch-icon-precomposed',
            'sizes' => '114x114',
            'icons' => true
        )).
    "\t  ".stylesheet_tag(image_path('ico/apple-touch-icon-72-precomposed.png'), array(
            'rel'   => 'apple-touch-icon-precomposed',
            'sizes' => '72x72',
            'icons' => true
        )).
    "\t                ".stylesheet_tag(image_path('ico/apple-touch-icon-57-precomposed.png'), array(
            'rel'   => 'apple-touch-icon-precomposed',
            'icons' => true
        )).
    "\t                               ".stylesheet_tag(image_path('ico/favicon.png'), array(
            'rel'   => 'shortcut icon',
            'icons' => true
        ));
?>
    </head>
    <body data-spy="scroll" data-target=".bs-docs-sidebar">
<?php if ($sf_user->isAuthenticated()): ?>
<?php if (has_slot('menu_bar')): ?>
<?php include_slot('menu_bar') ?>
<?php endif; ?>
<?php endif; ?>
        <?php echo $sf_content."\n" ?>
<?php if (has_slot('timeout_html')): ?>
        <!-- Modal timeout ============================== -->
<?php include_slot('timeout_html') ?>
<?php endif ?>
        <!-- Librerias javascript/jQuery ============================== -->
<?php include_javascripts() ?>
        <!-- Los ubicamos al final del documento, asi se cargaran mas rapido -->
        <!-- Codificacion adicional ============================== -->
<?php if (has_slot('porcion_js')): ?>
<?php include_slot('porcion_js') ?>
<?php endif; ?>
<?php if (has_slot('timeout_js')): ?>
<?php include_slot('timeout_js') ?>
<?php endif; ?>
        <!-- Fin de la codificacion adicional -->
    </body>
</html>