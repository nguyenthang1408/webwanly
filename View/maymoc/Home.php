<?php 
include "../Model/DBconfig.php";
session_start();
$db = new Database();
$db -> connect();

if(!isset($_SESSION['username']))
{
    header('Location: ../Controller/index.php?action=login');
}
if($_SESSION['name_admin'] != 1)
{
    header('Location: ../Controller/index.php?action=login');
}


$AEC = 'AEC';
$TSC = 'TSC';
$APS = 'APS';
if(isset($_POST['dangxuat'])){
    session_destroy();
    header('Location: ../Controller/index.php?action=begin');
}
$table = 'tiendomaymoc';
$data1 = $db->getAllData($table);
$dataAEC = $db->getAllDatabophan($table,$AEC);
$dataTSC = $db->getAllDatabophan($table,$TSC);
$dataAPS = $db->getAllDatabophan($table,$APS);
$num_row = $db->count_row($table);
$count_row_AEC = $db->count_row_bophan($table,$AEC);
$count_row_TSC = $db->count_row_bophan($table,$TSC);
$count_row_APS = $db->count_row_bophan($table,$APS);
$count_all_data = $db->count_row_alldata($table);

$num = $num_row;
$counthoanthanh = 0;
$countchua = 0;
$counttruocdukien = 0;
$countsaudukien = 0;

if($count_all_data>0)
{

foreach ($data1 as $value) {
   $ngaybatdau = $value['ngaybatdau'];
   $ngaydukien = $value['ngaydukien'];
   $today = date("Y-m-d");
   if(strtotime($ngaydukien) > strtotime($today)&&$value['tiendo']=='100%')
   {
        $counttruocdukien++;
   }
   else if(strtotime($ngaydukien) < strtotime($today)&&$value['tiendo']=='100%'){
        $countsaudukien++;
   }
    if($value['tiendo']=='100%')
    {
        $counthoanthanh++;
    }else{
        $countchua++;
    }

}
}
$demAEC = 0;
$demAEC1 = 0;
$demTSC = 0;
$demTSC1 = 0;
$demAPS = 0;
$demAPS1 = 0;
if($count_row_AEC!=0)
{
    $tongaec = 0;
foreach ($dataAEC as $value) {
      $dau = $value['tiendo'];
      $ch = substr($dau, 0, -1);
      if($ch == ""){
        $ch=0;
      }
      $tongaec = $tongaec+$ch;
}
$phantramAEC = round(($tongaec/$count_row_AEC),2).'%';
}else{
    $demAEC=0;
    $phantramAEC = 'Không có dữ Liệu';
}

if($count_row_TSC!=0)
{
    $tongtsc = 0;
foreach ($dataTSC as $value2) {
      $dau1 = $value2['tiendo'];
      $ch1 = substr($dau1, 0, -1);

      $tongtsc = $tongtsc+$ch1;
}
$phantramTSC = round(($tongtsc/$count_row_TSC),2).'%';
}else{
    $demTSC=0;
    $phantramTSC = 'Không có dữ Liệu';
}

if($count_row_APS!=0)
{
      $tongaps = 0;
foreach ($dataAPS as $value3) {
      $dau2 = $value3['tiendo'];
      $ch2 = substr($dau2, 0, -1);
      $tongaps = $tongaps+$ch2;
}
$phantramAPS = round(($tongaps/$count_row_APS),2).'%';
}else{
    $phantramAPS = 'Không có dữ Liệu';
}

if($count_row_AEC==0){
   $count_row_AEC = 0;
}
if($count_row_TSC==0){
    $count_row_TSC = 0;
}
if($count_row_APS==0){
    $count_row_APS = 0;
}

$tongg = round(((round(($tongaps/$count_row_APS),2)+round(($tongtsc/$count_row_TSC),2)+round(($tongaec/$count_row_AEC),2))/3),2).'%';



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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Tự Động Hóa Foxconn</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="../codejavascript/style6.css"> 

    <link rel="stylesheet" type="text/css" href="../bootstrap-5/css/bootstrap.min.css">
    
    <script type="text/javascript" src="../bootstrap-5/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="../dist/css/adminlte.min.css">


    
    
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
    animationEnabled: true,
    theme: "light2", // "light1", "light2", "dark1", "dark2"
    title:{
        text: "Biểu Đồ Tiến Độ Công Việc"
    },
     axisX: {
    labelAngle: -50
    },
    axisY: {
        title: "Số Tiến Độ"
    },
    data: [{        
        type: "column",  
        dataPoints: [      
            { y: <?php echo $countchua; ?>, label: "Chưa Xong" },
            { y: <?php echo $counthoanthanh; ?>,  label: "Đã Xong " },
            { y: <?php echo $counttruocdukien; ?>,  label: "Xong Trước Dự Kiến" },
            { y: <?php echo $countsaudukien; ?>,  label: "Xong Sau Dự Kiến" },
            { y: <?php echo $num;?>,  label: "Tổng Số" }
        ]
    }]
});
chart.render();
}
</script>
</head>
<body>

