<?php
include "hyper.php";
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
<body bgcolor="lightgrey" onload = "JavaScript:AutoRefresh(5000);">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
    <!--navigation bar-->
 <div class="container-fluid col-10 ">
 
        <nav class="navbar navbar-expand-lg" id="navbar">
            
            <b class="bold">Library Management System<br><span class="state">Auwa State University</span></b>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                </svg>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ml-auto mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#member">Member</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#book">Book</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#borrow">Borrow</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#request">Request</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#calculate">Calculate_Fine</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Logout</a>
                    </li>
                    
                    
                    
                </ul>
            </div>
        </nav>
   
   <br>


   <!--Member section-->
   <section id="member">
   <div class="row">
     <div class="col-lg-12 col-md-6 col-12 py-lg-0 py-3 " style="border-style: groove;">  
       
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" name="form1" method="GET">
          <div class="mb-3 text-center">
             <span class="d-inline-flex p-2 bd-dark"><h2>Member Form</h2></span>
             <hr>
          </div>
          
          <div class="form-group">
              <label for="mid">MemberID:</label>
              <input type="text" class="form-control" id="mid" placeholder="M00X.." name="mid" required>
          </div>
          <div class="form-group">
             <label for="mname">MemberName:</label>
             <input type="text" class="form-control" id="mname" placeholder="" name="mname" >
          </div>
          <div class="form-group">
             <label for="type">Type:</label>
             <select type="text" class="form-control" id="type" placeholder="" name="type" > 
                  <option value = "">Select type</option> 
                  <option value = "student">Student</option>  
                  <option value = "professor">Professor</option>  
                  
             </select>
          </div>
          <div class="form-group">
             <label for="mpassword">MemberPassword:</label>
             <input type="text" class="form-control" id="mpassword" placeholder="" name="mpassword" >
          <div class="form-group">
             <label for="mobilenumber">MobileNumber:</label>
             <input type="text" class="form-control" id="mobilenumber" placeholder="" name="mobilenumber" >
          </div>
          <div class="form-group">
             <label for="email">Email:</label>
             <input type="text" class="form-control" id="email" placeholder="" name="email" required>
          </div>

          <div class="mb-3 text-center">
             <button name="minsert" type="submit" class="btn btn-primary">Insert Member</button>
             <button name="mdelete" type="submit" class="btn btn-danger">Delete Member</button> 
         </div>  
      </form>
     </div>
  </div>
  </section>
  
  
  <br>
  <div class=" h3 d-inline p-2 bg-primary text-white">Member Details</div><br><br>
  <div class="note"><b>NOTE:-</b>Please refresh the page after Added or Deleted Member details! </div>
  <div class="col-lg-12 col-md-6 col-12 sm-6">
     <table class="table table-bordered" >
              <!--In the below bootstrap table,all the inserted datas will be displayed  -->
        <thead bgcolor="navyblue">
            <th>MemberID</th>
            <th>MemberName</th>
            <th>Type</th>
            <th>MemberPassword</th>
            <th>MobileNumber</th>
            <th>Email</th>
            <th>Edit</th>
            <th>Delete</th>
        </thead>
        <tbody>
            <?php
            
            $result=mysqli_query($conn,"SELECT * FROM member");
            while($row=mysqli_fetch_array($result))
            {
                echo"<tr>";
                echo"<td>"; echo$row["memberid"]; echo"</td>";
                echo"<td>"; echo$row["membername"]; echo"</td>";
                echo"<td>"; echo$row["type"]; echo"</td>";
                echo"<td>"; echo$row["mpassword"]; echo"</td>";
                echo"<td>"; echo$row["mobilenumber"]; echo"</td>";
                echo"<td>"; echo$row["email"]; echo"</td>";
                echo"<td>"; ?> <a href="memberupdate.php?mid=<?php echo $row["memberid"]; ?>"> <button type="button" class="btn btn-outline-success">Edit</button> </a> <?php echo"</td>";
                echo"<td>"; ?> <a href="memberdelete.php?mid=<?php echo $row["memberid"]; ?>"> <button type="button" name="edit" class="btn btn-outline-danger">Delete</button> </a> <?php echo"</td>";
                echo"</tr>";
            }   
            ?>           
        </tbody>

     </table>  
  </div>
  




  <!--The PHP code to insert new Records,
  after click the insert button and refresh the new record will be in the table-->
 <?php
 if(isset($_GET["minsert"]))
 {
    mysqli_query($conn,"INSERT INTO member(memberid,membername,type,mpassword,mobilenumber,email) VALUES('$_GET[mid]','$_GET[mname]','$_GET[type]','$_GET[mpassword]','$_GET[mobilenumber]','$_GET[email]')");
    echo"Member inserted Successfully<br>";
    echo "<b>NOTE:-</b>"."Refreash the page after added or deleted the member details!!";       

 }
 /*The PHP code to delete Records by inserting ID,
  after click the delete button and refresh therecord will be deleted*/

 if(isset($_GET["mdelete"]))
 {
    mysqli_query($conn,"DELETE FROM member WHERE memberid='$_GET[mid]'") or die(mysqli_error($conn));
    echo"Member deleted Successfully<br>";
    echo "<b>NOTE:-</b>"."Refreash the page after added or deleted the member details!!";
 }



 ?>

   <hr style="height:1px;border:none;color:#333;background-color:#333;"> 
   <!--Book section-->
   <section id="book">
   <div class="row">
     <div class="col-lg-12 col-md-6 col-12 py-lg-0 py-3" style="border-style: groove;">  
       
      <form action="" name="form2" method="GET">
          <div class="mb-3 text-center">
               <span class="d-inline-flex p-2 bd-dark"><h2>Book Form</h2></span>
               <hr>
          </div> 
          
          <div class="form-group">
            <label for="bid">BookID:</label>
            <input  type="text" class="form-control" id="bid" placeholder="B00X.." name="bid" required>
          </div>
          <div class="form-group">
             <label for="bname">BookName:</label>
             <input type="text" class="form-control" id="bname" placeholder="" name="bname" >
          </div>
          <div class="form-group">
             <label for="author">Author:</label>
             <input type="text" class="form-control" id="author" placeholder="" name="author" >
          </div>
          <div class="form-group">
             <label for="state">State:</label>
             <select type="text" class="form-control" id="state" placeholder="" name="state" > 
                  <option value = "">Select State</option> 
                  <option value = "taken">TAKEN</option>  
                  <option value = "not taken">NOT TAKEN</option>  
                  
             </select>
          </div>
          <div class="mb-3 text-center">
             <button name="binsert" type="submit" class="btn btn-primary">Insert Book</button>
             <button name="bdelete" type="submit" class="btn btn-danger">Delete Book</button>
          </div>
       </form>
      </div>
  </div>
  </section>
      
  <br>
  <div class=" h3 d-inline p-2 bg-primary text-white">Book Details</div><br><br>
  <div class="note"><b>NOTE:-</b>Please refresh the page after Added or Deleted Book details! </div>
  <div class="col-lg-12 col-md-6 col-12 sm-6">
            <table id="book" class="table table-bordered">
              
              <thead bgcolor="navyblue">
                  <th>BookID</th>
                  <th>BookName</th>
                  <th>Author</th>
                  <th>State</th>
                  <th>Edit</th>
                  <th>Delete</th>
              </thead>
              <tbody>
                  <?php
                  $result=mysqli_query($conn,"SELECT * FROM book");
                  while($row=mysqli_fetch_array($result))
                  {
                      echo"<tr>";
                      echo"<td>"; echo$row["bookid"]; echo"</td>";
                      echo"<td>"; echo$row["bookname"]; echo"</td>";
                      echo"<td>"; echo$row["author"]; echo"</td>";
                      echo"<td>"; echo$row["state"]; echo"</td>";
                      echo"<td>"; ?> <a href="bookupdate.php?bid=<?php echo $row["bookid"]; ?>"> <button type="button" class="btn btn-outline-success">Edit</button> </a> <?php echo"</td>";
                      echo"<td>"; ?> <a href="bookdelete.php?bid=<?php echo $row["bookid"]; ?>"> <button type="button" class="btn btn-outline-danger">Delete</button> </a> <?php echo"</td>";
                      
                      echo"</tr>";
                  }   
                  ?>           
              </tbody>
      
          </table>  
  </div>
  <!--The PHP code to insert new Records,
  after click the insert button and refresh the new record will be in the table-->
  <?php
    $conn=mysqli_connect("localhost","root","","library management system");

    if(isset($_GET["binsert"]))
    {
       mysqli_query($conn,"INSERT INTO book(bookid,bookname,author,state) VALUES ('$_GET[bid]','$_GET[bname]','$_GET[author]','$_GET[state]')"); 
       echo"Book inserted Successfully<br>";
       echo "<b>NOTE:-</b>"."Refreash the page after added or deleted the book details!!";
    }
