<?php 
session_start();
    // database connection 
    require_once "../connection.php";
    $sql = "SELECT COUNT(*) AS total_notice FROM emp_leave WHERE status = 'Đang chờ'";
    $result = mysqli_query($conn , $sql);
    while($rows = mysqli_fetch_array($result))
    {
        $total_notice = $rows["total_notice"];
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Quản lý</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<<<<<<< HEAD

=======
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
>>>>>>> 6267e3ccdd02e36175eec27dab84e967351a4d4b
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
<<<<<<< HEAD
<!--   <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div> -->
=======
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>
>>>>>>> 6267e3ccdd02e36175eec27dab84e967351a4d4b

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
   
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
         <!-- Brand Logo -->
    <div class="brand-logo">
                <a >
                    <span class="brand-title" >
                        <font color='#fff'>Xin chào, <?php  echo $_SESSION['username']; ?></font>
                    </span>
                </a>
            </div>
      </div>

 

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item">
            <a href="../../Controller/index.php?action=home#home" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Trang chủ
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Biểu đồ thống kê
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./dashboard.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thống kê nghỉ phép</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./char2.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thống kê điểm danh</p>
                </a>
              </li>
            </ul>
          </li>
         
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Điểm danh
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./attendance.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Điểm danh hôm nay</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./report.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách điểm danh</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Nhân viên
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./add-employee.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm thông tin nhân viên</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./manage-employee.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Quản lý nhân viên</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Nghỉ phép
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./manage-leave.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Quản lý nghỉ phép</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./leave_status.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Trạng thái nghỉ phép</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="./logout.php" class="nav-link">
              <i class="nav-icon icon-logout"></i>
              <p>
                Đăng xuất
              </p>
            </a>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-body">



        <div class="modal fade" id="showModal" data-backdrop="static" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div id="modalHead" class="modal-header">
                    <button id="modal_cross_btn" type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span  aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <p id="addMsg" class="text-center font-weight-bold"></p>
                </div>
                <div class="modal-footer ">
                    <div class="mx-auto">
                        <a type="button" id="linkBtn" href="#" class="btn btn-primary" >Thêm phí trong ngày</a>
                        <a type="button" id="closeBtn" href="#" data-dismiss="modal" class="btn btn-primary">Đóng</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
            
            <!-- row -->

            <div class="container-fluid">

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<<<<<<< HEAD

=======
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
>>>>>>> 6267e3ccdd02e36175eec27dab84e967351a4d4b
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<<<<<<< HEAD
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
=======
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
>>>>>>> 6267e3ccdd02e36175eec27dab84e967351a4d4b
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<<<<<<< HEAD
=======
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
>>>>>>> 6267e3ccdd02e36175eec27dab84e967351a4d4b
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
