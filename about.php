<?php 

session_start();
if(isset($_SESSION['User']))
{ 
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>SafeBase | About</title>
</head>
<body>
<?php include("header.php"); ?>
    <nav id="navbar">
        <div class="container">
            <ul>
                <li><a href="Home.php">Home</a></li>
                <li><a  class="current" href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li class="logout"><?php echo '<a href="logout.php?logout">Logout</a>'; ?> </li>
                
            </ul>
        </div>
    </nav>

    <section id="about-info">
        <div class="container">
            <div class="clearfix py-3">
                <div class="about-text">
                    <h1 class="l-heading">About <span class="primary-text">Safe</span>Base</h1>
                    <p>This Website created By Mahmood Omer for helping people to Upload Files and keep it as Safe and viewing files , deleting files ,using account with hight security. </p>
                </div>
                <div class="about-image">
                    <img src="./img/27868094_785010391690124_1608394516699307807_n1.jpg" alt="mahmood's image">
                </div>
            </div>
        </div>
    </section>
</body>
</html>

<?php include("footer.php"); ?>

<?php }else{
    header("location:login.php");
}
?>