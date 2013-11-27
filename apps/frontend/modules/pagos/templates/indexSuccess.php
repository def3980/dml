<?php use_javascript('form/jquery.form.js') ?>
<?php use_javascript('JSPersonal/timers.js') ?>
<?php use_javascript('JSPersonal/round.js') ?>
<?php use_javascript('JSPersonal/dump.js') ?>
<?php use_javascript('JSPersonal/validators.js') ?>
<?php use_javascript('autoNumeric/autoNumeric.js') ?>
<div class="navbar navbar-default" id="navbar">
    <script type="text/javascript">
        try{ace.settings.check('navbar' , 'collapsed')}catch(e){}
    </script>
    <div class="navbar-container" id="navbar-container">
        <div class="navbar-header pull-left">
            <a href="#" class="navbar-brand">
                <small><i class="icon-leaf"></i> &nbsp;DML :: Detail My Life</small>
            </a><!-- /.brand -->
        </div><!-- /.navbar-header -->
        <div class="navbar-header pull-right" role="navigation">
            <ul class="nav ace-nav">
                <li class="grey">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="icon-tasks"></i>
                        <span class="badge badge-grey">4</span>
                    </a>
                    <ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                        <li class="dropdown-header"><i class="icon-ok"></i>4 Tasks to complete</li>
                        <li>
                            <a href="#">
                                <div class="clearfix">
                                    <span class="pull-left">Software Update</span>
                                    <span class="pull-right">65%</span>
                                </div>
                                <div class="progress progress-mini ">
                                    <div style="width:65%" class="progress-bar "></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="clearfix">
                                    <span class="pull-left">Hardware Upgrade</span>
                                    <span class="pull-right">35%</span>
                                </div>
                                <div class="progress progress-mini ">
                                    <div style="width:35%" class="progress-bar progress-bar-danger"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="clearfix">
                                    <span class="pull-left">Unit Testing</span>
                                    <span class="pull-right">15%</span>
                                </div>
                                <div class="progress progress-mini ">
                                    <div style="width:15%" class="progress-bar progress-bar-warning"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="clearfix">
                                    <span class="pull-left">Bug Fixes</span>
                                    <span class="pull-right">90%</span>
                                </div>
                                <div class="progress progress-mini progress-striped active">
                                    <div style="width:90%" class="progress-bar progress-bar-success"></div>
                                </div>
                            </a>
                        </li>
                        <li><a href="#">See tasks with details<i class="icon-arrow-right"></i></a></li>
                    </ul>
                </li>
                <li class="purple">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="icon-bell-alt icon-animated-bell"></i>
                        <span class="badge badge-important">8</span>
                    </a>
                    <ul class="pull-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
                        <li class="dropdown-header"><i class="icon-warning-sign"></i>8 Notifications</li>
                        <li>
                            <a href="#">
                                <div class="clearfix">
                                    <span class="pull-left">
                                        <i class="btn btn-xs no-hover btn-pink icon-comment"></i>
                                        New Comments
                                    </span>
                                    <span class="pull-right badge badge-info">+12</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="btn btn-xs btn-primary icon-user"></i>
                                Bob just signed up as an editor ...
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="clearfix">
                                    <span class="pull-left">
                                        <i class="btn btn-xs no-hover btn-success icon-shopping-cart"></i>
                                        New Orders
                                    </span>
                                    <span class="pull-right badge badge-success">+8</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="clearfix">
                                    <span class="pull-left">
                                        <i class="btn btn-xs no-hover btn-info icon-twitter"></i>
                                        Followers
                                    </span>
                                    <span class="pull-right badge badge-info">+11</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                See all notifications
                                <i class="icon-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="green">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="icon-envelope icon-animated-vertical"></i>
                        <span class="badge badge-success">5</span>
                    </a>
                    <ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                        <li class="dropdown-header">
                            <i class="icon-envelope-alt"></i>
                            5 Messages
                        </li>
                        <li>
                            <a href="#">
                                <img src="<?php echo image_path('avatars/avatar') ?>" class="msg-photo" alt="Alex's Avatar" />
                                <span class="msg-body">
                                    <span class="msg-title">
                                        <span class="blue">Alex:</span>
                                        Ciao sociis natoque penatibus et auctor ...
                                    </span>
                                    <span class="msg-time">
                                        <i class="icon-time"></i>
                                        <span>a moment ago</span>
                                    </span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="<?php echo image_path('avatars/avatar3') ?>" class="msg-photo" alt="Susan's Avatar" />
                                <span class="msg-body">
                                    <span class="msg-title">
                                        <span class="blue">Susan:</span>
                                        Vestibulum id ligula porta felis euismod ...
                                    </span>
                                    <span class="msg-time">
                                        <i class="icon-time"></i>
                                        <span>20 minutes ago</span>
                                    </span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="<?php echo image_path('avatars/avatar4') ?>" class="msg-photo" alt="Bob's Avatar" />
                                <span class="msg-body">
                                    <span class="msg-title">
                                        <span class="blue">Bob:</span>
                                        Nullam quis risus eget urna mollis ornare ...
                                    </span>
                                    <span class="msg-time">
                                        <i class="icon-time"></i>
                                        <span>3:15 pm</span>
                                    </span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="inbox.html">
                                See all messages
                                <i class="icon-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="light-blue">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                        <img class="nav-user-photo" src="<?php echo image_path('avatars/user.jpg') ?>" alt="Jason's Photo" />
                        <span class="user-info"><small>Welcome,</small>Jason</span>
                        <i class="icon-caret-down"></i>
                    </a>
                    <ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                        <li>
                            <a href="#">
                                <i class="icon-cog"></i>
                                Settings
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon-user"></i>
                                Profile
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <i class="icon-off"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                </li>
            </ul><!-- /.ace-nav -->
        </div><!-- /.navbar-header -->
    </div><!-- /.container -->