/*The PHP code to delete Records by inserting ID,
  after click the delete button and refresh therecord will be deleted*/
    if(isset($_GET["bdelete"]))
    {
       mysqli_query($conn,"DELETE FROM book WHERE bookid='$_GET[bid]'") or die(mysqli_error($conn));
       echo"Book deleted Successfully<br>";
       echo "<b>NOTE:-</b>"."Refreash the page after added or deleted the book details!!";
    
    }
   ?>  

   <hr style="height:1px;border:none;color:#333;background-color:#333;">
   <!--Borrow section-->
   <section id="borrow">
   <div class="row">
     <div class="col-lg-12 col-md-6 col-12 py-lg-0 py-3" style="border-style: groove;">  
       
      <form action="" name="form3" method="GET" >
          <div class="mb-3 text-center">
               <span class="d-inline-flex p-2 bd-dark"><h2>Borrow Form</h2></span>
               <hr>
          </div>
          <div class="form-group">
            <label for="no">No:</label>
            <input type="number" class="form-control" id="no" placeholder="" name="no" requied>
          </div>
          <div class="form-group">
            <label for="mid">MemberID:</label>
            <input type="text" class="form-control" id="mid" placeholder="M00X.." name="mid" >
          </div>
          <div class="form-group">
             <label for="bid">BookID:</label>
             <input type="text" class="form-control" id="bid" placeholder="B00X.." name="bid"> 
          </div>
          <div class="form-group">
             <label for="borrowdate">BorrowDate:</label>
             <input type="date" min="1997-01-01" max="2030-12-31" class="form-control" id="borrowdate" placeholder="" name="borrowdate" >
          </div>
          <div class="form-group">
             <label for="returndate">ReturnDate:</label>
             <input type="date" class="form-control" id="returndate" placeholder="" name="returndate" >
          </div>
          <div class="form-group">
             <label for="state">State:</label>
             <select type="text" class="form-control" id="state" placeholder="" name="state" > 
                  <option value = "">Select State</option> 
                  <option value = "pending">Pending</option>  
                  <option value = "returned">Returned</option>  
                  <option value = "not returned yet">Not returned yet</option>
             </select>               
          </div>
          <div class="mb-3 text-center">
             <button name="insert" type="submit" class="btn btn-primary">Insert</button>
             <button name="delete" type="submit" class="btn btn-danger">Delete</button> 
          </div>
          
       </form>
      </div>
  </div>
