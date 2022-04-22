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
           $tableee = 'tiendoquydinh';
           
            $tenmay1 = $dataID['tenmay'];
            $ngaybatdau1 = $dataID['ngaybatdau'];
            $datamay = $db->getDatamay($tablee,$tenmay1,$ngaybatdau1);
            $datamay1 = $db->getDatamay($tableee,$tenmay1,$ngaybatdau1);
            $idmay = $datamay['id'];
            $idmay1 = $datamay1['id'];

           if(isset($_POST['submitedit']))
           {
            

            $tenmay = $_POST['tenmay'];
            $ngaybatdau = $_POST['ngaybatdau'];
            $ngaydukien = $_POST['ngaydukien'];
            $nhomthuchien = $_POST['nhomthuchien'];
            $bophan = $_POST['bophan'];
            if($db->UpdateData($id,$tenmay,$ngaybatdau,$ngaydukien,$bophan,$nhomthuchien)&&$db->Updatemay($idmay1,$tenmay,$ngaybatdau)&&$db->Updatemay1($idmay,$tenmay,$ngaybatdau))
            {
                header('Location: ../Controller/index.php?action=test2');
            }
           } 

        $tablee = 'tiendo';
        $tenmay = $dataID['tenmay'];
        $ngaybatdau = $dataID['ngaybatdau'];
        $datatiendo = $db->getDatatiendo($tablee,$tenmay,$ngaybatdau);

        $tablee1 = 'tiendoquydinh';
        $datatiendo1 = $db->getDatatiendo1($tablee1,$tenmay,$ngaybatdau);

        

       

       
     }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cập Nhật Tiến Độ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../bootstrap-5/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<nav style="">              
   <a href="../Controller/index.php?action=test2" class="btn btn-success" style="font-size:20px;margin-left: 10px; margin-top: 10px;">Trang Chủ</a>
</nav>
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
    <section class="book" id="book" style="">
    <div class="w-auto" style=" border-radius: 10px; margin-left: 0px;">
    <form action="" method="POST">
           <div>
             <ul style="font-size: 40px; display: inline; display: inline-block; width: 100%;margin-top: 0px;text-align: center;">
                <li style="display: inline; "><a href="#" style="text-decoration: none;" class="aec">Sửa Tiến Độ</a></li>
              </ul>  
           </div>
            <div class="inputBox" style=" width: 100%;">
                <input type="text" name="tenmay" required ="required" value="<?php echo $dataID['tenmay']; ?>" style="width: 80%;  text-align: center;margin-left: 10%;font-size: 30px; margin-top: 10px;">
            </div>
                      
            <div class="inputBox" style="">
                <input type="date" name="ngaybatdau" required ="required" value="<?php echo $dataID['ngaybatdau']; ?>" style="width: 80%;text-align: center;font-size: 30px; margin-left: 10%; margin-top: 15px;">
            </div>
            <div class="inputBox">
                <input type="date" name="ngaydukien" required ="required" value="<?php echo $dataID['ngaydukien']; ?>" style="width: 80%;text-align: center;font-size: 30px; margin-left: 10%;margin-top: 20px;">
            </div>
             <div class="inputBox">
                <input type="text" name="nhomthuchien" required ="required" value="<?php echo $dataID['nhomthuchien']; ?>" style="width: 80%;font-size: 30px; text-align: center;  margin-left: 10%;margin-top: 20px;">
            </div>
            <div class="inputBox">
                <select class="form-control" required ="required" name="bophan" style="width: 80%;margin-left: 10%; text-align: center;font-size: 20px; height: 45px;margin-top: 20px;" >
                    <?php
                    if($dataID['bophan']=='AEC' )
                        {
                          echo  "<option value='AEC'>AEC</option>
                          <option value='TSC'>TSC</option>
                         <option value='APS'>APS</option>";

                        }
                    if($dataID['bophan']=='TSC' )
                        {
                        echo "<option value='TSC'>TSC</option>
                          <option value='AEC'>AEC</option>
                         <option value='APS'>APS</option>";

                        }
                    if($dataID['bophan']=='APS' )
                        {
                          echo "  <option value='APS'>APS</option>
                          <option value='TSC'>TSC</option>
                         <option value='AEC'>AEC</option>";

                        }
                        ?>
                    
                </select>
            </div>
            <input type="submit" class="btn btn-success" value="Cập Nhập" name="submitedit" style="margin-left: 36%;margin-top: 20px;margin-bottom: 20px; width: 25%;height: 50px;">
       </form>
    </div>

  </section>
     


<script type="text/javascript">
    document.getElementById("xacnhan").addEventListener("click", myFunction);

function myFunction() {

     var x = document.getElementById("idmatkhau");
     var y = document.getElementById("span");
  x.value = x.value.toUpperCase();
    if(x.value == '1997'){
        document.getElementById("idmatkhau").classList.remove("is-invalid");
        document.getElementById("xacnhan1").style.display = '';
        document.getElementById("xacnhan").style.display = 'none';
    }else{
      document.getElementById("idmatkhau").classList.add("is-invalid");
      document.getElementById("span").innerText = 'Mật Khẩu Không Đúng'
      document.getElementById("span").style.color = 'red'
    }
    
}


</script>

<script type="text/javascript" src="../codejavascript/javascript.js"></script>
<script type="text/javascript" src="../codejavascript/script.js"></script>
</body>
</html>