<header>
    <div id="menu-bar" class="fas fa-bars" style=""></div>

    <nav class="col-lg-12 col-12 navbar" id="nav" style="">
        <a href="../Controller/index.php?action=test2#home" class="logo" style="font-size: 30px;" id="logo"><span>F</span>oxconn</a>
        <a href="../Controller/index.php?action=test2#book" style="margin-left: 30px"><span>T</span>rang Chủ</a>
        <a href="../Employee-management-system/admin/dashboard.php">Điểm Danh</a>
        <a href="../Controller/index.php?action=home#packages">Biểu Đồ</a>
        <a href="../Controller/index.php?action=home#book">Tiến Độ</a>
        <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="">Quản Lý Đăng Nhập</a>
    <div class="icons" style="display: inline;margin-left: 100px;">
        <i class="fas fa-search" id="search-btn"style=""></i>
        <i class="fas fa-user" id="login-btn">
        <?php   
           if(isset($_SESSION['username'] ))
           {
            echo $_SESSION['username'];
           }


         ?></i>
    </div>
    </nav>
    
    

    <form action="" class="search-bar-container">
        <input type="search" id="search-bar" placeholder="search here...">
        <label for="search-bar" class="fas fa-search"></label>
    </form>

</header>



<div class="login-form-container">

    <i class="fas fa-times" id="form-close"></i>

    <form action="" method="POST">
        <h3>Đăng Xuất</h3>
        <input type="text" class="box" placeholder="name" value="<?php 
           if(isset($_SESSION['username'] ))
           {
            echo $_SESSION['username'];
           }
         ?>">
        <input type="password" class="box" placeholder="***********"  disabled>
        <input type="submit" name="dangxuat" value="Đăng Xuất" class="btn btn-success btn-lg">
    </form>

</div>





<section class="book" id="book" style="margin-top: 7%;">

    <h1 class="heading">
        <span>T</span>
        <span>I</span>
        <span>Ế</span>
        <span>N</span>
        <span class="space"></span> 
        <span>Đ</span>
        <span>Ộ</span>
        <span class="space"></span> 
        <span>M</span>
        <span>Á</span>
        <span>Y</span>
    </h1>
    <div class="row" style="  border-radius: 10%;" id="divtimkiem">
          
   
       

    </div>

</section>

<!-- book section ends -->

<!-- packages section starts  -->
 <section class="content" style="margin-top:1%">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-12 col-12">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3 style="text-align:center;font-size: 500%;">Tiến Độ Trung Bình Các Bộ Phận</h3>

                <p style="font-size:400%;text-align:center;"><?php echo $tongg; ?></p>
              </div>
              <div class="icon">
                <i class="fas fa-solid fa-flag-checkered"></i>
              </div>
              <a href="" class="small-box-footer" style="font-size:250%;"><i class="fas fa-solid fa-angle-up"></i></a>
            </div>
          </div>
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-4 col-4" id="divaec" onmouseover="divaec1()" onmouseout="divaec2()" onclick="divaec3()">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3 style="text-align:center;font-size: 500%;">AEC</h3>

                <p style="font-size:400%;text-align:center;"><?php echo $phantramAEC; ?></p>
              </div>
              <div class="icon">
                <i class="fas fa-book-open"></i>
              </div>
              <a href="../Controller/index.php?action=selectaecdata#divtimkiem" class="small-box-footer" style="font-size:250%;">Thông Tin<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-4" id="divtsc" onmouseover="divtsc1()" onmouseout="divtsc2()" onclick="divtsc3()">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3 style="text-align:center;font-size: 500%;">TSC<sup style="font-size: 20px"></sup></h3>

                <p style="font-size:400%;text-align:center;"><?php echo $phantramTSC; ?></p>
              </div>
              <div class="icon">
                <i class="fab fa-angellist"></i>
              </div>
              <a href="../Controller/index.php?action=selecttscdata#divtimkiem" class="small-box-footer" style="font-size:250%;">Thông Tin<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-4" id="divaps" onmouseover="divaps1()" onmouseout="divaps2()" onclick="divaps3()">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3 style="text-align:center;font-size: 500%;">APS</h3>

                <p style="font-size:400%;text-align: center;"><?php echo $phantramAPS; ?></p>
              </div>
              <div class="icon">
                <i class="fas fa-briefcase"></i>
              </div>
                  <a href="../Controller/index.php?action=selectapsdata#divtimkiem" class="small-box-footer" style="font-size:250%;">Thông Tin<i class="fas fa-arrow-circle-right"></i></a>
              
            </div>
          </div>


        </div>
    </div>
