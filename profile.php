

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
      <title>profile</title>   
      <style>
          /* Apply styles to the input fields */
          input[type="text"],
          input[type="email"],
          input[type="password"] {
              width: 50%;
              padding: 12px;
              border: 1px solid #ccc;
              border-radius: 4px;
              margin-bottom: 10px;
              box-sizing: border-box;
              display: block;
              margin-right: auto;
              margin-left: auto;
              margin-top: 25px;
          }
   
          /* Style the email input specifically */
        
          /* Style the submit button */
          input[type="submit"] {
              background-color: #fed013; /* Yellow background for button */
              color: white;
              border: none;
              padding: 10px 20px;
              border-radius: 4px;
              cursor: pointer;
              width: 100px;
              
              display: block;
              margin-right: auto;
              margin-left: auto;;
          }
   
          /* Add hover effect to the submit button */
          input[type="submit"]:hover {
              background-color:HEX #fed013; /* Slightly darker yellow on hover */
          }
   
          /* Style the link for already registered users */
          a {
              color: #007bff;
              text-decoration: none;
          }
   
          /* Add some margin to the link */
          a:hover {
              text-decoration: underline;
          }
      </style>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
   
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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
   
<section class="user-profile">

   <h1 class="heading">your profile</h1>

   <div class="info">

      <div class="user">
      <img src="<?php echo $user_photo_path; ?>" class="image" alt="Profile Photo">
   <h3 class="name"><?php echo  $user_full_name; ?></h3>
         
         <a href="update.php" class="inline-btn">update profile</a>
      </div>
   
      <div class="box-container">
   
         <div class="box">
            <div class="flex">
               <i class="fas fa-bookmark"></i>
               <div>
                  <span>4</span>
                  <p>saved playlist</p>
               </div>
            </div>
            <a href="#" class="inline-btn">view playlists</a>
         </div>
   
         <div class="box">
            <div class="flex">
               <i class="fas fa-heart"></i>
               <div>
                  <span>33</span>
                  <p>videos liked</p>
               </div>
            </div>
            <a href="#" class="inline-btn">view liked</a>
         </div>
   
         <div class="box">
            <div class="flex">
               <i class="fas fa-comment"></i>
               <div>
                  <span>12</span>
                  <p>videos comments</p>
               </div>
            </div>
            <a href="#" class="inline-btn">view comments</a>
         </div>
   
      </div>
   </div>

</section>














<footer class="footer">

   &copy; copyright @ 2022 by <span>mr. web designer</span> | all rights reserved!

</footer>

<!-- custom js file link  -->
<script src="js/script.js"></script>

   
</body>
</html>