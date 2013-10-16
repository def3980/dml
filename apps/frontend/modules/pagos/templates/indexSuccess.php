
<!--<h1>Pago ss List</h1>

<table>
  <thead>
    <tr>
      <th>Pa</th>
      <th>Pa numero factura</th>
      <th>Pa fecha</th>
      <th>Pa detalle</th>
      <th>Pa iva</th>
      <th>Pa ice</th>
      <th>Pa valor total</th>
      <th>Pa respaldo</th>
    </tr>
  </thead>
  <tbody>
    <?php /*foreach ($pago_ss as $pagos): ?>
    <tr>
      <td><a href="<?php echo url_for('pagos/edit?pa_id='.$pagos->getPaId()) ?>"><?php echo $pagos->getPaId() ?></a></td>
      <td><?php echo $pagos->getPaNumeroFactura() ?></td>
      <td><?php echo $pagos->getPaFecha() ?></td>
      <td><?php echo $pagos->getPaDetalle() ?></td>
      <td><?php echo $pagos->getPaIva() ?></td>
      <td><?php echo $pagos->getPaIce() ?></td>
      <td><?php echo $pagos->getPaValorTotal() ?></td>
      <td><?php echo link_to('PDF','pagos/info?factura='.$pagos->getPaNumeroFactura().'.pdf',array('target' => '_blank')) ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<a href="<?php echo url_for('pagos/new')*/ ?>">New</a>-->
<style>
    #tblAdm thead th:nth-child(1) {
        background-color: #fff; width: 15%
    }
    #tblAdm thead th:nth-child(2) {
        background-color: #fff; width: 49%
    }
    #tblAdm thead th:nth-child(3),
    #tblAdm thead th:nth-child(4) {
        background-color: #fff; width: 18%
    }
    #tblAdm thead th:nth-child(1),
    #tblAdm thead th:nth-child(2),
    #tblAdm thead th:nth-child(3),
    #tblAdm thead th:nth-child(4),
    #tblAdm tbody td:nth-child(1),
    #tblAdm tbody td:nth-child(3) {
        text-align: center;
    }
    #tblAdm tbody td:nth-child(4){
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
                                                </div><!-- /span -->
                                            </div>
                                            <div class="space-6"></div>
                                            <table id="tblAdm" class="table table-striped table-bordered table-condensed">
                                                <thead>
                                                    <tr>
                                                        <th class="center">Fecha</th>
                                                        <th class="hidden-xs">Descripci&oacute;n</th>
                                                        <th class="hidden-480">IVA | ICE</th>
                                                        <th>Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody><?php echo "\n"; foreach($pago_ss->getResults() as $pagos): ?>
                                                    <tr>
                                                        <td><?php echo MyHelpers::opcion()->fechaEnEsp($pagos->getPaFecha(),false,true) ?></td>
                                                        <td class="hidden-xs"><?php echo link_to($pagos->getPaDetalle(),'pagos/info?factura='.$pagos->getPaNumeroFactura().'.pdf',array('target' => '_blank')) ?></td>
                                                        <td class="hidden-480"><?php echo $pagos->getPaIva() != NULL ? '$ '.MyHelpers::opcion()->dinero($pagos->getPaIva()) : '$ '.MyHelpers::opcion()->dinero(0) ?> | <?php echo $pagos->getPaIce() != NULL ? '$ '.MyHelpers::opcion()->dinero($pagos->getPaIce()) : '$ '.MyHelpers::opcion()->dinero(0) ?></td>
                                                        <td><?php echo '$ '.MyHelpers::opcion()->dinero($pagos->getPaValorTotal()) ?></td>
                                                    </tr><?php echo "\n"; endforeach; ?>
                                                </tbody>
                                            </table>
                                            <div>
                                                <ul class="pagination" style="margin: 0">
                                                    <li class="disabled">
                                                        <a href="#"><i class="icon-double-angle-left"></i></a>
                                                    </li>
                                                    <li class="active"><a href="#">1</a></li>
                                                    <li><a href="#">2</a></li>
                                                    <li><a href="#">3</a></li>
                                                    <li><a href="#">4</a></li>
                                                    <li><a href="#">5</a></li>
                                                    <li><a href="#"><i class="icon-double-angle-right"></i></a></li>
                                                </ul>
                                            </div>
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
<script type="text/javascript">
    jQuery(function($) {
        /**
        $('#myTab a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
            console.log(e.target.getAttribute("href"));
        })
         */
    });
</script>