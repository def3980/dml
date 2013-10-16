<?php
    $json = array();
    foreach ($array as $k => $info):
        $json[$k] = $info;
    endforeach;
    echo json_encode($json);
?>