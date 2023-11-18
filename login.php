<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="style/loginstyle.css"> 
</head>
<body style="background-image: url(image/login.jpg);
    background-size:cover;   
    background-position:center;">
    
    <a id="link" href="contact.php"><img align="right" src="image/contact-icon.png">
    <h3>Contact</h3>
    </a>
    <br>
    <h1>Library Managment Sysytem</h1>
    
    
    <br>
  <div class="container">
      <div class="login-box">
          <div class="row">
             <div class="col-12 col-md-6 sm-6 login-left">
                   <h2>Member Login</h2>
                   <form action="membervalidation.php" method="GET" >
                        <div class="form-group">
                            <label for="mid">MemberID:</label>
                            <input type="text" class="form-control" id="mid" placeholder="Enter ID.." name="mid" required>
                       </div>
                       <div class="form-group">
                            <label for="mpassword">MemberPassword:</label>
                            <input type="password" class="form-control" id="mpassword" placeholder="Enter Password.." name="mpassword" required>
                       </div>
                       <div class="button">
                       <button name="mlogin" type="submit" class="btn btn-primary ">Login</button>
                       </div>
                       
                   </form> 
             </div>
             <br>
             <div class="col-md-6 login-left">
                   <h2>Librarian Login</h2>
                   <form action="librarianvalidation.php" method="GET" >
                        <div class="form-group">
                            <label for="lid">LibrarianID:</label>
                            <input type="text" class="form-control" id="lid" placeholder="Enter ID.." name="lid" required>
                       </div>
                       <div class="form-group">
                            <label for="lpassword">LibrarianPassword:</label>
                            <input type="password" class="form-control" id="lpassword" placeholder="Enter Password.." name="lpassword" required>
                       </div>
                       <div class="button">
                       <button name="llogin" type="submit" class="btn btn-primary">Login</button>
                       </div>
                       
                   </form> 
             </div>
          </div>
     </div>    
  </div>
                            
</body>
</html> 