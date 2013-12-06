<?php
foreach ($pagos as $k => $pa): if (MyHelpers::opcion()->verSoloFecha($pa['pa_fecha']) == MyHelpers::opcion()->verSoloFecha($pa_fecha)): ?>
            <div class="panel panel-default">
                <div class="panel-heading">                    
                    <a href="#faq-list-<?php echo $pa_id ?>-sub-<?php echo ($k + 1) ?>" data-parent="#faq-list-nested-<?php echo $pa_id ?>" data-toggle="collapse" class="accordion-toggle collapsed">
                        <span class="pull-right"><?php echo '$ '.MyHelpers::opcion()->dinero($pa['pa_valor_total']) ?></span>
                        <i class="icon-plus smaller-80 middle" data-icon-hide="icon-minus" data-icon-show="icon-plus"></i>
                        <sup><?php echo MyHelpers::opcion()->verHoraMin($pa['pa_fecha']) ?></sup> <i class="icon-double-angle-down"></i>
                        <?php echo $pa['pa_detalle'] ?>
                    </a>
                </div>
                <div class="panel-collapse collapse" id="faq-list-<?php echo $pa_id ?>-sub-<?php echo ($k + 1) ?>">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-12 col-sm-11">
                                <ul class="list-unstyled">
                                    <?php 
                                        $binarios = BINARIOSTable::EntidadBINARIOS()->where('bi.pagos_pa_id = ?', array($pa['pa_id']));
                                        foreach ($binarios as $bi): 
                                    ?>
                                    <li><i class="icon-caret-right red"></i><?php echo count($bi->getBiBin()) ? : '' ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <div class="col-xs-12 col-sm-1" style="padding-right: 1px">
                                <div class="profile-contact-links tools action-buttons pull-right" style="padding: 0">
                                    <a href="#" class="blue"><i class="icon-pencil bigger-125"></i></a>
                                    <a href="#" class="red"><i class="icon-remove bigger-140"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- <?php echo $pa['pa_detalle'] ?> -->
<?php endif; endforeach; ?>