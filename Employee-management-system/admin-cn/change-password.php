<?php 
require_once "include/header1.php";
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>

<?php 
      $old_passErr = $new_passErr = $confirm_passErr = "";
     $old_pass = $new_pass = $confirm_pass = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        if(empty($_REQUEST["old_pass"])){
            $old_passErr = " <p style='color:red'>* Mật khẩu hiện tại không được để trống </p>";
        }else{
            $old_pass = trim($_REQUEST["old_pass"]);
        }
        
        if(empty($_REQUEST["new_pass"])){
            $new_passErr = " <p style='color:red'>* Mật khẩu mới không được để trống </p>";
        }else{
            $new_pass = trim($_REQUEST["new_pass"]);
        }

        if(empty($_REQUEST["confirm_pass"])){
            $confirm_passErr = " <p style='color:red'>* Hãy nhập lại mật khẩu mới! </p>";
        }else{
            $confirm_pass = trim($_REQUEST["confirm_pass"]);
        }

        if(!empty($old_pass) && !empty($new_pass) && !empty($confirm_pass) ){

            require_once "../connection.php";

            $check_old_pass = "SELECT password FROM admin WHERE employcode = '$_SESSION[employcode]' && password = '$old_pass' ";
            $result = mysqli_query($conn , $check_old_pass);
            if( mysqli_num_rows($result) > 0 ){
               
                if( $new_pass === $confirm_pass ){
                  
                    $change_pass_query = "UPDATE admin SET password = '$new_pass' WHERE employcode = '$_SESSION[employcode]' ";
                    if (mysqli_query($conn , $change_pass_query) ){
                        session_unset();
                        session_destroy();
                        echo "<script>
                        $(document).ready(function() {
                            $('#addMsg').text( 'Mật khẩu đã được thay đổi! Hãy đăng nhập bằng mật khẩu mới.');
                            $('#linkBtn').attr('href','login.php');
                            $('#linkBtn').text('OK, Đã hiểu');
                            $('#modalHead').hide();
                            $('#closeBtn').hide();
                            $('#showModal').modal('show');
                        });
                        </script>";
                    }
                    
                }else{
                    $confirm_passErr = "<p style='color:red'>* Mật khẩu không khớp với mật khẩu mới! </p>";
                }

            }else{
               $old_passErr = " <p style='color:red'>* Rất tiếc! Mật khẩu hiện tại không đúng. </p> ";
            }
        }
    }
?>


<div style="margin-top:100px"> 
<div class="login-form-bg h-100">
        <div class="container mt-5 h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5 shadow">                       
                                    <h4 class="text-center">Thay đổi mật khẩu</h4>
                                    <form method="POST" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>">
                                        <div class="form-group">
                                            <label >Mật khẩu hiện tại : </label>
                                            <input type="password" name="old_pass" class="form-control">
                                            <?php echo $old_passErr; ?>
                                        </div>
                                        <div class="form-group">
                                            <label >Mật khẩu mới : </label>
                                            <input type="password" name="new_pass" class="form-control">
                                            <?php echo $new_passErr; ?>

                                        </div>
                                        <div class="form-group">
                                            <label >Nhập lại mật khẩu mới : </label>
                                            <input type="password" name="confirm_pass" class="form-control">
                                            <?php echo $confirm_passErr; ?>

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