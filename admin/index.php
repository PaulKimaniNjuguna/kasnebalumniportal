<?php

session_start();

// Redirect user to welcome page
if($_SESSION["userType"] != "admin")
{
    header("location: ../logout.php");
}

?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Admin </title>
    <link rel="stylesheet" href="styles.css">
    
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
          <a href="displayevaluation.php">
            
            <span class="links_name">KASNEB Courses evaluation</span>
          </a>
        </li>
        <li>
          <a href="postjob.php">
            
            <span class="links_name">Add job</span>
          </a>
        </li>
        <li>
          <a href="displayjobs.php">
            
            <span class="links_name">View jobs</span>
          </a>
        </li>
         <li>
          <a href="addarticles.php">
            
            <span class="links_name">Add articles</span>
          </a>
        </li>
        <li>
          <a href="displayarticles.php">
            
            <span class="links_name">View articles</span>
          </a>
        </li>
       
        <li>
          <a href="displaycomments.php">
            
            <span class="links_name">View and reply comments</span>
          </a>
        </li>
        
      
        
        <li class="log_out">
          <a href="../logout.php">
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
        <span class="admin_name">Admin</span>
       
      </div>
    </nav>

    <div class="home-content">

      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Jobs update</div>
            <a href="displayjobs.php">View jobs</a>
            
          </div>
          
        </div>
        
        <div class="box">
          <div class="right-side">
            <div class="box-topic">News update</div>
            <a href="displayarticles.php">View news update</a>
            
          </div>
          
        </div>
       
      </div>

      <div class="alumni-boxes">
        <div class="reg-alumni box">
          <div class="title">Evaluation</div>
          <div class="alumni-details">
          <a href="displayevaluation.php">View courses evaluation</a>  
          </div>
          
        </div>
        <div class="comments box">
          <div class="title">Comments</div>
          <a href="displaycomments.php">View comments here</a>
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
