<?php
    require_once "include/header1.php";
?>


<?php  


        // database connection
        require_once "../connection.php";
        

        $session_emc =  $_SESSION["employcode"];
    $sql = "SELECT * FROM admin WHERE employcode = '$session_emc' ";
    $result = mysqli_query($conn , $sql);

    if(mysqli_num_rows($result) > 0 ){
       
        while($rows = mysqli_fetch_assoc($result) ){
            $name = $rows["name"];
            $employcode = $rows["employcode"];
            $dob = $rows["dob"];
            $email = $rows["email"];
            $salary = $rows["salary"];
        }
    }

        $nameErr = $emailErr = "";
        // $name = $email = $dob = $gender = "";

        if( $_SERVER["REQUEST_METHOD"] == "POST" ){

            if( empty($_REQUEST["dob"]) ){
                $dob = "";
            }else {
                $dob = $_REQUEST["dob"];
            }

             if( empty($_REQUEST["employcode"]) ){
                $employcode = "";
            }else {
                $employcode = $_REQUEST["employcode"];
            }

            if( empty($_REQUEST["name"]) ){
                $nameErr = "<p style='color:red'> * Tên không được để trống</p>";
                $name = "";
            }else {
                $name = $_REQUEST["name"];
            }

            if( empty($_REQUEST["email"]) ){
                $emailErr = "<p style='color:red'> * Email không được để trống</p> ";
                $email = "";
            }else{
                $email = $_REQUEST["email"];
            }

            if( empty($_REQUEST["salary"]) ){
                $salary = "";
            }else {
                $salary = $_REQUEST["salary"];
            }

            if( !empty($name) && !empty($employcode) ){
            
                $sql_select_query = "SELECT employcode FROM admin WHERE employcode = '$employcode' ";
                $r = mysqli_query($conn , $sql_select_query);

                if( mysqli_num_rows($r) > 0 ){
                    $emailErr = "<p style='color:red'> * Email đã tồn tại</p>";
                } else{

                    $sql = "UPDATE admin SET employcode = '$employcode', name = '$name', dob = '$dob', email = '$email', salary= '$salary' WHERE employcode='$_SESSION[employcode]' ";
                    $result = mysqli_query($conn , $sql);
                    if($result){
                        $_SESSION['employcode']= $employcode;
                        echo "<script>
                            $(document).ready( function(){
                                $('#showModal').modal('show');
                                $('#modalHead').hide();
                                $('#linkBtn').attr('href', 'profile.php');
                                $('#linkBtn').text('Xem thông tin');
                                $('#addMsg').text('Sửa thành công!!');
                                $('#closeBtn').hide();
                            })
                        </script>
                        ";
                    }
                }

            }
        }
?>



<div style=""> 
<div class="login-form-bg h-100">
        <div class="container mt-5 h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-5">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5 shadow">                       
                                    <h4 class="text-center">Sửa thông tin của bạn</h4>
                                <form method="POST" action=" <?php htmlspecialchars($_SERVER['PHP_SELF']) ?>">
                                
                                <div class="form-group">
                                    <label >Mã nhân viên :</label>
                                    <input type="text" class="form-control" value="<?php echo $employcode; ?>"  name="employcode" readonly>
                                </div>

                                <div class="form-group">
                                    <label >Họ tên :</label>
                                    <input type="text" class="form-control" value="<?php echo $name; ?>"  name="name" >
                                   <?php echo $nameErr; ?>
                                </div>

                                <div class="form-group">
                                    <label >Ngày sinh :</label>
                                    <input type="date" class="form-control" value="<?php echo $dob; ?>" name="dob" >  
                                   
                                </div>

                                <div class="form-group">
                                    <label >Email :</label>
                                    <input type="email" class="form-control" value="<?php echo $email; ?>"  name="email" >     
                                    <?php echo $emailErr; ?>
                                </div>

                                
                                <div class="form-group">
                                    <label >Bộ phận :</label>
                                    <input type="text" class="form-control" value="<?php echo $salary; ?>"  name="salary" >     
                                
                                </div>


                                <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group">
                                   <input type="submit" value="Lưu thay đổi" class="btn btn-primary w-20 " name="save_changes" >        
                                    </div>
                                    <div class="input-group">
                                         <a href="profile.php" class="btn btn-primary w-20">Đóng</a>
                                    </div>
                                </div>
                                  </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
    require_once "include/footer.php";
?>