<?php
session_start();
if(isset($_SESSION['username']))
{
	if(isset($_POST['username'])&&isset($_POST['groupid'])){
     // if(true){
        $username=$_SESSION['username'];$groupid=test($_POST['groupid']);
        // $username="heheda";$groupid="5";
        $con =new mysqli("localhost","root","","yue");
        if ($con->connect_error){
           echo "1";
        }
        else {
        	 $con->query('set names utf8');
             $sql = "INSERT INTO playgroup(_groupid,_username) VALUES('$groupid','$username')"; 
             if ($con->query($sql) === TRUE) {
                   echo "0";
             }
             else
             	echo "2";
       	}
     }
   }
  else
      echo "你没有权限，请先登录：index.html";
    function test($data){
       $data = trim($data);
       $data = addslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }
?>