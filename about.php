<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

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
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <!--<li><a href="login.html">Login</a></li>
            <li><a href="signup.html">Signup</a></li> -->
            <li>
                <a href="contact.html">
                    <i class="fa-fa-user"></i>
                    Hello, <?php echo $_SESSION['name']; ?>
                    <i class="fa-fa-chevron-down"></i>
                </a>
                <ul>
                    <li><a href="home.html">Dashboard</a></li>
                    <li><a href="logout.php" class="logout">Logout</a></li> 
                </ul>
            </li>


        </ul>
    </header>
    <!--content-->
    


    </div>
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