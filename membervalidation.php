<?php
$con=mysqli_connect("localhost","root","","library management system");

      $mid=$_GET['mid'];
      $mpassword=$_GET['mpassword'];
      //MYSQL QUEARY TO SELECT MEMBERID AND PASSWORD USER INPUTED. 
      $sql="SELECT memberid,mpassword FROM member WHERE memberid='$mid' && mpassword='$mpassword'";
      $result=mysqli_query($con,$sql);
      $num=mysqli_num_rows($result);
      if($num==1){
          header('location:search.php');
      }
      else{
          header('location:login.php');
      }




?>

