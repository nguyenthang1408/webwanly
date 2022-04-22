<?php
if(isset($_POST['manager2'])){
            session_destroy();
            header('Location: ../Controller/index.php?action=begin');
        }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Page</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap-5/css/bootstrap.min.css">
	<style type="text/css">
		body{
			background-image: url('../image/mypage2.jpg');
			background-repeat: no-repeat;
			background-size: cover;
		}
	</style>
</head>
<body>
	<form method="POST" action="">
	<input type="submit" class="col " id="manager2" name="manager2" value="Đăng Xuất" style="line-height: 70px;margin-left: 40%; color: blue; font-size: 50px;opacity: 0.4;">
    
    </form>
   <div class="container" style="margin-top:20%; height:100%;">
  <div class="row" style="height:70px">
    <div class="col " id="manager" style="line-height: 70px;text-align: center;color: blue; font-size: 50px;">
      Quản Lý Tiến Độ
    </div>
    <div class="col " id="manager1" style="line-height: 70px;text-align: center;color: blue; font-size: 50px;">
      Tài Khoản Quản Lý
    </div>
  </div>
</div>
<script type="text/javascript">
	 var obj2 = document.getElementById('manager2');
    obj2.addEventListener('mouseout', function(){
        obj2.style.color = 'red';
    });
    obj2.addEventListener('mouseover', function(){
        obj2.style.color = 'black';
        obj2.style.cursor = 'pointer';
    });
	 var obj = document.getElementById('manager');
    obj.addEventListener('mouseout', function(){
        obj.style.color = 'red';
    });
    obj.addEventListener('mouseover', function(){
        obj.style.color = 'white';
        obj.style.cursor = 'pointer';
    });
     var obj1 = document.getElementById('manager1');
    obj1.addEventListener('mouseout', function(){
        obj1.style.color = 'red';
    });
    obj1.addEventListener('mouseover', function(){
        obj1.style.color = 'white';
        obj1.style.cursor = 'pointer';
    });
    obj1.addEventListener('click', function(){
        window.location="../Controller/index.php?action=developer";
    });
     obj.addEventListener('click', function(){
        window.location="../Controller/index.php?action=mypagemanager";
    });
</script>
</body>
</html>