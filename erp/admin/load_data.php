<?php 

include "db.php";

$departid = 0;

if(isset($_POST['depart'])){
   $departid = mysqli_real_escape_string($conn,$_POST['depart']); // department id
}

$users_arr = array();

if($departid > 0){
   $sql = "SELECT sid,scname,scode FROM subcategory WHERE ccname=".$departid;

   $result = mysqli_query($conn,$sql);

   while( $row = mysqli_fetch_array($result) ){
      $userid = $row['sid'];
      $name = $row['scname'];
      $scode = $row['scode'];
      $users_arr[] = array("id" => $userid, "name" => $name, "scode" => $scode);
   }
}
// encoding array to json format
echo json_encode($users_arr);