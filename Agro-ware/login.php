<?php
session_start();
require 'connection.php';
if(isset($_POST["submit"])){  
    $user=$_POST['uname'];  
  echo"<script>alert($user)</script>";
if(isset($_POST['uname']) && isset($_POST['pass'])) {  
    $user=$_POST['uname'];  
    $pass=$_POST['pass'];
    $query=("SELECT * FROM users WHERE username='".$user."' AND pass='".$pass."'");  
    $conquer=mysqli_query($conn, $query);
    $numrows=mysqli_num_rows($conquer);  
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($conquer))  
    {  
    $dbusername=$row['username'];  
    $dbpassword= md5( $row['pass']);  
    $dbusertype=$row['usertype'];
    }  
    $_SESSION['sess_user']=$user;
    $_SESSION['usertype']=$dbusertype;


    if($user == $dbusername && $pass==$dbpassword)
    {  if($dbusertype=="Buyer"){    
    header("location:Buyer-dash.php");
    }
    elseif($dbusertype=="Seller"){
        header("location:Seller-dash.php ");
    }

   }
     
    } else {  
    echo "<script>alert('invalid username or password!')</script>";  
    }  
  
} else {  
    echo "All fields are required!";  
}  
}

?>
<html>
    <head>
        <link rel="stylesheet" href="style.css">     
        <head>
    <body>
                <header>
        <img src="logo.png" alt="">
        <nav class="stroke" id="=navbar">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a  href="#contact">Contact Us</a>
                        </li>
                         <li class="nav-item">
                            <a style="color:green;right:50px;position:absolute;bottom:25px" href="register.php">Register</a>
                        </li>
                    </ul>
        </nav>
        </header>
        <div class="container">
        <div class="card">
        <div class="card-image"></div>
        <form  class="card-form" method="post" action=""enctype="multipart/form-data">
            <fieldset>
            <legend class="input-title">LOGIN</legend>
            <div class="input">
            <input class="input-field" type="text" class="input-field" name="uname" id=" " placeholder="Enter username">
            <br>
            <input class="input-field" type="password" name="pass" placeholder="Enter password" required>

            <br>
            <input type="submit" name="submit" class="action-button" value="login">
            </div>
            
            </fieldset>
            </form>
            </div>
          

</div>
</body>
</html> 
