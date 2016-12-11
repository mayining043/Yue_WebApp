
<?php
	if(isset($_POST['username'])&&isset($_POST['password'])&&isset($_POST['sex'])
		&&isset($_POST['school'])&&isset($_POST['academy'])&&isset($_POST['phone'])) {
        $password = test($_POST['password']);
    	$username = test($_POST['username']);
        $sex = test($_POST['sex']);
        $school = test($_POST['school']);
        $academy = test($_POST['academy']);
        $phone= test($_POST['phone']);
        # 连接数据库   
        $con =new mysqli("localhost","root","","yue");
        if ($con->connect_error){
            echo "1";
         }
 		else {
 			$con->query('set names utf8');
            $sql = "INSERT INTO user(username,password,sex,school,academy,phone)
                    VALUES('$username','$password','$sex','$school','$academy','$phone')";           
            if ($con->query($sql) === TRUE) {
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