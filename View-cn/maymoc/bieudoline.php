<?php 

include "../Model/DBconfig.php";
$db = new Database();
$db -> connect();
session_start();

if(isset($_GET['id'])){
           $id = $_GET['id'];
           $table = "tiendomaymoc";
           $dataID = $db->getDataID($table,$id);

        $tablee = 'tiendo';
        $bophan = $dataID['bophan'];
        $tenmay = $dataID['tenmay'];
        $ngaybatdau = $dataID['ngaybatdau'];
        $datatiendo = $db->getDatatiendo($tablee,$tenmay,$ngaybatdau);
       
       }
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $table = 'tiendomaymoc';
            $dataID = $db->getDataID($table,$id); 
        }

$id = $_GET['id'];

$dataID['tiendo'];
$tim = strpos($dataID['tiendo'], '%');
$tiendo = substr($dataID['tiendo'], 0, $tim);
$ngaybatdau = $dataID['ngaybatdau'];
$ngaydukien = $dataID['ngaydukien'];
$catthang = substr($ngaybatdau, 5, -3);
$catthang1 = substr($ngaydukien, 5, -3);
$catnam = substr($ngaybatdau, 0, 4);
$catnam1 = substr($ngaydukien, 0, 4);
$catngay = substr($ngaybatdau, -2, 2);
$catngay1 = substr($ngaydukien, -2, 2);
$nambatdau = $catnam;
$namdukien = $catnam1;
if($catthang==11||$catthang==12||$catthang==10)
{
    $thangbatdau = $catthang;
}else
{
    $thangbatdau = substr($catthang,1);
}
if($catngay==11||$catngay==12||$catngay==10)
{
	$ngay = $catngay;
}
else{
	$ngay = substr($catngay,1);
}
if($catthang1==11||$catthang1==12||$catthang1==10)
{
    $thangdukien = $catthang1;
}else
{
    $thangdukien = substr($catthang1,1);
}
if($catngay1==11||$catngay1==12||$catngay1==10)
{
	$ngay1 = $catngay1;
}
else{
	$ngay1 = substr($catngay1,-2,2);
}
$ngayhientai = date("j");  
$thanghientai = date("n");
$namhientai = date("Y");


        $tablee = 'tiendoline';
        $table100 = 'tiendomaymoc';
        $tiendomaymoc1 = 'tiendomaymoc1';
        $tenmay = $dataID['tenmay'];
        $ngaybatdau = $dataID['ngaybatdau'];
        $datatiendo = $db->getDatatiendo($tablee,$tenmay,$ngaybatdau);
        $datatiendo2 = $db->getDatatiendo($table100,$tenmay,$ngaybatdau);
        $bophanline = $db->getDataBoPhanLine($tiendomaymoc1,$tenmay,$bophan);

        $tablee1 = 'tiendoquydinhline';
        $datatiendo1 = $db->getDatatiendo1($tablee1,$tenmay,$ngaybatdau);
      
        $a = array(10);
        $b = 0;
        foreach ($bophanline as $key3) {
            $b++;
            $a[$b] = $key3['tiendo'];
           
        }


        $c = array(10);
        $d = 0;
        foreach ($bophanline as $key4) {
            $d++;
            $c[$d] = $key4['id'];
           
        }

       
        $dau = $a[1];
        $ch = substr($dau, 0, -1);
        $tong1 = (($ch*10)/100);
        
        

        $dau2 = $a[2];
        $ch2 = substr($dau2, 0, -1);
        $tong2 = (($ch2*10)/100);

        $dau3 = $a[3];
        $ch3 = substr($dau3, 0, -1);
        $tong3 = (($ch3*10)/100);

        $dau4 = $a[4];
        $ch4 = substr($dau4, 0, -1);
        $tong4 = (($ch4*10)/100);

        $dau5 = $a[5];
        $ch5 = substr($dau5, 0, -1);
        $tong5 = (($ch5*10)/100);

        $dau6 = $a[6];
        $ch6 = substr($dau6, 0, -1);
        $tong6 = (($ch6*10)/100);
        
        $dau7 = $a[7];
        $ch7 = substr($dau7, 0, -1);
        $tong7 = (($ch7*10)/100);
        
        $dau8 = $a[8];
        $ch8 = substr($dau8, 0, -1);
        $tong8 = (($ch8*10)/100);
        
        $dau9 = $a[9];
        $ch9 = substr($dau9, 0, -1);
        $tong9 = (($ch9*10)/100);
        
        $dau10 = $a[10];
        $ch10 = substr($dau10, 0, -1);
        $tong10 = (($ch10*10)/100);
      

        $tong = $tong1+$tong2+$tong3+$tong4+$tong5+$tong6+$tong7+$tong8+$tong9+$tong10;
        

       $table = 'tiendomaymoc';
       $id = $_GET['id'];
       $dataID = $db->getDataID($table,$id); 
       $tiendo = $dataID['tiendo'];
       $tiendo1 = substr($tiendo, 0, -1);

       $ngayhoanthanh =  date("Y-m-d");

       
       $date1 = $ngaybatdau;
       $date2 = $ngaydukien;
       $diff = abs(strtotime($date2) - strtotime($date1));
       $hours = $diff / (60 * 60);
       
       

       $date3 = $ngaybatdau;
       $date4 = $ngayhoanthanh;
       $diff1 = abs(strtotime($date4) - strtotime($date3));
       $hours1 = $diff1 / (60 * 60);


         if(isset($_POST['submitmay1']))
        {
        $tentiendo = 'may1';
        $tiendo = $_POST['tongmay1'].'%';
        if($db->Updattiendo1($tablee,$tentiendo,$tiendo,$tenmay,$ngaybatdau)){
            header('Refresh:0');
        }
        }
        if(isset($_POST['submitmay2']))
        {
            $tentiendo = 'may2';
            $tiendo = $_POST['tongmay2'].'%';
            if($db->Updattiendo1($tablee,$tentiendo,$tiendo,$tenmay,$ngaybatdau)){
                
                header('Refresh:0');
               }

        }

         
        if(isset($_POST['submitmay3']))
        {
        $tentiendo = 'may3';
        $tiendo = $_POST['tongmay3'].'%';
        if($db->Updattiendo1($tablee,$tentiendo,$tiendo,$tenmay,$ngaybatdau)){
            header('Refresh:0');
        }
        }

        if(isset($_POST['submitmay4']))
        {
        $tentiendo = 'may4';
        $tiendo = $_POST['tongmay4'].'%';
        if($db->Updattiendo1($tablee,$tentiendo,$tiendo,$tenmay,$ngaybatdau)){
            header('Refresh:0');
        }
        }
        
        if(isset($_POST['submitmay5']))
        {
        $tentiendo = 'may5';
        $tiendo = $_POST['tongmay5'].'%';
        if($db->Updattiendo1($tablee,$tentiendo,$tiendo,$tenmay,$ngaybatdau)){
            header('Refresh:0');
        }
        }
        if(isset($_POST['submitmay6']))
        {
        $tentiendo = 'may6';
        $tiendo = $_POST['tongmay6'].'%';
        if($db->Updattiendo1($tablee,$tentiendo,$tiendo,$tenmay,$ngaybatdau)){
            header('Refresh:0');
        }
        }
        if(isset($_POST['submitmay7']))
        {
        $tentiendo = 'may7';
        $tiendo = $_POST['tongmay7'].'%';
        if($db->Updattiendo1($tablee,$tentiendo,$tiendo,$tenmay,$ngaybatdau)){
            header('Refresh:0');
        }
        }
        if(isset($_POST['submitmay8']))
        {
        $tentiendo = 'may8';
        $tiendo = $_POST['tongmay8'].'%';
        if($db->Updattiendo1($tablee,$tentiendo,$tiendo,$tenmay,$ngaybatdau)){
            header('Refresh:0');
        }
        }
        if(isset($_POST['submitmay9']))
        {
        $tentiendo = 'may9';
        $tiendo = $_POST['tongmay9'].'%';
        if($db->Updattiendo1($tablee,$tentiendo,$tiendo,$tenmay,$ngaybatdau)){
            header('Refresh:0');
        }
        }
        if(isset($_POST['submitmay10']))
        {
        $tentiendo = 'may10';
        $tiendo = $_POST['tongmay10'].'%';
        if($db->Updattiendo1($tablee,$tentiendo,$tiendo,$tenmay,$ngaybatdau)){
            header('Refresh:0');
        }
        }
        $tongline = $tong.'%';
        $db->UpdateTienDo($id,$tongline);

