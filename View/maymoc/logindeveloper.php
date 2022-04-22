<?php
include "../Model/DBconfig.php";
$db = new Database();
$db -> connect();
session_start();

$table = 'developer';
if(isset($_POST['submit'])){
$username = $_POST['username'];
$password = $_POST['password'];
if ($username == "" || $password =="") {
echo "<span style='color:red;margin-left:44%;font-size:100%;'>Vui Lòng Không Để Trống</span>";
}
else{
$query = $db->login($table,$username,$password);
if ($query==0) {
echo "<span style='color:red;margin-left:44%;font-size:100%;'>Sai Tài Khoản Mật Khẩu</span>";
}else{
$_SESSION['username'] = $username;
$_SESSION['dangnhap'] = $query['name_admin'];
$_SESSION['id'] = $query['id'];
header('Location: ../Controller/index.php?action=mypage');
}
}
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../bootstrap-5/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
  <style>
    body {
      display: flex;
      min-height: 100vh;
      flex-direction: column;
    }

    main {
      flex: 1 0 auto;
    }

    body {
      background: #fff;
    }

    .input-field input[type=date]:focus + label,
    .input-field input[type=text]:focus + label,
    .input-field input[type=email]:focus + label,
    .input-field input[type=password]:focus + label {
      color: #e91e63;
    }

    .input-field input[type=date]:focus,
    .input-field input[type=text]:focus,
    .input-field input[type=email]:focus,
    .input-field input[type=password]:focus {
      border-bottom: 2px solid #e91e63;
      box-shadow: none;
    }
    .body{

    }
  </style>
</head>

<body class="body" style="background: #C2E2F2">
  <div class="section"></div>
  <main>
    
    <form method="POST" action="" id="formlogin">
    <center>
    <img class="responsive-img" style="width: 250px;" src="../image/logo.jpg" />
      <div class="section"></div>

      <h5 class="indigo-text">Trang Developer</h5>
      <div class="section"></div>

      <div class="container">
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

          <form class="col s12" id="loginn" method="post">
            <div class='row'>
              <div class='col s12'>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='text' name='username' />
                <label for='email'>Tên Tài Khoản</label>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='password' name='password' id='password' />
                <label for='password'>Mật Khẩu</label>
              </div>
              <label style='float: right;'>
                <a class='pink-text' href='#!'><b>Quên Mật Khẩu?</b></a>
              </label>
            </div>

            <br />
            <center>
              <div class="row">
                <button type="submit" id="submitT" name="submit" class="col s12 btn btn-large waves-effect indigo">Đăng Nhập</button>
              </div>
            </center>
        </div>
      </div>
       <a href="../Controller/index.php?action=begin">Chuyển Trang Đăng Nhập</a>
    </center>
    <div class="section"></div>
    <div class="section"></div>
  </form>
  </main>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
  <script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>
  <script type="text/javascript">

      
$( "#formlogin" ).submit(function( event ) {
  alert( "Handler for .submit() called." );
  event.preventDefault();
$.ajax({
  type: "POST",
  url: index.php?controller=may-moc&action=dangnhap,
  data:  $(this).serializeArray();,
  success: function(response){
    console.log("response: ", response);
  },
  dataType: dataType
});
});
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>

</html>