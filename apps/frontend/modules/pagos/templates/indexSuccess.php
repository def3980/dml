<?php use_javascript('form/jquery.form.js') ?>
<?php use_javascript('JSPersonal/timers.js') ?>
<?php use_javascript('JSPersonal/round.js') ?>
<?php use_javascript('JSPersonal/dump.js') ?>
<?php use_javascript('JSPersonal/validators.js') ?>
<?php use_javascript('autoNumeric/autoNumeric.js') ?>
<style>
    #tblAdm thead th:nth-child(1) {
        background-color: #fff; width: 15%
    }
    #tblAdm thead th:nth-child(2) {
        background-color: #fff; width: 67%
    }
    #tblAdm thead th:nth-child(3) {
        background-color: #fff; width: 18%
    }
    #tblAdm thead th:nth-child(1),
    #tblAdm thead th:nth-child(2),
    #tblAdm thead th:nth-child(3),
    #tblAdm tbody td:nth-child(1) {
        text-align: center;
    }
    #tblAdm tbody td:nth-child(3) {
        text-align: right;
    }
</style>
<div class="navbar navbar-default" id="navbar">
    <script type="text/javascript">
        try{ace.settings.check('navbar' , 'fixed')}catch(e){}
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
                        <i class="icon-tasks"></i><span class="badge badge-grey">4</span>
                    </a>
                    <ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                        <li class="dropdown-header">
                            <i class="icon-ok"></i> 4 Tasks to complete
                        </li>
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
                        <li class="dropdown-header">
                            <i class="icon-warning-sign"></i> 8 Notifications
                        </li>
                        <li>
                            <a href="#">
                                <div class="clearfix">
                                    <span class="pull-left">
                                        <i class="btn btn-xs no-hover btn-pink icon-comment"></i> New Comments
                                    </span>
                                    <span class="pull-right badge badge-info">+12</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="btn btn-xs btn-primary icon-user"></i> Bob just signed up as an editor ...
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="clearfix">
                                    <span class="pull-left">
                                        <i class="btn btn-xs no-hover btn-success icon-shopping-cart"></i> New Orders
                                    </span>
                                    <span class="pull-right badge badge-success">+8</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="clearfix">
                                    <span class="pull-left">
                                        <i class="btn btn-xs no-hover btn-info icon-twitter"></i> Followers
                                    </span>
                                    <span class="pull-right badge badge-info">+11</span>
                                </div>
                            </a>
                        </li>
                        <li><a href="#">See all notifications<i class="icon-arrow-right"></i></a></li>
                    </ul>
                </li>
                <li class="green">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="icon-envelope icon-animated-vertical"></i>
                        <span class="badge badge-success">5</span>
                    </a>
                    <ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                        <li class="dropdown-header"><i class="icon-envelope-alt"></i> 5 Messages</li>
                        <li>
                            <a href="#">
                                <?php echo image_tag('avatars/avatar.png', array('class' => 'msg-photo', 'alt' => 'Alex\'s Avatar')) ?>
                                <span class="msg-body">
                                    <span class="msg-title">
                                        <span class="blue">Alex:</span> Ciao sociis natoque penatibus et auctor ...
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
                                <?php echo image_tag('avatars/avatar3.png', array('class' => 'msg-photo', 'alt' => 'Susan\'s Avatar')) ?>
                                <span class="msg-body">
                                    <span class="msg-title">
                                        <span class="blue">Susan:</span> Vestibulum id ligula porta felis euismod ...
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
                                <?php echo image_tag('avatars/avatar4.png', array('class' => 'msg-photo', 'alt' => 'Bob\'s Avatar')) ?>
                                <span class="msg-body">
                                    <span class="msg-title">
                                        <span class="blue">Bob:</span> Nullam quis risus eget urna mollis ornare ...
                                    </span>
                                    <span class="msg-time">
                                        <i class="icon-time"></i>
                                        <span>3:15 pm</span>
                                    </span>
                                </span>
                            </a>
                        </li>
                        <li><a href="inbox.html">See all messages <i class="icon-arrow-right"></i></a></li>
                    </ul>
                </li>
                <li class="light-blue">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                        <?php echo image_tag('avatars/user.jpg', array('class' => 'nav-user-photo', 'alt' => 'Jason\'s Avatar')) ?>
                        <span class="user-info"><small>Welcome,</small> Jason</span>
                        <i class="icon-caret-down"></i>
                    </a>
                    <ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                        <li><a href="#"><i class="icon-cog"></i>Settings</a></li>
                        <li><a href="#"><i class="icon-user"></i>Profile</a></li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="icon-off"></i>Logout</a></li>
                    </ul>
                </li>
            </ul><!-- /.ace-nav -->
        </div><!-- /.navbar-header -->
    </div><!-- /.container -->
