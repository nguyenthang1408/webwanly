<!DOCTYPE html>
<html>
<head>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script src="assets/js/datetimepicker.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<link href="datepicker/css/bootstrap.min.css" rel="stylesheet" />
<link href="datepicker/css/datepicker.css" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Bootstra Datepicker CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css">
    
</head>
<?php 
    require_once "include/header1.php";
?>
<?php
    $dt = getdate();
    $day = $dt["mday"];
    $month = date("m");
    $year = $dt["year"];
    $today = "$year"."-"."$month"."-"."$day";

       $date = $today;
       if(isset($_POST['formsubmit'])){
            $date = $_POST['input100'];
        }    

    // database connection
    require_once "../connection.php";
    $query = "SELECT type_leave , COUNT(type_leave) AS type_leave_no FROM attendance WHERE date = '$date' GROUP BY type_leave";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result)<=0){
        echo "<script>
                $(document).ready( function(){
                    $('#showModal').modal('show');
                    $('#linkBtn').hide();
                    $('#addMsg').text('Không có dữ liệu hôm nay');
                    $('#closeBtn').text('Ok, đã hiểu');
                })
             </script>
             ";
         }
    $query1 = "SELECT type_leave , COUNT(type_leave) AS sophepnam FROM attendance WHERE type_leave = 'Phép năm' AND date = '$date' GROUP BY type_leave";
    $result1 = mysqli_query($conn, $query1);
    if (mysqli_num_rows($result1)>0) {
        while($rows = mysqli_fetch_array($result1)){
        $phepnam = $rows["sophepnam"];
        }
    }else{  
            $phepnam = 0;
        }

    $query2 = "SELECT type_leave , COUNT(type_leave) AS soviecrieng FROM attendance WHERE type_leave = 'Việc riêng' AND date = '$date' GROUP BY type_leave";
    $result2 = mysqli_query($conn, $query2);
    if (mysqli_num_rows($result2)>0) {
    while($rows = mysqli_fetch_array($result2)){
        $viecrieng = $rows["soviecrieng"];
        }
    }
    else{
          $viecrieng = 0;
            }
    $query3 = "SELECT type_leave , COUNT(type_leave) AS sophepbenh FROM attendance WHERE type_leave = 'Phép bệnh' AND date = '$date' GROUP BY type_leave";
    $result3 = mysqli_query($conn, $query3);
    if (mysqli_num_rows($result3)>0) {
    while($rows = mysqli_fetch_array($result3)){
        $phepbenh = $rows["sophepbenh"];
        }
    }else{
            $phepbenh = 0;
        }
    $query4 = "SELECT attendance1 , COUNT(attendance1) AS sodilam FROM attendance WHERE attendance1 = '1' AND date = '$date' GROUP BY attendance1";
    $result4 = mysqli_query($conn, $query4);
    if (mysqli_num_rows($result4)>0) {
    while($rows = mysqli_fetch_array($result4)){
        $dilam = $rows["sodilam"];
        }
    }else{
            $dilam = 0;
        }
    $query5 = "SELECT attendance1 , COUNT(attendance1) AS songhilam FROM attendance WHERE attendance1 = '0' AND date = '$date' GROUP BY attendance1";
    $result5 = mysqli_query($conn, $query5);
    if (mysqli_num_rows($result5)>0) {
    while($rows = mysqli_fetch_array($result5)){
        $nghilam = $rows["songhilam"];
        }
    }else{
            $nghilam = 0;
        } 


        
?>
    
<style type="text/css">
    #chart-container{   
      width:30%;
      height:30%;
    }
    .input-group{
        margin: auto;
        width:30%;
        height:30%;
    }
    .inputQS{
        float: left;
    }
    #input100{
        width: 50%;
        float: left;
    }
    #filter{
        float: left;
    }
    
</style>

 <body>
    <h3 align="center">Thống kê nghỉ phép của nhân viên</h3>
    <form action="" method="POST" id="">
    <div class="container">
        <br><br>
            <div class="input-group" style="width: 50%;">
                 <div class="input-group-prepend">
                <span class="input-group-text" id="">Chọn ngày</span>
                </div>
                <input class="form-control" id="input100" name="input100" type="date"/>
                
                    <button type="submit" id="filter" name="formsubmit" class="btn btn-primary">Tìm kiếm</button>
               </div>
    </div>
  <br/><br/>
  <br/><br/>
    <div id="card shadow col-12" style="display: inline-block;width: 100%;" >   
    <div id="card shadow col-6" style="float: left;">
        <div id="piechart"></div>
    </div>
    <div class="card shadow col-3" style="left: 10%;">
        <ul class="list-group list-group-flush">
            <li class="list-group-item text-center">Quân số: <?php echo $dilam+$nghilam; ?></li>
            <li class="list-group-item text-center">Đi làm: <?php echo $dilam; ?></li>
            <li class="list-group-item text-center">Nghỉ làm: <?php echo $nghilam; ?></li>
        </ul>
    </div>
    <div class="card shadow col-3" style="float: left; left: 10%;">

                            <ul class="list-group list-group-flush">
                                <li class="list-group-item text-center">Phép năm: <?php echo $phepnam; ?></li>
                                <li class="list-group-item text-center">Việc riêng: <?php echo $viecrieng; ?></li>
                                <li class="list-group-item text-center">Phép bệnh: <?php echo $phepbenh; ?></li>
                            </ul>
        </div>
    </div>  
                    </form>



     <script type="text/javascript">


</script>





    <!-- (C) ATTACH DATE PICKER ON LOAD -->
    <script>
    window.addEventListener("load", function(){
      picker.attach({
        target: "input-opt",
        container: "pick-opt",
        startmon: true // WEEK START ON MON
      });
    });
    document.getElementById("input-opt").onclick = function () {
        document.getElementById("pick-opt").style.display = 'block';
            };
    $('.pick-opt').onclick(function(){
        alert($('.pick-opt').val());
    })
    
    </script>
    <script type="text/javascript">
        // Load google charts
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        // Draw the chart and set the chart values
        function drawChart() {
          var data = google.visualization.arrayToDataTable([
          ['Loại phép', 'Thống kê'],
          <?php 
            while($rows = mysqli_fetch_array($result)){
                echo "['".$rows["type_leave"]."', ".$rows["type_leave_no"]."],";
                }
           ?>
        ]);

          // Optional; add a title and set the width and height of the chart
          var options = {'title':'Biểu đồ',fontSize: 20 ,chartArea:{left:100,top:100,width:"400%",height:"300%"},height: 550
  ,width:550,
};

          // Display the chart inside the <div> element with id="piechart"
          var chart = new google.visualization.PieChart(document.getElementById('piechart'));
          chart.draw(data, options);
        }
    </script>
     <script>  
 
           $('#filter').click(function(){   
                var input_date = $('#input-opt').val();  
                if(input_date != '')  
                {  
                     $.ajax({  
                          url:"filter.php",  
                          method:"POST",  
                          data:{input_date:input_date},  
                          success:function(data)  
                          {  
                               $('#order_table').html(data);  
                          }  
                     });  
                }  
                else  
                {  
                     alert("Please Select Date");  
                }  
           });  
  
 </script>



<script src="datepicker/js/jquery.min.js"></script>
<script src="datepicker/js/bootstrap.min.js"></script>
<script src="datepicker/js/bootstrap-datepicker.js"></script>
<!-- Must put our javascript files here to fast the page loading -->
    
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Bootstrap Datepicker JS -->
    <script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <!-- Page Script -->
    <script src="assets/js/scripts.js"></script>

</body>
            
<?php 
    require_once "include/footer.php";
?>
</html>