</div>
<div class="main-container" id="main-container">
    <script type="text/javascript">
        try{ace.settings.check('main-container' , 'collapsed')}catch(e){}
    </script>
    <div class="main-container-inner">
        <a class="menu-toggler" id="menu-toggler" href="#"><span class="menu-text"></span></a>
        <div class="sidebar" id="sidebar">
            <script type="text/javascript">
                try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
            </script>
            <div class="sidebar-shortcuts" id="sidebar-shortcuts">
                <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
                    <button class="btn btn-success"><i class="icon-signal"></i></button>
                    <button class="btn btn-info"><i class="icon-pencil"></i></button>
                    <button class="btn btn-warning"><i class="icon-group"></i></button>
                    <button class="btn btn-danger"><i class="icon-cogs"></i></button>
                </div>
                <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
                    <span class="btn btn-success"></span>
                    <span class="btn btn-info"></span>
                    <span class="btn btn-warning"></span>
                    <span class="btn btn-danger"></span>
                </div>
            </div><!-- #sidebar-shortcuts -->
            <ul class="nav nav-list">
                <li>
                    <a href="index.html">
                        <i class="icon-dashboard"></i>
                        <span class="menu-text"> Dashboard </span>
                    </a>
                </li><!-- #Dashboard -->
                <li>
                    <a href="typography.html">
                        <i class="icon-text-width"></i>
                        <span class="menu-text"> Typography </span>
                    </a>
                </li><!-- #Typography -->
                <li>
                    <a href="#" class="dropdown-toggle">
                        <i class="icon-desktop"></i>
                        <span class="menu-text"> UI Elements </span>
                        <b class="arrow icon-angle-down"></b>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="elements.html">
                                <i class="icon-double-angle-right"></i>
                                Elements
                            </a>
                        </li>
                        <li>
                            <a href="buttons.html">
                                <i class="icon-double-angle-right"></i>
                                Buttons &amp; Icons
                            </a>
                        </li>
                        <li>
                            <a href="treeview.html">
                                <i class="icon-double-angle-right"></i>
                                Treeview
                            </a>
                        </li>
                        <li>
                            <a href="jquery-ui.html">
                                <i class="icon-double-angle-right"></i>
                                jQuery UI
                            </a>
                        </li>
                        <li>
                            <a href="nestable-list.html">
                                <i class="icon-double-angle-right"></i>
                                Nestable Lists
                            </a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-toggle">
                                <i class="icon-double-angle-right"></i>
                                Three Level Menu
                                <b class="arrow icon-angle-down"></b>
                            </a>
                            <ul class="submenu">
                                <li><a href="#"><i class="icon-leaf"></i>Item #1</a></li>
                                <li>
                                    <a href="#" class="dropdown-toggle">
                                        <i class="icon-pencil"></i>
                                        4th level
                                        <b class="arrow icon-angle-down"></b>
                                    </a>
                                    <ul class="submenu">
                                        <li><a href="#"><i class="icon-plus"></i>Add Product</a></li>
                                        <li><a href="#"><i class="icon-eye-open"></i>View Products</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li><!-- #UI Elements -->
                <li>
                    <a href="#" class="dropdown-toggle">
                        <i class="icon-list"></i>
                        <span class="menu-text"> Tables </span>
                        <b class="arrow icon-angle-down"></b>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="tables.html">
                                <i class="icon-double-angle-right"></i>
                                Simple &amp; Dynamic
                            </a>
                        </li>
                        <li>
                            <a href="jqgrid.html">
                                <i class="icon-double-angle-right"></i>
                                jqGrid plugin
                            </a>
                        </li>
                    </ul>
                </li><!-- #Tables -->
                <li>
                    <a href="#" class="dropdown-toggle">
                        <i class="icon-edit"></i>
                        <span class="menu-text"> Forms </span>
                        <b class="arrow icon-angle-down"></b>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="form-elements.html">
                                <i class="icon-double-angle-right"></i>
                                Form Elements
                            </a>
                        </li>
                        <li>
                            <a href="form-wizard.html">
                                <i class="icon-double-angle-right"></i>
                                Wizard &amp; Validation
                            </a>
                        </li>
                        <li>
                            <a href="wysiwyg.html">
                                <i class="icon-double-angle-right"></i>
                                Wysiwyg &amp; Markdown
                            </a>
                        </li>
                        <li>
                            <a href="dropzone.html">
                                <i class="icon-double-angle-right"></i>
                                Dropzone File Upload
                            </a>
                        </li>
                    </ul>
                </li><!-- #Forms -->
                <li>
                    <a href="widgets.html">
                        <i class="icon-list-alt"></i>
                        <span class="menu-text"> Widgets </span>
                    </a>
                </li><!-- #Widgets -->
                <li>
                    <a href="calendar.html">
                        <i class="icon-calendar"></i>
                        <span class="menu-text">
                            Calendar
                            <span class="badge badge-transparent tooltip-error" title="2&nbsp;Important&nbsp;Events">
                                <i class="icon-warning-sign red bigger-130"></i>
                            </span>
                        </span>
                    </a>
                </li><!-- #Calendar -->
                <li>
                    <a href="gallery.html">
                        <i class="icon-picture"></i>
                        <span class="menu-text"> Gallery </span>
                    </a>
                </li><!-- #Gallery -->
                <li>
                    <a href="#" class="dropdown-toggle">
                        <i class="icon-tag"></i>
                        <span class="menu-text"> More Pages </span>
                        <b class="arrow icon-angle-down"></b>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="profile.html">
                                <i class="icon-double-angle-right"></i>
                                User Profile
                            </a>
                        </li>
                        <li>
                            <a href="inbox.html">
                                <i class="icon-double-angle-right"></i>
                                Inbox
                            </a>
                        </li>
                        <li>
                            <a href="pricing.html">
                                <i class="icon-double-angle-right"></i>
                                Pricing Tables
                            </a>
                        </li>
                        <li>
                            <a href="invoice.html">
                                <i class="icon-double-angle-right"></i>
                                Invoice
                            </a>
                        </li>
                        <li>
                            <a href="timeline.html">
                                <i class="icon-double-angle-right"></i>
                                Timeline
                            </a>
                        </li>
                        <li>
                            <a href="login.html">
                                <i class="icon-double-angle-right"></i>
                                Login &amp; Register
                            </a>
                        </li>
                    </ul>
                </li><!-- #More Pages -->
                <li class="active open">
                    <a href="#" class="dropdown-toggle">
                        <i class="icon-file-alt"></i>
                        <span class="menu-text">Other Pages<span class="badge badge-primary ">5</span></span>
                        <b class="arrow icon-angle-down"></b>
                    </a>
                    <ul class="submenu">
                        <li class="active">
                            <a href="faq.html">
                                <i class="icon-double-angle-right"></i>
                                FAQ
                            </a>
                        </li>
                        <li>
                            <a href="error-404.html">
                                <i class="icon-double-angle-right"></i>
                                Error 404
                            </a>
                        </li>
                        <li>
                            <a href="error-500.html">
                                <i class="icon-double-angle-right"></i>
                                Error 500
                            </a>
                        </li>
                        <li>
                            <a href="grid.html">
                                <i class="icon-double-angle-right"></i>
                                Grid
                            </a>
                        </li>
                        <li>
                            <a href="blank.html">
                                <i class="icon-double-angle-right"></i>
                                Blank Page
                            </a>
                        </li>
                    </ul>
                </li><!-- #Other Pages -->
            </ul><!-- /.nav-list -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
            </div>
            <script type="text/javascript">
                try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
            </script>
        </div>
        <div class="main-content">
            <div class="breadcrumbs" id="breadcrumbs">
                <script type="text/javascript">
                    try{ace.settings.check('breadcrumbs' , 'collapsed')}catch(e){}
                </script>
                <ul class="breadcrumb">
                    <li>
                        <i class="icon-home home-icon"></i>
                        <a href="#">Home</a>
                    </li>
                    <li><a href="#">Other Pages</a></li>
                    <li class="active">FAQ</li>
                </ul><!-- .breadcrumb -->
                <div class="nav-search" id="nav-search">
                    <form class="form-search">
                        <span class="input-icon">
                            <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
                            <i class="icon-search nav-search-icon"></i>
                        </span>
                    </form>
                </div><!-- #nav-search -->
            </div>
            <div class="page-content">
                <div class="page-header">
                    <h1>
                        FAQ
                        <small>
                            <i class="icon-double-angle-right"></i>
                            frequently asked questions using tabs and accordions
                        </small>
                    </h1>
                </div><!-- /.page-header -->
                <div class="row">
                    <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->
                        <div class="tabbable">
                            <ul class="nav nav-tabs padding-18 tab-size-bigger" id="myTab">
                                <li>
                                    <a data-toggle="tab" href="#faq-tab-1">
                                        <i class="blue icon-question-sign bigger-120"></i>
                                        General
                                    </a>
                                </li><!-- Tab#General -->
                                <li>
                                    <a data-toggle="tab" href="#faq-tab-2">
                                        <i class="green icon-user bigger-120"></i>
                                        Account
                                    </a>
                                </li><!-- Tab#Account -->
                                <li>
                                    <a data-toggle="tab" href="#faq-tab-3">
                                        <i class="orange icon-credit-card bigger-120"></i>
                                        Payments
                                    </a>
                                </li><!-- Tab#Payments -->
                                <li class="active">
                                    <a data-toggle="tab" href="#faq-tab-4">
                                        <i class="purple icon-magic bigger-120"></i>
                                        Nuevo
                                    </a>
                                </li><!-- /.dropdown Miscellaneous Questions -->
                            </ul><!-- Tabs -->
                            <div class="tab-content no-border padding-24">
                                <div id="faq-tab-1" class="tab-pane fade">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="widget-box collapsed">
                                                <div class="widget-header widget-header-flat">
                                                    <h4 class="lighter">
                                                        <i class="icon-usd"></i>
                                                        Ingreso monetario <i class="icon-arrow-right smaller-75"></i><span style="color: rgb(209, 91, 71)"><?php echo MyHelpers::opcion()->dinero($tm['vt']) ?></span>
                                                    </h4>
                                                    <div class="widget-toolbar">
                                                        <a href="#" data-action="collapse">
                                                            <i class="icon-chevron-down"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="widget-body">
                                                    <div class="widget-main padding-10">
                                                        <table class="table table-striped table-bordered" style="margin-bottom: 0">
                                                            <thead>
                                                                <tr>
                                                                    <th class="center">#</th>
                                                                    <th class="center">Fecha</th>
                                                                    <th>Raz&oacute;n</th>
                                                                    <th class="hidden-xs" style="text-align: center">Valor</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody><?php foreach ($ingreso_monetario->fetchArray() as $k => $im): ?>
                                                                <tr>
                                                                    <td class="center"><?php echo ($k + 1) ?></td>
                                                                    <td class="center"><?php echo $im['im_fecha'] ?></td>
                                                                    <td><?php echo $im['im_razon'] ?></td>
                                                                    <td style="text-align: right" class="hidden-xs"><?php echo '$ '.MyHelpers::opcion()->dinero($im['im_valor']) ?></td>
                                                                </tr><?php endforeach; ?>
                                                            </tbody>
                                                        </table>
                                                    </div><!-- /widget-main -->
                                                </div><!-- /widget-body -->
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="widget-box collapsed">
                                                <div class="widget-header widget-header-flat">
                                                    <h4 class="lighter">
                                                        <i class="icon-signal"></i>
                                                        Gr&aacute;fico
                                                    </h4>
                                                    <div class="widget-toolbar">
                                                        <a href="#" data-action="collapse">
                                                            <i class="icon-chevron-down"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="widget-body">
                                                    <div class="widget-main padding-10">                                                        
                                                        <div id="piechart-placeholder" style="min-height: 120px; margin: 0 15% auto"></div>
                                                    </div><!-- /widget-main -->
                                                </div><!-- /widget-body -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="space-8"></div>
                                    <div id="faq-list-1" class="panel-group accordion-style1 accordion-style2">
                                    <?php 
                                        $arr = array(); 
                                        foreach ($pago_ss->getResults() as $v): 
                                            $tmp = explode(' ', $v['pa_fecha']); 
                                            $arr[] = $tmp[0]; 
                                        endforeach; 
                                        $fechas = array_count_values($arr); // encuentro el numero de fecha repetidos 
                                        $cont = 1;
                                        foreach ($pago_ss->getResults() as $k => $pagos): $tmp = explode(' ', $pagos['pa_fecha']);
                                            switch ($fechas[$tmp[0]]):
                                                case 1:
                                    ?>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a href="#faq-1-<?php echo $pagos->getPaId() ?>" data-parent="#faq-list-1" data-toggle="collapse" class="accordion-toggle collapsed">
                                                    <i class="icon-chevron-left pull-right" data-icon-hide="icon-chevron-down" data-icon-show="icon-chevron-left"></i>
                                                    <i class="icon-sort-by-attributes-alt"></i>
                                                    <span class="pull-right"><?php $vtd = PAGOSTable::consumoDiario($pagos->getPaFecha())->fetchOne(array(), Doctrine::HYDRATE_ARRAY_SHALLOW); echo '$ '.MyHelpers::opcion()->dinero($vtd['vtd']); ?></span>
                                                    &nbsp; <?php echo MyHelpers::opcion()->fechaEnEsp($pagos->getPaFecha(),false) ?> <sup><?php $c = PAGOSTable::cuentaConsumoDiario($pagos->getPaFecha()); echo $c['ccd']; ?></sup> 
                                                </a>
                                            </div>
                                            <div class="panel-collapse collapse" id="faq-1-<?php echo $pagos->getPaId() ?>">
                                                <div class="panel-body">
                                                    <div id="faq-list-nested-<?php echo $pagos->getPaId() ?>" class="panel-group accordion-style1 accordion-style2">
                                                        <?php include_partial('accordion', array('pa_id' => $pagos->getPaId(), 'pa_fecha' => $pagos->getPaFecha(), 'pagos' => $pago_ss->getResults())) ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php       break;
                                                default:
                                                    if ($cont == $fechas[$tmp[0]]): ?>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a href="#faq-1-<?php echo $pagos->getPaId() ?>" data-parent="#faq-list-1" data-toggle="collapse" class="accordion-toggle collapsed">
                                                    <i class="icon-chevron-left pull-right" data-icon-hide="icon-chevron-down" data-icon-show="icon-chevron-left"></i>                                                    
                                                    <i class="icon-sort-by-attributes-alt"></i>
                                                    <span class="pull-right"><?php $vtd = PAGOSTable::consumoDiario($pagos->getPaFecha())->fetchOne(array(), Doctrine::HYDRATE_ARRAY_SHALLOW); echo '$ '.MyHelpers::opcion()->dinero($vtd['vtd']); ?></span>
                                                    &nbsp; <?php echo MyHelpers::opcion()->fechaEnEsp($pagos->getPaFecha(),false) ?> <sup><?php $c = PAGOSTable::cuentaConsumoDiario($pagos->getPaFecha()); echo $c['ccd']; ?></sup> 
                                                </a>
                                            </div>
                                            <div class="panel-collapse collapse" id="faq-1-<?php echo $pagos->getPaId() ?>">
                                                <div class="panel-body">
                                                    <div id="faq-list-nested-<?php echo $pagos->getPaId() ?>" class="panel-group accordion-style1 accordion-style2">
                                                        <?php include_partial('accordion', array('pa_id' => $pagos->getPaId(), 'pa_fecha' => $pagos->getPaFecha(), 'pagos' => $pago_ss->getResults())) ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php           $cont = 1; else: $cont += 1; endif;
                                            endswitch;
                                        endforeach; ?>
                                        <div class="space-10"></div>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6">
                                                <div class="widget-box transparent">
                                                    <div class="widget-header widget-header-small">
                                                        <h4 class="smaller">
                                                            <i class="icon-stackexchange bigger-110"></i>
                                                            Paginador
                                                        </h4>
                                                    </div>
                                                    <div class="widget-body">
                                                        <div class="widget-main"><?php echo "\n"; if ($pago_ss->haveToPaginate()): ?>
                                                            <ul class="pagination" style="margin: 0">
                                                            <?php echo ($pago_ss->getPage() == 1) ? '<li class="disabled"><a onclick="javascript:void(0)"><i class="icon-long-arrow-left"></i></a></li>' : '<li><a href="'.url_for('@pagos_vista?pagina='.$pago_ss->getFirstPage()).'"><i class="icon-long-arrow-left"></i></a></li>'."\n"; ?>
                                                            <?php echo ($pago_ss->getPreviousPage() == $pago_ss->getPage()) ? '<li class="disabled"><a onclick="javascript:void(0)"><i class="icon-double-angle-left"></i></a></li>' : '<li><a href="'.url_for('@pagos_vista?pagina='.$pago_ss->getPreviousPage()).'"><i class="icon-double-angle-left"></i></a></li>'; ?>
                                                            <?php echo "\n"; foreach ($pago_ss->getLinks() as $pag): if ($pag == $pago_ss->getPage()): ?>
                                                            <li class="active"><a onclick="javascript:void(0)"><?php echo $pag ?></a></li><?php echo "\n"; else: ?>
                                                            <li><a href="<?php echo url_for('@pagos_vista?pagina='.$pag) ?>"><?php echo $pag ?>
                                                            <?php echo "\n"; endif; endforeach; ?>
                                                            <?php echo ($pago_ss->getNextPage() == $pago_ss->getPage()) ? '<li class="disabled"><a onclick="javascript:void(0)"><i class="icon-double-angle-right"></i></a></li>' : '<li><a href="'.url_for('@pagos_vista?pagina='.$pago_ss->getNextPage()).'"><i class="icon-double-angle-right"></i></a></li>'; echo "\n"; ?>
                                                            <?php echo ($pago_ss->getPage() == $pago_ss->getLastPage()) ? '<li class="disabled"><a onclick="javascript:void(0)"><i class="icon-long-arrow-right"></i></a></li>' : '<li><a href="'.url_for('@pagos_vista?pagina='.$pago_ss->getLastPage()).'"><i class="icon-long-arrow-right"></i></a></li>'; echo "\n"; ?>
                                                            </ul><?php else: ?>
                                                            <ul class="pagination" style="margin: 0">
                                                                <li class="disabled"><a onclick="javascript:void(0)"><i class="icon-long-arrow-left"></i></a></li>
                                                                <li class="disabled"><a onclick="javascript:void(0)"><i class="icon-double-angle-left"></i></a></li>
                                                                <li class="active"><a onclick="javascript:void(0)">1</a></li>
                                                                <li class="disabled"><a onclick="javascript:void(0)"><i class="icon-double-angle-right"></i></a></li>
                                                                <li class="disabled"><a onclick="javascript:void(0)"><i class="icon-long-arrow-right"></i></a></li>
                                                            </ul><?php endif; echo "\n"; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6">
                                                <div class="widget-box transparent">
                                                    <div class="widget-header widget-header-small header-color-blue2">
                                                        <h4 class="smaller">
                                                            <i class="icon-lightbulb bigger-120"></i>
                                                            Estadisticas
                                                        </h4>
                                                    </div>
                                                    <div class="widget-body">
                                                        <div class="widget-main padding-16">
                                                            <div class="clearfix">
                                                                <div class="grid3 center">
                                                                    <div class="easy-pie-chart percentage easyPieChart" data-percent="45" data-color="#CA5952" style="width: 72px; height: 72px; line-height: 72px; color: rgb(202, 89, 82);">
                                                                        <span class="percent">45</span>%
                                                                        <canvas width="72" height="72"></canvas>
                                                                    </div>
                                                                    <div class="space-2"></div>
                                                                    Graphic Design
                                                                </div>
                                                                <div class="grid3 center">
                                                                    <div class="center easy-pie-chart percentage easyPieChart" data-percent="90" data-color="#59A84B" style="width: 72px; height: 72px; line-height: 72px; color: rgb(89, 168, 75);">
                                                                        <span class="percent">90</span>%
                                                                        <canvas width="72" height="72"></canvas>
                                                                    </div>
                                                                    <div class="space-2"></div>
                                                                    HTML5 &amp; CSS3
                                                                </div>
                                                                <div class="grid3 center">
                                                                    <div class="center easy-pie-chart percentage easyPieChart" data-percent="80" data-color="#9585BF" style="width: 72px; height: 72px; line-height: 72px; color: rgb(149, 133, 191);">
                                                                        <span class="percent">80</span>%
                                                                        <canvas width="72" height="72"></canvas>
                                                                    </div>
                                                                    <div class="space-2"></div>
                                                                    Javascript/jQuery
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- General Questions -->
                                <div id="faq-tab-2" class="tab-pane fade">
                                    <h4 class="blue">
                                        <i class="green icon-user bigger-110"></i>
                                        Account Questions
                                    </h4>
                                    <div class="space-8"></div>
                                    <div id="faq-list-2" class="panel-group accordion-style1 accordion-style2">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a href="#faq-2-1" data-parent="#faq-list-2" data-toggle="collapse" class="accordion-toggle collapsed">
                                                    <i class="icon-chevron-right smaller-80" data-icon-hide="icon-chevron-down align-top" data-icon-show="icon-chevron-right"></i>
                                                    &nbsp; Enim eiusmod high life accusamus terry richardson?
                                                </a>
                                            </div>
                                            <div class="panel-collapse collapse" id="faq-2-1">
                                                <div class="panel-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                                </div>
                                            </div>
                                        </div><!-- Enim eiusmod -->
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a href="#faq-2-2" data-parent="#faq-list-2" data-toggle="collapse" class="accordion-toggle collapsed">
                                                    <i class="icon-chevron-right smaller-80" data-icon-hide="icon-chevron-down align-top" data-icon-show="icon-chevron-right"></i>
                                                    &nbsp; Single-origin coffee nulla assumenda shoreditch et?
                                                </a>
                                            </div>
                                            <div class="panel-collapse collapse" id="faq-2-2">
                                                <div class="panel-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                                </div>
                                            </div>
                                        </div><!-- Single-origin -->
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a href="#faq-2-3" data-parent="#faq-list-2" data-toggle="collapse" class="accordion-toggle collapsed">
                                                    <i class="icon-chevron-right middle smaller-80" data-icon-hide="icon-chevron-down align-top" data-icon-show="icon-chevron-right"></i>
                                                    &nbsp; Sunt aliqua put a bird on it squid?
                                                </a>
                                            </div>
                                            <div class="panel-collapse collapse" id="faq-2-3">
                                                <div class="panel-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                                </div>
                                            </div>
                                        </div><!-- Sunt aliqua -->
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a href="#faq-2-4" data-parent="#faq-list-2" data-toggle="collapse" class="accordion-toggle collapsed">
                                                    <i class="icon-chevron-right smaller-80" data-icon-hide="icon-chevron-down align-top" data-icon-show="icon-chevron-right"></i>
                                                    &nbsp; Brunch 3 wolf moon tempor sunt aliqua put?
                                                </a>
                                            </div>
                                            <div class="panel-collapse collapse" id="faq-2-4">
                                                <div class="panel-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                                </div>
                                            </div>
                                        </div><!-- Brunch 3 wolf -->
                                    </div>
                                </div><!-- Account Questions -->
                                <div id="faq-tab-3" class="tab-pane fade">
                                    <h4 class="blue">
                                        <i class="orange icon-credit-card bigger-110"></i>
                                        Payment Questions
                                    </h4>
                                    <div class="space-8"></div>
                                    <div id="faq-list-3" class="panel-group accordion-style1 accordion-style2">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a href="#faq-3-1" data-parent="#faq-list-3" data-toggle="collapse" class="accordion-toggle collapsed">
                                                    <i class="icon-plus smaller-80" data-icon-hide="icon-minus" data-icon-show="icon-plus"></i>
                                                    &nbsp; Enim eiusmod high life accusamus terry richardson?
                                                </a>
                                            </div>
                                            <div class="panel-collapse collapse" id="faq-3-1">
                                                <div class="panel-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                                </div>
                                            </div>
                                        </div><!-- Enim eiusmod -->
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a href="#faq-3-2" data-parent="#faq-list-3" data-toggle="collapse" class="accordion-toggle collapsed">
                                                    <i class="icon-plus smaller-80" data-icon-hide="icon-minus" data-icon-show="icon-plus"></i>
                                                    &nbsp; Single-origin coffee nulla assumenda shoreditch et?
                                                </a>
                                            </div>
                                            <div class="panel-collapse collapse" id="faq-3-2">
                                                <div class="panel-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                                </div>
                                            </div>
                                        </div><!-- Single-origin -->
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a href="#faq-3-3" data-parent="#faq-list-3" data-toggle="collapse" class="accordion-toggle collapsed">
                                                    <i class="icon-plus smaller-80" data-icon-hide="icon-minus" data-icon-show="icon-plus"></i>
                                                    &nbsp; Sunt aliqua put a bird on it squid?
                                                </a>
                                            </div>
                                            <div class="panel-collapse collapse" id="faq-3-3">
                                                <div class="panel-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                                </div>
                                            </div>
                                        </div><!-- Sunt aliqua -->
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a href="#faq-3-4" data-parent="#faq-list-3" data-toggle="collapse" class="accordion-toggle collapsed">
                                                    <i class="icon-plus smaller-80" data-icon-hide="icon-minus" data-icon-show="icon-plus"></i>
                                                    &nbsp; Brunch 3 wolf moon tempor sunt aliqua put?
                                                </a>
                                            </div>
                                            <div class="panel-collapse collapse" id="faq-3-4">
                                                <div class="panel-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                                </div>
                                            </div>
                                        </div><!-- Brunch 3 wolf -->
                                    </div>
                                </div><!-- Payment Questions -->
                                <div id="faq-tab-4" class="tab-pane fade in active">
