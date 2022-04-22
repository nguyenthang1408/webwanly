
<?php 
    require_once "include/header.php";
?>

<?php 
 
//  database connection
require_once "../connection.php";

$sql = "SELECT * FROM emp_leave ";
$result = mysqli_query($conn , $sql);

$i = 1;

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
<div class="content-wrapper">
<div class="container bg-white shadow">
    <div class="py-4 mt-5"> 
    <h4 class="text-center pb-3">Trạng thái</h4>
    <table style="width:100%" class="table-hover text-center ">
    <tr class="bg-dark">
        <th>STT</th>
        <th>Mã nhân viên</th>
        <th>Họ tên</th>
        <th>Ngày bắt đầu</th>
        <th>Ngày kết thúc</th> 
        <th>Tổng số ngày nghỉ</th>
        <th>Hình thức nghỉ</th>
        <th>Lý do</th>
        <th>Trạng thái</th>
        <th>Tùy chọn</th>

    </tr>
    <?php 
    
    if( mysqli_num_rows($result) > 0){
        while( $rows = mysqli_fetch_assoc($result) ){
            $employcode = $rows["employcode"];
            $name = $rows["name"];
            $start_date= $rows["start_date"];
            $last_date = $rows["last_date"];
            $hinhthuc = $rows["hinhthuc"];
            $reason = $rows["reason"];
            $status = $rows["status"]; 
            $id = $rows["id"];   
            ?>
        <tr>
        <td><?php echo "$i."; ?></td>
        <td><?php echo $employcode; ?></td> 
        <td><?php echo $name; ?></td> 
        <td><?php echo date("d-m-Y", strtotime($start_date)); ?></td>
        <td><?php echo date("d-m-Y", strtotime($last_date)); ?></td>
        <td><?php $date1=date_create($start_date);
                  $date2=date_create($last_date);
                   $diff=date_diff($date1,$date2);
                   $diff1= $diff->format("%a");
                    echo intval($diff1) + 1;
            ?></td>
        <td><?php echo $hinhthuc; ?></td> 
        <td><?php echo $reason; ?></td> 
        <td><?php echo $status; ?></td> 
        <td>  <?php 
                $delete_icon = " <a href='delete-leave.php?id={$id}' id='bin' class='btn-sm btn-primary '> <span ><i class='fa fa-trash '></i></span> </a>";
                echo  $delete_icon;
             ?> 
        </td>
    <?php 
            $i++;
            }
        }else{
            echo "<script>
            $(document).ready( function(){
                $('#showModal').modal('show');
                $('#linkBtn').hide();
                $('#linkBtn').attr('href', 'apply-leave.php');
                $('#addMsg').text('Không có đơn xin nghỉ của nhân viên');
                $('#closeBtn').text('Ok, đã hiểu');
            })
        </script>
        ";
        }
    ?>
     </tr>
    </table>
    </div>
</div>
</div>
<?php 
    require_once "include/footer.php";
?>
