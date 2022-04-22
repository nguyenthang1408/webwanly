<?php
include "../Model/DBconfig.php";
$db = new Database();
$db -> connect();
session_start();

if(isset($_GET['id'])){
           $id = $_GET['id'];
           $table = "tiendomaymoc";
           $dataID = $db->getDataID($table,$id);

           $tableee = 'tiendoquydinhline';
            $tenmay1 = $dataID['tenmay'];
            $ngaybatdau1 = $dataID['ngaybatdau'];
            $datamay1 = $db->getDatamay($tableee,$tenmay1,$ngaybatdau1);
            $idmay = $datamay1['id'];
           if(isset($_POST['edit']))
           {
            

            $tenmay = $_POST['tenmay'];
            $may1 = $_POST['may1'];
            $may2 = $_POST['may2'];
            $may3 = $_POST['may3'];
            $may4 = $_POST['may4'];
            $may5 = $_POST['may5'];
            $may6 = $_POST['may6'];
            $may7 = $_POST['may7'];
            $may8 = $_POST['may8'];
            $may9 = $_POST['may9'];
            $may10 = $_POST['may10'];
            $bophan = $_POST['bophan'];
             
            $table1 = 'tiendo1';

            if($db->Updateline($idmay,$tenmay,$may1,$may2,$may3,$may4,$may5,$may6,$may7,$may8,$may9,$may10,$bophan)&&$db->Updatebophan1($bophan,$tenmay))
            {
                header('Location: ../Controller/index.php?action=test2#book');
            }
           } 

        
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
             <div class="container">
                <div class="row">
                    <div class="col-lg-6"style="">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Tên Máy:</label>
                             <input type="text"  required ="required" value="<?php echo $datamay1['tenmay']; ?>" readonly name="tenmay" class="form-control" id="tenmay">
                          </div>
                          <div>
                              <span id="idspan"></span>
                          </div>
                         <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Máy 1:</label>
                             <input type="text"  required ="required" value="<?php echo $datamay1['may1']; ?>" name="may1" class="form-control" id="thietke">
                          </div>
                          <div class="mb-3">
                            <label for="recipient-name" required ="required" class="col-form-label">Máy 2:</label>
                            <input class="form-control" id="may2" value="<?php echo $datamay1['may2']; ?>" type="text"required ="required" name="may2">
                          </div>
                          <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Máy 3:</label>
                            <input required ="required" value="<?php echo $datamay1['may3']; ?>" class="form-control" type="text"  id="may3" name="may3">
                          </div>
                          <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Máy 4:</label>
                            <input class="form-control" id="may4" type="text" value="<?php echo $datamay1['may4']; ?>"  required ="required" name="may4">
                          </div>
                          <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Máy 5:</label>
                            <input class="form-control" id="may5" type="text" value="<?php echo $datamay1['may5']; ?>"  required ="required" name="may5">
                          </div>
                    </div>
                    <div class="col-lg-6"style="">
                        <div class="mb-3">
                           
                         <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Máy 6:</label>
                            <input required ="required" class="form-control" type="text" value="<?php echo $datamay1['may6']; ?>" id="may6" name="may6">
                          </div>
                          <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Máy 7:</label>
                            <input class="form-control" id="may7" type="text" value="<?php echo $datamay1['may7']; ?>" required ="required" name="may7">
                          </div>
                          <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Máy 8:</label>
                            <input class="form-control" id="may8" type="text" value="<?php echo $datamay1['may8']; ?>" required ="required" name="may8">
                          </div>
                          <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Máy 9:</label>
                            <input class="form-control" id="may9" type="text" value="<?php echo $datamay1['may9']; ?>" required ="required" name="may9">
                          </div>
                          <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Máy 10:</label>
                            <input class="form-control" id="may10" type="text" value="<?php echo $datamay1['may10']; ?>" required ="required" name="may10">
                          </div>
                    </div>
                </div>
            </div>    

            <div class="inputBox">
                <select class="form-control" required ="required" name="bophan" style="width: 73%;margin-left: 13.4%; text-align: center;font-size: 20px; height: 45px;margin-top: 20px;" >
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
            <input type="submit" class="btn btn-success" name="edit" value="Cập Nhập" style="margin-left: 36%;margin-top: 20px;margin-bottom: 20px; width: 25%;height: 50px;">
        </form>
    </div>

 

<script type="text/javascript">
    document.getElementById("tenmay").addEventListener("change", myFunction);

function myFunction() {
  var x = document.getElementById("tenmay");
  x.value = x.value.toUpperCase();
  var chuoi = x.value.search("LINE");
  if(chuoi){
      document.getElementById("tenmay").classList.add("form-control");
      document.getElementById("tenmay").classList.add("is-invalid");
      document.getElementById("idspan").innerText = 'Vui Lòng Nhập Có Từ LINE'
      document.getElementById("idspan").style.color = 'red'
  }else{
    document.getElementById("tenmay").classList.remove("form-control");
    document.getElementById("tenmay").classList.remove("is-invalid");
    document.getElementById("tenmay").classList.add("form-control");
    document.getElementById("tenmay").classList.add("is-valid");
    document.getElementById("idspan").innerText = ''
  }
}

</script>


<script type="text/javascript" src="../codejavascript/javascript.js"></script>
<script type="text/javascript" src="../codejavascript/script.js"></script>
</body>
</html>