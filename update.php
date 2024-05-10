

<?php

session_start();
if (isset($_SESSION['user_photo_path'])) {
    $user_photo_path = $_SESSION['user_photo_path'];
    // Now you can use $user_photo_path wherever you need it
}
if (isset($_SESSION['user_full_name'])) {
   $user_full_name = $_SESSION['user_full_name'];
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" type="image/png" href="images/logo_head.png">
   <title>update</title>

   <style>
      .form-container {
         max-width: 500px;
         margin: 0 auto;
         padding: 20px;
      }

      /* Style the form title */
      .form-container h3 {
         text-align: center;
         font-size: 24px;
         margin-bottom: 20px;
      }

      /* Style the input fields */
      .box {
         width: 100%;
         padding: 10px;
         margin-bottom: 20px;
         border: 1px solid #ccc;
         border-radius: 4px;
         box-sizing: border-box;
      }

      /* Style the submit button */
      .btn {
         background-color: #fed013;
         color: white;
         border: none;
         padding: 10px 20px;
         border-radius: 4px;
         cursor: pointer;
         width: 100%;
      }

      /* Add hover effect to the submit button */
      .btn:hover {
         background-color: #f6bb00;
      }

      /* Style the footer */
      .footer {
         text-align: center;
         margin-top: 50px;
         padding: 20px 0;
         background-color: #f0f0f0;
      }

      /* Style the header */
      .header {
         background-color: #ffffff;
         padding: 20px;
         box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      }

      /* Style the logo */
      .logo {
         height: 50px;
      }

      /* Style the profile picture */
      .image {
         width: 100px;
         height: 100px;
         border-radius: 50%;
         object-fit: cover;
         margin-bottom: 10px;
      }

      /* Style the profile name */
      .name {
         font-size: 20px;
         margin-bottom: 5px;
      }

      /* Style the profile role */
      .role {
         color: #666666;
         margin-bottom: 20px;
      }

      /* Style the profile links */
      .btn {
         display: block;
         text-align: center;
         padding: 8px 16px;
         background-color: HEX #fed013;
         color: #fff;
         text-decoration: none;
         border-radius: 4px;
         margin-bottom: 10px;
      }

      .btn:hover {
         background-color: HEX #fed013;
      }

      /* Style the update link */
      .update-link {
         text-align: center;
         margin-top: 20px;
      }

      .update-link a {
         color: #007bff;
         text-decoration: none;
      }

      .update-link a:hover {
         text-decoration: underline;
      }
   </style>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
   <link rel="stylesheet" href="css/style.css">
</head>

<body>
<header class="header">

<section class="flex">

   <a href="home.php"><img src="images/logo_header.png" alt="Company Logo" class="logo"></a>
   <!-- <img src="images/logo_header.png" alt="Company Logo" class="logo"> -->
   <!-- <a href="home.html" class="logo">SMART GOALS®</a> -->







   <div class="icons">

      <!-- <div id="menu-btn" class="fas fa-bars"></div>
     <div id="search-btn" class="fas fa-search"></div> -->

      <div id="toggle-btn" class="fas fa-sun"></div>
      <a href="contact.php">
         <div id="menu-bt" class="fas fa-headset"></div>
      </a>
      <a href="teachers.php">
         <div id="menu-bt" class="fas fa-chalkboard-user"></div>
      </a>
      <a href="courses.php">
         <div id="menu-bt" class="fas fa-graduation-cap"></div>
      </a>
      <a href="about.php">
         <div id="menu-bt" class="fas fa-question"></div>
      </a>
      <div id="user-btn" class="fas fa-user"></div>

   </div>



   <!-- $_SESSION['user_photo_path'] = $photo_destination;
      $_SESSION['user_full_name'] = $fullName; -->


   
   <div class="profile">
   <img src="<?php echo $user_photo_path; ?>" class="image" alt="Profile Photo">
   <h3 class="name"><?php echo  $user_full_name; ?></h3>
   <!-- <p class="role">Student</p> -->
   <div class="flex-btn">
       <a href="login.php" class="option-btn">Login</a>
       <a href="registration.php" class="option-btn">Register</a>
   </div>
   <a href="profile.php" class="btn">View Profile</a>
</div>

</section>



<!-- <div class="side-bar">

<div id="close-btn">
<i class="fas fa-times"></i>
</div>

<div class="profile">
<img src="images/pic-1.jpg" class="image" alt="">
<h3 class="name">shaikh anas</h3>
<p class="role">studen</p>
<a href="profile.html" class="btn">view profile</a>
</div>

<nav class="navbar">
<a href="home.html"><i class="fas fa-home"></i><span>home</span></a>
<a href="about.html"><i class="fas fa-question"></i><span>about</span></a>
<a href="courses.html"><i class="fas fa-graduation-cap"></i><span>courses</span></a>
<a href="teachers.html"><i class="fas fa-chalkboard-user"></i><span>teachers</span></a>
<a href="contact.html"><i class="fas fa-headset"></i><span>contact us</span></a>
</nav>

</div> -->
</header>

   <section style="max-width: 600px;
margin: 20px auto;
padding: 50px;
box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;" class="container">
      <form action="update_process.php" method="post" enctype="multipart/form-data">
         <h3>Update Profile</h3>
        
         <input type="text" name="fullname" placeholder="Enter your name" maxlength="50" class="box">
        
         <input type="email" name="email" placeholder="Enter your email" maxlength="50" class="box">
         
         <input type="password" name="old_pass" placeholder="Enter your old password" maxlength="20" class="box">
        
         <input type="password" name="new_pass" placeholder="Enter your new password" maxlength="20" class="box">
        
         <input type="password" name="c_pass" placeholder="Confirm your new password" maxlength="20" class="box">
         
         <input type="file" accept="image/*" name="profile_photo" class="box">
         <!-- Added name attribute for file upload -->
         <input style="width: 120px; justify-content: center;  display: block;
         margin-right: auto;
         margin-left: auto; ";  type="submit" value="Update" name="submit" class="btn">
      </form>
   </section>

   <footer class="footer">
      &copy; copyright @ 2022 by <span>NOUR_OTHMAN</span> | all rights reserved!
   </footer>

   <!-- Include your JavaScript file -->
   <script src="js/script.js"></script>
</body>

</html>