<!--                                    <h4 class="blue">
                                        <i class="purple icon-magic bigger-110"></i>
                                        Miscellaneous Questions
                                    </h4>
                                    <div class="space-8"></div>-->
                                    <div id="frm_load"></div>                                    
                                </div><!-- Miscellaneous Questions -->
                            </div>
                        </div>
                        <!-- PAGE CONTENT ENDS -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.page-content -->
        </div><!-- /.main-content -->
        <div class="ace-settings-container" id="ace-settings-container">
            <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
                <i class="icon-cog bigger-150"></i>
            </div>
            <div class="ace-settings-box" id="ace-settings-box">
                <div>
                    <div class="pull-left">
                        <select id="skin-colorpicker" class="hide">
                            <option data-skin="default" value="#438EB9">#438EB9</option>
                            <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                            <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                            <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                        </select>
                    </div>
                    <span>&nbsp; Choose Skin</span>
                </div>
                <div>
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
                    <label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
                </div>
                <div>
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
                    <label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
                </div>
                <div>
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
                    <label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
                </div>
                <div>
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
                    <label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
                </div>
                <div>
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
                    <label class="lbl" for="ace-settings-add-container">
                        Inside
                        <b>.container</b>
                    </label>
                </div>
            </div>
        </div><!-- /#ace-settings-container -->
    </div><!-- /.main-container-inner -->
    <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
        <i class="icon-double-angle-up icon-only bigger-110"></i>
    </a>
