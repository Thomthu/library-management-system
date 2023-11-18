<?php
include "hyper.php";

//SQL Query with PHP to fetch the data from member table to Form input boxes.
$no=$_GET['no'];
$mid="";
$bid="";
$borrowdate="";
$returndate="";
$state="";
 
$result=mysqli_query($conn,"SELECT * FROM borrow WHERE no='$no'");
while($row=mysqli_fetch_array($result))
{   
    $mid=$row['memberid'];
    $bid=$row['bookid'];
    $borrowdate=$row['borrowdate'];
    $returndate=$row['returndate'];
    $state=$row['state'];
    
}


      
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Managment System</title>
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 

</head>
<body>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
    <!--navigation bar-->
    <div class="container-fluid col-10">
        
        <nav class="navbar navbar-expand-lg" id="navbar">
            <a href="" class="navbar-brand"><img src="image/logo.png" alt="logo" style="width:30px;"></a>
            <b class="bold">Library Management System<br>Thomars Tech</b>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                </svg>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ml-auto mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="main-L.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Logout</a>
                    </li>
                    
                    
                    
                </ul>
            </div>
        </nav>
   </div>
   <br>


   <!--Member update-->
 <div class="container">
      <div class="col-lg-12 col-md-6 sm-6">  
           <h2><u>Borrow Form</u></h2>
           <hr> 
     
     <form action="" name="form3" method="GET" >
          <div class="form-group">
            <label for="no">No:</label>
            <input type="int" class="form-control" id="no" placeholder="" name="no" value="<?php echo $no; ?>" requied>
          </div>
          <div class="form-group">
            <label for="mid">MemberID:</label>
            <input type="text" class="form-control" id="mid" placeholder="" name="mid" value="<?php echo $mid; ?>" requied>
          </div>
          <div class="form-group">
             <label for="bid">BookID:</label>
             <input type="text" class="form-control" id="bid" placeholder="" name="bid" value="<?php echo $bid; ?>" required>
          </div>
          <div class="form-group">
             <label for="borrowdate">BorrowDate:</label>
             <input type="text" class="form-control" id="borrowdate" placeholder="" name="borrowdate" value="<?php echo $borrowdate; ?>" required>
          </div>
          <div class="form-group">
             <label for="returndate">ReturnDate:</label>
             <input type="text" class="form-control" id="returndate" placeholder="" name="returndate" value="<?php echo $returndate; ?>" required>
          </div>
          <div class="form-group">
             <label for="state">State:</label>
             <input type="text" class="form-control" id="state" placeholder="" name="state" value="<?php echo $state; ?>" required>
          </div>
          <div class="update">
             <button name="mupdate" type="submit" class="btn btn-outline-success">Update Member</button>
             <a type="button" class="btn btn-outline-primary" href="main-L.php">Cancel</a>
          </div>
          
          
       </form>
       </div>
  
        <?php
           // the SQL Query with PHP to update the member.
        if(isset($_GET['mupdate']))
        {
    
                $sql=mysqli_query($conn,"UPDATE borrow SET no='$_GET[no]',memberid='$_GET[mid]',bookid='$_GET[bid]',borrowdate='$_GET[borrowdate]',returndate='$_GET[returndate]',state='$_GET[state]' WHERE no='$_GET[no]' AND memberid='$_GET[mid]'") or die(mysqli_error($conn));
                $result=mysqli_query($conn,$sql);
                if(!$result){
                      echo '<script type = "text/javascript"> alert ("Borrow Details updated successfully...") </script>';
        
                }
                else{
                   echo'<script type = "text/javascript"> alert ("Error..Please try again..") </script>';  
                }
        }    

        ?>
 </div>
</body>
</html>  