if(isset($_GET['id'])){
           $id = $_GET['id'];
           $table = "tiendomaymoc";
           $dataID = $db->getDataID($table,$id);

           $ketqua = $dataID['tiendo'];
             $chuoidau = $dataID['tiendo'];
        $chuoi = substr($chuoidau, 0, -1);
       }
       
          $hoanthanh = $dataID['ngayhoanthanh'];
        if($tiendo1 == 100 && $hoanthanh == "")
        { 
          $hieusuat = floor((100 * $hours) / $hours1).'%';
          $db->Updatehieusuat($table,$hieusuat,$id);
          $db->Updatehoanthanh($table,$ngayhoanthanh,$id);
        }



$tableusersview = 'usersview';
$matkhau = $db->getAllData($tableusersview);


$matkhau2 = array();
$a = 0;
foreach ($matkhau as $keyy) {
    $a++;
    $matkhau1[$a] = $keyy['password'];
}


?>

<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript" src="../codejavascript/script.js"></script>
    <script type="text/javascript" src="../canvasjs/canvasjs.min.js"></script>
    <script type="text/javascript" src="../canvasjs/canvasjs.react.js"></script>
    <link rel="stylesheet" type="text/css" href="../bootstrap-5/css/bootstrap.min.css">
    <script type="text/javascript" src="../canvasjs/jquery.canvasjs.min.js"></script>
    <title>本月每天 點名</title>
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
    animationEnabled: true,
    exportEnabled: true,
    zoomEnabled: true,
    theme: "light1",
    title:{
         fontFamily: "Times New Roman",
         fontSize: 50,
         // fontWeight: "bold",
        text: "本月每天 點名 <?php echo $datatiendo1['tenmay'];  ?>"

    },
    toolTip: {
        shared: true
    },
    axisX: {
        title: "日月年",
        crosshair: {
            enabled: true,
            snapToDataPoint: true
        }
    },
    axisY: {
        title: "進度(%)",
        minimum: 1,
        maximum: 100,
        titleFontColor: "#4F81BC",
        lineColor: "#4F81BC",
        tickColor: "#4F81BC",
         crosshair: {
            enabled: true
        }
    },
    axisY2: {
        title: "时间",
         valueFormatString: "D-MM-YYYY",
        titleFontColor: "#C0504E",
        lineColor: "#C0504E",
        tickColor: "#C0504E"
    },
    legend:{
        cursor:"pointer",
        verticalAlign: "bottom",
        horizontalAlign: "left",
        dockInsidePlotArea: true,
    },
    data: [{
        type: "spline",
        name: "進度",
        lineColor: "red",
        showInLegend: true,
        indexLabel: "{y}",
        markerType: "square",
        indexLabelFontSize: 16,
        yValueFormatString: "#,##0.0\"%\"",
        dataPoints: [
            { label: "<?php echo $datatiendo1['may1']; ?>", y: <?php echo $ch; ?> },
            { label: "<?php echo $datatiendo1['may2']; ?>", y: <?php echo $ch2; ?>},
            { label: "<?php echo $datatiendo1['may3']; ?>",  y: <?php echo $ch3; ?> },
            { label: "<?php echo $datatiendo1['may4']; ?>",  y: <?php echo $ch4; ?> },
            { label: "<?php echo $datatiendo1['may5']; ?>",  y: <?php echo $ch5; ?> },
            { label: "<?php echo $datatiendo1['may6']; ?>",  y: <?php echo $ch6; ?> },
            { label: "<?php echo $datatiendo1['may7']; ?>",  y: <?php echo $ch7; ?> },
            { label: "<?php echo $datatiendo1['may8']; ?>",  y: <?php echo $ch8; ?> },
            { label: "<?php echo $datatiendo1['may9']; ?>",  y: <?php echo $ch9; ?>},
            { label: "<?php echo $datatiendo1['may10']; ?>",  y: <?php echo $ch10; ?> }
        ]
    },
    {
        type: "spline",  
        axisYType: "secondary",
        name: "时间",
        dataPoints: [
             { label: "<?php echo $datatiendo1['may1']; ?>", y: "<?php echo $datatiendo1['ngaybatdau']; ?><?php echo " -> ".$datatiendo2['ngaydukien']; ?>" },
            { label: "<?php echo $datatiendo1['may2']; ?>", y: "<?php echo $datatiendo1['ngaybatdau']; ?><?php echo " -> ".$datatiendo2['ngaydukien']; ?>"},
            { label: "<?php echo $datatiendo1['may3']; ?>",  y:"<?php echo $datatiendo1['ngaybatdau']; ?><?php echo " -> ".$datatiendo2['ngaydukien']; ?>" },
            { label: "<?php echo $datatiendo1['may4']; ?>",  y: "<?php echo $datatiendo1['ngaybatdau']; ?><?php echo " -> ".$datatiendo2['ngaydukien']; ?>" },
            { label: "<?php echo $datatiendo1['may5']; ?>",  y:"<?php echo $datatiendo1['ngaybatdau']; ?><?php echo " -> ".$datatiendo2['ngaydukien']; ?>" },
            { label: "<?php echo $datatiendo1['may6']; ?>",  y: "<?php echo $datatiendo1['ngaybatdau']; ?><?php echo " -> ".$datatiendo2['ngaydukien']; ?>" },
            { label: "<?php echo $datatiendo1['may7']; ?>",  y: "<?php echo $datatiendo1['ngaybatdau']; ?><?php echo " -> ".$datatiendo2['ngaydukien']; ?>" },
            { label: "<?php echo $datatiendo1['may8']; ?>",  y: "<?php echo $datatiendo1['ngaybatdau']; ?><?php echo " -> ".$datatiendo2['ngaydukien']; ?>" },
            { label: "<?php echo $datatiendo1['may9']; ?>",  y: "<?php echo $datatiendo1['ngaybatdau']; ?><?php echo " -> ".$datatiendo2['ngaydukien']; ?>"},
            { label: "<?php echo $datatiendo1['may10']; ?>",  y: "<?php echo $datatiendo1['ngaybatdau']; ?><?php echo " -> ".$datatiendo2['ngaydukien']; ?>" }
        ]
    }]
});
chart.render();

}
</script>
  <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

	<section class="packages" id="packages">

    <div style="width: 100%;height: 70px;">
        <h2><a href="../Controller/index.php?action=test2-cn#book" style="font-size: 25px;" class="btn btn-success">菜單</a></h2>
        
       
    </div>
     <div class="box-container" style="">
        <div id="chartContainer" style="height: 400px; width: 100%;"></div>
     </div>
      <div style="width: 100%; height: 600px;overflow-x: auto;overflow-y: 300px; margin-top: 10px;" class="table" id="tableselectdata" style="">
        <div style="">
            <h2 style="text-align: center;">進度 <?php echo $datatiendo1['tenmay'];  ?></h2>
        </div>
        
         <table style="margin-top: 1%;width: 100%;" class="table">
                      <thead>
                        <tr style="text-align:center;height: 50px;background: #ffed86;">
                          <th style="width: 8%;border: 1px solid;font-size: 20px;" scope="col">#</th>
                          <th style="width: 7%;border: 1px solid;font-size: 20px;" scope="col"><?php echo $datatiendo1['may1']; ?></th>
                          <th style="width: 7%;border: 1px solid;font-size: 20px;" scope="col"><?php echo $datatiendo1['may2']; ?></th>
                          <th style="width: 7%;border: 1px solid;font-size: 20px;" scope="col"><?php echo $datatiendo1['may3']; ?></th>
                          <th style="width: 7%;border: 1px solid;font-size: 20px;" scope="col"><?php echo $datatiendo1['may4']; ?></th>
                          <th style="width: 7%;border: 1px solid;font-size: 20px;" scope="col"><?php echo $datatiendo1['may5']; ?></th>
                          <th style="width: 7%;border: 1px solid;font-size: 20px;" scope="col"><?php echo $datatiendo1['may6']; ?></th>
                          <th style="width: 7%;border: 1px solid;font-size: 20px;" scope="col"><?php echo $datatiendo1['may7']; ?></th>
                          <th style="width: 7%;border: 1px solid;font-size: 20px;" scope="col"><?php echo $datatiendo1['may8']; ?></th>
                          <th style="width: 7%;border: 1px solid;font-size: 20px;" scope="col"><?php echo $datatiendo1['may9']; ?></th>
                          <th style="width: 7%;border: 1px solid;font-size: 20px;" scope="col"><?php echo $datatiendo1['may10']; ?></th>
                          <th style="width: 7%;border: 1px solid;font-size: 20px;" scope="col">Tổng</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr style="text-align:center;height: 50px;">
                          <th style="font-size: 20px;">進度</th>
                          <?php $count = 0;
                          foreach ($bophanline as $key1) {
                            $count++;
                          ?>
                          <td style="border: 1px solid"><a href="../Controller/index.php?action=bieudoline1-cn&id=<?php echo $c[$count]; ?>" class="btn btn-primary may<?php echo $count; ?>" data-bs-whatever="Máy <?php echo $count; ?>"><?php echo $key1['tiendo'];  ?></a></td>
                          <?php } ?>
                          <td ></td>
                        </tr>
                         <tr style="background: #9BC86A;text-align:center;line-height: 50px;">
                          <th style="border: 1px solid;font-size: 20px;">總進度</th>
                          <td style="border: 1px solid;font-size: 20px;"><?php echo $tong1.'%'; ?></td>
                          <td style="border: 1px solid;font-size: 20px;"><?php echo $tong2.'%'; ?></td>
                          <td style="border: 1px solid;font-size: 20px;"><?php echo $tong3.'%'; ?></td>
                           <td style="border: 1px solid;font-size: 20px;"><?php echo $tong4.'%'; ?></td>
                          <td style="border: 1px solid;font-size: 20px;"><?php echo $tong5.'%'; ?></td>
                          <td style="border: 1px solid;font-size: 20px;"><?php echo $tong6.'%'; ?></td>
                           <td style="border: 1px solid;font-size: 20px;"><?php echo $tong7.'%'; ?></td>
                          <td style="border: 1px solid;font-size: 20px;"><?php echo $tong8.'%'; ?></td>
                          <td style="border: 1px solid;font-size: 20px;"><?php echo $tong9.'%'; ?></td>
                          <td style="border: 1px solid;font-size: 20px;"><?php echo $tong10.'%'; ?></td>
                          <td style="border: 1px solid;font-size: 20px;"><button class="btn btn-danger"><?php echo $tong.'%'; ?></button></td>
                        </tr>
                      </tbody>
         </table> 

        <div>
            <h2 style="text-align:center;margin-top: 1%;">總進度 <?php echo $datatiendo1['tenmay'];  ?></h2>
        </div>
        
            <table style=" width: 100%; margin-bottom: 20px;margin-top: 1%;" name="tabletable" id="idtable">
                 <thead>
            <tr style=" background: #ffed86;height: 50px;text-align:center;">
                <th style="font-size: 20px;  width: 4px;border: 1px solid;">#</th>
                <th style="font-size: 20px; width: 30px;border: 1px solid;">機台名稱</th>    
                <th style="font-size: 20px; width: 5px;border: 1px solid;">進度</th>
                <th style="font-size: 20px; width: 40px;border: 1px solid;">開始日期</th>
                <th style="font-size: 20px; width: 5px;border: 1px solid;">结束日</th>
                <th style="font-size: 20px; width: 40px;border: 1px solid;">預期日期</th>
                <th style="font-size: 20px; width: 4px;border: 1px solid;">时间</th>
                <th style="font-size: 20px; width: 4px;border: 1px solid;">效率</th>
                <th style="font-size: 20px; width: 5px;border: 1px solid;">部門</th>
                <th style="font-size: 20px; width: 100px;border: 1px solid;">成員</th>
                <th style="font-size: 20px; width: 50px;border: 1px solid;">#</th>
            </tr>
        </thead>
           <tbody>
            <tr style="background: white;height: 50px;text-align:center;">
                <td style='border: 1px solid;font-size: 20px; '>1</td>
                <td style='border: 1px solid;font-size: 20px; '> <?php echo $dataID['tenmay']; ?></td>  
                <td style='border: 1px solid;font-size: 20px;'><?php echo $tong.'%'; ?></td>
                <td style='border: 1px solid;font-size: 20px;'><?php echo$dataID['ngaybatdau']; ?></td>

                <?php if($tiendo1 == 100)
                { 
                ?>
                <td style='border: 1px solid;font-size: 20px;'><?php echo $dataID['ngayhoanthanh']; ?></td>           
                <?php
                 }else{
                ?>                
                <td style='border: 1px solid;font-size: 20px;'>没完成</td>
                <?php } ?>

                <td style='border: 1px solid;font-size: 20px; '><?php echo $dataID['ngaydukien']; ?></td>

                 <?php if($tiendo1 == 100){ ?>
                <td style='border: 1px solid;font-size: 20px; '><?php echo $hours1+1; ?></td>
                <?php }else{ ?>
                <td style='border: 1px solid;font-size: 20px; '>没完成</td>
                <?php } ?>


                <?php if($tiendo1 == 100){ ?>
                <td style='border: 1px solid; font-size: 20px;'><?php echo $dataID['hieusuat']; ?></td>
                <?php }else{
                ?>
                <td style='border: 1px solid; font-size: 20px;'>没完成</td>
                <?php } ?>

                <td style='border: 1px solid;font-size: 20px; '><?php echo$dataID['bophan']; ?></td>
                <td style='border: 1px solid;font-size: 20px; '><?php echo$dataID['nhomthuchien']; ?></td>
                <td style='border: 1px solid;font-size: 20px; '>

                <?php if($dataID['tiendo']=='100%')
                       {
                     ?> 
                 </br>
                    <a style="text-decoration: none;" data-bs-toggle="modal" data-bs-target="#exampleModal1" href="" title="xóa">删除</a>

                 <?php } ?> 
                </td>             
            </tr>

            </tbody>
        </table>
         
            
            </div>
