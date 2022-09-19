<?php
session_start();
if ($_POST['pass1'] !== $_POST['pass2']) {
    
  echo ("<script LANGUAGE='JavaScript'>
    window.alert('enter same password');
    window.location.href='register.php';
    </script>"); 
}
else{
session_start();
require 'connection.php';
if (isset($_POST['submit'])){
$fname=$_POST['name'];
$lname=$_POST['lname'];
$username=$_POST['uname'];
$email=$_POST['email'];
$pass1=$_POST['pass1'];
$pass=md5($pass1);
$usertype=$_POST['usertype'];
$quer1=("SELECT * FROM users WHERE username='".$username."'"); 
$conquer=mysqli_query($conn, $quer1); 
    $numrows=mysqli_num_rows($conquer);  
    if($numrows==0)  
    {  
$query = "INSERT INTO users( Firstname, Lastname, username, email, pass, usertype) 
VALUES ('$fname','$lname','$username','$email','$pass','$usertype');";
$quer=mysqli_query($conn, $query);  
echo ("<script LANGUAGE='JavaScript'>;
    window.location.href='login.php';
    </script>"); 
    
}
else{
  echo"<script> alert('username already exists')";
}
}

}
