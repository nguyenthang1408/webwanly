<?php 
    require_once "include/header1.php";
?>

<?php 
 
//  database connection
require_once "../connection.php";

$sql = "SELECT * FROM admin";
$result = mysqli_query($conn , $sql);

$i = 1;
$you = "";


?>

<style>
table, th, td {
  border: 1px solid black;
  padding: 15px;
}
table {
  border-spacing: 10px;
}
</style>

<div class="container bg-white shadow">
    <div class="py-4 mt-5"> 
    <div class='text-center pb-2'><h4>Quản lý admin</h4></div>
    <table style="width:100%" class="table-hover text-center ">
    <tr class="bg-dark">
        <th>STT</th>
        <th>Mã nhân viên</th>
        <th>Họ tên</th>
        <th>Ngày sinh</th>
        <th>Email</th> 
        <th>Bộ phận</th>
        <th>Tùy chọn</th>
    </tr>
    <?php 
    
    if( mysqli_num_rows($result) > 0){
        while( $rows = mysqli_fetch_assoc($result) ){
            $employcode= $rows["employcode"];
            $name= $rows["name"];
            $email= $rows["email"];
            $dob = $rows["dob"];
            $id = $rows["id"];
            $salary = $rows["salary"];
           
            ?>
        <tr>
        <td><?php echo $i; ?></td>
        <td> <?php echo $employcode ; ?></td>
        <td> <?php echo $name ; ?></td>
        <td><?php echo $dob; ?></td>
        <td><?php echo $email; ?></td>
        <td><?php echo $salary; ?></td>
        <td>   <?php if( $employcode !== $_SESSION["employcode"] ){
                $edit_icon = "<a href='edit-admin.php?id= {$id}' class='btn-sm btn-primary float-right ml-3 '> <span ><i class='fa fa-edit '></i></span> </a>";
                $delete_icon = " <a href='delete-admin.php?id={$id}' id='bin' class='btn-sm btn-primary float-right'> <span ><i class='fa fa-trash '></i></span> </a>";
                echo $edit_icon . $delete_icon;
            } else{
                echo "<a href='profile.php' class='btn btn-primary float-right'>Hồ sơ</a>";
            } ?> 
        </td>

    <?php 
            $i++;
            }
        }else{
        echo "Không tìm thấy admin";
        }
    ?>
     </tr>
    </table>
    </div>
</div>

<?php 
    require_once "include/footer.php";
?>