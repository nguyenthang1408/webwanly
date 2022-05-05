<?php 
    include "../Model/DBconfig.php";
    include "../Model/datachart.php";
    $db = new Database();
    $db -> connect();
    session_start();

    $dt = getdate();
    $day = $dt["mday"];
    $month = date("m");
    $year = $dt["year"];
    $today = "$year"."-"."$month"."-"."$day";

    $date = $today;
    include "../Model/connection.php";
    $query = "SELECT type_leave , COUNT(type_leave) AS type_leave_no FROM attendance WHERE date = '$date' GROUP BY type_leave";
    $result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../codejavascript/sty3.css">
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap-5/css/bootstrap.min.css">
	 <script type="text/javascript" src="../bootstrap-5/js/bootstrap.min.js"></script>
	 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

	<title>Quản Lý Tự Đông Hóa</title>
	<style type="text/css">

    :root {
        --dk-gray-100: #F3F4F6;
        --dk-gray-200: #E5E7EB;
        --dk-gray-300: #D1D5DB;
        --dk-gray-400: #9CA3AF;
        --dk-gray-500: #6B7280;
        --dk-gray-600: #4B5563;
        --dk-gray-700: #374151;
        --dk-gray-800: #1F2937;
        --dk-gray-900: #111827;
        --dk-dark-bg: #313348;
        --dk-darker-bg: #2a2b3d;
        --navbar-bg-color: #6f6486;
        --sidebar-bg-color: #252636;
        --sidebar-width: 250px;
    }
        /** --------------------------------
 -- Charts
-------------------------------- */
        .charts .chart-container {
            background-color: var(--dk-dark-bg);
        }
        .charts .chart-container h3 {
            color: var(--dk-gray-400)
        }
	</style>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.js"></script>
</head>
<body>

    
		<div class="app" style="height: 165vh;">
     	   	<nav class="navmobile" id="navmobile">
				<div class="spani" id="spani">
					<i class="fas fa-solid fa-bars"></i>
				</div>
				<div  class="ulli" id="ulli">
					<ul style="">
						<li>
							<a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
								<i style="" class="fas fa-solid fa-user"></i>
								<span style="">Tài Khoản</span>
							</a>
						</li>

						<li><a href="">Điểm Danh</a></li>
						<li>
							<a href="#" class="a2">
								<form action="" method="POST">
								<input style=";" type="submit" name="dangxuat" value="Đăng Xuất" class="">
								</form>
							</a>
						</li>
					</ul>
				</div>
         	 </nav>
	       <header id="app-header" class="app-header" style="width:18vw;height: 165vh;">
					    <div class="app-header-logo" style="display: inline-block;">
			   				<h1 class="logo-title" style="">
							   <span style="">VN Cable <br/> Tự động hóa</span>
							</h1>
							<div class="username">
								<span class="span" style=""><?php 
						           	if(isset($_SESSION['username'] ))	
										{
											echo $_SESSION['username'];
										}
										?>
						    	</span>
							</div>
						</div>
								
				<nav class="navigation" style="">
					<a href="../Controller/index.php?action=test2" class="a1">
						<i class="fas fa-solid fa-house-user a1i"></i>
						<span style="">Trang Chủ</span>
					</a>
					<a class="a2" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
						<i style="" class="fas fa-solid fa-user"></i>
						<span style="">Tài Khoản</span>
					</a>
					<a href="../Employee-management-system/admin/dashboard.php" class="a3">
						<i style="" class="fas fa-solid fa-info a3i"></i>
						<span style="" class="">Điểm Danh</span>
					</a>
						      
				</nav>
					
                <footer class="footer">					
					<div class="logof">
						<a href="#" class="a2">
							<form action="" method="POST">
									<input style="" type="submit" name="dangxuat" value="Đăng Xuất" class="">
							</form>
						</a>
					</div>
				</footer>
			</header>
			<div class="app-body-main-content" style="width:82vw">
				<div style=" display: grid;grid-template-columns: repeat(1, 1fr);column-gap: 1.6rem;row-gap: 2rem;margin-top: 1rem;grid-template-columns: 100%  ;">
					<div style="padding-left:10px;padding-top:10px;left:100px;background: #c7deff;border-radius: 20px;width:1500px; height: 500px;box-shadow:-7px -7px 15px rgb(255, 255, 255), 7px 7px 15px rgba(121, 130, 160, 0.747);">
						<div id="columnchart"></div>
					</div>
					<div style="border-radius: 20px;width:1500px; height: 500px;box-shadow:-7px -7px 15px rgb(255, 255, 255), 7px 7px 15px rgba(121, 130, 160, 0.747);">
						<div id="columnchart1"></div>
					</div>
					<div style="padding-left:10px;padding-top:10px;background: #c7deff;border-radius: 20px;width:1500px; height: 500px;box-shadow:-7px -7px 15px rgb(255, 255, 255), 7px 7px 15px rgba(121, 130, 160, 0.747);">
						<div id="columnchart2"></div>
					</div>
				</div>
			</div>
		</div>


