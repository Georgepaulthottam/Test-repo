
<?php
session_start();

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Buyer-dash</title>
</head>
<body>
     <header>
        <img src="logo.png" alt="">
        <nav class="stroke" id="=navbar">
                    <ul style="flex:left">
                        <li class="nav-item active">
                            <a class="nav-link" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact Us</a>
                        </li>
                    </ul>
                   <div class="action">
                    <div class="profile" onclick="menuToggle();">
                        <img src="user.png">
                    </div>
                    <div class="menu">
                        <h3>user</h3>
                        <ul>
                            <li><img src="" alt=""><a href="#">My Profile</a></li>
                            <li><img src="" alt=""><a href="#">Edit Profile</a></li>
                            <li><img src="" alt=""><a href="#">Help</a></li>
                            <li><img src="" alt=""><a href="#">Logout</a></li>
                        </ul>    
                    




                    </div> 
                   </div>      
        </nav>
        </header>
        <aside>
          <div class="dashboard">
            <div class="dashhead">
              <h3>Dashboard</h3>

            </div>
            <a href="jkfdl"><span>List Your Items</span></a>
            <a href="jkfdl"><span>View Listed Items</span></a>
            <a href="jkfdl"><span>fdjk</span></a>
            <a href="jkfdl"><span>fdjk</span></a>

          </div>
        </aside>



         <script type="text/javascript">
                        function menuToggle(){
                            const toggleMenu=document.querySelector('.menu');
                            toggleMenu.classList.toggle('active');
                        }
                    </script> 
</body>
</html>