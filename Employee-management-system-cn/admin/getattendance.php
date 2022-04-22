<?php
	if(isset($_POST["btnsubmit"]))
	{
		require_once "../connection.php";
		
		$today = date("Y/m/d");
              		
		$query = "SELECT * FROM employee";
		$result = mysqli_query($conn,$query);
		while($rows = mysqli_fetch_array($result))
		{
			$id= $rows["id"];
			$type_leave = $_POST["hinhthuc".$id]; 
			if(isset($_POST[$id]))
			{
				$query1 = "INSERT INTO  `attendance`( `member_id` , `date` ,  `attendance1`, `type_leave`) VALUES('$id','$today', '1','Đi làm')";
			}
			else
			{
				$query1 = "INSERT INTO  `attendance`( `member_id`, `date` ,  `attendance1`, `type_leave`) VALUES('$id','$today', '0', '$type_leave')";
			}
			mysqli_query($conn,$query1);
			print "<script>";
			print "alert('Đã lưu dữ liệu điểm danh....');";
			print "self.location='attendance.php';";
			print "</script>";
		}
		

	}
		else{
			header("Location:index.php");
		}
	
	 ?>
<?php 
    require_once "include/footer.php";
?>