</div>

<div class="main-container" id="main-container">
    <script type="text/javascript">try{ace.settings.check('main-container' , 'fixed')}catch(e){}</script>
    <div class="main-container-inner">
        <div class="main-content" style="margin-left: 0">
            <div class="breadcrumbs" id="breadcrumbs">
                <script type="text/javascript">try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}</script>
                <ul class="breadcrumb">
                    <li><i class="icon-inbox" style="margin-left: 4px; margin-right: 2px; font-size: 20px; position: relative; top: 2px;"></i> Vista actualizada: </li>
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
                    <h1>Pagos realizados
                        <small>
                            <i class="icon-double-angle-right"></i> &nbsp;Efectivo &amp; Tarjeta de cr&eacute;dito
                        </small>
                    </h1>
                </div><!-- /.page-header -->
                <div class="row"><?php if ($pago_ss->getResults()->count()): ?>
                    <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="tabbable tabs-left">
                                    <ul class="nav nav-tabs" id="myTab3">
                                        <li class="active">
                                            <a data-toggle="tab" href="#home3">
                                                <i class="pink icon-dashboard bigger-110"></i> Home
                                            </a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#profile3">
                                                <i class="blue icon-user bigger-110"></i> Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#dropdown13">
                                                <i class="icon-rocket"></i> More
                                            </a>
                                        </li>
                                    </ul>

                                    <div class="tab-content">
                                        <div id="home3" class="tab-pane in active">                                           
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-1">
                                                    <span class="profile-picture">
                                                        <?php echo image_tag('avatars/profile-pic.jpg', array('id' => 'miAvatar', 'class' => 'editable img-responsive', 'alt' => 'Alex\'s Avatar')) ?>
                                                    </span>
                                                </div><!-- /span -->
                                                <div class="col-xs-12 col-sm-11">
                                                    <h4 class="blue">
                                                        <span class="middle">Alex M. Doe</span>
                                                        <span class="label label-purple arrowed-in-right">
                                                            <i class="icon-circle smaller-80 align-middle"></i>
                                                            online
                                                        </span>
                                                    </h4>
                                                    <a href="#modal-form" role="button" class="btn btn-white" data-toggle="modal"> <i class="icon-money"></i> Sumar </a>
                                                </div><!-- /span -->
                                            </div>
                                            <div class="space-6"></div>
                                            <table id="tblAdm" class="table table-striped table-bordered table-condensed">
                                                <thead>
                                                    <tr>
                                                        <th class="center">Fecha</th>
                                                        <th class="hidden-xs">Descripci&oacute;n</th>
                                                        <th>Total</th>
                                                    </tr>
                                                </thead><?php $arr = array(); foreach ($pago_ss->getResults() as $v): $tmp = explode(' ', $v['pa_fecha']); $arr[] = $tmp[0]; endforeach; $fechas = array_count_values($arr); // encuentro el numero de fecha repetidas ?>
                                                <tbody><?php echo "\n"; $cont = 0; foreach ($pago_ss->getResults() as $pagos): $cont++;  $tmp = explode(' ', $pagos['pa_fecha']); ?>
                                                    <tr><?php switch ($cont): 
                                                                case 1: ?>
                                                        <td rowspan="<?php echo $fechas[$tmp[0]] ?>"><?php echo MyHelpers::opcion()->fechaEnEsp($pagos->getPaFecha(),false,true) ?></td>
                                                        <td class="hidden-xs"><i class="icon-double-angle-right"></i> <span data-rel="tooltip" title="<?php echo 'factura_'.$pagos->getPaNumeroFactura().'.pdf' ?>" data-original-title="<?php echo 'factura_'.$pagos->getPaNumeroFactura().'.pdf' ?>" data-placement="right"><?php echo link_to($pagos->getPaDetalle(),'pagos/info?factura='.$pagos->getPaNumeroFactura().'.pdf',array('target' => '_blank')) ?></span></td>                                                        
                                                        <td><span class="text-danger"><?php echo '$ '.MyHelpers::opcion()->dinero($pagos->getPaValorTotal()) ?></span></td>
                                                        <?php   if ($fechas[$tmp[0]] == $cont) $cont = 0; break; ?>
                                                        <?php   case ($cont): ?>
                                                        <td class="hidden-xs" style="text-align: left"><i class="icon-double-angle-right"></i> <span data-rel="tooltip" title="<?php echo 'factura_'.$pagos->getPaNumeroFactura().'.pdf' ?>" data-original-title="<?php echo 'factura_'.$pagos->getPaNumeroFactura().'.pdf' ?>" data-placement="right"><?php echo link_to($pagos->getPaDetalle(),'pagos/info?factura='.$pagos->getPaNumeroFactura().'.pdf',array('target' => '_blank')) ?></span></td>
                                                        <td style="text-align: right"><span class="text-danger"><?php echo '$ '.MyHelpers::opcion()->dinero($pagos->getPaValorTotal()) ?></span></td>                                                        
                                                        <?php   if ($fechas[$tmp[0]] == $cont) $cont = 0; break; endswitch; ?>
                                                    </tr><?php echo "\n"; endforeach; ?>
                                                </tbody>
                                            </table>
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-9">
                                                    <div><?php echo "\n"; if ($pago_ss->haveToPaginate()): ?>                                            
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
                                                        </ul>
                                                        <?php endif; echo "\n"; ?>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-3">
                                                    <div class="profile-user-info">
                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name"> Vista </div>
                                                            <div class="profile-info-value">
                                                                <span><?php echo $pago_ss->getResults()->count() ?> registros</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name"> Total </div>
                                                            <div class="profile-info-value">
                                                                <span><?php echo $pago_ss->getNbResults() ?> resultados</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <pre>
