<?php

//php code to delete the borrow record with database connection php file.
include "hyper.php";
$no=$_GET['no'];
$del=mysqli_query($conn,"DELETE FROM borrow WHERE no='$no'");
$result=mysqli_query($conn,$del);
     if(!$result){
         echo '<script type = "text/javascript"> alert ("Borrow Details deleted successfully...") </script>';
         
     }
     else{
         echo'<script type = "text/javascript"> alert ("Error..Please try again..") </script>';  
     }
?>

<script type="text/javascript">
window.location="main-L.php";
</script>