</section>
</body>

    

<!-- edit -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">入密碼</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">號碼:</label>
            <input type="password" class="form-control" id="idmatkhau2">
          </div>
          <div>
              <span id="span2">
                  
              </span>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" id="xacnhan2" class="btn btn-primary">確認</button>
      </div>
    </div>
  </div>
</div>



<!-- xóa -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">入密碼</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">號碼:</label>
            <input type="password" class="form-control" id="idmatkhau3">
          </div>
          <div>
              <span id="span3">
                  
              </span>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" id="xacnhan3" class="btn btn-primary">確認</button>
      </div>
    </div>
  </div>
</div>



<!-- Sửa may 1 -->

<form method="POST" action=""> 
<div class="modal fade" id="may1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">入密碼 <?php echo $datatiendo1['may1']; ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
         <input type="hidden" name="edit1" id="edit1">
         <div class="mb-3">
            <label for="recipient-name" id="tieudematkhau" class="col-form-label">入密碼:</label>
            <input type="password" required ="required" name="" class="form-control" id="idmatkhau">
          </div>

          <div class="mb-3">
            <label for="recipient-name" class="col-form-label" id="tieudetiendo" style="display:none;">進度(%):</label>
            <input type="number" min="0" max="100" required ="required" name="tongmay1" class="form-control" id="tongmay1"value="<?php echo $ch; ?>" style="display: none;">
          </div>
          <div>
              <span id="idspan"></span>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <span class="btn btn-primary" id="submitmay11" name="submitmay11">確認</span>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
        <button type="submit" class="btn btn-primary" id="submitmay1" name="submitmay1" style="display: none;">確認</button>
      </div>
    </div>
  </div>