<!-- mật Khẩu -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Nhập Mật Khẩu</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form>
					<div class="mb-3">
						<label for="recipient-name" class="col-form-label">Mật Khẩu:</label>
						<input type="password" class="form-control" id="idmatkhau">
					</div>
					<div>
						<span id="span">						
						</span>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="button" id="xacnhan" class="btn btn-primary">Xác Nhận</button>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
    document.getElementById("xacnhan").addEventListener("click", myFunction);
	function myFunction() {
		var x = document.getElementById("idmatkhau");
		var y = document.getElementById("span");
		x.value = x.value.toUpperCase();
		if(x.value == '<?php echo $matkhau1[1] ?>'){
			window.location="../Controller/index.php?action=usermanager&page=1";
		}else{
		document.getElementById("idmatkhau").classList.add("is-invalid");
		document.getElementById("span").innerText = 'Mật Khẩu Không Đúng'
		document.getElementById("span").style.color = 'red'
		}
		
	}
</script>

 <script src="../plugins/jquery-2.2.4.min.js"></script>
 <script src="../plugins/jquery.appear.min.js"></script>
 <script src="../plugins/jquery.easypiechart.min.js"></script> 
 <script>
    'use strict';
	var $window = $(window);
	function run()
	{
		var fName = arguments[0],
			aArgs = Array.prototype.slice.call(arguments, 1);
		try {
			fName.apply(window, aArgs);
		} catch(err) {
			
		}
	};
 </script>
 <script type="text/javascript">
		// Load google charts
		google.charts.load('current', {'packages':['corechart']});
		google.charts.setOnLoadCallback(drawChart);

		// Draw the chart and set the chart values
		function drawChart() {
		var data = google.visualization.arrayToDataTable([
		['Tuần', 'Đi làm', 'Đi làm', 'Nghỉ làm', 'Nghỉ làm'],
		['Tuần 1',<?php echo $tiledilamtuan1; ?>,<?php echo $tiledilamtuan1; ?>,<?php echo $tilenghilamtuan1; ?>,<?php echo $tilenghilamtuan1; ?>],
		['Tuần 2',<?php echo $tiledilamtuan2; ?>,<?php echo $tiledilamtuan2; ?>,<?php echo $tilenghilamtuan2; ?>,<?php echo $tilenghilamtuan2; ?>],
		['Tuần 3',<?php echo $tiledilamtuan3; ?>,<?php echo $tiledilamtuan3; ?>,<?php echo $tilenghilamtuan3; ?>,<?php echo $tilenghilamtuan3; ?>],
		['Tuần 4',<?php echo $tiledilamtuan4; ?>,<?php echo $tiledilamtuan4; ?>,<?php echo $tilenghilamtuan4; ?>,<?php echo $tilenghilamtuan4; ?>],
		]);
		
		// Optional; add a title and set the width and height of the chart
		var options = {	title: 'Điểm danh trong tháng',
						titleTextStyle: {
										color: "#1656f0",
										fontSize: 25,           
										},
						colors: ['#7B68EE','#7B68EE','#FF7F50','#FF7F50'],
						backgroundColor: '#c7deff',
						height:"360",
						width:"720",
						chartArea:{width:"1250" , height:"350"} ,
                		animation:	{
									duration: 500,
									easing: 'out',
									},
									vAxes: {
						
						0: {title: 'Đi làm', textStyle: {color: '#131685', bold: true}},
						1: {title: 'Nghỉ làm', textStyle: {color: '#34C79F', bold: true}}
					},
					series: {
									1: {targetAxisIndex: 1},
									2: {targetAxisIndex: 2}
								},
						
						seriesType: "bars",
						series:{1: {type: "line",pointSize: 1},2: {type: "line",pointSize: 1}},		
						// curveType: 'function',		
						
            };

		// Display the chart inside the <div> element with id="piechart"
		var chart = new google.visualization.ComboChart(document.getElementById('columnchart1'));
        chart.draw(data, options);
		}
    


	</script>
	
    <script type="text/javascript">
		// Load google charts
		google.charts.load('current', {'packages':['corechart']});
		google.charts.setOnLoadCallback(drawChart);

		// Draw the chart and set the chart values
		function drawChart() {
		var data = google.visualization.arrayToDataTable([
		['Tháng', 'Đi làm', 'Nghỉ làm','Đi làm','Nghỉ làm'],
		['1',<?php echo $tiledilamthang1; ?>,<?php echo $tilenghilamthang1; ?>,<?php echo $tiledilamthang1; ?>,<?php echo $tilenghilamthang1; ?>],
		['2',<?php echo $tiledilamthang2; ?>,<?php echo $tilenghilamthang2; ?>,<?php echo $tiledilamthang2; ?>,<?php echo $tilenghilamthang2; ?>],
		['3',<?php echo $tiledilamthang3; ?>,<?php echo $tilenghilamthang3; ?>,<?php echo $tiledilamthang3; ?>,<?php echo $tilenghilamthang3; ?>],
		['4',<?php echo $tiledilamthang4; ?>,<?php echo $tilenghilamthang4; ?>,<?php echo $tiledilamthang4; ?>,<?php echo $tilenghilamthang4; ?>],
		['5',<?php echo $tiledilamthang5; ?>,<?php echo $tilenghilamthang5; ?>,<?php echo $tiledilamthang5; ?>,<?php echo $tilenghilamthang5; ?>],
		['6',<?php echo $tiledilamthang6; ?>,<?php echo $tilenghilamthang6; ?>,<?php echo $tiledilamthang6; ?>,<?php echo $tilenghilamthang6; ?>],
		['7',<?php echo $tiledilamthang7; ?>,<?php echo $tilenghilamthang7; ?>,<?php echo $tiledilamthang7; ?>,<?php echo $tilenghilamthang7; ?>],
		['8',<?php echo $tiledilamthang8; ?>,<?php echo $tilenghilamthang8; ?>,<?php echo $tiledilamthang8; ?>,<?php echo $tilenghilamthang8; ?>],
		['9',<?php echo $tiledilamthang9; ?>,<?php echo $tilenghilamthang9; ?>,<?php echo $tiledilamthang9; ?>,<?php echo $tilenghilamthang9; ?>],
		['10',<?php echo $tiledilamthang10; ?>,<?php echo $tilenghilamthang10; ?>,<?php echo $tiledilamthang10; ?>,<?php echo $tilenghilamthang10; ?>],
		['11',<?php echo $tiledilamthang11; ?>,<?php echo $tilenghilamthang11; ?>,<?php echo $tiledilamthang11; ?>,<?php echo $tilenghilamthang11; ?>],
		['12',<?php echo $tiledilamthang12; ?>,<?php echo $tilenghilamthang12; ?>,<?php echo $tiledilamthang12; ?>,<?php echo $tilenghilamthang12; ?>],
		]);
		var view = new google.visualization.DataView(data);
      	view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       ]);
		// Optional; add a title and set the width and height of the chart
		var options = {	title: 'Điểm danh trong năm',	
						titleTextStyle: {
										color: "#1656f0",
										fontSize: 25,           
										},
						colors: ['#6495ED', '#DC143C'],
						backgroundColor: '#c7deff',
						height:"480",
						width:"1480",
						chartArea:{width:"1200" , height:"350"} ,
						vAxis: {
							0: {title: 'Đi làm', textStyle: {color: '#131685', bold: true}},
							1: {title: 'Nghỉ làm', textStyle: {color: '#34C79F', bold: true}}
								},
						animation: {
									duration: 500,
									easing: 'out',
									startup: true
									},
						series:{1: {type: "line",pointSize: 1},2: {type: "line",pointSize: 1}},
						curveType: 'function',			
					};

		// Display the chart inside the <div> element with id="piechart"
		var chart = new google.visualization.ColumnChart(document.getElementById('columnchart2'));
		chart.draw(data, options);
		}
	</script>
     <script type="text/javascript">
		// Load google charts
		google.charts.load('current', {'packages':['corechart']});
		google.charts.setOnLoadCallback(drawChart);

		// Draw the chart and set the chart values
		function drawChart() {
		var data = google.visualization.arrayToDataTable([
		['Ngày', 'Đi làm', 'Nghỉ làm','Đi làm','Nghỉ làm'],
		['1',<?php echo $tiledilamngay1; ?>,<?php echo $tilenghilamngay1 ?>,<?php echo $tiledilamngay1; ?>,<?php echo $tilenghilamngay1; ?>],
		['2',<?php echo $tiledilamngay2; ?>,<?php echo $tilenghilamngay2 ?>,<?php echo $tiledilamngay2; ?>,<?php echo $tilenghilamngay2; ?>],
		['3',<?php echo $tiledilamngay3; ?>,<?php echo $tilenghilamngay3 ?>,<?php echo $tiledilamngay3; ?>,<?php echo $tilenghilamngay3; ?>],
		['4',<?php echo $tiledilamngay4; ?>,<?php echo $tilenghilamngay4 ?>,<?php echo $tiledilamngay4; ?>,<?php echo $tilenghilamngay4; ?>],
		['5',<?php echo $tiledilamngay5; ?>,<?php echo $tilenghilamngay5 ?>,<?php echo $tiledilamngay5; ?>,<?php echo $tilenghilamngay5; ?>],
		['6',<?php echo $tiledilamngay6; ?>,<?php echo $tilenghilamngay6 ?>,<?php echo $tiledilamngay6; ?>,<?php echo $tilenghilamngay6; ?>],
		['7',<?php echo $tiledilamngay7; ?>,<?php echo $tilenghilamngay7 ?>,<?php echo $tiledilamngay7; ?>,<?php echo $tilenghilamngay7; ?>],
		['8',<?php echo $tiledilamngay8; ?>,<?php echo $tilenghilamngay8 ?>,<?php echo $tiledilamngay8; ?>,<?php echo $tilenghilamngay8; ?>],
		['9',<?php echo $tiledilamngay9; ?>,<?php echo $tilenghilamngay9 ?>,<?php echo $tiledilamngay9; ?>,<?php echo $tilenghilamngay9; ?>],
		['10',<?php echo $tiledilamngay10; ?>,<?php echo $tilenghilamngay10 ?>,<?php echo $tiledilamngay10; ?>,<?php echo $tilenghilamngay10; ?>],
		['11',<?php echo $tiledilamngay11; ?>,<?php echo $tilenghilamngay11 ?>,<?php echo $tiledilamngay11; ?>,<?php echo $tilenghilamngay11; ?>],
		['12',<?php echo $tiledilamngay12; ?>,<?php echo $tilenghilamngay12 ?>,<?php echo $tiledilamngay12; ?>,<?php echo $tilenghilamngay12; ?>],
        ['13',<?php echo $tiledilamngay13; ?>,<?php echo $tilenghilamngay13 ?>,<?php echo $tiledilamngay13; ?>,<?php echo $tilenghilamngay13; ?>],
		['14',<?php echo $tiledilamngay14; ?>,<?php echo $tilenghilamngay14 ?>,<?php echo $tiledilamngay14; ?>,<?php echo $tilenghilamngay14; ?>],
		['15',<?php echo $tiledilamngay15; ?>,<?php echo $tilenghilamngay15 ?>,<?php echo $tiledilamngay15; ?>,<?php echo $tilenghilamngay15; ?>],
		['16',<?php echo $tiledilamngay16; ?>,<?php echo $tilenghilamngay16 ?>,<?php echo $tiledilamngay16; ?>,<?php echo $tilenghilamngay16; ?>],
		['17',<?php echo $tiledilamngay17; ?>,<?php echo $tilenghilamngay17 ?>,<?php echo $tiledilamngay17; ?>,<?php echo $tilenghilamngay17; ?>],
		['18',<?php echo $tiledilamngay18; ?>,<?php echo $tilenghilamngay18 ?>,<?php echo $tiledilamngay18; ?>,<?php echo $tilenghilamngay18; ?>],
		['19',<?php echo $tiledilamngay19; ?>,<?php echo $tilenghilamngay19 ?>,<?php echo $tiledilamngay19; ?>,<?php echo $tilenghilamngay19; ?>],
		['20',<?php echo $tiledilamngay20; ?>,<?php echo $tilenghilamngay20 ?>,<?php echo $tiledilamngay20; ?>,<?php echo $tilenghilamngay20; ?>],
		['21',<?php echo $tiledilamngay21; ?>,<?php echo $tilenghilamngay21 ?>,<?php echo $tiledilamngay21; ?>,<?php echo $tilenghilamngay21; ?>],
		['22',<?php echo $tiledilamngay22; ?>,<?php echo $tilenghilamngay22 ?>,<?php echo $tiledilamngay22; ?>,<?php echo $tilenghilamngay22; ?>],
		['23',<?php echo $tiledilamngay23; ?>,<?php echo $tilenghilamngay23 ?>,<?php echo $tiledilamngay23; ?>,<?php echo $tilenghilamngay23; ?>],
		['24',<?php echo $tiledilamngay24; ?>,<?php echo $tilenghilamngay24 ?>,<?php echo $tiledilamngay24; ?>,<?php echo $tilenghilamngay24; ?>],
        ['25',<?php echo $tiledilamngay25; ?>,<?php echo $tilenghilamngay25 ?>,<?php echo $tiledilamngay25; ?>,<?php echo $tilenghilamngay25; ?>],
		['26',<?php echo $tiledilamngay26; ?>,<?php echo $tilenghilamngay26 ?>,<?php echo $tiledilamngay26; ?>,<?php echo $tilenghilamngay26; ?>],
		['27',<?php echo $tiledilamngay27; ?>,<?php echo $tilenghilamngay27 ?>,<?php echo $tiledilamngay27; ?>,<?php echo $tilenghilamngay27; ?>],
		['28',<?php echo $tiledilamngay28; ?>,<?php echo $tilenghilamngay28 ?>,<?php echo $tiledilamngay28; ?>,<?php echo $tilenghilamngay28; ?>],
		['29',<?php echo $tiledilamngay29; ?>,<?php echo $tilenghilamngay29 ?>,<?php echo $tiledilamngay29; ?>,<?php echo $tilenghilamngay29; ?>],
		['30',<?php echo $tiledilamngay30; ?>,<?php echo $tilenghilamngay30 ?>,<?php echo $tiledilamngay30; ?>,<?php echo $tilenghilamngay30; ?>],
		['31',<?php echo $tiledilamngay31; ?>,<?php echo $tilenghilamngay31 ?>,<?php echo $tiledilamngay31; ?>,<?php echo $tilenghilamngay31; ?>],
		]);
		
		// Optional; add a title and set the width and height of the chart
		var options = {	title: 'Điểm danh từng ngày trong tháng',	
						titleTextStyle: {
										color: "#1656f0",
										fontSize: 25,           
										},
						colors: ['#6495ED', '#DC143C'],
						chartArea:{width:"1250" , height:"350"} ,
						backgroundColor: '#c7deff',
						height:"480",
						width:"1480",
						vAxis: {
							0: {title: 'Đi làm', textStyle: {color: '#131685', bold: true}},
							1: {title: 'Nghỉ làm', textStyle: {color: '#34C79F', bold: true}}
								},
						animation: {
									duration: 500,
									easing: 'out',
									startup: true
									},
						seriesType: "bars",
						series:{1: {type: "line",pointSize: 1},2: {type: "line",pointSize: 1}},
						// curveType: 'function',			
					};

		// Display the chart inside the <div> element with id="piechart"
		var chart = new google.visualization.ColumnChart(document.getElementById('columnchart'));
		chart.draw(data, options);
		}
	</script>
	 <script type="text/javascript">
		// Load google charts
		google.charts.load('current', {'packages':['corechart']});
		google.charts.setOnLoadCallback(drawChart);

		// Draw the chart and set the chart values
		function drawChart() {
		var data = google.visualization.arrayToDataTable([
		['Ngày', 'Đi làm', 'Nghỉ làm','Đi làm','Nghỉ làm'],
		['1',<?php echo $tiledilamngay1; ?>,<?php echo $tilenghilamngay1 ?>,<?php echo $tiledilamngay1; ?>,<?php echo $tilenghilamngay1; ?>],
		['2',<?php echo $tiledilamngay2; ?>,<?php echo $tilenghilamngay2 ?>,<?php echo $tiledilamngay2; ?>,<?php echo $tilenghilamngay2; ?>],
		['3',<?php echo $tiledilamngay3; ?>,<?php echo $tilenghilamngay3 ?>,<?php echo $tiledilamngay3; ?>,<?php echo $tilenghilamngay3; ?>],
		['4',<?php echo $tiledilamngay4; ?>,<?php echo $tilenghilamngay4 ?>,<?php echo $tiledilamngay4; ?>,<?php echo $tilenghilamngay4; ?>],
		['5',<?php echo $tiledilamngay5; ?>,<?php echo $tilenghilamngay5 ?>,<?php echo $tiledilamngay5; ?>,<?php echo $tilenghilamngay5; ?>],
		['6',<?php echo $tiledilamngay6; ?>,<?php echo $tilenghilamngay6 ?>,<?php echo $tiledilamngay6; ?>,<?php echo $tilenghilamngay6; ?>],
		['7',<?php echo $tiledilamngay7; ?>,<?php echo $tilenghilamngay7 ?>,<?php echo $tiledilamngay7; ?>,<?php echo $tilenghilamngay7; ?>],
		['8',<?php echo $tiledilamngay8; ?>,<?php echo $tilenghilamngay8 ?>,<?php echo $tiledilamngay8; ?>,<?php echo $tilenghilamngay8; ?>],
		['9',<?php echo $tiledilamngay9; ?>,<?php echo $tilenghilamngay9 ?>,<?php echo $tiledilamngay9; ?>,<?php echo $tilenghilamngay9; ?>],
		['10',<?php echo $tiledilamngay10; ?>,<?php echo $tilenghilamngay10 ?>,<?php echo $tiledilamngay10; ?>,<?php echo $tilenghilamngay10; ?>],
		['11',<?php echo $tiledilamngay11; ?>,<?php echo $tilenghilamngay11 ?>,<?php echo $tiledilamngay11; ?>,<?php echo $tilenghilamngay11; ?>],
		['12',<?php echo $tiledilamngay12; ?>,<?php echo $tilenghilamngay12 ?>,<?php echo $tiledilamngay12; ?>,<?php echo $tilenghilamngay12; ?>],
        ['13',<?php echo $tiledilamngay13; ?>,<?php echo $tilenghilamngay13 ?>,<?php echo $tiledilamngay13; ?>,<?php echo $tilenghilamngay13; ?>],
		['14',<?php echo $tiledilamngay14; ?>,<?php echo $tilenghilamngay14 ?>,<?php echo $tiledilamngay14; ?>,<?php echo $tilenghilamngay14; ?>],
		['15',<?php echo $tiledilamngay15; ?>,<?php echo $tilenghilamngay15 ?>,<?php echo $tiledilamngay15; ?>,<?php echo $tilenghilamngay15; ?>],
		['16',<?php echo $tiledilamngay16; ?>,<?php echo $tilenghilamngay16 ?>,<?php echo $tiledilamngay16; ?>,<?php echo $tilenghilamngay16; ?>],
		['17',<?php echo $tiledilamngay17; ?>,<?php echo $tilenghilamngay17 ?>,<?php echo $tiledilamngay17; ?>,<?php echo $tilenghilamngay17; ?>],
		['18',<?php echo $tiledilamngay18; ?>,<?php echo $tilenghilamngay18 ?>,<?php echo $tiledilamngay18; ?>,<?php echo $tilenghilamngay18; ?>],
		['19',<?php echo $tiledilamngay19; ?>,<?php echo $tilenghilamngay19 ?>,<?php echo $tiledilamngay19; ?>,<?php echo $tilenghilamngay19; ?>],
		['20',<?php echo $tiledilamngay20; ?>,<?php echo $tilenghilamngay20 ?>,<?php echo $tiledilamngay20; ?>,<?php echo $tilenghilamngay20; ?>],
		['21',<?php echo $tiledilamngay21; ?>,<?php echo $tilenghilamngay21 ?>,<?php echo $tiledilamngay21; ?>,<?php echo $tilenghilamngay21; ?>],
		['22',<?php echo $tiledilamngay22; ?>,<?php echo $tilenghilamngay22 ?>,<?php echo $tiledilamngay22; ?>,<?php echo $tilenghilamngay22; ?>],
		['23',<?php echo $tiledilamngay23; ?>,<?php echo $tilenghilamngay23 ?>,<?php echo $tiledilamngay23; ?>,<?php echo $tilenghilamngay23; ?>],
		['24',<?php echo $tiledilamngay24; ?>,<?php echo $tilenghilamngay24 ?>,<?php echo $tiledilamngay24; ?>,<?php echo $tilenghilamngay24; ?>],
        ['25',<?php echo $tiledilamngay25; ?>,<?php echo $tilenghilamngay25 ?>,<?php echo $tiledilamngay25; ?>,<?php echo $tilenghilamngay25; ?>],
		['26',<?php echo $tiledilamngay26; ?>,<?php echo $tilenghilamngay26 ?>,<?php echo $tiledilamngay26; ?>,<?php echo $tilenghilamngay26; ?>],
		['27',<?php echo $tiledilamngay27; ?>,<?php echo $tilenghilamngay27 ?>,<?php echo $tiledilamngay27; ?>,<?php echo $tilenghilamngay27; ?>],
		['28',<?php echo $tiledilamngay28; ?>,<?php echo $tilenghilamngay28 ?>,<?php echo $tiledilamngay28; ?>,<?php echo $tilenghilamngay28; ?>],
		['29',<?php echo $tiledilamngay29; ?>,<?php echo $tilenghilamngay29 ?>,<?php echo $tiledilamngay29; ?>,<?php echo $tilenghilamngay29; ?>],
		['30',<?php echo $tiledilamngay30; ?>,<?php echo $tilenghilamngay30 ?>,<?php echo $tiledilamngay30; ?>,<?php echo $tilenghilamngay30; ?>],
		['31',<?php echo $tiledilamngay31; ?>,<?php echo $tilenghilamngay31 ?>,<?php echo $tiledilamngay31; ?>,<?php echo $tilenghilamngay31; ?>],
		['32',<?php echo $tiledilamngay10; ?>,<?php echo $tilenghilamngay10 ?>,<?php echo $tiledilamngay10; ?>,<?php echo $tilenghilamngay10; ?>],
		['33',<?php echo $tiledilamngay11; ?>,<?php echo $tilenghilamngay11 ?>,<?php echo $tiledilamngay11; ?>,<?php echo $tilenghilamngay11; ?>],
		['34',<?php echo $tiledilamngay12; ?>,<?php echo $tilenghilamngay12 ?>,<?php echo $tiledilamngay12; ?>,<?php echo $tilenghilamngay12; ?>],
        ['35',<?php echo $tiledilamngay13; ?>,<?php echo $tilenghilamngay13 ?>,<?php echo $tiledilamngay13; ?>,<?php echo $tilenghilamngay13; ?>],
		['36',<?php echo $tiledilamngay14; ?>,<?php echo $tilenghilamngay14 ?>,<?php echo $tiledilamngay14; ?>,<?php echo $tilenghilamngay14; ?>],
		['37',<?php echo $tiledilamngay15; ?>,<?php echo $tilenghilamngay15 ?>,<?php echo $tiledilamngay15; ?>,<?php echo $tilenghilamngay15; ?>],
		['38',<?php echo $tiledilamngay16; ?>,<?php echo $tilenghilamngay16 ?>,<?php echo $tiledilamngay16; ?>,<?php echo $tilenghilamngay16; ?>],
		['39',<?php echo $tiledilamngay17; ?>,<?php echo $tilenghilamngay17 ?>,<?php echo $tiledilamngay17; ?>,<?php echo $tilenghilamngay17; ?>],
		['40',<?php echo $tiledilamngay18; ?>,<?php echo $tilenghilamngay18 ?>,<?php echo $tiledilamngay18; ?>,<?php echo $tilenghilamngay18; ?>],
		['41',<?php echo $tiledilamngay19; ?>,<?php echo $tilenghilamngay19 ?>,<?php echo $tiledilamngay19; ?>,<?php echo $tilenghilamngay19; ?>],
		['42',<?php echo $tiledilamngay20; ?>,<?php echo $tilenghilamngay20 ?>,<?php echo $tiledilamngay20; ?>,<?php echo $tilenghilamngay20; ?>],
		['43',<?php echo $tiledilamngay21; ?>,<?php echo $tilenghilamngay21 ?>,<?php echo $tiledilamngay21; ?>,<?php echo $tilenghilamngay21; ?>],
		['44',<?php echo $tiledilamngay22; ?>,<?php echo $tilenghilamngay22 ?>,<?php echo $tiledilamngay22; ?>,<?php echo $tilenghilamngay22; ?>],
		['45',<?php echo $tiledilamngay23; ?>,<?php echo $tilenghilamngay23 ?>,<?php echo $tiledilamngay23; ?>,<?php echo $tilenghilamngay23; ?>],
		['46',<?php echo $tiledilamngay24; ?>,<?php echo $tilenghilamngay24 ?>,<?php echo $tiledilamngay24; ?>,<?php echo $tilenghilamngay24; ?>],
        ['47',<?php echo $tiledilamngay25; ?>,<?php echo $tilenghilamngay25 ?>,<?php echo $tiledilamngay25; ?>,<?php echo $tilenghilamngay25; ?>],
		['48',<?php echo $tiledilamngay26; ?>,<?php echo $tilenghilamngay26 ?>,<?php echo $tiledilamngay26; ?>,<?php echo $tilenghilamngay26; ?>],
		['49',<?php echo $tiledilamngay27; ?>,<?php echo $tilenghilamngay27 ?>,<?php echo $tiledilamngay27; ?>,<?php echo $tilenghilamngay27; ?>],
		['50',<?php echo $tiledilamngay28; ?>,<?php echo $tilenghilamngay28 ?>,<?php echo $tiledilamngay28; ?>,<?php echo $tilenghilamngay28; ?>],
		['51',<?php echo $tiledilamngay29; ?>,<?php echo $tilenghilamngay29 ?>,<?php echo $tiledilamngay29; ?>,<?php echo $tilenghilamngay29; ?>],
		['52',<?php echo $tiledilamngay30; ?>,<?php echo $tilenghilamngay30 ?>,<?php echo $tiledilamngay30; ?>,<?php echo $tilenghilamngay30; ?>],
		]);
		
		// Optional; add a title and set the width and height of the chart
		var options = {	title: 'Điểm danh từng tuần trong tháng',	
						titleTextStyle: {
										color: "#1656f0",
										fontSize: 25,           
										},
						colors: ['#6495ED', '#DC143C'],
						chartArea:{width:"1250" , height:"350"} ,
						backgroundColor: '#c7deff',
						height:"480",
						width:"1480",
						vAxis: {
							0: {title: 'Đi làm', textStyle: {color: '#131685', bold: true}},
							1: {title: 'Nghỉ làm', textStyle: {color: '#34C79F', bold: true}}
								},
						animation: {
									duration: 500,
									easing: 'out',
									startup: true
									},
						seriesType: "bars",
						series:{1: {type: "line",pointSize: 1},2: {type: "line",pointSize: 1}},
						// curveType: 'function',			
					};

		// Display the chart inside the <div> element with id="piechart"
		var chart = new google.visualization.ColumnChart(document.getElementById('columnchart1'));
		chart.draw(data, options);
		}
	</script>
	