<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
    .contact-box{
    max-width: 800px;
    float: none;
    margin:80px auto;
    }
    .button{
        text-align:center;
        padding-top:5px;
    }
    .homebutton{
        text-align:center;
    }
    .title{
        background-image: linear-gradient(rgb(2, 236, 253),rgb(16, 50, 243));
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
    form{
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
    body{
        
    }

    </style>
</head>
<body style="background-image:linear-gradient(rgb(0,224,224));">
<div class="container">
      <div class="contact-box">
          <div class="row">
             <div class="col-md-12 contact">
             <div class="title">
             <h2>Contact Us..</h2>
             <p>Fill this form if you have problem to login into the system.We will Contact you..</p>
             </div>    
             
                   <form action="" method="GET" >
                        <div class="form-group">
                            <label for="fullname">Full Name:</label>
                            <input type="text" class="form-control" id="fullname" placeholder="Enter Full Name.." name="fullname">
                       </div>
                       <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter Email.." name="email">
                       </div>
                       <div class="form-group">
                            <label for="mobilenumber">Message:</label>
                            <input type="text" class="form-control" id="mobilenumber" placeholder="mobile.." name="mobilenumber">
                       <div class="button">
                       <button name="submit" type="submit" class="btn btn-primary ">Submit</button>
                       <a><button name="cancel" type="submit" class="btn btn-primary ">Cancel</button></a>
                       </div>
                       <br>
                   </form>   
                <?php
                //to retrive the codes from hyper.php file.   
                include "hyper.php";
                
                //the code to submit contact details to contact table in database.
                 if(isset($_GET["submit"]))
                {
                     mysqli_query($conn,"INSERT INTO contact(fullname,email,mobilenumber) VALUES('$_GET[fullname]','$_GET[email]','$_GET[mobilenumber]')");
                     header('location:login.php');
     
                }
               //the code to return to login Page.
                if(isset($_GET["cancel"]))
                {
                       header('location:login.php');
                }
                ?>
                  
                   
             </div>
          </div>
      <div>            
</div>      
</body>
</html>