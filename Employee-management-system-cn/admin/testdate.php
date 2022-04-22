
<?php

    $day = date('Y-m-d', strtotime(date('Y-m-01', strtotime("now"))));
    $dautuan1 = date('Y-m-d', strtotime(date('Y-m-01', strtotime("now"))));
    $cuoituan1 = date('Y-m-d', strtotime(date('Y-m-07', strtotime("now"))));
    $dautuan2 = date('Y-m-d', strtotime(date('Y-m-08', strtotime("now"))));
    $cuoituan2 = date('Y-m-d', strtotime(date('Y-m-15', strtotime("now"))));
    $dautuan3 = date('Y-m-d', strtotime(date('Y-m-16', strtotime("now"))));
    $cuoituan3 = date('Y-m-d', strtotime(date('Y-m-23', strtotime("now"))));
    $dautuan4 = date('Y-m-d', strtotime(date('Y-m-24', strtotime("now"))));
    $cuoituan4 = date("Y-m-t");
    echo $dautuan1. " ";
    echo $cuoituan1. " ";
    echo $dautuan2. " ";
    echo $cuoituan2. " ";
    echo $dautuan3. " ";
    echo $cuoituan3. " ";
    echo $dautuan4. " ";
    echo $cuoituan4. " ";
?>