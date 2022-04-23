<?php 
    require_once "include/header-cn.php";
?>


<?php  

        $emcErr = $nameErr = $emailErr = $passErr = "";
        $employcode = $name = $email = $dob = $pass = $salary = "";

        if( $_SERVER["REQUEST_METHOD"] == "POST" ){

            if( empty($_REQUEST["dob"]) ){
                $dob = "";
            }else {
                $dob = $_REQUEST["dob"];
            }
            if( empty($_REQUEST["employcode"]) ){
                $emcErr = "<p style='color:red'> * Mã nhân viên không được để trống </p>";
            }else {
                $employcode = $_REQUEST["employcode"];
            }
            if( empty($_REQUEST["name"]) ){
                $nameErr = "<p style='color:red'> * Tên nhân viên không được để trống </p>";
            }else {
                $name = $_REQUEST["name"];
            }

            if( empty($_REQUEST["salary"]) ){
                
                $salary = "";
            }else {
                $salary = $_REQUEST["salary"];
            }

            if( empty($_REQUEST["email"]) ){
                $emailErr = "<p style='color:red'> * Số điện thoại không được để trống</p> ";
            }else{
                $email = $_REQUEST["email"];
            }

            if( empty($_REQUEST["pass"]) ){
                $passErr = "<p style='color:red'> * Mật khẩu không được để trống</p> ";
            }else{
                $pass = $_REQUEST["pass"];
            }


            if( !empty($name) && !empty($email) && !empty($pass) && !empty($salary) ){

                // database connection
                require_once "../connection.php";

                $sql_select_query = "SELECT email FROM employee WHERE email = '$email' ";
                $r = mysqli_query($conn , $sql_select_query);

                if( mysqli_num_rows($r) > 0 ){
                    $emailErr = "<p style='color:red'> * Số điện thoại đã tồn tại</p>";
                } else{

                    $sql = "INSERT INTO employee(employcode, name , email , password , dob , salary ) VALUES('$employcode' , '$name' , '$email' , '$pass' , '$dob' , '$salary' )  ";
                    $result = mysqli_query($conn , $sql);
                    if($result){
                     $employcode = $name = $email = $dob = $pass = $salary = "";
                        echo "<script>
                        $(document).ready( function(){
                            $('#showModal').modal('show');
                            $('#modalHead').hide();
                            $('#linkBtn').attr('href', 'manage-employee.php');
                            $('#linkBtn').text('Hiển thị nhân viên');
                            $('#addMsg').text('Đã thêm nhân viên thành công!');
                            $('#closeBtn').text('Tiếp tục thêm?');
                        })
                     </script>
                     ";
                    }
                    
                }

            }
        }

?>



<div class="content-wrapper"> 
<div class="login-form-bg h-100">
        <div class="container  h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-4 shadow">                       
                                    <h4 class="text-center">員工信息</h4>
                                <form method="POST" action=" <?php htmlspecialchars($_SERVER['PHP_SELF']) ?>">
                                <div class="form-group">
                                    <label >工號 :</label>
                                    <input type="text" class="form-control" value="<?php echo $employcode; ?>"  name="employcode" >
                                   <?php echo $emcErr; ?>
                                </div>

                                <div class="form-group">
                                    <label >姓名 :</label>
                                    <input type="text" class="form-control" value="<?php echo $name; ?>"  name="name" >
                                   <?php echo $nameErr; ?>
                                </div>
                                
                                <div class="form-group">
                                    <label >入場日期 :</label>
                                    <input type="date" class="form-control" value="<?php echo $dob; ?>" name="dob" >  
                                   
                                </div>

                                <div class="form-group">
                                    <label >電話號碼 :</label>
                                    <input type="text" class="form-control" value="<?php echo $email; ?>"  name="email" >     
                                    <?php echo $emailErr; ?>
                                </div>

                                <div class="form-group">
                                    <label >密碼: </label>
                                    <input type="password" class="form-control" value="<?php echo $pass; ?>" name="pass" > 
                                    <?php echo $passErr; ?>           
                                </div>

                                <div class="form-group">
                                    <label >部門 :</label>
                                    <input type="text" class="form-control" value="<?php echo $salary; ?>" name="salary" >             
                                </div>

                                


                               
                                <br>

                                <button type="submit" class="btn btn-primary btn-block">添加</button>
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
    require_once "include/footer-cn.php";
?>


