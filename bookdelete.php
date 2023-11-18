<?php

//php code to delete the book record with database connection php file.
include "hyper.php";
$bid=$_GET['bid'];
$del=mysqli_query($conn,"DELETE FROM book WHERE bookid='$bid'");
$result=mysqli_query($conn,$del);
     if(!$result){
         echo '<script type = "text/javascript"> alert ("book deleted successfully...") </script>';
         
     }
     else{
         echo'<script type = "text/javascript"> alert ("Error..Please try again..") </script>';  
     }
?>
<script type="text/javascript">
window.location="main-L.php";
</script>