</section>

 

  <br> 
  <div class=" h3 d-inline p-2 bg-primary text-white">Borrow Details</div><br><br>
  <div class="note"><b>NOTE:-</b>Please refresh the page after Added or Deleted Borrow details! </div>
  <div class="col-lg-12 col-md-6 col-12 sm-6">
        
        <table id="borrow" class="table table-bordered">
              
              <thead bgcolor="navyblue">
                  <th>No</th>
                  <th>MemberID</th>
                  <th>BookID</th>
                  <th>BorrowDate</th>
                  <th>ReturnDate</th>
                  <th>State</th>
                  <th>Edit</th>
                  <th>Delete</th>
              </thead>
              <tbody>
                  <?php
                  
                  $result=mysqli_query($conn,"SELECT * FROM borrow");
                  while($row=mysqli_fetch_array($result))
                  {
                      echo"<tr>";
                      echo"<td>"; echo$row["no"]; echo"</td>";
                      echo"<td>"; echo$row["memberid"]; echo"</td>";
                      echo"<td>"; echo$row["bookid"]; echo"</td>";
                      echo"<td>"; echo$row["borrowdate"]; echo"</td>";
                      echo"<td>"; echo$row["returndate"]; echo"</td>";
                      echo"<td>"; echo$row["state"]; echo"</td>";
                      echo"<td>"; ?> <a href="borrowupdate.php?no=<?php echo $row["no"]; ?>"> <button type="button" class="btn btn-outline-success">Edit</button> </a> <?php echo"</td>";
                      echo"<td>"; ?> <a href="borrowdelete.php?no=<?php echo $row["no"]; ?>"> <button type="button" class="btn btn-outline-danger">Delete</button> </a> <?php echo"</td>";
                      
                      echo"</tr>";
                  }   
                  ?>           
              </tbody>
      
        </table>
  </div>
  <!--REQUESTED BOOKS AND REQUESTED MEMBER id -->
  <hr>
  <section id="request">
 <div class=" h3 d-inline p-2 bg-primary text-white">Requested Book Details</div><br><br>
 <div class="col-lg-12 col-md-6 col-12 sm-6">
        
        <table id="borrow" class="table table-bordered">
              
              <thead bgcolor="navyblue">
                  <th>MemberID</th>
                  <th>BookID</th>
                  <th>Delete</th>
              </thead>
              <tbody>
                  <?php
                  
                  $result=mysqli_query($conn,"SELECT * FROM request");
                  while($row=mysqli_fetch_array($result))
                  {
                      echo"<tr>";
                      echo"<td>"; echo$row["memberid"]; echo"</td>";
                      echo"<td>"; echo$row["bookid"]; echo"</td>";
                      echo"<td>"; ?> <a href="requestdelete.php?memberid=<?php echo $row["memberid"]; ?>"> <button type="button" class="btn btn-outline-danger">Delete</button> </a> <?php echo"</td>";
                      
                      echo"</tr>";
                  }   
                  ?>           
              </tbody>
      
        </table>
  </div>
