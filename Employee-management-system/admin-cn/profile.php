<?php 

require_once "include/header1.php";
?>
 <?php  
    


    // databaseconnection
    require_once "../connection.php";

    $sql_command = "SELECT * FROM admin WHERE employcode = '$_SESSION[employcode]' ";
    $result = mysqli_query($conn , $sql_command);

    if( mysqli_num_rows($result) > 0){
       while( $rows = mysqli_fetch_assoc($result) ){
            $employcode = ucwords($rows["employcode"]);
           $name = ucwords($rows["name"]);
           $salary = ucwords($rows["salary"]);
           $dob= $rows["dob"];
            $dp = $rows["dp"];
       }

       if( empty($employcode)){
           $employcode = "Không có dữ liệu";
       }

       if( empty($salary)){
            $salary = "Không có dữ liệu";
        }
}
 ?>


<div class=container>
    <div class="row ">
        <div class="col-4 ">
        </div>
        <div class="col-12 col-lg-6 col-md-6">
            <div class="card shadow" style="width: 20rem;">
            <img src="upload/<?php if(!empty($dp)){ echo $dp; }else{ echo "1.jpg"; } ?>" class="rounded img-fluid  card-img-top"  style="height: 300px "  alt="...">
                <div class="card-body">
                <h2 class="text-center mb-4"><?php echo $name; ?> </h2>
                    <p class="card-text">Mã nhân viên: <?php echo $_SESSION["employcode"] ?> </p>
                    <p class="card-text">Ngày sinh: <?php echo $dob ?> </p>
                    <p class="card-text">Bộ phận: <?php echo $salary ?> </p>
                    </p>
                    
                    <p class="text-center">
                    <a href="edit-profile.php" class="btn btn-outline-primary">Sửa thông tin</a>
                    <a href="change-password.php" class="btn btn-outline-primary">Đổi mật khẩu</a>
                    <a href="profile-photo.php" class="mt-2 btn btn-outline-primary">Sửa ảnh đại diện</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
require_once "include/footer.php";
?>