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


        $tablee = 'tiendo';
        $tenmay = $dataID['tenmay'];
        $ngaybatdau = $dataID['ngaybatdau'];
        $datatiendo = $db->getDatatiendo($tablee,$tenmay,$ngaybatdau);

        $tablee1 = 'tiendoquydinh';
        $datatiendo1 = $db->getDatatiendo1($tablee1,$tenmay,$ngaybatdau);
        

        $chuoidau = $dataID['tiendo'];
        $chuoi = substr($chuoidau, 0, -1);

        $dau = $datatiendo1['dfm'];
        $ch = substr($dau, 0, -1);
        $chuoidau1 = $datatiendo['dfm'];
        $chuoi1 = substr($chuoidau1, 0, -1);
        $tong1 = (($ch*$chuoi1)/100);

        $dau1 = $datatiendo1['3dto2d'];
        $ch1 = substr($dau1, 0, -1);
        $chuoidau2 = $datatiendo['3dto2d'];
        $chuoi2 = substr($chuoidau2, 0, -1);
        $tong2 = (($ch1*$chuoi2)/100);
        
        $dau2 = $datatiendo1['giacongvadathang'];
        $ch2 = substr($dau2, 0, -1);
        $chuoidau3 = $datatiendo['giacongvadathang'];
        $chuoi3 = substr($chuoidau3, 0, -1);
        $tong3 = (($ch2*$chuoi3)/100);
        
        $dau3 = $datatiendo1['lapdatvachinhmay'];
        $ch3 = substr($dau3, 0, -1);
        $chuoidau4 = $datatiendo['lapdatvachinhmay'];
        $chuoi4 = substr($chuoidau4, 0, -1);
        $tong4 = (($ch3*$chuoi4)/100);
        
        $dau4 = $datatiendo1['buyoff'];
        $ch4 = substr($dau4, 0, -1);
        $chuoidau5 = $datatiendo['buyoff'];
        $chuoi5 = substr($chuoidau5, 0, -1);
        $tong5 = (($ch4*$chuoi5)/100);
        

        $phantram = ($tong1+$tong2+$tong3+$tong4+$tong5);
        $tong = $phantram.'%';
        $db->UpdateTienDo($id,$tong);


           $table = 'tiendomaymoc';
           $id = $_GET['id'];
           $dataID = $db->getDataID($table,$id); 
           $tiendo = $dataID['tiendo'];
           $tiendo1 = substr($tiendo, 0, -1);


           
           $date1 = $ngaybatdau;
           $date2 = $ngaydukien;
           $diff = abs(strtotime($date2) - strtotime($date1));
           $hours = $diff / (60 * 60);

           $ngayhoanthanh =  date("Y-m-d");   
           
           $date3 = $ngaybatdau;
           $date4 = $ngayhoanthanh;
           $diff1 = abs(strtotime($date4) - strtotime($date3));
           $hours1 = $diff1 / (60 * 60);

           $nhanvien = 'nhanvien';
           $hieusuat = floor((100 * $hours) / $hours1).'%';

           
           $mathe = $dataID['mathe'];
           $ma = substr($mathe, 0, -8);
           $length = substr_count($mathe, '-');
           $str = str_replace( '-', '', $mathe );
           $m = array();
           $m = explode('-', $mathe);
           

           // echo "<script type='text/javascript'>alert('$m[1]');</script>";
           // $mathe = $db->getDataMaThe($table,$mathe);


         if(isset($_POST['submitdfm']))
        {
        $tentiendo = 'dfm';
        $tiendo = $_POST['namedfm'].'%';
        if($db->Updattiendo2($tablee,$tentiendo,$tiendo,$tenmay,$ngaybatdau)){
            if($tiendo1 == 100)
            { 
              $nhanvien = 'nhanvien';
              $db->Updatehoanthanh($table,$ngayhoanthanh,$id);
              $hieusuat = floor((100 * $hours) / $hours1);
              $xuat = $hieusuat.'%';
              $db->Updatehieusuat($table,$xuat,$id);
    
              for ($i=0; $i < $length; $i++) { 
                    $tablehieusuat = 'hieusuat';
                    $mathe = $m[$i];
                    $db->InsertHieuSuat($tablehieusuat,$mathe,$hieusuat,$tenmay,$ngaybatdau);
                    $sumhieusuat = $db->getSumHieuSuat($tablehieusuat,$mathe);
                    $sum = $sumhieusuat['hieusuat'];
                    $counthieusuat = $db->getCountHieuSuat($tablehieusuat,$mathe);
                    $count1 = $counthieusuat['count'];

                    $tonghieusuat = ($sum/$count1).'%';

                    $db->Updatehieusuat($nhanvien,$tonghieusuat,$mathe);
                }  
            } 

            header('Refresh:0');
        }
        }
        if(isset($_POST['submit3DTo2D']))
        {
            $tentiendo = '3dto2d';
            $tiendo = $_POST['name3DTo2D'].'%';
            if($db->Updattiendo2($tablee,$tentiendo,$tiendo,$tenmay,$ngaybatdau)){
                if($tiendo1 == 100)
                { 
                  $nhanvien = 'nhanvien';
                  $db->Updatehoanthanh($table,$ngayhoanthanh,$mathe);
                  $hieusuat = floor((100 * $hours) / $hours1);
                  $xuat = $hieusuat.'%';
                  $db->Updatehieusuat($table,$xuat,$id);
        
                  for ($i=0; $i < $length; $i++) { 
                        $tablehieusuat = 'hieusuat';
                        $mathe = $m[$i];
                        $db->InsertHieuSuat($tablehieusuat,$mathe,$hieusuat,$tenmay,$ngaybatdau);
                        $sumhieusuat = $db->getSumHieuSuat($tablehieusuat,$mathe);
                        $sum = $sumhieusuat['hieusuat'];
                        $counthieusuat = $db->getCountHieuSuat($tablehieusuat,$mathe);
                        $count1 = $counthieusuat['count'];

                        $tonghieusuat = ($sum/$count1).'%';

                        $db->Updatehieusuat($nhanvien,$tonghieusuat,$mathe);
                    }  
                }  
              header('Refresh:0');
        }
        }
         
        if(isset($_POST['submitgiacongvadathang']))
        {
        $tentiendo = 'giacongvadathang';
        $tiendo = $_POST['namegiacongvadathang'].'%';
        if($db->Updattiendo2($tablee,$tentiendo,$tiendo,$tenmay,$ngaybatdau)){
            if($tiendo1 == 100)
            { 
              $nhanvien = 'nhanvien';
              $db->Updatehoanthanh($table,$ngayhoanthanh,$id);
              $hieusuat = floor((100 * $hours) / $hours1);
              $xuat = $hieusuat.'%';
              $db->Updatehieusuat($table,$xuat,$id);
    
              for ($i=0; $i < $length; $i++) { 
                    $tablehieusuat = 'hieusuat';
                    $mathe = $m[$i];
                    $db->InsertHieuSuat($tablehieusuat,$mathe,$hieusuat,$tenmay,$ngaybatdau);
                    $sumhieusuat = $db->getSumHieuSuat($tablehieusuat,$mathe);
                    $sum = $sumhieusuat['hieusuat'];
                    $counthieusuat = $db->getCountHieuSuat($tablehieusuat,$mathe);
                    $count1 = $counthieusuat['count'];

                    $tonghieusuat = ($sum/$count1).'%';

                    $db->Updatehieusuat($nhanvien,$tonghieusuat,$mathe);
                }  
            }  

            header('Refresh:0');
        }
        }

        if(isset($_POST['submitlapdatvachinhmay']))
        {
        $tentiendo = 'lapdatvachinhmay';
        $tiendo = $_POST['namelapdatvachinhmay'].'%';
        if($db->Updattiendo2($tablee,$tentiendo,$tiendo,$tenmay,$ngaybatdau)){
            if($tiendo1 == 100)
            { 
              $nhanvien = 'nhanvien';
              $db->Updatehoanthanh($table,$ngayhoanthanh,$id);
              $hieusuat = floor((100 * $hours) / $hours1);
              $xuat = $hieusuat.'%';
              $db->Updatehieusuat($table,$xuat,$id);
    
              for ($i=0; $i < $length; $i++) { 
                    $tablehieusuat = 'hieusuat';
                    $mathe = $m[$i];
                    $db->InsertHieuSuat($tablehieusuat,$mathe,$hieusuat,$tenmay,$ngaybatdau);
                    $sumhieusuat = $db->getSumHieuSuat($tablehieusuat,$mathe);
                    $sum = $sumhieusuat['hieusuat'];
                    $counthieusuat = $db->getCountHieuSuat($tablehieusuat,$mathe);
                    $count1 = $counthieusuat['count'];

                    $tonghieusuat = ($sum/$count1).'%';

                    $db->Updatehieusuat($nhanvien,$tonghieusuat,$mathe);
                }  
            }  

            header('Refresh:0');
        }
        }
        
        if(isset($_POST['submitbuyoff']))
        {
        $tentiendo = 'buyoff';
        $tiendo = $_POST['namebuyoff'].'%';
        if($db->Updattiendo2($tablee,$tentiendo,$tiendo,$tenmay,$ngaybatdau)){

            if($tiendo1 == 100)
            { 
              $nhanvien = 'nhanvien';
              $db->Updatehoanthanh($table,$ngayhoanthanh,$id);
              $hieusuat = floor((100 * $hours) / $hours1);
              $xuat = $hieusuat.'%';
              $db->Updatehieusuat($table,$xuat,$id);
    
              for ($i=0; $i < $length; $i++) { 
                    $tablehieusuat = 'hieusuat';
                    $mathe = $m[$i];
                    $db->InsertHieuSuat($tablehieusuat,$mathe,$hieusuat,$tenmay,$ngaybatdau);
                    $sumhieusuat = $db->getSumHieuSuat($tablehieusuat,$mathe);
                    $sum = $sumhieusuat['hieusuat'];
                    $counthieusuat = $db->getCountHieuSuat($tablehieusuat,$mathe);
                    $count1 = $counthieusuat['count'];

                    $tonghieusuat = ($sum/$count1).'%';

                    $db->Updatehieusuat($nhanvien,$tonghieusuat,$mathe);
                }  
            }   

            header('Refresh:0');
        }
        }

        $hoanthanh1 = $dataID['ngayhoanthanh'];
        if($tiendo1 == 100&&$hoanthanh1=='')
        {
            $nhanvien = 'nhanvien';
                  $db->Updatehoanthanh($table,$ngayhoanthanh,$id);
                  $hieusuat = floor((100 * $hours) / $hours1);
                  $xuat = $hieusuat.'%';
                  $db->Updatehieusuat($table,$xuat,$id);
        
                  for ($i=0; $i < $length; $i++) { 
                        $tablehieusuat = 'hieusuat';
                        $mathe = $m[$i];
                        $db->InsertHieuSuat($tablehieusuat,$mathe,$hieusuat,$tenmay,$ngaybatdau);
                        $sumhieusuat = $db->getSumHieuSuat($tablehieusuat,$mathe);
                        $sum = $sumhieusuat['hieusuat'];
                        $counthieusuat = $db->getCountHieuSuat($tablehieusuat,$mathe);
                        $count1 = $counthieusuat['count'];

                        $tonghieusuat = ($sum/$count1).'%';

                        $db->Updatehieusuat($nhanvien,$tonghieusuat,$mathe);
                    } 
        }