</div>
</form>
<!-- Sửa Xuất may 2-->
<form method="POST" action=""> 
<div class="modal fade" id="may2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">入密碼 <?php echo $datatiendo1['may2']; ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
         <input type="hidden" name="edit1" id="edit1">
         <div class="mb-3">
            <label for="recipient-name" id="tieudematkhau2" class="col-form-label">入密碼:</label>
            <input type="password" required ="required" name="" class="form-control" id="idmatkhau22">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label"id="tieudetiendo2" style="display:none;">進度(%):</label>
            <input type="number" min="0" max="100" required ="required" name="tongmay2"class="form-control" id="tongmay2"value="<?php echo $ch2; ?>"style="display:none;">
          </div>
          <div>
              <span id="idspan2"></span>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <span class="btn btn-primary" id="submitmay12" name="submitmay12">確認</span>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
    
        <button type="submit" class="btn btn-primary" id="submitmay2" name="submitmay2"style="display: none;">確認</button>
      </div>
    </div>
  </div>
</div>
</form>

<!-- Sửa may 3-->
<form method="POST" action=""> 
<div class="modal fade" id="may3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">入密碼 <?php echo $datatiendo1['may3']; ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
         <input type="hidden" name="edit1" id="edit1">
         <div class="mb-3">
            <label for="recipient-name" id="tieudematkhau3" class="col-form-label">入密碼:</label>
            <input type="password" required ="required" name="" class="form-control" id="idmatkhau33">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label"id="tieudetiendo3" style="display:none;">進度(%):</label>
            <input type="number" min="0" max="100" required ="required" name="tongmay3"class="form-control" id="tongmay3"value="<?php echo $ch3; ?>"style="display:none;">
          </div>
          <div>
              <span id="idspan3"></span>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <span class="btn btn-primary" id="submitmay13" name="submitmay13">確認</span>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
    
        <button type="submit" class="btn btn-primary" id="submitmay3" name="submitmay3"style="display: none;">確認</button>
      </div>
    </div>
  </div>
