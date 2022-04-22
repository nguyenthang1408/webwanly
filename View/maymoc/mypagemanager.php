<?php
include "../Model/DBconfig.php";
$db = new Database();
$db -> connect();
session_start();

$table = 'tiendoquydinh';
$data = $db->getAllData($table);
if(isset($_POST['edit11'])){
	  $tenmay = $_POST['tenmay'];
	  $ngaybatdau = $_POST['ngaybatdau'];
	  $dfm = $_POST['dfm'].'%';
	  $to2d = $_POST['to2d'].'%';
	  $giacongvadathang = $_POST['giacongvadathang'].'%';
	  $lapdatvachinhmay = $_POST['lapdatvachinhmay'].'%';
	  $buyoff = $_POST['buyoff'].'%';


	   $dfm1 = $_POST['dfm'];
	  $to2d1 = $_POST['to2d'];
	  $giacongvadathang1 = $_POST['giacongvadathang'];
	  $lapdatvachinhmay1 = $_POST['lapdatvachinhmay'];
	  $buyoff1 = $_POST['buyoff'];

      
      if($dfm1+$to2d1+$giacongvadathang1+$lapdatvachinhmay1+$buyoff1=='100')
      {
		  if($db->UpdateTienDoQuyDinh($dfm,$to2d,$giacongvadathang,$lapdatvachinhmay,$buyoff,$tenmay,$ngaybatdau))
		  {
		  	 header('location: ../Controller/index.php?action=mypagemanager');
		  }
	  }else{
		$message = "Nhập Lại Phải Bằng 100";
        echo "<script type='text/javascript'>alert('$message');</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Page</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap-5/css/bootstrap.min.css">
	  <script type="text/javascript" src="../bootstrap-5/js/bootstrap.js"></script>
  <script type="text/javascript" src="../bootstrap-5/js/bootstrap.min.js"></script>
</head>
<body>
<div>
	<a class="btn btn-success" href="../Controller/index.php?action=mypage" style="text-decoration:none;margin-top: 1%;margin-left: 1%;">Trang Chủ</a>
	<h1 class="text-center">Bảng Quy Định Tiến Độ</h1>
</div>
<input type="text" name="search" placeholder="Tìm Kiếm Tên Máy" id="search" onkeyup="tableSearch()" style="float:right;margin-right: 5%;width: 20%;">
<div style=" overflow-x: 100%;overflow-y: 800px; ">
<table class="table" style="margin-top: 2%;" id="tableid">
  <thead class="thead-dark">
    <tr>
      <th style="font-size: 15px;  width: auto;">#</th>
                <th style="">
                    Tên Máy
                </th>    
                <th col-index = 1 style="width: 9%;">
                    Ngày Bắt Đầu
                </th>
                <th style="">DFM</th>
                <th style="">3DTo2D</th>
                <th style="">Gia Công Và Đặt Hàng</th>
                <th style="">Lắp Đặt Và Chỉnh Máy</th>
                <th>Buyoff</th>
                <td>Thông Tin</td>
    </tr>
  </thead>
  <tbody>
  	<?php foreach ($data as $value) {
  		 ?>
    <tr>
      <th scope="row"><?php echo $value['id'] ?></th>
      <td><?php echo $value['tenmay'] ?></td>
      <td><?php echo $value['ngaybatdau'] ?></td>
      <td><?php echo $value['dfm'] ?></td>
      <td><?php echo $value['3dto2d'] ?></td>
      <td><?php echo $value['giacongvadathang'] ?></td>
      <td><?php echo $value['lapdatvachinhmay'] ?></td>
      <td><?php echo $value['buyoff'] ?></td>
      <td>
      	  <button type="button" class="btn btn-primary editbtn" id="hihi" data-bs-toggle="modal" data-bs-target="#editmodal-<?php echo $value['id']; ?>" data-bs-whatever="@mdo" style="">Sửa</button>
      </td>
    </tr>
      	<?php } ?>
  </tbody>
</table>

<?php foreach ($data as $value) {

	$dau1 = $value['dfm'];
    $ch1 = substr($dau1, 0, -1);
    $dau2 = $value['3dto2d'];
    $ch2 = substr($dau2, 0, -1);
    $dau3 = $value['giacongvadathang'];
    $ch3 = substr($dau3, 0, -1);
    $dau4 = $value['lapdatvachinhmay'];
    $ch4 = substr($dau4, 0, -1);
    $dau5 = $value['buyoff'];
    $ch5 = substr($dau5, 0, -1);
   



?>
<form method="POST" action=""> 
  <div class="modal fade" id="editmodal-<?php echo $value['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-body">
        <div style="margin-top:0px;">
             <ul style="font-size: 40px; display: inline; display: inline-block; width: 100%;margin-top: 10px;">
                <li style="display: inline; margin-left: 20%;width: 70%;"><a href="" style="text-decoration: none;color:#FF6699; font-size: 150%;font-weight: bold;" class="aec">Thêm Tiến Độ Công Đoạn</a></li>
              </ul>  
           </div>
           <div class="container">
                <div class="row">

                    <div class="col-lg-6"style="">
                    	 <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Tên Máy:</label>
                             <input type="text"  readonly value="<?php echo $value['tenmay']; ?>" name="tenmay" class="form-control" id="tenmay">
                          </div>
                         <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">DFM:</label>
                             <input type="number" min="0" max="100" value="<?php echo $ch1; ?>" required ="required" name="dfm" class="form-control" id="dfm">
                          </div>
                          <div class="mb-3">
                            <label for="recipient-name" required ="required" class="col-form-label">3DTo2D:</label>
                            <input class="form-control" id="to2d" value="<?php echo $ch2; ?>" type="number" min="0" required ="required" max="100" name="to2d">
                          </div>
                          <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Gia Công Và Đặt Hàng:</label>
                            <input required ="required" class="form-control" value="<?php echo $ch3; ?>" type="number" min="0" max="100" id="giacongvadathang" name="giacongvadathang">
                          </div>
                         
                      </div>
                      <div class="col-lg-6"style="">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Ngày Bắt Đầu:</label>
                             <input type="text"  readonly value="<?php echo $value['ngaybatdau']; ?>" name="ngaybatdau" class="form-control" id="ngaybatdau">
                          </div>
                           <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Lắp Đặt Và Chỉnh Máy:</label>
                            <input class="form-control" id="lapdatvachinhmay" value="<?php echo $ch4; ?>" type="number" min="0" max="100" required ="required" name="lapdatvachinhmay">
                          </div>
                          <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Buyoff:</label>
                            <input class="form-control" id="buyoff" value="<?php echo $ch5; ?>" type="number" min="0" max="100" required ="required" name="buyoff">
                          </div>
                      </div>
                </div>
            </div>    
      </div>
      <div class="modal-footer" style="background:#EEEEEE">
      	<input type="number" name="tong" id="tong" style="margin-right: 2%;">
        <button type="button" class="btn btn-secondary" style="width: 10%;height: 100%" data-bs-dismiss="modal">Đóng</button>
        <button type="submit" class="btn btn-primary" style="width: 10%;height: 100%" id="edit11" name="edit11">Sửa</button>
      </div>
    </div>
  </div>
</div>
</form>
<?php } ?>
</div>



<script type="text/javascript">
	function tableSearch(){
        let input, filter, table, tr ,td, i, txtvalue;
        input = document.getElementById("search");
        filter = input.value.toUpperCase();
        table = document.getElementById("tableid");
        tr = table.getElementsByTagName("tr");
        for (let i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if(td){
            	txtvalue = td.textContent || td.innerText;
            	if(txtvalue.toUpperCase().indexOf(filter)>-1){
            		tr[i].style.display = "";
            	}else{
            		tr[i].style.display = "none";
            	}
            }
        }
        }


          
</script>
</body>
</html>