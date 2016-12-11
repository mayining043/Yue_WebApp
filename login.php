<?php
if(isset($_POST['username'])&&isset($_POST['password'])) {
        $password = test($_POST['password']);
    	$username = test($_POST['username']);

        $con =new mysqli("localhost","root","","yue");
        if ($con->connect_error){
            echo "1";
         }
 		else {
 			$ok=false;
 			$con->query('set names utf8');
            $sql='SELECT * FROM user WHERE username ='."'".$username."'";
                 $result = $con->query($sql);
                 if($row= $result->fetch_assoc()){
                 		if($row['password']===$password)
                 			$ok=true;
                 }
             if($ok===true){
     			session_start();
        		$_SESSION['username'] = $row['username'];
        		$_SESSION['sex'] = $row['sex'];
   				echo "0";
	             }
	         else
	            echo "2";
 		}
     }

 function test($data){
       $data = trim($data);
       $data = addslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }
?>