</div>
</form>

<!-- Sửa may 4-->
<form method="POST" action=""> 
<div class="modal fade" id="may4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">入密碼 <?php echo $datatiendo1['may4']; ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
         <input type="hidden" name="edit1" id="edit1">
         <div class="mb-3">
            <label for="recipient-name" id="tieudematkhau4" class="col-form-label">入密碼:</label>
            <input type="password" required ="required" name="" class="form-control" id="idmatkhau4">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label"id="tieudetiendo4" style="display:none;">進度(%):</label>
            <input type="number" min="0" max="100" required ="required" name="tongmay4"class="form-control" id="tongmay4"value="<?php echo $ch4; ?>"style="display:none;">
          </div>
          <div>
              <span id="idspan4"></span>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <span class="btn btn-primary" id="submitmay14" name="submitmay14">確認</span>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
    
        <button type="submit" class="btn btn-primary" id="submitmay4" name="submitmay4"style="display: none;">確認</button>
      </div>
    </div>
  </div>
</div>
</form>



<!-- Sửa may 5-->
<form method="POST" action=""> 
<div class="modal fade" id="may5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">入密碼 <?php echo $datatiendo1['may5']; ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
         <input type="hidden" name="edit1" id="edit1">
         <div class="mb-3">
            <label for="recipient-name" id="tieudematkhau5" class="col-form-label">入密碼:</label>
            <input type="password" required ="required" name="" class="form-control" id="idmatkhau5">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label"id="tieudetiendo5" style="display:none;">進度(%):</label>
            <input type="number" min="0" max="100" required ="required" name="tongmay5"class="form-control" id="tongmay5"value="<?php echo $ch5; ?>"style="display:none;">
          </div>
          <div>
              <span id="idspan5"></span>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <span class="btn btn-primary" id="submitmay15" name="submitmay15">確認</span>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
    
        <button type="submit" class="btn btn-primary" id="submitmay5" name="submitmay5"style="display: none;">確認</button>
      </div>
    </div>
  </div>
