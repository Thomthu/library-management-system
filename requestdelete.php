<?php

//php code to get the book id from requested book table.because if we are going to delete a specific member;member must requested for many books.so all requested details are deleted.
include "hyper.php";
$mid=$_GET['memberid'];
$bid="";

$result=mysqli_query($conn,"SELECT * FROM request WHERE memberid='$mid'");
while($row=mysqli_fetch_array($result))
{
    $bid=$row['bookid'];
    

}
//php code to delete the requested book records with database connection php file.
$del=mysqli_query($conn,"DELETE FROM request WHERE memberid='$mid' and bookid='$bid'");
$result=mysqli_query($conn,$del);
     if(!$result){
         echo '<script type = "text/javascript"> alert ("requested book Details deleted successfully...") </script>';
         
     }
     else{
         echo'<script type = "text/javascript"> alert ("Error..Please try again..") </script>';  
     }
?>

<script type="text/javascript">
window.location="main-L.php";
</script>