<?php
echo PAGOSTable::getInstance()
        ->createQuery('pa')
            ->addSelect('sum(pa.pa_valor_total) as vt')
            ->where('pa.pa_detalle LIKE "%desayuno%" ')
                ->getSqlQuery();
?>
                                            </pre>
                                        </div>
                                        <div id="profile3" class="tab-pane">
                                            <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid.</p>
                                            <p>Raw denim you probably haven't heard of them jean shorts Austin.</p>
                                        </div>
                                        <div id="dropdown13" class="tab-pane">
                                            <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade.</p>
                                            <p>Raw denim you probably haven't heard of them jean shorts Austin.</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /span -->
                        </div><!-- /row -->
                        <div class="hr hr-double hr-dotted hr18"></div>
                        <script type="text/javascript">
                            var $path_assets = "/images/avatars";//this will be used in gritter alerts containing images
                        </script>
                    <!-- PAGE CONTENT ENDS -->
                    </div><!-- /.col --><?php else: ?>
                    <div class="col-xs-12">
                        <div class="col-sm-12">
                            <div class="widget-box">
                                <div class="widget-header widget-header-flat">
                                    <h4 class="smaller">
                                        <i class="icon-quote-left smaller-80"></i> Aviso actual &nbsp;<i class="icon-quote-right smaller-80"></i>
                                    </h4>
                                </div>
                                <div class="widget-body">
                                    <div class="widget-main">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <blockquote>
                                                    <p>Por el momento no tienes gastos en este mes.</p>
                                                    <small>Felicitaciones... <cite title="Source Title">por ahora.... :-S</cite></small>
                                                </blockquote>
                                            </div>
                                        </div>
                                        <hr>
                                        <address>
                                            <strong>Full Name</strong>
                                            <br>
                                            <a href="mailto:#">first.last@example.com</a>
                                        </address>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><?php endif; ?>
                </div><!-- /.row -->
            </div><!-- /.page-content -->
        </div><!-- /.main-content -->
    </div><!-- /.main-container-inner -->
    <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
        <i class="icon-double-angle-up icon-only bigger-110"></i>
    </a>
</div><!-- /.main-container -->
<div id="modal-form" class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div id="frm" class="modal-body overflow-visible" style="padding: 0"></div>
        </div>
    </div>
</div><!-- PAGE CONTENT ENDS -->
<script type="text/javascript">
    jQuery(function($) {
        /**
        $('#myTab a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
            console.log(e.target.getAttribute("href"));
        })
         */
        $('#frm').load('<?php echo url_for('@pagos_nuevo') ?>');
        $('[data-rel=tooltip]').tooltip();
    });
</script>