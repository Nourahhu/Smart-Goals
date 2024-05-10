
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
   <link rel="icon" type="image/png" href="images/logo_head.png">
   <title>teachers</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
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


<section class="teachers">

   <h1 class="heading">expert teachers</h1>

   <form action="" method="post" class="search-tutor">
      <input type="text" name="search_box" placeholder="search tutors..." required maxlength="100">
      <button type="submit" class="fas fa-search" name="search_tutor"></button>
   </form>

   <div class="box-container">

      <div class="box offer">
         <h3>become a tutor</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, itaque ipsam fuga ex et aliquam.</p>
         <a href="http://localhost/smart_goals%20-%20Copy%20(3)/registration.php" class="inline-btn">get started</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic-2.jpg" alt="">
            <div>
               <h3>john deo</h3>
               <span>developer</span>
            </div>
         </div>
         <p>total playlists : <span>4</span></p>
         <p>total videos : <span>18</span></p>
         <p>total likes : <span>1208</span></p>
         <a href="teacher_profile.php" class="inline-btn">view profile</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic-3.jpg" alt="">
            <div>
               <h3>john deo</h3>
               <span>developer</span>
            </div>
         </div>
         <p>total playlists : <span>4</span></p>
         <p>total videos : <span>18</span></p>
         <p>total likes : <span>1208</span></p>
         <a href="teacher_profile.php" class="inline-btn">view profile</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic-4.jpg" alt="">
            <div>
               <h3>john deo</h3>
               <span>developer</span>
            </div>
         </div>
         <p>total playlists : <span>4</span></p>
         <p>total videos : <span>18</span></p>
         <p>total likes : <span>1208</span></p>
         <a href="teacher_profile.php" class="inline-btn">view profile</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic-5.jpg" alt="">
            <div>
               <h3>john deo</h3>
               <span>developer</span>
            </div>
         </div>
         <p>total playlists : <span>4</span></p>
         <p>total videos : <span>18</span></p>
         <p>total likes : <span>1208</span></p>
         <a href="teacher_profile.php" class="inline-btn">view profile</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic-6.jpg" alt="">
            <div>
               <h3>john deo</h3>
               <span>developer</span>
            </div>
         </div>
         <p>total playlists : <span>4</span></p>
         <p>total videos : <span>18</span></p>
         <p>total likes : <span>1208</span></p>
         <a href="teacher_profile.php" class="inline-btn">view profile</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic-7.jpg" alt="">
            <div>
               <h3>john deo</h3>
               <span>developer</span>
            </div>
         </div>
         <p>total playlists : <span>4</span></p>
         <p>total videos : <span>18</span></p>
         <p>total likes : <span>1208</span></p>
         <a href="teacher_profile.php" class="inline-btn">view profile</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic-8.jpg" alt="">
            <div>
               <h3>john deo</h3>
               <span>developer</span>
            </div>
         </div>
         <p>total playlists : <span>4</span></p>
         <p>total videos : <span>18</span></p>
         <p>total likes : <span>1208</span></p>
         <a href="teacher_profile.php" class="inline-btn">view profile</a>
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