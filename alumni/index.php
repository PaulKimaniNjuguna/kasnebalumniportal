<?php

session_start();

// Redirect user to welcome page
if($_SESSION["userType"] != "alumni")
{
    header("location: ../logout.php");
}

?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>kasneb alumni </title>
    <link rel="stylesheet" href="style.css">
    
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      
      <span class="logo_name">Kasneb Alumni</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="#" class="active">
            
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="evaluation.php">
            
            <span class="links_name">Evaluation form</span>
          </a>
        </li>
        <li>
          <a href="displayjobs.php">
            
            <span class="links_name">View jobs available</span>
          </a>
        </li>
        
        <li>
          <a href="displayarticles.php">
            
            <span class="links_name">View news update</span>
          </a>
        </li>
        
        <li>
          <a href="postcomment.php">
            <span class="links_name">Post comment</span>
          </a>
        </li>

        <li>
          <a href="#">
            
            <span class="links_name">View comments reply</span>
          </a>
        </li>
        
        <li>
          <a href="#">
            
            <span class="links_name">Change user details</span>
          </a>
        </li>
        
        <li class="log_out">
          <a href="#">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      
      <div class="profile-details">
        <img src="images/profile1.jpg" alt="">
        <span class="admin_name">Alumni</span>
       
      </div>
    </nav>

    <div class="home-content">

      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Jobs update</div>
           
            
          </div>
          
        </div>
        
        <div class="box">
          <div class="right-side">
            <div class="box-topic">News update</div>
           
            
          </div>
          
        </div>
       
      </div>

      <div class="alumni-boxes">
        <div class="reg-alumni box">
          <div class="title">Registration status</div>
          <div class="alumni-details">
            
          </div>
          
        </div>
        <div class="comments box">
          <div class="title">Comments</div>
          
        </div>
      </div>
    </div>
  </section>

  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>
