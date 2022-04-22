<?php
    require_once "include/header.php";
?>

<?php 

	// database connection
	require_once "../connection.php";
	 $today = date( 'Y-m-d', strtotime("today") );
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
<script>
        function tai_lai_trang(){
            location.reload();
        }
    </script>
<div class="content-wrapper">
	<table style="width:100%" class="table-hover text-center table">
	 
	      <tr class="bg-secondary text-white">
	        
	        <form action="" method="post">
	          <table style="width:100%" class="table-hover text-center ">
	          	<div align="center"><h2>Danh sách điểm danh nhân viên</h2></div>
	            <tr>
	            	
	              <div align="center">
	                <input type="text" name="search" class="form-control" placeholder="Mã nhân viên" />
	                <input class="mt-2 btn btn-outline-primary" type="submit" value="Tìm kiếm" name="btnsubmit" /></div>
	                <br />
	                </div> 
	                <div align="Right"><button type="reset" style="width: 50px; height: 50px;font-size: 30px; background-color:transparent; border-color:transparent;" onclick="tai_lai_trang()" > 
	  &#8634;	</button> </div>
	                 
			<?php
				if(isset($_POST['btnsubmit']))
					{
						$keyword = $_POST['search'];
						$query = "SELECT * FROM employee WHERE employcode LIKE '%$keyword%' ";

						$result = mysqli_query($conn,$query);
						while($rec = mysqli_fetch_array($result))
						{
							$id = $rec["id"];
							$employcode = $rec["employcode"];
							$name = $rec["name"];
							echo '<tr class="bg-secondary text-white">
							  <td>Mã nhân viên</td>
							  <td>Họ tên</td>';
							  $query1 = "SELECT * FROM attendance WHERE member_id =$id ORDER BY date limit 5";
								$result1 = mysqli_query($conn,$query1);
								while($rec1 = mysqli_fetch_array($result1))
								{
										
										$date = $rec1["date"];
							  		echo '<td> '.$date.' </td>';
								}
							echo '<tr>
							  <td>'.$employcode.'</td>
							  <td>'.$name.'</td>';
							  
							  $query1 = "SELECT * FROM attendance WHERE member_id = $id ORDER BY date limit 5";
								$result1 = mysqli_query($conn,$query1);
								while($rec1 = mysqli_fetch_array($result1))
								{
									$attendance1 = $rec1["attendance1"];
									if($attendance1 ==0){
										echo "<td><font color='#FF0000'>Vắng mặt</font></td>";
									}
									else{
										echo "<td><font color='#00FF00'>Có mặt</font></td>";
									}

								}
								
							echo '	</tr>
						  </tr>';
						}
					}
			else
			{
				$query = "SELECT * FROM employee ";

				$result = mysqli_query($conn,$query);
				while($rec = mysqli_fetch_array($result))
				{
					$id = $rec["id"];
					$employcode = $rec["employcode"];
					$name = $rec["name"];
					echo '<tr class="bg-secondary text-white">
					  <td>Mã nhân viên</td>
					  <td>Họ tên</td>';
					  $query1 = "SELECT * FROM attendance WHERE member_id = $id AND date = '$today'";
						$result1 = mysqli_query($conn,$query1);
						while($rec1 = mysqli_fetch_array($result1))
						{
							$date = $rec1["date"];
					  	echo '<td>'.$date.'</td>';
						}
					echo '<tr>
					  <td>'.$employcode.'</td>
					  <td>'.$name.'</td>';
					  $query1 = "SELECT * FROM attendance WHERE member_id = $id AND date = '$today'";
						$result1 = mysqli_query($conn,$query1);
						while($rec1 = mysqli_fetch_array($result1))
						{
							$attendance1 = $rec1["attendance1"];


							if($attendance1 ==0){
								echo "<td><font color='#FF0000'>Vắng mặt</font></td>";
							}
							else{
								echo "<td><font color='#00FF00'>Có mặt</font></td>";
							}

						}
					
					echo '</tr>
				  </tr>';
				}
			}
				
			?>
			</tr>
			</table>
	          </form>

	      </tr>    
		</table>
</div>
<?php 
    require_once "include/footer.php";
?>