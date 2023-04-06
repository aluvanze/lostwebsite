<?php 
session_start();
include "db_conn.php";

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
    $sql = "SELECT * FROM posts";
    $result = mysqli_query($conn, $sql);
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Get the form data
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Prepare the SQL statement
  $sql = "INSERT INTO contact_form (email, message) VALUES ('$email', '$message')";

  // Execute the SQL statement
  if (mysqli_query($conn, $sql)) {
    echo "Message sent successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

 ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
     <!--Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tilt+Neon&display=swap" rel="stylesheet">
    <title>lost hub</title>
</head>
<body>
    
    <header>
        <div class="logo">
            <h1 class="logo-text">LOST<span>ITEMS!!</span></h1>

        </div>
        <i class="fa fa-bars menu-toggle"></i>
        <ul class="nav">
            <li><a href="home.php">Home</a></li>
            
            <li><a href="contact.php">About</a></li>
            <!--<li><a href="login.html">Login</a></li>
            <li><a href="signup.html">Signup</a></li> -->
            <li>
                <a href="home.php">
                    <i class="fa-fa-user"></i>
                    Hello, <?php echo $_SESSION['name']; ?>
                    <i class="fa-fa-chevron-down"></i>
                </a>
                <ul>
                    <li><a href="admin/dashboard.php">Dashboard</a></li>
                    <li><a href="logout.php" class="logout">Logout</a></li> 
                </ul>
            </li>


        </ul>
    </header>
    <!--content-->



<!-- Content -->
    <div class="content clearfix">

      <!-- Main Content -->
      <div class="main-content">
        <h1 class="recent-post-title">SUBMIT A LOST AND FOUND</h1>

        <div class="post clearfix">
          <img src="images/security.jpg" alt="" class="post-image">
          <div class="post-preview">
            <h2><a href="contact.php">If you find an Item that is not yours please Submit to any security office</a></h2>
            <i class="far fa-user"> Security</i>
            &nbsp;
            <i class="far fa-calendar"> Mar 11, 2023</i>
            <p class="preview-text">
              
            </p>
            
          </div>
        </div>

        

      </div>
      <!-- // Main Content -->

    





    </div>
   

      <!-- footer -->
  <div class="footer">
    <div class="footer-content">

      <div class="footer-section about">
        <h1 class="logo-text"><span>Lost</span>Items</h1>
        <p>
          Recover your lost items here ,All hope is not lost
        </p>
        <div class="contact">
          <span><i class="fas fa-phone"></i> &nbsp; 0741 864 664</span>
          <span><i class="fas fa-envelope"></i> &nbsp; info@lostitems.com</span>
        </div>
        <div class="socials">
          <a href="https://www.facebook.com/">F<i class="fab fa-facebook"></i></a>
          <a href="https://www.instagram.com/">I<i class="fab fa-instagram"></i></a>
          <a href="https://twitter.com/">T<i class="fab fa-twitter"></i></a>
          <a href="https://www.youtube.com/">Y<i class="fab fa-youtube"></i></a>
        </div>
      </div>

      <div class="footer-section links">
        <h2>Quick Links</h2>
        <br>
        <ul>
          <a href="#">
            <li>HOME</li>
          </a>
          <a href="#">
            <li>CONTACT US</li>
          </a>
          
        </ul>
      </div>

      <div class="footer-section contact-form">
        <h2>Contact us</h2>
        <br>
        <form action="home.php" method="post">
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
      &copy; aluvanze.
    </div>
  </div>
  <!-- // footer -->
    <!---jquery*/--->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!--Slick-->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
                
    <!---custom script*/--->
    <script src="js/script.js"></script>

</body>
</html>
   
   

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>