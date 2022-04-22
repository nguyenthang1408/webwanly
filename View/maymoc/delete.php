<?php
include "../Model/DBconfig.php";
$db = new Database();
$db -> connect();
session_start();

if(isset($_GET['id'])){
     $id = $_GET['id'];
     $table = "tiendomaymoc";
     if($db->Delete($id,$table))
     {
        header('location: ../Controller/index.php?action=test2');
        
     }
     else{
      $message = "Vui Lòng Thử Lại";
      echo "<script type='text/javascript'>alert('$message');</script>";
        header('location: ../Controller/index.php?action=test2');
        
     }
   }

?>