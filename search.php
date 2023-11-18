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
    <link rel="stylesheet" type="text/css" href="style/search.css">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 
</head>
<body>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
     <!--navigation bar-->
<div class="container-fluid col-10">
        
        <nav class="navbar navbar-expand-lg" id="navbar">
            
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
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Logout</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="text-decoration:underline;" >Welcome Member..</a>
                    </li>
                </ul>
            </div>
        </nav>
        <BR>
        <section id="contact">
          <div class="row justify-content-center align-items-center">  
             <div class="col-lg-4 col-md-6 col-12">
                   <form name="submit" action="" method="GET" style="box-shadow: 2px 2px 5px rgba(0, 0, 0,.2),-1px -1px 5px rgba(0, 0, 0,.05);border-radius: 30px;justify-content: center; margin-top: 20px;
    padding: 40px;">
                       <div class="mb-3 text-center ">
                            <h3 class=""><u>Request for Book</u></h3>
                       </div>
                       <div class="form-group mb-3">
                           <label for="mid">MemberID:</label>
                           <input type="text" name="mid" class="form-control" placeholder="Enter ID..">
                       </div>
                       <div class="form-group mb-3">
                           <label for="bid">BookID:</label>
                           <input type="TEXT" name="bid" class="form-control" placeholder="Enter ID.." required="">
                       </div>
                       <div class="mb-3">
                           <button name="request" id="request" class="btn btn-dark btn-outline-primary btn-block ">Submit</button>
                       </div> 
                   </form>
             </div>
          </div>        
        </section>
        <?php
        //INSERT QUEARY TO STORE MEMBER REQUESTED BOOKS USING MemberID and BookID
        $conn=mysqli_connect("localhost","root","","library management system");

        if(isset($_GET["request"]))
        {
             mysqli_query($conn,"INSERT INTO request(memberid,bookid) VALUES ('$_GET[mid]','$_GET[bid]')"); 
             echo '<script type = "text/javascript"> alert ("Request send successfully...") </script>';
              
        }
     
        ?>
        
        
        
        
        
        
        
        
            <hr style="height:1px;border:none;color:#333;background-color:#333;" > 
            <div class="mb-3 text-center ">
              <h3 class=""><u>Search for Book</u></h3>
             </div>      
   <div class="card-body">
      
      <div class="row justify-content-center align-items-center"> 
         <div class="col-md-7">

            <form action="" method="GET" >
               <div class="input-group mb-3 ">
                   <input name="search"  type="text" value="<?php if(isset($_GET['search'])){echo $_GET['search'];} ?>" class="form-control" placeholder="Search for Book...">
                   <button type="submit" class="btn btn-primary">Search</button>
              </div>
            </form>  
         </div>
    </div>  
    </div>

   
   <div class="col-md-12">
          
          <div class="note"><b>NOTE:-</b>To view all the books,type "a" and search.<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please type in Capital Letters.</div>
          <div class="card mt-4">
              <div class="card-body">
                  
                  <table class="table table-bordered">
                      <thead bgcolor="navyblue">
                          <tr>
                              <th>BookID</th>
                              <th>Bookname</th>
                              <th>Author</th>
                              <th>Status</th>
                              
                          </tr>
                      </thead>
                      <tbody>
                          <?php
                            //the php code to get datas(select MYSQL query) from book table.

                             $con=mysqli_connect("localhost","root","","library management system");
                             if(isset($_GET['search']))
                             {
                                 $filtervalues=$_GET['search'];
                                 $query="SELECT * FROM book WHERE CONCAT(bookid,bookname,author,state) LIKE '%$filtervalues%' ";
                                 $query_run=mysqli_query($con,$query);
                            /*if the book table in database have same data searched in search box;the datas are assigned 
                            to the PHP variables Below.*/
                                 if(mysqli_num_rows($query_run)>0)
                                 {
                                    foreach($query_run as $items)
                                    {
                                        ?>
                                        <tr>
                                             <td ><?= $items['bookid']; ?></td>
                                             <td ><?= $items['bookname']; ?></td>
                                             <td ><?= $items['author']; ?></td>
                                             <td ><?= $items['state']; ?></td>
                                             
                                             
                                        </tr>
                                        <?php
                                    }            
                                 }
                                 else
                                 {
                                     ?>
                                         <tr>
                                             <td colspan="4">no books found</td>
                                         </tr>
                                     <?php 
                                 }  
                             }
                             else
                             {
                                 
                             }                             
                          ?>
                      </tbody>
                  </table>
              </div>
          </div> 
   </div>
</div>

   
</body>
</html>