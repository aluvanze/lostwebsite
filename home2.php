<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">

  <!-- Custom Styling -->
  <link rel="stylesheet" href="css/style2.css">

  <title>Blog</title>
</head>

<body>
  <header>
    <div class="logo">
      <h1 class="logo-text"><span>ZETECH</span> <span>Information</span> Hub</h1>
    </div>
    <i class="fa fa-bars menu-toggle"></i>
    <ul class="nav">
      <li><a href="#">Home</a></li>
      <li><a href="https://elearning.zetech.ac.ke/">ZDS</a></li>
      <li><a href="https://portal.zetech.ac.ke/">PORTAL</a></li>
      <li><a href="#">Spatial Directory</a></li>
      <!--<li><a href="#">Login</a></li> -->
      <li>
        <a href="#">
          <i class="fa fa-user"></i>
          Hello, <?php echo $_SESSION['name']; ?>
          <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
        </a>
        <ul>
          <li><a href="index.php">Logout</a></li>
          
        </ul>
      </li>
    </ul>
  </header>

  <!-- Page Wrapper -->
  <div class="page-wrapper">

    <!-- Post Slider -->
    <div class="post-slider">
      <h1 class="slider-title">LOST AND FOUND ITEMS</h1>
      <i class="fas fa-chevron-left prev"></i>
      <i class="fas fa-chevron-right next"></i>

      <div class="post-wrapper">

        <div class="post">
          <img src="images/1.jpg" alt="" class="slider-image">
          <div class="post-info">
            <h4><a href="single.html">If this item belongs to you. Please claim it at the security office.
            Please come with your school and country identification card</a></h4>
            <i class="far fa-user"> Awa Melvine</i>
            &nbsp;
            <i class="far fa-calendar"> 9 Sep, 2021</i>
          </div>
        </div>

        <div class="post">
          <img src="images/2.jpg" alt="" class="slider-image">
          <div class="post-info">
            <h4><a href="single.html">One day your life will flash before your eyes</a></h4>
            <i class="far fa-user"> Awa Melvine</i>
            &nbsp;
            <i class="far fa-calendar"> Mar 8, 2019</i>
          </div>
        </div>

        <div class="post">
          <img src="images/3.jpg" alt="" class="slider-image">
          <div class="post-info">
            <h4><a href="single.html">One day your life will flash before your eyes</a></h4>
            <i class="far fa-user"> Security</i>
            &nbsp;
            <i class="far fa-calendar"> Mar 8, 2019</i>
          </div>
        </div>

        <div class="post">
          <img src="images/4.jpg" alt="" class="slider-image">
          <div class="post-info">
            <h4><a href="single.html">One day your life will flash before your eyes</a></h4>
            <i class="far fa-user"> Awa Melvine</i>
            &nbsp;
            <i class="far fa-calendar"> Mar 8, 2019</i>
          </div>
        </div>

        <div class="post">
          <img src="images/image_1.png" alt="" class="slider-image">
          <div class="post-info">
            <h4><a href="single.html">One day your life will flash before your eyes</a></h4>
            <i class="far fa-user"> Awa Melvine</i>
            &nbsp;
            <i class="far fa-calendar"> Mar 8, 2019</i>
          </div>
        </div>


      </div>

    </div>
    <!-- // Post Slider -->

    <!-- Content -->
    <div class="content clearfix">

      <!-- Main Content -->
      <div class="main-content">
        <h1 class="recent-post-title">JOIN A CLUB</h1>

        <div class="post clearfix">
          <img src="images/6.png" alt="" class="post-image">
          <div class="post-preview">
            <h2><a href="single.hmtl">With Humanity , Towards Peace</a></h2>
            <i class="far fa-user"> Farah Bouchman</i>
            &nbsp;
            <i class="far fa-calendar"> Mar 11, 2019</i>
            <p class="preview-text">
              
            </p>
            <a href="single.html" class="btn read-more">Read More</a>
          </div>
        </div>

        <div class="post clearfix">
          <img src="images/zecu.jpg" alt="" class="post-image">
          <div class="post-preview">
            <h2><a href="single.hmtl">Where everbody is somebody</a></h2>
            <i class="far fa-user"> Awa Melvine</i>
            &nbsp;
            <i class="far fa-calendar"> Mar 11, 2019</i>
            <p class="preview-text">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Exercitationem optio possimus a inventore maxime laborum.
            </p>
            <a href="single.html" class="btn read-more">Read More</a>
          </div>
        </div>
        <div class="post clearfix">
          <img src="images/image_3.png" alt="" class="post-image">
          <div class="post-preview">
            <h2><a href="single.hmtl">The strongest and sweetest songs yet remain to be sung</a></h2>
            <i class="far fa-user"> Awa Melvine</i>
            &nbsp;
            <i class="far fa-calendar"> Mar 11, 2019</i>
            <p class="preview-text">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Exercitationem optio possimus a inventore maxime laborum.
            </p>
            <a href="single.html" class="btn read-more">Read More</a>
          </div>
        </div>
        <div class="post clearfix">
          <img src="images/image_3.png" alt="" class="post-image">
          <div class="post-preview">
            <h2><a href="single.hmtl">The strongest and sweetest songs yet remain to be sung</a></h2>
            <i class="far fa-user"> Awa Melvine</i>
            &nbsp;
            <i class="far fa-calendar"> Mar 11, 2019</i>
            <p class="preview-text">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Exercitationem optio possimus a inventore maxime laborum.
            </p>
            <a href="single.html" class="btn read-more">Read More</a>
          </div>
        </div>

      </div>
      <!-- // Main Content -->

      <div class="sidebar">

        <div class="section search">
          <h2 class="section-title">Search</h2>
          <form action="index.html" method="post">
            <input type="text" name="search-term" class="text-input" placeholder="Search...">
          </form>
        </div>


        <div class="section topics">
          <h2 class="section-title">Topics</h2>
          <ul>
            <li><a href="#">Poems</a></li>
            <li><a href="#">Quotes</a></li>
            <li><a href="#">Fiction</a></li>
            <li><a href="#">Biography</a></li>
            <li><a href="#">Motivation</a></li>
            <li><a href="#">Inspiration</a></li>
            <li><a href="#">Life Lessons</a></li>
          </ul>
        </div>

      </div>

    </div>
    <!-- // Content -->

  </div>
  <!-- // Page Wrapper -->

  <!-- footer -->
  <div class="footer">
    <div class="footer-content">

      <div class="footer-section about">
        <h1 class="logo-text"><span>Awa</span>Inspires</h1>
      
        <div class="contact">
          <span><i class="fas fa-phone"></i> &nbsp; 123-456-789</span>
          <span><i class="fas fa-envelope"></i> &nbsp; info@awainspires.com</span>
        </div>
        <div class="socials">
          <a href="#"><i class="fab fa-facebook"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
          <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
        </div>
      </div>

      <div class="footer-section links">
        <h2>Quick Links</h2>
        <br>
        <ul>
          <a href="#">
            <li>Events</li>
          </a>
          <a href="#">
            <li>Team</li>
          </a>
          <a href="#">
            <li>Mentores</li>
          </a>
          <a href="#">
            <li>Gallery</li>
          </a>
          <a href="#">
            <li>Terms and Conditions</li>
          </a>
        </ul>
      </div>

      <div class="footer-section contact-form">
        <h2>Contact us</h2>
        <br>
        <form action="index.html" method="post">
          <input type="email" name="email" class="text-input contact-input" placeholder="Your email address...">
          <textarea rows="4" name="message" class="text-input contact-input" placeholder="Your message..."></textarea>
          <button type="submit" class="btn btn-big contact-btn">
            <i class="fas fa-envelope"></i>
            Send
          </button>
        </form>
      </div>

    </div>

    <div class="footer-bottom">
      &copy; codingpoets.com | Designed by Awa Melvine
    </div>
  </div>
  <!-- // footer -->


  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Slick Carousel -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <!-- Custom Script -->
  <script src="js/scripts.js"></script>

</body>

</html>

    

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>