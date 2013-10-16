<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8" />
            <title>DML :: By Os</title>

            <meta name="description" content="overview &amp; stats" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />

            <!-- basic styles -->

            <link href="<?php echo stylesheet_path('bootstrap.min.css') ?>" rel="stylesheet" />
            <link rel="stylesheet" href="<?php echo stylesheet_path('font-awesome.min.css') ?>" />

            <!--[if IE 7]>
            <link rel="stylesheet" href="<?php echo stylesheet_path('font-awesome-ie7.min.css') ?>" />
            <![endif]-->

            <!-- page specific plugin styles -->

            <!-- fonts -->

            <link rel="stylesheet" href="<?php echo stylesheet_path('ace-fonts.css') ?>" />

            <!-- ace styles -->

            <link rel="stylesheet" href="<?php echo stylesheet_path('ace.min.css') ?>" />
            <link rel="stylesheet" href="<?php echo stylesheet_path('ace-rtl.min.css') ?>" />
            <link rel="stylesheet" href="<?php echo stylesheet_path('ace-skins.min.css') ?>" />

            <!--[if lte IE 8]>
            <link rel="stylesheet" href="<?php echo stylesheet_path('ace-ie.min.css') ?>" />
            <![endif]-->

            <!-- inline styles related to this page -->

            <!-- ace settings handler -->

            <script src="<?php echo javascript_path('ace-extra.min.js') ?>"></script>

            <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

            <!--[if lt IE 9]>
            <script src="<?php echo javascript_path('html5shiv.js') ?>"></script>
            <script src="<?php echo javascript_path('respond.min.js') ?>"></script>
            <![endif]-->
           
            <!-- basic scripts -->

            <!--[if !IE]> -->

            <script src="<?php echo javascript_path('jquery-2.0.3.min.js') ?>"></script>

            <!-- <![endif]-->

            <!--[if IE]>
            <script src="<?php echo javascript_path('jquery-1.10.2.min.js') ?>"></script>
            <![endif]-->

            <!--[if !IE]> -->

            <script type="text/javascript">
            window.jQuery || document.write("<script src='<?php echo javascript_path('jquery-2.0.3.min.js') ?>'>"+"<"+"/script>");
            </script>

            <!-- <![endif]-->

            <!--[if IE]>
            <script type="text/javascript">
            window.jQuery || document.write("<script src='<?php echo javascript_path('jquery-1.10.2.min.js') ?>'>"+"<"+"/script>");
            </script>
            <![endif]-->

            <script type="text/javascript">
            if("ontouchend" in document) document.write("<script src='<?php echo javascript_path('jquery.mobile.custom.min.js') ?>'>"+"<"+"/script>");
            </script>
            <script src="<?php echo javascript_path('bootstrap.min.js') ?>"></script>
            <script src="<?php echo javascript_path('typeahead-bs2.min.js') ?>"></script>

            <!-- page specific plugin scripts -->

            <!--[if lte IE 8]>
            <script src="<?php echo javascript_path('excanvas.min.js') ?>"></script>
            <![endif]-->

            <script src="<?php echo javascript_path('jquery-ui-1.10.3.custom.min.js') ?>"></script>
            <script src="<?php echo javascript_path('jquery.ui.touch-punch.min.js') ?>"></script>
            <script src="<?php echo javascript_path('jquery.gritter.min.js') ?>"></script>
            <script src="<?php echo javascript_path('bootbox.min.js') ?>"></script>
            <script src="<?php echo javascript_path('jquery.slimscroll.min.js') ?>"></script>
            <script src="<?php echo javascript_path('jquery.easy-pie-chart.min.js') ?>"></script>
            <script src="<?php echo javascript_path('jquery.hotkeys.min.js') ?>"></script>
            <script src="<?php echo javascript_path('bootstrap-wysiwyg.min.js') ?>"></script>
            <script src="<?php echo javascript_path('select2.min.js') ?>"></script>
            <script src="<?php echo javascript_path('date-time/bootstrap-datepicker.min.js') ?>"></script>
            <script src="<?php echo javascript_path('fuelux/fuelux.spinner.min.js') ?>"></script>
            <script src="<?php echo javascript_path('x-editable/bootstrap-editable.min.js') ?>"></script>
            <script src="<?php echo javascript_path('x-editable/ace-editable.min.js') ?>"></script>
            <script src="<?php echo javascript_path('jquery.maskedinput.min.js') ?>"></script>
            <script src="<?php echo javascript_path('spin.min.js') ?>"></script>

            <!-- ace scripts -->

            <script src="<?php echo javascript_path('ace-elements.min.js') ?>"></script>
            <script src="<?php echo javascript_path('ace.min.js') ?>"></script>

            <!-- inline scripts related to this page -->

<?php include_http_metas() ?>
<?php include_metas() ?>
<?php include_title() ?>
<?php include_stylesheets() ?>
<?php include_javascripts() ?>
        </head>

	<body>
            <?php echo "\n".$sf_content ?>
        </body>
</html>