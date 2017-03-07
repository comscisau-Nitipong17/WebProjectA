<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sign In Process</title>
</head>
<body>
<?php
      $uname = $_POST['uname'];
      $upassword = $_POST['upassword'];

      //ทำงานกับาน้อมูล
      $host = "localhost";
      $userdb = "root";
      $passworddb = "";
      $dbname = "comscia_db"; 
      $conn = mysqli_connect($host,$userdb,$passworddb,$dbname);

      //สร้างคำสั่ง sql เพื่อทำงานกั DB
      $strsql = "select * from user_tb where uname='".$uname."' and upassword='".$upassword."'";
      //echo $strsql

      //ส่งใหทำงาน
      $result = mysqli_query($conn, $strsql);

      if($result = mysqli_fetch_array($result)){
        echo "OK";
      }else{
      	echo "User name และ Password ไม่ถูกต้อง";
      }

?>
	
</body>
</html>