<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style_home.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
  <link rel="icon" href="D:\College\HTML\new\img\favicon.ico" type="image/x-icon"/>
  <title>Raunak_Harsh</title>
</head>
<body>

	<!-- <h1>This is the index page</h1> -->
	<br>
    Hello, <?php echo $user_data['user_name']; ?>
    <!-- <a href="login.php">Logout</a> -->


  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="#hero"><h1 class="animated infinite rubberBand"><span>R</span>oniter <span>S</span>pace</h1></a>
        </div>
        <div class="nav-list">
          <div class="hamburger"><div class="bar"></div></div>
          <ul>
            <li><a href="index.php" data-after="Home">Home</a></li>
            <li><a href="setcookies.php">Set cookies</a></li>
            <li><a href="showcookies.php">Show cookies</a></li>
            <li><a href="session.php">Session</a></li>
            <li><a href="mailto:raunakharsh2000@gmail.com" data-after="Contact">Email</a></li>
            <li><a href="logout.php">Logout</a>
            <!-- <li><a href="#about" data-after="About">Hire Me</a></li> -->
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->


  <!-- Hero Section  -->
  <section id="hero">
    <div class="hero container">
      <div>
        <h1>Hello, <span></span></h1>
        <h1>My Name is <span></span></h1>
        <h1>RAUNAK <span></span> HARSH</h1>
        <a href="signup1.php" class="cta">sign up</a>
        <a href="login1.php" class="cta2">Sign In</a>
        <h5><span class="change_content"></span></h5>
      </div>
    </div>
  </section>
 
  <!-- End Hero Section  -->
  

  <!-- Service Section -->
  <section id="services">
    <div class="services container">
      <div class="service-top">
        <h1 class="section-title">Pro<span>j</span>ects</h1>
        <p class="section-para">It will be add shortly</p>
      </div>
      <div class="service-bottom">
        <a href="#"><div class="service-item">
          <h2>Eat'O Meals</h2>
        </div>
      </a>
      <a href="#"> <div class="service-item">
          <h2>VIT-Chat</h2>
        </div>
      </a>
        <a href="#"><div class="service-item">
          <h2>BIT-ERP</h2>
        </div>
      </a>
        <a href="#"><div class="service-item">
          <h2>Vehicle Parking System</h2>
        </div>
      </a>
      </div>
    </div>
  </section>
  <!-- End Service Section -->

  

  <!-- About Section -->
  <section id="about">
    <div class="about container">
      <div class="col-left">
        <div class="about-img">
          <img src="./img/1.png" alt="img">
        </div>
      </div>
      <div class="col-right">
        <h1 class="section-title">About <span>me</span></h1>
        <h2>Front End Developer</h2>
        <p>In future</p>
        <a href="D:\College\HTML\Submit\Resume.pdf" class="cta">Download Resume</a>
      </div>
    </div>
  </section>
  <!-- End About Section -->

  <!-- Contact Section -->
  <section id="contact">
    <div class="contact container">
      <div><h1 class="section-title">Contact <span>info</span></h1></div>
      <div class="contact-items">
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png"/></div>
          <div class="contact-info">
            <h1>Phone</h1>
            <h2>7782054441</h2>
            <h2>8987708903</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/new-post.png"/></div>
          <div class="contact-info">
            <h1><a href="mail.html">Email</a></h1>
            <h2>raunakharsh2000@gmail.com</h2>
            <h2>raunakmishra903@@gmail.com</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/map-marker.png"/></div>
          <div class="contact-info">
            <h1>Address</h1>
            <h2>Ranchi,Jharkhand</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Section -->

  <!-- Footer -->
  <section id="footer">
    <div class="footer container">
      <div class="brand"><h1><span>R</span>oniter <span>S</span>pace</h1></div>
      <h2>Your Complete Web Solution</h2>
      <div class="social-icon">
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/fluency/2x/facebook-new.png"/></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/color/2x/instagram-new.png"/></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/color/2x/twitter.png"/></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/color/2x/linkedin-circled.png"/></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/plasticine/2x/github.png"/></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/color/452/skype--v1.png"/></a>
        </div>
        
      </div>
      <p>BY Raunak Harsh,2022</p>
    </div>
  </section>
  <!-- End Footer -->
 
</body>
</html>