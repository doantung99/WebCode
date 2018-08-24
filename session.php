<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select Username from Users where Username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   //$login_session = $row['username'];
	if(isset($_FILES['upload'])&&$_FILES['upload']["name"]!=null){
	$file_name=$_FILES['upload']["name"];
			
	$file_tmp =$_FILES['upload']['tmp_name'];
	
	$path ="/upload/".$file_name;

	$path = $_SESSION['img'];
	

   }
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
?>