</div>
</form>

<!-- sửa máy 6 -->

<form method="POST" action=""> 
<div class="modal fade" id="may6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">入密碼 <?php echo $datatiendo1['may6']; ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
         <input type="hidden" name="edit1" id="edit1">
         <div class="mb-3">
            <label for="recipient-name" id="tieudematkhau6" class="col-form-label">入密碼:</label>
            <input type="password" required ="required" name="" class="form-control" id="idmatkhau6">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label"id="tieudetiendo6" style="display:none;">進度(%):</label>
            <input type="number" min="0" max="100" required ="required" name="tongmay6"class="form-control" id="tongmay6"value="<?php echo $ch6; ?>"style="display:none;">
          </div>
          <div>
              <span id="idspan6"></span>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <span class="btn btn-primary" id="submitmay16" name="submitmay16">確認</span>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
    
        <button type="submit" class="btn btn-primary" id="submitmay6" name="submitmay6"style="display: none;">確認</button>
      </div>
    </div>
  </div>
</div>
</form>

<!-- sửa máy 7 -->

<form method="POST" action=""> 
<div class="modal fade" id="may7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">入密碼 <?php echo $datatiendo1['may7']; ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
         <input type="hidden" name="edit1" id="edit1">
         <div class="mb-3">
            <label for="recipient-name" id="tieudematkhau7" class="col-form-label">入密碼:</label>
            <input type="password" required ="required" name="" class="form-control" id="idmatkhau7">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label"id="tieudetiendo7" style="display:none;">進度(%):</label>
            <input type="number" min="0" max="100" required ="required" name="tongmay7"class="form-control" id="tongmay7"value="<?php echo $ch7; ?>"style="display:none;">
          </div>
          <div>
              <span id="idspan7"></span>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <span class="btn btn-primary" id="submitmay17" name="submitmay17">確認</span>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
    
        <button type="submit" class="btn btn-primary" id="submitmay7" name="submitmay7"style="display: none;">確認</button>
      </div>
    </div>
  </div>
</div>
</form>

<!-- sửa máy 8 -->

<form method="POST" action=""> 
<div class="modal fade" id="may8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">入密碼 <?php echo $datatiendo1['may8']; ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
         <input type="hidden" name="edit1" id="edit1">
         <div class="mb-3">
            <label for="recipient-name" id="tieudematkhau8" class="col-form-label">入密碼:</label>
            <input type="password" required ="required" name="" class="form-control" id="idmatkhau8">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label"id="tieudetiendo8" style="display:none;">進度(%):</label>
            <input type="number" min="0" max="100" required ="required" name="tongmay8"class="form-control" id="tongmay8"value="<?php echo $ch8; ?>"style="display:none;">
          </div>
          <div>
              <span id="idspan8"></span>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <span class="btn btn-primary" id="submitmay18" name="submitmay18">確認</span>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
    
        <button type="submit" class="btn btn-primary" id="submitmay8" name="submitmay8"style="display: none;">確認</button>
      </div>
    </div>
  </div>
