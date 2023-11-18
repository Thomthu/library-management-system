<?php
$con=mysqli_connect("localhost","root","","library management system");

      $lid=$_GET['lid'];
      $lpassword=$_GET['lpassword'];
      //MYSQL QUEARY TO SELECT LIBRARIANID AND PASSWORD USER INPUTED. 
      $sql="SELECT librarianid,lpassword FROM librarian WHERE librarianid='$lid' && lpassword='$lpassword'";
      $result=mysqli_query($con,$sql);
      $num=mysqli_num_rows($result);
      if($num==1){
          header('location:main-L.php');
      }
      else{
          header('location:login.php');
      }




?>