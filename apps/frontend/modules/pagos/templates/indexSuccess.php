<?php use_javascript('form/jquery.form.js') ?>
<?php use_javascript('JSPersonal/timers.js') ?>
<?php use_javascript('JSPersonal/round.js') ?>
<?php use_javascript('JSPersonal/dump.js') ?>
<?php use_javascript('JSPersonal/validators.js') ?>
<?php use_javascript('autoNumeric/autoNumeric.js') ?>
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
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <h1>Pagos realizados
                                <small>
                                    <i class="icon-double-angle-right"></i> &nbsp;Efectivo &amp; Tarjeta de cr&eacute;dito
                                </small>
                            </h1>
                        </div>
                        <div class="col-xs-12 col-sm-2">
                            <h1>Meses<small><i class="icon-double-angle-right"></i></small>
                                <select class="width-80" id="meses" data-placeholder="Choose a Country..." style="display: none;">
                                    <option value="10">Octubre</option>
                                    <option value="9">Septiembre</option>
                                    <option value="8">Agosto</option>
                                </select>
                            </h1>
                        </div>
                        <div class="col-xs-12 col-sm-4"></div>
                    </div>
                </div><!-- /.page-header -->
                <div class="row">
                    <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->
                    
                        <div class="tabbable">
                            <ul class="nav nav-tabs padding-18 tab-size-bigger" id="myTab">
                                <li class="active">
                                    <a data-toggle="tab" href="#faq-tab-1">
                                        <i class="blue icon-question-sign bigger-120"></i>
                                        General
                                    </a>
                                </li>
                                <li class="">
                                    <a data-toggle="tab" href="#faq-tab-2">
                                        <i class="green icon-user bigger-120"></i>
                                        Account
                                    </a>
                                </li>
                                <li class="">
                                    <a data-toggle="tab" href="#faq-tab-3">
                                        <i class="orange icon-credit-card bigger-120"></i>
                                        Payments
                                    </a>
                                </li>
                                <li class="dropdown">
                                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                        <i class="purple icon-magic bigger-120"></i>
                                        Misc
                                        <i class="icon-caret-down"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-lighter dropdown-125">
                                        <li>
                                            <a data-toggle="tab" href="#faq-tab-4"> Affiliates </a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#faq-tab-4"> Merchants </a>
                                        </li>
                                    </ul>
                                </li><!-- /.dropdown -->
                            </ul>
                            <div class="tab-content no-border padding-24">
                                <div id="faq-tab-1" class="tab-pane fade active in">
                                    <h4 class="blue">
                                        <i class="icon-ok bigger-110"></i>
                                        General Questions
                                    </h4>
                                    <div class="space-8"></div>
                                    <div id="faq-list-1" class="panel-group accordion-style1 accordion-style2">
                                        <?php echo "\n"; $cont = 0; $date = ""; foreach ($pago_ss->getResults() as $pagos): $cont++;  $tmp = explode(' ', $pagos['pa_fecha']); ?>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a href="#faq-<?php echo $pagos->getPaId() ?>" data-parent="#faq-list-1" data-toggle="collapse" class="accordion-toggle collapsed">
                                                    <i class="icon-chevron-left pull-right" data-icon-hide="icon-chevron-down" data-icon-show="icon-chevron-left"></i>
                                                    <i class="icon-sort-by-attributes-alt"></i>
                                                    &nbsp; <?php echo MyHelpers::opcion()->fechaEnEsp($pagos->getPaFecha(), false) ?>
                                                </a>
                                            </div>
                                            <div class="panel-collapse collapse" id="faq-<?php echo $pagos->getPaId() ?>">
                                                <div class="panel-body">
                                                    <div id="faq-list-nested-1" class="panel-group accordion-style1 accordion-style2">                                                        
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                <a href="#faq-list-1-sub-1" data-parent="#faq-list-nested-1" data-toggle="collapse" class="accordion-toggle collapsed">
                                                                    <i class="icon-plus smaller-80 middle" data-icon-hide="icon-minus" data-icon-show="icon-plus"></i>
                                                                    &nbsp;
                                                                    <?php echo $pagos->getPaDetalle() ?>
                                                                </a>
                                                            </div>
                                                            <div class="panel-collapse collapse" id="faq-list-1-sub-1">
                                                                <div class="panel-body">
                                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                                <div id="faq-tab-2" class="tab-pane fade">
                                    <h4 class="blue">
                                        <i class="green icon-user bigger-110"></i>
                                        Account Questions
                                    </h4>
                                    <div class="space-8"></div>
                                    <div id="faq-list-2" class="panel-group accordion-style1 accordion-style2">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a href="#faq-2-1" data-parent="#faq-list-2" data-toggle="collapse" class="accordion-toggle">
                                                    <i class="smaller-80 icon-chevron-down align-top" data-icon-hide="icon-chevron-down align-top" data-icon-show="icon-chevron-right"></i>
                                                    &nbsp;
                                                    Enim eiusmod high life accusamus terry richardson?
                                                </a>
                                            </div>
                                            <div class="panel-collapse in" id="faq-2-1" style="height: auto;">
                                                <div class="panel-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a href="#faq-2-2" data-parent="#faq-list-2" data-toggle="collapse" class="accordion-toggle collapsed">
                                                    <i class="smaller-80 icon-chevron-right" data-icon-hide="icon-chevron-down align-top" data-icon-show="icon-chevron-right"></i>
                                                    &nbsp;
                                                    Single-origin coffee nulla assumenda shoreditch et?
                                                </a>
                                            </div>
                                            <div class="panel-collapse collapse" id="faq-2-2" style="height: 0px;">
                                                <div class="panel-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a href="#faq-2-3" data-parent="#faq-list-2" data-toggle="collapse" class="accordion-toggle collapsed">
                                                    <i class="icon-chevron-right middle smaller-80" data-icon-hide="icon-chevron-down align-top" data-icon-show="icon-chevron-right"></i>
                                                    &nbsp;
                                                    Sunt aliqua put a bird on it squid?
                                                </a>
                                            </div>
                                            <div class="panel-collapse collapse" id="faq-2-3">
                                                <div class="panel-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a href="#faq-2-4" data-parent="#faq-list-2" data-toggle="collapse" class="accordion-toggle collapsed">
                                                    <i class="icon-chevron-right smaller-80" data-icon-hide="icon-chevron-down align-top" data-icon-show="icon-chevron-right"></i>
                                                    &nbsp;
                                                    Brunch 3 wolf moon tempor sunt aliqua put?
                                                </a>
                                            </div>
                                            <div class="panel-collapse collapse" id="faq-2-4">
                                                <div class="panel-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                                                    <i class="smaller-80 icon-plus" data-icon-hide="icon-minus" data-icon-show="icon-plus"></i>
                                                    &nbsp;
                                                    Enim eiusmod high life accusamus terry richardson?
                                                </a>
                                            </div>
                                            <div class="panel-collapse collapse" id="faq-3-1" style="height: 0px;">
                                                <div class="panel-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a href="#faq-3-2" data-parent="#faq-list-3" data-toggle="collapse" class="accordion-toggle collapsed">
                                                    <i class="icon-plus smaller-80" data-icon-hide="icon-minus" data-icon-show="icon-plus"></i>
                                                    &nbsp;
                                                    Single-origin coffee nulla assumenda shoreditch et?
                                                </a>
                                            </div>
                                            <div class="panel-collapse collapse" id="faq-3-2">
                                                <div class="panel-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a href="#faq-3-3" data-parent="#faq-list-3" data-toggle="collapse" class="accordion-toggle collapsed">
                                                    <i class="icon-plus smaller-80" data-icon-hide="icon-minus" data-icon-show="icon-plus"></i>
                                                    &nbsp;
                                                    Sunt aliqua put a bird on it squid?
                                                </a>
                                            </div>
                                            <div class="panel-collapse collapse" id="faq-3-3">
                                                <div class="panel-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a href="#faq-3-4" data-parent="#faq-list-3" data-toggle="collapse" class="accordion-toggle collapsed">
                                                    <i class="icon-plus smaller-80" data-icon-hide="icon-minus" data-icon-show="icon-plus"></i>
                                                    &nbsp;
                                                    Brunch 3 wolf moon tempor sunt aliqua put?
                                                </a>
                                            </div>
                                            <div class="panel-collapse collapse" id="faq-3-4">
                                                <div class="panel-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="faq-tab-4" class="tab-pane fade">
                                    <h4 class="blue">
                                        <i class="purple icon-magic bigger-110"></i>
                                        Miscellaneous Questions
                                    </h4>
                                    <div class="space-8"></div>
                                    <div id="faq-list-4" class="panel-group accordion-style1 accordion-style2">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a href="#faq-4-1" data-parent="#faq-list-4" data-toggle="collapse" class="accordion-toggle collapsed">
                                                    <i class="icon-hand-right" data-icon-hide="icon-hand-down" data-icon-show="icon-hand-right"></i>
                                                    &nbsp;
                                                    Enim eiusmod high life accusamus terry richardson?
                                                </a>
                                            </div>
                                            <div class="panel-collapse collapse" id="faq-4-1">
                                                <div class="panel-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a href="#faq-4-2" data-parent="#faq-list-4" data-toggle="collapse" class="accordion-toggle collapsed">
                                                    <i class="icon-frown bigger-120" data-icon-hide="icon-smile" data-icon-show="icon-frown"></i>
                                                    &nbsp;
                                                    Single-origin coffee nulla assumenda shoreditch et?
                                                </a>
                                            </div>
                                            <div class="panel-collapse collapse" id="faq-4-2">
                                                <div class="panel-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a href="#faq-4-3" data-parent="#faq-list-4" data-toggle="collapse" class="accordion-toggle collapsed">
                                                    <i class="icon-plus smaller-80" data-icon-hide="icon-minus" data-icon-show="icon-plus"></i>
                                                    &nbsp;
                                                    Sunt aliqua put a bird on it squid?
                                                </a>
                                            </div>
                                            <div class="panel-collapse collapse" id="faq-4-3">
                                                <div class="panel-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a href="#faq-4-4" data-parent="#faq-list-4" data-toggle="collapse" class="accordion-toggle collapsed">
                                                    <i class="icon-plus smaller-80" data-icon-hide="icon-minus" data-icon-show="icon-plus"></i>
                                                    &nbsp;
                                                    Brunch 3 wolf moon tempor sunt aliqua put?
                                                </a>
                                            </div>
                                            <div class="panel-collapse collapse" id="faq-4-4">
                                                <div class="panel-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="hr hr-double hr-dotted hr18"></div>
                        <script type="text/javascript">
                            var $path_assets = "/images/avatars";//this will be used in gritter alerts containing images
                        </script>
                    <!-- PAGE CONTENT ENDS -->
                    </div><!-- /.col -->
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
        $("#meses").chosen();
        $("#meses").next('div:first').css({'width':'100%'});
    });
</script>