<?php
      class Database{
      	private $hostname = 'localhost';
      	private $username = 'root';
      	private $pass ='';
      	private $dbname = 'tdh';
      	private $conn = NULL;
      	private $result = NULL;

      	public function connect()
      	{
      		$this->conn = new mysqli($this->hostname,$this->username,$this->pass,$this->dbname);
      		if(!$this->conn){
               echo "Kết Nối Thất Bại";
               exit();
      		}
      		else{
      			mysqli_set_charset($this->conn,'UTF8');
      		}
      		return $this->conn;
      	}
      	public function execute($sql)
      	{
      		$this->result = $this->conn->query($sql);
      		return $this->result;
      	}

      	public function getData()
      	{
      		if($this->result)
      		{
      			$data = mysqli_fetch_array($this->result);
      		}
      		else{
      			$data= 0;
      		}
      		return $data;
      	}
      	public function getAllData($table)
      	{
            $sql = "SELECT * FROM $table";
            $this->execute($sql);
      		if($this->num_row()==0)
            {
               $data= 0;
            }
      		else{
      			while($datas = $this->getData()){
      				$data[] = $datas; 
      			}
      		}
      		return $data;
      	}
          public function getDataID($table,$id)
         {
            $sql = "SELECT * FROM $table WHERE id = '$id'";
            $this->execute($sql);
            if($this->num_row()!=0)
            {
               $data = mysqli_fetch_array($this->result);
            }
            else{
               $data= 0;
            }
            return $data;
         }
         public function getDatamay($table,$tenmay,$ngaybatdau)
         {
            $sql = "SELECT * FROM $table WHERE tenmay = '$tenmay' and ngaybatdau = '$ngaybatdau'";
            $this->execute($sql);
            if($this->num_row()!=0)
            {
               $data = mysqli_fetch_array($this->result);
            }
            else{
               $data= 0;
            }
            return $data;
         }
         public function getDataloginID($table,$username,$password)
         {
            $sql = "SELECT * FROM $table WHERE username = '$username' and password = '$password'";
            $this->execute($sql);
            if($this->num_row()!=0)
            {
               $data = mysqli_fetch_array($this->result);
            }
            else{
               $data= 0;
            }
            return $data;
         }
         public function getDatatiendo($tablee,$tenmay,$ngaybatdau)
         {
            $sql = "SELECT * FROM $tablee WHERE tenmay = '$tenmay' and ngaybatdau = '$ngaybatdau'";
            $this->execute($sql);
            if($this->num_row()!=0)
            {
               $data = mysqli_fetch_array($this->result);
            }
            else{
               $data= 0;
            }
            return $data;
         }
         public function getDataMaThe($table,$mathe)
         {
            $sql = "SELECT * FROM $table WHERE mathe LIKE '%$mathe%'";
            $this->execute($sql);
            if($this->num_row()!=0)
            {
               $data = mysqli_fetch_array($this->result);
            }
            else{
               $data= 0;
            }
            return $data;
         }
         public function getSumHieuSuat($table,$mathe)
         {
            $sql = "SELECT sum(hieusuat) as hieusuat FROM $table WHERE mathe = '$mathe'";
            $this->execute($sql);
            if($this->num_row()!=0)
            {
               $data = mysqli_fetch_array($this->result);
            }
            else{
               $data= 0;
            }
            return $data;
         }
          public function getCountHieuSuat($table,$mathe)
         {
            $sql = "SELECT count(hieusuat) as count FROM $table WHERE mathe = '$mathe'";
            $this->execute($sql);
            if($this->num_row()!=0)
            {
               $data = mysqli_fetch_array($this->result);
            }
            else{
               $data= 0;
            }
            return $data;
         }
         public function getDatatiendo1($tablee1,$tenmay,$ngaybatdau)
         {
            $sql = "SELECT * FROM $tablee1 WHERE tenmay = '$tenmay' and ngaybatdau = '$ngaybatdau'";
            $this->execute($sql);
            if($this->num_row()!=0)
            {
               $data = mysqli_fetch_array($this->result);
            }
            else{
               $data= 0;
            }
            return $data;
         }

         public function getDataLineMayMoc($table,$tenline,$bophan)
         {
            $sql = "SELECT * FROM $table WHERE tenline = '$tenline' and bophan = '$bophan'";
            $this->execute($sql);
            if($this->num_row()==0)
            {
               $data= 0;
            }
            else{
               while($datas = $this->getData()){
                  $data[] = $datas; 
               }
            }
            return $data;
         }
          public function getDataBoPhanLine($table,$tenline,$bophan)
         {
            $sql = "SELECT * FROM $table WHERE tenline = '$tenline' and bophan = '$bophan'";
            $this->execute($sql);
            if($this->num_row()==0)
            {
               $data= 0;
            }
            else{
               while($datas = $this->getData()){
                  $data[] = $datas; 
               }
            }
            return $data;
         }
          public function getDataTableTienDo($tenmay,$ngaybatdau,$tenline)
         {
            $sql = "SELECT * FROM tiendo1 WHERE tenmay = '$tenmay' and ngaybatdau = '$ngaybatdau' and tenline = '$tenline'";
             $this->execute($sql);
            if($this->num_row()!=0)
            {
               $data = mysqli_fetch_array($this->result);
            }
            else{
               $data= 0;
            }
            return $data;
         }
          public function getAllDatabophan($table,$bophan)
         {
            $sql = "SELECT * FROM $table WHERE bophan = '$bophan'";
            $this->execute($sql);
            if($this->num_row()==0)
            {
               $data= 0;
            }
            else{
               while($datas = $this->getData()){
                  $data[] = $datas; 
               }
            }
            return $data;
         }

         public function num_row()
         {
            if($this->result)
            {
               $num = mysqli_num_rows($this->result);
            }
            else{
               $num =0;
            }
            return $num;
         }
         public function Insert($line)
         {
            $sql = "SELECT * from anh where em = '$line'";
             return $this->execute($sql);
         }
         public function InsertHieuSuat($table,$mathe,$hieusuat,$tenmay,$ngaybatdau)
         {
            $sql = "INSERT INTO $table(mathe,hieusuat,tenmay,ngaybatdau) VALUES('$mathe','$hieusuat','$tenmay','$ngaybatdau')";
             return $this->execute($sql);
         }
         public function InsertTienDoMayMocLine($tenmay,$tiendo,$ngaybatdau,$ngaydukien,$bophan,$nhomthuchien,$line,$mathe)
         {
            $sql = "INSERT INTO tiendomaymoc1(tenmay,tiendo,ngaybatdau,ngaydukien,bophan,nhomthuchien,tenline,mathe) VALUES('$tenmay','$tiendo','$ngaybatdau','$ngaydukien','$bophan','$nhomthuchien','$line','$mathe')";
             return $this->execute($sql);
         }
      	public function InsertData($tenmay,$tiendo,$ngaybatdau,$ngaydukien,$bophan,$nhomthuchien,$mathe)
      	{
      		$sql = "INSERT INTO tiendomaymoc(tenmay,tiendo,ngaybatdau,ngaydukien,bophan,nhomthuchien,mathe) VALUES('$tenmay','$tiendo','$ngaybatdau','$ngaydukien','$bophan','$nhomthuchien','$mathe')";
             return $this->execute($sql);
      	}
         public function InsertData1($tenmay,$ngaybatdau,$dfm,$dtod,$giacongvadathang,$lapdatvachinhmay,$buyoff)
         {
            $sql = "INSERT INTO tiendo(tenmay,ngaybatdau,dfm,3dto2d,giacongvadathang,lapdatvachinhmay,buyoff) VALUES('$tenmay','$ngaybatdau','$dfm','$dtod','$giacongvadathang','$lapdatvachinhmay','$buyoff')";
             return $this->execute($sql);
         }
         public function InsertDataLine($tenmay,$ngaybatdau,$dfm,$dtod,$giacongvadathang,$lapdatvachinhmay,$buyoff,$tenline)
         {
            $sql = "INSERT INTO tiendo1(tenmay,ngaybatdau,dfm,3dto2d,giacongvadathang,lapdatvachinhmay,buyoff,tenline) VALUES('$tenmay','$ngaybatdau','$dfm','$dtod','$giacongvadathang','$lapdatvachinhmay','$buyoff','$tenline')";
             return $this->execute($sql);
         }
         public function InsertTenline($tenmay,$ngaybatdau,$may1,$may2,$may3,$may4,$may5,$may6,$may7,$may8,$may9,$may10,$bophan)
         {
            $sql = "INSERT INTO tiendoquydinhline(tenmay,ngaybatdau,may1,may2,may3,may4,may5,may6,may7,may8,may9,may10,bophan) VALUES('$tenmay','$ngaybatdau','$may1','$may2','$may3','$may4','$may5','$may6','$may7','$may8','$may9','$may10','$bophan')";
             return $this->execute($sql);
         }
         public function InsertData2($tenmay,$ngaybatdau,$dfm1,$dtod1,$giacongvadathang1,$lapdatvachinhmay1,$buyoff1)
         {
            $sql = "INSERT INTO tiendoquydinh(tenmay,ngaybatdau,dfm,3dto2d,giacongvadathang,lapdatvachinhmay,buyoff) VALUES('$tenmay','$ngaybatdau','$dfm1','$dtod1','$giacongvadathang1','$lapdatvachinhmay1','$buyoff1')";
             return $this->execute($sql);
         }
         //
         public function InsertData3($tenmay,$ngaybatdau,$dfm1,$dtod1,$giacongvadathang1,$lapdatvachinhmay1,$buyoff1)
         {
            $sql = "INSERT INTO tiendoquydinh1(tenmay,ngaybatdau,dfm,3dto2d,giacongvadathang,lapdatvachinhmay,buyoff) VALUES('$tenmay','$ngaybatdau','$dfm1','$dtod1','$giacongvadathang1','$lapdatvachinhmay1','$buyoff1')";
             return $this->execute($sql);
         }
         public function Insertuser($table,$username,$password)
         {
            $sql = "INSERT INTO $table(username,password) VALUES('$username','$password')";
             return $this->execute($sql);
         }
      	public function UpdateData($id,$tenmay,$ngaybatdau,$ngaydukien,$bophan,$nhomthuchien)
      	{
      		$sql = "UPDATE tiendomaymoc SET tenmay='$tenmay',ngaybatdau='$ngaybatdau',ngaydukien='$ngaydukien',bophan='$bophan',nhomthuchien='$nhomthuchien' WHERE id = '$id'";
             return $this->execute($sql);
      	}
         public function Updatemay($id,$tenmay,$ngaybatdau)
         {
            $sql = "UPDATE tiendoquydinh SET tenmay='$tenmay',ngaybatdau='$ngaybatdau' WHERE id = '$id'";
             return $this->execute($sql);
         }
         public function Updatetenmay1($id,$tenmay,$ngaybatdau)
         {
            $sql = "UPDATE tiendoline SET tenmay='$tenmay',ngaybatdau='$ngaybatdau' WHERE id = '$id'";
             return $this->execute($sql);
         }
         public function Updatemay1($id,$tenmay,$ngaybatdau)
         {
            $sql = "UPDATE tiendo SET tenmay='$tenmay',ngaybatdau='$ngaybatdau' WHERE id = '$id'";
             return $this->execute($sql);
         }
         public function UpdateTienDo($id,$tiendo)
         {
            $sql = "UPDATE tiendomaymoc SET tiendo='$tiendo' WHERE id = '$id'";
             return $this->execute($sql);
         }
         public function UpdateTienDo1($tenmay,$tenline,$tiendo)
         {
            $sql = "UPDATE tiendomaymoc1 SET tiendo='$tiendo' WHERE tenline = '$tenline' and tenmay = '$tenmay'";
             return $this->execute($sql);
         }
        public function UpdateTienDo2($tenmay,$bophan,$tiendo)
         {
            $sql = "UPDATE tiendomaymoc SET tiendo='$tiendo' WHERE bophan = '$bophan' and tenmay = '$tenmay'";
             return $this->execute($sql);
         }
         public function UpdateTienDoQuyDinh($dfm,$dtod,$giacongvadathang,$lapdatvachinhmay,$buyoff,$tenmay,$ngaybatdau)
         {
            $sql = "UPDATE tiendoquydinh SET dfm = '$dfm',3dto2d = '$dtod',giacongvadathang = '$giacongvadathang',lapdatvachinhmay = '$lapdatvachinhmay',buyoff = '$buyoff' WHERE tenmay = '$tenmay' and ngaybatdau = '$ngaybatdau'";
             return $this->execute($sql);
         }
         public function Updateline($id,$tenmay,$may1,$may2,$may3,$may4,$may5,$may6,$may7,$may8,$may9,$may10,$bophan)
         {
            $sql = "UPDATE tiendoquydinhline SET tenmay = '$tenmay',may1 = '$may1',may2 = '$may2',may3 = '$may3',may4 = '$may4',may5 = '$may5',may6 = '$may6',may7 = '$may7',may8 = '$may8',may9 = '$may9',may10 = '$may10',bophan = '$bophan' WHERE id = '$id'";
             return $this->execute($sql);
         }
         public function Updateuser($table,$id,$username,$password)
         {
            $sql = "UPDATE $table SET username='$username',password='$password' WHERE id = '$id'";
             return $this->execute($sql);
         }
         public function Update($tenmay,$tenline,$ngaybatdau)
         {
            $sql = "UPDATE tiendo1 SET $tenmay ='$tenmay' WHERE tenline = '$tenline' and ngaybatdau = '$ngaybatdau'";
             return $this->execute($sql);
         }
         public function Updattiendo1($table,$tentiendo,$tiendo,$tenmay,$ngaybatdau,$tenline)
         {
            $sql = "UPDATE $table SET $tentiendo ='$tiendo' WHERE tenmay = '$tenmay' and ngaybatdau = '$ngaybatdau' and tenline = '$tenline'";
             return $this->execute($sql);
         }
          public function Updattiendo2($table,$tentiendo,$tiendo,$tenmay,$ngaybatdau)
         {
            $sql = "UPDATE $table SET $tentiendo ='$tiendo' WHERE tenmay = '$tenmay' and ngaybatdau = '$ngaybatdau'";
             return $this->execute($sql);
         }
         public function Updatebophan($table,$bophan,$tenmay,$ngaybatdau)
         {
            $sql = "UPDATE $table SET bophan ='$bophan' WHERE tenmay = '$tenmay' and ngaybatdau = '$ngaybatdau'";
             return $this->execute($sql);
         }
         public function Updatehoanthanh($table,$ngayhoanthanh,$id)
         {
            $sql = "UPDATE $table SET ngayhoanthanh ='$ngayhoanthanh' WHERE id = '$id'";
             return $this->execute($sql);
         }
         public function Updatehieusuat($table,$hieusuat,$id)
         {
            $sql = "UPDATE $table SET hieusuat ='$hieusuat' WHERE id = '$id'";
             return $this->execute($sql);
         }
         public function UpdatehieusuatMaThe($table,$hieusuat,$mathe)
         {
            $sql = "UPDATE $table SET hieusuat ='$hieusuat' WHERE mathe = '$mathe'";
             return $this->execute($sql);
         }
          public function Updatebophan1($bophan,$tenline)
         {
            $sql = "UPDATE tiendomaymoc1 SET bophan ='$bophan' WHERE tenline = '$tenline'";
             return $this->execute($sql);
         }
      	public function Delete($id,$table)
      	{
      		$sql = "DELETE FROM $table WHERE id = '$id'";
      		return $this->execute($sql);
      	}
         public function Deleteuser($table,$id)
         {
            $sql = "DELETE FROM $table WHERE id = '$id'";
            return $this->execute($sql);
         }
         public function Search($table,$key,$bophan)
         {
            $sql = "SELECT * FROM $table WHERE tenmay REGEXP '$key' and bophan = '$bophan' ORDER BY id DESC";
            $this->execute($sql);
            if($this->num_row()==0)
            {
               $data= 0;
            }
            else{
               while($datas = $this->getData()){
                  $data[] = $datas; 
               }
            }
            return $data;
         }
          public function count_row($table)
         {
            $sql = "SELECT * FROM $table";
            $this->execute($sql);
            if($this->result)
            {
               $num = mysqli_num_rows($this->result);
            }
            else{
               $num =0;
            }
            return $num;
         }
          public function count_row_bophan($table,$bophan)
         {
            $sql = "SELECT * FROM $table WHERE bophan = '$bophan'";
            $this->execute($sql);
            if($this->result)
            {
               $num = mysqli_num_rows($this->result);
            }
            else{
               $num =0;
            }
            return $num;
         }
         public function count_row_alldata($table)
         {
            $sql = "SELECT * FROM $table";
            $this->execute($sql);
            if($this->result)
            {
               $num = mysqli_num_rows($this->result);
            }
            else{
               $num =0;
            }
            return $num;
         }
         

         public function login($table,$username,$password)
         {
            $sql ="SELECT * FROM $table WHERE username = '$username' and password = '$password'";
            $this->execute($sql);
            if($this->num_row()!=0)
            {
               $datalogin = mysqli_fetch_array($this->result);
            }
            else{
               $datalogin = 0;
            }
            return $datalogin;
         }
         public function usernamemanager($table,$perRow,$rowsPerPage)
         {
            $sql ="SELECT * FROM $table LIMIT $perRow,$rowsPerPage";
            $this->execute($sql);
            if($this->num_row()==0)
            {
               $data= 0;
            }
            else{
               while($datas = $this->getData()){
                  $data[] = $datas; 
               }
            }
            return $data;
         }
      }

?>