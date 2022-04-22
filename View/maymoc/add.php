<?php

include "../Model/DBconfig.php";
$db = new Database();
$db -> connect();
session_start();

if(isset($_POST['add']))
        {
            $tenmay = $_POST['tenmayy'];
            $tiendo = '0%';
            $ngaybatdau = $_POST['ngaybatdau'];
            $ngaydukien = $_POST['ngaydukien'];
            $nhomthuchien = $_POST['nhomthuchien'];
            $mathe = $_POST['mathe'];
            $bophan = $_POST['bophan'];
            $dfm = '0%';
            $dtod = '0%';
            $giacongvadathang = '0%';
            $lapdatvachinhmay = '0%';
            $buyoff = '0%';
            

            $dfm1 = '20%';
            $dtod1 = '20%';
            $giacongvadathang1 = '20%';
            $lapdatvachinhmay1 = '20%';
            $buyoff1 = '20%';
            
            if($db->InsertData($tenmay,$tiendo,$ngaybatdau,$ngaydukien,$bophan,$nhomthuchien,$mathe)&&$db->InsertData1($tenmay,$ngaybatdau,$dfm,$dtod,$giacongvadathang,$lapdatvachinhmay,$buyoff)&&$db->InsertData2($tenmay,$ngaybatdau,$dfm1,$dtod1,$giacongvadathang1,$lapdatvachinhmay1,$buyoff1))
            {
                header('Location: ../Controller/index.php?action=test2');
            }
        }