</div>
</form>

<!-- sửa máy 9 -->

<form method="POST" action=""> 
<div class="modal fade" id="may9" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">入密碼 <?php echo $datatiendo1['may9']; ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
         <input type="hidden" name="edit1" id="edit1">
         <div class="mb-3">
            <label for="recipient-name" id="tieudematkhau9" class="col-form-label">入密碼:</label>
            <input type="password" required ="required" name="" class="form-control" id="idmatkhau9">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label"id="tieudetiendo9" style="display:none;">進度(%):</label>
            <input type="number" min="0" max="100" required ="required" name="tongmay9"class="form-control" id="tongmay9"value="<?php echo $ch9; ?>"style="display:none;">
          </div>
          <div>
              <span id="idspan9"></span>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <span class="btn btn-primary" id="submitmay19" name="submitmay19">確認</span>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
    
        <button type="submit" class="btn btn-primary" id="submitmay9" name="submitmay9"style="display: none;">確認</button>
      </div>
    </div>
  </div>
</div>
</form>
<!-- sửa máy 10 -->

<form method="POST" action=""> 
<div class="modal fade" id="may10" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">入密碼 <?php echo $datatiendo1['may10']; ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
         <input type="hidden" name="edit1" id="edit1">
         <div class="mb-3">
            <label for="recipient-name" id="tieudematkhau10" class="col-form-label">入密碼:</label>
            <input type="password" required ="required" name="" class="form-control" id="idmatkhau10">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label"id="tieudetiendo10" style="display:none;">進度(%):</label>
            <input type="number" min="0" max="100" required ="required" name="tongmay10"class="form-control" id="tongmay10"value="<?php echo $ch10; ?>"style="display:none;">
          </div>
          <div>
              <span id="idspan10"></span>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <span class="btn btn-primary" id="submitmay110" name="submitmay110">確認</span>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
    
        <button type="submit" class="btn btn-primary" id="submitmay10" name="submitmay10"style="display: none;">確認</button>
      </div>
    </div>
  </div>
</div>
</form>
<script type="text/javascript">
    document.getElementById("submitmay11").addEventListener("click", myFunction);

function myFunction() {
  var x = document.getElementById("idmatkhau");
  x.value = x.value.toUpperCase();
  if((x.value == '<?php echo $matkhau1[1]; ?>')){
      window.location="../Controller/index.php?action=bieudoline1-cn&id=<?php echo $c[1]; ?>";
  }else{
     
    document.getElementById("idmatkhau").classList.add("form-control");
    document.getElementById("idmatkhau").classList.add("is-invalid");
      document.getElementById("idspan").innerText = '號碼号码不正确'
      document.getElementById("idspan").style.color = 'red'
  }
}

</script>
<script type="text/javascript">
    document.getElementById("submitmay12").addEventListener("click", myFunction);

function myFunction() {
  var x = document.getElementById("idmatkhau22");
  x.value = x.value.toUpperCase();
  if((x.value == '<?php echo $matkhau1[1]; ?>')){
      window.location="../Controller/index.php?action=bieudoline1-cn&id=<?php echo $c[2]; ?>";
  }else{
     
    document.getElementById("idmatkhau22").classList.add("form-control");
    document.getElementById("idmatkhau22").classList.add("is-invalid");
      document.getElementById("idspan2").innerText = '號碼号码不正确'
      document.getElementById("idspan2").style.color = 'red'
  }
}

</script>

<script type="text/javascript">
    document.getElementById("submitmay13").addEventListener("click", myFunction);

function myFunction() {
  var x = document.getElementById("idmatkhau33");
  x.value = x.value.toUpperCase();
  if((x.value == '<?php echo $matkhau1[1]; ?>')){
     window.location="../Controller/index.php?action=bieudoline1-cn&id=<?php echo $c[3]; ?>";
  }else{
     
    document.getElementById("idmatkhau33").classList.add("form-control");
    document.getElementById("idmatkhau33").classList.add("is-invalid");
      document.getElementById("idspan3").innerText = '號碼号码不正确'
      document.getElementById("idspan3").style.color = 'red'
  }
}

</script>

<script type="text/javascript">
    document.getElementById("submitmay14").addEventListener("click", myFunction);

function myFunction() {
  var x = document.getElementById("idmatkhau4");
  x.value = x.value.toUpperCase();
  if((x.value == '<?php echo $matkhau1[1]; ?>')){
      window.location="../Controller/index.php?action=bieudoline1-cn&id=<?php echo $c[4]; ?>";
  }else{
     
    document.getElementById("idmatkhau4").classList.add("form-control");
    document.getElementById("idmatkhau4").classList.add("is-invalid");
      document.getElementById("idspan4").innerText = '號碼号码不正确'
      document.getElementById("idspan4").style.color = 'red'
  }
}

</script>

<script type="text/javascript">
    document.getElementById("submitmay15").addEventListener("click", myFunction);