if(isset($_GET['id'])){
           $id = $_GET['id'];
           $table = "tiendomaymoc";
           $dataID = $db->getDataID($table,$id);

           $ketqua = $dataID['tiendo'];
             $chuoidau = $dataID['tiendo'];
        $chuoi = substr($chuoidau, 0, -1);
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
    <title>Bi???u ????? Ti???n ?????</title>
 <script type="text/javascript">
  window.onload = function () {
    var chart = new CanvasJS.Chart("chartContainer",
    {
    animationEnabled: true,
    exportEnabled: true,
    zoomEnabled: true,
    theme: "light1", 
      title:{
        text: "Bi???u ????? Ti???n ????? C??ng Vi???c",
        fontFamily: "Times New Roman",
         fontSize: 50,  
      }, 
    axisX: {
    title: 'Ng??y Th??ng N??m',
    valueFormatString: "D-MM-YYYY",
    labelAngle: -30
    },
          axisY:{
        title: 'Ti???n ?????(%)',
        minimum: 1,
        maximum: 100
    },  
      data: [{ 
        type: "line", //change type to bar, line, area, pie, etc
        indexLabel: "{x}, {y}",//Shows y value on all Data Points
        indexLabelFontColor: "#5A5757",
        showInLegend: true,
        name: "bi???u ?????",
        legendText: "Ti???n ????? D??? Ki???n",
        indexLabelPlacement: "outside",        
        dataPoints: [
        
        
        ]
      },{        
               
        type: "line",
		showInLegend: true,
		name: "Ti???n ????? Hi???n T???i",
		// lineDashType: "dash",
        xValueFormatString: "DD-MM-YYYY",
		yValueFormatString: "#,##0.0\"%\"",
        dataPoints: [
        { x: new Date(<?php echo $nambatdau; ?>, <?php echo $thangbatdau-1; ?>, <?php echo $catngay; ?>), y: 0 , indexLabel: "Ng??y B???t ?????u" },
        { x: new Date(<?php echo $namhientai; ?>, <?php echo $thanghientai-1; ?>, <?php echo $ngayhientai; ?>), y: <?php echo $chuoi; ?>, indexLabel: "Ng??y Hi???n T???i <?php echo $chuoi.'%'; ?>" },
        { x: new Date(<?php echo $namdukien; ?>, <?php echo $thangdukien-1; ?>, <?php echo $ngay1; ?>), y: 100 , indexLabel: "Ng??y D??? Ki???n Ho??n Th??nh" }
        ]
      }
      ]
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
        <h2><a href="../Controller/index.php?action=test2#book" style="font-size: 25px;" class="btn btn-success">Trang Ch???</a></h2>
        
        

       
    </div>
     <div class="box-container" style="">
        <div id="chartContainer" style="height: 400px; width: 100%;">
        </div>
     </div>
      <div style="width: 100%; height: 600px;overflow-x: auto;overflow-y: 300px; margin-top: 10px;" class="table" id="tableselectdata" style="">
        <div style="">
            <h2 style="text-align: center;">Chi Ti???t Ti???n ?????</h2>
        </div>
        
         <table style="margin-top: 1%;width: 100%;">
                  <thead>
                    <tr style="text-align:center;">
                      <th scope="col" style="border: 1px solid;font-size: 20px;">#</th>
                      <th scope="col" style="border: 1px solid;font-size: 20px;">DFM</th>
                      <th scope="col" style="border: 1px solid;font-size: 20px;">3D To 2D</th>
                      <th scope="col" style="border: 1px solid;font-size: 20px;">Gia C??ng V?? ?????t H??ng</th>
                      <th scope="col" style="border: 1px solid;font-size: 20px;">L???p ?????t V?? Ch???nh M??y</th>
                      <th scope="col" style="border: 1px solid;font-size: 20px;">Buyoff</th>
                      <th scope="col" style="border: 1px solid;font-size: 20px;">T???ng</th>
                     
                    </tr>
                  </thead>
                  <tbody>
                    <tr style="text-align:center;height: 50px;">
                      <th scope="row" style="width: 10%;font-size: 20px;" >C???p Nh???t Ti???n ?????</th>
                      <td style="border: 1px solid;width: 15%;font-size: 20px;"><button type="button" class="btn btn-primary dfm" data-bs-toggle="modal" data-bs-target="#dfm" data-bs-whatever="DFM"><?php echo $datatiendo['dfm']; ?></button></td>
                      <td style="border: 1px solid;width: 15%;font-size: 20px;"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#id3DTo2D" data-bs-whatever="3DTo2D"><?php echo $datatiendo['3dto2d']; ?></button></td>
                      <td style="border: 1px solid;width: 15%;font-size: 20px;"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#giacongvadathang" data-bs-whatever="Gia C??ng V?? ?????t H??ng"><?php echo $datatiendo['giacongvadathang']; ?></button></td>
                      <td style="border: 1px solid;width: 15%;font-size: 20px;"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#lapdatvachinhmay" data-bs-whatever="L???p ?????t V?? Ch???nh M??y"><?php echo $datatiendo['lapdatvachinhmay']; ?></button></td>
                      <td style="border: 1px solid;width: 15%;font-size: 20px;"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#buyoff" data-bs-whatever="Buyoff"><?php echo $datatiendo['buyoff']; ?></button></td>
                      <td style="border: 1px solid;width: 15%;font-size: 20px;"></td>
                      </tr> 

                      <tr style="text-align:center;height: 50px; background: #9BC86A;">
                          <th scope="row" style="font-size: 20px;" >Ti???n ????? T???ng</th>
                          <td style="border: 1px solid;font-size: 20px;"> <?php echo $tong1.'%'; ?></td>
                          <td style="border: 1px solid;font-size: 20px;"> <?php echo $tong2.'%'; ?></td>
                          <td style="border: 1px solid;font-size: 20px;"> <?php echo $tong3.'%'; ?></td>
                          <td style="border: 1px solid;font-size: 20px;"> <?php echo $tong4.'%'; ?></td>
                          <td style="border: 1px solid;font-size: 20px;"> <?php echo $tong5.'%'; ?></td>
                          <td style="border: 1px solid;font-size: 20px;"><button class="btn btn-danger"><?php echo $tong; ?></button></td>
                      </tr>
              
                      
                  </tbody>
                </table> 
        <div>
            <h2 style="text-align:center;margin-top: 1%;">T???ng Ti???n ?????</h2>
        </div>
        
            <table style=" width: 100%; margin-bottom: 20px;margin-top: 1%;" name="tabletable" id="idtable">
                 <thead>
            <tr style=" background: #ffed86;height: 50px;text-align:center;">
                <th style="font-size: 20px;  width: 4px;border: 1px solid;">#</th>
                <th style="font-size: 20px; width: 100px;border: 1px solid;">T??n M??y</th>    
                <th style="font-size: 20px; width: 5px;border: 1px solid;">Ti???n ?????</th>
                <th style="font-size: 20px; width: 50px;border: 1px solid;">Ng??y B???t ?????u</th>
                <th style="font-size: 20px; width: 5px;border: 1px solid;">Ng??y Ho??n Th??nh</th>
                <th style="font-size: 20px; width: 4px;border: 1px solid;">Ng??y D??? Ki???n</th>
                <th style="font-size: 20px; width: 4px;border: 1px solid;">S??? Gi???</th>
                <th style="font-size: 20px; width: 4px;border: 1px solid;">Hi???u Su???t</th>
                <th style="font-size: 20px; width: 5px;border: 1px solid;">B??? Ph???n</th>
                <th style="font-size: 20px; width: 100px;border: 1px solid;">Th??nh Vi??n</th>
                <th style="font-size: 20px; width: 50px;border: 1px solid;">Th??ng Tin</th>
            </tr>
        </thead>
           <tbody>
            <tr style="background: white;height: 50px;text-align:center;">
                <td style='font-size: 20px;border: 1px solid; '>1</td>
                <td style='font-size: 20px;border: 1px solid; '> <?php echo $dataID['tenmay']; ?></td>  
                <td style='font-size: 20px;border: 1px solid;'><?php echo $dataID['tiendo']; ?></td>
                <td style='font-size: 20px;border: 1px solid;'><?php echo $dataID['ngaybatdau']; ?></td>

                <?php if($tiendo1 == 100)
                { 
                ?>
                <td style='font-size: 20px;border: 1px solid;'><?php echo $dataID['ngayhoanthanh']; ?></td>           
                <?php
                 }else{
                ?>                
                <td style='font-size: 20px;border: 1px solid;'>Ch??a Ho??n Th??nh</td>
              <?php } ?>

                <td style='font-size: 20px;border: 1px solid; '><?php echo $dataID['ngaydukien']; ?></td>


                <?php if($tiendo1 == 100){ ?>
                <td style='font-size: 20px;border: 1px solid; '><?php echo $hours1+1; ?></td>
              <?php }else{ ?>
                <td style='font-size: 20px;border: 1px solid; '>Ch??a Ho??n Th??nh</td>
              <?php } ?>

                <?php if($tiendo1 == 100){ ?>
                <td style='font-size: 20px;border: 1px solid; '><?php echo $dataID['hieusuat']; ?></td>
              <?php }else{
               ?>
                <td style='font-size: 20px;border: 1px solid; '>Ch??a Ho??n Th??nh</td>
               <?php } ?>


                <td style='font-size: 20px;border: 1px solid; '><?php echo $dataID['bophan']; ?></td>
                <td style='font-size: 20px;border: 1px solid; '><?php echo $dataID['nhomthuchien']; ?></td>
                <td style='font-size: 20px; border: 1px solid; '>
                    <a style="text-decoration: none;"data-bs-toggle="modal" data-bs-target="#exampleModal" href="" >S???a</a>
                <?php if($dataID['tiendo']=='100%')
                       {
                     ?> 
                 </br>
                    <a style="text-decoration: none;" data-bs-toggle="modal" data-bs-target="#exampleModal1" href="" title="x??a">X??a</a>

                 <?php } ?> 
                </td>             
            </tr>

            </tbody>
        </table>
         
            
            </div>
</section>

<!-- edit -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nh???p M???t Kh???u</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">M???t Kh???u:</label>
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
        <button type="button" id="xacnhan2" class="btn btn-primary">X??c Nh???n</button>
      </div>
    </div>
  </div>
</div>


<!-- x??a -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nh???p M???t Kh???u</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">M???t Kh???u:</label>
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
        <button type="button" id="xacnhan3" class="btn btn-primary">X??c Nh???n</button>
      </div>
    </div>
  </div>
</div>

<!-- S???a DFM -->


<form method="POST" action=""> 
<div class="modal fade" id="dfm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">C???p Nh???p Ti???n ????? DFM</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
         <input type="hidden" name="edit1" id="edit1">
         <div class="mb-3">
            <label for="recipient-name" id="tieudematkhaudfm" class="col-form-label">Nh???p M???t Kh???u ????? S???a:</label>
            <input type="password" required ="required" name="" class="form-control" id="idmatkhaudfm">
          </div>
          <div class="mb-3">
            <label for="recipient-name" id="tieudedfm" class="col-form-label"style="display:none;">Ti???n ?????(%):</label>
            <input type="number" min="0" max="100" required ="required" name="namedfm" class="form-control" id="idinputdfm"value="<?php echo $chuoi1; ?>"style="display:none;">
          </div>
          <div>
              <span id="idspandfm"></span>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <span class="btn btn-primary" id="submitmaydfm" name="submitmaydfm">X??c Nh???n</span>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">????ng</button>
        <button type="submit" class="btn btn-primary" id="submitdfm" name="submitdfm"style="display:none;">X??c Nh???n</button>
      </div>
    </div>
  </div>
</div>
</form>
<!-- S???a Xu???t 3DTo2D-->
<form method="POST" action=""> 
<div class="modal fade" id="id3DTo2D" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">C???p Nh???p 3DTo2D</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
         <input type="hidden" name="edit1" id="edit1">
          <div class="mb-3">
            <label for="recipient-name" id="tieudematkhau3dto2d" class="col-form-label">Nh???p M???t Kh???u ????? S???a:</label>
            <input type="password" required ="required" name="" class="form-control" id="idmatkhau3dto2d">
          </div>
          <div class="mb-3">
            <label for="recipient-name" id="tieude3dto2d" class="col-form-label"style="display:none;">Ti???n ?????(%):</label>
            <input type="number" min="0" max="100" required ="required" name="name3DTo2D"class="form-control" id="idinput3DTo2D"value="<?php echo $chuoi2; ?>"style="display:none;">
          </div>
          <div>
              <span id="idspan3dto2d"></span>
          </div>
        </form>
      </div>
      <div class="modal-footer">
         <span class="btn btn-primary" id="submitmay3dto2d" name="submitmaydfm">X??c Nh???n</span>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">????ng</button>

        <button type="submit" class="btn btn-primary" id="submit3dto2d" name="submit3DTo2D"style="display:none;">X??c Nh???n</button>
      </div>
    </div>
  </div>
</div>
</form>

<!-- S???a Gia C??ng V?? ?????t H??ng-->
<form method="POST" action=""> 
<div class="modal fade" id="giacongvadathang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">C???p Nh???p Gia C??ng V?? ?????t H??ng</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
         <input type="hidden" name="edit1" id="edit1">
         <div class="mb-3">
            <label for="recipient-name" id="tieudematkhau" class="col-form-label">Nh???p M???t Kh???u ????? S???a:</label>
            <input type="password" required ="required" name="" class="form-control" id="matkhau">
          </div>
          <div class="mb-3">
            <label for="recipient-name" id="tieudedathang" style="display:none;" class="col-form-label">Ti???n ?????(%):</label>
            <input type="number" min="0" max="100" required ="required"  style="display:none;" name="namegiacongvadathang" class="form-control" id="idinputgiacongvadathang"value="<?php echo $chuoi3; ?>">
          </div>
           <div>
              <span id="idspandathang"></span>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <span class="btn btn-primary" id="submitmaydathang" name="submitmaydathang">X??c Nh???n</span>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">????ng</button>
    
        <button type="submit" id="submitdathang" name="submitgiacongvadathang"  style="display: none;" class="btn btn-primary">X??c Nh???n</button>

      </div>
    </div>
  </div>
</div>
</form>

<!-- S???a L???p ?????t V?? Ch???nh M??y-->
<form method="POST" action=""> 
<div class="modal fade" id="lapdatvachinhmay" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">C???p Nh???p L???p ?????t V?? Ch???nh M??y</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
         <input type="hidden" name="edit1" id="edit1">
         <div class="mb-3">
            <label for="recipient-name" id="tieudematkhau1" class="col-form-label">Nh???p M???t Kh???u ????? S???a:</label>
            <input type="password" required ="required" name="" class="form-control" id="matkhau1">
          </div>
          <div class="mb-3">
            <label for="recipient-name" id="tieudelapdat" class="col-form-label"style="display: none;">Ti???n ?????(%):</label>
            <input type="number" min="0" max="100" required ="required"style="display: none;" name="namelapdatvachinhmay" class="form-control" id="idinputlapdatvachinhmay"value="<?php echo $chuoi4; ?>">
          </div>
          <div>
              <span id="idspanlapdat"></span>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <span class="btn btn-primary" id="submitmaylapdat">X??c Nh???n</span>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">????ng</button>

        <button type="submit" id="submitlapdat" name="submitlapdatvachinhmay" class="btn btn-primary"style="display: none;">X??c Nh???n</button>

      </div>
    </div>
  </div>
</div>
</form>


<!-- S???a Buyoff-->
<form method="POST" action=""> 
<div class="modal fade" id="buyoff" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">C???p Nh???p Buyoff</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
         <input type="hidden" name="edit1" id="edit1">
         <div class="mb-3">
            <label for="recipient-name" id="tieudematkhau2" class="col-form-label">Nh???p M???t Kh???u ????? S???a:</label>
            <input type="password" required ="required" name="" class="form-control" id="matkhau2">
          </div>
          <div class="mb-3">
            <label for="recipient-name" id="tieudebuyoff" class="col-form-label"style="display: none;">Ti???n ?????(%):</label>
            <input type="number" min="0" max="100" required ="required" name="namebuyoff" class="form-control" id="idinputbuyoff"value="<?php echo $chuoi5; ?>"style="display: none;">
          </div>
           <div>
              <span id="idspanbuyoff"></span>
          </div>
        </form>
      </div>
      <div class="modal-footer">
         <span class="btn btn-primary" id="submitmaybuyoff">X??c Nh???n</span>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">????ng</button>

        <button type="submit" id="submitbuyoff" name="submitbuyoff" class="btn btn-primary"style="display: none;">X??c Nh???n</button>

      </div>
    </div>
  </div>
</div>
</form>




<script type="text/javascript">
    document.getElementById("xacnhan2").addEventListener("click", myFunction);

function myFunction() {

     var x = document.getElementById("idmatkhau2");
     var y = document.getElementById("span2");
  x.value = x.value.toUpperCase();
    if(x.value == '<?php echo $matkhau1[1]; ?>'){
        window.location="../Controller/index.php?action=editt&id=<?php echo $dataID['id']; ?>";
    }else{
      document.getElementById("idmatkhau2").classList.add("is-invalid");
      document.getElementById("span2").innerText = 'M???t Kh???u Kh??ng ????ng'
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
        window.location="../Controller/index.php?action=delete&id=<?php echo $dataID['id']; ?>";
    }else{
      document.getElementById("idmatkhau3").classList.add("is-invalid");
      document.getElementById("span3").innerText = 'M???t Kh???u Kh??ng ????ng'
      document.getElementById("span3").style.color = 'red'
    }
    
}


</script>

<script type="text/javascript">
    document.getElementById("submitmaydfm").addEventListener("click", myFunction);

function myFunction() {
  var x = document.getElementById("idmatkhaudfm");
  x.value = x.value.toUpperCase();
  if((x.value == '<?php echo $matkhau1[1]; ?>')){
      document.getElementById("submitmaydfm").style.display = 'none';
      document.getElementById("submitdfm").style.display = 'inline';
      document.getElementById("idspandfm").innerText = ''
      document.getElementById("idspandfm").style.color = ''
      document.getElementById("idmatkhaudfm").classList.remove("form-control");
    document.getElementById("idmatkhaudfm").classList.remove("is-invalid");
    document.getElementById("idmatkhaudfm").style.display = 'none';
    document.getElementById("idinputdfm").style.display = 'inline';
    document.getElementById("tieudematkhaudfm").style.display = 'none';
    document.getElementById("tieudedfm").style.display = 'inline';
  }else{
     
    document.getElementById("idmatkhaudfm").classList.add("form-control");
    document.getElementById("idmatkhaudfm").classList.add("is-invalid");
      document.getElementById("idspandfm").innerText = 'M???t Kh???u Kh??ng ????ng'
      document.getElementById("idspandfm").style.color = 'red'
  }
}

</script>

<script type="text/javascript">
    document.getElementById("submitmay3dto2d").addEventListener("click", myFunction);

function myFunction() {
  var x = document.getElementById("idmatkhau3dto2d");
  x.value = x.value.toUpperCase();
  if((x.value == '<?php echo $matkhau1[1]; ?>')){
      document.getElementById("submitmay3dto2d").style.display = 'none';
      document.getElementById("submit3dto2d").style.display = 'inline';
      document.getElementById("idspan3dto2d").innerText = ''
      document.getElementById("idspan3dto2d").style.color = ''
      document.getElementById("idmatkhau3dto2d").classList.remove("form-control");
    document.getElementById("idmatkhau3dto2d").classList.remove("is-invalid");
    document.getElementById("idmatkhau3dto2d").style.display = 'none';
    document.getElementById("idinput3DTo2D").style.display = 'inline';
    document.getElementById("tieudematkhau3dto2d").style.display = 'none';
    document.getElementById("tieude3dto2d").style.display = 'inline';
  }else{
     
    document.getElementById("idmatkhau3dto2d").classList.add("form-control");
    document.getElementById("idmatkhau3dto2d").classList.add("is-invalid");
      document.getElementById("idspan3dto2d").innerText = 'M???t Kh???u Kh??ng ????ng'
      document.getElementById("idspan3dto2d").style.color = 'red'
  }
}

</script>

<script type="text/javascript">
    document.getElementById("submitmaydathang").addEventListener("click", myFunction);

function myFunction() {
  var x = document.getElementById("matkhau");
  x.value = x.value.toUpperCase();
  if((x.value == '<?php echo $matkhau1[1]; ?>')){
      document.getElementById("submitmaydathang").style.display = 'none';
      document.getElementById("submitdathang").style.display = 'inline';
      document.getElementById("idspandathang").innerText = ''
      document.getElementById("idspandathang").style.color = ''
      document.getElementById("matkhau").classList.remove("form-control");
    document.getElementById("matkhau").classList.remove("is-invalid");
    document.getElementById("matkhau").style.display = 'none';
    document.getElementById("idinputgiacongvadathang").style.display = 'inline';
    document.getElementById("tieudematkhau").style.display = 'none';
    document.getElementById("tieudedathang").style.display = 'inline';
  }else{
     
    document.getElementById("matkhau").classList.add("form-control");
    document.getElementById("matkhau").classList.add("is-invalid");
      document.getElementById("idspandathang").innerText = 'M???t Kh???u Kh??ng ????ng'
      document.getElementById("idspandathang").style.color = 'red'
  }
}

</script>


<script type="text/javascript">
    document.getElementById("submitmaylapdat").addEventListener("click", myFunction);

function myFunction() {
  var x = document.getElementById("matkhau1");
  x.value = x.value.toUpperCase();
  if((x.value == '<?php echo $matkhau1[1]; ?>')){
      document.getElementById("submitmaylapdat").style.display = 'none';
      document.getElementById("submitlapdat").style.display = 'inline';
      document.getElementById("idspanlapdat").innerText = ''
      document.getElementById("idspanlapdat").style.color = ''
      document.getElementById("matkhau1").classList.remove("form-control");
    document.getElementById("matkhau1").classList.remove("is-invalid");
    document.getElementById("matkhau1").style.display = 'none';
    document.getElementById("idinputlapdatvachinhmay").style.display = 'inline';
    document.getElementById("tieudematkhau1").style.display = 'none';
    document.getElementById("tieudelapdat").style.display = 'inline';
  }else{
     
    document.getElementById("matkhau1").classList.add("form-control");
    document.getElementById("matkhau1").classList.add("is-invalid");
      document.getElementById("idspanlapdat").innerText = 'M???t Kh???u Kh??ng ????ng'
      document.getElementById("idspanlapdat").style.color = 'red'
  }
}

</script>


<script type="text/javascript">
    document.getElementById("submitmaybuyoff").addEventListener("click", myFunction);

function myFunction() {
  var x = document.getElementById("matkhau2");
  x.value = x.value.toUpperCase();
  if((x.value == '<?php echo $matkhau1[1]; ?>')){
      document.getElementById("submitmaybuyoff").style.display = 'none';
      document.getElementById("submitbuyoff").style.display = 'inline';
      document.getElementById("idspanbuyoff").innerText = ''
      document.getElementById("idspanbuyoff").style.color = ''
      document.getElementById("matkhau2").classList.remove("form-control");
    document.getElementById("matkhau2").classList.remove("is-invalid");
    document.getElementById("matkhau2").style.display = 'none';
    document.getElementById("idinputbuyoff").style.display = 'inline';
    document.getElementById("tieudematkhau2").style.display = 'none';
    document.getElementById("tieudebuyoff").style.display = 'inline';
  }else{
     
    document.getElementById("matkhau2").classList.add("form-control");
    document.getElementById("matkhau2").classList.add("is-invalid");
      document.getElementById("idspanbuyoff").innerText = 'M???t Kh???u Kh??ng ????ng'
      document.getElementById("idspanbuyoff").style.color = 'red'
  }
}

</script>


</body>
</html>