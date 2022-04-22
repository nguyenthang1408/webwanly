

<?php 
    require_once "include/header.php";
?>

<?php 
 

//  database connection
require_once "../connection.php";

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
<?php 
$result1 = mysqli_query($conn, 'select count(id) as total from emp_leave');
$row1 = mysqli_fetch_assoc($result1);   
$total_records = $row1['total'];

$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
$limit = 10;
$total_page = ceil($total_records / $limit);
// Giới hạn current_page trong khoảng 1 đến total_page
if ($current_page > $total_page){
    $current_page = $total_page;
}
else if ($current_page < 1){
    $current_page = 1;
}
 
// Tìm Start
$start = ($current_page - 1) * $limit;


$sql = "SELECT * FROM emp_leave WHERE status = 'Đang chờ' LIMIT $start, $limit ";
$result = mysqli_query($conn , $sql);

?>
<div class="content-wrapper">
<div class="container bg-white shadow">
    <div class="py-4 mt-5"> 
    <h4 class="text-center pb-3">Quản lý nghỉ</h4>
    
    <table style="width:100%" class="table-hover text-center ">
    <tr class="bg-dark">
        <th>STT</th>
        <th>Mã nhân viên</th>
        <th>Họ tên</th>
        <th>Ngày bắt đầu</th>
        <th>Ngày kết thúc</th> 
        <th>Tổng số ngày</th>
        <th>Hình thức nghỉ</th>
        <th>Lý do</th>
        <th>Trạng thái</th>
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
        <td><?php echo date("jS F", strtotime($start_date)); ?></td>
        <td><?php echo date("jS F", strtotime($last_date)); ?></td>
        <td><?php $date1=date_create($start_date);
                  $date2=date_create($last_date);
                   $diff=date_diff($date1,$date2);
                   $diff1= $diff->format("%a");
                    echo intval($diff1) + 1;
            ?></td>
            <td><?php echo $hinhthuc; ?></td>
        <td><?php echo $reason; ?></td>
        <td><?php  echo "<a href='accept-leave.php?id={$id}' class='btn btn-sm btn-outline-primary mr-2'>Đồng ý</a> <br /> <br /> " ;
                    echo "<a href='cancel-leave.php?id={$id}' class='btn btn-sm btn-outline-danger'>Từ chối</a>" ;?>  
        </td> 

    <?php 
            $i++;
            }
        }else{
            echo "<script>
            $(document).ready( function(){
                $('#showModal').modal('show');
                $('#linkBtn').hide();
                $('#addMsg').text('Không có dữ liệu nghỉ');
                $('#closeBtn').text('Ok, đã hiểu');
            })
         </script>
         ";
        }
    ?>
     </tr>
    </table>
    <div class="pagination" align="right">
                           <?php 
                            // PHẦN HIỂN THỊ PHÂN TRANG
                            // BƯỚC 7: HIỂN THỊ PHÂN TRANG
                 
                            // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
                            if ($current_page > 1 && $total_page > 1){
                                echo '<a href="manage-leave.php?page='.($current_page-1).'">Trước</a> | ';
                            }
                 
                            // Lặp khoảng giữa
                            for ($i = 1; $i <= $total_page; $i++){
                                // Nếu là trang hiện tại thì hiển thị thẻ span
                                // ngược lại hiển thị thẻ a
                                if ($i == $current_page){
                                    echo '<span>'.$i.'</span> | ';
                                }
                                else{
                                    echo '<a href="manage-leave.php?page='.$i.'">'.$i.'</a> | ';
                                }
                            }
                 
                            // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
                            if ($current_page < $total_page && $total_page > 1){
                                echo '<a href="manage-leave.php?page='.($current_page+1).'">Tiếp</a> | ';
                            }
                           ?>
                        </div> 
    </div>
     
</div>
</div>
<?php 
    require_once "include/footer.php";
?>
