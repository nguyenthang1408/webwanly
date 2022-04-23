<?php
$today1 = date("Y/m/d");
$thu = date("l", strtotime($today1));
$month = date("m/Y");
$year = date("Y");
$days= array();
$weeks= array();
$months = array();
$a = 0;
$b = 0;
//  Dữ liệu ngày trong tuần
$thu2 = 'Thứ 2';
$thu3 = 'Thứ 3';
$thu4 = 'Thứ 4';
$thu5 = 'Thứ 5';
$thu6 = 'Thứ 6';
$thu7 = 'Thứ 7';
switch ($thu) {
    case 'Monday':
        $sql = "SELECT SUM(attendance1=0) as nghilam,SUM(attendance1=1) as dilam FROM attendance WHERE attendance1 = '0' OR attendance1 ='1' GROUP BY date  LIMIT 1";
        $kq = mysqli_query($conn,$sql);
        while($kq1 =  mysqli_fetch_array($kq)){
                foreach($kq1 as $key){
                    $days[] = $key;         
                }    
            }
           
            if( !empty($days[1])   ||  !empty($days[3])){
                $nghilamthu2 = $days[1];
                $dilamthu2 =  $days[3];
                $tongthu2 = $nghilamthu2 + $dilamthu2;
                $tiledilamthu2 = ($dilamthu2*100)/$tongthu2;
                $tilenghilamthu2 = 100 - $tiledilamthu2;
                
            }else{
                $tiledilamthu2 =0;
                $tilenghilamthu2 =0;
                }
            $tilenghilamthu3 = 0;
            $tiledilamthu3 =  0;
            $tilenghilamthu4 = 0;
            $tiledilamthu4 =  0;
            $tilenghilamthu5 = 0;
            $tiledilamthu5 =  0;
            $tilenghilamthu6 = 0;
            $tiledilamthu6 =  0;
            $tilenghilamthu7 = 0;
            $tiledilamthu7 =  0;
        break;

    case 'Tuesday':
        $sql = "SELECT SUM(attendance1=0) as nghilam,SUM(attendance1=1) as dilam FROM attendance WHERE attendance1 = '0' OR attendance1 ='1' GROUP BY date  LIMIT 2";
        $kq = mysqli_query($conn,$sql);
        if (mysqli_num_rows($kq)>0) {
               while($kq1 =  mysqli_fetch_array($kq)){
                foreach($kq1 as $key){
                    $days[] = $key; 
                }  
            }
        }
        if( !empty($days[1])   ||  !empty($days[3])){
            $nghilamthu2 = $days[1];
            $dilamthu2 =  $days[3];
            $tongthu2 = $nghilamthu2 + $dilamthu2;
            $tiledilamthu2 = ($dilamthu2*100)/$tongthu2;
            $tilenghilamthu2 = 100 - $tiledilamthu2;
            
        }else{
            $tiledilamthu2 =0;
            $tilenghilamthu2 =0;
            }
        if( !empty($days[5])   ||  !empty($days[7])){
            $nghilamthu3 = $days[5];
            $dilamthu3 =  $days[7];
            $tongthu3 = $nghilamthu3 + $dilamthu3;
            $tiledilamthu3 = ($dilamthu3*100)/$tongthu3;
            $tilenghilamthu3 = 100 - $tiledilamthu3;
            
        }else{
            $tiledilamthu3 =0;
            $tilenghilamthu3 =0;
            }
        $tilenghilamthu4 = 0;
        $tiledilamthu4 =  0;
        $tilenghilamthu5 = 0;
        $tiledilamthu5 =  0;
        $tilenghilamthu6 = 0;
        $tiledilamthu6 =  0;
        $tilenghilamthu7 = 0;
        $tiledilamthu7 =  0;
        break;

    case 'Wednesday':
        $sql = "SELECT SUM(attendance1=0) as nghilam,SUM(attendance1=1) as dilam FROM attendance WHERE attendance1 = '0' OR attendance1 ='1' GROUP BY date LIMIT 3";
        $kq = mysqli_query($conn,$sql);
        if(mysqli_num_rows($kq)){
            while($kq1 =  mysqli_fetch_array($kq)){
                foreach($kq1 as $key){
                    $days[] = $key;         
                }    
            }
        }
        
        if(( !empty($days[1])   ||  !empty($days[3]))){
            $nghilamthu2 = $days[1];
            $dilamthu2 =  $days[3];
            $tongthu2 = $nghilamthu2 + $dilamthu2;
            $tiledilamthu2 = ($dilamthu2*100)/$tongthu2;
            $tilenghilamthu2 = 100 - $tiledilamthu2;
            
        }else{
            $tiledilamthu2 =0;
            $tilenghilamthu2 =0;
        }
       
        
        if( !empty($days[5])   ||  !empty($days[7])){
            $nghilamthu3 = $days[5];
            $dilamthu3 =  $days[7];
            $tongthu3 = $nghilamthu3 + $dilamthu3;
            $tiledilamthu3 = ($dilamthu3*100)/$tongthu3;
            $tilenghilamthu3 = 100 - $tiledilamthu3;
            
        }else{
            $tiledilamthu3 =0;
            $tilenghilamthu3 =0;
        }

        
        if( !empty($days[11])  ||  !empty($days[9])){
            $nghilamthu4 = $days[9];
            $dilamthu4 =  $days[11] + $dilamthu4;
            $tiledilamthu4 = ($dilamthu4*100)/$tongthu4;
            $tilenghilamthu4 = 100 - $tiledilamthu4;
            
        }else{
            $tiledilamthu4 =0;
            $tilenghilamthu4 =0;
        }
        $tilenghilamthu5 = 0;
        $tiledilamthu5 =  0;
        $tilenghilamthu6 = 0;
        $tiledilamthu6 =  0;
        $tilenghilamthu7 = 0;
        $tiledilamthu7 =  0;
              
        break;
    case 'Thursday':
        $sql = "SELECT SUM(attendance1=0) as nghilam,SUM(attendance1=1) as dilam FROM attendance WHERE attendance1 = '0' OR attendance1 ='1' GROUP BY date LIMIT 4";
        $kq = mysqli_query($conn,$sql);
        while($kq1 =  mysqli_fetch_array($kq)){

            foreach($kq1 as $key){
                $days[] = $key;         
            }    
        }
 
        if( !empty($days[1])   ||  !empty($days[3])){
            $nghilamthu2 = $days[1];
            $dilamthu2 =  $days[3];
            $tongthu2 = $nghilamthu2 + $dilamthu2;
            $tiledilamthu2 = ($dilamthu2*100)/$tongthu2;
            $tilenghilamthu2 = 100 - $tiledilamthu2;   
        }else{
            $tiledilamthu2 =0;
            $tilenghilamthu2 =0;
            }
        
        if( !empty($days[5])   ||  !empty($days[7])){
            $nghilamthu3 = $days[5];
            $dilamthu3 =  $days[7];
            $tongthu3 = $nghilamthu3 + $dilamthu3;
            $tiledilamthu3 = ($dilamthu3*100)/$tongthu3;
            $tilenghilamthu3 = 100 - $tiledilamthu3;
            
        }else{
            $tiledilamthu3 =0;
            $tilenghilamthu3 =0;
        }
        
        if( !empty($days[9])  ||  !empty($days[11])){
            $nghilamthu4 = $days[9];
            $dilamthu4 =  $days[11];
            $tongthu4 = $nghilamthu4 + $dilamthu4;
            $tiledilamthu4 = ($dilamthu4*100)/$tongthu4;
            $tilenghilamthu4 = 100 - $tiledilamthu4;
            
        }else{
            $tiledilamthu4 =0;
            $tilenghilamthu4 =0;    
        }
        
        if( !empty($days[13])   ||  !empty($days[15])){
            $nghilamthu5 = $days[13];
            $dilamthu5 =  $days[15];
            $tongthu5 = $nghilamthu5 + $dilamthu5;
            $tiledilamthu5 = ($dilamthu5*100)/$tongthu5;
            $tilenghilamthu5 = 100 - $tiledilamthu5;
            
        }else{
            $tiledilamthu5 =0;
            $tilenghilamthu5 =0;
        }
        $tilenghilamthu6 = 0;
        $tiledilamthu6 =  0;
        $tilenghilamthu7 = 0;
        $tiledilamthu7 =  0;
        break;
    case 'Friday':
        $sql = "SELECT SUM(attendance1=0) as nghilam,SUM(attendance1=1) as dilam FROM attendance WHERE attendance1 = '0' OR attendance1 ='1'  GROUP BY date LIMIT 5";
        $kq = mysqli_query($conn,$sql);
        while($kq1 =  mysqli_fetch_array($kq)){

            foreach($kq1 as $key){ 
                $days[] = $key;         
            }    
        }
        if( !empty($days[1])   ||  !empty($days[3])){
            $nghilamthu2 = $days[1];
            $dilamthu2 =  $days[3];
            $tongthu2 = $nghilamthu2 + $dilamthu2;
            $tiledilamthu2 = ($dilamthu2*100)/$tongthu2;
            $tilenghilamthu2 = 100 - $tiledilamthu2;
        }else{
            $tiledilamthu2 =0;
            $tilenghilamthu2 =0;
        }
        
        if( !empty($days[5])   ||  !empty( $days[7])){
            $nghilamthu3 = $days[5];
            $dilamthu3 =  $days[7];
            $tongthu3 = $nghilamthu3 + $dilamthu3;
            $tiledilamthu3 = ($dilamthu3*100)/$tongthu3;
            $tilenghilamthu3 = 100 - $tiledilamthu3;
            
        }else{
            $tiledilamthu3 =0;
            $tilenghilamthu3 =0;
        }
        
        if( !empty($days[9])   ||  !empty($days[11])){
            $nghilamthu4 = $days[9];
            $dilamthu4 =  $days[11];
            $tongthu4 = $nghilamthu4 + $dilamthu4;
            $tiledilamthu4 = ($dilamthu4*100)/$tongthu4;
            $tilenghilamthu4 = 100 - $tiledilamthu4;
            
        }else{
            $tiledilamthu4 =0;
            $tilenghilamthu4 =0;
        }
       
        if( !empty($days[13])   ||  !empty($days[15])){
            $nghilamthu5 = $days[13];
            $dilamthu5 =  $days[15];
            $tongthu5 = $nghilamthu5 + $dilamthu5;
            $tiledilamthu5= ($dilamthu5*100)/$tongthu5;
            $tilenghilamthu5 = 100 - $tiledilamthu5;
            
        }else{
            $tiledilamthu5=0;
            $tilenghilamthu5=0;
        }
        
        if( !empty($days[19])   ||  !empty($days[17])){
            $nghilamthu6 = $days[17];
            $dilamthu6 =  $days[19];
            $tongthu6 = $nghilamthu6 + $dilamthu6;
            $tiledilamthu6 = ($dilamthu6*100)/$tongthu6;
            $tilenghilamthu6 = 100 - $tiledilamthu6;
            
        }else{
            $tiledilamthu6 =0;
            $tilenghilamthu6 =0;
        }
        $tilenghilamthu7 = 0;
        $tiledilamthu7 =  0;
        break;
    case 'Saturday':
        $sql = "SELECT SUM(attendance1=0) as nghilam,SUM(attendance1=1) as dilam FROM attendance WHERE attendance1 = '0' OR attendance1 ='1' GROUP BY date LIMIT 6";
        $kq = mysqli_query($conn,$sql);
        while($kq1 =  mysqli_fetch_array($kq)){

            foreach($kq1 as $key){
                $a++;
                $days[$a] = $key;         
            }    
        }
        
        if( !empty($days[1])   ||  !empty($days[3])){
            $nghilamthu2 = $days[1];
            $dilamthu2 =  $days[3];
            $tongthu2 = $nghilamthu2 + $dilamthu2;
            $tiledilamthu2 = ($dilamthu2*100)/$tongthu2;
            $tilenghilamthu2 = 100 - $tiledilamthu2;
            
        }else{
            $tiledilamthu2 =0;
            $tilenghilamthu2 =0;
        }
        
        if( !empty($days[5])   ||  !empty($days[7])){
            $nghilamthu3 = $days[5];
            $dilamthu3 =  $days[7];
            $tongthu3 = $nghilamthu3 + $dilamthu3;
            $tiledilamthu3 = ($dilamthu3*100)/$tongthu3;
            $tilenghilamthu3 = 100 - $tiledilamthu3;
            
        }else{
            $tiledilamthu3 =0;
            $tilenghilamthu3 =0;
        }
        
        if( !empty($days[11])   ||  !empty($days[9])){
            $nghilamthu4 = $days[11];
            $dilamthu4 =  $days[9];
            $tongthu4 = $nghilamthu4 + $dilamthu4;
            $tiledilamthu4 = ($dilamthu4*100)/$tongthu4;
            $tilenghilamthu4 = 100 - $tiledilamthu4;
            
        }else{
            $tiledilamthu4 =0;
            $tilenghilamthu4 =0;
        }
        
        if( !empty($days[13])   ||  !empty($days[15])){
            $nghilamthu5 = $days[13];
            $dilamthu5 =  $days[15];
            $tongthu5 = $nghilamthu5 + $dilamthu5;
            $tiledilamthu5 = ($dilamthu5*100)/$tongthu5;
            $tilenghilamthu5 = 100 - $tiledilamthu5;
            
        }else{
            $tiledilamthu5 =0;
            $tilenghilamthu5 =0;
        }
       
        if( !empty($days[17])   ||  !empty($days[19])){
            $nghilamthu6 = $days[17];
            $dilamthu6 =  $days[19];
            $tongthu6 = $nghilamthu6 + $dilamthu6;
            $tiledilamthu6 = ($dilamthu6*100)/$tongthu6;
            $tilenghilamthu6 = 100 - $tiledilamthu6;
            
        }else{
            $tiledilamthu6 =0;
            $tilenghilamthu6 =0;
        }
        if( !empty($days[21])   ||  !empty($days[23])){
            $nghilamthu7 = $days[21];
            $dilamthu7 =  $days[23];
            $tongthu7 = $nghilamthu7 + $dilamthu7;
            $tiledilamthu7 = ($dilamthu7*100)/$tongthu7;
            $tilenghilamthu7 = 100 - $tiledilamthu7;
            
        }else{
            $tiledilamthu7 =0;
            $tilenghilamthu7 =0;
        }
        break;
        
    default:
       
        break;
}
// Dữ liệu tuần trong tháng
$dautuan1 = date('Y-m-d', strtotime(date('Y-m-01', strtotime("now"))));
$cuoituan1 = date('Y-m-d', strtotime(date('Y-m-07', strtotime("now"))));
$dautuan2 = date('Y-m-d', strtotime(date('Y-m-08', strtotime("now"))));
$cuoituan2 = date('Y-m-d', strtotime(date('Y-m-15', strtotime("now"))));
$dautuan3 = date('Y-m-d', strtotime(date('Y-m-16', strtotime("now"))));
$cuoituan3 = date('Y-m-d', strtotime(date('Y-m-23', strtotime("now"))));
$dautuan4 = date('Y-m-d', strtotime(date('Y-m-24', strtotime("now"))));
$cuoituan4 = date("Y-m-t");

        $mysql = "SELECT SUM(attendance1=0) as nghilam,SUM(attendance1=1) as dilam FROM attendance WHERE date BETWEEN '$dautuan1' AND '$cuoituan1' ";
        $ketqua = mysqli_query($conn,$mysql);
        while($ketqua1 =  mysqli_fetch_array($ketqua)){

            foreach($ketqua1 as $key){
                $weeks[] = $key;         
            }    
        }

        if( !empty($weeks[1])   ||  !empty($weeks[3])){
            $dilamtuan1 = $weeks[3]; 
            $nghilamtuan1 = $weeks[1];
            $tongtuan1 = $dilamtuan1 + $nghilamtuan1;
            $tiledilamtuan1 = ($dilamtuan1*100)/$tongtuan1;
            $tilenghilamtuan1 = 100 - $tiledilamtuan1;
           
        }else{
            $tiledilamtuan1 =0;
            $tilenghilamtuan1 =0;
        }

    // $tiledilamtuan2= $tilenghilamtuan2=$tiledilamtuan3= $tilenghilamtuan3=$tiledilamtuan4= $tilenghilamtuan4=0;
    

        $mysql1 = "SELECT SUM(attendance1=0) as nghilam,SUM(attendance1=1) as dilam FROM attendance WHERE date BETWEEN '$dautuan2' AND '$cuoituan2' ";
        $ketquaw2 = mysqli_query($conn,$mysql1);
        while($w2 =  mysqli_fetch_array($ketquaw2)){
    
            foreach($w2 as $key){
                $weeks[] = $key;         
            }    
        }
       
        if( !empty($weeks[5])   ||  !empty($weeks[7])){
            $dilamtuan2 = $weeks[7]; 
            $nghilamtuan2 = $weeks[5];
            $tongtuan2 = $dilamtuan2 + $nghilamtuan2;
            $tiledilamtuan2 = ($dilamtuan2*100)/$tongtuan2;
            $tilenghilamtuan2 = 100 - $tiledilamtuan2;
            
        }else{
            $tiledilamtuan2 =0;
            $tilenghilamtuan2 =0;
        }
        // $tiledilamtuan3= $tilenghilamtuan3=$tiledilamtuan4= $tilenghilamtuan4=0;
    

        $mysql2 = "SELECT SUM(attendance1=0) as nghilam,SUM(attendance1=1) as dilam FROM attendance WHERE date BETWEEN '$dautuan3' AND '$cuoituan3' ";
        $ketquaw3 = mysqli_query($conn,$mysql2);
        while($w3 =  mysqli_fetch_array($ketquaw3)){
    
            foreach($w3 as $key){
                $weeks[] = $key;         
            }    
        }
        
        if( !empty($weeks[9])   ||  !empty($weeks[11])){
            $dilamtuan3 = $weeks[11]; 
            $nghilamtuan3 = $weeks[9];
            $tongtuan3 = $dilamtuan3 + $nghilamtuan3;
            $tiledilamtuan3 = ($dilamtuan3*100)/$tongtuan3;
            $tilenghilamtuan3 = 100 - $tiledilamtuan3;
        }else{
            $tiledilamtuan3 =0;
            $tilenghilamtuan3 =0;
        }
    


        $mysql3 = "SELECT SUM(attendance1=0) as nghilam,SUM(attendance1=1) as dilam FROM attendance WHERE date BETWEEN '$dautuan4' AND '$cuoituan4' ";
        $ketquaw4 = mysqli_query($conn,$mysql3);
        while($w4 =  mysqli_fetch_array($ketquaw4)){
    
            foreach($w4 as $key){
                $weeks[] = $key;         
            }    
        }

        
        if( !empty($weeks[13])   ||  !empty($weeks[15])){
            $dilamtuan4 = $weeks[15]; 
            $nghilamtuan4 = $weeks[13];
            $tongtuan4 = $dilamtuan4 + $nghilamtuan4;
            $tiledilamtuan4 = ($dilamtuan4*100)/$tongtuan4;
            $tilenghilamtuan4 = 100 - $tiledilamtuan4;
        }else{
            $tiledilamtuan4 =0;
            $tilenghilamtuan4 =0;
        }
    
    //    Dữ liệu trong năm
    $dauthang1 =date("Y-m-d", mktime(0, 0, 0, 1,1 ,date("Y")));
    $cuoithang1 = date("Y-m-d", mktime(0, 0, 0, 1+1,0,date("Y")));
    $dauthang2 =date("Y-m-d", mktime(0, 0, 0, 2,1 ,date("Y")));
    $cuoithang2 = date("Y-m-d", mktime(0, 0, 0, 2+1,0,date("Y")));
    $dauthang3 =date("Y-m-d", mktime(0, 0, 0, 3,1 ,date("Y")));
    $cuoithang3 = date("Y-m-d", mktime(0, 0, 0, 3+1,0,date("Y")));
    $dauthang4 =date("Y-m-d", mktime(0, 0, 0, 4,1 ,date("Y")));
    $cuoithang4 = date("Y-m-d", mktime(0, 0, 0, 4+1,0,date("Y")));
    $dauthang5 =date("Y-m-d", mktime(0, 0, 0, 5,1 ,date("Y")));
    $cuoithang5 = date("Y-m-d", mktime(0, 0, 0, 5+1,0,date("Y")));
    $dauthang6 =date("Y-m-d", mktime(0, 0, 0, 6,1 ,date("Y")));
    $cuoithang6 = date("Y-m-d", mktime(0, 0, 0, 6+1,0,date("Y")));
    $dauthang7 =date("Y-m-d", mktime(0, 0, 0, 7,1 ,date("Y")));
    $cuoithang7 = date("Y-m-d", mktime(0, 0, 0, 7+1,0,date("Y")));
    $dauthang8 =date("Y-m-d", mktime(0, 0, 0, 8,1 ,date("Y")));
    $cuoithang8 = date("Y-m-d", mktime(0, 0, 0, 8+1,0,date("Y")));
    $dauthang9 =date("Y-m-d", mktime(0, 0, 0, 9,1 ,date("Y")));
    $cuoithang9 = date("Y-m-d", mktime(0, 0, 0, 9+1,0,date("Y")));
    $dauthang10 =date("Y-m-d", mktime(0, 0, 0, 10,1 ,date("Y")));
    $cuoithang10 = date("Y-m-d", mktime(0, 0, 0, 10+1,0,date("Y")));
    $dauthang11 =date("Y-m-d", mktime(0, 0, 0, 11,1 ,date("Y")));
    $cuoithang11 = date("Y-m-d", mktime(0, 0, 0, 11+1,0,date("Y")));
    $dauthang12 =date("Y-m-d", mktime(0, 0, 0, 12,1 ,date("Y")));
    $cuoithang12 = date("Y-m-d", mktime(0, 0, 0, 12+1,0,date("Y")));
    
    $mysql4 = "SELECT SUM(attendance1=0) as nghilam,SUM(attendance1=1) as dilam FROM attendance WHERE date BETWEEN '$dauthang1' AND '$cuoithang1' ";
    $reponse = mysqli_query($conn,$mysql4);
    while($ketquam1 =  mysqli_fetch_array($reponse)){

        foreach($ketquam1 as $key){
            $months[] = $key;         
        }    
    }
    
    if( !empty($months[1])   ||  !empty($months[3])){
        $dilamthang1 = $months[3]; 
        $nghilamthang1 = $months[1];
        $tongthang1 = $dilamthang1 + $nghilamthang1;
        $tiledilamthang1 = ($dilamthang1*100)/$tongthang1;
        $tilenghilamthang1 = 100 - $tiledilamthang1;
    }else{
        $tiledilamthang1 =0;
        $tilenghilamthang1 =0;
    }

    $mysql5 = "SELECT SUM(attendance1=0) as nghilam,SUM(attendance1=1) as dilam FROM attendance WHERE date BETWEEN '$dauthang2' AND '$cuoithang2' ";
    $reponse1 = mysqli_query($conn,$mysql5);
    while($ketquam2 =  mysqli_fetch_array($reponse1)){

        foreach($ketquam2 as $key){
            $months[] = $key;         
        }    
    }
    
    if( !empty($months[5])   ||  !empty($months[7])){
        $dilamthang2 = $months[7]; 
        $nghilamthang2 = $months[5];
        $tongthang2 = $dilamthang2 + $nghilamthang2;
        $tiledilamthang2 = ($dilamthang2*100)/$tongthang2;
        $tilenghilamthang2 = 100 - $tiledilamthang2;
    }else{
        $tiledilamthang2 =0;
        $tilenghilamthang2 =0;
    }
    $mysql6 = "SELECT SUM(attendance1=0) as nghilam,SUM(attendance1=1) as dilam FROM attendance WHERE date BETWEEN '$dauthang3' AND '$cuoithang3' ";
    $reponse2 = mysqli_query($conn,$mysql6);
    while($ketquam3 =  mysqli_fetch_array($reponse2)){

        foreach($ketquam3 as $key){
            $months[] = $key;         
        }    
    }
    
    if( !empty($months[11])   ||  !empty($months[9])){
        $dilamthang3 = $months[11]; 
        $nghilamthang3 = $months[9];
        $tongthang3 = $dilamthang3 + $nghilamthang3;
        $tiledilamthang3 = ($dilamthang3*100)/$tongthang3;
        $tilenghilamthang3 = 100 - $tiledilamthang3;
    }else{
        $tiledilamthang3 =0;
        $tilenghilamthang3 =0;
    }
    $mysql7 = "SELECT SUM(attendance1=0) as nghilam,SUM(attendance1=1) as dilam FROM attendance WHERE date BETWEEN '$dauthang4' AND '$cuoithang4' ";
    $reponse3 = mysqli_query($conn,$mysql7);
    while($ketquam4 =  mysqli_fetch_array($reponse3)){

        foreach($ketquam4 as $key){
            $months[] = $key;         
        }    
    }
    
    if( !empty($months[15])   ||  !empty($months[13])){
        $dilamthang4 = $months[13]; 
        $nghilamthang4 = $months[15];
        $tongthang4 = $dilamthang4 + $nghilamthang4;
        $tiledilamthang4 = ($dilamthang4*100)/$tongthang4;
        $tilenghilamthang4 = 100 - $tiledilamthang4;
       
    }else{
        $tiledilamthang4 =0;
        $tilenghilamthang4 =0;
    }
    $mysql8 = "SELECT SUM(attendance1=0) as nghilam,SUM(attendance1=1) as dilam FROM attendance WHERE date BETWEEN '$dauthang5' AND '$cuoithang5' ";
    $reponse4 = mysqli_query($conn,$mysql8);
    while($ketquam5 =  mysqli_fetch_array($reponse4)){

        foreach($ketquam5 as $key){
            $months[] = $key;         
        }    
    }
    
    if( !empty($months[17])   ||  !empty($months[19])){
        $dilamthang5 = $months[17]; 
        $nghilamthang5 = $months[19];
        $tongthang5 = $dilamthang5 + $nghilamthang5;
        $tiledilamthang5 = ($dilamthang5*100)/$tongthang5;
        $tilenghilamthang5 = 100 - $tiledilamthang5;
        
    }else{
        $tiledilamthang5 =0;
        $tilenghilamthang5 =0;
    }
    $mysql9 = "SELECT SUM(attendance1=0) as nghilam,SUM(attendance1=1) as dilam FROM attendance WHERE date BETWEEN '$dauthang6' AND '$cuoithang6' ";
    $reponse5 = mysqli_query($conn,$mysql9);
    while($ketquam6 =  mysqli_fetch_array($reponse5)){

        foreach($ketquam6 as $key){
            $months[] = $key;         
        }    
    }
    
    if( !empty($months[21])   ||  !empty($months[23])){
        $dilamthang6 = $months[21]; 
        $nghilamthang6 = $months[23];
        $tongthang6 = $dilamthang6 + $nghilamthang6;
        $tiledilamthang6 = ($dilamthang6*100)/$tongthang6;
        $tilenghilamthang6 = 100 - $tiledilamthang6;
        
    }else{
        $tiledilamthang6 =0;
        $tilenghilamthang6 =0;
    }
    $mysql10 = "SELECT SUM(attendance1=0) as nghilam,SUM(attendance1=1) as dilam FROM attendance WHERE date BETWEEN '$dauthang7' AND '$cuoithang7' ";
    $reponse6 = mysqli_query($conn,$mysql10);
    while($ketquam7 =  mysqli_fetch_array($reponse6)){

        foreach($ketquam7 as $key){
            $months[] = $key;         
        }    
    }
    
    if( !empty($months[25])   ||  !empty($months[27])){
        $dilamthang7 = $months[25]; 
        $nghilamthang7 = $months[27];
        $tongthang7 = $dilamthang7 + $nghilamthang7;
        $tiledilamthang7 = ($dilamthang7*100)/$tongthang7;
        $tilenghilamthang7 = 100 - $tiledilamthang7;
    }else{
        $tiledilamthang7 =0;
        $tilenghilamthang7 =0;
    }  
        
    $mysql11 = "SELECT SUM(attendance1=0) as nghilam,SUM(attendance1=1) as dilam FROM attendance WHERE date BETWEEN '$dauthang8' AND '$cuoithang8' ";
    $reponse7 = mysqli_query($conn,$mysql11);
    while($ketquam8 =  mysqli_fetch_array($reponse7)){

        foreach($ketquam8 as $key){
            $months[] = $key;         
        }    
    }
    
    if( !empty($months[29])   ||  !empty($months[31])){
        $dilamthang8 = $months[29]; 
        $nghilamthang8 = $months[31];
        $tongthang8 = $dilamthang8 + $nghilamthang8;
        $tiledilamthang8 = ($dilamthang8*100)/$tongthang8;
        $tilenghilamthang8 = 100 - $tiledilamthang8;
   
    }else{
        $tiledilamthang8 =0;
        $tilenghilamthang8 =0;
    }
    $mysql12 = "SELECT SUM(attendance1=0) as nghilam,SUM(attendance1=1) as dilam FROM attendance WHERE date BETWEEN '$dauthang9' AND '$cuoithang9' ";
    $reponse8 = mysqli_query($conn,$mysql12);
    while($ketquam9 =  mysqli_fetch_array($reponse8)){

        foreach($ketquam9 as $key){
            $months[] = $key;         
        }    
    }
    
    if( !empty($months[33])   ||  !empty($months[35])){
        $dilamthang9 = $months[33]; 
        $nghilamthang9 = $months[35];
        $tongthang9 = $dilamthang9 + $nghilamthang9;
        $tiledilamthang9 = ($dilamthang9*100)/$tongthang9;
        $tilenghilamthang9 = 100 - $tiledilamthang9;
        
    }else{
        $tiledilamthang9 =0;
        $tilenghilamthang9 =0;
    }
    $mysql13 = "SELECT SUM(attendance1=0) as nghilam,SUM(attendance1=1) as dilam FROM attendance WHERE date BETWEEN '$dauthang10' AND '$cuoithang10' ";
    $reponse9 = mysqli_query($conn,$mysql13);
    while($ketquam10 =  mysqli_fetch_array($reponse9)){

        foreach($ketquam10 as $key){
            $months[] = $key;         
        }    
    }
    
    if( !empty($months[37])   ||  !empty($months[39])){
        $dilamthang10 = $months[37]; 
        $nghilamthang10 = $months[39];
        $tongthang10 = $dilamthang10 + $nghilamthang10;
        $tiledilamthang10 = ($dilamthang10*100)/$tongthang10;
        $tilenghilamthang10 = 100 - $tiledilamthang10;
        
    }else{
        $tiledilamthang10 =0;
        $tilenghilamthang10 =0;
    }
    $mysql14 = "SELECT SUM(attendance1=0) as nghilam,SUM(attendance1=1) as dilam FROM attendance WHERE date BETWEEN '$dauthang11' AND '$cuoithang11' ";
    $reponse10 = mysqli_query($conn,$mysql14);
    while($ketquam11 =  mysqli_fetch_array($reponse10)){

        foreach($ketquam11 as $key){
            $months[] = $key;         
        }    
    }
    
    if( !empty($months[41])   ||  !empty($months[43])){
        $dilamthang11 = $months[41]; 
        $nghilamthang11 = $months[43];
        $tongthang11 = $dilamthang11 + $nghilamthang11;
        $tiledilamthang11 = ($dilamthang11*100)/$tongthang11;
        $tilenghilamthang11 = 100 - $tiledilamthang11;
    }else{
        $tiledilamthang11 =0;
        $tilenghilamthang11 =0;
    }
    $mysql15 = "SELECT SUM(attendance1=0) as nghilam,SUM(attendance1=1) as dilam FROM attendance WHERE date BETWEEN '$dauthang12' AND '$cuoithang12' ";
    $reponse11 = mysqli_query($conn,$mysql15);
    while($ketquam12 =  mysqli_fetch_array($reponse11)){

        foreach($ketquam12 as $key){
            $months[] = $key;         
        }    
    }
    
    if( !empty($months[45])   ||  !empty($months[47])){
        $dilamthang12 = $months[45]; 
        $nghilamthang12 = $months[47];
        $tongthang12 = $dilamthang12 + $nghilamthang12;
        $tiledilamthang12 = ($dilamthang12*100)/$tongthang12;
        $tilenghilamthang12 = 100 - $tiledilamthang12;
        
    }else{
        $tiledilamthang12 =0;
        $tilenghilamthang12 =0;
    }
 ?>