</section>


<!--The PHP code to insert new Records,
  after click the insert button and refresh the new record will be in the table-->
  <?php
    if(isset($_GET["insert"]))
    {
        mysqli_query($conn,"INSERT INTO borrow(no,memberid,bookid,borrowdate,returndate,state) VALUES('$_GET[no]','$_GET[mid]','$_GET[bid]','$_GET[borrowdate]','$_GET[returndate]','$_GET[state]')");
        echo"Borrow Details inserted Successfully<br>";
        echo "<b>NOTE:-</b>"."Refreash the page after added or deleted the borrow details!!";
    }
/*The PHP code to delete Records by inserting ID,
  after click the delete button and refresh therecord will be deleted*/
    if(isset($_GET["delete"]))
    {
       mysqli_query($conn,"DELETE FROM borrow WHERE no='$_GET[no]'") or die(mysqli_error($conn));
       echo"Borrow Details deleted Successfully<br>";
       echo "<b>NOTE:-</b>"."Refreash the page after added or deleted the borrow details!!";
    
    }



   ?>
  <hr style="height:1px;border:none;color:#333;background-color:#333;">

   <!--Calculate fine-->
   <section id="calculate">
       <div class="row justify-content-center align-items-center"> 
          <div class="col-lg-6 col-md-6 col-12 py-lg-0 py-3" >
                 
                 <form action="" method="$_GET" style="border-style: groove;box-shadow: 2px 2px 5px rgba(0, 0, 0,.2),-1px -1px 5px rgba(0, 0, 0,.05);border-radius: 30px;justify-content: center; margin-top: 20px;
    padding: 40px;">
                     <h2><u>Calculate Fine</u></h2>
                     <hr>
                     <div class="form-group mb-3">
                          <label for="days">No.Of.Days:</label>
                          <input type="text" class="form-control" id="days" placeholder="No.Of.Days Delaied.." name="days" required>
                     </div>
                     <div class="form-group mb-3">    
                          <label for="amount">Fine Amount Per Day:</label>
                          <input type="text" class="form-control" id="amount" placeholder="Fine Amount Per Day.." name="amount" required><br>
                     </div>
                     <div class="mb-3 text-center ">
                          <button  type="submit" value="calculate" name="calculate" class="btn btn-primary">Calculate</button>
                          <button  type="reset" name="amount" class="btn btn-danger">Clear</button><br>
                     </div>     
                     
                 

                 <br>
                 <h4>Total Fine:</h4>
                 <div id="answer" style="border-style: groove;">
                     <?php
                     //code to calculate the fine using PHP variables WITH INPUTING VALUES. 
                     if(isset($_GET["calculate"]))
                     {
                        $days=$_GET['days'];
                        $amount=$_GET['amount'];

                        $answer=$days * $amount;
                        echo "<b>"."Rs.".$answer."/="."</b>";
                        
                     }
                     
                     ?>
                  </div>
                 </form>     
          </div> 
     </div>    
      

   </section>
 </div>
 </div> 
      <div class="container">
              <div class="row">
                   <div class="col-lg-12 col-md-6 col-12 sm-6">
                       <p id="copyright" class="text-center">Copyright &copy;Thomars_Thuvarangan</p>
                   </div>  
                      
              </div>
      </div>
       

</body>
</html>