</section>



<!-- footer section  -->

<section class="footer" id="footer" style="margin-top: 10%;">

    <div class="box-container" style="text-align: center;">

        <div class="box">
            <h3>Thông Tin</h3>
            <p>Hon Hai Precision Industry Co., Ltd., tên giao dịch Foxconn Technology Group hay phổ biến hơn là Foxconn, là một nhà sản xuất hợp đồng điện tử đa quốc gia của Đài Loan có trụ sở chính tại Thổ Thành, Thành phố Tân Bắc, Đài Loan. Năm 2010, nó là nhà cung cấp dịch vụ sản xuất điện tử lớn nhất thế giới[3] và là công ty công nghệ lớn thứ ba tính theo doanh thu.</p>
        </div>
        <div class="box">
            <h3>Máy Móc</h3>
            <a style="text-decoration:none;" href="#">Tiến Độ</a>
            <a style="text-decoration:none;" href="#">Tên Máy</a>
            <a style="text-decoration:none;" href="#">Thời Gian</a>
            <a style="text-decoration:none;" href="#">Dự Kiến</a>
        </div>
        <div class="box">
            <h3>Home</h3>
            <a style="text-decoration:none;" href="#">Trang Chủ</a>
            <a style="text-decoration:none;" href="#">Điểm Danh</a>
            <a style="text-decoration:none;" href="#">Máy Móc</a>
            <a style="text-decoration:none;" href="#">Tiến Độ</a>
            <a style="text-decoration:none;" href="#">Biểu Đồ</a>
            <a style="text-decoration:none;" href="#">Trợ Giúp</a>
            <a style="text-decoration:none;" href="#">Điện Thoại</a>
        </div>
    </div>

    <h1 class="credit"> created by <span> THANG automatic </span> | all rights reserved! </h1>

</section>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nhập Mật Khẩu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Mật Khẩu:</label>
            <input type="password" class="form-control" id="idmatkhau">
          </div>
          <div>
              <span id="span">
                  
              </span>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" id="xacnhan" class="btn btn-primary">Xác Nhận</button>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
    document.getElementById("xacnhan").addEventListener("click", myFunction);

function myFunction() {

     var x = document.getElementById("idmatkhau");
     var y = document.getElementById("span");
  x.value = x.value.toUpperCase();
    if(x.value == '<?php echo $matkhau1[1] ?>'){
        window.location="../Controller/index.php?action=usermanager&page=1";
    }else{
      document.getElementById("idmatkhau").classList.add("is-invalid");
      document.getElementById("span").innerText = 'Mật Khẩu Không Đúng'
      document.getElementById("span").style.color = 'red'
    }
    
}


</script>

<script src="../codejavascript/script.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script type="text/javascript">
    
    $(document).ready(function() {

    $('#idtable1').DataTable({
         "pagingType":"full_numbers",
        "lengthMenu": [
          [6,15,50, -1],
          [6,15,50, "All"]
        ],
        responsive: true,
        language:{
            search: "_INPUT_",
            searchPlaceholder:"Tìm Kiếm",
        }
    });

} );

</script>  
<script type="text/javascript">


       var divaec = document.getElementById('divaec');
       function divaec1(){
        divaec.style.fontSize = '120%';
        divaec.style.cursor = 'pointer';
       }
       function divaec2(){
        divaec.style.fontSize = '100%';
       }
       function divaec3(){
         window.location = '../Controller/index.php?action=selectaecdata#divtimkiem';
       }

       var divtsc = document.getElementById('divtsc');
       function divtsc1(){
        divtsc.style.fontSize = '120%';
        divtsc.style.cursor = 'pointer';
       }
       function divtsc2(){
        divtsc.style.fontSize = '100%';
       }
       function divtsc3(){
         window.location = '../Controller/index.php?action=selecttscdata#divtimkiem';
       }

       var divaps = document.getElementById('divaps');
       function divaps1(){
        divaps.style.fontSize = '120%';
        divaps.style.cursor = 'pointer';
       }
       function divaps2(){
        divaps.style.fontSize = '100%';
       }
       function divaps3(){
         window.location = '../Controller/index.php?action=selectapsdata#divtimkiem';
       }

</script>
<!-- custom js file link  -->
<script src="../codejavascript/script.js"></script>

<script type="text/javascript">
      window.onload = function()
{
    sessionStorage.removeItem('key');
}
</script>

</body>
</html>