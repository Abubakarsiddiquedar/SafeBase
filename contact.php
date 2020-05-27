<?php 

session_start();
if(isset($_SESSION['User']))
{
    ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>SafeBase | Contact</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    
</head>
<body>
<?php include("header.php"); ?>
<nav id="navbar">
        <div class="container">
            <ul>
                <li><a href="Home.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a class="current" href="contact.php">Contact Us</a></li>
                <li class="logout"><?php echo '<a href="logout.php?logout">Logout</a>'; ?> </li>
                
            </ul>
        </div>
    </nav>

  <div class="contact-page py-3">
    <div class="container">
        <div class="contact-info">
            <h1 class="l-heading">Contact <span class="primary-text">Us</span></h1>
            <p>Please fill out the form below to contact us</p>
            <form action="" class="contact-form form">
                <div>
                <label for="name">Name</label>
                <input type="text" name="name" id="name">
                </div>
                    <div>
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email">
                    </div>
                    <div>
                        <label for="msg">Message</label>
                    <textarea name="msg" id="msg"></textarea>
                     </div>
                     <button type="submit" class="btn2">Submit</button>
            </form>
        </div>
    </div>
  </div> 

  <div class="contact-page2 py-3">
      <div class="container clearfix">
            <div class="box">
                <i class="fas fa-phone fa-3x"></i>
                <h3>Phone</h3>
                <p>0750 1610585</p>
            </div>
            <div class="box">
                <i class="fas fa-envelope fa-3x"></i>
                <h3>Email</h3>
                <p>mahmood.omer.71@gmail.com</p>
            </div>
            <div class="box">
               <a target="_blank" href="https://www.facebook.com/mahmood.naqshbandy/"> <i class="fab fa-facebook-square fa-3x"></i></a>
                <h3>Facebook</h3>
            </div>
            <div class="box">
               <a target="_blank" href="https://www.instagram.com/mahmood_naqshi/?igshid=ya716vvwd8yl"> <i class="fab fa-instagram-square fa-3x"></i></a>
                <h3>Instagram</h3>
            </div>
      </div>
  </div>
  <?php include("footer.php"); ?>
</body>
</html>
<?php }
else {
    header("location:login.php");
}
?>