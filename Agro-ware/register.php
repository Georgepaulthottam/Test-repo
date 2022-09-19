<?php
session_start();
require 'connection.php';
//$pass1=$_POST['pass1'];
//$pass2=$_POST['pass2'];
/*if($pass1===$pass2){
   header("Location:regin.php");
   echo("pass");
}
else{
   echo("els");
   $al="Enter Same Password";
   //header("Location:register.php");
 
  echo "<script> alert('$al')</script>";
}*/
?>
<html>  
    
    <head>
        <link rel="stylesheet" href="style.css">    
        <script src="script.js"></script>
        <head>
    <body>
        <header>
        <img src="logo.png" alt="">
        <nav class="stroke" id="navbar">
                    <ul>
                        <li>
                            <a class="nav-link" href="#home">Home</a>
                        </li>
                        <li>
                            <a class="nav-link" href="#about">About</a>
                        </li>
                        <li>
                            <a class="nav-link" href="#contact">Contact Us</a>
                        <div class="topnav-right ">   
                        <li>
                            <a  href="login.php" style="color:green;right:50px;position:absolute;bottom:25px">Login</a>
                        </li>
                        </div> 
                    </ul>
        </nav>
        </header>
        <div class="container">
        <div class="card">
        <div class="card-image"></div>
        <form  class="card-form" action="regin.php" method="post">
            <fieldset>
            <legend class="input-title">REGISTER</legend>
            <div class="input">
            <input class="input-field" type="text" class="input-field" name="name" id=" " placeholder="Enter First name">
            <br>
            <input class="input-field" type="text" name="lname" placeholder="Enter  Last  name" required>
            <br>
            <input class="input-field" type="text" name="uname" placeholder="Enter  username" required>
            <br>
            <input class="input-field" type="email" name="email" placeholder="Enter email id" required >
            <br>
             <input class="input-field" type="password" id="pass1" name="pass1"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
             placeholder="Enter Password" required >
            <br>
             <input class="input-field" type="password" id="pass2" name="pass2" placeholder="Re-Enter Password" required >
            <br>
            <label for="usertype" style="background-color: white"> Enter Usertype</label>
            <select class="input-field" name="usertype" id=usertype">
               <option value="Buyer" style="background-color:red">Buyer</option>
               <option value="Seller" style="background-color:red">Seller</option>
            </select>
            <br>
            <input type="submit" name="submit"  class="action-button"  value="submit" >

            </div>
            <!--<?php echo($passwordErr)?>-->
            </fieldset>
            </form>
            </div>

</div>
</body>
</html> 