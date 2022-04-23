<?php 
    require_once "include/header1.php";
?>
    

<?php  

        $emcErr = $nameErr = $emailErr = $passErr = $salaryErr =  "";
        $employcode = $name = $email = $dob = $salary = $pass = "";

        if( $_SERVER["REQUEST_METHOD"] == "POST" ){

            if( empty($_REQUEST["employcode"]) ){
                $emcErr ="";
            }else {
                $employcode = $_REQUEST["employcode"];
            }
            if( empty($_REQUEST["salary"]) ){
                $salaryErr ="";
            }else {
                $salary = $_REQUEST["salary"];
            }

            if( empty($_REQUEST["dob"]) ){
                $dob = "";
            }else {
                $dob = $_REQUEST["dob"];
            }

            if( empty($_REQUEST["name"]) ){
                $nameErr = "<p style='color:red'> * Họ tên không được để trống</p>";
            }else {
                $name = $_REQUEST["name"];
            }

            if( empty($_REQUEST["email"]) ){
                $emailErr = "<p style='color:red'> * Email không được để trống</p> ";
            }else{
                $email = $_REQUEST["email"];
            }

            if( empty($_REQUEST["pass"]) ){
                $passErr = "<p style='color:red'> * Mật khẩu không được để trống</p> ";
            }else{
                $pass = $_REQUEST["pass"];
            }


            if( !empty($name) && !empty($email) && !empty($pass) ){

                // database connection
                require_once "../connection.php";

                $sql_select_query = "SELECT email FROM admin WHERE email = '$email' ";
                $r = mysqli_query($conn , $sql_select_query);

                if( mysqli_num_rows($r) > 0 ){
                    $emailErr = "<p style='color:red'> * Email đã được đăng ký</p>";
                } else{

                    $sql = "INSERT INTO admin(employcode, name , email , password , dob, salary ) VALUES('$employcode' , '$name' , '$email' , '$pass' , '$dob' , '$salary' )  ";
                    $result = mysqli_query($conn , $sql);
                    if($result){
                        $employcode = $name = $email = $dob = $salary = $pass = "";
                        echo "<script>
                        $(document).ready( function(){
                            $('#showModal').modal('show');
                            $('#modalHead').hide();
                            $('#linkBtn').attr('href', 'manage-admin.php');
                            $('#linkBtn').text('Hiển thị danh sách admin');
                            $('#addMsg').text('Admin thêm thành công!');
                            $('#closeBtn').text('Tiếp tục thêm?');
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
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5 shadow">                       
                                    <h4 class="text-center">Thêm mới tài khoản admin</h4>
                                <form method="POST" action=" <?php htmlspecialchars($_SERVER['PHP_SELF']) ?>">
                                
                                <div class="form-group">
                                    <label >Mã nhân viên :</label>
                                    <input type="text" class="form-control" value="<?php echo $employcode; ?>"  name="employcode" >

                                </div>

                                <div class="form-group">
                                    <label >Họ tên :</label>
                                    <input type="text" class="form-control" value="<?php echo $name; ?>"  name="name" >
                                   <?php echo $nameErr; ?>
                                </div>


                                <div class="form-group">
                                    <label >Email :</label>
                                    <input type="email" class="form-control" value="<?php echo $email; ?>"  name="email" >     
                                    <?php echo $emailErr; ?>
                                </div>

                                <div class="form-group">
                                    <label >Mật khẩu: </label>
                                    <input type="password" class="form-control" value="<?php echo $pass; ?>" name="pass" > 
                                    <?php echo $passErr; ?>           
                                </div>

                                <div class="form-group">
                                    <label >Ngày sinh :</label>
                                    <input type="date" class="form-control" value="<?php echo $dob; ?>" name="dob" >  
                                   
                                </div>
                                <div class="form-group">
                                    <label >Bộ phận :</label>
                                    <input type="text" class="form-control" value="<?php echo $salary; ?>"  name="salary" >

                                </div>

                                <br>

                                <button type="submit" class="btn btn-primary btn-block">Thêm</button>
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

