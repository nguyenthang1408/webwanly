<?php

include "../Model/DBconfig.php";
$db = new Database();
$db -> connect();

$table = 'users';
    if(isset($_GET['page'])){
          $page = $_GET['page'];
    }else{
      $page = 1;
    }
    $rowsPerPage = isset($_POST['page']) ? $_POST['page'] : 5;   
    $perRow = $page * $rowsPerPage - $rowsPerPage;
        $totalRows = $db->count_row($table);
    $data = $db->getAllData($table);

    $data5 = $db->usernamemanager($table,$perRow,$rowsPerPage);

    $totalPage = ceil($totalRows/$rowsPerPage);
        $listPage = "";
            for ($i = 1; $i <= $totalPage; $i++){
          if($page>1){
                $listPage0 = '<li class="page-item"><a class="page-link" href="../Controller/index.php?action=usermanager&page=1">Đầu</a></li>';
                $listPage1 = '<li class="page-item"><a class="page-link" href="../Controller/index.php?action=usermanager&page='.($page-1).'"><</a></li>';
                  }else{
                $listPage0 = '<li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Đầu</a>
                      </li>';  
                $listPage1 = '<li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true"><</a>
                    </li>'; 
                  }
          if($page == $i){
            $listPage.='<li class="page-item active" aria-current="page">
                      <a class="page-link" href="usermanager.php?page='.$i.'">'.$i.'</a>
                    </li>';
          }else{
            $listPage .= '<li class="page-item"><a class="page-link" href="../Controller/index.php?action=usermanager&page='.$i.'">'.$i.'</a></li>';
          }
          if($page==$totalPage){
                $listPage2 = '<li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="+1" aria-disabled="true">></a>
                      </li>'; 
                $listPage3 = '<li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="+1" aria-disabled="true">Cuối</a>
                </li>'; 
                  }
            if($page<$totalPage){
                $listPage2 = '<li class="page-item"><a class="page-link" href="../Controller/index.php?action=usermanager&page='.($page+1).'">></a></li>';
                 $listPage3 = '<li class="page-item"><a class="page-link" href="../Controller/index.php?action=usermanager&page='.$totalPage.'">Cuối</a></li>';
            }
          
        }

    if(isset($_POST['dangxuat'])){
      session_destroy();
      header('Location: ../Controller/index.php?action=begin');
    }
    if(isset($_POST['add']))
    {
      $username = $_POST['username'];
      $password = $_POST['password'];
      if($db->Insertuser($table,$username,$password)){
        header('Location: ../Controller/index.php?action=usermanager');
      }
    }
    if(isset($_POST['updatedata'])){
      $id = $_POST['id'];
      $username = $_POST['username'];
      $password = $_POST['password'];
      if($db->Updateuser($table,$id,$username,$password)){
        
        header('Location: ../Controller/index.php?action=usermanager');
      }
    }
    if(isset($_POST['deletedata'])){
      $id = $_POST['delete_id'];
      if($db->Deleteuser($table,$id)){
        header('Location: ../Controller/index.php?action=usermanager');
      }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Quản Lý Thành Viên
  </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../bootstrap-5/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <script type="text/javascript" src="../bootstrap-5/js/bootstrap.js"></script>
  <script type="text/javascript" src="../bootstrap-5/js/bootstrap.min.js"></script>
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />


  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">

</head>

<body class="g-sidenav-show  bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="" target="_blank">
        <img src="../image/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Quản Lý Tài Khoản</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white" href="../Controller/index.php?action=adminmanager">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Người Quản Lý</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary" href="../Controller/index.php?action=developeruser">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Người Dùng</span>
          </a>
        </li>
        </ul>
      </div>
       
    
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="../Controller/index.php?action=test2">Trang Chủ</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Quản Lý</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Quản Lý</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group input-group-outline">
              
              <input type="text" onkeyup="tableSearch()" id="myInput" placeholder="Tìm Kiếm" class="form-control">
            </div>
          </div>
           <form method="POST" action="">
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="" class="nav-link text-body font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <button class="d-sm-inline d-none" name="dangxuat" type="submit">Đăng Xuất</button>
              </a>
            </li>
           </ul>
           </form>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Quản Lý Người Dùng</h6>
              </div>
            </div>
            <div class="">
              <form method="post" action="#" id="pagee">
                  <select class="selectpicker text-center" name="page" id="page" style="width: 7%;font-size: 120%; margin-top: 1%;margin-left: 2%;">
                    <option  disabled="disabled" selected="selected" >Chọn</option>
                   <?php foreach ([5,10,15,20,30] as $rowsPerPage): 
                     
                  ?>
                    <option <?php if(isset($_POST['page'])&&$_POST['page'] == $rowsPerPage) echo "selected" ?> value="<?= $rowsPerPage; ?>"><?= $rowsPerPage; ?></option>
                  <?php endforeach; ?>
                  </select>
              </form>
            </div>

            <div class="card-body px-0 pb-2" style="">
              <div class="table-responsive p-0" style="">
                <table class="table align-items-center mb-0" id="idtablee">
                  <thead>
                    <tr style="">
                      <th class="text-center align-middle font-weight-bolder ">ID</th>
                      <th class="text-center align-middle font-weight-bolder ">Tài Khoản</th>
                      <th class="text-center align-middle font-weight-bolder ">Mật Khẩu</th>
                      <th class="text-center align-middle font-weight-bolder ">Ngày Tháng</th>
                      <th class="text-secondary align-middle font-weight-bolder" style="text-align: center;">Tùy Chọn</th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php 
                    foreach ($data5 as $value) {
                    ?>

                    <tr style="">
                            <td class="align-middle text-center">
                        <span class="fst-normal font-weight-bold">
                            <img src="../image/icons-user.png" class="avatar avatar-sm me-3 border-radius-lg" alt="user1"><?php echo $value['id']; ?></span>
                          </td>
                      <td class="align-middle text-center">
                        <span class="fst-normal font-weight-bold"><?php echo $value['username']; ?></span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="fst-normal font-weight-bold"><?php echo $value['password']; ?></span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="fst-normal font-weight-bold" ><?php  echo date("d/m/Y"); ?></span>
                      </td>
                      <td class="align-middle" style="float: right; margin-right: 15%;margin-top: 10px;">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" style="">Thêm</button>
                        <button type="button" class="btn btn-primary editbtn" data-bs-toggle="modal" data-bs-target="#editmodal-<?php echo $value['id']; ?>" data-bs-whatever="@mdo" style="">Sửa</button>
                        <button type="button" class="btn btn-primary deletebtn" data-bs-toggle="modal" data-bs-target="#deletemodal-<?php echo $value['id']; ?>" data-bs-whatever="@mdo" style="">Xóa</button>
                      </td>
                    </tr>
                   <?php } ?>
                  </tbody>
                </table>
                
                <nav aria-label="..." style="float:right;">
                  <ul class="pagination">
                     

                      <?php
                      echo $listPage0;
                      echo $listPage1;
                       echo $listPage;
                       echo $listPage2;
                        echo $listPage3;

                       ?>
                                    
                    </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer py-4  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                Thang <i class="fa fa-heart"></i> by
                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Automatic</a>
                for a better web.
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="index.php?controller=may-moc&action=test2" class="nav-link text-muted" target="_blank">Trang Chủ</a>
                </li>
                <li class="nav-item">
                  <a href="index.php?controller=may-moc&action=usermanager" class="nav-link text-muted" target="_blank">Biểu Đồ</a>
                </li>
                <li class="nav-item">
                  <a href="index.php?controller=may-moc&action=usermanager" class="nav-link text-muted" target="_blank">Trợ Giúp</a>
                </li>
                <li class="nav-item">
                  <a href="index.php?controller=may-moc&action=usermanager" class="nav-link pe-0 text-muted" target="_blank">Số Điện Thoại</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>

<!-- Hộp Thoại Thêm -->

  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Thêm Thành Viên</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Tên Tài Khoản:</label>
            <input type="text" class="form-control" name="username" id="username1" style="border: 1px solid;">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Password:</label>
            <input type="text" class="form-control" name="password" id="passwordd" style="border: 1px solid;">
          </div>
          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="add">Thêm</button>
        </div>
        </form>
      </div>
      
    </div>
  </div>
</div>

<!-- Hộp Thoại sửa -->
<?php foreach ($data as $value) {
?>
<form method="POST" action=""> 
  <div class="modal fade" id="editmodal-<?php echo $value['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sửa Thành Viên</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
          <input type="hidden" name="update_id" id="update_id">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">ID:</label>
            <input type="text" class="form-control" readonly value="<?php echo $value['id']; ?>" name="id" id="id" style="border: 1px solid;">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Tên Tài Khoản:</label>
            <input type="text" class="form-control" value="<?php echo $value['username']; ?>" name="username" id="username" style="border: 1px solid;">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Password:</label>
            <input type="text" class="form-control" value="<?php echo $value['password']; ?>" name="password" id="password" style="border: 1px solid;">
          </div>
          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="updatedata">Sửa</button>
        </div>
        </form>
      </div>
      
    </div>
  </div>
</div>
</form>
<?php } ?>
<!-- hộp thoại xóa -->
<?php foreach ($data as $value) {
?>
<form method="POST" action=""> 
  <div class="modal fade" id="deletemodal-<?php echo $value['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Xóa Thành Viên</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
          
          <input type="hidden" name="delete_id" id="delete_id" value="<?php echo $value['id']; ?>">
         <h4>Bạn Có Muốn Xóa Không</h4>
          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Không</button>
        <button type="submit" class="btn btn-primary" name="deletedata">Có</button>
        </div>
        </form>
      </div>
      
    </div>
  </div>
</div>
</form>
<?php } ?>

<!-- edit -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>



<!-- <script type="text/javascript">
    $(document).ready(function() {
    $('#idtablee').DataTable();
} ); 
</script>   -->

<!-- phân trang -->
<script type="text/javascript">
  $(document).ready(function() {
     $("#page").change(function(){
      $('#pagee').submit(); 
     })
  })
</script>


<!-- Tìm Kiếm   -->
<script type="text/javascript">
    function tableSearch(){
        let input, filter, table, tr ,td , i ,txtvalue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("idtablee");
        tr = table.getElementsByTagName("tr");
        for (let i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[1];
            if(td)
            {
                txtvalue = td.textContent || td.innerText;
                if(txtvalue.toUpperCase().indexOf(filter) > -1){
                    tr[i].style.display = "";
                }else{
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>

<!-- xóa -->


<script type="text/javascript">
  
  $(document).ready(function() {
    $('.deletebtn').on('click',function(){
        $('#deletemodal').modal('show');
        $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#delete_id').val(data[0]);

    });
  });
</script>


<!-- sửa -->
<script type="text/javascript">
  
  $(document).ready(function() {
    $('.editbtn').on('click',function(){
        $('#editmodal').modal('show');
        $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#update_id').val(data[0]);
    });
  });
</script>


  <!--   Core JS Files   -->

  <script>

  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
</body>

</html>