<?php  
session_start();
require 'connection.php';
if(isset($_POST["submit"])){  
  
if(!empty($_POST['uname']) && !empty($_POST['pass'])) {  
    $user=$_POST['uname'];  
    $pass=$_POST['pass'];
    $query=mysql_query("SELECT * FROM users WHERE username='".$user."' AND password='".$pass."'");  
    $numrows=mysql_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysql_fetch_assoc($query))  
    {  
    $dbusername=$row['username'];  
    $dbpassword=$row['password'];  
    $dbusertype=$row['usertype'];
    }  
  
    if($user == $dbusername && password_verify($pass,$dbpassword))
    {  if($dbusertype="Buyer"){
    session_start();  
    $_SESSION['sess_user']=$user;  
    header("location:Buyer-dash.php");
    }
    elseif($dbusertype="Seller"){
         $_SESSION['sess_user']=$user; 
        header("location:Seller-dash.php");
    }

}
     
    } else {  
    echo "Invalid username or password!";  
    }  
  
} else {  
    echo "All fields are required!";  
}  
}
?>