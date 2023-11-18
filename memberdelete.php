


<?php
//php code to delete the member record with database connection php file.
include "hyper.php";
$mid=$_GET['mid'];
$del=mysqli_query($conn,"DELETE FROM member WHERE memberid='$mid'");
$result=mysqli_query($conn,$del);
     if(!$result){
         echo '<script type = "text/javascript"> alert ("member deleted successfully...") </script>';
         
     }
     else{
         echo'<script type = "text/javascript"> alert ("Error..Please try again..") </script>';  
     }

?>

<script type="text/javascript">
window.location="main-L.php";
</script>
