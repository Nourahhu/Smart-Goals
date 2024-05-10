<?php

session_start();
if (isset($_SESSION['user_photo_path'])) {
    $user_photo_path = $_SESSION['user_photo_path'];
    // Now you can use $user_photo_path wherever you need it
}
if (isset($_SESSION['user_full_name'])) {
   $user_full_name = $_SESSION['user_full_name'];
   
}
else {
   // Handle the case when $_SESSION["user_full_name"] is not set
   $user_full_name = "Unknown";
}

?>


<!DOCTYPE html>
<html lang="en">
<!-- http://localhost/smart_goals%20-%20Copy%20(3)/home.html -->

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" type="image/png" href="images/logo_head.png">
   <title>home</title>
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
         background-color: #fed013;
         /* Yellow background for button */
         color: white;
         border: none;
         padding: 10px 20px;
         border-radius: 4px;
         cursor: pointer;
         width: 100px;

         display: block;
         margin-right: auto;
         margin-left: auto;
         ;
      }

      /* Add hover effect to the submit button */
      input[type="submit"]:hover {
         background-color: HEX #fed013;
         /* Slightly darker yellow on hover */
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


   <section class="home-grid">

      <h1 class="heading">quick options</h1>

      <div class="box-container">

         <!-- <div class="box">
            <h3 class="title">likes and comments</h3>
            <p class="likes">total likes : <span>25</span></p>
            <a href="#" class="inline-btn">view likes</a>
            <p class="likes">total comments : <span>12</span></p>
            <a href="#" class="inline-btn">view comments</a>
            <p class="likes">saved playlists : <span>4</span></p>
            <a href="#" class="inline-btn">view playlists</a>
         </div> -->


         <!-- <div class="box">
            <h3 class="title">top categories</h3>
            <div class="flex">
               <a href="#"><i class="fas fa-code"></i><span>development</span></a>
               <a href="#"><i class="fas fa-chart-simple"></i><span>business</span></a>
               <a href="#"><i class="fas fa-pen"></i><span>design</span></a>
               <a href="#"><i class="fas fa-chart-line"></i><span>marketing</span></a>
               <a href="#"><i class="fas fa-music"></i><span>music</span></a>
               <a href="#"><i class="fas fa-camera"></i><span>photography</span></a>
               <a href="#"><i class="fas fa-cog"></i><span>software</span></a>
               <a href="#"><i class="fas fa-vial"></i><span>science</span></a>
            </div>
         </div> -->

         <div class="box">
            <h3 class="title">popular topics</h3>
            <div class="flex">
               <a href="#"><i class="fab fa-html5"></i><span>HTML</span></a>
               <a href="#"><i class="fab fa-css3"></i><span>CSS</span></a>
               <a href="#"><i class="fab fa-js"></i><span>javascript</span></a>
               <a href="#"><i class="fab fa-react"></i><span>react</span></a>
               <a href="#"><i class="fab fa-php"></i><span>PHP</span></a>
               <a href="#"><i class="fab fa-bootstrap"></i><span>bootstrap</span></a>
            </div>
         </div>

         <div class="box">
            <h3 class="title">become a tutor</h3>
            <p class="tutor">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis, nam?</p>
            <a href="teachers.html" class="inline-btn">get started</a>
         </div>

      </div>

   </section>



   <section class="courses">

      <h1 class="heading">our courses</h1>

      <div class="box-container">
         <div class="box">
            <div class="tutor">
               <img src="images/pic-5.jpg" alt="">
               <div class="info">
                  <h3>john deo</h3>
                  <span>21-10-2022</span>
               </div>
            </div>
            <div class="thumb">
               <img src="images/robot_course.png" alt="">
               <!-- <span>10 Videos</span> -->
            </div>
            <!-- <h3 class="title">complete Boostrap tutorial</h3> -->
            <a href="playlist.php" class="inline-btn">view Matrial</a>
         </div>

         <div class="box">
            <div class="tutor">
               <img src="images/pic-5.jpg" alt="">
               <div class="info">
                  <h3>john deo</h3>
                  <span>21-10-2022</span>
               </div>
            </div>  
            <div class="thumb">
               <img src="images/d_art.jpg" alt="">
               <!-- <span>10 Videos</span> -->
            </div>
            <!-- <h3 class="title">complete Boostrap tutorial</h3> -->
            <a href="playlist.php" class="inline-btn">view Matrial</a>
         </div>


         <div class="box">
            <div class="tutor">
               <img src="images/pic-5.jpg" alt="">
               <div class="info">
                  <h3>john deo</h3>
                  <span>21-10-2022</span>
               </div>
            </div>
            <div class="thumb">
               <img src="images/graphics.jpg" alt="">
               <!-- <span>10 Videos</span> -->
            </div>
            <!-- <h3 class="title">complete Boostrap tutorial</h3> -->
            <a href="playlist.php" class="inline-btn">view Matrial</a>
         </div>


         <div class="box">
            <div class="tutor">
               <img src="images/pic-5.jpg" alt="">
               <div class="info">
                  <h3>john deo</h3>
                  <span>21-10-2022</span>
               </div>
            </div>
            <div class="thumb">
               <img src="images/robot_course.png" alt="">
               <!-- <span>10 Videos</span> -->
            </div>
            <!-- <h3 class="title">complete Boostrap tutorial</h3> -->
            <a href="playlist.php" class="inline-btn">view Matrial</a>
         </div>

      

         <div class="box">
            <div class="tutor">
               <img src="images/pic-5.jpg" alt="">
               <div class="info">
                  <h3>john deo</h3>
                  <span>21-10-2022</span>
               </div>
            </div>
            <div class="thumb">
               <img src="images/robot_course.png" alt="">
               <!-- <span>10 Videos</span> -->
            </div>
            <!-- <h3 class="title">complete Boostrap tutorial</h3> -->
            <a href="playlist.php" class="inline-btn">view Matrial</a>
         </div>

         <div class="box">
            <div class="tutor">
               <img src="images/pic-5.jpg" alt="">
               <div class="info">
                  <h3>john deo</h3>
                  <span>21-10-2022</span>
               </div>
            </div>
            <div class="thumb">
               <img src="images/robot_course.png" alt="">
               <!-- <span>10 Videos</span> -->
            </div>
            <!-- <h3 class="title">complete Boostrap tutorial</h3> -->
            <a href="playlist.php" class="inline-btn">view Matrial</a>
         </div>

         <div class="box">
            <div class="tutor">
               <img src="images/pic-5.jpg" alt="">
               <div class="info">
                  <h3>john deo</h3>
                  <span>21-10-2022</span>
               </div>
            </div>
            <div class="thumb">
               <img src="images/robot_course.png" alt="">
               <!-- <span>10 Videos</span> -->
            </div>
            <!-- <h3 class="title">complete Boostrap tutorial</h3> -->
            <a href="playlist.php" class="inline-btn">view Matrial</a>
         </div>

         <div class="box">
            <div class="tutor">
               <img src="images/pic-5.jpg" alt="">
               <div class="info">
                  <h3>john deo</h3>
                  <span>21-10-2022</span>
               </div>
            </div>
            <div class="thumb">
               <img src="images/robot_course.png" alt="">
               <!-- <span>10 Videos</span> -->
            </div>
            <!-- <h3 class="title">complete Boostrap tutorial</h3> -->
            <a href="playlist.php" class="inline-btn">view Matrial</a>
         </div>

         <div class="box">
            <div class="tutor">
               <img src="images/pic-5.jpg" alt="">
               <div class="info">
                  <h3>john deo</h3>
                  <span>21-10-2022</span>
               </div>
            </div>
            <div class="thumb">
               <img src="images/robot_course.png" alt="">
               <!-- <span>10 Videos</span> -->
            </div>
            <!-- <h3 class="title">complete Boostrap tutorial</h3> -->
            <a href="playlist.php" class="inline-btn">view Matrial</a>
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