
<?php
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $dateParam = date('Y-m-d');
    $week = date('w', strtotime($dateParam));
    $date = new DateTime($dateParam);
    $firstWeek = $date->modify("-".$week." day")->format("Y-m-d");
    $monday = strtotime ( '+1 day' , strtotime ( $firstWeek ) ) ;
    $tuesday = strtotime ( '+2 day' , strtotime ( $firstWeek ) ) ;
    $wednesday = strtotime ( '+3 day' , strtotime ( $firstWeek ) ) ;
    $thursday = strtotime ( '+4 day' , strtotime ( $firstWeek ) ) ;
    $friday = strtotime ( '+5 day' , strtotime ( $firstWeek ) ) ;
    $saturday = strtotime ( '+6 day' , strtotime ( $firstWeek ) ) ;
    $monday = date ( 'Y-m-d' , $monday );
    $tuesday = date ( 'Y-m-d' , $tuesday );
    $wednesday = date ( 'Y-m-d' , $wednesday );
    $thursday = date ( 'Y-m-d' , $thursday );
    $friday = date ( 'Y-m-d' , $friday );
    $saturday = date ( 'Y-m-d' , $saturday );
    echo $firstWeek."</br>";
    echo $monday."</br>";
    echo $tuesday."</br>";
    echo $wednesday."</br>";
    echo $thursday."</br>";
    echo $friday."</br>";
    echo $saturday."</br>";
?>