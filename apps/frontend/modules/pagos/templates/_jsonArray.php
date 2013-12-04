<?php
    $json = array();
    foreach ($array as $k => $info) $json[$k] = $info;
    echo json_encode($json);
?>