function myFunction() {
  var x = document.getElementById("idmatkhau5");
  x.value = x.value.toUpperCase();
  if((x.value == '<?php echo $matkhau1[1]; ?>')){
      window.location="../Controller/index.php?action=bieudoline1-cn&id=<?php echo $c[5]; ?>";
  }else{
     
    document.getElementById("idmatkhau5").classList.add("form-control");
    document.getElementById("idmatkhau5").classList.add("is-invalid");
      document.getElementById("idspan5").innerText = '號碼号码不正确'
      document.getElementById("idspan5").style.color = 'red'
  }
}

</script>

<script type="text/javascript">
    document.getElementById("submitmay16").addEventListener("click", myFunction);

function myFunction() {
  var x = document.getElementById("idmatkhau6");
  x.value = x.value.toUpperCase();
  if((x.value == '<?php echo $matkhau1[1]; ?>')){
      window.location="../Controller/index.php?action=bieudoline1-cn&id=<?php echo $c[6]; ?>";
  }else{
     
    document.getElementById("idmatkhau6").classList.add("form-control");
    document.getElementById("idmatkhau6").classList.add("is-invalid");
      document.getElementById("idspan6").innerText = '號碼号码不正确'
      document.getElementById("idspan6").style.color = 'red'
  }
}

</script>

<script type="text/javascript">
    document.getElementById("submitmay17").addEventListener("click", myFunction);

function myFunction() {
  var x = document.getElementById("idmatkhau7");
  x.value = x.value.toUpperCase();
  if((x.value == '<?php echo $matkhau1[1]; ?>')){
     window.location="../Controller/index.php?action=bieudoline1-cn&id=<?php echo $c[7]; ?>";
  }else{
     
    document.getElementById("idmatkhau7").classList.add("form-control");
    document.getElementById("idmatkhau7").classList.add("is-invalid");
      document.getElementById("idspan7").innerText = '號碼号码不正确'
      document.getElementById("idspan7").style.color = 'red'
  }
}

</script>

<script type="text/javascript">
    document.getElementById("submitmay18").addEventListener("click", myFunction);

function myFunction() {
  var x = document.getElementById("idmatkhau8");
  x.value = x.value.toUpperCase();
  if((x.value == '<?php echo $matkhau1[1]; ?>')){
      window.location="../Controller/index.php?action=bieudoline1-cn&id=<?php echo $c[8]; ?>";
  }else{
     
    document.getElementById("idmatkhau8").classList.add("form-control");
    document.getElementById("idmatkhau8").classList.add("is-invalid");
      document.getElementById("idspan8").innerText = '號碼号码不正确'
      document.getElementById("idspan8").style.color = 'red'
  }
}

</script>

<script type="text/javascript">
    document.getElementById("submitmay19").addEventListener("click", myFunction);

function myFunction() {
  var x = document.getElementById("idmatkhau9");
  x.value = x.value.toUpperCase();
  if((x.value == '<?php echo $matkhau1[1]; ?>')){
      window.location="../Controller/index.php?action=bieudoline1-cn&id=<?php echo $c[9]; ?>";
  }else{
     
    document.getElementById("idmatkhau9").classList.add("form-control");
    document.getElementById("idmatkhau9").classList.add("is-invalid");
      document.getElementById("idspan9").innerText = '號碼号码不正确'
      document.getElementById("idspan9").style.color = 'red'
  }
}

</script>

<script type="text/javascript">
    document.getElementById("submitmay110").addEventListener("click", myFunction);

function myFunction() {
  var x = document.getElementById("idmatkhau10");
  x.value = x.value.toUpperCase();
  if((x.value == '<?php echo $matkhau1[1]; ?>')){
      window.location="../Controller/index.php?action=bieudoline1-cn&id=<?php echo $c[10]; ?>";
  }else{
     
    document.getElementById("idmatkhau10").classList.add("form-control");
    document.getElementById("idmatkhau10").classList.add("is-invalid");
      document.getElementById("idspan10").innerText = '號碼号码不正确'
      document.getElementById("idspan10").style.color = 'red'
  }
}

</script>

<script type="text/javascript">
    document.getElementById("xacnhan2").addEventListener("click", myFunction);

function myFunction() {

     var x = document.getElementById("idmatkhau2");
     var y = document.getElementById("span2");
  x.value = x.value.toUpperCase();
    if(x.value == '<?php echo $matkhau1[1]; ?>'){
        window.location="../Controller/index.php?action=edit-cn&id=<?php echo $dataID['id']; ?>";
    }else{
      document.getElementById("idmatkhau2").classList.add("is-invalid");
      document.getElementById("span2").innerText = '號碼号码不正确'
      document.getElementById("span2").style.color = 'red'
    }   
    
}


</script>


<script type="text/javascript">
    document.getElementById("xacnhan3").addEventListener("click", myFunction);

function myFunction() {

     var x = document.getElementById("idmatkhau3");
     var y = document.getElementById("span3");
  x.value = x.value.toUpperCase();
    if(x.value == '<?php echo $matkhau1[1]; ?>'){
        window.location="../Controller/index.php?action=delete-cn&id=<?php echo $dataID['id']; ?>";
    }else{
      document.getElementById("idmatkhau3").classList.add("is-invalid");
      document.getElementById("span3").innerText = '號碼号码不正确'
      document.getElementById("span3").style.color = 'red'
    }
    
}


</script>


</body>
</html>