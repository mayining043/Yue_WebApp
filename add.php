<?php
session_start();
if(isset($_SESSION['username']))
{
    if(isset($_POST['kind'])&&isset($_POST['username'])&&isset($_POST['rantname'])
        &&isset($_POST['time'])&&isset($_POST['amount'])&&
        isset($_POST['isshow'])&&isset($_POST['intro'])) {
        $kind = test($_POST['kind']);
        $username = $_SESSION['username'];
        $rantname = test($_POST['rantname']);
        $time = test($_POST['time']);
        $amount = test($_POST['amount']);
        $isshow = test($_POST['isshow']);
        $intro = test($_POST['intro']);
              
        $con =new mysqli("localhost","root","","yue");
        if ($con->connect_error){
            echo "1";
         }
        else {
            $p1=false;
            $con->query('set names utf8');
            $sql1 = "INSERT INTO request(_kind,_username,_rantname,_time,_amount,_isshow,_intro)
                    VALUES('$kind','$username','$rantname','$time',$amount,'$isshow','$intro')";           
            if ($con->query($sql1) === TRUE) {
                 $sql2='SELECT * FROM request WHERE _username ='."'".$username."' and _time ="."'".$time."'";
                 $result = $con->query($sql2);
                 if($row= $result->fetch_assoc()){
                    $pos= $row['_id'];
                    $p1=true;
                 }
                 else $p1=false;
            }
            else{
               $p1=false;
            }
            if($p1){
                 $con->query('set names utf8');
                 $sql3 = "INSERT INTO playgroup(_groupid,_username) VALUES('$pos','$username')"; 
                 if ($con->query($sql3) === TRUE) {
                    $p2=true;
                 }
                 else $p2=false;
            }
            if($p1&&$p2)
                echo "0";
            else
                echo "2";
        }
    }
    else
        echo "3";
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