if(isset($_POST['addluu']))
{
    $tenmay = $_POST['tenmay'];
    $tiendo = '0%';
    $ngaybatdau = $_POST['ngaybatdau'];
    $ngaydukien = $_POST['ngaydukien'];
    $nhomthuchien = $_POST['nhomthuchienn'];
    $mathe = $_POST['mathee'];
    $bophan = $_POST['bophan'];

    $may1 = '0%';
    $may2 = '0%';
    $may3 = '0%';
    $may4 = '0%';
    $may5 = '0%';
    $may6 = '0%';
    $may7 = '0%';
    $may8 = '0%';
    $may9 = '0%';
    $may10 = '0%'; 


    $dfm = '0%';
    $dtod = '0%';
    $giacongvadathang = '0%';
    $lapdatvachinhmay = '0%';
    $buyoff = '0%';

    $may11 = $_POST['may1'];
    $may21 = $_POST['may2'];
    $may31 = $_POST['may3'];
    $may41 = $_POST['may4'];
    $may51 = $_POST['may5'];
    $may61 = $_POST['may6'];
    $may71 = $_POST['may7'];
    $may81 = $_POST['may8'];
    $may91 = $_POST['may9'];
    $may101 = $_POST['may10'];



    $dfm1 = '20%';
    $dtod1 = '20%';
    $giacongvadathang1 = '20%';
    $lapdatvachinhmay1 = '20%';
    $buyoff1 = '20%';
    

     
    $tenmay1 = $_POST['may1'];
    $tiendomay1 = '0%';
    $ngaybatdaumay1 = $_POST['ngaybatdaumay1'];
    $ngaydukienmay1 = $_POST['ngaydukienmay1'];
    $bophanmay1 = $_POST['bophan'];
    $nhomthuchienmay1 = $_POST['nhomthuchienmay1'];
    $mathe1 = $_POST['mathe1'];
    $tenline = $_POST['tenmay'];


    $tenmay2 = $_POST['may2'];
    $tiendomay2 = '0%';
    $ngaybatdaumay2 = $_POST['ngaybatdaumay2'];
    $ngaydukienmay2 = $_POST['ngaydukienmay2'];
    $bophanmay2 = $_POST['bophan'];
    $nhomthuchienmay2 = $_POST['nhomthuchienmay2'];
    $mathe2 = $_POST['mathe2'];
    $tenline = $_POST['tenmay'];



    $tenmay3 = $_POST['may3'];
    $tiendomay3 = '0%';
    $ngaybatdaumay3 = $_POST['ngaybatdaumay3'];
    $ngaydukienmay3 = $_POST['ngaydukienmay3'];
    $bophanmay3 = $_POST['bophan'];
    $nhomthuchienmay3 = $_POST['nhomthuchienmay3'];
    $mathe3 = $_POST['mathe3'];
    $tenline = $_POST['tenmay'];



    $tenmay4 = $_POST['may4'];
    $tiendomay4 = '0%';
    $ngaybatdaumay4 = $_POST['ngaybatdaumay4'];
    $ngaydukienmay4 = $_POST['ngaydukienmay4'];
    $bophanmay4 = $_POST['bophan'];
    $nhomthuchienmay4 = $_POST['nhomthuchienmay4'];
    $mathe4 = $_POST['mathe4'];
    $tenline = $_POST['tenmay'];



    $tenmay5 = $_POST['may5'];
    $tiendomay5 = '0%';
    $ngaybatdaumay5 = $_POST['ngaybatdaumay5'];
    $ngaydukienmay5 = $_POST['ngaydukienmay5'];
    $bophanmay5 = $_POST['bophan'];
    $nhomthuchienmay5 = $_POST['nhomthuchienmay5'];
    $mathe5 = $_POST['mathe5'];
    $tenline = $_POST['tenmay'];



    $tenmay6 = $_POST['may6'];
    $tiendomay6 = '0%';
    $ngaybatdaumay6 = $_POST['ngaybatdaumay6'];
    $ngaydukienmay6 = $_POST['ngaydukienmay6'];
    $bophanmay6 = $_POST['bophan'];
    $nhomthuchienmay6 = $_POST['nhomthuchienmay6'];
    $mathe6 = $_POST['mathe6'];
    $tenline = $_POST['tenmay'];



    $tenmay7 = $_POST['may7'];
    $tiendomay7 = '0%';
    $ngaybatdaumay7 = $_POST['ngaybatdaumay7'];
    $ngaydukienmay7 = $_POST['ngaydukienmay7'];
    $bophanmay7 = $_POST['bophan'];
    $nhomthuchienmay7 = $_POST['nhomthuchienmay7'];
    $mathe7 = $_POST['mathe7'];
    $tenline = $_POST['tenmay'];



    $tenmay8 = $_POST['may8'];
    $tiendomay8 = '0%';
    $ngaybatdaumay8 = $_POST['ngaybatdaumay8'];
    $ngaydukienmay8 = $_POST['ngaydukienmay8'];
    $bophanmay8 = $_POST['bophan'];
    $nhomthuchienmay8 = $_POST['nhomthuchienmay8'];
    $mathe8 = $_POST['mathe8'];
    $tenline = $_POST['tenmay'];



    $tenmay9 = $_POST['may9'];
    $tiendomay9 = '0%';
    $ngaybatdaumay9 = $_POST['ngaybatdaumay9'];
    $ngaydukienmay9 = $_POST['ngaydukienmay9'];
    $bophanmay9 = $_POST['bophan'];
    $nhomthuchienmay9 = $_POST['nhomthuchienmay9'];
    $mathe9 = $_POST['mathe9'];
    $tenline = $_POST['tenmay'];



    $tenmay10 = $_POST['may10'];
    $tiendomay10 = '0%';
    $ngaybatdaumay10 = $_POST['ngaybatdaumay10'];
    $ngaydukienmay10 = $_POST['ngaydukienmay10'];
    $bophanmay10 = $_POST['bophan'];
    $nhomthuchienmay10 = $_POST['nhomthuchienmay10'];
    $mathe10 = $_POST['mathe10'];
    $tenline = $_POST['tenmay'];


    if($db->InsertData($tenmay,$tiendo,$ngaybatdau,$ngaydukien,$bophan,$nhomthuchien,$mathe)&&$db->InsertTenline($tenmay,$ngaybatdau,$may11,$may21,$may31,$may41,$may51,$may61,$may71,$may81,$may91,$may101,$bophan)&&$db->InsertData3($tenmay,$ngaybatdau,$dfm1,$dtod1,$giacongvadathang1,$lapdatvachinhmay1,$buyoff1)&&$db->InsertTienDoMayMocLine($tenmay1,$tiendomay1,$ngaybatdaumay1,$ngaydukienmay1,$bophanmay1,$nhomthuchienmay1,$tenline,$mathe1)&&$db->InsertTienDoMayMocLine($tenmay2,$tiendomay2,$ngaybatdaumay2,$ngaydukienmay2,$bophanmay2,$nhomthuchienmay2,$tenline,$mathe2)&&$db->InsertTienDoMayMocLine($tenmay3,$tiendomay3,$ngaybatdaumay3,$ngaydukienmay3,$bophanmay3,$nhomthuchienmay3,$tenline,$mathe3)&&$db->InsertTienDoMayMocLine($tenmay4,$tiendomay4,$ngaybatdaumay4,$ngaydukienmay4,$bophanmay4,$nhomthuchienmay4,$tenline,$mathe4)&&$db->InsertTienDoMayMocLine($tenmay5,$tiendomay5,$ngaybatdaumay5,$ngaydukienmay5,$bophanmay5,$nhomthuchienmay5,$tenline,$mathe5)&&$db->InsertTienDoMayMocLine($tenmay6,$tiendomay6,$ngaybatdaumay6,$ngaydukienmay6,$bophanmay6,$nhomthuchienmay6,$tenline,$mathe6)&&$db->InsertTienDoMayMocLine($tenmay7,$tiendomay7,$ngaybatdaumay7,$ngaydukienmay7,$bophanmay7,$nhomthuchienmay7,$tenline,$mathe7)&&$db->InsertTienDoMayMocLine($tenmay8,$tiendomay8,$ngaybatdaumay8,$ngaydukienmay8,$bophanmay8,$nhomthuchienmay8,$tenline,$mathe8)&&$db->InsertTienDoMayMocLine($tenmay9,$tiendomay9,$ngaybatdaumay9,$ngaydukienmay9,$bophanmay9,$nhomthuchienmay9,$tenline,$mathe9)&&$db->InsertTienDoMayMocLine($tenmay10,$tiendomay10,$ngaybatdaumay10,$ngaydukienmay10,$bophanmay10,$nhomthuchienmay10,$tenline,$mathe10)&&$db->InsertDataLine($tenmay1,$ngaybatdaumay1,$dfm,$dtod,$giacongvadathang,$lapdatvachinhmay,$buyoff,$tenmay)&&$db->InsertDataLine($tenmay2,$ngaybatdaumay2,$dfm,$dtod,$giacongvadathang,$lapdatvachinhmay,$buyoff,$tenmay)&&$db->InsertDataLine($tenmay3,$ngaybatdaumay3,$dfm,$dtod,$giacongvadathang,$lapdatvachinhmay,$buyoff,$tenmay)&&$db->InsertDataLine($tenmay4,$ngaybatdaumay4,$dfm,$dtod,$giacongvadathang,$lapdatvachinhmay,$buyoff,$tenmay)&&$db->InsertDataLine($tenmay5,$ngaybatdaumay5,$dfm,$dtod,$giacongvadathang,$lapdatvachinhmay,$buyoff,$tenmay)&&$db->InsertDataLine($tenmay6,$ngaybatdaumay6,$dfm,$dtod,$giacongvadathang,$lapdatvachinhmay,$buyoff,$tenmay)&&$db->InsertDataLine($tenmay7,$ngaybatdaumay7,$dfm,$dtod,$giacongvadathang,$lapdatvachinhmay,$buyoff,$tenmay)&&$db->InsertDataLine($tenmay8,$ngaybatdaumay8,$dfm,$dtod,$giacongvadathang,$lapdatvachinhmay,$buyoff,$tenmay)&&$db->InsertDataLine($tenmay9,$ngaybatdaumay9,$dfm,$dtod,$giacongvadathang,$lapdatvachinhmay,$buyoff,$tenmay)&&$db->InsertDataLine($tenmay10,$ngaybatdaumay10,$dfm,$dtod,$giacongvadathang,$lapdatvachinhmay,$buyoff,$tenmay))
    {
        header('Location: ../Controller/index.php?action=test2');
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thêm Dự Án</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="../bootstrap-5/css/bootstrap.min.css">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <style type="text/css">
        .search-input{
            max-width: 450px;
            position: relative;
            background: #fff;
            /*width: 100%;*/    
            border-radius: 5px;
            box-shadow: 0px 1px 5px 3px rgba(0, 0, 0, 0.12);
        }
        .search-input input{
            height: 55px;
            max-width: 450px;
            width: 100%;
            outline: none;
            border: none;
            border-radius: 5px;
            /*padding: 0 60px 0 20px;*/
            font-size: 18px;
            box-shadow: 0px 3px 7px rgba(0, 0, 0, 0.7);
        }
        .search-input .autocom-box{
            padding: 0px;
            max-height: 280px;
            overflow-y: auto;
            opacity: 0;
            pointer-events: none;
        }
        .autocom-box li{
            list-style: none;
            padding:  8px 12px;
            width: 100%;
            cursor: default;
            border-radius: 3px;
            display: none;
        }
        .autocom-box li:hover{
            background: #efefef;
        }
        .search-input.active .autocom-box{
            padding: 10px 8px;
            opacity: 1;
            pointer-events: auto;
        }
        .search-input.active .autocom-box li{
            display: block;
        }
        .search-input.activee .autocom-box li{
            display: block;
        }


        .search-line{
            max-width: 450px;
            position: relative;
            background: #fff;
            /*width: 100%;*/    
            border-radius: 5px;
            box-shadow: 0px 1px 5px 3px rgba(0, 0, 0, 0.12);
        }
        .search-line input{
            height: 55px;
            max-width: 450px;
            width: 100%;
            outline: none;
            border: none;
            border-radius: 5px;
            /*padding: 0 60px 0 20px;*/
            font-size: 18px;
            box-shadow: 0px 3px 7px rgba(0, 0, 0, 0.7);
        }
        .search-line .autocom-line{
            padding: 0px;
            max-height: 280px;
            overflow-y: auto;
            opacity: 0;
            pointer-events: none;
        }
        .autocom-line li{
            list-style: none;
            padding:  8px 12px;
            width: 100%;
            cursor: default;
            border-radius: 3px;
            display: none;
        }
        .autocom-line li:hover{
            background: #efefef;
        }
        .search-line.active .autocom-line{
            padding: 10px 8px;
            opacity: 1;
            pointer-events: auto;
        }
        .search-line.active .autocom-line li{
            display: block;
        }
        .search-line.activee .autocom-line li{
            display: block;
        }


        .searchdivmayline1{
            max-width: 450px;
            position: relative;
            background: #fff;
            /*width: 100%;*/    
            border-radius: 5px;
            box-shadow: 0px 1px 5px 3px rgba(0, 0, 0, 0.12);
        }
        .searchdivmayline1 input{
            height: 55px;
            max-width: 450px;
            width: 100%;
            outline: none;
            border: none;
            border-radius: 5px;
            /*padding: 0 60px 0 20px;*/
            font-size: 18px;
            box-shadow: 0px 3px 7px rgba(0, 0, 0, 0.7);
        }
        .searchdivmayline1 .divmayline1{
            padding: 0px;
            max-height: 280px;
            overflow-y: auto;
            opacity: 0;
            pointer-events: none;
            display: none;
        }
        .divmayline1 li{
            list-style: none;
            padding:  8px 12px;
            width: 100%;
            cursor: default;
            border-radius: 3px;
            display: none;
        }
        .divmayline1 li:hover{
            background: #efefef;
        }
        .active .divmayline1{
            padding: 10px 8px;
            opacity: 1;
            pointer-events: auto;
        }
        .active .divmayline1 li{
            display: block;
        }


        .searchdivmayline2{
            max-width: 450px;
            position: relative;
            background: #fff;
            /*width: 100%;*/    
            border-radius: 5px;
            box-shadow: 0px 1px 5px 3px rgba(0, 0, 0, 0.12);
        }
        .searchdivmayline2 input{
            height: 55px;
            max-width: 450px;
            width: 100%;
            outline: none;
            border: none;
            border-radius: 5px;
            /*padding: 0 60px 0 20px;*/
            font-size: 18px;
            box-shadow: 0px 3px 7px rgba(0, 0, 0, 0.7);
        }
        .searchdivmayline2 .divmayline2{
            padding: 0px;
            max-height: 280px;
            overflow-y: auto;
            opacity: 0;
            pointer-events: none;
            display: none;
        }
        .divmayline2 li{
            list-style: none;
            padding:  8px 12px;
            width: 100%;
            cursor: default;
            border-radius: 3px;
            display: none;
        }
        .divmayline2 li:hover{
            background: #efefef;
        }
        .active .divmayline2{
            padding: 10px 8px;
            opacity: 1;
            pointer-events: auto;
        }
        .active .divmayline2 li{
            display: block;
        }
        

        .searchdivmayline3{
            max-width: 450px;
            position: relative;
            background: #fff;
            /*width: 100%;*/    
            border-radius: 5px;
            box-shadow: 0px 1px 5px 3px rgba(0, 0, 0, 0.12);
        }
        .searchdivmayline3 input{
            height: 55px;
            max-width: 450px;
            width: 100%;
            outline: none;
            border: none;
            border-radius: 5px;
            /*padding: 0 60px 0 20px;*/
            font-size: 18px;
            box-shadow: 0px 3px 7px rgba(0, 0, 0, 0.7);
        }
        .searchdivmayline3 .divmayline3{
            padding: 0px;
            max-height: 280px;
            overflow-y: auto;
            opacity: 0;
            pointer-events: none;
            display: none;
        }
        .divmayline3 li{
            list-style: none;
            padding:  8px 12px;
            width: 100%;
            cursor: default;
            border-radius: 3px;
            display: none;
        }
        .divmayline3 li:hover{
            background: #efefef;
        }
        .active .divmayline3{
            padding: 10px 8px;
            opacity: 1;
            pointer-events: auto;
        }
        .active .divmayline3 li{
            display: block;
        }
        

        .searchdivmayline4{
            max-width: 450px;
            position: relative;
            background: #fff;
            /*width: 100%;*/    
            border-radius: 5px;
            box-shadow: 0px 1px 5px 3px rgba(0, 0, 0, 0.12);
        }
        .searchdivmayline4 input{
            height: 55px;
            max-width: 450px;
            width: 100%;
            outline: none;
            border: none;
            border-radius: 5px;
            /*padding: 0 60px 0 20px;*/
            font-size: 18px;
            box-shadow: 0px 3px 7px rgba(0, 0, 0, 0.7);
        }
        .searchdivmayline4 .divmayline4{
            padding: 0px;
            max-height: 280px;
            overflow-y: auto;
            opacity: 0;
            pointer-events: none;
            display: none;
        }
        .divmayline4 li{
            list-style: none;
            padding:  8px 12px;
            width: 100%;
            cursor: default;
            border-radius: 3px;
            display: none;
        }
        .divmayline4 li:hover{
            background: #efefef;
        }
        .active .divmayline4{
            padding: 10px 8px;
            opacity: 1;
            pointer-events: auto;
        }
        .active .divmayline4 li{
            display: block;
        }


        .searchdivmayline5{
            max-width: 450px;
            position: relative;
            background: #fff;
            /*width: 100%;*/    
            border-radius: 5px;
            box-shadow: 0px 1px 5px 3px rgba(0, 0, 0, 0.12);
        }
        .searchdivmayline5 input{
            height: 55px;
            max-width: 450px;
            width: 100%;
            outline: none;
            border: none;
            border-radius: 5px;
            /*padding: 0 60px 0 20px;*/
            font-size: 18px;
            box-shadow: 0px 3px 7px rgba(0, 0, 0, 0.7);
        }
        .searchdivmayline5 .divmayline5{
            padding: 0px;
            max-height: 280px;
            overflow-y: auto;
            opacity: 0;
            pointer-events: none;
            display: none;
        }
        .divmayline5 li{
            list-style: none;
            padding:  8px 12px;
            width: 100%;
            cursor: default;
            border-radius: 3px;
            display: none;
        }
        .divmayline5 li:hover{
            background: #efefef;
        }
        .active .divmayline5{
            padding: 10px 8px;
            opacity: 1;
            pointer-events: auto;
        }
        .active .divmayline5 li{
            display: block;
        }


        .searchdivmayline6{
            max-width: 450px;
            position: relative;
            background: #fff;
            /*width: 100%;*/    
            border-radius: 5px;
            box-shadow: 0px 1px 5px 3px rgba(0, 0, 0, 0.12);
        }
        .searchdivmayline6 input{
            height: 55px;
            max-width: 450px;
            width: 100%;
            outline: none;
            border: none;
            border-radius: 5px;
            /*padding: 0 60px 0 20px;*/
            font-size: 18px;
            box-shadow: 0px 3px 7px rgba(0, 0, 0, 0.7);
        }
        .searchdivmayline6 .divmayline6{
            padding: 0px;
            max-height: 280px;
            overflow-y: auto;
            opacity: 0;
            pointer-events: none;
            display: none;
        }
        .divmayline6 li{
            list-style: none;
            padding:  8px 12px;
            width: 100%;
            cursor: default;
            border-radius: 3px;
            display: none;
        }
        .divmayline6 li:hover{
            background: #efefef;
        }
        .active .divmayline6{
            padding: 10px 8px;
            opacity: 1;
            pointer-events: auto;
        }
        .active .divmayline6 li{
            display: block;
        }


        .searchdivmayline7{
            max-width: 450px;
            position: relative;
            background: #fff;
            /*width: 100%;*/    
            border-radius: 5px;
            box-shadow: 0px 1px 5px 3px rgba(0, 0, 0, 0.12);
        }
        .searchdivmayline7 input{
            height: 55px;
            max-width: 450px;
            width: 100%;
            outline: none;
            border: none;
            border-radius: 5px;
            /*padding: 0 60px 0 20px;*/
            font-size: 18px;
            box-shadow: 0px 3px 7px rgba(0, 0, 0, 0.7);
        }
        .searchdivmayline7 .divmayline7{
            padding: 0px;
            max-height: 280px;
            overflow-y: auto;
            opacity: 0;
            pointer-events: none;
            display: none;
        }
        .divmayline7 li{
            list-style: none;
            padding:  8px 12px;
            width: 100%;
            cursor: default;
            border-radius: 3px;
            display: none;
        }
        .divmayline7 li:hover{
            background: #efefef;
        }
        .active .divmayline7{
            padding: 10px 8px;
            opacity: 1;
            pointer-events: auto;
        }
        .active .divmayline7 li{
            display: block;
        }


        .searchdivmayline8{
            max-width: 450px;
            position: relative;
            background: #fff;
            /*width: 100%;*/    
            border-radius: 5px;
            box-shadow: 0px 1px 5px 3px rgba(0, 0, 0, 0.12);
        }
        .searchdivmayline8 input{
            height: 55px;
            max-width: 450px;
            width: 100%;
            outline: none;
            border: none;
            border-radius: 5px;
            /*padding: 0 60px 0 20px;*/
            font-size: 18px;
            box-shadow: 0px 3px 7px rgba(0, 0, 0, 0.7);
        }
        .searchdivmayline8 .divmayline8{
            padding: 0px;
            max-height: 280px;
            overflow-y: auto;
            opacity: 0;
            pointer-events: none;
            display: none;
        }
        .divmayline8 li{
            list-style: none;
            padding:  8px 12px;
            width: 100%;
            cursor: default;
            border-radius: 3px;
            display: none;
        }
        .divmayline8 li:hover{
            background: #efefef;
        }
        .active .divmayline8{
            padding: 10px 8px;
            opacity: 1;
            pointer-events: auto;
        }
        .active .divmayline8 li{
            display: block;
        }


        .searchdivmayline9{
            max-width: 450px;
            position: relative;
            background: #fff;
            /*width: 100%;*/    
            border-radius: 5px;
            box-shadow: 0px 1px 5px 3px rgba(0, 0, 0, 0.12);
        }
        .searchdivmayline9 input{
            height: 55px;
            max-width: 450px;
            width: 100%;
            outline: none;
            border: none;
            border-radius: 5px;
            /*padding: 0 60px 0 20px;*/
            font-size: 18px;
            box-shadow: 0px 3px 7px rgba(0, 0, 0, 0.7);
        }
        .searchdivmayline9 .divmayline9{
            padding: 0px;
            max-height: 280px;
            overflow-y: auto;
            opacity: 0;
            pointer-events: none;
            display: none;
        }
        .divmayline9 li{
            list-style: none;
            padding:  8px 12px;
            width: 100%;
            cursor: default;
            border-radius: 3px;
            display: none;
        }
        .divmayline9 li:hover{
            background: #efefef;
        }
        .active .divmayline9{
            padding: 10px 8px;
            opacity: 1;
            pointer-events: auto;
        }
        .active .divmayline9 li{
            display: block;
        }


        .searchdivmayline10{
            max-width: 450px;
            position: relative;
            background: #fff;
            /*width: 100%;*/    
            border-radius: 5px;
            box-shadow: 0px 1px 5px 3px rgba(0, 0, 0, 0.12);
        }
        .searchdivmayline10 input{
            height: 55px;
            max-width: 450px;
            width: 100%;
            outline: none;
            border: none;
            border-radius: 5px;
            /*padding: 0 60px 0 20px;*/
            font-size: 18px;
            box-shadow: 0px 3px 7px rgba(0, 0, 0, 0.7);
        }
        .searchdivmayline10 .divmayline10{
            padding: 0px;
            max-height: 280px;
            overflow-y: auto;
            opacity: 0;
            pointer-events: none;
            display: none;
        }
        .divmayline10 li{
            list-style: none;
            padding:  8px 12px;
            width: 100%;
            cursor: default;
            border-radius: 3px;
            display: none;
        }
        .divmayline10 li:hover{
            background: #efefef;
        }
        .active .divmayline10{
            padding: 10px 8px;
            opacity: 1;
            pointer-events: auto;
        }
        .active .divmayline10 li{
            display: block;
        }
    </style>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
</head>
<body style="background:#c7deff">

   <a href="../Controller/index.php?action=test2#tableselectdata" style="font-weight: bold; border: 1px; text-decoration: none;" class="btn btn-success btn-lg aec">Trang Chủ</a>
<ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist" style="">
  <li class="nav-item" role="presentation" >
    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true" style="font-size:30px">Tiến Độ Máy</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false" style="font-size:30px">Tiến Độ Line</button>
  </li>
</ul>

<div class="tab-content" id="pills-tabContent" style="">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        <section class="book" id="book">
    <div class="row" style=" border-radius: 10px;">
     <form action="" method="POST">
        <ul class="btn justify-content-center" style="font-size: 50px; display: inline-block; width: 100%;margin-top: 10px;" >
                <li"><a href="" style="text-decoration: none;" class="text-success">Thêm Tiến Độ Máy</a></li>
              </ul>
           <div class="col-12" style="">
           </div>
            <div class="inputBox" style=" width: 80%;">
                <input type="text" name="tenmayy" id="tenmayy" required ="required" placeholder="Tên Máy" style="width: 80%;text-align: center;margin-left: 21%; margin-top: 0%; font-size: 40px;box-shadow: 0px 3px 7px rgba(0, 0, 0, 0.7);border-radius: 20px;">
            </div>
            <div style="text-align: center;">
                <span id="idspan1"></span>
            </div>
            <div class="inputBox" style=" width: 80%;">
                <input type="date" name="ngaybatdau" required ="required" placeholder="Ngày Bắt Đầu" style="width: 80%;text-align: center;margin-left: 21%; margin-top: 3%;font-size: 40px;box-shadow: 0px 3px 7px rgba(0, 0, 0, 0.7);border-radius: 20px;">
            </div>
            <div class="inputBox" style=" width: 80%;">
                <input type="date" name="ngaydukien" required ="required" placeholder="Ngày Dự Kiến" style="width: 80%;text-align: center;margin-left: 21%;margin-top: 3%;font-size: 40px;box-shadow: 0px 3px 7px rgba(0, 0, 0, 0.7);border-radius: 20px;">
            </div>
            <div class="inputBox" style=" width: 80%;">
                <select class="form-control" required ="required" name="bophan" style="width: 80%;margin-left: 21%; text-align: center;font-size: 30px; margin-top: 3%;box-shadow: 0px 3px 7px rgba(0, 0, 0, 0.7); border-radius: 20px;">
                    <option value="AEC" style="font-size: 20px;">AEC</option>
                    <option value="TSC" style="font-size: 20px;">TSC</option>
                    <option value="APS" style="font-size: 20px;">APS</option>
                </select>
            </div>
            <div class="inputBox" style=" width: 80%;">
                <input type="text" name="nhomthuchien" required ="required" id="matheId" placeholder="Người Thực Hiện" style="width: 35%;text-align: center;margin-left: 21%;margin-top: 3%;font-size: 40px;border-radius: 20px;box-shadow: 0px 3px 7px rgba(0, 0, 0, 0.7);">
                <input type="text" name="mathe" required ="required" id="nhomthuchienId" placeholder="Mã Thẻ" style="width: 35%;text-align: center;margin-top: 3%;font-size: 40px;float: right;border-radius: 20px;box-shadow: 0px 3px 7px rgba(0, 0, 0, 0.7);">
                   <div class="search-input" style="margin-top: 3%;margin-left: 49%;">
                   <input type="text" id="inputsearch" placeholder="Tim Kiem Ma The...">
                   <div class="autocom-box">
                   </div>
                   <div class="icon"><i class="fa-solid fa-magnifying-glass"></i></div>
               </div>
            </div>
            <div style="text-align: center;">
                <button type="submit" class="btn btn-success form-control" name="add" value="Thêm Dự Án" style="margin-top: 20px;width: auto;font-size: 30px; margin-bottom: 20px; ">Xác Nhận</button>
            </div>

        </form>
        <?php
           if(isset($thanhcong)&&in_array('thanh_cong',$thanhcong))
           {
            echo "<p style='color: green;text-align:center'>Thêm Thành Công</p>";
           }
        ?>
    </div>
</section>
  </div>


  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
        <section class="book" id="book">
    <div class="row" style=" border-radius: 10px;">
     <form action="" method="POST">
        <ul class="btn justify-content-center" style="font-size: 50px; display: inline-block; width: 100%;margin-top: 10px;" >
                <li"><a href="" style="text-decoration: none;" class="text-success">Thêm Tiến Độ Line</a></li>
            </ul>
           <div class="col-12" style="">
           </div>
            <div class="inputBox" style=" width: 80%;">
                <input type="text" name="tenmay" id="idtenmay" required ="required" placeholder="Tên Line vd:line 2" style="width: 80%;text-align: center;margin-left: 22%; margin-top: 0%; font-size: 40px;box-shadow: 0px 3px 7px rgba(0, 0, 0, 0.7);border-radius: 20px;">
            </div>
            <div style="text-align: center;">
                <span id="idspan"></span>
            </div>

            <div class="inputBox" style=" width: 80%;">
                <input type="date" name="ngaybatdau" required ="required" placeholder="Ngày Bắt Đầu" style="width: 80%;text-align: center;margin-left: 22%; margin-top: 3%;font-size: 40px;box-shadow: 0px 3px 7px rgba(0, 0, 0, 0.7);border-radius: 20px;">
            </div>
            <div class="inputBox" style=" width: 80%;">
                <input type="date" name="ngaydukien" required ="required" placeholder="Ngày Dự Kiến" style="width: 80%;text-align: center;margin-left: 22%;margin-top: 3%;font-size: 40px;box-shadow: 0px 3px 7px rgba(0, 0, 0, 0.7);border-radius: 20px;">
            </div>
            <div class="inputBox" style=" width: 80%;">
                <select class="form-control" required ="required" name="bophan" style="width: 80%;margin-left: 22%; text-align: center;font-size: 30px; margin-top: 3%; box-shadow: 0px 3px 7px rgba(0, 0, 0, 0.7);border-radius: 20px;">
                    <option value="AEC" style="font-size: 30px;">AEC</option>
                    <option value="TSC" style="font-size: 30px;">TSC</option>
                    <option value="APS" style="font-size: 30px;">APS</option>
                </select>
            </div>
            <div class="inputBox" style=" width: 80%;">
                <input type="text" name="nhomthuchienn" required ="required" id="linemathe" placeholder="Người Thực Hiện" style="width: 35%;text-align: center;margin-left: 21%;margin-top: 3%;font-size: 40px;border-radius: 20px;box-shadow: 0px 3px 7px rgba(0, 0, 0, 0.7);">
                <input type="text" name="mathee" required ="required" id="linenhomthuchien" placeholder="Mã Thẻ" style="width: 35%;text-align: center;margin-top: 3%;font-size: 40px;float: right;border-radius: 20px;box-shadow: 0px 3px 7px rgba(0, 0, 0, 0.7);">
                   <div class="search-line" style="margin-top: 3%;margin-left: 49%;">
                   <input type="text" id="search-mathe" placeholder="Tim Kiem Ma The...">
                   <div class="autocom-line">
                   </div>
                   <div class="icon"><i class="fa-solid fa-magnifying-glass"></i></div>
               </div>
            </div>

            

             <div style="text-align: center;">
                 <button type="button" class="btn btn-success" name="add" data-bs-toggle="modal" data-bs-target="#exampleModal" value="Thêm Dự Án" style="margin-top: 20px;margin-bottom: 20px; width: auto;font-size: 30px;">Xác Nhận</button>
             </div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content" >
      <div class="modal-body" >
        <div style="margin-top:0px;">
             <ul style="font-size: 40px; display: inline; display: inline-block; width: 100%;margin-top: 0px; text-align: center;">
               
                <li style="display: inline; margin-left: 0%;width: 100%;"><span style="text-decoration: none;color:#FF6699; font-weight: bold;font-size: 50px;">Thêm Line</span></li>
              </ul>  
           </div>
                <div class="row" style=" display: grid;grid-template-columns: repeat(1, 1fr);column-gap: 1.6rem;grid-template-columns: 100%;">
                    <table class="table table-hover" style="">
                          <thead>
                            <tr style="text-align:center;font-size: 25px;">
                              <th scope="col">Tên Máy</th>
                              <th scope="col">Ngày Bắt Đầu</th>
                              <th scope="col">Ngày Dự Kiến</th>
                              <th scope="col">Mã Thẻ</th>
                              <th scope="col">Nhóm Thực Hiện</th>
                              <th scope="col">Tìm Kiếm</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr style="">
                              <th scope="row" style="">
                                <input type="text" style="text-align:center; margin-top: 7px;font-size: 20px;" required ="required" name="may1" class="form-control" placeholder="Máy 1" id="may1">
                            </th>
                              <td>
                                <input type="date" style="text-align:center;margin-top: 7px;font-size: 20px;" required ="required" name="ngaybatdaumay1" placeholder="Ngày Bắt Đầu Máy 1" class="form-control" id="ngaybatdaumay1">
                              </td>
                              <td>
                                <input type="date" style="text-align:center;margin-top: 7px;font-size: 20px;" required ="required" name="ngaydukienmay1" class="form-control" id="ngaydukienmay1" placeholder="Ngày Dự Kiến Máy 1">
                              </td>
                              <td>
                                <input type="text" style="text-align:center;margin-top: 7px;font-size: 20px;" required ="required" name="mathe1" placeholder="Mã Thẻ Máy 1" class="form-control" id="nhomthuchienmay1">
                              </td>
                              <td>
                                <input type="text" style="text-align:center;margin-top: 7px;font-size: 20px;" required ="required" name="nhomthuchienmay1" placeholder="Nhóm Thực Hiện Máy 1" class="form-control" id="mathe1">
                              </td>
                              <td>
                                  <div class="inputmayline1" id="inputmayline1" style="">
                                       <div class="searchdivmayline1" id="searchdivmayline1" style="">
                                       <input type="text" class="searchinputmayline1" id="searchinputmayline1" placeholder="Tim Kiem Ma The...">
                                       <div class="divmayline1" id="divmayline1">
                                       </div>
                                       <div class="icon"><i class="fa-solid fa-magnifying-glass"></i></div>
                                   </div>
                                </div>
                              </td>
                              
                              
                            </tr>



                            <tr>
                              <th scope="row" style="height:70px">
                                <input class="form-control" style="text-align:center;margin-top: 7px;font-size: 20px;" id="may2" type="text" placeholder="Máy 2" required ="required" name="may2">
                            </th>
                              <td>
                                <input type="date" style="text-align:center;margin-top: 7px;font-size: 20px;" required ="required" name="ngaybatdaumay2" placeholder="Ngày Bắt Đầu Máy 2" class="form-control" id="ngaybatdaumay2">
                              </td>
                              <td>
                                <input type="date" style="text-align:center;margin-top: 7px;font-size: 20px;" required ="required" name="ngaydukienmay2" placeholder="Ngày Dự Kiến Máy 2" class="form-control" id="ngaydukienmay2">
                              </td>
                              <td>
                                <input type="text" style="text-align:center;margin-top: 7px;font-size: 20px;" required ="required" name="mathe2" placeholder="Mã Thẻ Máy 2" class="form-control" id="nhomthuchienmay2">
                              </td>
                              <td>
                                <input type="text" style="text-align:center;margin-top: 7px;font-size: 20px;" required ="required" name="nhomthuchienmay2" placeholder="Nhóm Thực Hiện Máy 2" class="form-control" id="mathe2">
                              </td>
                              <td>
                                  <div class="inputmayline2" id="inputmayline2" style="">
                                       <div class="searchdivmayline2" id="searchdivmayline2" style="">
                                       <input type="text" class="searchinputmayline2" id="searchinputmayline2" placeholder="Tim Kiem Ma The...">
                                       <div class="divmayline2" id="divmayline2">
                                       </div>
                                       <div class="icon"><i class="fa-solid fa-magnifying-glass"></i></div>
                                   </div>
                                </div>
                              </td>
                            
                            </tr>



                            <tr>
                              <th scope="row" style="height:70px">
                                   <input required ="required" style="text-align:center;margin-top: 7px;font-size: 20px;" class="form-control" placeholder="Máy 3" type="text" id="may3" name="may3">
                              </th>
                              <td>
                                <input type="date" style="text-align:center;margin-top: 7px;font-size: 20px;" required ="required" name="ngaybatdaumay3" placeholder="Ngày Bắt Đầu Máy 3" class="form-control" id="ngaybatdaumay3">
                              </td>
                              <td>
                                <input type="date" style="text-align:center;margin-top: 7px;font-size: 20px;" required ="required" name="ngaydukienmay3" placeholder="Ngày Dự Kiến Máy 3" class="form-control" id="ngaydukienmay3">
                              </td>
                              <td>
                                <input type="text" style="text-align:center;margin-top: 7px;font-size: 20px;" required ="required" name="mathe3" placeholder="Mã Thẻ Máy 3" class="form-control" id="nhomthuchienmay3">
                              </td>
                              <td>
                                <input type="text" style="text-align:center;margin-top: 7px;font-size: 20px;" required ="required" name="nhomthuchienmay3"  placeholder="Nhóm Thực Hiện Máy 3" class="form-control" id="mathe3">
                              </td>
                              <td>
                                  <div class="inputmayline3" id="inputmayline3" style="">
                                       <div class="searchdivmayline3" id="searchdivmayline3" style="">
                                       <input type="text" class="searchinputmayline3" id="searchinputmayline3" placeholder="Tim Kiem Ma The...">
                                       <div class="divmayline3" id="divmayline3">
                                       </div>
                                       <div class="icon"><i class="fa-solid fa-magnifying-glass"></i></div>
                                   </div>
                                </div>
                              </td>
                            </tr>


                            <tr>
                              <th scope="row" style="height:70px">
                                   <input class="form-control" style="text-align:center;margin-top: 7px;font-size: 20px;" id="may4" type="text" placeholder="Máy 4" required ="required" name="may4">
                              </th>
                              <td>
                                <input type="date" style="text-align:center;margin-top: 7px;font-size: 20px;" required ="required" name="ngaybatdaumay4" placeholder="Ngày Bắt Đầu Máy 4" class="form-control" id="ngaybatdaumay4">
                              </td>
                              <td>
                                <input type="date" style="text-align:center;margin-top: 7px;font-size: 20px;" required ="required" name="ngaydukienmay4" placeholder="Ngày Dự Kiến Máy 4" class="form-control" id="ngaydukienmay4">
                              </td>
                              <td>
                                <input type="text" style="text-align:center;margin-top: 7px;font-size: 20px;" required ="required" name="mathe4"  placeholder="Mã Thẻ Máy 4" class="form-control" id="nhomthuchienmay4">
                              </td>
                              <td>
                                <input type="text" style="text-align:center;margin-top: 7px;font-size: 20px;" required ="required" name="nhomthuchienmay4" placeholder="Nhóm Thực Hiện Máy 4" class="form-control" id="mathe4">
                              </td>
                              <td>
                                  <div class="inputmayline4" id="inputmayline4" style="">
                                       <div class="searchdivmayline4" id="searchdivmayline4" style="">
                                       <input type="text" id="searchinputmayline4" class="searchinputmayline4" placeholder="Tim Kiem Ma The...">
                                       <div class="divmayline4" id="divmayline4">
                                       </div>
                                       <div class="icon"><i class="fa-solid fa-magnifying-glass"></i></div>
                                   </div>
                                </div>
                              </td>
                            </tr>



                            <tr>
                              <th scope="row" style="height:70px">
                            <input class="form-control" id="may5" style="text-align:center;margin-top: 7px;font-size: 20px;" type="text" placeholder="Máy 5" required ="required" name="may5">
                              </th>
                              <td>
                                <input type="date" style="text-align:center;margin-top: 7px;font-size: 20px;" required ="required" name="ngaybatdaumay5" placeholder="Ngày Bắt Đầu Máy 5" class="form-control" id="ngaybatdaumay5">
                              </td>
                              <td>
                                <input type="date" style="text-align:center;margin-top: 7px;font-size: 20px;" required ="required" name="ngaydukienmay5" placeholder="Ngày Dự Kiến Máy 5" class="form-control" id="ngaydukienmay5">
                              </td>
                              <td>
                                <input type="text" style="text-align:center;margin-top: 7px;font-size: 20px;" required ="required" name="mathe5" placeholder="Mã Thẻ Máy 5" class="form-control" id="nhomthuchienmay5">
                              </td>
                              <td>
                                <input type="text" style="text-align:center;margin-top: 7px;font-size: 20px;" required ="required" name="nhomthuchienmay5"  placeholder="Nhóm Thực Hiện Máy 5" class="form-control" id="mathe5">
                              </td>
                              <td>
                                  <div class="inputmayline5" id="inputmayline5" style="">
                                       <div class="searchdivmayline5" id="searchdivmayline5" style="">
                                       <input type="text" id="searchinputmayline5" class="searchinputmayline5" placeholder="Tim Kiem Ma The...">
                                       <div class="divmayline5" id="divmayline5">
                                       </div>
                                       <div class="icon"><i class="fa-solid fa-magnifying-glass"></i></div>
                                   </div>
                                </div>
                              </td>
                            </tr>



                            <tr>
                              <th scope="row" style="height:70px">
                            <input required ="required" style="text-align:center;margin-top: 7px;font-size: 20px;" class="form-control" type="text" placeholder="Máy 6" id="may6" name="may6">
                              </th>
                              <td>
                                <input type="date" style="text-align:center;margin-top: 7px;font-size: 20px;" required ="required" name="ngaybatdaumay6" placeholder="Ngày Bắt Đầu Máy 6" class="form-control" id="ngaybatdaumay6">
                              </td>
                              <td>
                                <input type="date" style="text-align:center;margin-top: 7px;font-size: 20px;" required ="required" name="ngaydukienmay6" placeholder="Ngày Dự Kiến Máy 6" class="form-control" id="ngaydukienmay6">
                              </td>
                              <td>
                                <input type="text" style="text-align:center;margin-top: 7px;font-size: 20px;" required ="required" name="mathe6" placeholder="Mã Thẻ Máy 6" class="form-control" id="nhomthuchienmay6">
                              </td>
                              <td>
                                <input type="text" style="text-align:center;margin-top: 7px;font-size: 20px;" required ="required" name="nhomthuchienmay6"  placeholder="Nhóm Thực Hiện Máy 6" class="form-control" id="mathe6">
                              </td>
                              <td>
                                  <div class="inputmayline6" id="inputmayline6" style="">
                                       <div class="searchdivmayline6" id="searchdivmayline6" style="">
                                       <input type="text" id="searchinputmayline6" class="searchinputmayline6" placeholder="Tim Kiem Ma The...">
                                       <div class="divmayline6" id="divmayline6">
                                       </div>
                                       <div class="icon"><i class="fa-solid fa-magnifying-glass"></i></div>
                                   </div>
                                </div>
                              </td>
                            </tr>



                            <tr>
                              <th scope="row" style="height:70px">
                                 <input class="form-control" style="text-align:center;margin-top: 7px;font-size: 20px;" id="may7" type="text" placeholder="Máy 7" required ="required" name="may7">
                              </th>
                              <td>
                                <input type="date" style="text-align:center;margin-top: 7px;font-size: 20px;" required ="required" name="ngaybatdaumay7" placeholder="Ngày Bắt Đầu Máy 7" class="form-control" id="ngaybatdaumay7">
                              </td>
                              <td>
                                <input type="date" style="text-align:center;margin-top: 7px;font-size: 20px;" required ="required" name="ngaydukienmay7" placeholder="Ngày Dự Kiến Máy 7" class="form-control" id="ngaydukienmay7">
                              </td>
                              <td>
                                <input type="text" style="text-align:center;margin-top: 7px;font-size: 20px;" required ="required" name="mathe7"  placeholder="Mã Thẻ Máy 7" class="form-control" id="nhomthuchienmay7">
                              </td>
                              <td>
                                <input type="text" style="text-align:center;margin-top: 7px;font-size: 20px;" required ="required" name="nhomthuchienmay7" placeholder="Nhóm Thực Hiện Máy 7" class="form-control" id="mathe7">
                              </td>
                              <td>
                                  <div class="inputmayline7" id="inputmayline7" style="">
                                       <div class="searchdivmayline7" id="searchdivmayline7" style="">
                                       <input type="text" id="searchinputmayline7" class="searchinputmayline7" placeholder="Tim Kiem Ma The...">
                                       <div class="divmayline7" id="divmayline7">
                                       </div>
                                       <div class="icon"><i class="fa-solid fa-magnifying-glass"></i></div>
                                   </div>
                                </div>
                              </td>
                            </tr>



                            <tr>
                              <th scope="row" style="height:70px">
                            <input class="form-control" id="may8" style="text-align:center;margin-top: 7px;font-size: 20px;" type="text" placeholder="Máy 8" required ="required" name="may8">
                              </th>
                              <td>
                                <input type="date" style="text-align:center;margin-top: 7px;font-size: 20px;" required ="required" name="ngaybatdaumay8" placeholder="Ngày Bắt Đầu Máy 8" class="form-control" id="ngaybatdaumay8">
                              </td>
                              <td>
                                <input type="date" style="text-align:center;margin-top: 7px;font-size: 20px;" required ="required" name="ngaydukienmay8" placeholder="Ngày Dự Kiến Máy 8" class="form-control" id="ngaydukienmay8">
                              </td>
                              <td>
                                <input type="text" style="text-align:center;margin-top: 7px;font-size: 20px;" required ="required" name="mathe8" placeholder="Mã Thẻ Máy 8" class="form-control" id="nhomthuchienmay8">
                              </td>
                              <td>
                                <input type="text" style="text-align:center;margin-top: 7px;font-size: 20px;" required ="required" name="nhomthuchienmay8"  placeholder="Nhóm Thực Hiện Máy 8" class="form-control" id="mathe8">
                              </td>
                              <td>
                                  <div class="inputmayline8" id="inputmayline8" style="">
                                       <div class="searchdivmayline8" id="searchdivmayline8" style="">
                                       <input type="text" id="searchinputmayline8" class="searchinputmayline8" placeholder="Tim Kiem Ma The...">
                                       <div class="divmayline8" id="divmayline8">
                                       </div>
                                       <div class="icon"><i class="fa-solid fa-magnifying-glass"></i></div>
                                   </div>
                                </div>
                              </td>
                            </tr>




                            <tr>
                              <th scope="row" style="height:70px">
                            <input class="form-control" id="may9" style="text-align:center;margin-top: 7px;font-size: 20px;" type="text" placeholder="Máy 9" required ="required" name="may9">
                              </th>
                              <td>
                                <input type="date" style="text-align:center;margin-top: 7px;font-size: 20px;" required ="required" name="ngaybatdaumay9" placeholder="Ngày Bắt Đầu Máy 9" class="form-control" id="ngaybatdaumay9">
                              </td>
                              <td>
                                <input type="date" style="text-align:center;margin-top: 7px;font-size: 20px;" required ="required" name="ngaydukienmay9" placeholder="Ngày Bắt Dự Kiến 9" class="form-control" id="ngaydukienmay9">
                              </td>
                              <td>
                                <input type="text" style="text-align:center;margin-top: 7px;font-size: 20px;" required ="required" name="mathe9" placeholder="Mã Thẻ Máy 9" class="form-control" id="nhomthuchienmay9">
                              </td>
                              <td>
                                <input type="text" style="text-align:center;margin-top: 7px;font-size: 20px;" required ="required" name="nhomthuchienmay9"  placeholder="Nhóm Thực Hiện Máy 9" class="form-control" id="mathe9">
                              </td>
                              <td>
                                  <div class="inputmayline9" id="inputmayline9" style="">
                                       <div class="searchdivmayline9" id="searchdivmayline9" style="">
                                       <input type="text" id="searchinputmayline9" class="searchinputmayline9" placeholder="Tim Kiem Ma The...">
                                       <div class="divmayline9" id="divmayline9">
                                       </div>
                                       <div class="icon"><i class="fa-solid fa-magnifying-glass"></i></div>
                                   </div>
                                </div>
                              </td>
                            </tr>




                            <tr>
                              <th scope="row" style="height:70px">
                            <input class="form-control" id="may10" style="text-align:center;margin-top: 7px;font-size: 20px;" type="text" placeholder="Máy 10" required ="required" name="may10">
                              </th>
                              <td>
                                <input type="date" style="text-align:center;margin-top: 7px;font-size: 20px;" required ="required" name="ngaybatdaumay10" placeholder="Ngày Bắt Đầu Máy 10" class="form-control" id="ngaybatdaumay10">
                              </td>
                              <td>
                                <input type="date" style="text-align:center;margin-top: 7px;font-size: 20px;" required ="required" name="ngaydukienmay10" placeholder="Ngày Dự Kiến máy 10" class="form-control" id="ngaydukienmay10">
                              </td>
                              <td>
                                <input type="text" style="text-align:center;margin-top: 7px;font-size: 20px;" required ="required" name="mathe10"  placeholder="Mã Thẻ Máy 10" class="form-control" id="nhomthuchienmay10">
                              </td>
                              <td>
                                <input type="text" style="text-align:center;margin-top: 7px;font-size: 20px;" required ="required" name="nhomthuchienmay10" placeholder="Nhóm Thực Hiện Máy 10" class="form-control" id="mathe10">
                              </td>
                              <td>
                                  <div class="inputmayline10" id="inputmayline10" style="">
                                       <div class="searchdivmayline10" id="searchdivmayline10" style="">
                                       <input type="text" id="searchinputmayline10" class="searchinputmayline10" placeholder="Tim Kiem Ma The...">
                                       <div class="divmayline10" id="divmayline10">
                                       </div>
                                       <div class="icon"><i class="fa-solid fa-magnifying-glass"></i></div>
                                   </div>
                                </div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                </div>  
      </div>
      <div class="modal-footer" style="background:#EEEEEE">
        <button type="button" class="btn btn-secondary" style="width: 10%;height: 100%" data-bs-dismiss="modal">Đóng</button>
        <button type="submit" class="btn btn-primary" style="width: 10%;height: 100%" id="adddd" name="addluu">Lưu</button>
      </div>
    </div>
  </div>
</div>
        </form>
        <?php
           if(isset($thanhcong)&&in_array('thanh_cong',$thanhcong))
           {
            echo "<p style='color: green;text-align:center'>Thêm Thành Công</p>";
           }
        ?>
    </div>
</section>
  </div>
</div>

<!-- thêm may -->

  <script type="text/javascript">
       let searchWrapper = document.querySelector(".search-input")
       let inputBox = document.querySelector("#inputsearch")
       let suggBox = document.querySelector(".autocom-box")
       let nhomthuchien = document.querySelector('#nhomthuchienId')
       let mathe = document.querySelector('#matheId')
       var numberStore = [];
       var ma = [];

       inputBox.onkeyup = (e) => {
         let userData = e.target.value;
         let emptyArray = [];
         if(userData){
            emptyArray = suggettion.filter((data)=>{
            return data.toLocaleLowerCase().startsWith(userData.toLocaleLowerCase());
            });
         emptyArray =  emptyArray.map((data) => {
            return data = '<li>'+ data +'</li>';
         });
            searchWrapper.classList.add("active")
            showSuggettions(emptyArray);
            let allList = suggBox.querySelectorAll("li")
            for (let i = 0; i < allList.length; i++) {
                allList[i].setAttribute("onclick","select(this)")
            }
         }else{
            searchWrapper.classList.remove("active")
         }
       }

       function select(element){
        let selectUserData = element.textContent;
        inputBox.value = selectUserData;
        const cat = selectUserData.slice(0, 8)
        numberStore = [...numberStore, cat];
        const cat1 = selectUserData.slice(9)
        ma = [...ma, cat1];
        mathe.value = ma;
        nhomthuchien.value = numberStore;
        // inputBox.value = '';
       }

       function showSuggettions(list){
        let listData;
        if(!list.length){
             userValue = inputBox.value;
             listData = '<li>' + userValue + '</li>';
        }else{
            listData = list.join('')
        }
        suggBox.innerHTML = listData;
       }
   </script>

<!-- thêm line -->

<script type="text/javascript">
       let searchWrapperr = document.querySelector(".search-line")
       let inputBoxx = document.querySelector("#search-mathe")
       let suggBoxx = document.querySelector(".autocom-line")
       let nhomthuchienn = document.querySelector('#linenhomthuchien')
       let mathee = document.querySelector('#linemathe')
       var numberStoree = [];
       var maa = [];

       inputBoxx.onkeyup = (e) => {
         let userDataa = e.target.value;
         let emptyArrayy = [];
         if(userDataa){
            emptyArrayy = suggettion.filter((data)=>{
            return data.toLocaleLowerCase().startsWith(userDataa.toLocaleLowerCase());
            });
         emptyArrayy =  emptyArrayy.map((data) => {
            return data = '<li>'+ data +'</li>';
         });
            searchWrapperr.classList.add("active")
            showSuggettionss(emptyArrayy);
            let allList = suggBoxx.querySelectorAll("li")
            for (let i = 0; i < allList.length; i++) {
                allList[i].setAttribute("onclick","select1(this)")
            }
         }else{
            searchWrapperr.classList.remove("active")
         }
       }

       function select1(element){
        let selectUserData = element.textContent;
        inputBoxx.value = selectUserData;
        const cat = selectUserData.slice(0, 8)
        numberStoree = [...numberStoree, cat];
        const cat1 = selectUserData.slice(9)
        maa = [...maa, cat1];
        mathee.value = maa;
        nhomthuchienn.value = numberStoree;
        // inputBoxx.value = '';
       }

       function showSuggettionss(list){
        let listData;
        if(!list.length){
             userValue = inputBoxx.value;
             listData = '<li>' + userValue + '</li>';
        }else{
            listData = list.join('')
        }
        suggBoxx.innerHTML = listData;
       }
   </script>

<!-- thêm may 1 -->

  <script type="text/javascript">
       let searchWrapper1 = document.querySelector("#inputmayline1")
       let inputBox1 = document.querySelector("#searchinputmayline1")
       let suggBox1 = document.querySelector("#divmayline1")
       let mathe1 = document.querySelector('#nhomthuchienmay1')
       let nhomthuchien1 = document.querySelector('#mathe1')
       var numberStore11 = [];
       var ma1 = [];
       var nhom1 = [];

       inputBox1.onkeyup = (e) => {
         let userDataa1 = e.target.value;
         let emptyArrayy1 = [];
         if(userDataa1){
            emptyArrayy1 = suggettion.filter((data)=>{
            return data.toLocaleLowerCase().startsWith(userDataa1.toLocaleLowerCase());
            });
         emptyArrayy1 =  emptyArrayy1.map((data) => {
            return data = '<li>'+ data +'</li>';
         });
            // searchWrapper1.classList.add("active")
            suggBox1.style.display = 'block'
            showSuggettions1(emptyArrayy1);
            let allList = suggBox1.querySelectorAll("li")
            for (let i = 0; i < allList.length; i++) {
                allList[i].setAttribute("onclick","select11(this)")
            }
         }else{
            // searchWrapper1.classList.remove("active")
            suggBox1.style.display = 'none'
         }
       }

       function select11(element){
        let selectUserData = element.textContent;
        // inputBox1.value = selectUserData;
        const cat = selectUserData.slice(0, 8)
        numberStore11 = [...numberStore11, cat];
        const cat1 = selectUserData.slice(9)
        ma1 = [...ma1, cat];
        nhom1 = [...nhom1, cat1];
        mathe1.value = ma1;
        nhomthuchien1.value = nhom1;
        // inputBox1.value = '';
       }

       function showSuggettions1(list){
        let listData;
        if(!list.length){
             userValue = inputBox1.value;
             listData = '<li>' + userValue + '</li>';
        }else{
            listData = list.join('')
        }
        suggBox1.innerHTML = listData;
       }
   </script>

<!-- thêm máy 2 -->

   <script type="text/javascript">
       let searchWrapper2 = document.querySelector("#inputmayline2")
       let inputBox2 = document.querySelector("#searchinputmayline2")
       let suggBox2 = document.querySelector("#divmayline2")
       let mathe2 = document.querySelector('#nhomthuchienmay2')
       let nhomthuchien2 = document.querySelector('#mathe2')
       var numberStore2 = [];
       var ma2 = [];
       var nhom2 = [];

       inputBox2.onkeyup = (e) => {
         let userDataa1 = e.target.value;
         let emptyArrayy1 = [];
         if(userDataa1){
            emptyArrayy1 = suggettion.filter((data)=>{
            return data.toLocaleLowerCase().startsWith(userDataa1.toLocaleLowerCase());
            });
         emptyArrayy1 =  emptyArrayy1.map((data) => {
            return data = '<li>'+ data +'</li>';
         });
            searchWrapper2.classList.add("active")
            suggBox2.style.display = 'block'
            showSuggettions2(emptyArrayy1);
            let allList = suggBox2.querySelectorAll("li")
            for (let i = 0; i < allList.length; i++) {
                allList[i].setAttribute("onclick","select2(this)")
            }
         }else{
            searchWrapper2.classList.remove("active")
            suggBox2.style.display = 'none'
         }
       }

       function select2(element){
        let selectUserData = element.textContent;
        inputBox2.value = selectUserData;
        let cat = selectUserData.slice(0, 8)
        numberStore2 = [...numberStore2, cat];
        let cat1 = selectUserData.slice(9)
        ma2 = [...ma2, cat];
        nhom2 = [...nhom2, cat1];
        mathe2.value = ma2;
        nhomthuchien2.value = nhom2;
        // inputBox2.value = '';
       }

       function showSuggettions2(list){
        let listData;
        if(!list.length){
             userValue = inputBox2.value;
             listData = '<li>' + userValue + '</li>';
        }else{
            listData = list.join('')
        }
        suggBox2.innerHTML = listData;
       }
   </script>

<!-- thêm máy 3 -->


<script type="text/javascript">
       let searchWrapper3 = document.querySelector("#inputmayline3")
       let inputBox3 = document.querySelector("#searchinputmayline3")
       let suggBox3 = document.querySelector("#divmayline3")
       let mathe3 = document.querySelector('#nhomthuchienmay3')
       let nhomthuchien3 = document.querySelector('#mathe3')
       var numberStore3 = [];
       var ma3 = [];
       var nhom3 = [];

       inputBox3.onkeyup = (e) => {
         let userDataa1 = e.target.value;
         let emptyArrayy1 = [];
         if(userDataa1){
            emptyArrayy1 = suggettion.filter((data)=>{
            return data.toLocaleLowerCase().startsWith(userDataa1.toLocaleLowerCase());
            });
         emptyArrayy1 =  emptyArrayy1.map((data) => {
            return data = '<li>'+ data +'</li>';
         });
            searchWrapper3.classList.add("active")
            suggBox3.style.display = 'block'
            showSuggettions3(emptyArrayy1);
            let allList = suggBox3.querySelectorAll("li")
            for (let i = 0; i < allList.length; i++) {
                allList[i].setAttribute("onclick","select3(this)")
            }
         }else{
            searchWrapper3.classList.remove("active")
            suggBox3.style.display = 'none'
         }
       }

       function select3(element){
        let selectUserData = element.textContent;
        inputBox3.value = selectUserData;
        const cat = selectUserData.slice(0, 8)
        numberStore3 = [...numberStore3, cat];
        const cat1 = selectUserData.slice(9)
        ma3 = [...ma3, cat];
        nhom3 = [...nhom3, cat1];
        mathe3.value = ma3;
        nhomthuchien3.value = nhom3;
        // inputBox3.value = '';
       }

       function showSuggettions3(list){
        let listData;
        if(!list.length){
             userValue = inputBox3.value;
             listData = '<li>' + userValue + '</li>';
        }else{
            listData = list.join('')
        }
        suggBox3.innerHTML = listData;
       }
   </script>


   <!-- thêm máy 4 -->


<script type="text/javascript">
       let searchWrapper4 = document.querySelector("#inputmayline4")
       let inputBox4 = document.querySelector("#searchinputmayline4")
       let suggBox4 = document.querySelector("#divmayline4")
       let mathe4 = document.querySelector('#nhomthuchienmay4')
       let nhomthuchien4 = document.querySelector('#mathe4')
       var numberStore4 = [];
       var ma4 = [];
       var nhom4 = [];

       inputBox4.onkeyup = (e) => {
         let userDataa1 = e.target.value;
         let emptyArrayy1 = [];
         if(userDataa1){
            emptyArrayy1 = suggettion.filter((data)=>{
            return data.toLocaleLowerCase().startsWith(userDataa1.toLocaleLowerCase());
            });
         emptyArrayy1 =  emptyArrayy1.map((data) => {
            return data = '<li>'+ data +'</li>';
         });
            searchWrapper4.classList.add("active")
            suggBox4.style.display = 'block'
            showSuggettions4(emptyArrayy1);
            let allList = suggBox4.querySelectorAll("li")
            for (let i = 0; i < allList.length; i++) {
                allList[i].setAttribute("onclick","select4(this)")
            }
         }else{
            searchWrapper4.classList.remove("active")
            suggBox4.style.display = 'none'
         }
       }

       function select4(element){
        let selectUserData = element.textContent;
        inputBox4.value = selectUserData;
        const cat = selectUserData.slice(0, 8)
        numberStore4 = [...numberStore4, cat];
        const cat1 = selectUserData.slice(9)
        nhom4 = [...nhom4, cat1];
        ma4 = [...ma4, cat];
        mathe4.value = ma4;
        nhomthuchien4.value = nhom4;
        // inputBox4.value = '';
       }

       function showSuggettions4(list){
        let listData;
        if(!list.length){
             userValue = inputBox4.value;
             listData = '<li>' + userValue + '</li>';
        }else{
            listData = list.join('')
        }
        suggBox4.innerHTML = listData;
       }
   </script>

  
  <!-- thêm máy 5 -->


  <script type="text/javascript">
       let searchWrapper5 = document.querySelector("#inputmayline5")
       let inputBox5 = document.querySelector("#searchinputmayline5")
       let suggBox5 = document.querySelector("#divmayline5")
       let mathe5 = document.querySelector('#nhomthuchienmay5')
       let nhomthuchien5 = document.querySelector('#mathe5')
       var numberStore5 = [];
       var ma5 = [];
       var nhom5 = [];

       inputBox5.onkeyup = (e) => {
         let userDataa1 = e.target.value;
         let emptyArrayy1 = [];
         if(userDataa1){
            emptyArrayy1 = suggettion.filter((data)=>{
            return data.toLocaleLowerCase().startsWith(userDataa1.toLocaleLowerCase());
            });
         emptyArrayy1 =  emptyArrayy1.map((data) => {
            return data = '<li>'+ data +'</li>';
         });
            searchWrapper5.classList.add("active")
            suggBox5.style.display = 'block'
            showSuggettions5(emptyArrayy1);
            let allList = suggBox5.querySelectorAll("li")
            for (let i = 0; i < allList.length; i++) {
                allList[i].setAttribute("onclick","select5(this)")
            }
         }else{
            searchWrapper5.classList.remove("active")
            suggBox5.style.display = 'none'
         }
       }

       function select5(element){
        let selectUserData = element.textContent;
        inputBox5.value = selectUserData;
        const cat = selectUserData.slice(0, 8)
        numberStore5 = [...numberStore5, cat];
        const cat1 = selectUserData.slice(9)
        ma5 = [...ma5, cat];
        nhom5 = [...nhom5, cat1];
        mathe5.value = ma5;
        nhomthuchien5.value = nhom5;
        // inputBox5.value = '';
       }

       function showSuggettions5(list){
        let listData;
        if(!list.length){
             userValue = inputBox5.value;
             listData = '<li>' + userValue + '</li>';
        }else{
            listData = list.join('')
        }
        suggBox5.innerHTML = listData;
       }
   </script>


<!-- thêm máy 6 -->


<script type="text/javascript">
       let searchWrapper6 = document.querySelector("#inputmayline6")
       let inputBox6 = document.querySelector("#searchinputmayline6")
       let suggBox6 = document.querySelector("#divmayline6")
       let mathe6 = document.querySelector('#nhomthuchienmay6')
       let nhomthuchien6 = document.querySelector('#mathe6')
       var numberStore6 = [];
       var ma6 = [];
       var nhom6 = [];

       inputBox6.onkeyup = (e) => {
         let userDataa1 = e.target.value;
         let emptyArrayy1 = [];
         if(userDataa1){
            emptyArrayy1 = suggettion.filter((data)=>{
            return data.toLocaleLowerCase().startsWith(userDataa1.toLocaleLowerCase());
            });
         emptyArrayy1 =  emptyArrayy1.map((data) => {
            return data = '<li>'+ data +'</li>';
         });
            searchWrapper6.classList.add("active")
            suggBox6.style.display = 'block'
            showSuggettions6(emptyArrayy1);
            let allList = suggBox6.querySelectorAll("li")
            for (let i = 0; i < allList.length; i++) {
                allList[i].setAttribute("onclick","select6(this)")
            }
         }else{
            searchWrapper6.classList.remove("active")
            suggBox6.style.display = 'none'
         }
       }

       function select6(element){
        let selectUserData = element.textContent;
        inputBox6.value = selectUserData;
        const cat = selectUserData.slice(0, 8)
        numberStore6 = [...numberStore6, cat];
        const cat1 = selectUserData.slice(9)
        ma6 = [...ma6, cat];
        nhom6 = [...nhom6, cat1];
        mathe6.value = ma6;
        nhomthuchien6.value = nhom6;
        // inputBox6.value = '';
       }

       function showSuggettions6(list){
        let listData;
        if(!list.length){
             userValue = inputBox6.value;
             listData = '<li>' + userValue + '</li>';
        }else{
            listData = list.join('')
        }
        suggBox6.innerHTML = listData;
       }
   </script>



<!-- thêm máy 7 -->


<script type="text/javascript">
       let searchWrapper7 = document.querySelector("#inputmayline7")
       let inputBox7 = document.querySelector("#searchinputmayline7")
       let suggBox7 = document.querySelector("#divmayline7")
       let mathe7 = document.querySelector('#nhomthuchienmay7')
       let nhomthuchien7 = document.querySelector('#mathe7')
       var numberStore7 = [];
       var ma7 = [];
       var nhom7 = [];

       inputBox7.onkeyup = (e) => {
         let userDataa1 = e.target.value;
         let emptyArrayy1 = [];
         if(userDataa1){
            emptyArrayy1 = suggettion.filter((data)=>{
            return data.toLocaleLowerCase().startsWith(userDataa1.toLocaleLowerCase());
            });
         emptyArrayy1 =  emptyArrayy1.map((data) => {
            return data = '<li>'+ data +'</li>';
         });
            searchWrapper7.classList.add("active")
            suggBox7.style.display = 'block'
            showSuggettions7(emptyArrayy1);
            let allList = suggBox7.querySelectorAll("li")
            for (let i = 0; i < allList.length; i++) {
                allList[i].setAttribute("onclick","select7(this)")
            }
         }else{
            searchWrapper7.classList.remove("active")
            suggBox7.style.display = 'none'
         }
       }

       function select7(element){
        let selectUserData = element.textContent;
        inputBox7.value = selectUserData;
        const cat = selectUserData.slice(0, 8)
        numberStore7 = [...numberStore7, cat];
        const cat1 = selectUserData.slice(9)
        ma7 = [...ma7, cat];
        nhom7 = [...nhom7, cat1];
        mathe7.value = ma7;
        nhomthuchien7.value = nhom7;
        // inputBox7.value = '';
       }

       function showSuggettions7(list){
        let listData;
        if(!list.length){
             userValue = inputBox7.value;
             listData = '<li>' + userValue + '</li>';
        }else{
            listData = list.join('')
        }
        suggBox7.innerHTML = listData;
       }
   </script>



<!-- thêm máy 8 -->


<script type="text/javascript">
       let searchWrapper8 = document.querySelector("#inputmayline8")
       let inputBox8 = document.querySelector("#searchinputmayline8")
       let suggBox8 = document.querySelector("#divmayline8")
       let mathe8 = document.querySelector('#nhomthuchienmay8')
       let nhomthuchien8 = document.querySelector('#mathe8')
       var numberStore8 = [];
       var ma8 = [];
       var nhom8 = [];

       inputBox8.onkeyup = (e) => {
         let userDataa1 = e.target.value;
         let emptyArrayy1 = [];
         if(userDataa1){
            emptyArrayy1 = suggettion.filter((data)=>{
            return data.toLocaleLowerCase().startsWith(userDataa1.toLocaleLowerCase());
            });
         emptyArrayy1 =  emptyArrayy1.map((data) => {
            return data = '<li>'+ data +'</li>';
         });
            searchWrapper8.classList.add("active")
            suggBox8.style.display = 'block'
            showSuggettions8(emptyArrayy1);
            let allList = suggBox8.querySelectorAll("li")
            for (let i = 0; i < allList.length; i++) {
                allList[i].setAttribute("onclick","select8(this)")
            }
         }else{
            searchWrapper8.classList.remove("active")
            suggBox8.style.display = 'none'
         }
       }

       function select8(element){
        let selectUserData = element.textContent;
        inputBox8.value = selectUserData;
        const cat = selectUserData.slice(0, 8)
        numberStore8 = [...numberStore8, cat];
        const cat1 = selectUserData.slice(9)
        nhom8 = [...nhom8, cat1];
        ma8 = [...ma8, cat];
        mathe8.value = ma8;
        nhomthuchien8.value = nhom8;
        // inputBox8.value = '';
       }

       function showSuggettions8(list){
        let listData;
        if(!list.length){
             userValue = inputBox8.value;
             listData = '<li>' + userValue + '</li>';
        }else{
            listData = list.join('')
        }
        suggBox8.innerHTML = listData;
       }
   </script>



<!-- thêm máy 9 -->



<script type="text/javascript">
       let searchWrapper9 = document.querySelector("#inputmayline9")
       let inputBox9 = document.querySelector("#searchinputmayline9")
       let suggBox9 = document.querySelector("#divmayline9")
       let mathe9 = document.querySelector('#nhomthuchienmay9')
       let nhomthuchien9 = document.querySelector('#mathe9')
       var numberStore9 = [];
       var ma9 = [];
       var nhom9 = [];

       inputBox9.onkeyup = (e) => {
         let userDataa1 = e.target.value;
         let emptyArrayy1 = [];
         if(userDataa1){
            emptyArrayy1 = suggettion.filter((data)=>{
            return data.toLocaleLowerCase().startsWith(userDataa1.toLocaleLowerCase());
            });
         emptyArrayy1 =  emptyArrayy1.map((data) => {
            return data = '<li>'+ data +'</li>';
         });
            searchWrapper9.classList.add("active")
            suggBox9.style.display = 'block'
            showSuggettions9(emptyArrayy1);
            let allList = suggBox9.querySelectorAll("li")
            for (let i = 0; i < allList.length; i++) {
                allList[i].setAttribute("onclick","select9(this)")
            }
         }else{
            searchWrapper9.classList.remove("active")
            suggBox9.style.display = 'none'
         }
       }

       function select9(element){
        let selectUserData = element.textContent;
        inputBox9.value = selectUserData;
        const cat = selectUserData.slice(0, 8)
        numberStore9 = [...numberStore9, cat];
        const cat1 = selectUserData.slice(9)
        ma9 = [...ma9, cat];
        nhom9 = [...nhom9, cat1];
        mathe9.value = ma9;
        nhomthuchien9.value = nhom9;
        // inputBox9.value = '';
       }

       function showSuggettions9(list){
        let listData;
        if(!list.length){
             userValue = inputBox9.value;
             listData = '<li>' + userValue + '</li>';
        }else{
            listData = list.join('')
        }
        suggBox9.innerHTML = listData;
       }
   </script>



   <!-- thêm máy 10 -->




   <script type="text/javascript">
       let searchWrapper10 = document.querySelector("#inputmayline10")
       let inputBox10 = document.querySelector("#searchinputmayline10")
       let suggBox10 = document.querySelector("#divmayline10")
       let mathe10 = document.querySelector('#nhomthuchienmay10')
       let nhomthuchien10 = document.querySelector('#mathe10')
       var numberStore10 = [];
       var ma10 = [];
       var nhom10 = [];

       inputBox10.onkeyup = (e) => {
         let userDataa1 = e.target.value;
         let emptyArrayy1 = [];
         if(userDataa1){
            emptyArrayy1 = suggettion.filter((data)=>{
            return data.toLocaleLowerCase().startsWith(userDataa1.toLocaleLowerCase());
            });
         emptyArrayy1 =  emptyArrayy1.map((data) => {
            return data = '<li>'+ data +'</li>';
         });
            searchWrapper10.classList.add("active")
            suggBox10.style.display = 'block'
            showSuggettions10(emptyArrayy1);
            let allList = suggBox10.querySelectorAll("li")
            for (let i = 0; i < allList.length; i++) {
                allList[i].setAttribute("onclick","select10(this)")
            }
         }else{
            searchWrapper10.classList.remove("active")
            suggBox10.style.display = 'none'
         }
       }

       function select10(element){
        let selectUserData = element.textContent;
        inputBox10.value = selectUserData;
        const cat = selectUserData.slice(0, 8)
        numberStore10 = [...numberStore10, cat];
        const cat1 = selectUserData.slice(9)
        nhom10 = [...nhom10, cat1];
        ma10 = [...ma10, cat];
        mathe10.value = ma10;
        nhomthuchien10.value = nhom10;
        // inputBox10.value = '';
       }

       function showSuggettions10(list){
        let listData;
        if(!list.length){
             userValue = inputBox10.value;
             listData = '<li>' + userValue + '</li>';
        }else{
            listData = list.join('')
        }
        suggBox10.innerHTML = listData;
       }
   </script>



   <script type="text/javascript">
       let suggettion = [
       "V0264157-nguyen van thang",
       "V0264390-nguyen quang lam",
       "V0264732-nguyen tjan anh",
       "V0264948-nguyen van lam",
       "V0264237-tran van do",
       "V0264183-le van luong",
       "V0938283-tran thi dung",
       "V0298483-nguyen lan anh",
       "V0938288-tran thi lan",
       ];
   </script>






<script type="text/javascript">
    document.getElementById("idtenmay").addEventListener("change", myFunction);

function myFunction() {
  var x = document.getElementById("idtenmay");
  x.value = x.value.toUpperCase();
  var chuoi = x.value.search("LINE");
    if(chuoi){
      document.getElementById("idtenmay").classList.add("form-control");
      document.getElementById("idtenmay").classList.add("is-invalid");
      document.getElementById("idspan").innerText = 'Vui Lòng Nhập Có Từ LINE...vd:line 2'
      document.getElementById("idspan").style.color = 'red'
  }else{
    document.getElementById("idtenmay").classList.remove("form-control");
    document.getElementById("idtenmay").classList.remove("is-invalid");
    document.getElementById("idtenmay").classList.add("form-control");
    document.getElementById("idtenmay").classList.add("is-valid");
    document.getElementById("idspan").innerText = ''
  }
}

</script>


<script type="text/javascript">
    document.getElementById("tenmayy").addEventListener("change", myFunction1);

function myFunction1() {
  var x = document.getElementById("tenmayy");
  x.value = x.value.toUpperCase();
  var chuoi = x.value.search("LINE");
    if(!chuoi){
      document.getElementById("tenmayy").classList.add("form-control");
      document.getElementById("tenmayy").classList.add("is-invalid");
      document.getElementById("idspan1").innerText = 'Vui Lòng Nhập Không Có Từ Line'
      document.getElementById("idspan1").style.color = 'red'
  }else{
    document.getElementById("tenmayy").classList.remove("form-control");
    document.getElementById("tenmayy").classList.remove("is-invalid");
    document.getElementById("tenmayy").classList.add("form-control");
    document.getElementById("tenmayy").classList.add("is-valid");
    document.getElementById("idspan1").innerText = ''
  }
}

</script>



<script type="text/javascript">
   window.onload = function()
{
  if(sessionStorage.getItem('key')!=1997){
      window.location="../Controller/index.php?action=test2#tableselectdata";
  }
};
</script>
   
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


</body>
</html>