</div><!-- /.main-container -->

<script type="text/javascript">
    jQuery(function($) {
        $('.accordion').on('hide', function (e) {
            $(e.target).prev().children(0).addClass('collapsed');
        });
        $('.accordion').on('show', function (e) {
            $(e.target).prev().children(0).removeClass('collapsed');
        });
        $('div.panel:first div:eq(0) a:first').removeClass('collapsed');
        $('div.panel:first div:eq(1)').addClass('in');
        $('.easy-pie-chart.percentage').each(function(){
            var barColor = $(this).data('color') || '#555';
            var trackColor = '#E2E2E2';
            var size = parseInt($(this).data('size')) || 72;
            $(this).easyPieChart({
                barColor    : barColor,
                trackColor  : trackColor,
                scaleColor  : false,
                lineCap     : 'butt',
                lineWidth   : parseInt(size/10),
                animate     : false,
                size        : size
            }).css('color', barColor);
        });
        <?php 
            $cien = $tm['vt'] - ($sb['vt'] != NULL ? $sb['vt'] : 0) - ($me['vt'] != NULL ? $me['vt'] : 0) - ($co['vt'] != NULL ? $co['vt'] : 0) - ($va['vt'] != NULL ? $va['vt'] : 0);
            $di = ($cien * 100) / $tm['vt'];
            $col1 = ($sb['vt'] * 100) / $tm['vt'];
            $col2 = ($me['vt'] * 100) / $tm['vt'];
            $col3 = ($co['vt'] * 100) / $tm['vt'];
            $col4 = ($va['vt'] * 100) / $tm['vt'];
            echo "\n";
        ?>
        var placeholder = $('#piechart-placeholder').css({'width':'60%', 'height':'120px'});
        var data = [
        <?php echo $sb['vt'] != NULL ? '{ label: "Servicios Básicos", data: '.round($col1,2).',  color: "#68BC31" },'."\n" : '' ?>
        <?php echo $me['vt'] != NULL ? '{ label: "Medicinas",         data: '.round($col2,2).',  color: "#2091CF" },'."\n" : '' ?>
        <?php echo $co['vt'] != NULL ? '{ label: "Comida",            data: '.round($col3,2).',  color: "#AF4E96" },'."\n" : '' ?>
        <?php echo $va['vt'] != NULL ? '{ label: "Varios",            data: '.round($col4,2).',  color: "#DA5430" },'."\n\t" : '' ?>
<?php echo '{ label: "Disponible",        data: '.round($di,2).',  color: "gold" },'."\n" ?>
            ];
        var data2 = new Array();
        <?php echo $sb['vt'] != NULL ? "data2['Servicios Básicos']  = '".MyHelpers::opcion()->dinero($sb['vt'])."';\n" : "" ?>
        <?php echo $me['vt'] != NULL ? "data2['Medicinas']          = '".MyHelpers::opcion()->dinero($me['vt'])."';\n" : "" ?>
        <?php echo $co['vt'] != NULL ? "data2['Comida']             = '".MyHelpers::opcion()->dinero($co['vt'])."';\n" : "" ?>
        <?php echo $va['vt'] != NULL ? "data2['Varios']             = '".MyHelpers::opcion()->dinero($va['vt'])."';\n" : "" ?>
        <?php echo "data2['Disponible']         = '".MyHelpers::opcion()->dinero($cien)."'" ?>;        

        /**
        we saved the drawing function and the data to redraw with different position later when switching to RTL mode dynamically
        so that's not needed actually.
        */
        placeholder.data('chart', data);
        placeholder.data('draw', drawPieChart);
        var $tooltip = $("<div class='tooltip top in'><div class='tooltip-inner'></div></div>").hide().appendTo('body');
        var previousPoint = null;
        placeholder.on('plothover', function (event, pos, item) {
            if(item) {
                if (previousPoint != item.seriesIndex) {
                    previousPoint = item.seriesIndex;
                    var tip = item.series['label'] + " : " + round(item.series['percent'],2) + '% | $ ' + data2[item.series['label']];
                    $tooltip.show().children(0).text(tip);
                    $('.tooltip-inner').css({'max-width':'600px'});
                }
                $tooltip.css({top:pos.pageY + 10, left:pos.pageX + 10});
            } else {
                $tooltip.hide();
                previousPoint = null;
            }
        });        
        drawPieChart(placeholder, data);
        function drawPieChart(placeholder, data, position) {
            $.plot(placeholder, data, {
                series: {
                    pie: {
                        show:   true,
                        tilt:   0.8,
                        highlight: { opacity: 0.25 },
                        stroke: {
                            color: '#fff',
                            width: 2
                        },
                        startAngle: 2
                    }
                },
                legend: {
                    show:                   true,
                    position:               position || "ne", 
                    labelBoxBorderColor:    null,
                    margin:                 [-30,15]
                },
                grid: {
                    hoverable: true,
                    clickable: true
                }
            });
        }
        $('#frm_load').load('<?php echo url_for('@pagos_nuevo') ?>');
    });
</script>