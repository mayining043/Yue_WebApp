<?php
session_start();
if(isset($_SESSION['username']))
{
        if(isset($_POST['kind'])){
         //if(true){
             $kind=test($_POST['kind']);
            //$kind="约饭";
            $con =new mysqli("localhost","root","","yue");
            if ($con->connect_error){
               echo "1";
            }
             else {
                # 获取item数据库
                $con->query('set names `utf8`');
                $query='SELECT * FROM request WHERE _kind ='."'".$kind."'"; 
                $result1 = $con->query($query);
                if($result1){
                     # 生成json
                    $i=0;
                    $request=array();
                    while($row= $result1->fetch_assoc()){
                        $request["$i"]=array('id'=>"$i",
                                       'groupid'=>$row['_id'],
                                       'kind'=>$row['_kind'],
                                       'username' => $row['_username'],
                                       'rantname' => $row['_rantname'],
                                       'time' => $row['_time'],
                                       'amount' => $row['_amount'],
                                       'isshow' => $row['_isshow'],
                                       'intro' => $row['_intro']);
                         $query2='SELECT * FROM playgroup WHERE _groupid ='."'".$row['_id']."'"; 
                         $result2 = $con->query($query2);
                         $sum=0;
                         while($row= $result2->fetch_assoc()){
                              $sum++;
                          }
                         $request["$i"]['sum']=$sum;
                        $i++;
                    }
                    if(count($request)<1)
                        echo "3";
                    else
                        echo json_encode($request );
                    //释放结果
                    $con->close();
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
